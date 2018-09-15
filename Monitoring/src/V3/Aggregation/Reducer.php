<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3\Aggregation;

/**
 * A Reducer describes how to aggregate data points from multiple
 * time series into a single time series.
 *
 * Protobuf type <code>google.monitoring.v3.Aggregation.Reducer</code>
 */
class Reducer
{
    /**
     * No cross-time series reduction. The output of the aligner is
     * returned.
     *
     * Generated from protobuf enum <code>REDUCE_NONE = 0;</code>
     */
    const REDUCE_NONE = 0;
    /**
     * Reduce by computing the mean across time series for each
     * alignment period. This reducer is valid for delta and
     * gauge metrics with numeric or distribution values. The value type of the
     * output is [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>REDUCE_MEAN = 1;</code>
     */
    const REDUCE_MEAN = 1;
    /**
     * Reduce by computing the minimum across time series for each
     * alignment period. This reducer is valid for delta and
     * gauge metrics with numeric values. The value type of the output
     * is the same as the value type of the input.
     *
     * Generated from protobuf enum <code>REDUCE_MIN = 2;</code>
     */
    const REDUCE_MIN = 2;
    /**
     * Reduce by computing the maximum across time series for each
     * alignment period. This reducer is valid for delta and
     * gauge metrics with numeric values. The value type of the output
     * is the same as the value type of the input.
     *
     * Generated from protobuf enum <code>REDUCE_MAX = 3;</code>
     */
    const REDUCE_MAX = 3;
    /**
     * Reduce by computing the sum across time series for each
     * alignment period. This reducer is valid for delta and
     * gauge metrics with numeric and distribution values. The value type of
     * the output is the same as the value type of the input.
     *
     * Generated from protobuf enum <code>REDUCE_SUM = 4;</code>
     */
    const REDUCE_SUM = 4;
    /**
     * Reduce by computing the standard deviation across time series
     * for each alignment period. This reducer is valid for delta
     * and gauge metrics with numeric or distribution values. The value type of
     * the output is [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>REDUCE_STDDEV = 5;</code>
     */
    const REDUCE_STDDEV = 5;
    /**
     * Reduce by computing the count of data points across time series
     * for each alignment period. This reducer is valid for delta
     * and gauge metrics of numeric, Boolean, distribution, and string value
     * type. The value type of the output is
     * [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>REDUCE_COUNT = 6;</code>
     */
    const REDUCE_COUNT = 6;
    /**
     * Reduce by computing the count of True-valued data points across time
     * series for each alignment period. This reducer is valid for delta
     * and gauge metrics of Boolean value type. The value type of
     * the output is [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>REDUCE_COUNT_TRUE = 7;</code>
     */
    const REDUCE_COUNT_TRUE = 7;
    /**
     * Reduce by computing the count of False-valued data points across time
     * series for each alignment period. This reducer is valid for delta
     * and gauge metrics of Boolean value type. The value type of
     * the output is [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>REDUCE_COUNT_FALSE = 15;</code>
     */
    const REDUCE_COUNT_FALSE = 15;
    /**
     * Reduce by computing the fraction of True-valued data points across time
     * series for each alignment period. This reducer is valid for delta
     * and gauge metrics of Boolean value type. The output value is in the
     * range [0, 1] and has value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>REDUCE_FRACTION_TRUE = 8;</code>
     */
    const REDUCE_FRACTION_TRUE = 8;
    /**
     * Reduce by computing 99th percentile of data points across time series
     * for each alignment period. This reducer is valid for gauge and delta
     * metrics of numeric and distribution type. The value of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE]
     *
     * Generated from protobuf enum <code>REDUCE_PERCENTILE_99 = 9;</code>
     */
    const REDUCE_PERCENTILE_99 = 9;
    /**
     * Reduce by computing 95th percentile of data points across time series
     * for each alignment period. This reducer is valid for gauge and delta
     * metrics of numeric and distribution type. The value of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE]
     *
     * Generated from protobuf enum <code>REDUCE_PERCENTILE_95 = 10;</code>
     */
    const REDUCE_PERCENTILE_95 = 10;
    /**
     * Reduce by computing 50th percentile of data points across time series
     * for each alignment period. This reducer is valid for gauge and delta
     * metrics of numeric and distribution type. The value of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE]
     *
     * Generated from protobuf enum <code>REDUCE_PERCENTILE_50 = 11;</code>
     */
    const REDUCE_PERCENTILE_50 = 11;
    /**
     * Reduce by computing 5th percentile of data points across time series
     * for each alignment period. This reducer is valid for gauge and delta
     * metrics of numeric and distribution type. The value of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE]
     *
     * Generated from protobuf enum <code>REDUCE_PERCENTILE_05 = 12;</code>
     */
    const REDUCE_PERCENTILE_05 = 12;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Reducer::class, \Google\Cloud\Monitoring\V3\Aggregation_Reducer::class);

