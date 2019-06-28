<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional statistics about a [ResultSet][google.spanner.v1.ResultSet] or
 * [PartialResultSet][google.spanner.v1.PartialResultSet].
 *
 * Generated from protobuf message <code>google.spanner.v1.ResultSetStats</code>
 */
final class ResultSetStats extends \Google\Protobuf\Internal\Message
{
    /**
     * [QueryPlan][google.spanner.v1.QueryPlan] for the query associated with this
     * result.
     *
     * Generated from protobuf field <code>.google.spanner.v1.QueryPlan query_plan = 1;</code>
     */
    private $query_plan = null;
    /**
     * Aggregated statistics from the execution of the query. Only present when
     * the query is profiled. For example, a query could return the statistics as
     * follows:
     *     {
     *       "rows_returned": "3",
     *       "elapsed_time": "1.22 secs",
     *       "cpu_time": "1.19 secs"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     */
    private $query_stats = null;
    protected $row_count;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Spanner\V1\QueryPlan $query_plan
     *           [QueryPlan][google.spanner.v1.QueryPlan] for the query associated with this
     *           result.
     *     @type \Google\Protobuf\Struct $query_stats
     *           Aggregated statistics from the execution of the query. Only present when
     *           the query is profiled. For example, a query could return the statistics as
     *           follows:
     *               {
     *                 "rows_returned": "3",
     *                 "elapsed_time": "1.22 secs",
     *                 "cpu_time": "1.19 secs"
     *               }
     *     @type int|string $row_count_exact
     *           Standard DML returns an exact count of rows that were modified.
     *     @type int|string $row_count_lower_bound
     *           Partitioned DML does not offer exactly-once semantics, so it
     *           returns a lower bound of the rows modified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        parent::__construct($data);
    }

    /**
     * [QueryPlan][google.spanner.v1.QueryPlan] for the query associated with this
     * result.
     *
     * Generated from protobuf field <code>.google.spanner.v1.QueryPlan query_plan = 1;</code>
     * @return \Google\Cloud\Spanner\V1\QueryPlan
     */
    public function getQueryPlan()
    {
        return $this->query_plan;
    }

    /**
     * [QueryPlan][google.spanner.v1.QueryPlan] for the query associated with this
     * result.
     *
     * Generated from protobuf field <code>.google.spanner.v1.QueryPlan query_plan = 1;</code>
     * @param \Google\Cloud\Spanner\V1\QueryPlan $var
     * @return $this
     */
    public function setQueryPlan($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\QueryPlan::class);
        $this->query_plan = $var;

        return $this;
    }

    /**
     * Aggregated statistics from the execution of the query. Only present when
     * the query is profiled. For example, a query could return the statistics as
     * follows:
     *     {
     *       "rows_returned": "3",
     *       "elapsed_time": "1.22 secs",
     *       "cpu_time": "1.19 secs"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getQueryStats()
    {
        return $this->query_stats;
    }

    /**
     * Aggregated statistics from the execution of the query. Only present when
     * the query is profiled. For example, a query could return the statistics as
     * follows:
     *     {
     *       "rows_returned": "3",
     *       "elapsed_time": "1.22 secs",
     *       "cpu_time": "1.19 secs"
     *     }
     *
     * Generated from protobuf field <code>.google.protobuf.Struct query_stats = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setQueryStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->query_stats = $var;

        return $this;
    }

    /**
     * Standard DML returns an exact count of rows that were modified.
     *
     * Generated from protobuf field <code>int64 row_count_exact = 3;</code>
     * @return int|string
     */
    public function getRowCountExact()
    {
        return $this->readOneof(3);
    }

    /**
     * Standard DML returns an exact count of rows that were modified.
     *
     * Generated from protobuf field <code>int64 row_count_exact = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCountExact($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Partitioned DML does not offer exactly-once semantics, so it
     * returns a lower bound of the rows modified.
     *
     * Generated from protobuf field <code>int64 row_count_lower_bound = 4;</code>
     * @return int|string
     */
    public function getRowCountLowerBound()
    {
        return $this->readOneof(4);
    }

    /**
     * Partitioned DML does not offer exactly-once semantics, so it
     * returns a lower bound of the rows modified.
     *
     * Generated from protobuf field <code>int64 row_count_lower_bound = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowCountLowerBound($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRowCount()
    {
        return $this->whichOneof("row_count");
    }

}

