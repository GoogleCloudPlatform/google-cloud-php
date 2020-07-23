<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/reservation/v1/reservation.proto

namespace Google\Cloud\BigQuery\Reservation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [ReservationService.UpdateReservation][google.cloud.bigquery.reservation.v1.ReservationService.UpdateReservation].
 *
 * Generated from protobuf message <code>google.cloud.bigquery.reservation.v1.UpdateReservationRequest</code>
 */
class UpdateReservationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Content of the reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 1;</code>
     */
    private $reservation = null;
    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Bigquery\Reservation\V1\Reservation $reservation
     *           Content of the reservation to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Standard field mask for the set of fields to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Bigquery\Reservation\V1\Reservation::initOnce();
        parent::__construct($data);
    }

    /**
     * Content of the reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 1;</code>
     * @return \Google\Cloud\Bigquery\Reservation\V1\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Content of the reservation to update.
     *
     * Generated from protobuf field <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 1;</code>
     * @param \Google\Cloud\Bigquery\Reservation\V1\Reservation $var
     * @return $this
     */
    public function setReservation($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Bigquery\Reservation\V1\Reservation::class);
        $this->reservation = $var;

        return $this;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Standard field mask for the set of fields to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

