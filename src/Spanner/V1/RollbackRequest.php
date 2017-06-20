<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [Rollback][google.spanner.v1.Spanner.Rollback].
 *
 * Protobuf type <code>Google\Spanner\V1\RollbackRequest</code>
 */
class RollbackRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session in which the transaction to roll back is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     */
    private $session = '';
    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction_id = 2;</code>
     */
    private $transaction_id = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct();
    }

    /**
     * Required. The session in which the transaction to roll back is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session in which the transaction to roll back is running.
     *
     * Generated from protobuf field <code>string session = 1;</code>
     * @param string $var
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction_id = 2;</code>
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transaction_id;
    }

    /**
     * Required. The transaction to roll back.
     *
     * Generated from protobuf field <code>bytes transaction_id = 2;</code>
     * @param string $var
     */
    public function setTransactionId($var)
    {
        GPBUtil::checkString($var, False);
        $this->transaction_id = $var;

        return $this;
    }

}

