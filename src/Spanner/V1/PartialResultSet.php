<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/result_set.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Partial results from a streaming read or SQL query. Streaming reads and
 * SQL queries better tolerate large result sets, large rows, and large
 * values, but are a little trickier to consume.
 * </pre>
 *
 * Protobuf type <code>Google\Spanner\V1\PartialResultSet</code>
 */
class PartialResultSet extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Metadata about the result set, such as row type information.
     * Only present in the first response.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     */
    private $metadata = null;
    /**
     * <pre>
     * A streamed result set consists of a stream of values, which might
     * be split into many `PartialResultSet` messages to accommodate
     * large rows and/or large values. Every N complete values defines a
     * row, where N is equal to the number of entries in
     * [metadata.row_type.fields][google.spanner.v1.StructType.fields].
     * Most values are encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     * It is possible that the last value in values is "chunked",
     * meaning that the rest of the value is sent in subsequent
     * `PartialResultSet`(s). This is denoted by the [chunked_value][google.spanner.v1.PartialResultSet.chunked_value]
     * field. Two or more chunked values can be merged to form a
     * complete value as follows:
     *   * `bool/number/null`: cannot be chunked
     *   * `string`: concatenate the strings
     *   * `list`: concatenate the lists. If the last element in a list is a
     *     `string`, `list`, or `object`, merge it with the first element in
     *     the next list by applying these rules recursively.
     *   * `object`: concatenate the (field name, field value) pairs. If a
     *     field name is duplicated, then apply these rules recursively
     *     to merge the field values.
     * Some examples of merging:
     *     # Strings are concatenated.
     *     "foo", "bar" => "foobar"
     *     # Lists of non-strings are concatenated.
     *     [2, 3], [4] => [2, 3, 4]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are strings.
     *     ["a", "b"], ["c", "d"] => ["a", "bc", "d"]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are lists. Recursively, the last and first elements
     *     # of the inner lists are merged because they are strings.
     *     ["a", ["b", "c"]], [["d"], "e"] => ["a", ["b", "cd"], "e"]
     *     # Non-overlapping object fields are combined.
     *     {"a": "1"}, {"b": "2"} => {"a": "1", "b": 2"}
     *     # Overlapping object fields are merged.
     *     {"a": "1"}, {"a": "2"} => {"a": "12"}
     *     # Examples of merging objects containing lists of strings.
     *     {"a": ["1"]}, {"a": ["2"]} => {"a": ["12"]}
     * For a more complete example, suppose a streaming SQL query is
     * yielding a result set whose rows contain a single string
     * field. The following `PartialResultSet`s might be yielded:
     *     {
     *       "metadata": { ... }
     *       "values": ["Hello", "W"]
     *       "chunked_value": true
     *       "resume_token": "Af65..."
     *     }
     *     {
     *       "values": ["orl"]
     *       "chunked_value": true
     *       "resume_token": "Bqp2..."
     *     }
     *     {
     *       "values": ["d"]
     *       "resume_token": "Zx1B..."
     *     }
     * This sequence of `PartialResultSet`s encodes two rows, one
     * containing the field value `"Hello"`, and a second containing the
     * field value `"World" = "W" + "orl" + "d"`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Value values = 2;</code>
     */
    private $values;
    /**
     * <pre>
     * If true, then the final value in [values][google.spanner.v1.PartialResultSet.values] is chunked, and must
     * be combined with more values from subsequent `PartialResultSet`s
     * to obtain a complete field value.
     * </pre>
     *
     * <code>bool chunked_value = 3;</code>
     */
    private $chunked_value = false;
    /**
     * <pre>
     * Streaming calls might be interrupted for a variety of reasons, such
     * as TCP connection loss. If this occurs, the stream of results can
     * be resumed by re-sending the original request and including
     * `resume_token`. Note that executing any other transaction in the
     * same session invalidates the token.
     * </pre>
     *
     * <code>bytes resume_token = 4;</code>
     */
    private $resume_token = '';
    /**
     * <pre>
     * Query plan and execution statistics for the query that produced this
     * streaming result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode] and are sent
     * only once with the last response in the stream.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetStats stats = 5;</code>
     */
    private $stats = null;

    public function __construct() {
        \GPBMetadata\Google\Spanner\V1\ResultSet::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Metadata about the result set, such as row type information.
     * Only present in the first response.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     * @return Google\Cloud\Spanner\V1\ResultSetMetadata
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * <pre>
     * Metadata about the result set, such as row type information.
     * Only present in the first response.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetMetadata metadata = 1;</code>
     * @param Google\Cloud\Spanner\V1\ResultSetMetadata $var
     */
    public function setMetadata(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\ResultSetMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * <pre>
     * A streamed result set consists of a stream of values, which might
     * be split into many `PartialResultSet` messages to accommodate
     * large rows and/or large values. Every N complete values defines a
     * row, where N is equal to the number of entries in
     * [metadata.row_type.fields][google.spanner.v1.StructType.fields].
     * Most values are encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     * It is possible that the last value in values is "chunked",
     * meaning that the rest of the value is sent in subsequent
     * `PartialResultSet`(s). This is denoted by the [chunked_value][google.spanner.v1.PartialResultSet.chunked_value]
     * field. Two or more chunked values can be merged to form a
     * complete value as follows:
     *   * `bool/number/null`: cannot be chunked
     *   * `string`: concatenate the strings
     *   * `list`: concatenate the lists. If the last element in a list is a
     *     `string`, `list`, or `object`, merge it with the first element in
     *     the next list by applying these rules recursively.
     *   * `object`: concatenate the (field name, field value) pairs. If a
     *     field name is duplicated, then apply these rules recursively
     *     to merge the field values.
     * Some examples of merging:
     *     # Strings are concatenated.
     *     "foo", "bar" => "foobar"
     *     # Lists of non-strings are concatenated.
     *     [2, 3], [4] => [2, 3, 4]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are strings.
     *     ["a", "b"], ["c", "d"] => ["a", "bc", "d"]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are lists. Recursively, the last and first elements
     *     # of the inner lists are merged because they are strings.
     *     ["a", ["b", "c"]], [["d"], "e"] => ["a", ["b", "cd"], "e"]
     *     # Non-overlapping object fields are combined.
     *     {"a": "1"}, {"b": "2"} => {"a": "1", "b": 2"}
     *     # Overlapping object fields are merged.
     *     {"a": "1"}, {"a": "2"} => {"a": "12"}
     *     # Examples of merging objects containing lists of strings.
     *     {"a": ["1"]}, {"a": ["2"]} => {"a": ["12"]}
     * For a more complete example, suppose a streaming SQL query is
     * yielding a result set whose rows contain a single string
     * field. The following `PartialResultSet`s might be yielded:
     *     {
     *       "metadata": { ... }
     *       "values": ["Hello", "W"]
     *       "chunked_value": true
     *       "resume_token": "Af65..."
     *     }
     *     {
     *       "values": ["orl"]
     *       "chunked_value": true
     *       "resume_token": "Bqp2..."
     *     }
     *     {
     *       "values": ["d"]
     *       "resume_token": "Zx1B..."
     *     }
     * This sequence of `PartialResultSet`s encodes two rows, one
     * containing the field value `"Hello"`, and a second containing the
     * field value `"World" = "W" + "orl" + "d"`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Value values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * <pre>
     * A streamed result set consists of a stream of values, which might
     * be split into many `PartialResultSet` messages to accommodate
     * large rows and/or large values. Every N complete values defines a
     * row, where N is equal to the number of entries in
     * [metadata.row_type.fields][google.spanner.v1.StructType.fields].
     * Most values are encoded based on type as described
     * [here][google.spanner.v1.TypeCode].
     * It is possible that the last value in values is "chunked",
     * meaning that the rest of the value is sent in subsequent
     * `PartialResultSet`(s). This is denoted by the [chunked_value][google.spanner.v1.PartialResultSet.chunked_value]
     * field. Two or more chunked values can be merged to form a
     * complete value as follows:
     *   * `bool/number/null`: cannot be chunked
     *   * `string`: concatenate the strings
     *   * `list`: concatenate the lists. If the last element in a list is a
     *     `string`, `list`, or `object`, merge it with the first element in
     *     the next list by applying these rules recursively.
     *   * `object`: concatenate the (field name, field value) pairs. If a
     *     field name is duplicated, then apply these rules recursively
     *     to merge the field values.
     * Some examples of merging:
     *     # Strings are concatenated.
     *     "foo", "bar" => "foobar"
     *     # Lists of non-strings are concatenated.
     *     [2, 3], [4] => [2, 3, 4]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are strings.
     *     ["a", "b"], ["c", "d"] => ["a", "bc", "d"]
     *     # Lists are concatenated, but the last and first elements are merged
     *     # because they are lists. Recursively, the last and first elements
     *     # of the inner lists are merged because they are strings.
     *     ["a", ["b", "c"]], [["d"], "e"] => ["a", ["b", "cd"], "e"]
     *     # Non-overlapping object fields are combined.
     *     {"a": "1"}, {"b": "2"} => {"a": "1", "b": 2"}
     *     # Overlapping object fields are merged.
     *     {"a": "1"}, {"a": "2"} => {"a": "12"}
     *     # Examples of merging objects containing lists of strings.
     *     {"a": ["1"]}, {"a": ["2"]} => {"a": ["12"]}
     * For a more complete example, suppose a streaming SQL query is
     * yielding a result set whose rows contain a single string
     * field. The following `PartialResultSet`s might be yielded:
     *     {
     *       "metadata": { ... }
     *       "values": ["Hello", "W"]
     *       "chunked_value": true
     *       "resume_token": "Af65..."
     *     }
     *     {
     *       "values": ["orl"]
     *       "chunked_value": true
     *       "resume_token": "Bqp2..."
     *     }
     *     {
     *       "values": ["d"]
     *       "resume_token": "Zx1B..."
     *     }
     * This sequence of `PartialResultSet`s encodes two rows, one
     * containing the field value `"Hello"`, and a second containing the
     * field value `"World" = "W" + "orl" + "d"`.
     * </pre>
     *
     * <code>repeated .google.protobuf.Value values = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setValues(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Value::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * <pre>
     * If true, then the final value in [values][google.spanner.v1.PartialResultSet.values] is chunked, and must
     * be combined with more values from subsequent `PartialResultSet`s
     * to obtain a complete field value.
     * </pre>
     *
     * <code>bool chunked_value = 3;</code>
     * @return bool
     */
    public function getChunkedValue()
    {
        return $this->chunked_value;
    }

    /**
     * <pre>
     * If true, then the final value in [values][google.spanner.v1.PartialResultSet.values] is chunked, and must
     * be combined with more values from subsequent `PartialResultSet`s
     * to obtain a complete field value.
     * </pre>
     *
     * <code>bool chunked_value = 3;</code>
     * @param bool $var
     */
    public function setChunkedValue($var)
    {
        GPBUtil::checkBool($var);
        $this->chunked_value = $var;

        return $this;
    }

    /**
     * <pre>
     * Streaming calls might be interrupted for a variety of reasons, such
     * as TCP connection loss. If this occurs, the stream of results can
     * be resumed by re-sending the original request and including
     * `resume_token`. Note that executing any other transaction in the
     * same session invalidates the token.
     * </pre>
     *
     * <code>bytes resume_token = 4;</code>
     * @return string
     */
    public function getResumeToken()
    {
        return $this->resume_token;
    }

    /**
     * <pre>
     * Streaming calls might be interrupted for a variety of reasons, such
     * as TCP connection loss. If this occurs, the stream of results can
     * be resumed by re-sending the original request and including
     * `resume_token`. Note that executing any other transaction in the
     * same session invalidates the token.
     * </pre>
     *
     * <code>bytes resume_token = 4;</code>
     * @param string $var
     */
    public function setResumeToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->resume_token = $var;

        return $this;
    }

    /**
     * <pre>
     * Query plan and execution statistics for the query that produced this
     * streaming result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode] and are sent
     * only once with the last response in the stream.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetStats stats = 5;</code>
     * @return Google\Cloud\Spanner\V1\ResultSetStats
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * <pre>
     * Query plan and execution statistics for the query that produced this
     * streaming result set. These can be requested by setting
     * [ExecuteSqlRequest.query_mode][google.spanner.v1.ExecuteSqlRequest.query_mode] and are sent
     * only once with the last response in the stream.
     * </pre>
     *
     * <code>.google.spanner.v1.ResultSetStats stats = 5;</code>
     * @param Google\Cloud\Spanner\V1\ResultSetStats $var
     */
    public function setStats(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\ResultSetStats::class);
        $this->stats = $var;

        return $this;
    }

}

