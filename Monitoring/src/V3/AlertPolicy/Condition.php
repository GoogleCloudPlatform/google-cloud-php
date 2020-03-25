<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/alert.proto

namespace Google\Cloud\Monitoring\V3\AlertPolicy;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition is a true/false test that determines when an alerting policy
 * should open an incident. If a condition evaluates to true, it signifies
 * that something is wrong.
 *
 * Generated from protobuf message <code>google.monitoring.v3.AlertPolicy.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * Required if the condition exists. The unique resource name for this
     * condition. Its format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]/conditions/[CONDITION_ID]
     * `[CONDITION_ID]` is assigned by Stackdriver Monitoring when the
     * condition is created as part of a new or updated alerting policy.
     * When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the conditions of the
     * requested alerting policy. Stackdriver Monitoring creates the
     * condition identifiers and includes them in the new policy.
     * When calling the
     * [alertPolicies.update][google.monitoring.v3.AlertPolicyService.UpdateAlertPolicy]
     * method to update a policy, including a condition `name` causes the
     * existing condition to be updated. Conditions without names are added to
     * the updated policy. Existing conditions are deleted if they are not
     * updated.
     * Best practice is to preserve `[CONDITION_ID]` if you make only small
     * changes, such as those to condition thresholds, durations, or trigger
     * values.  Otherwise, treat the change as a new condition and let the
     * existing condition be deleted.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     */
    private $name = '';
    /**
     * A short name or phrase used to identify the condition in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple conditions in the same policy.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     */
    private $display_name = '';
    protected $condition;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required if the condition exists. The unique resource name for this
     *           condition. Its format is:
     *               projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]/conditions/[CONDITION_ID]
     *           `[CONDITION_ID]` is assigned by Stackdriver Monitoring when the
     *           condition is created as part of a new or updated alerting policy.
     *           When calling the
     *           [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     *           method, do not include the `name` field in the conditions of the
     *           requested alerting policy. Stackdriver Monitoring creates the
     *           condition identifiers and includes them in the new policy.
     *           When calling the
     *           [alertPolicies.update][google.monitoring.v3.AlertPolicyService.UpdateAlertPolicy]
     *           method to update a policy, including a condition `name` causes the
     *           existing condition to be updated. Conditions without names are added to
     *           the updated policy. Existing conditions are deleted if they are not
     *           updated.
     *           Best practice is to preserve `[CONDITION_ID]` if you make only small
     *           changes, such as those to condition thresholds, durations, or trigger
     *           values.  Otherwise, treat the change as a new condition and let the
     *           existing condition be deleted.
     *     @type string $display_name
     *           A short name or phrase used to identify the condition in dashboards,
     *           notifications, and incidents. To avoid confusion, don't use the same
     *           display name for multiple conditions in the same policy.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricThreshold $condition_threshold
     *           A condition that compares a time series against a threshold.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricAbsence $condition_absent
     *           A condition that checks that a time series continues to
     *           receive new data points.
     *     @type \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\TimeSeriesQueryLanguageCondition $condition_time_series_query_language
     *           A condition that uses the time series query language format to define
     *           alerts.
     *           If set, no other conditions can be present.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Alert::initOnce();
        parent::__construct($data);
    }

    /**
     * Required if the condition exists. The unique resource name for this
     * condition. Its format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]/conditions/[CONDITION_ID]
     * `[CONDITION_ID]` is assigned by Stackdriver Monitoring when the
     * condition is created as part of a new or updated alerting policy.
     * When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the conditions of the
     * requested alerting policy. Stackdriver Monitoring creates the
     * condition identifiers and includes them in the new policy.
     * When calling the
     * [alertPolicies.update][google.monitoring.v3.AlertPolicyService.UpdateAlertPolicy]
     * method to update a policy, including a condition `name` causes the
     * existing condition to be updated. Conditions without names are added to
     * the updated policy. Existing conditions are deleted if they are not
     * updated.
     * Best practice is to preserve `[CONDITION_ID]` if you make only small
     * changes, such as those to condition thresholds, durations, or trigger
     * values.  Otherwise, treat the change as a new condition and let the
     * existing condition be deleted.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required if the condition exists. The unique resource name for this
     * condition. Its format is:
     *     projects/[PROJECT_ID_OR_NUMBER]/alertPolicies/[POLICY_ID]/conditions/[CONDITION_ID]
     * `[CONDITION_ID]` is assigned by Stackdriver Monitoring when the
     * condition is created as part of a new or updated alerting policy.
     * When calling the
     * [alertPolicies.create][google.monitoring.v3.AlertPolicyService.CreateAlertPolicy]
     * method, do not include the `name` field in the conditions of the
     * requested alerting policy. Stackdriver Monitoring creates the
     * condition identifiers and includes them in the new policy.
     * When calling the
     * [alertPolicies.update][google.monitoring.v3.AlertPolicyService.UpdateAlertPolicy]
     * method to update a policy, including a condition `name` causes the
     * existing condition to be updated. Conditions without names are added to
     * the updated policy. Existing conditions are deleted if they are not
     * updated.
     * Best practice is to preserve `[CONDITION_ID]` if you make only small
     * changes, such as those to condition thresholds, durations, or trigger
     * values.  Otherwise, treat the change as a new condition and let the
     * existing condition be deleted.
     *
     * Generated from protobuf field <code>string name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * A short name or phrase used to identify the condition in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple conditions in the same policy.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * A short name or phrase used to identify the condition in dashboards,
     * notifications, and incidents. To avoid confusion, don't use the same
     * display name for multiple conditions in the same policy.
     *
     * Generated from protobuf field <code>string display_name = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * A condition that compares a time series against a threshold.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.MetricThreshold condition_threshold = 1;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricThreshold
     */
    public function getConditionThreshold()
    {
        return $this->readOneof(1);
    }

    /**
     * A condition that compares a time series against a threshold.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.MetricThreshold condition_threshold = 1;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricThreshold $var
     * @return $this
     */
    public function setConditionThreshold($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_MetricThreshold::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * A condition that checks that a time series continues to
     * receive new data points.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.MetricAbsence condition_absent = 2;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricAbsence
     */
    public function getConditionAbsent()
    {
        return $this->readOneof(2);
    }

    /**
     * A condition that checks that a time series continues to
     * receive new data points.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.MetricAbsence condition_absent = 2;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\MetricAbsence $var
     * @return $this
     */
    public function setConditionAbsent($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_MetricAbsence::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A condition that uses the time series query language format to define
     * alerts.
     * If set, no other conditions can be present.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.TimeSeriesQueryLanguageCondition condition_time_series_query_language = 14;</code>
     * @return \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\TimeSeriesQueryLanguageCondition
     */
    public function getConditionTimeSeriesQueryLanguage()
    {
        return $this->readOneof(14);
    }

    /**
     * A condition that uses the time series query language format to define
     * alerts.
     * If set, no other conditions can be present.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.AlertPolicy.Condition.TimeSeriesQueryLanguageCondition condition_time_series_query_language = 14;</code>
     * @param \Google\Cloud\Monitoring\V3\AlertPolicy\Condition\TimeSeriesQueryLanguageCondition $var
     * @return $this
     */
    public function setConditionTimeSeriesQueryLanguage($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition_TimeSeriesQueryLanguageCondition::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCondition()
    {
        return $this->whichOneof("condition");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Condition::class, \Google\Cloud\Monitoring\V3\AlertPolicy_Condition::class);

