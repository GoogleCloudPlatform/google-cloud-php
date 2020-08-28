<?php
/**
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Bigtable\Admin;

use Google\Cloud\Bigtable\EmulatorSupportTrait;

/**
 * Wrapper for V2\BigtableTableAdminClient supporting emulator.
 */
class BigtableTableAdminClient extends V2\BigtableTableAdminClient
{
    use EmulatorSupportTrait;

    /**
     * Constructor.
     *
     * @param array $options
     * @throws \Google\ApiCore\ValidationException
     */
    public function __construct(array $options = [])
    {
        $options = $this->setEmulatorOptions($options);
        parent::__construct($options);
    }
}
