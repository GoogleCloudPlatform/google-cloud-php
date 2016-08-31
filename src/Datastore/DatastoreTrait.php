<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Datastore;

use InvalidArgumentException;
use Psr\Http\Message\StreamInterface;

/**
 * Utility methods mostly for translating data from user input to API format.
 */
trait DatastoreTrait
{
    /**
     * Format the partitionId
     *
     * @param string $projectId
     * @param string $namespaceId
     * @return array
     */
    private function partitionId($projectId, $namespaceId)
    {
        return array_filter([
            'projectId' => $projectId,
            'namespaceId' => $namespaceId
        ]);
    }

    /**
     * Determine whether given array is associative
     *
     * @param array $value
     * @return bool
     */
    private function isAssoc(array $value)
    {
        return array_keys($value) !== range(0, count($value) - 1);
    }
}
