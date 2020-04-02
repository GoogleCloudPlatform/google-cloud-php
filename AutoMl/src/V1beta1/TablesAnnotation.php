<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/tables.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains annotation details specific to Tables.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.TablesAnnotation</code>
 */
class TablesAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. A confidence estimate between 0.0 and 1.0, inclusive. A higher
     * value means greater confidence in the returned value.
     * For
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * of FLOAT64 data type the score is not populated.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     */
    private $score = 0.0;
    /**
     * Output only. Only populated when
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * has FLOAT64 data type. An interval in which the exactly correct target
     * value has 95% chance to be in.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DoubleRange prediction_interval = 4;</code>
     */
    private $prediction_interval = null;
    /**
     * The predicted value of the row's
     * [target_column][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec].
     * The value depends on the column's DataType:
     * * CATEGORY - the predicted (with the above confidence `score`) CATEGORY
     *   value.
     * * FLOAT64 - the predicted (with above `prediction_interval`) FLOAT64 value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     */
    private $value = null;
    /**
     * Output only. Auxiliary information for each of the model's
     * [input_feature_column_specs][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
     * with respect to this particular prediction.
     * If no other fields than
     * [column_spec_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_spec_name]
     * and
     * [column_display_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_display_name]
     * would be populated, then this whole field is not.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TablesModelColumnInfo tables_model_column_info = 3;</code>
     */
    private $tables_model_column_info;
    /**
     * Output only. Stores the prediction score for the baseline example, which
     * is defined as the example with all values set to their baseline values.
     * This is used as part of the Sampled Shapley explanation of the model's
     * prediction. This field is populated only when feature importance is
     * requested. For regression models, this holds the baseline prediction for
     * the baseline example. For classification models, this holds the baseline
     * prediction for the baseline example for the argmax class.
     *
     * Generated from protobuf field <code>float baseline_score = 5;</code>
     */
    private $baseline_score = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $score
     *           Output only. A confidence estimate between 0.0 and 1.0, inclusive. A higher
     *           value means greater confidence in the returned value.
     *           For
     *           [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     *           of FLOAT64 data type the score is not populated.
     *     @type \Google\Cloud\AutoMl\V1beta1\DoubleRange $prediction_interval
     *           Output only. Only populated when
     *           [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     *           has FLOAT64 data type. An interval in which the exactly correct target
     *           value has 95% chance to be in.
     *     @type \Google\Protobuf\Value $value
     *           The predicted value of the row's
     *           [target_column][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec].
     *           The value depends on the column's DataType:
     *           * CATEGORY - the predicted (with the above confidence `score`) CATEGORY
     *             value.
     *           * FLOAT64 - the predicted (with above `prediction_interval`) FLOAT64 value.
     *     @type \Google\Cloud\AutoMl\V1beta1\TablesModelColumnInfo[]|\Google\Protobuf\Internal\RepeatedField $tables_model_column_info
     *           Output only. Auxiliary information for each of the model's
     *           [input_feature_column_specs][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
     *           with respect to this particular prediction.
     *           If no other fields than
     *           [column_spec_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_spec_name]
     *           and
     *           [column_display_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_display_name]
     *           would be populated, then this whole field is not.
     *     @type float $baseline_score
     *           Output only. Stores the prediction score for the baseline example, which
     *           is defined as the example with all values set to their baseline values.
     *           This is used as part of the Sampled Shapley explanation of the model's
     *           prediction. This field is populated only when feature importance is
     *           requested. For regression models, this holds the baseline prediction for
     *           the baseline example. For classification models, this holds the baseline
     *           prediction for the baseline example for the argmax class.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Tables::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0, inclusive. A higher
     * value means greater confidence in the returned value.
     * For
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * of FLOAT64 data type the score is not populated.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Output only. A confidence estimate between 0.0 and 1.0, inclusive. A higher
     * value means greater confidence in the returned value.
     * For
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * of FLOAT64 data type the score is not populated.
     *
     * Generated from protobuf field <code>float score = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Output only. Only populated when
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * has FLOAT64 data type. An interval in which the exactly correct target
     * value has 95% chance to be in.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DoubleRange prediction_interval = 4;</code>
     * @return \Google\Cloud\AutoMl\V1beta1\DoubleRange
     */
    public function getPredictionInterval()
    {
        return $this->prediction_interval;
    }

    /**
     * Output only. Only populated when
     * [target_column_spec][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec]
     * has FLOAT64 data type. An interval in which the exactly correct target
     * value has 95% chance to be in.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.DoubleRange prediction_interval = 4;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\DoubleRange $var
     * @return $this
     */
    public function setPredictionInterval($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AutoMl\V1beta1\DoubleRange::class);
        $this->prediction_interval = $var;

        return $this;
    }

    /**
     * The predicted value of the row's
     * [target_column][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec].
     * The value depends on the column's DataType:
     * * CATEGORY - the predicted (with the above confidence `score`) CATEGORY
     *   value.
     * * FLOAT64 - the predicted (with above `prediction_interval`) FLOAT64 value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     * @return \Google\Protobuf\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The predicted value of the row's
     * [target_column][google.cloud.automl.v1beta1.TablesModelMetadata.target_column_spec].
     * The value depends on the column's DataType:
     * * CATEGORY - the predicted (with the above confidence `score`) CATEGORY
     *   value.
     * * FLOAT64 - the predicted (with above `prediction_interval`) FLOAT64 value.
     *
     * Generated from protobuf field <code>.google.protobuf.Value value = 2;</code>
     * @param \Google\Protobuf\Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Value::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Output only. Auxiliary information for each of the model's
     * [input_feature_column_specs][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
     * with respect to this particular prediction.
     * If no other fields than
     * [column_spec_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_spec_name]
     * and
     * [column_display_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_display_name]
     * would be populated, then this whole field is not.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TablesModelColumnInfo tables_model_column_info = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTablesModelColumnInfo()
    {
        return $this->tables_model_column_info;
    }

    /**
     * Output only. Auxiliary information for each of the model's
     * [input_feature_column_specs][google.cloud.automl.v1beta1.TablesModelMetadata.input_feature_column_specs]
     * with respect to this particular prediction.
     * If no other fields than
     * [column_spec_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_spec_name]
     * and
     * [column_display_name][google.cloud.automl.v1beta1.TablesModelColumnInfo.column_display_name]
     * would be populated, then this whole field is not.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.TablesModelColumnInfo tables_model_column_info = 3;</code>
     * @param \Google\Cloud\AutoMl\V1beta1\TablesModelColumnInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTablesModelColumnInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\TablesModelColumnInfo::class);
        $this->tables_model_column_info = $arr;

        return $this;
    }

    /**
     * Output only. Stores the prediction score for the baseline example, which
     * is defined as the example with all values set to their baseline values.
     * This is used as part of the Sampled Shapley explanation of the model's
     * prediction. This field is populated only when feature importance is
     * requested. For regression models, this holds the baseline prediction for
     * the baseline example. For classification models, this holds the baseline
     * prediction for the baseline example for the argmax class.
     *
     * Generated from protobuf field <code>float baseline_score = 5;</code>
     * @return float
     */
    public function getBaselineScore()
    {
        return $this->baseline_score;
    }

    /**
     * Output only. Stores the prediction score for the baseline example, which
     * is defined as the example with all values set to their baseline values.
     * This is used as part of the Sampled Shapley explanation of the model's
     * prediction. This field is populated only when feature importance is
     * requested. For regression models, this holds the baseline prediction for
     * the baseline example. For classification models, this holds the baseline
     * prediction for the baseline example for the argmax class.
     *
     * Generated from protobuf field <code>float baseline_score = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setBaselineScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->baseline_score = $var;

        return $this;
    }

}

