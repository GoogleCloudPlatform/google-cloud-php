<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/dataset.proto

namespace Google\Cloud\Automl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A workspace for solving a single, particular machine learning (ML) problem.
 * A workspace contains examples that may be annotated.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.Dataset</code>
 */
class Dataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the dataset.
     * Form: `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. The name of the dataset to show in the interface. The name can be
     * up to 32 characters
     * long and can consist only of ASCII Latin letters A-Z and a-z, underscores
     * (_), and ASCII digits 0-9.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Output only. The number of examples in the dataset.
     *
     * Generated from protobuf field <code>int32 example_count = 21;</code>
     */
    private $example_count = 0;
    /**
     * Output only. Timestamp when this dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
     */
    private $create_time = null;
    protected $dataset_metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Automl\V1beta1\TranslationDatasetMetadata $translation_dataset_metadata
     *           Metadata for a dataset used for translation.
     *     @type \Google\Cloud\Automl\V1beta1\ImageClassificationDatasetMetadata $image_classification_dataset_metadata
     *           Metadata for a dataset used for image classification.
     *     @type \Google\Cloud\Automl\V1beta1\TextClassificationDatasetMetadata $text_classification_dataset_metadata
     *           Metadata for a dataset used for text classification.
     *     @type string $name
     *           Output only. The resource name of the dataset.
     *           Form: `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}`
     *     @type string $display_name
     *           Required. The name of the dataset to show in the interface. The name can be
     *           up to 32 characters
     *           long and can consist only of ASCII Latin letters A-Z and a-z, underscores
     *           (_), and ASCII digits 0-9.
     *     @type int $example_count
     *           Output only. The number of examples in the dataset.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Timestamp when this dataset was created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata for a dataset used for translation.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TranslationDatasetMetadata translation_dataset_metadata = 23;</code>
     * @return \Google\Cloud\Automl\V1beta1\TranslationDatasetMetadata
     */
    public function getTranslationDatasetMetadata()
    {
        return $this->readOneof(23);
    }

    /**
     * Metadata for a dataset used for translation.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TranslationDatasetMetadata translation_dataset_metadata = 23;</code>
     * @param \Google\Cloud\Automl\V1beta1\TranslationDatasetMetadata $var
     * @return $this
     */
    public function setTranslationDatasetMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Automl\V1beta1\TranslationDatasetMetadata::class);
        $this->writeOneof(23, $var);

        return $this;
    }

    /**
     * Metadata for a dataset used for image classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ImageClassificationDatasetMetadata image_classification_dataset_metadata = 24;</code>
     * @return \Google\Cloud\Automl\V1beta1\ImageClassificationDatasetMetadata
     */
    public function getImageClassificationDatasetMetadata()
    {
        return $this->readOneof(24);
    }

    /**
     * Metadata for a dataset used for image classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.ImageClassificationDatasetMetadata image_classification_dataset_metadata = 24;</code>
     * @param \Google\Cloud\Automl\V1beta1\ImageClassificationDatasetMetadata $var
     * @return $this
     */
    public function setImageClassificationDatasetMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Automl\V1beta1\ImageClassificationDatasetMetadata::class);
        $this->writeOneof(24, $var);

        return $this;
    }

    /**
     * Metadata for a dataset used for text classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextClassificationDatasetMetadata text_classification_dataset_metadata = 25;</code>
     * @return \Google\Cloud\Automl\V1beta1\TextClassificationDatasetMetadata
     */
    public function getTextClassificationDatasetMetadata()
    {
        return $this->readOneof(25);
    }

    /**
     * Metadata for a dataset used for text classification.
     *
     * Generated from protobuf field <code>.google.cloud.automl.v1beta1.TextClassificationDatasetMetadata text_classification_dataset_metadata = 25;</code>
     * @param \Google\Cloud\Automl\V1beta1\TextClassificationDatasetMetadata $var
     * @return $this
     */
    public function setTextClassificationDatasetMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Automl\V1beta1\TextClassificationDatasetMetadata::class);
        $this->writeOneof(25, $var);

        return $this;
    }

    /**
     * Output only. The resource name of the dataset.
     * Form: `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the dataset.
     * Form: `projects/{project_id}/locations/{location_id}/datasets/{dataset_id}`
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
     * Required. The name of the dataset to show in the interface. The name can be
     * up to 32 characters
     * long and can consist only of ASCII Latin letters A-Z and a-z, underscores
     * (_), and ASCII digits 0-9.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The name of the dataset to show in the interface. The name can be
     * up to 32 characters
     * long and can consist only of ASCII Latin letters A-Z and a-z, underscores
     * (_), and ASCII digits 0-9.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
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
     * Output only. The number of examples in the dataset.
     *
     * Generated from protobuf field <code>int32 example_count = 21;</code>
     * @return int
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Output only. The number of examples in the dataset.
     *
     * Generated from protobuf field <code>int32 example_count = 21;</code>
     * @param int $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->example_count = $var;

        return $this;
    }

    /**
     * Output only. Timestamp when this dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    /**
     * Output only. Timestamp when this dataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 14;</code>
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
     * @return string
     */
    public function getDatasetMetadata()
    {
        return $this->whichOneof("dataset_metadata");
    }

}

