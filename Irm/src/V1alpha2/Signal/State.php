<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents.proto

namespace Google\Cloud\Irm\V1alpha2\Signal;

/**
 * Describes whether the alerting condition is still firing.
 *
 * Protobuf type <code>google.cloud.irm.v1alpha2.Signal.State</code>
 */
class State
{
    /**
     * Unspecified
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Firing
     *
     * Generated from protobuf enum <code>STATE_OPEN = 1;</code>
     */
    const STATE_OPEN = 1;
    /**
     * Non-firing
     *
     * Generated from protobuf enum <code>STATE_CLOSED = 2;</code>
     */
    const STATE_CLOSED = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Google\Cloud\Irm\V1alpha2\Signal_State::class);

