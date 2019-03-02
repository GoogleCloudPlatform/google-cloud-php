<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/filters.proto

namespace Google\Cloud\Talent\V4beta1\CommuteFilter;

/**
 * The traffic density to use when calculating commute time.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.CommuteFilter.RoadTraffic</code>
 */
class RoadTraffic
{
    /**
     * Road traffic situation isn't specified.
     *
     * Generated from protobuf enum <code>ROAD_TRAFFIC_UNSPECIFIED = 0;</code>
     */
    const ROAD_TRAFFIC_UNSPECIFIED = 0;
    /**
     * Optimal commute time without considering any traffic impact.
     *
     * Generated from protobuf enum <code>TRAFFIC_FREE = 1;</code>
     */
    const TRAFFIC_FREE = 1;
    /**
     * Commute time calculation takes in account the peak traffic impact.
     *
     * Generated from protobuf enum <code>BUSY_HOUR = 2;</code>
     */
    const BUSY_HOUR = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RoadTraffic::class, \Google\Cloud\Talent\V4beta1\CommuteFilter_RoadTraffic::class);

