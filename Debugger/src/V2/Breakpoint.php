<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/data.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents the breakpoint specification, status and results.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.Breakpoint</code>
 */
class Breakpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Breakpoint identifier, unique in the scope of the debuggee.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Action that the agent should perform when the code at the
     * breakpoint location is hit.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.Action action = 13;</code>
     */
    protected $action = 0;
    /**
     * Breakpoint source location.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.SourceLocation location = 2;</code>
     */
    protected $location = null;
    /**
     * Condition that triggers the breakpoint.
     * The condition is a compound boolean expression composed using expressions
     * in a programming language at the source location.
     *
     * Generated from protobuf field <code>string condition = 3;</code>
     */
    protected $condition = '';
    /**
     * List of read-only expressions to evaluate at the breakpoint location.
     * The expressions are composed using expressions in the programming language
     * at the source location. If the breakpoint action is `LOG`, the evaluated
     * expressions are included in log statements.
     *
     * Generated from protobuf field <code>repeated string expressions = 4;</code>
     */
    private $expressions;
    /**
     * Only relevant when action is `LOG`. Defines the message to log when
     * the breakpoint hits. The message may include parameter placeholders `$0`,
     * `$1`, etc. These placeholders are replaced with the evaluated value
     * of the appropriate expression. Expressions not referenced in
     * `log_message_format` are not logged.
     * Example: `Message received, id = $0, count = $1` with
     * `expressions` = `[ message.id, message.count ]`.
     *
     * Generated from protobuf field <code>string log_message_format = 14;</code>
     */
    protected $log_message_format = '';
    /**
     * Indicates the severity of the log. Only relevant when action is `LOG`.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.LogLevel log_level = 15;</code>
     */
    protected $log_level = 0;
    /**
     * When true, indicates that this is a final result and the
     * breakpoint state will not change from here on.
     *
     * Generated from protobuf field <code>bool is_final_state = 5;</code>
     */
    protected $is_final_state = false;
    /**
     * Time this breakpoint was created by the server in seconds resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11;</code>
     */
    protected $create_time = null;
    /**
     * Time this breakpoint was finalized as seen by the server in seconds
     * resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp final_time = 12;</code>
     */
    protected $final_time = null;
    /**
     * E-mail address of the user that created this breakpoint
     *
     * Generated from protobuf field <code>string user_email = 16;</code>
     */
    protected $user_email = '';
    /**
     * Breakpoint status.
     * The status includes an error flag and a human readable message.
     * This field is usually unset. The message can be either
     * informational or an error message. Regardless, clients should always
     * display the text message back to the user.
     * Error status indicates complete failure of the breakpoint.
     * Example (non-final state): `Still loading symbols...`
     * Examples (final state):
     * *   `Invalid line number` referring to location
     * *   `Field f not found in class C` referring to condition
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 10;</code>
     */
    protected $status = null;
    /**
     * The stack at breakpoint time, where stack_frames[0] represents the most
     * recently entered function.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.StackFrame stack_frames = 7;</code>
     */
    private $stack_frames;
    /**
     * Values of evaluated expressions at breakpoint time.
     * The evaluated expressions appear in exactly the same order they
     * are listed in the `expressions` field.
     * The `name` field holds the original expression text, the `value` or
     * `members` field holds the result of the evaluated expression.
     * If the expression cannot be evaluated, the `status` inside the `Variable`
     * will indicate an error and contain the error text.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable evaluated_expressions = 8;</code>
     */
    private $evaluated_expressions;
    /**
     * The `variable_table` exists to aid with computation, memory and network
     * traffic optimization.  It enables storing a variable once and reference
     * it from multiple variables, including variables stored in the
     * `variable_table` itself.
     * For example, the same `this` object, which may appear at many levels of
     * the stack, can have all of its data stored once in this table.  The
     * stack frame variables then would hold only a reference to it.
     * The variable `var_table_index` field is an index into this repeated field.
     * The stored objects are nameless and get their name from the referencing
     * variable. The effective variable is a merge of the referencing variable
     * and the referenced variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable variable_table = 9;</code>
     */
    private $variable_table;
    /**
     * A set of custom breakpoint properties, populated by the agent, to be
     * displayed to the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 17;</code>
     */
    private $labels;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Breakpoint identifier, unique in the scope of the debuggee.
     *     @type int $action
     *           Action that the agent should perform when the code at the
     *           breakpoint location is hit.
     *     @type \Google\Cloud\Debugger\V2\SourceLocation $location
     *           Breakpoint source location.
     *     @type string $condition
     *           Condition that triggers the breakpoint.
     *           The condition is a compound boolean expression composed using expressions
     *           in a programming language at the source location.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $expressions
     *           List of read-only expressions to evaluate at the breakpoint location.
     *           The expressions are composed using expressions in the programming language
     *           at the source location. If the breakpoint action is `LOG`, the evaluated
     *           expressions are included in log statements.
     *     @type string $log_message_format
     *           Only relevant when action is `LOG`. Defines the message to log when
     *           the breakpoint hits. The message may include parameter placeholders `$0`,
     *           `$1`, etc. These placeholders are replaced with the evaluated value
     *           of the appropriate expression. Expressions not referenced in
     *           `log_message_format` are not logged.
     *           Example: `Message received, id = $0, count = $1` with
     *           `expressions` = `[ message.id, message.count ]`.
     *     @type int $log_level
     *           Indicates the severity of the log. Only relevant when action is `LOG`.
     *     @type bool $is_final_state
     *           When true, indicates that this is a final result and the
     *           breakpoint state will not change from here on.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Time this breakpoint was created by the server in seconds resolution.
     *     @type \Google\Protobuf\Timestamp $final_time
     *           Time this breakpoint was finalized as seen by the server in seconds
     *           resolution.
     *     @type string $user_email
     *           E-mail address of the user that created this breakpoint
     *     @type \Google\Cloud\Debugger\V2\StatusMessage $status
     *           Breakpoint status.
     *           The status includes an error flag and a human readable message.
     *           This field is usually unset. The message can be either
     *           informational or an error message. Regardless, clients should always
     *           display the text message back to the user.
     *           Error status indicates complete failure of the breakpoint.
     *           Example (non-final state): `Still loading symbols...`
     *           Examples (final state):
     *           *   `Invalid line number` referring to location
     *           *   `Field f not found in class C` referring to condition
     *     @type \Google\Cloud\Debugger\V2\StackFrame[]|\Google\Protobuf\Internal\RepeatedField $stack_frames
     *           The stack at breakpoint time, where stack_frames[0] represents the most
     *           recently entered function.
     *     @type \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $evaluated_expressions
     *           Values of evaluated expressions at breakpoint time.
     *           The evaluated expressions appear in exactly the same order they
     *           are listed in the `expressions` field.
     *           The `name` field holds the original expression text, the `value` or
     *           `members` field holds the result of the evaluated expression.
     *           If the expression cannot be evaluated, the `status` inside the `Variable`
     *           will indicate an error and contain the error text.
     *     @type \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $variable_table
     *           The `variable_table` exists to aid with computation, memory and network
     *           traffic optimization.  It enables storing a variable once and reference
     *           it from multiple variables, including variables stored in the
     *           `variable_table` itself.
     *           For example, the same `this` object, which may appear at many levels of
     *           the stack, can have all of its data stored once in this table.  The
     *           stack frame variables then would hold only a reference to it.
     *           The variable `var_table_index` field is an index into this repeated field.
     *           The stored objects are nameless and get their name from the referencing
     *           variable. The effective variable is a merge of the referencing variable
     *           and the referenced variable.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A set of custom breakpoint properties, populated by the agent, to be
     *           displayed to the user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Breakpoint identifier, unique in the scope of the debuggee.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Breakpoint identifier, unique in the scope of the debuggee.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Action that the agent should perform when the code at the
     * breakpoint location is hit.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.Action action = 13;</code>
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Action that the agent should perform when the code at the
     * breakpoint location is hit.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.Action action = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Debugger\V2\Breakpoint_Action::class);
        $this->action = $var;

        return $this;
    }

    /**
     * Breakpoint source location.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.SourceLocation location = 2;</code>
     * @return \Google\Cloud\Debugger\V2\SourceLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Breakpoint source location.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.SourceLocation location = 2;</code>
     * @param \Google\Cloud\Debugger\V2\SourceLocation $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\SourceLocation::class);
        $this->location = $var;

        return $this;
    }

    /**
     * Condition that triggers the breakpoint.
     * The condition is a compound boolean expression composed using expressions
     * in a programming language at the source location.
     *
     * Generated from protobuf field <code>string condition = 3;</code>
     * @return string
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Condition that triggers the breakpoint.
     * The condition is a compound boolean expression composed using expressions
     * in a programming language at the source location.
     *
     * Generated from protobuf field <code>string condition = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCondition($var)
    {
        GPBUtil::checkString($var, True);
        $this->condition = $var;

        return $this;
    }

    /**
     * List of read-only expressions to evaluate at the breakpoint location.
     * The expressions are composed using expressions in the programming language
     * at the source location. If the breakpoint action is `LOG`, the evaluated
     * expressions are included in log statements.
     *
     * Generated from protobuf field <code>repeated string expressions = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpressions()
    {
        return $this->expressions;
    }

    /**
     * List of read-only expressions to evaluate at the breakpoint location.
     * The expressions are composed using expressions in the programming language
     * at the source location. If the breakpoint action is `LOG`, the evaluated
     * expressions are included in log statements.
     *
     * Generated from protobuf field <code>repeated string expressions = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->expressions = $arr;

        return $this;
    }

    /**
     * Only relevant when action is `LOG`. Defines the message to log when
     * the breakpoint hits. The message may include parameter placeholders `$0`,
     * `$1`, etc. These placeholders are replaced with the evaluated value
     * of the appropriate expression. Expressions not referenced in
     * `log_message_format` are not logged.
     * Example: `Message received, id = $0, count = $1` with
     * `expressions` = `[ message.id, message.count ]`.
     *
     * Generated from protobuf field <code>string log_message_format = 14;</code>
     * @return string
     */
    public function getLogMessageFormat()
    {
        return $this->log_message_format;
    }

    /**
     * Only relevant when action is `LOG`. Defines the message to log when
     * the breakpoint hits. The message may include parameter placeholders `$0`,
     * `$1`, etc. These placeholders are replaced with the evaluated value
     * of the appropriate expression. Expressions not referenced in
     * `log_message_format` are not logged.
     * Example: `Message received, id = $0, count = $1` with
     * `expressions` = `[ message.id, message.count ]`.
     *
     * Generated from protobuf field <code>string log_message_format = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLogMessageFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_message_format = $var;

        return $this;
    }

    /**
     * Indicates the severity of the log. Only relevant when action is `LOG`.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.LogLevel log_level = 15;</code>
     * @return int
     */
    public function getLogLevel()
    {
        return $this->log_level;
    }

    /**
     * Indicates the severity of the log. Only relevant when action is `LOG`.
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.Breakpoint.LogLevel log_level = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setLogLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Debugger\V2\Breakpoint_LogLevel::class);
        $this->log_level = $var;

        return $this;
    }

    /**
     * When true, indicates that this is a final result and the
     * breakpoint state will not change from here on.
     *
     * Generated from protobuf field <code>bool is_final_state = 5;</code>
     * @return bool
     */
    public function getIsFinalState()
    {
        return $this->is_final_state;
    }

    /**
     * When true, indicates that this is a final result and the
     * breakpoint state will not change from here on.
     *
     * Generated from protobuf field <code>bool is_final_state = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinalState($var)
    {
        GPBUtil::checkBool($var);
        $this->is_final_state = $var;

        return $this;
    }

    /**
     * Time this breakpoint was created by the server in seconds resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Time this breakpoint was created by the server in seconds resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Time this breakpoint was finalized as seen by the server in seconds
     * resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp final_time = 12;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getFinalTime()
    {
        return $this->final_time;
    }

    /**
     * Time this breakpoint was finalized as seen by the server in seconds
     * resolution.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp final_time = 12;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setFinalTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->final_time = $var;

        return $this;
    }

    /**
     * E-mail address of the user that created this breakpoint
     *
     * Generated from protobuf field <code>string user_email = 16;</code>
     * @return string
     */
    public function getUserEmail()
    {
        return $this->user_email;
    }

    /**
     * E-mail address of the user that created this breakpoint
     *
     * Generated from protobuf field <code>string user_email = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setUserEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_email = $var;

        return $this;
    }

    /**
     * Breakpoint status.
     * The status includes an error flag and a human readable message.
     * This field is usually unset. The message can be either
     * informational or an error message. Regardless, clients should always
     * display the text message back to the user.
     * Error status indicates complete failure of the breakpoint.
     * Example (non-final state): `Still loading symbols...`
     * Examples (final state):
     * *   `Invalid line number` referring to location
     * *   `Field f not found in class C` referring to condition
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 10;</code>
     * @return \Google\Cloud\Debugger\V2\StatusMessage
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Breakpoint status.
     * The status includes an error flag and a human readable message.
     * This field is usually unset. The message can be either
     * informational or an error message. Regardless, clients should always
     * display the text message back to the user.
     * Error status indicates complete failure of the breakpoint.
     * Example (non-final state): `Still loading symbols...`
     * Examples (final state):
     * *   `Invalid line number` referring to location
     * *   `Field f not found in class C` referring to condition
     *
     * Generated from protobuf field <code>.google.devtools.clouddebugger.v2.StatusMessage status = 10;</code>
     * @param \Google\Cloud\Debugger\V2\StatusMessage $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Debugger\V2\StatusMessage::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The stack at breakpoint time, where stack_frames[0] represents the most
     * recently entered function.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.StackFrame stack_frames = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getStackFrames()
    {
        return $this->stack_frames;
    }

    /**
     * The stack at breakpoint time, where stack_frames[0] represents the most
     * recently entered function.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.StackFrame stack_frames = 7;</code>
     * @param \Google\Cloud\Debugger\V2\StackFrame[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setStackFrames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\StackFrame::class);
        $this->stack_frames = $arr;

        return $this;
    }

    /**
     * Values of evaluated expressions at breakpoint time.
     * The evaluated expressions appear in exactly the same order they
     * are listed in the `expressions` field.
     * The `name` field holds the original expression text, the `value` or
     * `members` field holds the result of the evaluated expression.
     * If the expression cannot be evaluated, the `status` inside the `Variable`
     * will indicate an error and contain the error text.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable evaluated_expressions = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvaluatedExpressions()
    {
        return $this->evaluated_expressions;
    }

    /**
     * Values of evaluated expressions at breakpoint time.
     * The evaluated expressions appear in exactly the same order they
     * are listed in the `expressions` field.
     * The `name` field holds the original expression text, the `value` or
     * `members` field holds the result of the evaluated expression.
     * If the expression cannot be evaluated, the `status` inside the `Variable`
     * will indicate an error and contain the error text.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable evaluated_expressions = 8;</code>
     * @param \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvaluatedExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\Variable::class);
        $this->evaluated_expressions = $arr;

        return $this;
    }

    /**
     * The `variable_table` exists to aid with computation, memory and network
     * traffic optimization.  It enables storing a variable once and reference
     * it from multiple variables, including variables stored in the
     * `variable_table` itself.
     * For example, the same `this` object, which may appear at many levels of
     * the stack, can have all of its data stored once in this table.  The
     * stack frame variables then would hold only a reference to it.
     * The variable `var_table_index` field is an index into this repeated field.
     * The stored objects are nameless and get their name from the referencing
     * variable. The effective variable is a merge of the referencing variable
     * and the referenced variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable variable_table = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVariableTable()
    {
        return $this->variable_table;
    }

    /**
     * The `variable_table` exists to aid with computation, memory and network
     * traffic optimization.  It enables storing a variable once and reference
     * it from multiple variables, including variables stored in the
     * `variable_table` itself.
     * For example, the same `this` object, which may appear at many levels of
     * the stack, can have all of its data stored once in this table.  The
     * stack frame variables then would hold only a reference to it.
     * The variable `var_table_index` field is an index into this repeated field.
     * The stored objects are nameless and get their name from the referencing
     * variable. The effective variable is a merge of the referencing variable
     * and the referenced variable.
     *
     * Generated from protobuf field <code>repeated .google.devtools.clouddebugger.v2.Variable variable_table = 9;</code>
     * @param \Google\Cloud\Debugger\V2\Variable[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVariableTable($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Debugger\V2\Variable::class);
        $this->variable_table = $arr;

        return $this;
    }

    /**
     * A set of custom breakpoint properties, populated by the agent, to be
     * displayed to the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 17;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A set of custom breakpoint properties, populated by the agent, to be
     * displayed to the user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 17;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

}

