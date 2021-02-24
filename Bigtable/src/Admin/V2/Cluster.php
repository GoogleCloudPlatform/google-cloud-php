<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/instance.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resizable group of nodes in a particular cloud location, capable
 * of serving all [Tables][google.bigtable.admin.v2.Table] in the parent
 * [Instance][google.bigtable.admin.v2.Instance].
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Cluster</code>
 */
class Cluster extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the cluster. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * (`CreationOnly`)
     * The location where this cluster's nodes and storage reside. For best
     * performance, clients should be located as close as possible to this
     * cluster. Currently only zones are supported, so values should be of the
     * form `projects/{project}/locations/{zone}`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.resource_reference) = {</code>
     */
    private $location = '';
    /**
     * The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $state = 0;
    /**
     * Required. The number of nodes allocated to this cluster. More nodes enable
     * higher throughput and more consistent performance.
     *
     * Generated from protobuf field <code>int32 serve_nodes = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $serve_nodes = 0;
    /**
     * (`CreationOnly`)
     * The type of storage used by this cluster to serve its
     * parent instance's tables, unless explicitly overridden.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.StorageType default_storage_type = 5;</code>
     */
    private $default_storage_type = 0;
    /**
     * Immutable. The encryption configuration for CMEK-protected clusters.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.EncryptionConfig encryption_config = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $encryption_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The unique name of the cluster. Values are of the form
     *           `projects/{project}/instances/{instance}/clusters/[a-z][-a-z0-9]*`.
     *     @type string $location
     *           (`CreationOnly`)
     *           The location where this cluster's nodes and storage reside. For best
     *           performance, clients should be located as close as possible to this
     *           cluster. Currently only zones are supported, so values should be of the
     *           form `projects/{project}/locations/{zone}`.
     *     @type int $state
     *           The current state of the cluster.
     *     @type int $serve_nodes
     *           Required. The number of nodes allocated to this cluster. More nodes enable
     *           higher throughput and more consistent performance.
     *     @type int $default_storage_type
     *           (`CreationOnly`)
     *           The type of storage used by this cluster to serve its
     *           parent instance's tables, unless explicitly overridden.
     *     @type \Google\Cloud\Bigtable\Admin\V2\Cluster\EncryptionConfig $encryption_config
     *           Immutable. The encryption configuration for CMEK-protected clusters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Instance::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the cluster. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The unique name of the cluster. Values are of the form
     * `projects/{project}/instances/{instance}/clusters/[a-z][-a-z0-9]*`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * (`CreationOnly`)
     * The location where this cluster's nodes and storage reside. For best
     * performance, clients should be located as close as possible to this
     * cluster. Currently only zones are supported, so values should be of the
     * form `projects/{project}/locations/{zone}`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * (`CreationOnly`)
     * The location where this cluster's nodes and storage reside. For best
     * performance, clients should be located as close as possible to this
     * cluster. Currently only zones are supported, so values should be of the
     * form `projects/{project}/locations/{zone}`.
     *
     * Generated from protobuf field <code>string location = 2 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.State state = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Cluster\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Required. The number of nodes allocated to this cluster. More nodes enable
     * higher throughput and more consistent performance.
     *
     * Generated from protobuf field <code>int32 serve_nodes = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getServeNodes()
    {
        return $this->serve_nodes;
    }

    /**
     * Required. The number of nodes allocated to this cluster. More nodes enable
     * higher throughput and more consistent performance.
     *
     * Generated from protobuf field <code>int32 serve_nodes = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setServeNodes($var)
    {
        GPBUtil::checkInt32($var);
        $this->serve_nodes = $var;

        return $this;
    }

    /**
     * (`CreationOnly`)
     * The type of storage used by this cluster to serve its
     * parent instance's tables, unless explicitly overridden.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.StorageType default_storage_type = 5;</code>
     * @return int
     */
    public function getDefaultStorageType()
    {
        return $this->default_storage_type;
    }

    /**
     * (`CreationOnly`)
     * The type of storage used by this cluster to serve its
     * parent instance's tables, unless explicitly overridden.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.StorageType default_storage_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDefaultStorageType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\StorageType::class);
        $this->default_storage_type = $var;

        return $this;
    }

    /**
     * Immutable. The encryption configuration for CMEK-protected clusters.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.EncryptionConfig encryption_config = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\Cluster\EncryptionConfig
     */
    public function getEncryptionConfig()
    {
        return isset($this->encryption_config) ? $this->encryption_config : null;
    }

    public function hasEncryptionConfig()
    {
        return isset($this->encryption_config);
    }

    public function clearEncryptionConfig()
    {
        unset($this->encryption_config);
    }

    /**
     * Immutable. The encryption configuration for CMEK-protected clusters.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster.EncryptionConfig encryption_config = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\Cluster\EncryptionConfig $var
     * @return $this
     */
    public function setEncryptionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\Cluster\EncryptionConfig::class);
        $this->encryption_config = $var;

        return $this;
    }

}

