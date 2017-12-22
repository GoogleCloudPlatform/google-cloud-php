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

use Google\Cloud\Core\Iterator\ItemIterator;
use Google\Cloud\Core\Iterator\PageIterator;
use Google\Cloud\Debugger\Connection\ConnectionInterface;

/**
 * This class represents a debuggee - a service that can handle breakpoints.
 *
 * Example:
 * ```
 * use Google\Cloud\Debugger\DebuggerClient;
 *
 * $client = new DebuggerClient();
 * $debuggee = $client->debuggee('debuggeeid');
 * ```
 *
 * @see https://cloud.google.com/debugger/api/reference/rest/v2/Debuggee Debuggee API Documentation
 */
class Debuggee implements \JsonSerializable
{
    /**
     * @var ConnectionInterface $connection Represents a connection to Debugger
     */
    private $connection;

    /**
     * @var string The unique identifier for this Debuggee
     */
    private $id;

    /**
     * @var string Project the debuggee is associated with. Use the project
     *      number when registering a Google Cloud Platform project.
     */
    private $project;

    /**
     * @var string Debuggee uniquifier within the project. Any string that
     *      identifies the application within the project can be used. Including
     *      environment and version or build IDs is recommended.
     */
    private $uniquifier;

    /**
     * @var string Human readable description of the debuggee. Including a
     *      human-readable project name, environment name and version
     *      information is recommended.
     */
    private $description;

    /**
     * @var bool If set to true, indicates that the debuggee is considered as
     *      inactive by the Controller service.
     */
    private $isInactive = false;

    /**
     * @var string Version ID of the agent release. The version ID is structured
     *      as following: domain/type/vmajor.minor (for example
     *      google.com/gcp-java/v1.1).
     */
    private $agentVersion;

    /**
     * @var ExtendedSourceContext[] References to the locations and revisions of
     *      the source code used in the deployed application. Contexts
     *      describing a remote repo related to the source code have a category
     *      label of remote_repo. Source snapshot source contexts have a
     *      category of snapshot.
     */
    private $extSourceContexts = [];

    /**
     * @var array A set of custom debuggee properties, populated by the agent,
     *      to be displayed to the user.
     */
    private $labels = [];

    /**
     * Instantiate a new Debuggee.
     *
     * @param ConnectionInterface $connection
     * @param array $info [optional] {
     *      Configuration options.
     *
     *      @type string $id Unique identifier for the debuggee generated by the
     *            controller service.
     *      @type string $project Project the debuggee is associated with. Use
     *            the project number when registering a Google Cloud Platform
     *            project.
     *      @type string $uniquifier Debuggee uniquifier within the project. Any
     *            string that identifies the application within the project can
     *            be used. Including environment and version or build IDs is
     *            recommended.
     *      @type string $description Human readable description of the
     *            debuggee. Including a human-readable project name, environment
     *            name and version information is recommended.
     *      @type string $isInactive If set to true, indicates that the debuggee
     *            is considered as inactive by the Controller service.
     *      @type string $agentVersion Version ID of the agent release. The
     *            version ID is structured as following:
     *            domain/type/vmajor.minor (for example
     *            google.com/gcp-java/v1.1).
     *      @type string $status Human readable message to be displayed to the
     *            user about this debuggee. Absence of this field indicates no
     *            status. The message can be either informational or an error
     *            status.
     *      @type ExtendedSourceContext[] $extSourceContexts References to the locations and
     *            revisions of the source code used in the deployed application.
     * }
     */
    public function __construct(ConnectionInterface $connection, array $info = [])
    {
        $this->connection = $connection;

        $info += [
            'id' => null,
            'isInactive' => false,
            'agentVersion' => DebuggerClient::DEFAULT_AGENT_VERSION,
            'status' => null,
            'extSourceContexts' => [],
            'uniquifier' => null,
            'description' => null
        ];

        $this->id = $info['id'];
        $this->project = $info['project'];
        $this->uniquifier = $info['uniquifier'];
        $this->description = $info['description'];
        $this->status = $info['status'];
        $this->agentVersion = $info['agentVersion'];
        $this->isInactive = $info['isInactive'];
        $this->extSourceContexts = $info['extSourceContexts'];
    }

    /**
     * Return the debuggee identifier.
     *
     * Example:
     * ```
     * echo $debuggee->id();
     * ```
     *
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * Register this debuggee with the Stackdriver backend.
     *
     * Example:
     * ```
     * $debuggee->register();
     * echo $debuggee->id();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/debugger/api/reference/rest/v2/controller.debuggees/register Debuggee register API documentation.
     * @codingStandardsIgnoreEnd
     *
     * @param array $options
     * @return bool
     */
    public function register(array $options = [])
    {
        $resp = $this->connection->registerDebuggee(['debuggee' => $this] + $options);
        if (array_key_exists('debuggee', $resp)) {
            $this->id = $resp['debuggee']['id'];
            return true;
        }
        return false;
    }

    /**
     * Fetch the list of breakpoints this debugee should try to handle.
     *
     * Example:
     * ```
     * $breakpoints = $debuggee->breakpoints();
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/debugger/api/reference/rest/v2/controller.debuggees.breakpoints/list Breakpoints list API documentation.
     * @codingStandardsIgnoreEnd
     *
     * @param array $options [optional] {
     *      Configuration options.
     *
     *      @type string $waitToken A wait token that, if specified, blocks the
     *            method call until the list of active breakpoints has changed,
     *            or a server selected timeout has expired. The value should be
     *            set from the last returned response.
     *      @type bool $successOnTimeout If set to **true**, returns
     *            **google.rpc.Code.OK** status and sets the **waitExpired**
     *            response field to **true** when the server-selected timeout
     *            has expired (recommended). If set to **false**, returns
     *            **google.rpc.Code.ABORTED** status when the server-selected
     *            timeout has expired (deprecated).
     * }
     * @return Breakpoint[]     *
     */
    public function breakpoints(array $options = [])
    {
        $ret = $this->connection->listBreakpoints(['debuggeeId' => $this->id] + $options);

        if (array_key_exists('breakpoints', $ret)) {
            return array_map(function ($breakpointData) {
                return new Breakpoint($breakpointData);
            }, $ret['breakpoints']);
        }
        return [];
    }

    /**
     * Update the provided, modified breakpoint.
     *
     * Example:
     * ```
     * $debuggee->updateBreakpoint($breakpoint);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/debugger/api/reference/rest/v2/controller.debuggees.breakpoints/update Breakpoint update API documentation.
     * @codingStandardsIgnoreEnd
     *
     * @param Breakpoint $breakpoint The modified breakpoint.
     * @return bool
     */
    public function updateBreakpoint(Breakpoint $breakpoint)
    {
        return $this->connection->updateBreakpoint([
            'debuggeeId' => $this->id,
            'id' => $breakpoint->id(),
            'breakpoint' => $breakpoint
        ]);
    }

    /**
     * Update multiple breakpoints.
     *
     * Example:
     * ```
     * $debuggee->updateBreakpointBatch([$breakpoint1, $breakpoint2]);
     * ```
     *
     * @codingStandardsIgnoreStart
     * @see https://cloud.google.com/debugger/api/reference/rest/v2/controller.debuggees.breakpoints/update Breakpoint update API documentation.
     * @codingStandardsIgnoreEnd
     *
     * @param Breakpoint[] $breakpoints The modified breakpoints.
     */
    public function updateBreakpointBatch(array $breakpoints)
    {
        foreach ($breakpoints as $breakpoint) {
            $this->updateBreakpoint($breakpoint);
        }
    }

    /**
     * Returns a JSON serializable array representation of the debuggee.
     *
     * @access private
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'project' => $this->project,
            'uniquifier' => $this->uniquifier,
            'description' => $this->description,
            'isInactive' => $this->isInactive,
            'agentVersion' => $this->agentVersion,
            'status' => $this->status,
            'sourceContexts' => array_map(function ($esc) {
                return is_array($esc) ? $esc['context'] : $esc->context();
            }, $this->extSourceContexts),
            'extSourceContexts' => $this->extSourceContexts
        ];
    }
}
