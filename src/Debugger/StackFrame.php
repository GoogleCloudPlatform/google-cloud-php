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

namespace Google\Cloud\Debugger;

use Google\Cloud\Core\ArrayTrait;

/**
 */
class StackFrame implements \JsonSerializable
{
    use ArrayTrait;

    /**
     * @var string
     */
    public $function;

    /**
     * @var SourceLocation
     */
    public $location;

    /**
     * @var Variable[]
     */
    public $arguments = [];

    /**
     * @var Variable[]
     */
    public $locals = [];

    public function __construct($data)
    {
        $this->function = $this->pluck('function', $data, false);
        $this->location = new SourceLocation($this->pluck('location', $data, false));
        // $this->arguments =
    }

    public static function fromBacktrace($bt)
    {
        // var_dump($bt);
        return array_map(function ($stack) {
            return new static([
                'function' => $stack['function'],
                'location' => [
                    'path' => $stack['file'],
                    'line' => $stack['line']
                ]
            ]);
        }, $bt);
    }

    public function jsonSerialize()
    {
        return [
            'function' => $this->function,
            'location' => $this->location,
            'arguments' => $this->arguments,
            'locals' => $this->locals
        ];
    }
}
