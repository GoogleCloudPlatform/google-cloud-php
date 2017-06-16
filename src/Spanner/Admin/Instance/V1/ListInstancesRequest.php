<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Cloud\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The request for [ListInstances][google.spanner.admin.instance.v1.InstanceAdmin.ListInstances].
 * </pre>
 *
 * Protobuf type <code>Google\Spanner\Admin\Instance\V1\ListInstancesRequest</code>
 */
class ListInstancesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The name of the project for which a list of instances is
     * requested. Values are of the form `projects/<project>`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * <pre>
     * Number of instances to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * <pre>
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.instance.v1.ListInstancesResponse.next_page_token] from a
     * previous [ListInstancesResponse][google.spanner.admin.instance.v1.ListInstancesResponse].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * <pre>
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * name
     *   * display_name
     *   * labels.key where key is the name of a label
     * Some examples of using filters are:
     *   * name:* --> The instance has a name.
     *   * name:Howl --> The instance's name contains the string "howl".
     *   * name:HOWL --> Equivalent to above.
     *   * NAME:howl --> Equivalent to above.
     *   * labels.env:* --> The instance has the label "env".
     *   * labels.env:dev --> The instance has the label "env" and the value of
     *                        the label contains the string "dev".
     *   * name:howl labels.env:dev --> The instance's name contains "howl" and
     *                                  it has the label "env" with its value
     *                                  containing "dev".
     * </pre>
     *
     * <code>string filter = 4;</code>
     */
    private $filter = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The name of the project for which a list of instances is
     * requested. Values are of the form `projects/<project>`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * <pre>
     * Required. The name of the project for which a list of instances is
     * requested. Values are of the form `projects/<project>`.
     * </pre>
     *
     * <code>string parent = 1;</code>
     * @param string $var
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * <pre>
     * Number of instances to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <pre>
     * Number of instances to be returned in the response. If 0 or less, defaults
     * to the server's maximum allowed page size.
     * </pre>
     *
     * <code>int32 page_size = 2;</code>
     * @param int $var
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * <pre>
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.instance.v1.ListInstancesResponse.next_page_token] from a
     * previous [ListInstancesResponse][google.spanner.admin.instance.v1.ListInstancesResponse].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * <pre>
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.instance.v1.ListInstancesResponse.next_page_token] from a
     * previous [ListInstancesResponse][google.spanner.admin.instance.v1.ListInstancesResponse].
     * </pre>
     *
     * <code>string page_token = 3;</code>
     * @param string $var
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * <pre>
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * name
     *   * display_name
     *   * labels.key where key is the name of a label
     * Some examples of using filters are:
     *   * name:* --> The instance has a name.
     *   * name:Howl --> The instance's name contains the string "howl".
     *   * name:HOWL --> Equivalent to above.
     *   * NAME:howl --> Equivalent to above.
     *   * labels.env:* --> The instance has the label "env".
     *   * labels.env:dev --> The instance has the label "env" and the value of
     *                        the label contains the string "dev".
     *   * name:howl labels.env:dev --> The instance's name contains "howl" and
     *                                  it has the label "env" with its value
     *                                  containing "dev".
     * </pre>
     *
     * <code>string filter = 4;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * An expression for filtering the results of the request. Filter rules are
     * case insensitive. The fields eligible for filtering are:
     *   * name
     *   * display_name
     *   * labels.key where key is the name of a label
     * Some examples of using filters are:
     *   * name:* --> The instance has a name.
     *   * name:Howl --> The instance's name contains the string "howl".
     *   * name:HOWL --> Equivalent to above.
     *   * NAME:howl --> Equivalent to above.
     *   * labels.env:* --> The instance has the label "env".
     *   * labels.env:dev --> The instance has the label "env" and the value of
     *                        the label contains the string "dev".
     *   * name:howl labels.env:dev --> The instance's name contains "howl" and
     *                                  it has the label "env" with its value
     *                                  containing "dev".
     * </pre>
     *
     * <code>string filter = 4;</code>
     * @param string $var
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

