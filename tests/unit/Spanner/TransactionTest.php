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

use Google\Cloud\Spanner\Connection\ConnectionInterface;
use Google\Cloud\Spanner\Instance;
use Google\Cloud\Spanner\KeySet;
use Google\Cloud\Spanner\Operation;
use Google\Cloud\Spanner\Result;
use Google\Cloud\Spanner\Session\Session;
use Google\Cloud\Spanner\Session\SessionPoolInterface;
use Google\Cloud\Spanner\Timestamp;
use Google\Cloud\Spanner\Transaction;
use Google\Cloud\Spanner\ValueMapper;
use Prophecy\Argument;

/**
 * @group spanner
 */
class TransactionTest extends \PHPUnit_Framework_TestCase
{
    const TIMESTAMP = '2017-01-09T18:05:22.534799Z';

    const PROJECT = 'my-awesome-project';
    const DATABASE = 'my-database';
    const INSTANCE = 'my-instance';
    const SESSION = 'my-session';
    const TRANSACTION = 'my-transaction';

    private $connection;
    private $instance;
    private $session;
    private $database;

    public function setUp()
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->operation = new Operation($this->connection->reveal(), false);

        $this->session = new Session(
            $this->connection->reveal(),
            self::PROJECT,
            self::INSTANCE,
            self::DATABASE,
            self::SESSION
        );

        $args = [
            $this->operation,
            $this->session,
            SessionPoolInterface::CONTEXT_READWRITE,
            self::TRANSACTION,
        ];

        $props = [
            'operation', 'readTimestamp', 'context'
        ];

        $this->transaction = \Google\Cloud\Dev\stub(Transaction::class, $args, $props);
    }

    public function testInsert()
    {
        $this->transaction->insert('Posts', ['foo' => 'bar']);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['insert']['table']);
        $this->assertEquals('foo', $mutations[0]['insert']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['insert']['values'][0]);
    }

    public function testInsertBatch()
    {
        $this->transaction->insertBatch('Posts', [['foo' => 'bar']]);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['insert']['table']);
        $this->assertEquals('foo', $mutations[0]['insert']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['insert']['values'][0]);
    }

    public function testUpdate()
    {
        $this->transaction->update('Posts', ['foo' => 'bar']);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['update']['table']);
        $this->assertEquals('foo', $mutations[0]['update']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['update']['values'][0]);
    }

    public function testUpdateBatch()
    {
        $this->transaction->updateBatch('Posts', [['foo' => 'bar']]);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['update']['table']);
        $this->assertEquals('foo', $mutations[0]['update']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['update']['values'][0]);
    }

    public function testInsertOrUpdate()
    {
        $this->transaction->insertOrUpdate('Posts', ['foo' => 'bar']);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['insertOrUpdate']['table']);
        $this->assertEquals('foo', $mutations[0]['insertOrUpdate']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['insertOrUpdate']['values'][0]);
    }

    public function testInsertOrUpdateBatch()
    {
        $this->transaction->insertOrUpdateBatch('Posts', [['foo' => 'bar']]);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['insertOrUpdate']['table']);
        $this->assertEquals('foo', $mutations[0]['insertOrUpdate']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['insertOrUpdate']['values'][0]);
    }

    public function testReplace()
    {
        $this->transaction->replace('Posts', ['foo' => 'bar']);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['replace']['table']);
        $this->assertEquals('foo', $mutations[0]['replace']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['replace']['values'][0]);
    }

    public function testReplaceBatch()
    {
        $this->transaction->replaceBatch('Posts', [['foo' => 'bar']]);

        $mutations = $this->transaction->___getProperty('mutations');

        $this->assertEquals('Posts', $mutations[0]['replace']['table']);
        $this->assertEquals('foo', $mutations[0]['replace']['columns'][0]);
        $this->assertEquals('bar', $mutations[0]['replace']['values'][0]);
    }

    public function testDelete()
    {
        $this->transaction->delete('Posts', new KeySet(['keys' => ['foo']]));

        $mutations = $this->transaction->___getProperty('mutations');
        $this->assertEquals('Posts', $mutations[0]['delete']['table']);
        $this->assertEquals('foo', $mutations[0]['delete']['keySet']['keys'][0]);
        $this->assertFalse($mutations[0]['delete']['keySet']['all']);
    }

    public function testExecute()
    {
        $sql = 'SELECT * FROM Table';

        $this->connection->executeSql(Argument::that(function ($arg) use ($sql) {
            if ($arg['transactionId'] !== self::TRANSACTION) return false;
            if ($arg['sql'] !== $sql) return false;

            return true;
        }))->shouldBeCalled()->willReturn([
            'metadata' => [
                'rowType' => [
                    'fields' => [
                        [
                            'name' => 'ID',
                            'type' => [
                                'code' => ValueMapper::TYPE_INT64
                            ]
                        ]
                    ]
                ]
            ],
            'rows' => [
                [
                    '10'
                ]
            ]
        ]);

        $this->refreshOperation();

        $res = $this->transaction->execute($sql);
        $this->assertInstanceOf(Result::class, $res);
        $this->assertEquals(10, $res->rows()[0]['ID']);
    }

    public function testRead()
    {
        $table = 'Table';
        $opts = ['foo' => 'bar'];

        $this->connection->read(Argument::that(function ($arg) use ($table, $opts) {
            if ($arg['transactionId'] !== self::TRANSACTION) return false;
            if ($arg['table'] !== $table) return false;
            if ($arg['foo'] !== $opts['foo']) return false;

            return true;
        }))->shouldBeCalled()->willReturn([
            'metadata' => [
                'rowType' => [
                    'fields' => [
                        [
                            'name' => 'ID',
                            'type' => [
                                'code' => ValueMapper::TYPE_INT64
                            ]
                        ]
                    ]
                ]
            ],
            'rows' => [
                [
                    '10'
                ]
            ]
        ]);

        $this->refreshOperation();

        $res = $this->transaction->read($table, $opts);
        $this->assertInstanceOf(Result::class, $res);
        $this->assertEquals(10, $res->rows()[0]['ID']);
    }

    public function testCommit()
    {
        $this->transaction->insert('Posts', ['foo' => 'bar']);

        $mutations = $this->transaction->___getProperty('mutations');

        $operation = $this->prophesize(Operation::class);
        $operation->commit($this->session, $mutations, ['transactionId' => self::TRANSACTION])->shouldBeCalled();

        $this->transaction->___setProperty('operation', $operation->reveal());

        $this->transaction->commit();
    }

    /**
     * @expectedException RuntimeException
     */
    public function testCommitInvalidContext()
    {
        $this->transaction->___setProperty('context', SessionPoolInterface::CONTEXT_READ);
        $this->transaction->commit();
    }

    /**
     * @expectedException RuntimeException
     */
    public function testEnqueueInvalidContext()
    {
        $this->transaction->___setProperty('context', SessionPoolInterface::CONTEXT_READ);
        $this->transaction->insert('Posts', []);
    }

    public function testRollback()
    {
        $this->connection->rollback(Argument::any())
            ->shouldBeCalled();

        $this->refreshOperation();

        $this->transaction->rollback();
    }

    public function testReadTimestamp()
    {
        $this->transaction->___setProperty('context', SessionPoolInterface::CONTEXT_READ);
        $this->transaction->___setProperty('readTimestamp', new Timestamp(new \DateTimeImmutable(self::TIMESTAMP)));

        $ts = $this->transaction->readTimestamp();

        $this->assertInstanceOf(Timestamp::class, $ts);
    }

    public function testId()
    {
        $this->assertEquals(self::TRANSACTION, $this->transaction->id());
    }

    public function testContext()
    {
        $this->assertEquals(SessionPoolInterface::CONTEXT_READWRITE, $this->transaction->context());
    }

    // *******
    // Helpers

    private function refreshOperation()
    {
        $operation = new Operation($this->connection->reveal(), false);
        $this->transaction->___setProperty('operation', $operation);
    }

    private function commitResponse()
    {
        return ['commitTimestamp' => self::TIMESTAMP];
    }

    private function assertTimestampIsCorrect($res)
    {
        $ts = new \DateTimeImmutable($this->commitResponse()['commitTimestamp']);

        $this->assertEquals($ts->format('Y-m-d\TH:i:s\Z'), $res->get()->format('Y-m-d\TH:i:s\Z'));
    }
}
