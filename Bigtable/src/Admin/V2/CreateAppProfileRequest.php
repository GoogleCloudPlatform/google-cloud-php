<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Cloud\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.CreateAppProfile.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateAppProfileRequest</code>
 */
class CreateAppProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the instance in which to create the new app profile.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    protected $parent = '';
    /**
     * The ID to be used when referring to the new app profile within its
     * instance, e.g., just `myprofile` rather than
     * `projects/myproject/instances/myinstance/appProfiles/myprofile`.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     */
    protected $app_profile_id = '';
    /**
     * The app profile to be created.
     * Fields marked `OutputOnly` will be ignored.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile app_profile = 3;</code>
     */
    protected $app_profile = null;
    /**
     * If true, ignore safety checks when creating the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 4;</code>
     */
    protected $ignore_warnings = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           The unique name of the instance in which to create the new app profile.
     *           Values are of the form
     *           `projects/<project>/instances/<instance>`.
     *     @type string $app_profile_id
     *           The ID to be used when referring to the new app profile within its
     *           instance, e.g., just `myprofile` rather than
     *           `projects/myproject/instances/myinstance/appProfiles/myprofile`.
     *     @type \Google\Cloud\Bigtable\Admin\V2\AppProfile $app_profile
     *           The app profile to be created.
     *           Fields marked `OutputOnly` will be ignored.
     *     @type bool $ignore_warnings
     *           If true, ignore safety checks when creating the app profile.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique name of the instance in which to create the new app profile.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The unique name of the instance in which to create the new app profile.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
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
     * The ID to be used when referring to the new app profile within its
     * instance, e.g., just `myprofile` rather than
     * `projects/myproject/instances/myinstance/appProfiles/myprofile`.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     * @return string
     */
    public function getAppProfileId()
    {
        return $this->app_profile_id;
    }

    /**
     * The ID to be used when referring to the new app profile within its
     * instance, e.g., just `myprofile` rather than
     * `projects/myproject/instances/myinstance/appProfiles/myprofile`.
     *
     * Generated from protobuf field <code>string app_profile_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAppProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_profile_id = $var;

        return $this;
    }

    /**
     * The app profile to be created.
     * Fields marked `OutputOnly` will be ignored.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile app_profile = 3;</code>
     * @return \Google\Cloud\Bigtable\Admin\V2\AppProfile
     */
    public function getAppProfile()
    {
        return $this->app_profile;
    }

    /**
     * The app profile to be created.
     * Fields marked `OutputOnly` will be ignored.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.AppProfile app_profile = 3;</code>
     * @param \Google\Cloud\Bigtable\Admin\V2\AppProfile $var
     * @return $this
     */
    public function setAppProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigtable\Admin\V2\AppProfile::class);
        $this->app_profile = $var;

        return $this;
    }

    /**
     * If true, ignore safety checks when creating the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 4;</code>
     * @return bool
     */
    public function getIgnoreWarnings()
    {
        return $this->ignore_warnings;
    }

    /**
     * If true, ignore safety checks when creating the app profile.
     *
     * Generated from protobuf field <code>bool ignore_warnings = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreWarnings($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_warnings = $var;

        return $this;
    }

}

