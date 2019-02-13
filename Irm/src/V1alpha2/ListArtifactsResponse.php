<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents_service.proto

namespace Google\Cloud\Irm\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the ListArtifacts method.
 *
 * Generated from protobuf message <code>google.cloud.irm.v1alpha2.ListArtifactsResponse</code>
 */
class ListArtifactsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of artifacts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.irm.v1alpha2.Artifact artifacts = 1;</code>
     */
    private $artifacts;
    /**
     * Page token to fetch the next set of artifacts.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Irm\V1alpha2\Artifact[]|\Google\Protobuf\Internal\RepeatedField $artifacts
     *           List of artifacts.
     *     @type string $next_page_token
     *           Page token to fetch the next set of artifacts.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Irm\V1Alpha2\IncidentsService::initOnce();
        parent::__construct($data);
    }

    /**
     * List of artifacts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.irm.v1alpha2.Artifact artifacts = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArtifacts()
    {
        return $this->artifacts;
    }

    /**
     * List of artifacts.
     *
     * Generated from protobuf field <code>repeated .google.cloud.irm.v1alpha2.Artifact artifacts = 1;</code>
     * @param \Google\Cloud\Irm\V1alpha2\Artifact[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArtifacts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Irm\V1alpha2\Artifact::class);
        $this->artifacts = $arr;

        return $this;
    }

    /**
     * Page token to fetch the next set of artifacts.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Page token to fetch the next set of artifacts.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

