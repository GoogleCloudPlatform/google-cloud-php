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
 * Represents a variable or an argument possibly of a compound object type.
 */
class Variable implements \JsonSerializable
{
    use ArrayTrait;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $type;

    /**
     * @var Variable[]
     */
    private $members;

    /**
     * @var int
     */
    private $varTableIndex;

    /**
     * @var StatusMessage
     */
    private $status;

    public function __construct($data)
    {
        $this->name = $this->pluck('name', $data);
        $this->value = $this->pluck('value', $data, false);
        $this->type = $this->pluck('type', $data, false) ?: get_class($this->value);
        if (array_key_exists('members', $data)) {
            $this->members = array_map(function ($member) {
                if ($member instanceof static) {
                    return $member;
                }
                return new static($member);
            }, $data['members']);
        }
        $this->varTableIndex = $this->pluck('varTableIndex', $data, false);
    }

    public static function fromVariable($name, $variable)
    {
        return new static([
            'name' => $name,
            'value' => is_object($variable) ? 'obj' : (string) $variable,
            'type' => gettype($variable)
        ]);
    }

    /**
     * Callback to implement JsonSerializable interface
     *
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type
        ];
        if ($this->value !== NULL) {
            $data['value'] = $this->value;
        }
        if ($this->members !== NULL) {
            $data['members'] = $this->members;
        }
        if ($this->varTableIndex !== NULL) {
            $data['varTableIndex'] = $this->varTableIndex;
        }
        if ($this->status) {
            $data['status'] = $this->status;
        }
        return $data;
    }
}
