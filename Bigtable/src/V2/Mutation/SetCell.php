<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/v2/data.proto

namespace Google\Cloud\Bigtable\V2\Mutation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Mutation which sets the value of the specified cell.
 *
 * Generated from protobuf message <code>google.bigtable.v2.Mutation.SetCell</code>
 */
class SetCell extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the family into which new data should be written.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     */
    private $family_name = '';
    /**
     * The qualifier of the column into which new data should be written.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     */
    private $column_qualifier = '';
    /**
     * The timestamp of the cell into which new data should be written.
     * Use -1 for current Bigtable server time.
     * Otherwise, the client should set this value itself, noting that the
     * default value is a timestamp of zero if the field is left unspecified.
     * Values must match the granularity of the table (e.g. micros, millis).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 3;</code>
     */
    private $timestamp_micros = 0;
    /**
     * The value to be written into the specified cell.
     *
     * Generated from protobuf field <code>bytes value = 4;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $family_name
     *           The name of the family into which new data should be written.
     *           Must match `[-_.a-zA-Z0-9]+`
     *     @type string $column_qualifier
     *           The qualifier of the column into which new data should be written.
     *           Can be any byte string, including the empty string.
     *     @type int|string $timestamp_micros
     *           The timestamp of the cell into which new data should be written.
     *           Use -1 for current Bigtable server time.
     *           Otherwise, the client should set this value itself, noting that the
     *           default value is a timestamp of zero if the field is left unspecified.
     *           Values must match the granularity of the table (e.g. micros, millis).
     *     @type string $value
     *           The value to be written into the specified cell.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\V2\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the family into which new data should be written.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     * @return string
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * The name of the family into which new data should be written.
     * Must match `[-_.a-zA-Z0-9]+`
     *
     * Generated from protobuf field <code>string family_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFamilyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->family_name = $var;

        return $this;
    }

    /**
     * The qualifier of the column into which new data should be written.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     * @return string
     */
    public function getColumnQualifier()
    {
        return $this->column_qualifier;
    }

    /**
     * The qualifier of the column into which new data should be written.
     * Can be any byte string, including the empty string.
     *
     * Generated from protobuf field <code>bytes column_qualifier = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setColumnQualifier($var)
    {
        GPBUtil::checkString($var, False);
        $this->column_qualifier = $var;

        return $this;
    }

    /**
     * The timestamp of the cell into which new data should be written.
     * Use -1 for current Bigtable server time.
     * Otherwise, the client should set this value itself, noting that the
     * default value is a timestamp of zero if the field is left unspecified.
     * Values must match the granularity of the table (e.g. micros, millis).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 3;</code>
     * @return int|string
     */
    public function getTimestampMicros()
    {
        return $this->timestamp_micros;
    }

    /**
     * The timestamp of the cell into which new data should be written.
     * Use -1 for current Bigtable server time.
     * Otherwise, the client should set this value itself, noting that the
     * default value is a timestamp of zero if the field is left unspecified.
     * Values must match the granularity of the table (e.g. micros, millis).
     *
     * Generated from protobuf field <code>int64 timestamp_micros = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp_micros = $var;

        return $this;
    }

    /**
     * The value to be written into the specified cell.
     *
     * Generated from protobuf field <code>bytes value = 4;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The value to be written into the specified cell.
     *
     * Generated from protobuf field <code>bytes value = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->value = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SetCell::class, \Google\Cloud\Bigtable\V2\Mutation_SetCell::class);

