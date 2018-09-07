<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/io.proto

namespace Google\Cloud\Automl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output configuration.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.OutputConfig</code>
 */
class OutputConfig extends \Google\Protobuf\Internal\Message
{
    protected $destination;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Automl\V1beta1\GcsDestination $gcs_destination
     *           The GCS location where the output must be written to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Io::initOnce();
        parent::__construct($data);
    }

    /**
     * The GCS location where the output must be written to.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsDestination gcs_destination = 1;</code>
     * @return \Google\Cloud\Automl\V1beta1\GcsDestination
     */
    public function getGcsDestination()
    {
        return $this->readOneof(1);
    }

    /**
     * The GCS location where the output must be written to.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.GcsDestination gcs_destination = 1;</code>
     * @param \Google\Cloud\Automl\V1beta1\GcsDestination $var
     * @return $this
     */
    public function setGcsDestination($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Automl\V1beta1\GcsDestination::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination()
    {
        return $this->whichOneof("destination");
    }

}

