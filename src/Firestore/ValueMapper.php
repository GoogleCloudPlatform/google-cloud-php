<?php
/**
 * Copyright 2017 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Firestore;

use Google\Cloud\Core\Blob;
use Google\Cloud\Core\Int64;
use Google\Protobuf\NullValue;
use Google\Cloud\Core\GeoPoint;
use Google\Cloud\Core\Timestamp;
use Google\Cloud\Core\ArrayTrait;
use Google\Cloud\Core\DebugInfoTrait;
use Google\Cloud\Core\ValueMapperTrait;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * Normalizes values between Google Cloud PHP and Cloud Firestore.
 */
class ValueMapper
{
    use ArrayTrait;
    use DebugInfoTrait;
    use PathTrait;
    use ValueMapperTrait;

    /**
     * @var ConnectionInterface
     */
    private $connection;

    /**
     * @var bool
     */
    private $returnInt64AsObject;

    /**
     * @param ConnectionInterface $connection A connection to Cloud Firestore
     * @param bool $returnInt64AsObject Whether to wrap int types in a wrapper
     *        (to preserve values in 32-bit environments).
     */
    public function __construct(ConnectionInterface $connection, $returnInt64AsObject)
    {
        $this->connection = $connection;
        $this->returnInt64AsObject = $returnInt64AsObject;
    }

    /**
     * Convert a list of fields from the API to corresponding PHP values in a
     * nested key/value array.
     *
     * @param array $fields A list of fields to decode.
     * @return array
     */
    public function decodeValues(array $fields)
    {
        $output = [];

        foreach ($fields as $key => $val) {
            $type = array_keys($val)[0];
            $value = current($val);

            $output[$key] = $this->decodeValue($type, $value);
        }

        return $output;
    }

    /**
     * Convert a PHP array containing google-cloud-php and simple types to an
     * array ready to be sent to Firestore.
     *
     * @param array $fields A list of fields to encode.
     * @return array
     */
    public function encodeValues(array $fields)
    {
        $output = [];

        foreach ($fields as $key => $val) {
            $output[$key] = $this->encodeValue($val);
        }

        return $output;
    }

    /**
     * Create a list of fields paths from field data.
     *
     * The return value of this method does not include the field values. It
     * merely provides a list of field paths which were included in the input.
     *
     * @param array $fields A list of fields to map as paths.
     * @param string $parentPath The parent path (used internally).
     * @return array
     */
    public function encodeFieldPaths(array $fields, $parentPath = '')
    {
        $output = [];

        foreach ($fields as $key => $val) {
            if (is_array($val) && $this->isAssoc($val)) {
                $nestedParentPath = $parentPath
                    ? $parentPath . '.' . $key
                    : $key;

                $output = array_merge($output, $this->encodeFieldPaths($val, $nestedParentPath));
            } else {
                $output[] = $parentPath
                    ? $parentPath . '.' . $key
                    : $key;
            }
        }

        return $output;
    }

    /**
     * Decode field paths and values.
     *
     * Accepts an array of form array<string, mixed>, where the key is a field
     * path and the value is a document field value, and returns a nested array.
     *
     * @param array $fieldPaths A list of field paths and values.
     * @return array
     */
    public function decodeFieldPaths(array $fieldPaths)
    {
        $output = [];

        foreach ($fieldPaths as $fieldPath => $fieldValue) {
            $keys = explode('.', $fieldPath);
            $num = count($keys);

            $val = $fieldValue;
            foreach (array_reverse($keys) as $index => $key) {
                if ($num >= $index+1) {
                    $val = [$key => $val];
                }
            }

            $output = array_merge_recursive($output, $val);
        }

        return $output;
    }

    /**
     * Search an array for sentinel values, returning the array of fields with
     * sentinels removed, and a list of delete and server timestamp value field
     * paths.
     *
     * @param array $fields The input field data.
     * @return array `[$fields, $timestamps, $deletes]`
     */
    public function findSentinels(array $fields)
    {
        $timestamps = [];
        $deletes = [];
        $fields = $this->removeSentinel($fields, $timestamps, $deletes);

        return [$fields, $timestamps, $deletes];
    }

    /**
     * Recurse through fields and find and remove sentinel values.
     *
     * @param array $fields The input field data.
     * @param array $timestamps The timestamps field paths. (reference)
     * @param array $deletes the deletes field paths. (reference)
     * @param string $path The current field path.
     * @return array
     */
    private function removeSentinel(array $fields, array &$timestamps, array &$deletes, $path = '')
    {
        if ($path !== '') {
            $path .= '.';
        }

        foreach ($fields as $key => $value) {
            $currPath = $path . (string) $key;
            if (is_array($value)) {
                $fields[$key] = $this->removeSentinel($value, $timestamps, $deletes, $currPath);
            } else {
                if ($value === FirestoreClient::DELETE_FIELD || $value === FirestoreClient::SERVER_TIMESTAMP) {
                    if ($value === FirestoreClient::DELETE_FIELD) {
                        $deletes[] = $currPath;
                    }

                    if ($value === FirestoreClient::SERVER_TIMESTAMP) {
                        $timestamps[] = $currPath;
                    }

                    unset($fields[$key]);
                }
            }
        }

        return $fields;
    }

    /**
     * Convert a Firestore value to a Google Cloud PHP value.
     *
     * @see https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#value Value
     * @param string $type The Firestore value type.
     * @param mixed $value The firestore value.
     * @return mixed
     */
    private function decodeValue($type, $value)
    {
        switch ($type) {
            case 'booleanValue':
            case 'nullValue':
            case 'stringValue':
            case 'doubleValue':
                return $value;
                break;

            case 'bytesValue':
                return new Blob($value);

            case 'integerValue':
                return $this->returnInt64AsObject
                    ? new Int64($value)
                    : $value;

            case 'timestampValue':
                return $this->createTimestampWithNanos($value);
                break;

            case 'geoPointValue':
                $value += [
                    'latitude' => null,
                    'longitude' => null
                ];

                return new GeoPoint($value['latitude'], $value['longitude']);
                break;

            case 'arrayValue':
                $res = [];

                foreach ($value['values'] as $val) {
                    $type = array_keys($val)[0];

                    $res[] = $this->decodeValue($type, current($val));
                }

                return $res;
                break;

            case 'mapValue':
                $res = [];

                foreach ($value['fields'] as $key => $val) {
                    $type = array_keys($val)[0];

                    $res[$key] = $this->decodeValue($type, current($val));
                }

                return $res;
                break;

            case 'referenceValue':
                $parent = new CollectionReference($this->connection, $this, $this->parentPath($value));
                return new DocumentReference($this->connection, $this, $parent, $value);

            default:
                throw new \RuntimeException(sprintf(
                    'unexpected value type %s!',
                    $type
                ));

                break;
        }
    }

    /**
     * Encode a Google Cloud PHP value as a Firestore value.
     *
     * @param mixed $value
     * @return array [Value](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#value)
     */
    public function encodeValue($value)
    {
        $type = gettype($value);

        switch ($type) {
            case 'boolean':
                return ['booleanValue' => $value];
                break;

            case 'integer':
                return ['integerValue' => $value];
                break;

            case 'double':
                return ['doubleValue' => $value];
                break;

            case 'string':
                return ['stringValue' => $value];
                break;

            case 'resource':
                return ['bytesValue' => base64_encode(stream_get_contents($value))];
                break;

            case 'object':
                return $this->encodeObjectValue($value);
                break;

            case 'array':
                if ($this->isAssoc($value)) {
                    return $this->encodeAssociativeArrayValue($value);
                }

                return $this->encodeArrayValue($value);
                break;

            case 'NULL':
                // @todo encode this in a way such that is compatible with a potential future REST transport.
                return ['nullValue' => NullValue::NULL_VALUE];
                break;

            // @codeCoverageIgnoreStart
            default:
                throw new \RuntimeException(sprintf(
                    'Invalid value type %s',
                    $type
                ));
                break;
            // @codeCoverageIgnoreEnd
        }
    }

    /**
     * Encode a value of type `object` as a Firestore value.
     *
     * @param object $value
     * @return array
     * @throws \RuntimeException If an invalid object type is provided.
     */
    private function encodeObjectValue($value)
    {
        if ($value instanceof \stdClass) {
            return $this->encodeAssociativeArrayValue((array) $value);
        }

        if ($value instanceof Blob) {
            return ['bytesValue' => (string) $value];
        }

        if ($value instanceof Timestamp) {
            return ['timestampValue' => [
                'seconds' => $value->get()->format('U'),
                'nanos' => $value->nanoSeconds()
            ]];
        }

        if ($value instanceof GeoPoint) {
            return ['geoPointValue' => $value->point()];
        }

        if ($value instanceof DocumentReference) {
            return ['referenceValue' => $value->name()];
        }

        throw new \RuntimeException(sprintf(
            'Object of type %s cannot be encoded to a Firestore value type.',
            get_class($value)
        ));
    }

    /**
     * Encode an associative array as a Firestore Map value.
     *
     * @codingStandardsIgnoreStart
     * @param array $value
     * @return array [MapValue](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.MapValue)
     * @codingStandardsIgnoreEnd
     */
    private function encodeAssociativeArrayValue(array $value)
    {
        $out = [];
        foreach ($value as $key => $item) {
            $out[$key] = $this->encodeValue($item);
        }

        return ['mapValue' => ['fields' => $out]];
    }

    /**
     * Encode a simple array as a Firestore array value.
     *
     * @codingStandardsIgnoreStart
     * @param array $value
     * @return array [ArrayValue](https://firebase.google.com/docs/firestore/reference/rpc/google.firestore.v1beta1#google.firestore.v1beta1.ArrayValue)
     * @throws \RuntimeException If the array contains a nested array.
     * @codingStandardsIgnoreEnd
     */
    private function encodeArrayValue(array $value)
    {
        $out = [];
        foreach ($value as $item) {
            if (is_array($item) && !$this->isAssoc($item)) {
                throw new \RuntimeException('Nested array values are not permitted.');
            }

            $out[] = $this->encodeValue($item);
        }

        return ['arrayValue' => ['values' => $out]];
    }
}
