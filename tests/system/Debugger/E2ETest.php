<?php
/**
 * Copyright 2018 Google Inc.
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

namespace Google\Cloud\Tests\System\Debugger;

use Google\Cloud\Debugger\V2\Gapic\Debugger2GapicClient as GapicClient;
use Google\Cloud\Debugger\V2\Breakpoint;
use Google\Cloud\Debugger\V2\SourceLocation;
use Google\Cloud\TestUtils\EventuallyConsistentTestTrait;
use Google\Cloud\TestUtils\AppEngineDeploymentTrait;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

/**
 * The test deploys the sample app contained in the app folder to Google App
 * Engine Flexible Environment. Before deployment, we generate a composer.json
 * that uses the current branch of google/cloud to test against.
 *
 * Each test sets a breakpoint, ensures that the app has seen the breakpoint,
 * then makes a request to the app that should trigger the breakpoint. We then
 * ensure that the breakpoint has been fulfilled.
 *
 * @group debugger
 * @group e2e
 */
class E2ETest extends TestCase
{
    protected static $debuggeeId;
    protected static $httpClient;

    use AppEngineDeploymentTrait;
    use EventuallyConsistentTestTrait;

    public static function beforeDeploy()
    {
        self::createComposerJson();
        self::$gcloudWrapper->setDir(implode(DIRECTORY_SEPARATOR, [__DIR__, 'app']));
    }

    public static function afterDeploy()
    {
        $url = self::$gcloudWrapper->getBaseUrl();
        self::$httpClient = new Client(['base_uri' => $url]);

        $resp = self::$httpClient->get('/debuggee');
        $data = json_decode($resp->getBody()->getContents(), true);
        self::$debuggeeId = $data['debuggeeId'];
    }

    public static function tearDownAfterClass()
    {
        self::deleteApp();
    }

    public static function getBranch()
    {
        $branch = getenv('TRAVIS_BRANCH') ?: getenv('BRANCH');
        if ($branch === false) {
            self::fail('Please set the BRANCH env var.');
        }
        return $branch;
    }

    public static function getRepo()
    {
        return getenv('TRAVIS_REPO_SLUG')
            ?: getenv('REPO_SLUG')
            ?: 'GoogleCloudPlatform/google-cloud-php';
    }

    public static function createComposerJson()
    {
        $data = [
            'name' => 'google/debugger-test-app',
            'type' => 'project',
            'require' => [
                'php' => '^7.0',
                'silex/silex' => '~2.0',
                'google/cloud' => 'dev-' . self::getBranch(),
                'ext-stackdriver_debugger' => '*'
            ],
            'repositories' => [
                [
                    'type' => 'git',
                    'url' => 'https://github.com/' . self::getRepo()
                ]
            ]
        ];
        $file = implode(DIRECTORY_SEPARATOR, [__DIR__, 'app', 'composer.json']);
        file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }

    public function testWithFullPath()
    {
        $this->setBreakpoint('web/app.php', 13);

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(1);
        });

        $resp = self::$httpClient->get('hello/full');
        $this->assertEquals('200', $resp->getStatusCode(), 'hello/full status code');
        $this->assertContains('Hello, full', $resp->getBody()->getContents());

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(0);
        });
    }

    private function assertBreakpointCount($count)
    {
        $resp = self::$httpClient->get('/debuggee');
        $data = json_decode($resp->getBody()->getContents(), true);
        $this->assertEquals($count, (int) $data['numBreakpoints']);
    }

    public function testWithExtraPath()
    {
        $this->setBreakpoint('/extra/web/app.php', 13);

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(1);
        });

        $resp = self::$httpClient->get('hello/extra');
        $this->assertEquals('200', $resp->getStatusCode(), 'hello/extra status code');
        $this->assertContains('Hello, extra', $resp->getBody()->getContents());

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(0);
        });
    }

    public function testWithMissingPath()
    {
        $this->setBreakpoint('app.php', 13);

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(1);
        });

        $resp = self::$httpClient->get('hello/missing');
        $this->assertEquals('200', $resp->getStatusCode(), 'hello/missing status code');
        $this->assertContains('Hello, missing', $resp->getBody()->getContents());

        $this->runEventuallyConsistentTest(function () {
            $this->assertBreakpointCount(0);
        });
    }

    private function setBreakpoint($file, $line)
    {
        // Set a breakpoint
        $client = new GapicClient();
        $breakpoint = new Breakpoint();
        $location = new SourceLocation();
        $location->setPath($file);
        $location->setLine($line);
        $breakpoint->setLocation($location);
        $resp = $client->setBreakpoint(self::$debuggeeId, $breakpoint, 'google.com/php/v0.1');
        $bp = $resp->getBreakpoint();
        $this->assertNotEmpty($bp->getId());
    }
}
