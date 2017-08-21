<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1beta1/firestore_admin.proto

namespace Google\Firestore\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about a collection group. A collection group represents all
 * collections in a database with the same collection id.
 *
 * Generated from protobuf message <code>google.firestore.v1beta1.CollectionGroup</code>
 */
class CollectionGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * The collection group resource name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The collection id.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     */
    private $collection_id = '';
    /**
     * Storage used by documents in this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage document_storage = 3;</code>
     */
    private $document_storage = null;
    /**
     * Storage used by index entries for this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 4;</code>
     */
    private $index_storage = null;

    public function __construct() {
        \GPBMetadata\Google\Firestore\V1Beta1\FirestoreAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The collection group resource name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The collection group resource name. For example:
     * `projects/{project_id}/databases/{database_id}/collectionGroups/{collection_id}`
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
     * The collection id.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @return string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * The collection id.
     *
     * Generated from protobuf field <code>string collection_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * Storage used by documents in this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage document_storage = 3;</code>
     * @return \Google\Firestore\V1beta1\StorageUsage
     */
    public function getDocumentStorage()
    {
        return $this->document_storage;
    }

    /**
     * Storage used by documents in this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage document_storage = 3;</code>
     * @param \Google\Firestore\V1beta1\StorageUsage $var
     * @return $this
     */
    public function setDocumentStorage($var)
    {
        GPBUtil::checkMessage($var, \Google\Firestore\V1beta1\StorageUsage::class);
        $this->document_storage = $var;

        return $this;
    }

    /**
     * Storage used by index entries for this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 4;</code>
     * @return \Google\Firestore\V1beta1\StorageUsage
     */
    public function getIndexStorage()
    {
        return $this->index_storage;
    }

    /**
     * Storage used by index entries for this collection group. May be stale.
     *
     * Generated from protobuf field <code>.google.firestore.v1beta1.StorageUsage index_storage = 4;</code>
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

