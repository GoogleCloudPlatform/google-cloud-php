<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/error_stats_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The number of errors in a given time period.
 * All numbers are approximate since the error events are sampled
 * before counting them.
 * </pre>
 *
 * Protobuf type <code>Google\Devtools\Clouderrorreporting\V1beta1\TimedCount</code>
 */
class TimedCount extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Approximate number of occurrences in the given time period.
     * </pre>
     *
     * <code>int64 count = 1;</code>
     */
    private $count = 0;
    /**
     * <pre>
     * Start of the time period to which `count` refers (included).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * End of the time period to which `count` refers (excluded).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ErrorStatsService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Approximate number of occurrences in the given time period.
     * </pre>
     *
     * <code>int64 count = 1;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <pre>
     * Approximate number of occurrences in the given time period.
     * </pre>
     *
     * <code>int64 count = 1;</code>
     * @param int|string $var
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

    /**
     * <pre>
     * Start of the time period to which `count` refers (included).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Start of the time period to which `count` refers (included).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param Google\Protobuf\Timestamp $var
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * <pre>
     * End of the time period to which `count` refers (excluded).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * End of the time period to which `count` refers (excluded).
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param Google\Protobuf\Timestamp $var
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

