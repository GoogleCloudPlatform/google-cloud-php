<?php
/**
 * Copyright 2016 Google Inc.
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
 * Represent a Google Cloud Spanner lookup result (either read or executeSql).
 *
 * Example:
 * ```
 * use Google\Cloud\ServiceBuilder;
 *
 * $cloud = new ServiceBuilder();
 * $spanner = $cloud->spanner();
 * $database = $spanner->connect('my-instance', 'my-database');
 *
 * $result = $database->execute('SELECT * FROM Posts');
 * ```
 *
 * @see https://cloud.google.com/spanner/docs/reference/rpc/google.spanner.v1#google.spanner.v1.ResultSet ResultSet
 */
class Result implements \IteratorAggregate
{
    /**
     * @var array
     */
    private $result;

    /**
     * @var array
     */
    private $rows;

    /**
     * @param array $result The query or read result.
     * @param array $rows The rows, formatted and decoded.
     */
    public function __construct(array $result, array $rows)
    {
        $this->result = $result;
        $this->rows = $rows;
    }

    /**
     * Return result metadata
     *
     * Example:
     * ```
     * $metadata = $result->metadata();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @return array [ResultSetMetadata](https://cloud.google.com/spanner/docs/reference/rpc/google.spanner.v1#google.spanner.v1.ResultSetMetadata).
     * @codingStandardsIgnoreEnd
     */
    public function metadata()
    {
        return $this->result['metadata'];
    }

    /**
     * Return the formatted and decoded rows.
     *
     * Example:
     * ```
     * $rows = $result->rows();
     * ```
     *
     * @return array|null
     */
    public function rows()
    {
        return $this->rows;
    }

    /**
     * Get the query plan and execution statistics for the query that produced
     * this result set.
     *
     * Stats are not returned by default.
     *
     * Example:
     * ```
     * $stats = $result->stats();
     * ```
     *
     * ```
     * // Executing a query with stats returned.
     * $res = $database->execute('SELECT * FROM Posts', [
     *     'queryMode' => 'PROFILE'
     * ]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @return array|null [ResultSetStats](https://cloud.google.com/spanner/docs/reference/rpc/google.spanner.v1#google.spanner.v1.ResultSetStats).
     * @codingStandardsIgnoreEnd
     */
    public function stats()
    {
        return (isset($this->result['stats']))
            ? $this->result['stats']
            : null;
    }

    /**
     * Get the entire query or read response as given by the API.
     *
     * Example:
     * ```
     * $info = $result->info();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @return array [ResultSet](https://cloud.google.com/spanner/docs/reference/rpc/google.spanner.v1#google.spanner.v1.ResultSet).
     * @codingStandardsIgnoreEnd
     */
    public function info()
    {
        return $this->result;
    }

    /**
     * @access private
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->rows);
    }
}
