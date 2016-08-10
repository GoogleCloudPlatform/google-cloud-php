<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
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

namespace Google\Cloud;

/**
 * Exponential backoff implementation.
 */
class ExponentialBackoff
{
    const MAX_DELAY_MICROSECONDS = 60000000;

    /**
     * @var int
     */
    private $retries;

    /**
     * @var callable
     */
    private $delayFunction;

    /**
     * @param int $retries Number of retries for a failed request.
     */
    public function __construct($retries = null)
    {
        $this->retries = $retries !== null ? (int) $retries : 3;
        // @todo revisit this approach
        // @codeCoverageIgnoreStart
        $this->delayFunction = function ($delay) {
            usleep($delay);
        };
        // @codeCoverageIgnoreEnd
    }

    /**
     * Executes the retry process.
     *
     * @param callable $function
     * @param array $arguments
     * @param callable $retryFunction
     * @return mixed
     * @throws \Exception The last exception caught while retrying.
     */
    public function execute(callable $function, array $arguments = [], $retryFunction = null)
    {
        $delayFunction = $this->delayFunction;
        $retryAttempt = 0;
        $exception = null;

        do {
            try {
                return call_user_func_array($function, $arguments);
            } catch (\Exception $exception) {
                if ($retryFunction && !call_user_func($retryFunction, $exception)) {
                    throw $exception;
                }

                $delayFunction($this->calculateDelay($retryAttempt));
                $retryAttempt++;
            }
        } while ($this->retries >= $retryAttempt);

        throw $exception;
    }

    /**
     * @param callable $delayFunction
     * @return void
     */
    public function setDelayFunction(callable $delayFunction)
    {
        $this->delayFunction = $delayFunction;
    }

    /**
     * Calculates exponential delay.
     *
     * @param int $attempt
     * @return int
     */
    private function calculateDelay($attempt)
    {
        return min(
            mt_rand(0, 1000000) + (pow(2, $attempt) * 1000000),
            self::MAX_DELAY_MICROSECONDS
        );
    }
}
