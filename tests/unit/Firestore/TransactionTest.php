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

namespace Google\Cloud\Tests\Unit\Firestore;

use Prophecy\Argument;
use Google\Cloud\Firestore\Transaction;
use Google\Cloud\Firestore\ValueMapper;
use Google\Cloud\Firestore\DocumentSnapshot;
use Google\Cloud\Firestore\DocumentReference;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * @group firestore
 * @group firestore-transaction
 */
class TransactionTest extends \PHPUnit_Framework_TestCase
{
    const PROJECT = 'example_project';
    const DATABASE = '(default)';
    const DOCUMENT = 'projects/example_project/databases/(default)/documents/a/b';
    const TRANSACTION = 'foobar';

    private $connection;
    private $transaction;
    private $reference;

    public function setUp()
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->transaction = \Google\Cloud\Dev\stub(Transaction::class, [
            $this->connection->reveal(),
            new ValueMapper($this->connection->reveal(), false),
            sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE),
            self::TRANSACTION
        ]);

        $this->ref = $this->prophesize(DocumentReference::class);
        $this->ref->name()->willReturn(self::DOCUMENT);
    }

    public function testSnapshot()
    {
        $this->connection->batchGetDocuments([
            'database' => sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE),
            'documents' => [self::DOCUMENT],
            'transaction' => self::TRANSACTION
        ])->shouldBeCalled()->willReturn([
            ['found' => [
                'name' => self::DOCUMENT,
                'fields' => [
                    'hello' => [
                        'stringValue' => 'world'
                    ]
                ]
            ]]
        ]);

        $this->transaction->___setProperty('connection', $this->connection->reveal());

        $res = $this->transaction->snapshot($this->ref->reveal());
        $this->assertInstanceOf(DocumentSnapshot::class, $res);
        $this->assertEquals(self::DOCUMENT, $res->name());
        $this->assertEquals('world', $res['hello']);
    }

    /**
     * @expectedException Google\Cloud\Core\Exception\NotFoundException
     */
    public function testSnapshotNotFound()
    {
        $this->connection->batchGetDocuments([
            'database' => sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE),
            'documents' => [self::DOCUMENT],
            'transaction' => self::TRANSACTION
        ])->shouldBeCalled()->willReturn([
            ['missing' => self::DOCUMENT]
        ]);

        $this->transaction->___setProperty('connection', $this->connection->reveal());

        $res = $this->transaction->snapshot($this->ref->reveal());
    }

    public function testCreate()
    {
        $this->transaction->create($this->ref->reveal(), [
            'hello' => 'world'
        ]);

        $this->expectAndInvoke([
            [
                'updateMask' => ['hello'],
                'currentDocument' => ['exists' => false],
                'update' => [
                    'name' => self::DOCUMENT,
                    'fields' => ['hello' => ['stringValue' => 'world']]
                ]
            ]
        ]);
    }

    public function testSet()
    {
        $this->transaction->set($this->ref->reveal(), [
            'hello' => 'world'
        ]);

        $this->expectAndInvoke([
            [
                'update' => [
                    'name' => self::DOCUMENT,
                    'fields' => ['hello' => ['stringValue' => 'world']]
                ]
            ]
        ]);
    }

    public function testSetMerge()
    {
        $this->transaction->set($this->ref->reveal(), [
            'hello' => 'world'
        ], ['merge' => true]);

        $this->expectAndInvoke([
            [
                'updateMask' => ['hello'],
                'update' => [
                    'name' => self::DOCUMENT,
                    'fields' => ['hello' => ['stringValue' => 'world']]
                ]
            ]
        ]);
    }

    public function testUpdate()
    {
        $this->transaction->update($this->ref->reveal(), [
            'hello' => 'world'
        ]);

        $this->expectAndInvoke([
            [
                'currentDocument' => ['exists' => true],
                'updateMask' => ['hello'],
                'update' => [
                    'name' => self::DOCUMENT,
                    'fields' => ['hello' => ['stringValue' => 'world']]
                ]
            ]
        ]);
    }

    public function testDelete()
    {
        $this->transaction->delete($this->ref->reveal());

        $this->expectAndInvoke([
            [
                'delete' => self::DOCUMENT
            ]
        ]);
    }

    private function expectAndInvoke(array $writes)
    {
        $this->connection->commit([
            'database' => sprintf('projects/%s/databases/%s', self::PROJECT, self::DATABASE),
            'writes' => $writes,
            'transaction' => self::TRANSACTION
        ])->shouldBeCalled();
        $this->transaction->___setProperty('connection', $this->connection->reveal());
        $this->transaction->writer()->commit();
    }
}
