<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>tests.DocChange</code>
 */
class DocChange extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     */
    private $kind = 0;
    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document doc = 2;</code>
     */
    private $doc = null;
    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     */
    private $old_index = 0;
    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     */
    private $new_index = 0;

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Generated from protobuf field <code>.tests.DocChange.Kind kind = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\Tests\Conformance\DocChange_Kind::class);
        $this->kind = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document doc = 2;</code>
     * @return \Google\Cloud\Firestore\V1beta1\Document
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Generated from protobuf field <code>.google.firestore.v1beta1.Document doc = 2;</code>
     * @param \Google\Cloud\Firestore\V1beta1\Document $var
     * @return $this
     */
    public function setDoc($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1beta1\Document::class);
        $this->doc = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     * @return int
     */
    public function getOldIndex()
    {
        return $this->old_index;
    }

    /**
     * Generated from protobuf field <code>int32 old_index = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOldIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->old_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     * @return int
     */
    public function getNewIndex()
    {
        return $this->new_index;
    }

    /**
     * Generated from protobuf field <code>int32 new_index = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setNewIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->new_index = $var;

        return $this;
    }

}

