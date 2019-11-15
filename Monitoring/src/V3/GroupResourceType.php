<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3;

use UnexpectedValueException;

/**
 * The supported resource types that can be used as values of
 * `group_resource.resource_type`.
 * `INSTANCE` includes `gce_instance` and `aws_ec2_instance` resource types.
 * The resource types `gae_app` and `uptime_url` are not valid here because
 * group checks on App Engine modules and URLs are not allowed.
 *
 * Protobuf type <code>google.monitoring.v3.GroupResourceType</code>
 */
class GroupResourceType
{
    /**
     * Default value (not valid).
     *
     * Generated from protobuf enum <code>RESOURCE_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_TYPE_UNSPECIFIED = 0;
    /**
     * A group of instances from Google Cloud Platform (GCP) or
     * Amazon Web Services (AWS).
     *
     * Generated from protobuf enum <code>INSTANCE = 1;</code>
     */
    const INSTANCE = 1;
    /**
     * A group of Amazon ELB load balancers.
     *
     * Generated from protobuf enum <code>AWS_ELB_LOAD_BALANCER = 2;</code>
     */
    const AWS_ELB_LOAD_BALANCER = 2;

    private static $valueToName = [
        self::RESOURCE_TYPE_UNSPECIFIED => 'RESOURCE_TYPE_UNSPECIFIED',
        self::INSTANCE => 'INSTANCE',
        self::AWS_ELB_LOAD_BALANCER => 'AWS_ELB_LOAD_BALANCER',
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

