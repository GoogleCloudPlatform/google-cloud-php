<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateStoredInfoType.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.CreateStoredInfoTypeRequest</code>
 */
class CreateStoredInfoTypeRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The parent resource name, for example projects/my-project-id or
     * organizations/my-org-id.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     */
    private $config = null;
    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     */
    private $stored_info_type_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The parent resource name, for example projects/my-project-id or
     *           organizations/my-org-id.
     *     @type \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $config
     *           Configuration of the storedInfoType to create.
     *     @type string $stored_info_type_id
     *           The storedInfoType ID can contain uppercase and lowercase letters,
     *           numbers, and hyphens; that is, it must match the regular
     *           expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     *           characters. Can be empty to allow the system to generate one.
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
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     * @return \Google\Cloud\Dlp\V2\StoredInfoTypeConfig
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Configuration of the storedInfoType to create.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.StoredInfoTypeConfig config = 2;</code>
     * @param \Google\Cloud\Dlp\V2\StoredInfoTypeConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\StoredInfoTypeConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @return string
     */
    public function getStoredInfoTypeId()
    {
        return $this->stored_info_type_id;
    }

    /**
     * The storedInfoType ID can contain uppercase and lowercase letters,
     * numbers, and hyphens; that is, it must match the regular
     * expression: `[a-zA-Z\\d-]+`. The maximum length is 100
     * characters. Can be empty to allow the system to generate one.
     *
     * Generated from protobuf field <code>string stored_info_type_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStoredInfoTypeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stored_info_type_id = $var;

        return $this;
    }

}

