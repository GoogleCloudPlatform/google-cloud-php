<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: firestore-test.proto

namespace Google\Cloud\Tests\Conformance\Firestore;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FirestoreTests.Cursor</code>
 */
class Cursor extends \Google\Protobuf\Internal\Message
{
    /**
     * one of:
     *
     * Generated from protobuf field <code>.FirestoreTests.DocSnapshot doc_snapshot = 1;</code>
     */
    private $doc_snapshot = null;
    /**
     * Generated from protobuf field <code>repeated string json_values = 2;</code>
     */
    private $json_values;

    public function __construct() {
        \GPBMetadata\FirestoreTest::initOnce();
        parent::__construct();
    }

    /**
     * one of:
     *
     * Generated from protobuf field <code>.FirestoreTests.DocSnapshot doc_snapshot = 1;</code>
     * @return \Google\Cloud\Tests\Conformance\Firestore\DocSnapshot
     */
    public function getDocSnapshot()
    {
        return $this->doc_snapshot;
    }

    /**
     * one of:
     *
     * Generated from protobuf field <code>.FirestoreTests.DocSnapshot doc_snapshot = 1;</code>
     * @param \Google\Cloud\Tests\Conformance\Firestore\DocSnapshot $var
     * @return $this
     */
    public function setDocSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Tests\Conformance\Firestore\DocSnapshot::class);
        $this->doc_snapshot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string json_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getJsonValues()
    {
        return $this->json_values;
    }

    /**
     * Generated from protobuf field <code>repeated string json_values = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setJsonValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->json_values = $arr;

        return $this;
    }

}

