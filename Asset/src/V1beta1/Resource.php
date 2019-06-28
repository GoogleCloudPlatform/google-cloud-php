<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1beta1/assets.proto

namespace Google\Cloud\Asset\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a cloud resource.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1beta1.Resource</code>
 */
final class Resource extends \Google\Protobuf\Internal\Message
{
    /**
     * The API version. Example: "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    private $version = '';
    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * For example:
     * `"https://www.googleapis.com/discovery/v1/apis/compute/v1/rest"`.
     * It will be left unspecified for resources without a discovery-based API,
     * such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     */
    private $discovery_document_uri = '';
    /**
     * The JSON schema name listed in the discovery document.
     * Example: "Project". It will be left unspecified for resources (such as
     * Cloud Bigtable) without a discovery-based API.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     */
    private $discovery_name = '';
    /**
     * The REST URL for accessing the resource. An HTTP GET operation using this
     * URL returns the resource itself.
     * Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`.
     * It will be left unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     */
    private $resource_url = '';
    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For GCP assets, it is the parent resource defined in the [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * For example:
     * `"//cloudresourcemanager.googleapis.com/projects/my_project_123"`.
     * For third-party assets, it is up to the users to define.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     */
    private $parent = '';
    /**
     * The content of the resource, in which some sensitive fields are scrubbed
     * away and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     */
    private $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           The API version. Example: "v1".
     *     @type string $discovery_document_uri
     *           The URL of the discovery document containing the resource's JSON schema.
     *           For example:
     *           `"https://www.googleapis.com/discovery/v1/apis/compute/v1/rest"`.
     *           It will be left unspecified for resources without a discovery-based API,
     *           such as Cloud Bigtable.
     *     @type string $discovery_name
     *           The JSON schema name listed in the discovery document.
     *           Example: "Project". It will be left unspecified for resources (such as
     *           Cloud Bigtable) without a discovery-based API.
     *     @type string $resource_url
     *           The REST URL for accessing the resource. An HTTP GET operation using this
     *           URL returns the resource itself.
     *           Example:
     *           `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`.
     *           It will be left unspecified for resources without a REST API.
     *     @type string $parent
     *           The full name of the immediate parent of this resource. See
     *           [Resource
     *           Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     *           for more information.
     *           For GCP assets, it is the parent resource defined in the [Cloud IAM policy
     *           hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     *           For example:
     *           `"//cloudresourcemanager.googleapis.com/projects/my_project_123"`.
     *           For third-party assets, it is up to the users to define.
     *     @type \Google\Protobuf\Struct $data
     *           The content of the resource, in which some sensitive fields are scrubbed
     *           away and may not be present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1Beta1\Assets::initOnce();
        parent::__construct($data);
    }

    /**
     * The API version. Example: "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The API version. Example: "v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * For example:
     * `"https://www.googleapis.com/discovery/v1/apis/compute/v1/rest"`.
     * It will be left unspecified for resources without a discovery-based API,
     * such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     * @return string
     */
    public function getDiscoveryDocumentUri()
    {
        return $this->discovery_document_uri;
    }

    /**
     * The URL of the discovery document containing the resource's JSON schema.
     * For example:
     * `"https://www.googleapis.com/discovery/v1/apis/compute/v1/rest"`.
     * It will be left unspecified for resources without a discovery-based API,
     * such as Cloud Bigtable.
     *
     * Generated from protobuf field <code>string discovery_document_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveryDocumentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovery_document_uri = $var;

        return $this;
    }

    /**
     * The JSON schema name listed in the discovery document.
     * Example: "Project". It will be left unspecified for resources (such as
     * Cloud Bigtable) without a discovery-based API.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     * @return string
     */
    public function getDiscoveryName()
    {
        return $this->discovery_name;
    }

    /**
     * The JSON schema name listed in the discovery document.
     * Example: "Project". It will be left unspecified for resources (such as
     * Cloud Bigtable) without a discovery-based API.
     *
     * Generated from protobuf field <code>string discovery_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDiscoveryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->discovery_name = $var;

        return $this;
    }

    /**
     * The REST URL for accessing the resource. An HTTP GET operation using this
     * URL returns the resource itself.
     * Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`.
     * It will be left unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     * @return string
     */
    public function getResourceUrl()
    {
        return $this->resource_url;
    }

    /**
     * The REST URL for accessing the resource. An HTTP GET operation using this
     * URL returns the resource itself.
     * Example:
     * `https://cloudresourcemanager.googleapis.com/v1/projects/my-project-123`.
     * It will be left unspecified for resources without a REST API.
     *
     * Generated from protobuf field <code>string resource_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_url = $var;

        return $this;
    }

    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For GCP assets, it is the parent resource defined in the [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * For example:
     * `"//cloudresourcemanager.googleapis.com/projects/my_project_123"`.
     * For third-party assets, it is up to the users to define.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The full name of the immediate parent of this resource. See
     * [Resource
     * Names](https://cloud.google.com/apis/design/resource_names#full_resource_name)
     * for more information.
     * For GCP assets, it is the parent resource defined in the [Cloud IAM policy
     * hierarchy](https://cloud.google.com/iam/docs/overview#policy_hierarchy).
     * For example:
     * `"//cloudresourcemanager.googleapis.com/projects/my_project_123"`.
     * For third-party assets, it is up to the users to define.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
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
     * The content of the resource, in which some sensitive fields are scrubbed
     * away and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @return \Google\Protobuf\Struct
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * The content of the resource, in which some sensitive fields are scrubbed
     * away and may not be present.
     *
     * Generated from protobuf field <code>.google.protobuf.Struct data = 6;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->data = $var;

        return $this;
    }

}

