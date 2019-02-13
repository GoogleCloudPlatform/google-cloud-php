<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents.proto

namespace Google\Cloud\Irm\V1alpha2\IncidentRole;

/**
 * List of possible roles.
 *
 * Protobuf type <code>google.cloud.irm.v1alpha2.IncidentRole.Type</code>
 */
class Type
{
    /**
     * The role is unspecified.
     *
     * Generated from protobuf enum <code>TYPE_UNSPECIFIED = 0;</code>
     */
    const TYPE_UNSPECIFIED = 0;
    /**
     * Incident Commander: Manages response plan, near-term and long-term
     * objectives, establishes priorities, and delegates tasks as needed.
     *
     * Generated from protobuf enum <code>TYPE_INCIDENT_COMMANDER = 1;</code>
     */
    const TYPE_INCIDENT_COMMANDER = 1;
    /**
     * Communications Lead: Keeps everybody outside and within the response team
     * informed.
     *
     * Generated from protobuf enum <code>TYPE_COMMUNICATIONS_LEAD = 2;</code>
     */
    const TYPE_COMMUNICATIONS_LEAD = 2;
    /**
     * Operations Lead: Figures out what to do, and gets it done.
     *
     * Generated from protobuf enum <code>TYPE_OPERATIONS_LEAD = 3;</code>
     */
    const TYPE_OPERATIONS_LEAD = 3;
    /**
     * External Customer Communications Lead: Responsible for communicating
     * incident details to customers/public.
     *
     * Generated from protobuf enum <code>TYPE_EXTERNAL_CUSTOMER_COMMUNICATIONS_LEAD = 4;</code>
     */
    const TYPE_EXTERNAL_CUSTOMER_COMMUNICATIONS_LEAD = 4;
    /**
     * Primary Oncall: Responds to the initial page and handles all
     * responsibilities for pre-escalated incidents.
     *
     * Generated from protobuf enum <code>TYPE_PRIMARY_ONCALL = 5;</code>
     */
    const TYPE_PRIMARY_ONCALL = 5;
    /**
     * Secondary Oncall: Helps the primary oncall if necessary; mostly useful
     * for pre-escalated incidents.
     *
     * Generated from protobuf enum <code>TYPE_SECONDARY_ONCALL = 6;</code>
     */
    const TYPE_SECONDARY_ONCALL = 6;
    /**
     * User-specified roles. One example is a Planning Lead, who keeps track of
     * the incident. Another is an assistant Incident Commander.
     *
     * Generated from protobuf enum <code>TYPE_OTHER = 7;</code>
     */
    const TYPE_OTHER = 7;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Google\Cloud\Irm\V1alpha2\IncidentRole_Type::class);

