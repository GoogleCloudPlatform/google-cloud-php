<?php
/**
 * Copyright 2018 Google Inc. All Rights Reserved.
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

namespace Google\Cloud\Debugger\BreakpointStorage;

use Google\Cloud\Debugger\Breakpoint;
use Google\Cloud\Debugger\Debuggee;

/**
 * This implementation of BreakpointStorageInterface using a local file.
 */
class FileBreakpointStorage implements BreakpointStorageInterface
{
    /* @var string */
    private $filename;

    /**
     * Create a new FileBreakpointStorage instance.
     *
     * @param string $filename [optional] The full path to the storage file.
     *      **Defaults to** a temporary file generated by the caller.
     */
    public function __construct($filename = null)
    {
        $this->filename = $filename ?: $this->defaultFilename();
        $this->lockFilename = $this->filename . '.lock';
    }

    /**
     * Save the given debugger breakpoints.
     *
     * @param Debuggee $debuggee
     * @param Breakpoint[] $breakpoints
     * @return bool
     * @throws \RuntimeException when failed to attach to the shared memory.
     */
    public function save(Debuggee $debuggee, array $breakpoints)
    {
        $data = [
            'debuggeeId' => $debuggee->id(),
            'breakpoints' => $breakpoints
        ];

        $fp = fopen($this->lockFilename, 'w+');
        flock($fp, LOCK_EX);
        $success = file_put_contents($this->filename, serialize($data)) !== false;
        flock($fp, LOCK_UN);
        fclose($fp);
        return $success;
    }

    /**
     * Load debugger breakpoints from the storage. Returns a 2-arity array
     * with the debuggee id and the list of breakpoints.
     *
     * @return array
     * @throws \RuntimeException when failed to attach to the shared memory.
     */
    public function load()
    {
        if (file_exists($this->filename)) {
            $fp = fopen($this->lockFilename, 'w+');
            $contents = '';
            flock($fp, LOCK_SH);
            $contents = file_get_contents($this->filename);
            flock($fp, LOCK_UN);
            fclose($fp);
            $data = unserialize($contents);
            return [
                $data['debuggeeId'], $data['breakpoints']
            ];
        } else {
            return [];
        }
    }

    private function defaultFilename()
    {
        $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 3);
        $frame = $bt[2];
        return implode(DIRECTORY_SEPARATOR, [sys_get_temp_dir(), basename($frame['file']) . $frame['line']]);
    }
}
