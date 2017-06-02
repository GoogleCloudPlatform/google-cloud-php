<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/type.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * `Type` indicates the type of a Cloud Spanner value, as might be stored in a
 * table cell or returned from an SQL query.
 * </pre>
 *
 * Protobuf type <code>google.spanner.v1.Type</code>
 */
class Type extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The [TypeCode][google.spanner.v1.TypeCode] for this type.
     * </pre>
     *
     * <code>.google.spanner.v1.TypeCode code = 1;</code>
     */
    private $code = 0;
    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [ARRAY][google.spanner.v1.TypeCode.ARRAY], then `array_element_type`
     * is the type of the array elements.
     * </pre>
     *
     * <code>.google.spanner.v1.Type array_element_type = 2;</code>
     */
    private $array_element_type = null;
    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [STRUCT][google.spanner.v1.TypeCode.STRUCT], then `struct_type`
     * provides type information for the struct's fields.
     * </pre>
     *
     * <code>.google.spanner.v1.StructType struct_type = 3;</code>
     */
    private $struct_type = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Type::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The [TypeCode][google.spanner.v1.TypeCode] for this type.
     * </pre>
     *
     * <code>.google.spanner.v1.TypeCode code = 1;</code>
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * <pre>
     * Required. The [TypeCode][google.spanner.v1.TypeCode] for this type.
     * </pre>
     *
     * <code>.google.spanner.v1.TypeCode code = 1;</code>
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\V1\TypeCode::class);
        $this->code = $var;

        return $this;
    }

    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [ARRAY][google.spanner.v1.TypeCode.ARRAY], then `array_element_type`
     * is the type of the array elements.
     * </pre>
     *
     * <code>.google.spanner.v1.Type array_element_type = 2;</code>
     */
    public function getArrayElementType()
    {
        return $this->array_element_type;
    }

    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [ARRAY][google.spanner.v1.TypeCode.ARRAY], then `array_element_type`
     * is the type of the array elements.
     * </pre>
     *
     * <code>.google.spanner.v1.Type array_element_type = 2;</code>
     */
    public function setArrayElementType(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\Type::class);
        $this->array_element_type = $var;

        return $this;
    }

    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [STRUCT][google.spanner.v1.TypeCode.STRUCT], then `struct_type`
     * provides type information for the struct's fields.
     * </pre>
     *
     * <code>.google.spanner.v1.StructType struct_type = 3;</code>
     */
    public function getStructType()
    {
        return $this->struct_type;
    }

    /**
     * <pre>
     * If [code][google.spanner.v1.Type.code] == [STRUCT][google.spanner.v1.TypeCode.STRUCT], then `struct_type`
     * provides type information for the struct's fields.
     * </pre>
     *
     * <code>.google.spanner.v1.StructType struct_type = 3;</code>
     */
    public function setStructType(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\StructType::class);
        $this->struct_type = $var;

        return $this;
    }

}

