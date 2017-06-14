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
 * This class represents a debuggee - a service that can handle breakpoints. For more information see
 * [Debugee](https://cloud.google.com/debugger/api/reference/rest/v2/Debuggee)
 */
class Debuggee
{
    /**
     * @var ConnectionInterface $connection Represents a connection to Debugger
     */
    private $connection;

    private $info;

    public function __construct(ConnectionInterface $connection, array $info = null)
    {
        $this->connection = $connection;
        $this->info = $info;
    }

    public function id()
    {
        if (is_array($this->info) && array_key_exists('id', $this->info)) {
            return $this->info['id'];
        }
        return null;
    }

    public function register()
    {
        $this->connection->registerDebugee($this);
    }

    /**
     * Fetch the list of breakpoints this debugee should try to handle.
     *
     * @param array $options [optional] {
     *      Configuration options.
     *
     *      @type string $waitToken A wait token that, if specified, blocks the method call until the
     *            list of active breakpoints has changed, or a server selected timeout has expired.
     *            The value should be set from the last returned response.
     *      @type bool $successOnTimeout If set to **true**, returns **google.rpc.Code.OK** status and
     *            sets the **waitExpired** response field to **true** when the server-selected timeout
     *            has expired (recommended). If set to **false**, returns **google.rpc.Code.ABORTED**
     *            status when the server-selected timeout has expired (deprecated).
     * }
     * @return Breakpoint[]
     */
    public function breakpoints(array $options = [])
    {
        return $this->connection->listBreakpoints([
            'debuggeeId' => $this->id()
        ]);
    }

    public function updateBreakpoint(Breakpoint $breakpoint)
    {

    }
}
