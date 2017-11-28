<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\Cloud\Trace;

use Google\Cloud\Core\ArrayTrait;

/**
 * This plain PHP class represents a StackTrace resource.
 */
class StackTrace implements \JsonSerializable
{
    /**
     * @var array The backtrace in the format of debug_backtrace().
     */
    private $backtrace;

    /**
     * Create a new StackTrace.
     *
     * @param array $backtrace Thje backtrace in the format of debug_backtrace().
     */
    public function __construct($backtrace)
    {
        $this->backtrace = $backtrace;
    }

    /**
     * Returns a serializable array representing this StackTrace
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'stackFrames' => [
                'frame' => array_map([$this, 'mapStackFrame'], $this->backtrace)
            ]
        ];
    }

    private function mapStackFrame($sf)
    {
        $data = [];
        if (isset($sf['line'])) {
            $data['lineNumber'] = $sf['line'];
        }
        if (isset($sf['file'])) {
            $data['fileName'] = [
                'value' => $sf['file']
            ];
        }
        if (isset($sf['function'])) {
            $data['functionName'] = [
                'value' => $sf['function']
            ];
        }
        return $data;
    }
}
