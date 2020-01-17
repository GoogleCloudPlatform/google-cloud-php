<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/controller.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update an active breakpoint.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest</code>
 */
class UpdateActiveBreakpointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Identifies the debuggee being debugged.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $debuggee_id = '';
    /**
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $breakpoint = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $debuggee_id
     *           Required. Identifies the debuggee being debugged.
     *     @type \Google\Cloud\Debugger\V2\Breakpoint $breakpoint
     *           Required. Updated breakpoint information.
     *           The field `id` must be set.
     *           The agent must echo all Breakpoint specification fields in the update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Controller::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Identifies the debuggee being debugged.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDebuggeeId()
    {
        return $this->debuggee_id;
    }

    /**
     * Required. Identifies the debuggee being debugged.
     *
     * Generated from protobuf field <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDebuggeeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->debuggee_id = $var;

        return $this;
    }

    /**
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Debugger\V2\Breakpoint
     */
    public function getBreakpoint()
    {
        return $this->breakpoint;
    }

    /**
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Debugger\V2\Breakpoint $var
     * @return $this
     */
    public function setBreakpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\Breakpoint::class);
        $this->breakpoint = $var;

        return $this;
    }

}

