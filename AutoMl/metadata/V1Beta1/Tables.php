<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/tables.proto

namespace GPBMetadata\Google\Cloud\Automl\V1Beta1;

class Tables
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Classification::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\ColumnSpec::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataItems::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Ranges::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Regression::initOnce();
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Temporal::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
(google/cloud/automl/v1beta1/tables.protogoogle.cloud.automl.v1beta1-google/cloud/automl/v1beta1/column_spec.proto,google/cloud/automl/v1beta1/data_items.proto,google/cloud/automl/v1beta1/data_stats.proto(google/cloud/automl/v1beta1/ranges.proto,google/cloud/automl/v1beta1/regression.proto*google/cloud/automl/v1beta1/temporal.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
TablesDatasetMetadata
primary_table_spec_id (	
target_column_spec_id (	
weight_column_spec_id (	
ml_use_column_spec_id (	t
target_column_correlations (2P.google.cloud.automl.v1beta1.TablesDatasetMetadata.TargetColumnCorrelationsEntry5
stats_update_time (2.google.protobuf.Timestampn
TargetColumnCorrelationsEntry
key (	<
value (2-.google.cloud.automl.v1beta1.CorrelationStats:8"�
TablesModelMetadata-
#optimization_objective_recall_value (H 0
&optimization_objective_precision_value (H C
target_column_spec (2\'.google.cloud.automl.v1beta1.ColumnSpecK
input_feature_column_specs (2\'.google.cloud.automl.v1beta1.ColumnSpec
optimization_objective (	T
tables_model_column_info (22.google.cloud.automl.v1beta1.TablesModelColumnInfo%
train_budget_milli_node_hours (#
train_cost_milli_node_hours (
disable_early_stopping (B*
(additional_optimization_objective_config"�
TablesAnnotation
score (E
prediction_interval (2(.google.cloud.automl.v1beta1.DoubleRange%
value (2.google.protobuf.ValueT
tables_model_column_info (22.google.cloud.automl.v1beta1.TablesModelColumnInfo
baseline_score ("j
TablesModelColumnInfo
column_spec_name (	
column_display_name (	
feature_importance (B�
com.google.cloud.automl.v1beta1PZAgoogle.golang.org/genproto/googleapis/cloud/automl/v1beta1;automl�Google\\Cloud\\AutoMl\\V1beta1�Google::Cloud::AutoML::V1beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

