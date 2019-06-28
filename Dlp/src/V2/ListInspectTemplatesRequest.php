<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListInspectTemplates.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.ListInspectTemplatesRequest</code>
 */
final class ListInspectTemplatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Optional comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     */
    private $order_by = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name, for example projects/my-project-id or
     *           organizations/my-org-id.
     *     @type string $page_token
     *           Optional page token to continue retrieval. Comes from previous call
     *           to `ListInspectTemplates`.
     *     @type int $page_size
     *           Optional size of the page, can be limited by server. If zero server returns
     *           a page of max size 100.
     *     @type string $order_by
     *           Optional comma separated list of fields to order by,
     *           followed by `asc` or `desc` postfix. This list is case-insensitive,
     *           default sorting order is ascending, redundant space characters are
     *           insignificant.
     *           Example: `name asc,update_time, create_time desc`
     *           Supported fields are:
     *           - `create_time`: corresponds to time the template was created.
     *           - `update_time`: corresponds to time the template was last updated.
     *           - `name`: corresponds to template's name.
     *           - `display_name`: corresponds to template's display name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
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
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional page token to continue retrieval. Comes from previous call
     * to `ListInspectTemplates`.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional size of the page, can be limited by server. If zero server returns
     * a page of max size 100.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
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
     * Optional comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @return string
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * Optional comma separated list of fields to order by,
     * followed by `asc` or `desc` postfix. This list is case-insensitive,
     * default sorting order is ascending, redundant space characters are
     * insignificant.
     * Example: `name asc,update_time, create_time desc`
     * Supported fields are:
     * - `create_time`: corresponds to time the template was created.
     * - `update_time`: corresponds to time the template was last updated.
     * - `name`: corresponds to template's name.
     * - `display_name`: corresponds to template's display name.
     *
     * Generated from protobuf field <code>string order_by = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        GPBUtil::checkString($var, True);
        $this->order_by = $var;

        return $this;
    }

}

