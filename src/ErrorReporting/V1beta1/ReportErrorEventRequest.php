<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouderrorreporting/v1beta1/report_errors_service.proto

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request for reporting an individual error event.
 *
 * Protobuf type <code>Google\Devtools\Clouderrorreporting\V1beta1\ReportErrorEventRequest</code>
 */
class ReportErrorEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1;</code>
     */
    private $project_name = '';
    /**
     * [Required] The error event to be reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2;</code>
     */
    private $event = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouderrorreporting\V1Beta1\ReportErrorsService::initOnce();
        parent::__construct();
    }

    /**
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1;</code>
     * @return string
     */
    public function getProjectName()
    {
        return $this->project_name;
    }

    /**
     * [Required] The resource name of the Google Cloud Platform project. Written
     * as `projects/` plus the
     * [Google Cloud Platform project ID](https://support.google.com/cloud/answer/6158840).
     * Example: `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string project_name = 1;</code>
     * @param string $var
     */
    public function setProjectName($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_name = $var;

        return $this;
    }

    /**
     * [Required] The error event to be reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2;</code>
     * @return \Google\Cloud\ErrorReporting\V1beta1\ReportedErrorEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * [Required] The error event to be reported.
     *
     * Generated from protobuf field <code>.google.devtools.clouderrorreporting.v1beta1.ReportedErrorEvent event = 2;</code>
     * @param \Google\Cloud\ErrorReporting\V1beta1\ReportedErrorEvent $var
     */
    public function setEvent(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ErrorReporting\V1beta1\ReportedErrorEvent::class);
        $this->event = $var;

        return $this;
    }

}

