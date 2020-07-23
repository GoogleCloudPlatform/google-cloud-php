<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/connection/v1/connection.proto

namespace Google\Cloud\BigQuery\Connection\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration parameters to establish connection with an external data
 * source, except the credential attributes.
 *
 * Generated from protobuf message <code>google.cloud.bigquery.connection.v1.Connection</code>
 */
class Connection extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the connection in the form of:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * User provided display name for the connection.
     *
     * Generated from protobuf field <code>string friendly_name = 2;</code>
     */
    private $friendly_name = '';
    /**
     * User provided description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Output only. The creation timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 creation_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $creation_time = 0;
    /**
     * Output only. The last update timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 last_modified_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $last_modified_time = 0;
    /**
     * Output only. True, if credential is configured for this connection.
     *
     * Generated from protobuf field <code>bool has_credential = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $has_credential = false;
    protected $properties;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the connection in the form of:
     *           `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *     @type string $friendly_name
     *           User provided display name for the connection.
     *     @type string $description
     *           User provided description.
     *     @type \Google\Cloud\Bigquery\Connection\V1\CloudSqlProperties $cloud_sql
     *           Cloud SQL properties.
     *     @type int|string $creation_time
     *           Output only. The creation timestamp of the connection.
     *     @type int|string $last_modified_time
     *           Output only. The last update timestamp of the connection.
     *     @type bool $has_credential
     *           Output only. True, if credential is configured for this connection.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Connection\V1\Connection::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the connection in the form of:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the connection in the form of:
     * `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
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
     * User provided display name for the connection.
     *
     * Generated from protobuf field <code>string friendly_name = 2;</code>
     * @return string
     */
    public function getFriendlyName()
    {
        return $this->friendly_name;
    }

    /**
     * User provided display name for the connection.
     *
     * Generated from protobuf field <code>string friendly_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFriendlyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->friendly_name = $var;

        return $this;
    }

    /**
     * User provided description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User provided description.
     *
     * Generated from protobuf field <code>string description = 3;</code>
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
     * Cloud SQL properties.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.CloudSqlProperties cloud_sql = 4;</code>
     * @return \Google\Cloud\Bigquery\Connection\V1\CloudSqlProperties
     */
    public function getCloudSql()
    {
        return $this->readOneof(4);
    }

    /**
     * Cloud SQL properties.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.connection.v1.CloudSqlProperties cloud_sql = 4;</code>
     * @param \Google\Cloud\Bigquery\Connection\V1\CloudSqlProperties $var
     * @return $this
     */
    public function setCloudSql($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Connection\V1\CloudSqlProperties::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. The creation timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 creation_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCreationTime()
    {
        return $this->creation_time;
    }

    /**
     * Output only. The creation timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 creation_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_time = $var;

        return $this;
    }

    /**
     * Output only. The last update timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 last_modified_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getLastModifiedTime()
    {
        return $this->last_modified_time;
    }

    /**
     * Output only. The last update timestamp of the connection.
     *
     * Generated from protobuf field <code>int64 last_modified_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastModifiedTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_modified_time = $var;

        return $this;
    }

    /**
     * Output only. True, if credential is configured for this connection.
     *
     * Generated from protobuf field <code>bool has_credential = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasCredential()
    {
        return $this->has_credential;
    }

    /**
     * Output only. True, if credential is configured for this connection.
     *
     * Generated from protobuf field <code>bool has_credential = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasCredential($var)
    {
        GPBUtil::checkBool($var);
        $this->has_credential = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getProperties()
    {
        return $this->whichOneof("properties");
    }

}

