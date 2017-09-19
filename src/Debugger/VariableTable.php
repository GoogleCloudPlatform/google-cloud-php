<?php

namespace Google\Cloud\Debugger;

/**
 * This class represents a collection of Variables that are referenced by index
 * within a Breakpoint. It's main use to reduce duplication of identical objects
 * by checking a unique identifier for objects.
 */
class VariableTable implements \JsonSerializable
{
    const MAX_MEMBER_DEPTH = 5;

    private $nextIndex = 0;
    private $variables = [];
    private $sharedVariableIndex = [];

    /**
     * Register a variable in the VariableTable and return a Variable reference.
     * The reference should be stored in the correct Breakpoint location.
     *
     * @param string $name The name of the variable
     * @param mixed $value The value of the variable
     * @param integer $depth [optional] Current recursion depth. Used to limit
     *        the depth we inspect public object members. **Defaults to** 0.
     * @return Variable
     */
    public function register($name, $value, $depth = 0)
    {
        $name = (string)$name;
        $members = [];
        $shared = false;
        $type = gettype($value);
        $variableValue = null;

        switch ($type) {
            case 'object':
                $type = get_class($value);
                $hash = spl_object_hash($value);

                if (array_key_exists($hash, $this->sharedVariableIndex)) {
                    $index = $this->sharedVariableIndex[$hash];
                    $shared = true;
                } else {
                    $index = $this->nextIndex;
                    $this->sharedVariableIndex[$hash] = $index;

                    $members = [];
                    if ($depth < self::MAX_MEMBER_DEPTH) {
                        foreach (get_object_vars($value) as $key => $member) {
                            array_push($members, $this->register($key, $member, $depth + 1));
                        }
                    }

                    $this->nextIndex++;
                    array_push($this->variables, new Variable([
                        'name' => $name,
                        'type' => $type,
                        'value' => "$type ($hash)",
                        'members' => $members
                    ]));
                }
                return new Variable([
                    'name' => $name,
                    'type' => $type,
                    'varTableIndex' => $index
                ]);
                break;
            case 'array':
                $arraySize = count($value);
                $members = [];
                if ($depth < self::MAX_MEMBER_DEPTH) {
                    foreach ($value as $key => $member) {
                        array_push($members, $this->register($key, $member, $depth + 1));
                    }
                }
                return new Variable([
                    'name' => $name,
                    'type' => $type,
                    'value' => "array ($arraySize)",
                    'members' => $members
                ]);
                break;
            case 'NULL':
                $variableValue = 'NULL';
                break;
            default:
                $variableValue = (string)$value;
        }

        return new Variable([
            'name' => $name,
            'type' => $type,
            'value' => $variableValue
        ]);
    }

    /**
     * Callback to implement JsonSerializable interface
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->variables;
    }

    /**
     * Return the shared variables
     *
     * @return Variable[]
     */
    public function variables()
    {
        return $this->variables;
    }
}
