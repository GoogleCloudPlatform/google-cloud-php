<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore_admin.proto

namespace Google\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a field.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.Field</code>
 */
class Field extends \Google\Protobuf\Internal\Message
{
    /**
     * The field name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Storage used by fields. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage field_storage = 2;</code>
     */
    private $field_storage = null;
    /**
     * Storage used by index entries for this field.
     * If this field is in an index entry with multiple fields, the storage usage
     * of the entire index entry is included.
     * May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 3;</code>
     */
    private $index_storage = null;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\FirestoreAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The field name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The field name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}/fields/{field_id}`
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
     * Storage used by fields. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage field_storage = 2;</code>
     * @return \Google\Firestore\V1beta1\StorageUsage
     */
    public function getFieldStorage()
    {
        return $this->field_storage;
    }

    /**
     * Storage used by fields. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage field_storage = 2;</code>
     * @param \Google\Firestore\V1beta1\StorageUsage $var
     * @return $this
     */
    public function setFieldStorage($var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\V1beta1\StorageUsage::class);
        $this->field_storage = $var;

        return $this;
    }

    /**
     * Storage used by index entries for this field.
     * If this field is in an index entry with multiple fields, the storage usage
     * of the entire index entry is included.
     * May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 3;</code>
     * @return \Google\Firestore\V1beta1\StorageUsage
     */
    public function getIndexStorage()
    {
        return $this->index_storage;
    }

    /**
     * Storage used by index entries for this field.
     * If this field is in an index entry with multiple fields, the storage usage
     * of the entire index entry is included.
     * May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 3;</code>
     * @param \Google\Firestore\V1beta1\StorageUsage $var
     * @return $this
     */
    public function setIndexStorage($var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\V1beta1\StorageUsage::class);
        $this->index_storage = $var;

        return $this;
    }

}

