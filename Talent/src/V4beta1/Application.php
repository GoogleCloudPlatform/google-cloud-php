<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/application.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a job application record of a candidate.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Application</code>
 */
class Application extends \Google\Protobuf\Internal\Message
{
    /**
     * Required during application update.
     * Resource name assigned to an application by the API.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz/applications/qux".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. Client side application identifier, used to uniquely identify the
     * application.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 31 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $external_id = '';
    /**
     * Output only. Resource name of the candidate of this application.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz".
     *
     * Generated from protobuf field <code>string profile = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $profile = '';
    /**
     * One of either a job or a company is required.
     * Resource name of the job which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/jobs/{job_id}". For example,
     * "projects/foo/tenants/bar/jobs/baz".
     *
     * Generated from protobuf field <code>string job = 4;</code>
     */
    private $job = '';
    /**
     * One of either a job or a company is required.
     * Resource name of the company which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}".
     * For example, "projects/foo/tenants/bar/companies/baz".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     */
    private $company = '';
    /**
     * The application date.
     *
     * Generated from protobuf field <code>.google.type.Date application_date = 7;</code>
     */
    private $application_date = null;
    /**
     * Required. What is the most recent stage of the application (that is, new,
     * screen, send cv, hired, finished work)?  This field is intentionally not
     * comprehensive of every possible status, but instead, represents statuses
     * that would be used to indicate to the ML models good / bad matches.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationStage stage = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $stage = 0;
    /**
     * The application state.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState state = 13;</code>
     */
    private $state = 0;
    /**
     * All interviews (screen, onsite, and so on) conducted as part of this
     * application (includes details such as user conducting the interview,
     * timestamp, feedback, and so on).
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Interview interviews = 16;</code>
     */
    private $interviews;
    /**
     * If the candidate is referred by a employee.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue referral = 18;</code>
     */
    private $referral = null;
    /**
     * Required. Reflects the time that the application was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 19 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $create_time = null;
    /**
     * The last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 20;</code>
     */
    private $update_time = null;
    /**
     * Free text reason behind the recruitement outcome (for example, reason for
     * withdraw / reject, reason for an unsuccessful finish, and so on).
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string outcome_notes = 21;</code>
     */
    private $outcome_notes = '';
    /**
     * Outcome positiveness shows how positive the outcome is.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 22;</code>
     */
    private $outcome = 0;
    /**
     * Output only. Indicates whether this job application is a match to
     * application related filters. This value is only applicable in profile
     * search response.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_match = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $is_match = null;
    /**
     * Output only. Job title snippet shows how the job title is related to a
     * search query. It's empty if the job title isn't related to the search
     * query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $job_title_snippet = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required during application update.
     *           Resource name assigned to an application by the API.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}".
     *           For example, "projects/foo/tenants/bar/profiles/baz/applications/qux".
     *     @type string $external_id
     *           Required. Client side application identifier, used to uniquely identify the
     *           application.
     *           The maximum number of allowed characters is 255.
     *     @type string $profile
     *           Output only. Resource name of the candidate of this application.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}".
     *           For example, "projects/foo/tenants/bar/profiles/baz".
     *     @type string $job
     *           One of either a job or a company is required.
     *           Resource name of the job which the candidate applied for.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/jobs/{job_id}". For example,
     *           "projects/foo/tenants/bar/jobs/baz".
     *     @type string $company
     *           One of either a job or a company is required.
     *           Resource name of the company which the candidate applied for.
     *           The format is
     *           "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}".
     *           For example, "projects/foo/tenants/bar/companies/baz".
     *     @type \Google\Type\Date $application_date
     *           The application date.
     *     @type int $stage
     *           Required. What is the most recent stage of the application (that is, new,
     *           screen, send cv, hired, finished work)?  This field is intentionally not
     *           comprehensive of every possible status, but instead, represents statuses
     *           that would be used to indicate to the ML models good / bad matches.
     *     @type int $state
     *           The application state.
     *     @type \Google\Cloud\Talent\V4beta1\Interview[]|\Google\Protobuf\Internal\RepeatedField $interviews
     *           All interviews (screen, onsite, and so on) conducted as part of this
     *           application (includes details such as user conducting the interview,
     *           timestamp, feedback, and so on).
     *     @type \Google\Protobuf\BoolValue $referral
     *           If the candidate is referred by a employee.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Required. Reflects the time that the application was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last update timestamp.
     *     @type string $outcome_notes
     *           Free text reason behind the recruitement outcome (for example, reason for
     *           withdraw / reject, reason for an unsuccessful finish, and so on).
     *           Number of characters allowed is 100.
     *     @type int $outcome
     *           Outcome positiveness shows how positive the outcome is.
     *     @type \Google\Protobuf\BoolValue $is_match
     *           Output only. Indicates whether this job application is a match to
     *           application related filters. This value is only applicable in profile
     *           search response.
     *     @type string $job_title_snippet
     *           Output only. Job title snippet shows how the job title is related to a
     *           search query. It's empty if the job title isn't related to the search
     *           query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Application::initOnce();
        parent::__construct($data);
    }

    /**
     * Required during application update.
     * Resource name assigned to an application by the API.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz/applications/qux".
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required during application update.
     * Resource name assigned to an application by the API.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}/applications/{application_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz/applications/qux".
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
     * Required. Client side application identifier, used to uniquely identify the
     * application.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 31 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getExternalId()
    {
        return $this->external_id;
    }

    /**
     * Required. Client side application identifier, used to uniquely identify the
     * application.
     * The maximum number of allowed characters is 255.
     *
     * Generated from protobuf field <code>string external_id = 31 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setExternalId($var)
    {
        GPBUtil::checkString($var, True);
        $this->external_id = $var;

        return $this;
    }

    /**
     * Output only. Resource name of the candidate of this application.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz".
     *
     * Generated from protobuf field <code>string profile = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Output only. Resource name of the candidate of this application.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/profiles/{profile_id}".
     * For example, "projects/foo/tenants/bar/profiles/baz".
     *
     * Generated from protobuf field <code>string profile = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkString($var, True);
        $this->profile = $var;

        return $this;
    }

    /**
     * One of either a job or a company is required.
     * Resource name of the job which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/jobs/{job_id}". For example,
     * "projects/foo/tenants/bar/jobs/baz".
     *
     * Generated from protobuf field <code>string job = 4;</code>
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * One of either a job or a company is required.
     * Resource name of the job which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/jobs/{job_id}". For example,
     * "projects/foo/tenants/bar/jobs/baz".
     *
     * Generated from protobuf field <code>string job = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkString($var, True);
        $this->job = $var;

        return $this;
    }

    /**
     * One of either a job or a company is required.
     * Resource name of the company which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}".
     * For example, "projects/foo/tenants/bar/companies/baz".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * One of either a job or a company is required.
     * Resource name of the company which the candidate applied for.
     * The format is
     * "projects/{project_id}/tenants/{tenant_id}/companies/{company_id}".
     * For example, "projects/foo/tenants/bar/companies/baz".
     *
     * Generated from protobuf field <code>string company = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCompany($var)
    {
        GPBUtil::checkString($var, True);
        $this->company = $var;

        return $this;
    }

    /**
     * The application date.
     *
     * Generated from protobuf field <code>.google.type.Date application_date = 7;</code>
     * @return \Google\Type\Date
     */
    public function getApplicationDate()
    {
        return $this->application_date;
    }

    /**
     * The application date.
     *
     * Generated from protobuf field <code>.google.type.Date application_date = 7;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setApplicationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->application_date = $var;

        return $this;
    }

    /**
     * Required. What is the most recent stage of the application (that is, new,
     * screen, send cv, hired, finished work)?  This field is intentionally not
     * comprehensive of every possible status, but instead, represents statuses
     * that would be used to indicate to the ML models good / bad matches.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationStage stage = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Required. What is the most recent stage of the application (that is, new,
     * screen, send cv, hired, finished work)?  This field is intentionally not
     * comprehensive of every possible status, but instead, represents statuses
     * that would be used to indicate to the ML models good / bad matches.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationStage stage = 11 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setStage($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Application_ApplicationStage::class);
        $this->stage = $var;

        return $this;
    }

    /**
     * The application state.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState state = 13;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The application state.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Application.ApplicationState state = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Application_ApplicationState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * All interviews (screen, onsite, and so on) conducted as part of this
     * application (includes details such as user conducting the interview,
     * timestamp, feedback, and so on).
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Interview interviews = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInterviews()
    {
        return $this->interviews;
    }

    /**
     * All interviews (screen, onsite, and so on) conducted as part of this
     * application (includes details such as user conducting the interview,
     * timestamp, feedback, and so on).
     *
     * Generated from protobuf field <code>repeated .google.cloud.talent.v4beta1.Interview interviews = 16;</code>
     * @param \Google\Cloud\Talent\V4beta1\Interview[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInterviews($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Talent\V4beta1\Interview::class);
        $this->interviews = $arr;

        return $this;
    }

    /**
     * If the candidate is referred by a employee.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue referral = 18;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getReferral()
    {
        return $this->referral;
    }

    /**
     * Returns the unboxed value from <code>getReferral()</code>

     * If the candidate is referred by a employee.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue referral = 18;</code>
     * @return bool|null
     */
    public function getReferralValue()
    {
        $wrapper = $this->getReferral();
        return \is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * If the candidate is referred by a employee.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue referral = 18;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setReferral($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->referral = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * If the candidate is referred by a employee.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue referral = 18;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setReferralValue($var)
    {
        $wrappedVar = \is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setReferral($wrappedVar);
    }

    /**
     * Required. Reflects the time that the application was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 19 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Required. Reflects the time that the application was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 19 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 20;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * The last update timestamp.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 20;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Free text reason behind the recruitement outcome (for example, reason for
     * withdraw / reject, reason for an unsuccessful finish, and so on).
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string outcome_notes = 21;</code>
     * @return string
     */
    public function getOutcomeNotes()
    {
        return $this->outcome_notes;
    }

    /**
     * Free text reason behind the recruitement outcome (for example, reason for
     * withdraw / reject, reason for an unsuccessful finish, and so on).
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string outcome_notes = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setOutcomeNotes($var)
    {
        GPBUtil::checkString($var, True);
        $this->outcome_notes = $var;

        return $this;
    }

    /**
     * Outcome positiveness shows how positive the outcome is.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 22;</code>
     * @return int
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Outcome positiveness shows how positive the outcome is.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Outcome outcome = 22;</code>
     * @param int $var
     * @return $this
     */
    public function setOutcome($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Talent\V4beta1\Outcome::class);
        $this->outcome = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this job application is a match to
     * application related filters. This value is only applicable in profile
     * search response.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_match = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getIsMatch()
    {
        return $this->is_match;
    }

    /**
     * Returns the unboxed value from <code>getIsMatch()</code>

     * Output only. Indicates whether this job application is a match to
     * application related filters. This value is only applicable in profile
     * search response.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_match = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getIsMatchValue()
    {
        $wrapper = $this->getIsMatch();
        return \is_null($wrapper) ? null : $wrapper->getValue();
    }

    /**
     * Output only. Indicates whether this job application is a match to
     * application related filters. This value is only applicable in profile
     * search response.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_match = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setIsMatch($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->is_match = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Indicates whether this job application is a match to
     * application related filters. This value is only applicable in profile
     * search response.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue is_match = 28 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setIsMatchValue($var)
    {
        $wrappedVar = \is_null($var) ? null : new \Google\Protobuf\BoolValue(['value' => $var]);
        return $this->setIsMatch($wrappedVar);
    }

    /**
     * Output only. Job title snippet shows how the job title is related to a
     * search query. It's empty if the job title isn't related to the search
     * query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getJobTitleSnippet()
    {
        return $this->job_title_snippet;
    }

    /**
     * Output only. Job title snippet shows how the job title is related to a
     * search query. It's empty if the job title isn't related to the search
     * query.
     *
     * Generated from protobuf field <code>string job_title_snippet = 29 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setJobTitleSnippet($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_title_snippet = $var;

        return $this;
    }

}

