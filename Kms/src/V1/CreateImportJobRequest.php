<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/v1/service.proto

namespace Google\Cloud\Kms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeyManagementService.CreateImportJob][google.cloud.kms.v1.KeyManagementService.CreateImportJob].
 *
 * Generated from protobuf message <code>google.cloud.kms.v1.CreateImportJobRequest</code>
 */
final class CreateImportJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the [KeyRing][google.cloud.kms.v1.KeyRing] associated with the
     * [ImportJobs][google.cloud.kms.v1.ImportJob].
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string import_job_id = 2;</code>
     */
    private $import_job_id = '';
    /**
     * Required. An [ImportJob][google.cloud.kms.v1.ImportJob] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ImportJob import_job = 3;</code>
     */
    private $import_job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The [name][google.cloud.kms.v1.KeyRing.name] of the [KeyRing][google.cloud.kms.v1.KeyRing] associated with the
     *           [ImportJobs][google.cloud.kms.v1.ImportJob].
     *     @type string $import_job_id
     *           Required. It must be unique within a KeyRing and match the regular
     *           expression `[a-zA-Z0-9_-]{1,63}`
     *     @type \Google\Cloud\Kms\V1\ImportJob $import_job
     *           Required. An [ImportJob][google.cloud.kms.v1.ImportJob] with initial field values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the [KeyRing][google.cloud.kms.v1.KeyRing] associated with the
     * [ImportJobs][google.cloud.kms.v1.ImportJob].
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The [name][google.cloud.kms.v1.KeyRing.name] of the [KeyRing][google.cloud.kms.v1.KeyRing] associated with the
     * [ImportJobs][google.cloud.kms.v1.ImportJob].
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
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string import_job_id = 2;</code>
     * @return string
     */
    public function getImportJobId()
    {
        return $this->import_job_id;
    }

    /**
     * Required. It must be unique within a KeyRing and match the regular
     * expression `[a-zA-Z0-9_-]{1,63}`
     *
     * Generated from protobuf field <code>string import_job_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setImportJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->import_job_id = $var;

        return $this;
    }

    /**
     * Required. An [ImportJob][google.cloud.kms.v1.ImportJob] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ImportJob import_job = 3;</code>
     * @return \Google\Cloud\Kms\V1\ImportJob
     */
    public function getImportJob()
    {
        return $this->import_job;
    }

    /**
     * Required. An [ImportJob][google.cloud.kms.v1.ImportJob] with initial field values.
     *
     * Generated from protobuf field <code>.google.cloud.kms.v1.ImportJob import_job = 3;</code>
     * @param \Google\Cloud\Kms\V1\ImportJob $var
     * @return $this
     */
    public function setImportJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Kms\V1\ImportJob::class);
        $this->import_job = $var;

        return $this;
    }

}

