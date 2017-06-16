<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/keys.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * KeyRange represents a range of rows in a table or index.
 * A range has a start key and an end key. These keys can be open or
 * closed, indicating if the range includes rows with that key.
 * Keys are represented by lists, where the ith value in the list
 * corresponds to the ith component of the table or index primary key.
 * Individual values are encoded as described [here][google.spanner.v1.TypeCode].
 * For example, consider the following table definition:
 *     CREATE TABLE UserEvents (
 *       UserName STRING(MAX),
 *       EventDate STRING(10)
 *     ) PRIMARY KEY(UserName, EventDate);
 * The following keys name rows in this table:
 *     ["Bob", "2014-09-23"]
 *     ["Alfred", "2015-06-12"]
 * Since the `UserEvents` table's `PRIMARY KEY` clause names two
 * columns, each `UserEvents` key has two elements; the first is the
 * `UserName`, and the second is the `EventDate`.
 * Key ranges with multiple components are interpreted
 * lexicographically by component using the table or index key's declared
 * sort order. For example, the following range returns all events for
 * user `"Bob"` that occurred in the year 2015:
 *     "start_closed": ["Bob", "2015-01-01"]
 *     "end_closed": ["Bob", "2015-12-31"]
 * Start and end keys can omit trailing key components. This affects the
 * inclusion and exclusion of rows that exactly match the provided key
 * components: if the key is closed, then rows that exactly match the
 * provided components are included; if the key is open, then rows
 * that exactly match are not included.
 * For example, the following range includes all events for `"Bob"` that
 * occurred during and after the year 2000:
 *     "start_closed": ["Bob", "2000-01-01"]
 *     "end_closed": ["Bob"]
 * The next example retrieves all events for `"Bob"`:
 *     "start_closed": ["Bob"]
 *     "end_closed": ["Bob"]
 * To retrieve events before the year 2000:
 *     "start_closed": ["Bob"]
 *     "end_open": ["Bob", "2000-01-01"]
 * The following range includes all rows in the table:
 *     "start_closed": []
 *     "end_closed": []
 * This range returns all users whose `UserName` begins with any
 * character from A to C:
 *     "start_closed": ["A"]
 *     "end_open": ["D"]
 * This range returns all users whose `UserName` begins with B:
 *     "start_closed": ["B"]
 *     "end_open": ["C"]
 * Key ranges honor column sort order. For example, suppose a table is
 * defined as follows:
 *     CREATE TABLE DescendingSortedTable {
 *       Key INT64,
 *       ...
 *     ) PRIMARY KEY(Key DESC);
 * The following range retrieves all rows with key values between 1
 * and 100 inclusive:
 *     "start_closed": ["100"]
 *     "end_closed": ["1"]
 * Note that 100 is passed as the start, and 1 is passed as the end,
 * because `Key` is a descending column in the schema.
 * </pre>
 *
 * Protobuf type <code>Google\Spanner\V1\KeyRange</code>
 */
class KeyRange extends \Google\Protobuf\Internal\Message
{
    protected $start_key_type;
    protected $end_key_type;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * If the start is closed, then the range includes all rows whose
     * first `len(start_closed)` key columns exactly match `start_closed`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue start_closed = 1;</code>
     * @return Google\Protobuf\ListValue
     */
    public function getStartClosed()
    {
        return $this->readOneof(1);
    }

    /**
     * <pre>
     * If the start is closed, then the range includes all rows whose
     * first `len(start_closed)` key columns exactly match `start_closed`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue start_closed = 1;</code>
     * @param Google\Protobuf\ListValue $var
     */
    public function setStartClosed(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\ListValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * <pre>
     * If the start is open, then the range excludes rows whose first
     * `len(start_open)` key columns exactly match `start_open`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue start_open = 2;</code>
     * @return Google\Protobuf\ListValue
     */
    public function getStartOpen()
    {
        return $this->readOneof(2);
    }

    /**
     * <pre>
     * If the start is open, then the range excludes rows whose first
     * `len(start_open)` key columns exactly match `start_open`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue start_open = 2;</code>
     * @param Google\Protobuf\ListValue $var
     */
    public function setStartOpen(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\ListValue::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * <pre>
     * If the end is closed, then the range includes all rows whose
     * first `len(end_closed)` key columns exactly match `end_closed`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue end_closed = 3;</code>
     * @return Google\Protobuf\ListValue
     */
    public function getEndClosed()
    {
        return $this->readOneof(3);
    }

    /**
     * <pre>
     * If the end is closed, then the range includes all rows whose
     * first `len(end_closed)` key columns exactly match `end_closed`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue end_closed = 3;</code>
     * @param Google\Protobuf\ListValue $var
     */
    public function setEndClosed(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\ListValue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * <pre>
     * If the end is open, then the range excludes rows whose first
     * `len(end_open)` key columns exactly match `end_open`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue end_open = 4;</code>
     * @return Google\Protobuf\ListValue
     */
    public function getEndOpen()
    {
        return $this->readOneof(4);
    }

    /**
     * <pre>
     * If the end is open, then the range excludes rows whose first
     * `len(end_open)` key columns exactly match `end_open`.
     * </pre>
     *
     * <code>.google.protobuf.ListValue end_open = 4;</code>
     * @param Google\Protobuf\ListValue $var
     */
    public function setEndOpen(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\ListValue::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStartKeyType()
    {
        return $this->whichOneof("start_key_type");
    }

    /**
     * @return string
     */
    public function getEndKeyType()
    {
        return $this->whichOneof("end_key_type");
    }

}

