<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetLocationsRequest sets the locations of the cluster.
 *
 * Generated from protobuf message <code>google.container.v1.SetLocationsRequest</code>
 */
class SetLocationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';
    /**
     * Required. Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_id = '';
    /**
     * Required. The desired list of Google Compute Engine
     * [zones](/compute/docs/zones#available) in which the cluster's nodes
     * should be located. Changing the locations a cluster is in will result
     * in nodes being either created or removed from the cluster, depending on
     * whether locations are being added or removed.
     * This list must always include the cluster's primary zone.
     *
     * Generated from protobuf field <code>repeated string locations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $locations;
    /**
     * The name (project, location, cluster) of the cluster to set locations.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. Deprecated. The Google Developers Console [project ID or project
     *           number](https://support.google.com/cloud/answer/6158840).
     *           This field has been deprecated and replaced by the name field.
     *     @type string $zone
     *           Required. Deprecated. The name of the Google Compute Engine
     *           [zone](/compute/docs/zones#available) in which the cluster
     *           resides.
     *           This field has been deprecated and replaced by the name field.
     *     @type string $cluster_id
     *           Required. Deprecated. The name of the cluster to upgrade.
     *           This field has been deprecated and replaced by the name field.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $locations
     *           Required. The desired list of Google Compute Engine
     *           [zones](/compute/docs/zones#available) in which the cluster's nodes
     *           should be located. Changing the locations a cluster is in will result
     *           in nodes being either created or removed from the cluster, depending on
     *           whether locations are being added or removed.
     *           This list must always include the cluster's primary zone.
     *     @type string $name
     *           The name (project, location, cluster) of the cluster to set locations.
     *           Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. Deprecated. The Google Developers Console [project ID or project
     * number](https://support.google.com/cloud/answer/6158840).
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string project_id = 1 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Required. Deprecated. The name of the Google Compute Engine
     * [zone](/compute/docs/zones#available) in which the cluster
     * resides.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string zone = 2 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Required. Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. Deprecated. The name of the cluster to upgrade.
     * This field has been deprecated and replaced by the name field.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [deprecated = true, (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The desired list of Google Compute Engine
     * [zones](/compute/docs/zones#available) in which the cluster's nodes
     * should be located. Changing the locations a cluster is in will result
     * in nodes being either created or removed from the cluster, depending on
     * whether locations are being added or removed.
     * This list must always include the cluster's primary zone.
     *
     * Generated from protobuf field <code>repeated string locations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Required. The desired list of Google Compute Engine
     * [zones](/compute/docs/zones#available) in which the cluster's nodes
     * should be located. Changing the locations a cluster is in will result
     * in nodes being either created or removed from the cluster, depending on
     * whether locations are being added or removed.
     * This list must always include the cluster's primary zone.
     *
     * Generated from protobuf field <code>repeated string locations = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLocations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->locations = $arr;

        return $this;
    }

    /**
     * The name (project, location, cluster) of the cluster to set locations.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster) of the cluster to set locations.
     * Specified in the format 'projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;'.
     *
     * Generated from protobuf field <code>string name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

