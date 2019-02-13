<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/irm/v1alpha2/incidents.proto

namespace Google\Cloud\Irm\V1alpha2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of an incident.
 *
 * Generated from protobuf message <code>google.cloud.irm.v1alpha2.Incident</code>
 */
class Incident extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of the incident, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * One-line summary of the incident.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Escalation level of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.EscalationLevel escalation_level = 3;</code>
     */
    private $escalation_level = 0;
    /**
     * Etag to validate the object is unchanged for a read-modify-write operation.
     * An empty etag will overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     */
    private $etag = '';
    /**
     * Severity of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Severity severity = 5;</code>
     */
    private $severity = 0;
    /**
     * Stage of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Stage stage = 6;</code>
     */
    private $stage = 0;
    /**
     * Output only. Time this incident started. Used to measure the 'elapsed
     * time'. Start time of an incident is the earliest creation time of any of
     * its Signals or the create time of the incident if no Signals are assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     */
    private $start_time = null;
    /**
     * Output only. Synopsis of this incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Synopsis synopsis = 8;</code>
     */
    private $synopsis = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of the incident, e.g.
     *           "projects/{project_id}/incidents/{incident_id}".
     *     @type string $title
     *           One-line summary of the incident.
     *     @type int $escalation_level
     *           Escalation level of the incident.
     *     @type string $etag
     *           Etag to validate the object is unchanged for a read-modify-write operation.
     *           An empty etag will overwrite other changes.
     *     @type int $severity
     *           Severity of the incident.
     *     @type int $stage
     *           Stage of the incident.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Output only. Time this incident started. Used to measure the 'elapsed
     *           time'. Start time of an incident is the earliest creation time of any of
     *           its Signals or the create time of the incident if no Signals are assigned.
     *     @type \Google\Cloud\Irm\V1alpha2\Synopsis $synopsis
     *           Output only. Synopsis of this incident.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Irm\V1Alpha2\Incidents::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of the incident, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of the incident, e.g.
     * "projects/{project_id}/incidents/{incident_id}".
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

    /**
     * One-line summary of the incident.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * One-line summary of the incident.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Escalation level of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.EscalationLevel escalation_level = 3;</code>
     * @return int
     */
    public function getEscalationLevel()
    {
        return $this->escalation_level;
    }

    /**
     * Escalation level of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.EscalationLevel escalation_level = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setEscalationLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Irm\V1alpha2\Incident_EscalationLevel::class);
        $this->escalation_level = $var;

        return $this;
    }

    /**
     * Etag to validate the object is unchanged for a read-modify-write operation.
     * An empty etag will overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Etag to validate the object is unchanged for a read-modify-write operation.
     * An empty etag will overwrite other changes.
     *
     * Generated from protobuf field <code>string etag = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Severity of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Severity severity = 5;</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Severity of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Severity severity = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Irm\V1alpha2\Incident_Severity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Stage of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Stage stage = 6;</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Stage of the incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Incident.Stage stage = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Irm\V1alpha2\Incident_Stage::class);
        $this->stage = $var;

        return $this;
    }

    /**
     * Output only. Time this incident started. Used to measure the 'elapsed
     * time'. Start time of an incident is the earliest creation time of any of
     * its Signals or the create time of the incident if no Signals are assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Output only. Time this incident started. Used to measure the 'elapsed
     * time'. Start time of an incident is the earliest creation time of any of
     * its Signals or the create time of the incident if no Signals are assigned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Synopsis of this incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Synopsis synopsis = 8;</code>
     * @return \Google\Cloud\Irm\V1alpha2\Synopsis
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Output only. Synopsis of this incident.
     *
     * Generated from protobuf field <code>.google.cloud.irm.v1alpha2.Synopsis synopsis = 8;</code>
     * @param \Google\Cloud\Irm\V1alpha2\Synopsis $var
     * @return $this
     */
    public function setSynopsis($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Irm\V1alpha2\Synopsis::class);
        $this->synopsis = $var;

        return $this;
    }

}

