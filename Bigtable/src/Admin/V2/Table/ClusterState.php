<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace Google\Cloud\Bigtable\Admin\V2\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The state of a table's data in a particular cluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.Table.ClusterState</code>
 */
class ClusterState extends \Google\Protobuf\Internal\Message
{
    /**
     * (`OutputOnly`)
     * The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     */
    protected $replication_state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $replication_state
     *           (`OutputOnly`)
     *           The state of replication for the table in this cluster.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Bigtable\Admin\V2\Table::initOnce();
        parent::__construct($data);
    }

    /**
     * (`OutputOnly`)
     * The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     * @return int
     */
    public function getReplicationState()
    {
        return $this->replication_state;
    }

    /**
     * (`OutputOnly`)
     * The state of replication for the table in this cluster.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Table.ClusterState.ReplicationState replication_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setReplicationState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Bigtable\Admin\V2\Table_ClusterState_ReplicationState::class);
        $this->replication_state = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ClusterState::class, \Google\Cloud\Bigtable\Admin\V2\Table_ClusterState::class);

