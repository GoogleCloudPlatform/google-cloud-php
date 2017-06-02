<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/query_plan.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Metadata associated with a parent-child relationship appearing in a
 * [PlanNode][google.spanner.v1.PlanNode].
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.PlanNode.ChildLink</code>
 */
class PlanNode_ChildLink extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The node to which the link points.
     * </pre>
     *
     * <code>int32 child_index = 1;</code>
     */
    private $child_index = 0;
    /**
     * <pre>
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     * </pre>
     *
     * <code>string type = 2;</code>
     */
    private $type = '';
    /**
     * <pre>
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     * </pre>
     *
     * <code>string variable = 3;</code>
     */
    private $variable = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\QueryPlan::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The node to which the link points.
     * </pre>
     *
     * <code>int32 child_index = 1;</code>
     */
    public function getChildIndex()
    {
        return $this->child_index;
    }

    /**
     * <pre>
     * The node to which the link points.
     * </pre>
     *
     * <code>int32 child_index = 1;</code>
     */
    public function setChildIndex($var)
    {
        GPBUtil::checkInt32($var);
        $this->child_index = $var;

        return $this;
    }

    /**
     * <pre>
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     * </pre>
     *
     * <code>string type = 2;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <pre>
     * The type of the link. For example, in Hash Joins this could be used to
     * distinguish between the build child and the probe child, or in the case
     * of the child being an output variable, to represent the tag associated
     * with the output variable.
     * </pre>
     *
     * <code>string type = 2;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * <pre>
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     * </pre>
     *
     * <code>string variable = 3;</code>
     */
    public function getVariable()
    {
        return $this->variable;
    }

    /**
     * <pre>
     * Only present if the child node is [SCALAR][google.spanner.v1.PlanNode.Kind.SCALAR] and corresponds
     * to an output variable of the parent node. The field carries the name of
     * the output variable.
     * For example, a `TableScan` operator that reads rows from a table will
     * have child links to the `SCALAR` nodes representing the output variables
     * created for each column that is read by the operator. The corresponding
     * `variable` fields will be set to the variable names assigned to the
     * columns.
     * </pre>
     *
     * <code>string variable = 3;</code>
     */
    public function setVariable($var)
    {
        GPBUtil::checkString($var, True);
        $this->variable = $var;

        return $this;
    }

}

