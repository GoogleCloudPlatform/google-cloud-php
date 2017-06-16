<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Cloud\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * The `DeleteGroup` request. You can only delete a group if it has no children.
 * </pre>
 *
 * Protobuf type <code>Google\Monitoring\V3\DeleteGroupRequest</code>
 */
class DeleteGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The group to delete. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * </pre>
     *
     * <code>string name = 3;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The group to delete. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * </pre>
     *
     * <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * The group to delete. The format is
     * `"projects/{project_id_or_number}/groups/{group_id}"`.
     * </pre>
     *
     * <code>string name = 3;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

