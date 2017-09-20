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

use Google\Cloud\Core\Batch\BatchRunner;
use Google\Cloud\Core\Batch\BatchTrait;
use Google\Cloud\Debugger\BreakpointStorage\BreakpointStorageInterface;
use Google\Cloud\Debugger\BreakpointStorage\SysvBreakpointStorage;

/**
 * This class is responsible for registering all debugger breakpoints and
 * logpoints for each request. It should be created as early as possible in
 * your application.
 *
 * Example:
 * ```
 * use Google\Cloud\Debugger\Agent;
 *
 * $agent = new Agent();
 * ```
 */
class Agent
{
    use BatchTrait;

    /**
     * @var Debuggee
     */
    private static $debuggee;

    /**
     * @var string
     */
    private $debuggeeId;

    /**
     * @var array string => Breakpoint
     */
    private $breakpoints = [];

    /**
     * Create a new Debugger Agent, registers all breakpoints for collection
     * or execution, and registers a shutdown function for reporting results.
     *
     * @param array $options [optional] {
     *      Configuration options.
     *
     *      @type BreakpointStorageInterface $storage Breakpoint storage
     *            to fetch breakpoints from. **Defaults to** a new
     *            SysvBreakpointStorage instance.
     *      @type Debuggee $debuggee Unique debuggee instance. **Defaults to**
     *            a generated debuggee instance.
     *      @type string $sourceRoot Path to the root of the source repository.
     *            **Defaults to** the directory of the calling file.
     * }
     */
    public function __construct(array $options = [])
    {
        $storage = isset($options['storage'])
            ? $options['storage']
            : new SysvBreakpointStorage();
        list($this->debuggeeId, $breakpoints) = $storage->load();

        $this->setCommonBatchProperties($options + [
            'identifier' => 'stackdriver-debugger',
            'batchMethod' => 'insertBatch'
        ]);
        self::$debuggee = isset($options['debuggee'])
            ? $options['debuggee']
            : $this->defaultDebuggee();

        if (empty($breakpoints)) {
            return;
        }

        if (!extension_loaded('stackdriver_debugger')) {
            trigger_error('Breakpoints set but "stackdriver_debugger extension not loaded"', E_USER_WARNING);
            return;
        }

        $sourceFile = isset($options['sourceRoot'])
            ? $options['sourceRoot'] . '/foo'
            : debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 1)[0]['file'];

        foreach ($breakpoints as $breakpoint) {
            $this->breakpoints[$breakpoint->id()] = $breakpoint;
            switch ($breakpoint->action()) {
                case null: // default action (not set) is a snapsoht
                case Action::CAPTURE:
                    $sourceLocation = $breakpoint->location();
                    stackdriver_debugger_add_snapshot(
                        $sourceLocation->path(),
                        $sourceLocation->line(),
                        $breakpoint->id(),
                        $breakpoint->condition(),
                        $breakpoint->expressions(),
                        $sourceFile
                    );
                    break;
                case Action::LOG:
                    trigger_error('Logpoints not yet implemented', E_USER_ERROR);
                default:
                    continue;
            }
        }

        register_shutdown_function([$this, 'onExit']);
    }

    /**
     * The function is registered as the shutdown function. Reports any captured
     * breakpoint data and reportes it to the Stackdriver Debugger backend.
     */
    public function onExit()
    {
        $list = stackdriver_debugger_list();
        foreach ($list as $snapshot) {
            if (array_key_exists($snapshot['id'], $this->breakpoints)) {
                $breakpoint = $this->breakpoints[$snapshot['id']];
                $breakpoint->finalize();
                $breakpoint->addEvaluatedExpressions($snapshot['evaluatedExpressions']);
                $breakpoint->addStackFrames($snapshot['stackframes']);
                $this->batchRunner->submitItem($this->identifier, $breakpoint);
            }
        }
    }

    protected function getCallback()
    {
        if (!isset(self::$debuggee)) {
            self::$debuggee = $this->defaultDebuggee();
        }
        return [self::$debuggee, 'updateBreakpointBatch'];
    }

    private function defaultDebuggee()
    {
        $client = new DebuggerClient($this->clientConfig);
        return $client->debuggee($this->debuggeeId, [
            'uniquifier' => 'foo-bar2',
            'description' => 'Debugger for test'
        ]);
    }
}
