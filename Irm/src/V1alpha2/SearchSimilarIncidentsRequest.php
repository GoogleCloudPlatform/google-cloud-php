<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents_service.proto

namespace Google\Cloud\Irm\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the SearchSimilarIncidents method.
 *
 * Generated from protobuf message <code>google.cloud.irm.v1alpha2.SearchSimilarIncidentsRequest</code>
 */
class SearchSimilarIncidentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the incident or signal, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Number of similar incidents to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Page token from an earlier query, as returned in 'next_page_token'.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the incident or signal, e.g.
     *           "projects/{project_id}/incidents/{incident_id}".
     *     @type int $page_size
     *           Number of similar incidents to return.
     *     @type string $page_token
     *           Page token from an earlier query, as returned in 'next_page_token'.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Irm\V1Alpha2\IncidentsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the incident or signal, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the incident or signal, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
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
     * Number of similar incidents to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of similar incidents to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Page token from an earlier query, as returned in 'next_page_token'.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Page token from an earlier query, as returned in 'next_page_token'.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

