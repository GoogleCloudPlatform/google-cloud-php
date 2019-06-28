<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\Action;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Publish the result summary of a DlpJob to the Cloud Security
 * Command Center (CSCC Alpha).
 * This action is only available for projects which are parts of
 * an organization and whitelisted for the alpha Cloud Security Command
 * Center.
 * The action will publish count of finding instances and their info types.
 * The summary of findings will be persisted in CSCC and are governed by CSCC
 * service-specific policy, see https://cloud.google.com/terms/service-terms
 * Only a single instance of this action can be specified.
 * Compatible with: Inspect
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.Action.PublishSummaryToCscc</code>
 */
final class PublishSummaryToCscc extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublishSummaryToCscc::class, \Google\Cloud\Dlp\V2\Action_PublishSummaryToCscc::class);

