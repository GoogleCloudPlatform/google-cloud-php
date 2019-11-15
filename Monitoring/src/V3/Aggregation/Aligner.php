<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Cloud\Monitoring\V3\Aggregation;

use UnexpectedValueException;

/**
 * The Aligner describes how to bring the data points in a single
 * time series into temporal alignment.
 *
 * Protobuf type <code>google.monitoring.v3.Aggregation.Aligner</code>
 */
class Aligner
{
    /**
     * No alignment. Raw data is returned. Not valid if cross-time
     * series reduction is requested. The value type of the result is
     * the same as the value type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_NONE = 0;</code>
     */
    const ALIGN_NONE = 0;
    /**
     * Align and convert to delta metric type. This alignment is valid
     * for cumulative metrics and delta metrics. Aligning an existing
     * delta metric to a delta metric requires that the alignment
     * period be increased. The value type of the result is the same
     * as the value type of the input.
     * One can think of this aligner as a rate but without time units; that
     * is, the output is conceptually (second_point - first_point).
     *
     * Generated from protobuf enum <code>ALIGN_DELTA = 1;</code>
     */
    const ALIGN_DELTA = 1;
    /**
     * Align and convert to a rate. This alignment is valid for
     * cumulative metrics and delta metrics with numeric values. The output is a
     * gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     * One can think of this aligner as conceptually providing the slope of
     * the line that passes through the value at the start and end of the
     * window. In other words, this is conceptually ((y1 - y0)/(t1 - t0)),
     * and the output unit is one that has a "/time" dimension.
     * If, by rate, you are looking for percentage change, see the
     * `ALIGN_PERCENT_CHANGE` aligner option.
     *
     * Generated from protobuf enum <code>ALIGN_RATE = 2;</code>
     */
    const ALIGN_RATE = 2;
    /**
     * Align by interpolating between adjacent points around the
     * period boundary. This alignment is valid for gauge
     * metrics with numeric values. The value type of the result is the same
     * as the value type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_INTERPOLATE = 3;</code>
     */
    const ALIGN_INTERPOLATE = 3;
    /**
     * Align by shifting the oldest data point before the period
     * boundary to the boundary. This alignment is valid for gauge
     * metrics. The value type of the result is the same as the
     * value type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_NEXT_OLDER = 4;</code>
     */
    const ALIGN_NEXT_OLDER = 4;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the minimum of all data points in the
     * period. This alignment is valid for gauge and delta metrics with numeric
     * values. The value type of the result is the same as the value
     * type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_MIN = 10;</code>
     */
    const ALIGN_MIN = 10;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the maximum of all data points in the
     * period. This alignment is valid for gauge and delta metrics with numeric
     * values. The value type of the result is the same as the value
     * type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_MAX = 11;</code>
     */
    const ALIGN_MAX = 11;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the average or arithmetic mean of all
     * data points in the period. This alignment is valid for gauge and delta
     * metrics with numeric values. The value type of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_MEAN = 12;</code>
     */
    const ALIGN_MEAN = 12;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the count of all data points in the
     * period. This alignment is valid for gauge and delta metrics with numeric
     * or Boolean values. The value type of the output is
     * [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>ALIGN_COUNT = 13;</code>
     */
    const ALIGN_COUNT = 13;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the sum of all data points in the
     * period. This alignment is valid for gauge and delta metrics with numeric
     * and distribution values. The value type of the output is the
     * same as the value type of the input.
     *
     * Generated from protobuf enum <code>ALIGN_SUM = 14;</code>
     */
    const ALIGN_SUM = 14;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the standard deviation of all data
     * points in the period. This alignment is valid for gauge and delta metrics
     * with numeric values. The value type of the output is
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_STDDEV = 15;</code>
     */
    const ALIGN_STDDEV = 15;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the count of True-valued data points in the
     * period. This alignment is valid for gauge metrics with
     * Boolean values. The value type of the output is
     * [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>ALIGN_COUNT_TRUE = 16;</code>
     */
    const ALIGN_COUNT_TRUE = 16;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the count of False-valued data points in the
     * period. This alignment is valid for gauge metrics with
     * Boolean values. The value type of the output is
     * [INT64][google.api.MetricDescriptor.ValueType.INT64].
     *
     * Generated from protobuf enum <code>ALIGN_COUNT_FALSE = 24;</code>
     */
    const ALIGN_COUNT_FALSE = 24;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the fraction of True-valued data points in the
     * period. This alignment is valid for gauge metrics with Boolean values.
     * The output value is in the range [0, 1] and has value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_FRACTION_TRUE = 17;</code>
     */
    const ALIGN_FRACTION_TRUE = 17;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the 99th percentile of all data
     * points in the period. This alignment is valid for gauge and delta metrics
     * with distribution values. The output is a gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_99 = 18;</code>
     */
    const ALIGN_PERCENTILE_99 = 18;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the 95th percentile of all data
     * points in the period. This alignment is valid for gauge and delta metrics
     * with distribution values. The output is a gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_95 = 19;</code>
     */
    const ALIGN_PERCENTILE_95 = 19;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the 50th percentile of all data
     * points in the period. This alignment is valid for gauge and delta metrics
     * with distribution values. The output is a gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_50 = 20;</code>
     */
    const ALIGN_PERCENTILE_50 = 20;
    /**
     * Align time series via aggregation. The resulting data point in
     * the alignment period is the 5th percentile of all data
     * points in the period. This alignment is valid for gauge and delta metrics
     * with distribution values. The output is a gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_PERCENTILE_05 = 21;</code>
     */
    const ALIGN_PERCENTILE_05 = 21;
    /**
     * Align and convert to a percentage change. This alignment is valid for
     * gauge and delta metrics with numeric values. This alignment conceptually
     * computes the equivalent of "((current - previous)/previous)*100"
     * where previous value is determined based on the alignmentPeriod.
     * In the event that previous is 0 the calculated value is infinity with the
     * exception that if both (current - previous) and previous are 0 the
     * calculated value is 0.
     * A 10 minute moving mean is computed at each point of the time window
     * prior to the above calculation to smooth the metric and prevent false
     * positives from very short lived spikes.
     * Only applicable for data that is >= 0. Any values < 0 are treated as
     * no data. While delta metrics are accepted by this alignment special care
     * should be taken that the values for the metric will always be positive.
     * The output is a gauge metric with value type
     * [DOUBLE][google.api.MetricDescriptor.ValueType.DOUBLE].
     *
     * Generated from protobuf enum <code>ALIGN_PERCENT_CHANGE = 23;</code>
     */
    const ALIGN_PERCENT_CHANGE = 23;

    private static $valueToName = [
        self::ALIGN_NONE => 'ALIGN_NONE',
        self::ALIGN_DELTA => 'ALIGN_DELTA',
        self::ALIGN_RATE => 'ALIGN_RATE',
        self::ALIGN_INTERPOLATE => 'ALIGN_INTERPOLATE',
        self::ALIGN_NEXT_OLDER => 'ALIGN_NEXT_OLDER',
        self::ALIGN_MIN => 'ALIGN_MIN',
        self::ALIGN_MAX => 'ALIGN_MAX',
        self::ALIGN_MEAN => 'ALIGN_MEAN',
        self::ALIGN_COUNT => 'ALIGN_COUNT',
        self::ALIGN_SUM => 'ALIGN_SUM',
        self::ALIGN_STDDEV => 'ALIGN_STDDEV',
        self::ALIGN_COUNT_TRUE => 'ALIGN_COUNT_TRUE',
        self::ALIGN_COUNT_FALSE => 'ALIGN_COUNT_FALSE',
        self::ALIGN_FRACTION_TRUE => 'ALIGN_FRACTION_TRUE',
        self::ALIGN_PERCENTILE_99 => 'ALIGN_PERCENTILE_99',
        self::ALIGN_PERCENTILE_95 => 'ALIGN_PERCENTILE_95',
        self::ALIGN_PERCENTILE_50 => 'ALIGN_PERCENTILE_50',
        self::ALIGN_PERCENTILE_05 => 'ALIGN_PERCENTILE_05',
        self::ALIGN_PERCENT_CHANGE => 'ALIGN_PERCENT_CHANGE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Aligner::class, \Google\Cloud\Monitoring\V3\Aggregation_Aligner::class);

