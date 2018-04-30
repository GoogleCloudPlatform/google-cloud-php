<?php
/**
 * Copyright 2018 Google Inc.
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

namespace Google\Cloud\Spanner;

/**
 * Represents an array type declaration.
 *
 * Example:
 * ```
 * use Google\Cloud\Spanner\ArrayType;
 * use Google\Cloud\Spanner\Database;
 * use Google\Cloud\Spanner\SpannerClient;
 *
 * $spanner = new SpannerClient();
 * $database = $spanner->connect('my-instance', 'my-database');
 *
 * $arrayType = new ArrayType(Database::TYPE_STRING);
 *
 * $res = $database->execute('SELECT @arrayParam as arrayValue', [
 *     'parameters' => [
 *         'arrayParam' => ['foo', 'bar', null]
 *     ],
 *     'types' => [
 *         'arrayParam' => $arrayType
 *     ]
 * ])->rows()->current();
 *
 * $firstValue = $res['arrayValue'][0]; // `foo`
 * ```
 *
 * ```
 * // Arrays may contain structs.
 * $arrayType = new ArrayType(
 *     Database::TYPE_STRUCT,
 *     (new StructType)
 *         ->add('companyName', Database::TYPE_STRING)
 *         ->add('companyId', Database::TYPE_INT64)
 * );
 * ```
 */
class ArrayType
{
    /**
     * @var int
     */
    private $type;

    /**
     * @var mixed
     */
    private $struct;

    /**
     * @param int|null $type A value type code. Accepted values are defined as
     *        constants on {@see Google\Cloud\Spanner\Database}, and are as
     *        follows: `Database::TYPE_BOOL`, `Database::TYPE_INT64`,
     *        `Database::TYPE_FLOAT64`, `Database::TYPE_TIMESTAMP`,
     *        `Database::TYPE_DATE`, `Database::TYPE_STRING`,
     *        `Database::TYPE_BYTES`, and `Database::TYPE_STRUCT`. Nested arrays
     *        are not supported in Cloud Spanner, and attempts to use
     *        `Database::TYPE_ARRAY` will result in an exception. If null is given,
     *        Google Cloud PHP will attempt to infer the array type.
     * @param StructType $struct [optional] A nested struct parameter type
     *        declaration.
     * @throws \InvalidArgumentException If an invalid type is provided, or if
     *        a struct is defined but the given type is not
     *        `Database::TYPE_STRUCT`.
     */
    public function __construct($type, StructType $struct = null)
    {
        if ($type && !in_array($type, ValueMapper::$allowedTypes)) {
            throw new \InvalidArgumentException(sprintf(
                'Type %s is not an allowed type.',
                $type
            ));
        }

        if ($type === Database::TYPE_ARRAY) {
            throw new \InvalidArgumentException(
                'Arrays may not contain arrays.'
            );
        }

        if ($struct !== null && $type !== Database::TYPE_STRUCT) {
            $refl = new \ReflectionClass(Database::class);
            $constants = array_flip($refl->getConstants());
            $constantName = isset($constants[$type])
                ? $constants[$type]
                : null;

            $err = 'When struct definition is provided, array type must be `Database::TYPE_STRUCT`.';

            if ($constantName) {
                $err .= ' Instead got `Database::%s`.';
            }

            throw new \InvalidArgumentException(sprintf(
                $err,
                $constantName
            ));
        }

        $this->type = $type;
        $this->struct = $struct;
    }

    /**
     * Get the array value type.
     *
     * @access private
     * @return int
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * Get the nested struct parameter type.
     *
     * @access private
     * @return StructType|null
     */
    public function struct()
    {
        return $this->struct;
    }
}
