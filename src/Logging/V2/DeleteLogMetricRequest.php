<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_metrics.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The parameters to DeleteLogMetric.
 * </pre>
 *
 * Protobuf type <code>Google\Logging\V2\DeleteLogMetricRequest</code>
 */
class DeleteLogMetricRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     */
    private $metric_name = '';

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingMetrics::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * <pre>
     * The resource name of the metric to delete:
     *     "projects/[PROJECT_ID]/metrics/[METRIC_ID]"
     * </pre>
     *
     * <code>string metric_name = 1;</code>
     * @param string $var
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

}

