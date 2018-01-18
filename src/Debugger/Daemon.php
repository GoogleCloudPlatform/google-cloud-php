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

use Google\Cloud\Core\Batch\SimpleJobTrait;
use Google\Cloud\Core\Exception\ConflictException;
use Google\Cloud\Debugger\BreakpointStorage\BreakpointStorageInterface;
use Google\Cloud\Debugger\BreakpointStorage\SysvBreakpointStorage;

/**
 * This class is responsible for registering itself as a Debuggee with the
 * Stackdriver backend. It will fetch the list of breakpoints from the
 * Stackdriver backend, validate and normalize them, and store them into the
 * configured breakpoint storage.
 *
 * Example:
 * ```
 * use Google\Cloud\Debugger\Daemon;
 *
 * $daemon = new Daemon();
 * $daemon->run();
 * ```
 */
class Daemon
{
    use SimpleJobTrait;

    /**
     * @var string The full path to the source root
     */
    private $sourceRoot;

    /**
     * @var BreakpointStorageInterface
     */
    private $storage;

    /**
     * Creates a new Daemon instance.
     *
     * @param array $options [optional] {
     *      Configuration options.
     *
     *      @type string $sourceRoot The full path to the source root
     *      @type array $clientOptions The options to instantiate the default
     *            DebuggerClient.
     *      @type array $extSourceContext The source code identifier. **Defaults
     *            to** values autodetected from the environment.
     *      @type string $uniquifier A string when uniquely identifies this
     *            debuggee. **Defaults to** a value autodetected from the
     *            environment.
     *      @type string $description A display name for the debuggee in the
     *            Stackdriver Debugger UI. **Defaults to** the uniquifier.
     *      @type BreakpointStorageInterface $storage The breakpoint storage
     *            mechanism to use. **Defaults to** a new SysvBreakpointStorage
     *            instance.
     * }
     */
    public function __construct(array $options = [])
    {
        $options += [
            'clientOptions' => [],
            'sourceRoot' => '.',
            'debuggee' => null
        ];
        $this->clientOptions = $options['clientOptions'];
        $this->sourceRoot = realpath($options['sourceRoot']);

        $this->extSourceContext = array_key_exists('extSourceContext', $options)
            ? [$options['extSourceContext']]
            : $this->defaultExtSourceContext();

        $this->uniquifier = array_key_exists('uniquifier', $options)
            ? $options['uniquifier']
            : $this->defaultUniquifier();

        $this->description = array_key_exists('description', $options)
            ? $options['description']
            : $this->defaultDescription();

        $this->storage = array_key_exists('storage', $options)
            ? $options['storage']
            : new SysvBreakpointStorage();

        $this->setSimpleJobProperties($options + [
            'identifier' => 'debugger-daemon'
        ]);
    }

    /**
     * Main loop for the daemon. Fetches breakpoints from the DebuggerClient
     * and stores them in shared storage for the application to read. This
     * function runs indefinitely.
     *
     * Example:
     * ```
     * $daemon->run();
     * ```
     */
    public function run(DebuggerClient $client = null)
    {
        $client = $client ?: $this->defaultClient();
        $debuggee = $client->debuggee(null, [
            'uniquifier' => $this->uniquifier,
            'description' => $this->description,
            'extSourceContexts' => $this->extSourceContext
        ]);
        $debuggee->register();

        $resp = $debuggee->breakpointsWithWaitToken();
        $this->setBreakpoints($debuggee, $resp['breakpoints']);

        while (array_key_exists('nextWaitToken', $resp)) {
            try {
                $resp = $debuggee->breakpointsWithWaitToken([
                    'waitToken' => $resp['nextWaitToken']
                ]);
                $this->setBreakpoints($debuggee, $resp['breakpoints']);
            } catch (ConflictException $e) {
                // Ignoring this exception
            }
        }
    }

    private function setBreakpoints(Debuggee $debuggee, $breakpoints)
    {
        $validBreakpoints = [];
        $invalidBreakpoints = [];
        foreach ($breakpoints as $breakpoint) {
            // validate breakpoint condition and/or expressions
            if ($breakpoint->validate()) {
                array_push($validBreakpoints, $breakpoint);
            } else {
                $breakpoint->finalize();
                array_push($invalidBreakpoints, $breakpoint);
            }
        }

        $this->storage->save($debuggee, $validBreakpoints);

        if (!empty($invalidBreakpoints)) {
            $debuggee->updateBreakpointBatch($invalidBreakpoints);
        }
    }

    private function defaultUniquifier()
    {
        $dir = new \RecursiveDirectoryIterator($this->sourceRoot);
        $iterator = new \RecursiveIteratorIterator($dir);
        $regex = new \RegexIterator(
            $iterator,
            '/^.+\.php$/i',
            \RecursiveRegexIterator::GET_MATCH
        );

        $files = array_keys(iterator_to_array($regex));
        return sha1(implode(':', array_map(function ($filename) {
            $relativeFilename = str_replace($this->sourceRoot, '', $filename);
            return $relativeFilename . ':' . filesize($filename);
        }, $files)));
    }

    private function defaultDescription()
    {
        if (isset($_SERVER['GAE_SERVICE'])) {
            return $_SERVER['GAE_SERVICE'] . ' - ' . $_SERVER['GAE_VERSION'];
        }
        return gethostname() . ' - ' . getcwd();
    }

    private function defaultExtSourceContext()
    {
        $sourceContextFile = $this->sourceRoot . '/source-contexts.json';
        if (file_exists($sourceContextFile)) {
            return json_decode(file_get_contents($sourceContextFile), true);
        } else {
            return [];
        }
    }

    private function defaultClient()
    {
        return new DebuggerClient($this->clientOptions);
    }
}
