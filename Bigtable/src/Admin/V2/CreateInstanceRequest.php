<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.CreateInstance.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the project in which to create the new instance.
     * Values are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The ID to be used when referring to the new instance within its project,
     * e.g., just `myinstance` rather than
     * `projects/myproject/instances/myinstance`.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     */
    protected $instance_id = '';
    /**
     * The instance to create.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 3;</code>
     */
    protected $instance = null;
    /**
     * The clusters to be created within the instance, mapped by desired
     * cluster ID, e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     * Fields marked `OutputOnly` must be left blank.
     * Currently, at most two clusters can be specified.
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Cluster> clusters = 4;</code>
     */
    private $clusters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The unique name of the project in which to create the new instance.
     *           Values are of the form `projects/<project>`.
     *     @type string $instance_id
     *           The ID to be used when referring to the new instance within its project,
     *           e.g., just `myinstance` rather than
     *           `projects/myproject/instances/myinstance`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\Instance $instance
     *           The instance to create.
     *           Fields marked `OutputOnly` must be left blank.
     *     @type array|\Google\Protobuf\Internal\MapField $clusters
     *           The clusters to be created within the instance, mapped by desired
     *           cluster ID, e.g., just `mycluster` rather than
     *           `projects/myproject/instances/myinstance/clusters/mycluster`.
     *           Fields marked `OutputOnly` must be left blank.
     *           Currently, at most two clusters can be specified.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the project in which to create the new instance.
     * Values are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The unique name of the project in which to create the new instance.
     * Values are of the form `projects/<project>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The ID to be used when referring to the new instance within its project,
     * e.g., just `myinstance` rather than
     * `projects/myproject/instances/myinstance`.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * The ID to be used when referring to the new instance within its project,
     * e.g., just `myinstance` rather than
     * `projects/myproject/instances/myinstance`.
     *
     * Generated from protobuf field <code>string instance_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance_id = $var;

        return $this;
    }

    /**
     * The instance to create.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 3;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * The instance to create.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Instance instance = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Instance::class);
        $this->instance = $var;

        return $this;
    }

    /**
     * The clusters to be created within the instance, mapped by desired
     * cluster ID, e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     * Fields marked `OutputOnly` must be left blank.
     * Currently, at most two clusters can be specified.
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Cluster> clusters = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getClusters()
    {
        return $this->clusters;
    }

    /**
     * The clusters to be created within the instance, mapped by desired
     * cluster ID, e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     * Fields marked `OutputOnly` must be left blank.
     * Currently, at most two clusters can be specified.
     *
     * Generated from protobuf field <code>map<string, .google.bigtable.admin.v2.Cluster> clusters = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setClusters($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Bigtable\Admin\V2\Cluster::class);
        $this->clusters = $arr;

        return $this;
    }

}

