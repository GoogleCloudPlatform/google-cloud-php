<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/classification.proto

namespace Google\Cloud\Automl\V1beta1\ClassificationEvaluationMetrics\ConfusionMatrix;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output only. A row in the confusion matrix.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ClassificationEvaluationMetrics.ConfusionMatrix.Row</code>
 */
class Row extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row is equal to the size of
     * annotatin_spec_id.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     */
    private $example_count;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $example_count
     *           Output only. Value of the specific cell in the confusion matrix.
     *           The number of values each row is equal to the size of
     *           annotatin_spec_id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row is equal to the size of
     * annotatin_spec_id.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Output only. Value of the specific cell in the confusion matrix.
     * The number of values each row is equal to the size of
     * annotatin_spec_id.
     *
     * Generated from protobuf field <code>repeated int32 example_count = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->example_count = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Row::class, \Google\Cloud\Automl\V1beta1\ClassificationEvaluationMetrics_ConfusionMatrix_Row::class);

