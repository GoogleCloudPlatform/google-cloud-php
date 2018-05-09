<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tests.Where</code>
 */
class Where extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tests.FieldPath path = 1;</code>
     */
    private $path = null;
    /**
     * Generated from protobuf field <code>string op = 2;</code>
     */
    private $op = '';
    /**
     * Generated from protobuf field <code>string json_value = 3;</code>
     */
    private $json_value = '';

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.tests.FieldPath path = 1;</code>
     * @return \Google\Cloud\Firestore\Tests\Conformance\FieldPath
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>.tests.FieldPath path = 1;</code>
     * @param \Google\Cloud\Firestore\Tests\Conformance\FieldPath $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\Tests\Conformance\FieldPath::class);
        $this->path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>
     * @return string
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Generated from protobuf field <code>string op = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkString($var, True);
        $this->op = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string json_value = 3;</code>
     * @return string
     */
    public function getJsonValue()
    {
        return $this->json_value;
    }

    /**
     * Generated from protobuf field <code>string json_value = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJsonValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->json_value = $var;

        return $this;
    }

}

