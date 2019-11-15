<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/query.proto

namespace Google\Cloud\Firestore\V1\StructuredQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A filter that merges multiple other filters using the given operator.
 *
 * Generated from protobuf message <code>google.firestore.v1.StructuredQuery.CompositeFilter</code>
 */
class CompositeFilter extends \Google\Protobuf\Internal\Message
{
    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.CompositeFilter.Operator op = 1;</code>
     */
    private $op = 0;
    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.StructuredQuery.Filter filters = 2;</code>
     */
    private $filters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $op
     *           The operator for combining multiple filters.
     *     @type \Google\Cloud\Firestore\V1\StructuredQuery\Filter[]|\Google\Protobuf\Internal\RepeatedField $filters
     *           The list of filters to combine.
     *           Must contain at least one filter.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Query::initOnce();
        parent::__construct($data);
    }

    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.CompositeFilter.Operator op = 1;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * The operator for combining multiple filters.
     *
     * Generated from protobuf field <code>.google.firestore.v1.StructuredQuery.CompositeFilter.Operator op = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Firestore\V1\StructuredQuery_CompositeFilter_Operator::class);
        $this->op = $var;

        return $this;
    }

    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.StructuredQuery.Filter filters = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * The list of filters to combine.
     * Must contain at least one filter.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.StructuredQuery.Filter filters = 2;</code>
     * @param \Google\Cloud\Firestore\V1\StructuredQuery\Filter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\StructuredQuery\Filter::class);
        $this->filters = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(CompositeFilter::class, \Google\Cloud\Firestore\V1\StructuredQuery_CompositeFilter::class);

