<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Tests\System\Core\Batch;

use Google\Cloud\Core\Batch\BatchRunner;

/**
 * @group core
 * @group batch
 *
 * If SystemV IPC extensions are available, it'll spawn the BatchDaemon for
 * this system test. You can run the tests with the im-memory implementation
 * by setting `GOOGLE_CLOUD_PHP_TESTS_WITHOUT_DAEMON` environment variable.
 */
class BatchRunnerTest extends \PHPUnit_Framework_TestCase
{
    private $items;
    private $runner;

    private static $daemon;
    private static $targetFile;
    private static $commandFile;
    private static $testDir;

    public static function delTree($dir)
    {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            $target = "$dir/$file";
            (is_dir($target)) ? self::delTree($target) : unlink($target);
        }
        return rmdir($dir);
    }

    public static function setUpBeforeClass()
    {
        self::$testDir = sprintf(
            '%s/google-cloud-system-test-%d',
            sys_get_temp_dir(),
            getmypid()
        );
        putenv('GOOGLE_CLOUD_BATCH_DAEMON_FAILURE_DIR=' . self::$testDir);
        $daemon_executable = __DIR__
            . '/../../../../bin/google-cloud-batch-daemon';
        self::$commandFile = tempnam(
            sys_get_temp_dir(),
            'batch-daemon-system-test'
        );
        self::$targetFile = tempnam(
            sys_get_temp_dir(),
            'batch-daemon-system-test'
        );
        $run_daemon = getenv('GOOGLE_CLOUD_PHP_TESTS_WITHOUT_DAEMON') === false;
        if (extension_loaded('sysvmsg')
            && extension_loaded('sysvsem')
            && extension_loaded('sysvshm') && $run_daemon) {
            $descriptorSpec = array(
                0 => array('file', 'php://stdin', 'r'),
                1 => array('file', 'php://stdout', 'w'),
                1 => array('file', 'php://stderr', 'w')
            );
            self::$daemon = proc_open(
                $daemon_executable,
                $descriptorSpec,
                $pipes
            );
            putenv('IS_BATCH_DAEMON_RUNNING=true');
        }
    }

    public static function tearDownAfterClass()
    {
        @proc_terminate(self::$daemon);
        @proc_close(self::$daemon);
        @unlink(self::$targetFile);
        @unlink(self::$commandFile);
        self::delTree(self::$testDir);
        putenv('GOOGLE_CLOUD_BATCH_DAEMON_FAILURE_DIR');
        putenv('IS_BATCH_DAEMON_RUNNING');
    }

    public function setup()
    {
        $this->runner = new BatchRunner();
        $myJob = new MyJob(self::$commandFile, self::$targetFile);
        $this->runner->registerjob(
            'batch-daemon-system-test',
            array($myJob, 'runJob'),
            array(
                'workerNum' => 1,
                'batchSize' => 2,
                'callPeriod' => 2,
            )
        );
    }

    public function testSubmit()
    {
        $this->runner->submitItem('batch-daemon-system-test', 'apple');
        $result = file_get_contents(self::$targetFile);
        $this->assertEmpty($result);
        $this->runner->submitItem('batch-daemon-system-test', 'orange');
        sleep(1);
        $result = file_get_contents(self::$targetFile);
        $this->assertContains('APPLE', $result);
        $this->assertContains('ORANGE', $result);

        // Failure simulation
        file_put_contents(self::$commandFile, 'fail');

        $this->runner->submitItem('batch-daemon-system-test', 'banana');
        $this->runner->submitItem('batch-daemon-system-test', 'lemon');
        sleep(1);
        $result = file_get_contents(self::$targetFile);
        $this->assertNotContains('BANANA', $result);
        $this->assertNotContains('LEMON', $result);

        // Retry simulation
        unlink(self::$commandFile);
        $retry_executable = __DIR__
            . '/../../../../bin/google-cloud-batch-retry';
        exec($retry_executable);
        sleep(1);
        $result = file_get_contents(self::$targetFile);
        $this->assertContains('BANANA', $result);
        $this->assertContains('LEMON', $result);
    }
}
