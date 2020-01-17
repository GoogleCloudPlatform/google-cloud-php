<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_table_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [google.bigtable.admin.v2.BigtableTableAdmin.ListTables][google.bigtable.admin.v2.BigtableTableAdmin.ListTables]
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.ListTablesRequest</code>
 */
class ListTablesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The view to be applied to the returned tables' fields.
     * Defaults to `NAME_ONLY` if unspecified; no others are currently supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     */
    protected $view = 0;
    /**
     * Maximum number of results per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    protected $page_size = 0;
    /**
     * The value of `next_page_token` returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The unique name of the instance for which tables should be listed.
     *           Values are of the form `projects/<project>/instances/<instance>`.
     *     @type int $view
     *           The view to be applied to the returned tables' fields.
     *           Defaults to `NAME_ONLY` if unspecified; no others are currently supported.
     *     @type int $page_size
     *           Maximum number of results per page.
     *           CURRENTLY UNIMPLEMENTED AND IGNORED.
     *     @type string $page_token
     *           The value of `next_page_token` returned by a previous call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableTableAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The unique name of the instance for which tables should be listed.
     * Values are of the form `projects/<project>/instances/<instance>`.
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
     * The view to be applied to the returned tables' fields.
     * Defaults to `NAME_ONLY` if unspecified; no others are currently supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * The view to be applied to the returned tables' fields.
     * Defaults to `NAME_ONLY` if unspecified; no others are currently supported.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.View view = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Table_View::class);
        $this->view = $var;

        return $this;
    }

    /**
     * Maximum number of results per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of results per page.
     * CURRENTLY UNIMPLEMENTED AND IGNORED.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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
     * The value of `next_page_token` returned by a previous call.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value of `next_page_token` returned by a previous call.
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

