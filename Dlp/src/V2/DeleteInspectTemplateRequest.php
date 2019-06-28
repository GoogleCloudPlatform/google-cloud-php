<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DeleteInspectTemplate.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.DeleteInspectTemplateRequest</code>
 */
final class DeleteInspectTemplateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the organization and inspectTemplate to be deleted, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of the organization and inspectTemplate to be deleted, for
     *           example `organizations/433245324/inspectTemplates/432452342` or
     *           projects/project-id/inspectTemplates/432452342.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the organization and inspectTemplate to be deleted, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Resource name of the organization and inspectTemplate to be deleted, for
     * example `organizations/433245324/inspectTemplates/432452342` or
     * projects/project-id/inspectTemplates/432452342.
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

}

