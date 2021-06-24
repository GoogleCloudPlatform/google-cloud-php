<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represent a sole-tenant Node Group resource.
 * A sole-tenant node is a physical server that is dedicated to hosting VM instances only for your specific project. Use sole-tenant nodes to keep your instances physically separated from instances in other projects, or to group your instances together on the same host hardware. For more information, read Sole-tenant nodes. (== resource_for {$api_version}.nodeGroups ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NodeGroup</code>
 */
class NodeGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies how autoscaling should behave.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy autoscaling_policy = 221950041;</code>
     */
    private $autoscaling_policy = null;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] The type of the resource. Always compute#nodeGroup for node group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * An opaque location hint used to place the Node close to other resources. This field is for use by internal tools that use the public API. The location hint here on the NodeGroup overrides any location_hint present in the NodeTemplate.
     *
     * Generated from protobuf field <code>string location_hint = 350519505;</code>
     */
    private $location_hint = null;
    /**
     * Specifies how to handle instances when a node in the group undergoes maintenance. Set to one of: DEFAULT, RESTART_IN_PLACE, or MIGRATE_WITHIN_NODE_GROUP. The default value is DEFAULT. For more information, see  Maintenance policies.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.MaintenancePolicy maintenance_policy = 528327646;</code>
     */
    private $maintenance_policy = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupMaintenanceWindow maintenance_window = 186374812;</code>
     */
    private $maintenance_window = null;
    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * URL of the node template to create the node group from.
     *
     * Generated from protobuf field <code>string node_template = 323154455;</code>
     */
    private $node_template = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The total number of nodes in the node group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     */
    private $size = null;
    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.Status status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] The name of the zone where the node group resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     */
    private $zone = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy $autoscaling_policy
     *           Specifies how autoscaling should behave.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $fingerprint
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] The type of the resource. Always compute#nodeGroup for node group.
     *     @type string $location_hint
     *           An opaque location hint used to place the Node close to other resources. This field is for use by internal tools that use the public API. The location hint here on the NodeGroup overrides any location_hint present in the NodeTemplate.
     *     @type int $maintenance_policy
     *           Specifies how to handle instances when a node in the group undergoes maintenance. Set to one of: DEFAULT, RESTART_IN_PLACE, or MIGRATE_WITHIN_NODE_GROUP. The default value is DEFAULT. For more information, see  Maintenance policies.
     *     @type \Google\Cloud\Compute\V1\NodeGroupMaintenanceWindow $maintenance_window
     *     @type string $name
     *           The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $node_template
     *           URL of the node template to create the node group from.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type int $size
     *           [Output Only] The total number of nodes in the node group.
     *     @type int $status
     *     @type string $zone
     *           [Output Only] The name of the zone where the node group resides, such as us-central1-a.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies how autoscaling should behave.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy autoscaling_policy = 221950041;</code>
     * @return \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy|null
     */
    public function getAutoscalingPolicy()
    {
        return isset($this->autoscaling_policy) ? $this->autoscaling_policy : null;
    }

    public function hasAutoscalingPolicy()
    {
        return isset($this->autoscaling_policy);
    }

    public function clearAutoscalingPolicy()
    {
        unset($this->autoscaling_policy);
    }

    /**
     * Specifies how autoscaling should behave.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupAutoscalingPolicy autoscaling_policy = 221950041;</code>
     * @param \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy $var
     * @return $this
     */
    public function setAutoscalingPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NodeGroupAutoscalingPolicy::class);
        $this->autoscaling_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] The type of the resource. Always compute#nodeGroup for node group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] The type of the resource. Always compute#nodeGroup for node group.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * An opaque location hint used to place the Node close to other resources. This field is for use by internal tools that use the public API. The location hint here on the NodeGroup overrides any location_hint present in the NodeTemplate.
     *
     * Generated from protobuf field <code>string location_hint = 350519505;</code>
     * @return string
     */
    public function getLocationHint()
    {
        return isset($this->location_hint) ? $this->location_hint : '';
    }

    public function hasLocationHint()
    {
        return isset($this->location_hint);
    }

    public function clearLocationHint()
    {
        unset($this->location_hint);
    }

    /**
     * An opaque location hint used to place the Node close to other resources. This field is for use by internal tools that use the public API. The location hint here on the NodeGroup overrides any location_hint present in the NodeTemplate.
     *
     * Generated from protobuf field <code>string location_hint = 350519505;</code>
     * @param string $var
     * @return $this
     */
    public function setLocationHint($var)
    {
        GPBUtil::checkString($var, True);
        $this->location_hint = $var;

        return $this;
    }

    /**
     * Specifies how to handle instances when a node in the group undergoes maintenance. Set to one of: DEFAULT, RESTART_IN_PLACE, or MIGRATE_WITHIN_NODE_GROUP. The default value is DEFAULT. For more information, see  Maintenance policies.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.MaintenancePolicy maintenance_policy = 528327646;</code>
     * @return int
     */
    public function getMaintenancePolicy()
    {
        return isset($this->maintenance_policy) ? $this->maintenance_policy : 0;
    }

    public function hasMaintenancePolicy()
    {
        return isset($this->maintenance_policy);
    }

    public function clearMaintenancePolicy()
    {
        unset($this->maintenance_policy);
    }

    /**
     * Specifies how to handle instances when a node in the group undergoes maintenance. Set to one of: DEFAULT, RESTART_IN_PLACE, or MIGRATE_WITHIN_NODE_GROUP. The default value is DEFAULT. For more information, see  Maintenance policies.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.MaintenancePolicy maintenance_policy = 528327646;</code>
     * @param int $var
     * @return $this
     */
    public function setMaintenancePolicy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroup\MaintenancePolicy::class);
        $this->maintenance_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupMaintenanceWindow maintenance_window = 186374812;</code>
     * @return \Google\Cloud\Compute\V1\NodeGroupMaintenanceWindow|null
     */
    public function getMaintenanceWindow()
    {
        return isset($this->maintenance_window) ? $this->maintenance_window : null;
    }

    public function hasMaintenanceWindow()
    {
        return isset($this->maintenance_window);
    }

    public function clearMaintenanceWindow()
    {
        unset($this->maintenance_window);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroupMaintenanceWindow maintenance_window = 186374812;</code>
     * @param \Google\Cloud\Compute\V1\NodeGroupMaintenanceWindow $var
     * @return $this
     */
    public function setMaintenanceWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NodeGroupMaintenanceWindow::class);
        $this->maintenance_window = $var;

        return $this;
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The resource name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
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
     * URL of the node template to create the node group from.
     *
     * Generated from protobuf field <code>string node_template = 323154455;</code>
     * @return string
     */
    public function getNodeTemplate()
    {
        return isset($this->node_template) ? $this->node_template : '';
    }

    public function hasNodeTemplate()
    {
        return isset($this->node_template);
    }

    public function clearNodeTemplate()
    {
        unset($this->node_template);
    }

    /**
     * URL of the node template to create the node group from.
     *
     * Generated from protobuf field <code>string node_template = 323154455;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->node_template = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The total number of nodes in the node group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     * @return int
     */
    public function getSize()
    {
        return isset($this->size) ? $this->size : 0;
    }

    public function hasSize()
    {
        return isset($this->size);
    }

    public function clearSize()
    {
        unset($this->size);
    }

    /**
     * [Output Only] The total number of nodes in the node group.
     *
     * Generated from protobuf field <code>int32 size = 3530753;</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.Status status = 181260274;</code>
     * @return int
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : 0;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.google.cloud.compute.v1.NodeGroup.Status status = 181260274;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\NodeGroup\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] The name of the zone where the node group resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @return string
     */
    public function getZone()
    {
        return isset($this->zone) ? $this->zone : '';
    }

    public function hasZone()
    {
        return isset($this->zone);
    }

    public function clearZone()
    {
        unset($this->zone);
    }

    /**
     * [Output Only] The name of the zone where the node group resides, such as us-central1-a.
     *
     * Generated from protobuf field <code>string zone = 3744684;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

