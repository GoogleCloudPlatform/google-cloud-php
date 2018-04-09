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

namespace Google\Cloud\Spanner\Tests\Unit;

use Google\Cloud\Core\Testing\GrpcTestTrait;
use Google\Cloud\Spanner\Duration;
use Google\Cloud\Spanner\Session\SessionPoolInterface;
use Google\Cloud\Spanner\Timestamp;
use Google\Cloud\Spanner\TransactionConfigurationTrait;
use PHPUnit\Framework\TestCase;

/**
 * @group spanner
 * @group spanner-transaction-configuration-trait
 */
class TransactionConfigurationTraitTest extends TestCase
{
    use GrpcTestTrait;

    const TRANSACTION = 'my-transaction';

    private $impl;
    private $ts;
    private $duration;
    private $dur = [];

    public function setUp()
    {
        $this->checkAndSkipGrpcTests();

        $this->impl = new TransactionConfigurationTraitImplementation;
        $this->duration = new Duration(10, 1);
        $this->dur = ['seconds' => 10, 'nanos' => 1];
    }

    public function testTransactionSelectorBasicSnapshot()
    {
        $args = [];
        $res = $this->impl->proxyTransactionSelector($args);
        $this->assertEquals(SessionPoolInterface::CONTEXT_READ, $res[1]);
        $this->assertEquals($res[0]['singleUse']['readOnly'], ['strong' => true]);
    }

    public function testTransactionSelectorExistingId()
    {
        $args = ['transactionId' => self::TRANSACTION];
        $res = $this->impl->proxyTransactionSelector($args);
        $this->assertEquals(SessionPoolInterface::CONTEXT_READ, $res[1]);
        $this->assertEquals(self::TRANSACTION, $res[0]['id']);
    }

    public function testTransactionSelectorReadWrite()
    {
        $args = ['transactionType' => SessionPoolInterface::CONTEXT_READWRITE];
        $res = $this->impl->proxyTransactionSelector($args);
        $this->assertEquals(SessionPoolInterface::CONTEXT_READWRITE, $res[1]);
        $this->assertEquals($this->impl->proxyConfigureTransactionOptions(), $res[0]['singleUse']);
    }

    public function testTransactionSelectorReadOnly()
    {
        $args = ['transactionType' => SessionPoolInterface::CONTEXT_READ];
        $res = $this->impl->proxyTransactionSelector($args);
        $this->assertEquals(SessionPoolInterface::CONTEXT_READ, $res[1]);
    }

    public function testBegin()
    {
        $args = ['begin' => true];
        $res = $this->impl->proxyTransactionSelector($args);
        $this->assertEquals(SessionPoolInterface::CONTEXT_READ, $res[1]);
        $this->assertEquals($res[0]['begin']['readOnly'], ['strong' => true]);
    }

    public function testConfigureSnapshotOptionsReturnReadTimestamp()
    {
        $args = ['returnReadTimestamp' => true];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertTrue($res['readOnly']['returnReadTimestamp']);
    }

    public function testConfigureSnapshotOptionsStrong()
    {
        $args = ['strong' => true];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertTrue($res['readOnly']['strong']);
    }

    /**
     * @dataProvider timestamps
     */
    public function testConfigureSnapshotOptionsMinReadTimestamp($timestamp, $expected = null)
    {
        $ts = Timestamp::createFromString($timestamp);
        $args = ['minReadTimestamp' => $ts, 'singleUse' => true];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertEquals($expected ?: $timestamp, $res['readOnly']['minReadTimestamp']);
    }

    /**
     * @dataProvider timestamps
     */
    public function testConfigureSnapshotOptionsReadTimestamp($timestamp, $expected = null)
    {
        $ts = Timestamp::createFromString($timestamp);
        $args = ['readTimestamp' => $ts];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertEquals($expected ?: $timestamp, $res['readOnly']['readTimestamp']);
    }

    public function testConfigureSnapshotOptionsMaxStaleness()
    {
        $args = ['maxStaleness' => $this->duration, 'singleUse' => true];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertEquals($this->dur, $res['readOnly']['maxStaleness']);
    }

    public function testConfigureSnapshotOptionsExactStaleness()
    {
        $args = ['exactStaleness' => $this->duration];
        $res = $this->impl->proxyConfigureSnapshotOptions($args);
        $this->assertEquals($this->dur, $res['readOnly']['exactStaleness']);
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testTransactionSelectorInvalidContext()
    {
        $args = ['transactionType' => 'foo'];
        $this->impl->proxyTransactionSelector($args);
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testConfigureSnapshotOptionsInvalidExactStaleness()
    {
        $args = ['exactStaleness' => 'foo'];
        $this->impl->proxyConfigureSnapshotOptions($args);
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testConfigureSnapshotOptionsInvalidMaxStaleness()
    {
        $args = ['maxStaleness' => 'foo'];
        $this->impl->proxyConfigureSnapshotOptions($args);
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testConfigureSnapshotOptionsInvalidMinReadTimestamp()
    {
        $args = ['minReadTimestamp' => 'foo'];
        $this->impl->proxyConfigureSnapshotOptions($args);
    }

    /**
     * @expectedException BadMethodCallException
     */
    public function testConfigureSnapshotOptionsInvalidReadTimestamp()
    {
        $args = ['readTimestamp' => 'foo'];
        $this->impl->proxyConfigureSnapshotOptions($args);
    }

    public function timestamps()
    {
        return [
            ['2017-01-09T18:05:22.534799Z'],
            ['2017-01-09T18:05:22.235534799Z'],
        ];
    }
}

class TransactionConfigurationTraitImplementation
{
    use TransactionConfigurationTrait;

    public function proxyTransactionSelector(array &$options)
    {
        return $this->transactionSelector($options);
    }

    public function proxyConfigureTransactionOptions()
    {
        return $this->configureTransactionOptions();
    }

    public function proxyConfigureSnapshotOptions(array &$options)
    {
        return $this->configureSnapshotOptions($options);
    }
}
