<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/index.proto

namespace Google\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A field of an index.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.IndexField</code>
 */
class IndexField extends \Google\Protobuf\Internal\Message
{
    /**
     * The path of the field. Must match the field path specification described
     * by [google.firestore.v1beta1.Document.fields][fields].
     * Special field path `__name__` may be used by itself or at the end of a
     * path. `__type__` may be used only at the end of path.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     */
    private $field_path = '';
    /**
     * The field's mode.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.IndexField.Mode mode = 2;</code>
     */
    private $mode = 0;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\Index::initOnce();
        parent::__construct();
    }

    /**
     * The path of the field. Must match the field path specification described
     * by [google.firestore.v1beta1.Document.fields][fields].
     * Special field path `__name__` may be used by itself or at the end of a
     * path. `__type__` may be used only at the end of path.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @return string
     */
    public function getFieldPath()
    {
        return $this->field_path;
    }

    /**
     * The path of the field. Must match the field path specification described
     * by [google.firestore.v1beta1.Document.fields][fields].
     * Special field path `__name__` may be used by itself or at the end of a
     * path. `__type__` may be used only at the end of path.
     *
     * Generated from protobuf field <code>string field_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFieldPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->field_path = $var;

        return $this;
    }

    /**
     * The field's mode.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.IndexField.Mode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * The field's mode.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.IndexField.Mode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Google\Firestore\V1beta1\IndexField_Mode::class);
        $this->mode = $var;

        return $this;
    }

}

