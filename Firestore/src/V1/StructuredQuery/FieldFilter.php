<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A filter on a specific field.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredQuery.FieldFilter</code>
 */
class FieldFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     */
    private $field = null;
    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     */
    private $op = 0;
    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
     */
    private $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference $field
     *           The field to filter by.
     *     @type int $op
     *           The operator to filter by.
     *     @type \Google\Cloud\Firestore\V1\Value $value
     *           The value to compare to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     * @return \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * The field to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldReference field = 1;</code>
     * @param \Google\Cloud\Firestore\V1\StructuredQuery\FieldReference $var
     * @return $this
     */
    public function setField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\StructuredQuery_FieldReference::class);
        $this->field = $var;

        return $this;
    }

    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The operator to filter by.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.FieldFilter.Operator op = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\V1\StructuredQuery_FieldFilter_Operator::class);
        $this->op = $var;

        return $this;
    }

    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
     * @return \Google\Cloud\Firestore\V1\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value to compare to.
     *
     * Generated from protobuf field <code>.google.firestore.v1.Value value = 3;</code>
     * @param \Google\Cloud\Firestore\V1\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Firestore\V1\Value::class);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(FieldFilter::class, \Google\Cloud\Firestore\V1\StructuredQuery_FieldFilter::class);

