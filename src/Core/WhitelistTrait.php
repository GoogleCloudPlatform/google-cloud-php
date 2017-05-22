<?php
/**
 * Copyright 2017 Google Inc.
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

namespace Google\Cloud\Core;

use Google\Cloud\Core\Exception\NotFoundException;

/**
 * Manages exceptions for requests which may have whitelist restrictions.
 */
trait WhitelistTrait
{
    /**
     * Check if the error is due to a whitelist restriction, modify the message
     * and throw the updated exception, otherwise pass through with no changes.
     *
     * @param array $callable The request callable.
     * @param array $args Request arguments.
     * @return array
     * @throws NotFoundException
     * @throws ServiceException
     */
    private function whitelist(callable $callable, array $args)
    {
        try {
            return call_user_func_array($callable, $args);
        } catch (NotFoundException $e) {
            $e->setMessage('NOTE: Error may be due to Whitelist Restriction. ' . $e->getMessage());

            throw $e;
        }
    }
}
