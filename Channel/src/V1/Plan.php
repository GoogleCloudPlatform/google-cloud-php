<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/offers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The payment plan for the Offer. Describes how to make a payment.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Plan</code>
 */
class Plan extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 1;</code>
     */
    private $payment_plan = 0;
    /**
     * Specifies when the payment needs to happen.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentType payment_type = 2;</code>
     */
    private $payment_type = 0;
    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 3;</code>
     */
    private $payment_cycle = null;
    /**
     * Present for Offers with a trial period.
     * For trial-only Offers, a paid service needs to start before the trial
     * period ends for continued service.
     * For Regular Offers with a trial period, the regular pricing goes into
     * effect when trial period ends, or if paid service is started before the end
     * of the trial period.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period trial_period = 4;</code>
     */
    private $trial_period = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $payment_plan
     *           Describes how a reseller will be billed.
     *     @type int $payment_type
     *           Specifies when the payment needs to happen.
     *     @type \Google\Cloud\Channel\V1\Period $payment_cycle
     *           Describes how frequently the reseller will be billed, such as
     *           once per month.
     *     @type \Google\Cloud\Channel\V1\Period $trial_period
     *           Present for Offers with a trial period.
     *           For trial-only Offers, a paid service needs to start before the trial
     *           period ends for continued service.
     *           For Regular Offers with a trial period, the regular pricing goes into
     *           effect when trial period ends, or if paid service is started before the end
     *           of the trial period.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Offers::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 1;</code>
     * @return int
     */
    public function getPaymentPlan()
    {
        return $this->payment_plan;
    }

    /**
     * Describes how a reseller will be billed.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentPlan payment_plan = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPaymentPlan($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\PaymentPlan::class);
        $this->payment_plan = $var;

        return $this;
    }

    /**
     * Specifies when the payment needs to happen.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentType payment_type = 2;</code>
     * @return int
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * Specifies when the payment needs to happen.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PaymentType payment_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPaymentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\PaymentType::class);
        $this->payment_type = $var;

        return $this;
    }

    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 3;</code>
     * @return \Google\Cloud\Channel\V1\Period|null
     */
    public function getPaymentCycle()
    {
        return isset($this->payment_cycle) ? $this->payment_cycle : null;
    }

    public function hasPaymentCycle()
    {
        return isset($this->payment_cycle);
    }

    public function clearPaymentCycle()
    {
        unset($this->payment_cycle);
    }

    /**
     * Describes how frequently the reseller will be billed, such as
     * once per month.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period payment_cycle = 3;</code>
     * @param \Google\Cloud\Channel\V1\Period $var
     * @return $this
     */
    public function setPaymentCycle($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Period::class);
        $this->payment_cycle = $var;

        return $this;
    }

    /**
     * Present for Offers with a trial period.
     * For trial-only Offers, a paid service needs to start before the trial
     * period ends for continued service.
     * For Regular Offers with a trial period, the regular pricing goes into
     * effect when trial period ends, or if paid service is started before the end
     * of the trial period.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period trial_period = 4;</code>
     * @return \Google\Cloud\Channel\V1\Period|null
     */
    public function getTrialPeriod()
    {
        return isset($this->trial_period) ? $this->trial_period : null;
    }

    public function hasTrialPeriod()
    {
        return isset($this->trial_period);
    }

    public function clearTrialPeriod()
    {
        unset($this->trial_period);
    }

    /**
     * Present for Offers with a trial period.
     * For trial-only Offers, a paid service needs to start before the trial
     * period ends for continued service.
     * For Regular Offers with a trial period, the regular pricing goes into
     * effect when trial period ends, or if paid service is started before the end
     * of the trial period.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Period trial_period = 4;</code>
     * @param \Google\Cloud\Channel\V1\Period $var
     * @return $this
     */
    public function setTrialPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Period::class);
        $this->trial_period = $var;

        return $this;
    }

}

