<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: test.proto

namespace Google\Cloud\Firestore\Tests\Conformance;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A test of the Listen streaming RPC (a.k.a. FireStore watch).
 * If the sequence of responses is provided to the implementation,
 * it should produce the sequence of snapshots.
 * If is_error is true, an error should occur after the snapshots.
 * The tests assume that the query is
 * Collection("projects/projectID/databases/(default)/documents/C").OrderBy("a", Ascending)
 * The watch target ID used in these tests is 1. Test interpreters
 * should either change their client's ID for testing,
 * or change the ID in the tests before running them.
 *
 * Generated from protobuf message <code>tests.ListenTest</code>
 */
class ListenTest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.ListenResponse responses = 1;</code>
     */
    private $responses;
    /**
     * Generated from protobuf field <code>repeated .tests.Snapshot snapshots = 2;</code>
     */
    private $snapshots;
    /**
     * Generated from protobuf field <code>bool is_error = 3;</code>
     */
    private $is_error = false;

    public function __construct() {
        \Google\Cloud\Firestore\Tests\Conformance\FirestoreTestGpb::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.ListenResponse responses = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResponses()
    {
        return $this->responses;
    }

    /**
     * Generated from protobuf field <code>repeated .google.firestore.v1beta1.ListenResponse responses = 1;</code>
     * @param \Google\Firestore\V1beta1\ListenResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResponses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Firestore\V1beta1\ListenResponse::class);
        $this->responses = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Snapshot snapshots = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * Generated from protobuf field <code>repeated .tests.Snapshot snapshots = 2;</code>
     * @param \Google\Cloud\Firestore\Tests\Conformance\Snapshot[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSnapshots($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\Tests\Conformance\Snapshot::class);
        $this->snapshots = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_error = 3;</code>
     * @return bool
     */
    public function getIsError()
    {
        return $this->is_error;
    }

    /**
     * Generated from protobuf field <code>bool is_error = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsError($var)
    {
        GPBUtil::checkBool($var);
        $this->is_error = $var;

        return $this;
    }

}

