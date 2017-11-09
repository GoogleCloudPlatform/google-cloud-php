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

namespace Google\Cloud\Tests\Unit\Datastore;

use Prophecy\Argument;
use Google\Cloud\Datastore\Key;
use Google\Cloud\Datastore\Entity;
use Google\Cloud\Datastore\Operation;
use Google\Cloud\Datastore\Transaction;
use Google\Cloud\Datastore\Query\QueryInterface;

/**
 * @group datastore
 */
class TransactionTest extends \PHPUnit_Framework_TestCase
{
    private $operation;
    private $transaction;

    private $transactionId = 'transaction';

    public function setUp()
    {
        $this->operation = $this->prophesize(Operation::class);
        $this->transaction = \Google\Cloud\Dev\stub(Transaction::class, [
            $this->operation->reveal(),
            'foo',
            $this->transactionId
        ], ['operation']);
    }

    public function testInsert()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('insert'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->operation->allocateIdsToEntities(Argument::type('array'))
            ->willReturn([$e->reveal()]);

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->insert($e->reveal());
    }

    public function testInsertBatch()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('insert'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->operation->allocateIdsToEntities(Argument::type('array'))
            ->willReturn([$e->reveal()]);

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->insertBatch([$e->reveal()]);
    }

    public function testUpdate()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('update'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->operation->checkOverwrite(Argument::type('array'), Argument::exact(false))->willReturn(null);

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->update($e->reveal());
    }

    public function testUpdateBatch()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('update'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->operation->checkOverwrite(Argument::type('array'), Argument::exact(false))->willReturn(null);

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->updateBatch([$e->reveal()]);
    }

    public function testUpsert()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('upsert'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->upsert($e->reveal());
    }

    public function testUpsertBatch()
    {
        $e = $this->prophesize(Entity::class);

        $this->operation->mutation(Argument::exact('upsert'), Argument::type(Entity::class), Argument::exact(Entity::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->upsertBatch([$e->reveal()]);
    }

    public function testDelete()
    {
        $k = $this->prophesize(Key::class);

        $this->operation->mutation(Argument::exact('delete'), Argument::type(Key::class), Argument::exact(Key::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->delete($k->reveal());
    }

    public function testDeleteBatch()
    {
        $k = $this->prophesize(Key::class);

        $this->operation->mutation(Argument::exact('delete'), Argument::type(Key::class), Argument::exact(Key::class, null))
            ->shouldBeCalled()->willReturn(null);

        $this->operation->commit()->shouldNotBeCalled();


        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->deleteBatch([$k->reveal()]);
    }

    public function testCommit()
    {
        $this->operation->commit(Argument::type('array'), Argument::that(function ($arg) {
            if ($arg['transaction'] !== $this->transactionId) return false;
        }));

        $this->transaction->___setProperty('operation', $this->operation->reveal());

        $this->transaction->commit();
    }
}
