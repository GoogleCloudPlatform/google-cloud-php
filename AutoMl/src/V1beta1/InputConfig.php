<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\Automl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input configuration.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.InputConfig</code>
 */
class InputConfig extends \Google\Protobuf\Internal\Message
{
    protected $source;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Automl\V1beta1\GcsSource $gcs_source
     *           The GCS location for the input content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * The GCS location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @return \Google\Cloud\Automl\V1beta1\GcsSource
     */
    public function getGcsSource()
    {
        return $this->readOneof(1);
    }

    /**
     * The GCS location for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsSource gcs_source = 1;</code>
     * @param \Google\Cloud\Automl\V1beta1\GcsSource $var
     * @return $this
     */
    public function setGcsSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Automl\V1beta1\GcsSource::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

