<?php
/**
 * Copyright 2016 Google Inc.
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

namespace Google\Cloud\Tests\Spanner;

use Google\Cloud\Core\Int64;
use Google\Cloud\Core\LongRunning\LongRunningOperation;
use Google\Cloud\Spanner\Bytes;
use Google\Cloud\Spanner\Configuration;
use Google\Cloud\Spanner\Connection\ConnectionInterface;
use Google\Cloud\Spanner\Database;
use Google\Cloud\Spanner\Date;
use Google\Cloud\Spanner\Duration;
use Google\Cloud\Spanner\Instance;
use Google\Cloud\Spanner\KeyRange;
use Google\Cloud\Spanner\KeySet;
use Google\Cloud\Spanner\Session\SessionClient;
use Google\Cloud\Spanner\SpannerClient;
use Google\Cloud\Spanner\Timestamp;
use Prophecy\Argument;

/**
 * @group spanner
 */
class SpannerClientTest extends \PHPUnit_Framework_TestCase
{
    const PROJECT = 'my-awesome-project';
    const INSTANCE = 'inst';
    const DATABASE = 'db';
    const CONFIG = 'conf';

    private $client;

    public function setUp()
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->client = \Google\Cloud\Dev\stub(SpannerClient::class, [
            ['projectId' => self::PROJECT]
        ]);
    }

    /**
     * @group spanneradmin
     */
    public function testConfigurations()
    {
        $this->connection->listConfigs(Argument::any())
            ->shouldBeCalled()
            ->willReturn([
                'instanceConfigs' => [
                    [
                        'name' => 'projects/'. self::PROJECT .'/instanceConfigs/'. self::CONFIG,
                        'displayName' => 'Bar'
                    ], [
                        'name' => 'projects/'. self::PROJECT .'/instanceConfigs/'. self::CONFIG,
                        'displayName' => 'Bat'
                    ]
                ]
            ]);

        $this->client->___setProperty('connection', $this->connection->reveal());

        $configs = $this->client->configurations();

        $this->assertInstanceOf(\Generator::class, $configs);

        $configs = iterator_to_array($configs);
        $this->assertEquals(2, count($configs));
        $this->assertInstanceOf(Configuration::class, $configs[0]);
        $this->assertInstanceOf(Configuration::class, $configs[1]);
    }

    /**
     * @group spanneradmin
     */
    public function testPagedConfigurations()
    {
        $firstCall = [
            'instanceConfigs' => [
                [
                    'name' => 'projects/foo/instanceConfigs/bar',
                    'displayName' => 'Bar'
                ]
            ],
            'nextPageToken' => 'fooBar'
        ];

        $secondCall = [
            'instanceConfigs' => [
                [
                    'name' => 'projects/foo/instanceConfigs/bat',
                    'displayName' => 'Bat'
                ]
            ]
        ];

        $this->connection->listConfigs(Argument::any())
            ->shouldBeCalledTimes(2)
            ->willReturn($firstCall, $secondCall);

        $this->client->___setProperty('connection', $this->connection->reveal());

        $configs = $this->client->configurations();

        $this->assertInstanceOf(\Generator::class, $configs);

        $configs = iterator_to_array($configs);
        $this->assertEquals(2, count($configs));
        $this->assertInstanceOf(Configuration::class, $configs[0]);
        $this->assertInstanceOf(Configuration::class, $configs[1]);
    }

    /**
     * @group spanneradmin
     */
    public function testConfiguration()
    {
        $config = $this->client->configuration('bar');

        $this->assertInstanceOf(Configuration::class, $config);
        $this->assertEquals('bar', $config->name());
    }

    /**
     * @group spanneradmin
     */
    public function testCreateInstance()
    {
        $this->connection->createInstance(Argument::that(function ($arg) {
            if ($arg['name'] !== 'projects/'. self::PROJECT .'/instances/'. self::INSTANCE) return false;
            if ($arg['config'] !== 'projects/'. self::PROJECT .'/instanceConfigs/'. self::CONFIG) return false;

            return true;
        }))
            ->shouldBeCalled()
            ->willReturn([
                'name' => 'operations/foo'
            ]);

        $this->client->___setProperty('connection', $this->connection->reveal());

        $config = $this->prophesize(Configuration::class);
        $config->name()->willReturn(self::CONFIG);

        $operation = $this->client->createInstance($config->reveal(), self::INSTANCE);

        $this->assertInstanceOf(LongRunningOperation::class, $operation);
    }

    /**
     * @group spanneradmin
     */
    public function testInstance()
    {
        $i = $this->client->instance('foo');
        $this->assertInstanceOf(Instance::class, $i);
        $this->assertEquals('foo', $i->name());
    }

    /**
     * @group spanneradmin
     */
    public function testInstanceWithInstanceArray()
    {
        $i = $this->client->instance('foo', ['key' => 'val']);
        $this->assertEquals('val', $i->info()['key']);
    }

    /**
     * @group spanneradmin
     */
    public function testInstances()
    {
        $this->connection->listInstances(Argument::any())
            ->shouldBeCalled()
            ->willReturn([
                'instances' => [
                    ['name' => 'projects/test-project/instances/foo'],
                    ['name' => 'projects/test-project/instances/bar'],
                ]
            ]);

        $this->client->___setProperty('connection', $this->connection->reveal());

        $instances = $this->client->instances();
        $this->assertInstanceOf(\Generator::class, $instances);

        $instances = iterator_to_array($instances);
        $this->assertEquals(2, count($instances));
        $this->assertEquals('foo', $instances[0]->name());
        $this->assertEquals('bar', $instances[1]->name());
    }

    /**
     * @group spanneradmin
     */
    public function testResumeOperation()
    {
        $opName = 'operations/foo';

        $op = $this->client->resumeOperation($opName);
        $this->assertInstanceOf(LongRunningOperation::class, $op);
        $this->assertEquals($op->name(), $opName);
    }

    public function testConnect()
    {
        $database = $this->client->connect(self::INSTANCE, self::DATABASE);
        $this->assertInstanceOf(Database::class, $database);
        $this->assertEquals(self::DATABASE, $database->name());
    }

    public function testConnectWithInstance()
    {
        $inst = $this->client->instance(self::INSTANCE);
        $database = $this->client->connect($inst, self::DATABASE);
        $this->assertInstanceOf(Database::class, $database);
        $this->assertEquals(self::DATABASE, $database->name());
    }

    public function testKeyset()
    {
        $ks = $this->client->keySet();
        $this->assertInstanceOf(KeySet::class, $ks);
    }

    public function testKeyRange()
    {
        $kr = $this->client->keyRange();
        $this->assertInstanceOf(KeyRange::class, $kr);
    }

    public function testBytes()
    {
        $b = $this->client->bytes('foo');
        $this->assertInstanceOf(Bytes::class, $b);
        $this->assertEquals(base64_encode('foo'), (string)$b);
    }

    public function testDate()
    {
        $d = $this->client->date(new \DateTime);
        $this->assertInstanceOf(Date::class, $d);
    }

    public function testTimestamp()
    {
        $ts = $this->client->timestamp(new \DateTime);
        $this->assertInstanceOf(Timestamp::class, $ts);
    }

    public function testInt64()
    {
        $i64 = $this->client->int64('123');
        $this->assertInstanceOf(Int64::class, $i64);
    }

    public function testDuration()
    {
        $d = $this->client->duration(10, 1);
        $this->assertInstanceOf(Duration::class, $d);
    }

    public function testSessionClient()
    {
        $sc = $this->client->sessionClient();
        $this->assertInstanceOf(SessionClient::class, $sc);
    }
}
