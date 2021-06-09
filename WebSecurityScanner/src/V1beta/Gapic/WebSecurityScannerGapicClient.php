<?php
/*
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/websecurityscanner/v1beta/web_security_scanner.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\WebSecurityScanner\V1beta\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\WebSecurityScanner\V1beta\CreateScanConfigRequest;
use Google\Cloud\WebSecurityScanner\V1beta\DeleteScanConfigRequest;
use Google\Cloud\WebSecurityScanner\V1beta\Finding;
use Google\Cloud\WebSecurityScanner\V1beta\GetFindingRequest;
use Google\Cloud\WebSecurityScanner\V1beta\GetScanConfigRequest;
use Google\Cloud\WebSecurityScanner\V1beta\GetScanRunRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListCrawledUrlsRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListCrawledUrlsResponse;
use Google\Cloud\WebSecurityScanner\V1beta\ListFindingsRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListFindingsResponse;
use Google\Cloud\WebSecurityScanner\V1beta\ListFindingTypeStatsRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListFindingTypeStatsResponse;
use Google\Cloud\WebSecurityScanner\V1beta\ListScanConfigsRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListScanConfigsResponse;
use Google\Cloud\WebSecurityScanner\V1beta\ListScanRunsRequest;
use Google\Cloud\WebSecurityScanner\V1beta\ListScanRunsResponse;
use Google\Cloud\WebSecurityScanner\V1beta\ScanConfig;
use Google\Cloud\WebSecurityScanner\V1beta\ScanRun;
use Google\Cloud\WebSecurityScanner\V1beta\StartScanRunRequest;
use Google\Cloud\WebSecurityScanner\V1beta\StopScanRunRequest;
use Google\Cloud\WebSecurityScanner\V1beta\UpdateScanConfigRequest;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Cloud Web Security Scanner Service identifies security vulnerabilities in web
 * applications hosted on Google Cloud Platform. It crawls your application, and
 * attempts to exercise as many user inputs and event handlers as possible.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $webSecurityScannerClient = new WebSecurityScannerClient();
 * try {
 *     $formattedParent = $webSecurityScannerClient->projectName('[PROJECT]');
 *     $scanConfig = new ScanConfig();
 *     $response = $webSecurityScannerClient->createScanConfig($formattedParent, $scanConfig);
 * } finally {
 *     $webSecurityScannerClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assistwith these names, this class includes a format method for each type of
 * name, and additionallya parseName method to extract the individual identifiers
 * contained within formatted namesthat are returned by the API.
 *
 * @experimental
 */
class WebSecurityScannerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.websecurityscanner.v1beta.WebSecurityScanner';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'websecurityscanner.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $findingNameTemplate;

    private static $projectNameTemplate;

    private static $scanConfigNameTemplate;

    private static $scanRunNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/web_security_scanner_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/web_security_scanner_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/web_security_scanner_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/web_security_scanner_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getFindingNameTemplate()
    {
        if (self::$findingNameTemplate == null) {
            self::$findingNameTemplate = new PathTemplate('projects/{project}/scanConfigs/{scan_config}/scanRuns/{scan_run}/findings/{finding}');
        }

        return self::$findingNameTemplate;
    }

    private static function getProjectNameTemplate()
    {
        if (self::$projectNameTemplate == null) {
            self::$projectNameTemplate = new PathTemplate('projects/{project}');
        }

        return self::$projectNameTemplate;
    }

    private static function getScanConfigNameTemplate()
    {
        if (self::$scanConfigNameTemplate == null) {
            self::$scanConfigNameTemplate = new PathTemplate('projects/{project}/scanConfigs/{scan_config}');
        }

        return self::$scanConfigNameTemplate;
    }

    private static function getScanRunNameTemplate()
    {
        if (self::$scanRunNameTemplate == null) {
            self::$scanRunNameTemplate = new PathTemplate('projects/{project}/scanConfigs/{scan_config}/scanRuns/{scan_run}');
        }

        return self::$scanRunNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'finding' => self::getFindingNameTemplate(),
                'project' => self::getProjectNameTemplate(),
                'scanConfig' => self::getScanConfigNameTemplate(),
                'scanRun' => self::getScanRunNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a finding
     * resource.
     *
     * @param string $project
     * @param string $scanConfig
     * @param string $scanRun
     * @param string $finding
     *
     * @return string The formatted finding resource.
     *
     * @experimental
     */
    public static function findingName($project, $scanConfig, $scanRun, $finding)
    {
        return self::getFindingNameTemplate()->render([
            'project' => $project,
            'scan_config' => $scanConfig,
            'scan_run' => $scanRun,
            'finding' => $finding,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     *
     * @experimental
     */
    public static function projectName($project)
    {
        return self::getProjectNameTemplate()->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a scan_config
     * resource.
     *
     * @param string $project
     * @param string $scanConfig
     *
     * @return string The formatted scan_config resource.
     *
     * @experimental
     */
    public static function scanConfigName($project, $scanConfig)
    {
        return self::getScanConfigNameTemplate()->render([
            'project' => $project,
            'scan_config' => $scanConfig,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a scan_run
     * resource.
     *
     * @param string $project
     * @param string $scanConfig
     * @param string $scanRun
     *
     * @return string The formatted scan_run resource.
     *
     * @experimental
     */
    public static function scanRunName($project, $scanConfig, $scanRun)
    {
        return self::getScanRunNameTemplate()->render([
            'project' => $project,
            'scan_config' => $scanConfig,
            'scan_run' => $scanRun,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - finding: projects/{project}/scanConfigs/{scan_config}/scanRuns/{scan_run}/findings/{finding}
     * - project: projects/{project}
     * - scanConfig: projects/{project}/scanConfigs/{scan_config}
     * - scanRun: projects/{project}/scanConfigs/{scan_config}/scanRuns/{scan_run}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     *
     * @experimental
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException("Template name $template does not exist");
            }

            return $templateMap[$template]->match($formattedName);
        }

        foreach ($templateMap as $templateName => $pathTemplate) {
            try {
                return $pathTemplate->match($formattedName);
            } catch (ValidationException $ex) {
                // Swallow the exception to continue trying other path templates
            }
        }

        throw new ValidationException("Input did not match any known format. Input: $formattedName");
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'websecurityscanner.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     *
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new ScanConfig.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->projectName('[PROJECT]');
     *     $scanConfig = new ScanConfig();
     *     $response = $webSecurityScannerClient->createScanConfig($formattedParent, $scanConfig);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string     $parent       Required. The parent resource name where the scan is created, which should be a
     *                                 project resource name in the format 'projects/{projectId}'.
     * @param ScanConfig $scanConfig   Required. The ScanConfig to be created.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function createScanConfig($parent, $scanConfig, array $optionalArgs = [])
    {
        $request = new CreateScanConfigRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setScanConfig($scanConfig);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('CreateScanConfig', ScanConfig::class, $optionalArgs, $request)->wait();
    }

    /**
     * Deletes an existing ScanConfig and its child resources.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->scanConfigName('[PROJECT]', '[SCAN_CONFIG]');
     *     $webSecurityScannerClient->deleteScanConfig($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the ScanConfig to be deleted. The name follows the
     *                             format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function deleteScanConfig($name, array $optionalArgs = [])
    {
        $request = new DeleteScanConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('DeleteScanConfig', GPBEmpty::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a Finding.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->findingName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]', '[FINDING]');
     *     $response = $webSecurityScannerClient->getFinding($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the Finding to be returned. The name follows the
     *                             format of
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}/findings/{findingId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\Finding
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getFinding($name, array $optionalArgs = [])
    {
        $request = new GetFindingRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetFinding', Finding::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a ScanConfig.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->scanConfigName('[PROJECT]', '[SCAN_CONFIG]');
     *     $response = $webSecurityScannerClient->getScanConfig($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the ScanConfig to be returned. The name follows the
     *                             format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getScanConfig($name, array $optionalArgs = [])
    {
        $request = new GetScanConfigRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetScanConfig', ScanConfig::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets a ScanRun.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->scanRunName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]');
     *     $response = $webSecurityScannerClient->getScanRun($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the ScanRun to be returned. The name follows the
     *                             format of
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanRun
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function getScanRun($name, array $optionalArgs = [])
    {
        $request = new GetScanRunRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetScanRun', ScanRun::class, $optionalArgs, $request)->wait();
    }

    /**
     * List CrawledUrls under a given ScanRun.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->scanRunName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $webSecurityScannerClient->listCrawledUrls($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $webSecurityScannerClient->listCrawledUrls($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name, which should be a scan run resource name in the
     *                             format
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listCrawledUrls($parent, array $optionalArgs = [])
    {
        $request = new ListCrawledUrlsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListCrawledUrls', $optionalArgs, ListCrawledUrlsResponse::class, $request);
    }

    /**
     * List all FindingTypeStats under a given ScanRun.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->scanRunName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]');
     *     $response = $webSecurityScannerClient->listFindingTypeStats($formattedParent);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name, which should be a scan run resource name in the
     *                             format
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ListFindingTypeStatsResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listFindingTypeStats($parent, array $optionalArgs = [])
    {
        $request = new ListFindingTypeStatsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('ListFindingTypeStats', ListFindingTypeStatsResponse::class, $optionalArgs, $request)->wait();
    }

    /**
     * List Findings under a given ScanRun.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->scanRunName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]');
     *     $filter = 'filter';
     *     // Iterate over pages of elements
     *     $pagedResponse = $webSecurityScannerClient->listFindings($formattedParent, $filter);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $webSecurityScannerClient->listFindings($formattedParent, $filter);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name, which should be a scan run resource name in the
     *                             format
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * @param string $filter       Required. The filter expression. The expression must be in the format: <field>
     *                             <operator> <value>.
     *                             Supported field: 'finding_type'.
     *                             Supported operator: '='.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listFindings($parent, $filter, array $optionalArgs = [])
    {
        $request = new ListFindingsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setFilter($filter);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListFindings', $optionalArgs, ListFindingsResponse::class, $request);
    }

    /**
     * Lists ScanConfigs under a given project.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->projectName('[PROJECT]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $webSecurityScannerClient->listScanConfigs($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $webSecurityScannerClient->listScanConfigs($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name, which should be a project resource name in the
     *                             format 'projects/{projectId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listScanConfigs($parent, array $optionalArgs = [])
    {
        $request = new ListScanConfigsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListScanConfigs', $optionalArgs, ListScanConfigsResponse::class, $request);
    }

    /**
     * Lists ScanRuns under a given ScanConfig, in descending order of ScanRun
     * stop time.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedParent = $webSecurityScannerClient->scanConfigName('[PROJECT]', '[SCAN_CONFIG]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $webSecurityScannerClient->listScanRuns($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $webSecurityScannerClient->listScanRuns($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent resource name, which should be a scan resource name in the
     *                             format 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type int $pageSize
     *           The maximum number of resources contained in the underlying API
     *           response. The API may return fewer values in a page, even if
     *           there are additional values to be retrieved.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function listScanRuns($parent, array $optionalArgs = [])
    {
        $request = new ListScanRunsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('ListScanRuns', $optionalArgs, ListScanRunsResponse::class, $request);
    }

    /**
     * Start a ScanRun according to the given ScanConfig.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->scanConfigName('[PROJECT]', '[SCAN_CONFIG]');
     *     $response = $webSecurityScannerClient->startScanRun($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the ScanConfig to be used. The name follows the
     *                             format of 'projects/{projectId}/scanConfigs/{scanConfigId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanRun
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function startScanRun($name, array $optionalArgs = [])
    {
        $request = new StartScanRunRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('StartScanRun', ScanRun::class, $optionalArgs, $request)->wait();
    }

    /**
     * Stops a ScanRun. The stopped ScanRun is returned.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $formattedName = $webSecurityScannerClient->scanRunName('[PROJECT]', '[SCAN_CONFIG]', '[SCAN_RUN]');
     *     $response = $webSecurityScannerClient->stopScanRun($formattedName);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The resource name of the ScanRun to be stopped. The name follows the
     *                             format of
     *                             'projects/{projectId}/scanConfigs/{scanConfigId}/scanRuns/{scanRunId}'.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanRun
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function stopScanRun($name, array $optionalArgs = [])
    {
        $request = new StopScanRunRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('StopScanRun', ScanRun::class, $optionalArgs, $request)->wait();
    }

    /**
     * Updates a ScanConfig. This method support partial update of a ScanConfig.
     *
     * Sample code:
     * ```
     * $webSecurityScannerClient = new WebSecurityScannerClient();
     * try {
     *     $scanConfig = new ScanConfig();
     *     $updateMask = new FieldMask();
     *     $response = $webSecurityScannerClient->updateScanConfig($scanConfig, $updateMask);
     * } finally {
     *     $webSecurityScannerClient->close();
     * }
     * ```
     *
     * @param ScanConfig $scanConfig   Required. The ScanConfig to be updated. The name field must be set to identify the
     *                                 resource to be updated. The values of fields not covered by the mask
     *                                 will be ignored.
     * @param FieldMask  $updateMask   Required. The update mask applies to the resource. For the `FieldMask` definition,
     *                                 see
     *                                 https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig
     *
     * @throws ApiException if the remote call fails
     *
     * @experimental
     */
    public function updateScanConfig($scanConfig, $updateMask, array $optionalArgs = [])
    {
        $request = new UpdateScanConfigRequest();
        $requestParamHeaders = [];
        $request->setScanConfig($scanConfig);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['scan_config.name'] = $scanConfig->getName();
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('UpdateScanConfig', ScanConfig::class, $optionalArgs, $request)->wait();
    }
}
