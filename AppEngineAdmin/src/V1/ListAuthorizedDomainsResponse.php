<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/appengine/v1/appengine.proto

namespace Google\Cloud\AppEngine\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for `AuthorizedDomains.ListAuthorizedDomains`.
 *
 * Generated from protobuf message <code>google.appengine.v1.ListAuthorizedDomainsResponse</code>
 */
class ListAuthorizedDomainsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The authorized domains belonging to the user.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.AuthorizedDomain domains = 1;</code>
     */
    private $domains;
    /**
     * Continuation token for fetching the next page of results.
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
     *     @type \Google\Cloud\AppEngine\V1\AuthorizedDomain[]|\Google\Protobuf\Internal\RepeatedField $domains
     *           The authorized domains belonging to the user.
     *     @type string $next_page_token
     *           Continuation token for fetching the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Appengine\V1\Appengine::initOnce();
        parent::__construct($data);
    }

    /**
     * The authorized domains belonging to the user.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.AuthorizedDomain domains = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * The authorized domains belonging to the user.
     *
     * Generated from protobuf field <code>repeated .google.appengine.v1.AuthorizedDomain domains = 1;</code>
     * @param \Google\Cloud\AppEngine\V1\AuthorizedDomain[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AppEngine\V1\AuthorizedDomain::class);
        $this->domains = $arr;

        return $this;
    }

    /**
     * Continuation token for fetching the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Continuation token for fetching the next page of results.
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

