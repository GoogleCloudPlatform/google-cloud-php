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

namespace Google\Cloud\Logging;

use Google\Cloud\Core\Batch\BatchRunner;
use Google\Cloud\Core\Report\MetadataProviderInterface;
use Google\Cloud\Core\Report\MetadataProviderUtils;
use Monolog\Formatter\NormalizerFormatter;
use Monolog\Processor\PsrLogMessageProcessor;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * A PSR-3 compliant logger that writes entries to Google Stackdriver Logging
 * with background batching.
 *
 * Example:
 * ```
 * use Google\Cloud\Logging\LoggingClient;
 *
 * $logging = new LoggingClient();
 *
 * $batchLogger = $logging->batchPsrLogger('app');
 * ```
 * @see http://www.php-fig.org/psr/psr-3/#psrlogloggerinterface Psr\Log\LoggerInterface
 */
class BatchLogger implements LoggerInterface
{
    use PsrLoggerTrait;

    const ID_TEMPLATE = 'stackdriver-logging-%s';
    const MESSAGE_KEY = 'message';

    /** @var array */
    private $batchOptions;

    /** @var array */
    private $clientOptions;

    /** @var string */
    private $logName;

    /** @var MetadataProviderInterface */
    private $metadataProvider;

    /** @var BatchRunner */
    private $batchRunner;

    /** @var string */
    private $identifier;

    /** @var boolean */
    private $debugOutput;

    /** @var string */
    private $messageKey = 'message';

    /**
     * Return a Logger object for the current logName.
     *
     * @return Logger
     */
    private function getLogger()
    {
        static $loggers = [];
        if (! array_key_exists($this->logName, $loggers)) {
            $c = new LoggingClient($this->clientOptions);
            $resource = $this->metadataProvider->getMonitoredResource();
            if (empty($resource)) {
                $loggers[$this->logName] = $c->logger($this->logName);
            } else {
                $loggers[$this->logName] = $c->logger($this->logName, ['resource' => $resource]);
            }
        }
        return $loggers[$this->logName];
    }

    /**
     * @param string $logName The name of the log.
     * @param array $config [optional] {
     *     Configuration options.
     *     @type bool $debugOutput Whether or not to output debug information.
     *           **Defaults to** false
     *     @type array $batchOptions An option to BatchJob.
     *           {@see \Google\Cloud\Core\Batch\BatchJob::__construct()}
     *           **Defaults to** ['batchSize' => 1000,
                                  'callPeriod' => 2.0,
                                  'workerNum' => 10]
     *     @type array $clientOptions An option to LoggingClient
     *           {@see \Google\Cloud\Logging\LoggingClient::__construct()}
     *           **Defaults to** []
     *     @type MetadataProviderInterface $metadataProvider
     *           **Defaults to null** If null, it will be automatically chosen.
     *     @type BatchRunner $batchRunner A BatchRunner object. Mainly used for
     *           the tests to inject a mock. **Defaults to** a newly created
     *           BatchRunner.
     * }
     */
    public function __construct($logName, array $config = [])
    {
        $this->logName = $logName;
        $this->debugOutput = isset($config['debugOutput'])
            ? $config['debugOutput']
            : false;
        $this->identifier = sprintf(self::ID_TEMPLATE, $this->logName);
        $this->metadataProvider = isset($config['metadataProvider'])
            ? $config['metadataProvider']
            : MetadataProviderUtils::autoSelect();
        $this->clientOptions = isset($config['clientOptions'])
            ? $config['clientOptions']
            : [];
        $batchOptions = isset($config['batchOptions'])
            ? $config['batchOptions']
            : [];
        $this->batchOptions = array_merge(
            $batchOptions,
            ['batchSize' => 1000,
             'callPeriod' => 2.0,
             'workerNum' => 10]
        );
        $this->batchRunner = isset($config['batchRunner'])
            ? $config['batchRunner']
            : new BatchRunner();
        $this->batchRunner->registerJob(
            $this->identifier,
            [$this, 'sendEntries'],
            $this->batchOptions
        );
    }

    /**
     * Return the MetadataProvider.
     *
     * @return MetadataProviderInterface
     */
    public function getMetadataProvider()
    {
        return $this->metadataProvider;
    }

    /**
     * Submit the given entry to the BatchRunner.
     */
    private function sendEntry(Entry $entry)
    {
        $this->batchRunner->submitItem($this->identifier, $entry);
    }

    /**
     * Send the given entries.
     *
     * @param array $entries An array of entries to send.
     * @return boolean
     */
    public function sendEntries($entries)
    {
        $start = microtime(true);
        try {
            $this->getLogger()->writeBatch($entries);
        } catch (\Exception $e) {
            fwrite(STDERR, $e->getMessage() . PHP_EOL);
            return false;
        }
        $end = microtime(true);
        if ($this->debugOutput) {
            printf(
                '%f seconds for writeBatch %d entries' . PHP_EOL,
                $end - $start,
                count($entries)
            );
            printf('memory used: %d' . PHP_EOL, memory_get_usage());
        }
        return true;
    }
}
