<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents_service.proto

namespace Google\Cloud\Irm\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to start a role handover.
 *
 * Generated from protobuf message <code>google.cloud.irm.v1alpha2.RequestIncidentRoleHandoverRequest</code>
 */
class RequestIncidentRoleHandoverRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the role assignment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The proposed assignee.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.User new_assignee = 2;</code>
     */
    private $new_assignee = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the role assignment.
     *     @type \Google\Cloud\Irm\V1alpha2\User $new_assignee
     *           The proposed assignee.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Irm\V1Alpha2\IncidentsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the role assignment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the role assignment.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The proposed assignee.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.User new_assignee = 2;</code>
     * @return \Google\Cloud\Irm\V1alpha2\User
     */
    public function getNewAssignee()
    {
        return $this->new_assignee;
    }

    /**
     * The proposed assignee.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.User new_assignee = 2;</code>
     * @param \Google\Cloud\Irm\V1alpha2\User $var
     * @return $this
     */
    public function setNewAssignee($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Irm\V1alpha2\User::class);
        $this->new_assignee = $var;

        return $this;
    }

}

