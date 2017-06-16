<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/keys.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * `KeySet` defines a collection of Cloud Spanner keys and/or key ranges. All
 * the keys are expected to be in the same table or index. The keys need
 * not be sorted in any particular way.
 * If the same key is specified multiple times in the set (for example
 * if two ranges, two keys, or a key and a range overlap), Cloud Spanner
 * behaves as if the key were only specified once.
 * </pre>
 *
 * Protobuf type <code>Google\Spanner\V1\KeySet</code>
 */
class KeySet extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * A list of specific keys. Entries in `keys` should have exactly as
     * many elements as there are columns in the primary or index key
     * with which this `KeySet` is used.  Individual key values are
     * encoded as described [here][google.spanner.v1.TypeCode].
     * </pre>
     *
     * <code>repeated .google.protobuf.ListValue keys = 1;</code>
     */
    private $keys;
    /**
     * <pre>
     * A list of key ranges. See [KeyRange][google.spanner.v1.KeyRange] for more information about
     * key range specifications.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.KeyRange ranges = 2;</code>
     */
    private $ranges;
    /**
     * <pre>
     * For convenience `all` can be set to `true` to indicate that this
     * `KeySet` matches all keys in the table or index. Note that any keys
     * specified in `keys` or `ranges` are only yielded once.
     * </pre>
     *
     * <code>bool all = 3;</code>
     */
    private $all = false;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\Keys::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * A list of specific keys. Entries in `keys` should have exactly as
     * many elements as there are columns in the primary or index key
     * with which this `KeySet` is used.  Individual key values are
     * encoded as described [here][google.spanner.v1.TypeCode].
     * </pre>
     *
     * <code>repeated .google.protobuf.ListValue keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * <pre>
     * A list of specific keys. Entries in `keys` should have exactly as
     * many elements as there are columns in the primary or index key
     * with which this `KeySet` is used.  Individual key values are
     * encoded as described [here][google.spanner.v1.TypeCode].
     * </pre>
     *
     * <code>repeated .google.protobuf.ListValue keys = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setKeys(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\ListValue::class);
        $this->keys = $arr;

        return $this;
    }

    /**
     * <pre>
     * A list of key ranges. See [KeyRange][google.spanner.v1.KeyRange] for more information about
     * key range specifications.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.KeyRange ranges = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRanges()
    {
        return $this->ranges;
    }

    /**
     * <pre>
     * A list of key ranges. See [KeyRange][google.spanner.v1.KeyRange] for more information about
     * key range specifications.
     * </pre>
     *
     * <code>repeated .google.spanner.v1.KeyRange ranges = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setRanges(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Spanner\V1\KeyRange::class);
        $this->ranges = $arr;

        return $this;
    }

    /**
     * <pre>
     * For convenience `all` can be set to `true` to indicate that this
     * `KeySet` matches all keys in the table or index. Note that any keys
     * specified in `keys` or `ranges` are only yielded once.
     * </pre>
     *
     * <code>bool all = 3;</code>
     * @return bool
     */
    public function getAll()
    {
        return $this->all;
    }

    /**
     * <pre>
     * For convenience `all` can be set to `true` to indicate that this
     * `KeySet` matches all keys in the table or index. Note that any keys
     * specified in `keys` or `ranges` are only yielded once.
     * </pre>
     *
     * <code>bool all = 3;</code>
     * @param bool $var
     */
    public function setAll($var)
    {
        GPBUtil::checkBool($var);
        $this->all = $var;

        return $this;
    }

}

