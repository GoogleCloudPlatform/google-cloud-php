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

/**
 * Represents a variable or an argument possibly of a compound object type.
 */
class Variable implements \JsonSerializable
{
    /**
     * @var string Name of the variable, if any.
     */
    private $name;

    /**
     * @var string Simple value of the variable.
     */
    private $value;

    /**
     * @var string Variable type (e.g. MyClass). If the variable is split with
     *      varTableIndex, type goes next to value. The interpretation of a type
     *      is agent specific. It is recommended to include the dynamic type
     *      rather than a static type of an object.
     */
    private $type;

    /**
     * @var Variable[] Members contained or pointed to by the variable.
     */
    private $members;

    /**
     * @var int Reference to a variable in the shared variable table. More than
     *      one variable can reference the same variable in the table. The
     *      varTableIndex field is an index into variableTable in Breakpoint.
     */
    private $varTableIndex;

    /**
     * @var StatusMessage Status associated with the variable. This field will
     *      usually stay unset. A status of a single variable only applies to
     *      that variable or expression. The rest of breakpoint data still
     *      remains valid. Variables might be reported in error state even when
     *      breakpoint is not in final state.
     */
    private $status;

    /**
     * Instantiate a new Variable
     *
     * @param string $name
     * @param string $value
     * @param string $type
     * @param int $varTableIndex
     * @param Variable[] $members
     * @param Status $status
     */
    public function __construct($name, $value, $type, $varTableIndex, $members, Status $status)
    {
        $this->name = $name;
        $this->value = $value;
        $this->type = $type;
        $this->varTableIndex = $varTableIndex;
        $this->members = $members;
        $this->status = $status;
    }

    /**
     * Load a Variable from JSON form
     *
     * @param array $data {
     *      Variable data.
     *
     *      @type string $name
     *      @type string $value
     *      @type string $type
     *      @type int $varTableIndex
     *      @type array $members
     *      @type array $status
     * }
     * @return Variable
     */
    public static function fromJson(array $data)
    {
        $data += [
            'name' => null,
            'value' => null,
            'type' => null,
            'varTableIndex' => null,
            'members' => [],
            'status' => null
        ];
        return new static(
            $data['name'],
            $data['value'],
            $data['type'],
            $data['varTableIndex'],
            array_map([static::class, 'fromJson'], $data['members']),
            StatusMessage::fromJson($data['status'])
        );
    }

    /**
     * Callback to implement JsonSerializable interface
     *
     * @access private
     * @return array
     */
    public function jsonSerialize()
    {
        $data = [
            'name' => $this->name,
            'type' => $this->type
        ];
        if ($this->value !== null) {
            $data['value'] = $this->value;
        }
        if ($this->varTableIndex !== null) {
            $data['varTableIndex'] = $this->varTableIndex;
        }
        if (!empty($this->members)) {
            $data['members'] = $this->members;
        }
        if ($this->status) {
            $data['status'] = $this->status;
        }
        return $data;
    }
}
