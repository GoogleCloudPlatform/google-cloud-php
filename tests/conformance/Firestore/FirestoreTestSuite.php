<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: firestore-test.proto

namespace Google\Cloud\Tests\Conformance\Firestore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of tests.
 *
 * Generated from protobuf message <code>FirestoreTests.FirestoreTestSuite</code>
 */
class FirestoreTestSuite extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .FirestoreTests.FirestoreTest tests = 1;</code>
     */
    private $tests;

    public function __construct() {
        \GPBMetadata\FirestoreTest::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .FirestoreTests.FirestoreTest tests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTests()
    {
        return $this->tests;
    }

    /**
     * Generated from protobuf field <code>repeated .FirestoreTests.FirestoreTest tests = 1;</code>
     * @param \Google\Cloud\Tests\Conformance\Firestore\FirestoreTest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Tests\Conformance\Firestore\FirestoreTest::class);
        $this->tests = $arr;

        return $this;
    }

}

