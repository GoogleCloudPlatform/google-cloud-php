<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/data_stats.proto

namespace Google\Cloud\AutoMl\V1beta1\StringStats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The statistics of a unigram.
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.StringStats.UnigramStats</code>
 */
class UnigramStats extends \Google\Protobuf\Internal\Message
{
    /**
     * The unigram.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     */
    private $value = '';
    /**
     * The number of occurrences of this unigram in the series.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     */
    private $count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     *           The unigram.
     *     @type int|string $count
     *           The number of occurrences of this unigram in the series.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\DataStats::initOnce();
        parent::__construct($data);
    }

    /**
     * The unigram.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The unigram.
     *
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

    /**
     * The number of occurrences of this unigram in the series.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * The number of occurrences of this unigram in the series.
     *
     * Generated from protobuf field <code>int64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(UnigramStats::class, \Google\Cloud\AutoMl\V1beta1\StringStats_UnigramStats::class);

