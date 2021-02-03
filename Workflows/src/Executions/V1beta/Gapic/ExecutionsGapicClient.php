<?php
/*
 * Copyright 2020 Google LLC
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
 * https://github.com/google/googleapis/blob/master/google/cloud/workflows/executions/v1beta/executions.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Workflows\Executions\V1beta\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Workflows\Executions\V1beta\CancelExecutionRequest;
use Google\Cloud\Workflows\Executions\V1beta\CreateExecutionRequest;
use Google\Cloud\Workflows\Executions\V1beta\Execution;
use Google\Cloud\Workflows\Executions\V1beta\GetExecutionRequest;
use Google\Cloud\Workflows\Executions\V1beta\ListExecutionsRequest;
use Google\Cloud\Workflows\Executions\V1beta\ListExecutionsResponse;

/**
 * Service Description: Executions is used to start and manage running instances of
 * [Workflows][google.cloud.workflows.v1beta.Workflow] called executions.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $executionsClient = new ExecutionsClient();
 * try {
 *     $formattedParent = $executionsClient->workflowName('[PROJECT]', '[LOCATION]', '[WORKFLOW]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *
 *
 *     // Alternatively:
 *
 *     // Iterate through all elements
 *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $executionsClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 *
 * @experimental
 */
class ExecutionsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.workflows.executions.v1beta.Executions';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'workflowexecutions.googleapis.com';

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
    private static $executionNameTemplate;
    private static $workflowNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/executions_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/executions_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/executions_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/executions_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getExecutionNameTemplate()
    {
        if (null == self::$executionNameTemplate) {
            self::$executionNameTemplate = new PathTemplate('projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}');
        }

        return self::$executionNameTemplate;
    }

    private static function getWorkflowNameTemplate()
    {
        if (null == self::$workflowNameTemplate) {
            self::$workflowNameTemplate = new PathTemplate('projects/{project}/locations/{location}/workflows/{workflow}');
        }

        return self::$workflowNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'execution' => self::getExecutionNameTemplate(),
                'workflow' => self::getWorkflowNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a execution resource.
     *
     * @param string $project
     * @param string $location
     * @param string $workflow
     * @param string $execution
     *
     * @return string The formatted execution resource.
     * @experimental
     */
    public static function executionName($project, $location, $workflow, $execution)
    {
        return self::getExecutionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'workflow' => $workflow,
            'execution' => $execution,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a workflow resource.
     *
     * @param string $project
     * @param string $location
     * @param string $workflow
     *
     * @return string The formatted workflow resource.
     * @experimental
     */
    public static function workflowName($project, $location, $workflow)
    {
        return self::getWorkflowNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'workflow' => $workflow,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - execution: projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     * - workflow: projects/{project}/locations/{location}/workflows/{workflow}.
     *
     * The optional $template argument can be supplied to specify a particular pattern, and must
     * match one of the templates listed above. If no $template argument is provided, or if the
     * $template argument does not match one of the templates listed, then parseName will check
     * each of the supported templates, and return the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
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
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           **Deprecated**. This option will be removed in a future major release. Please
     *           utilize the `$apiEndpoint` option instead.
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'workflowexecutions.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any `$apiEndpoint`
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Returns a list of executions which belong to the workflow with
     * the given name. The method returns executions of all workflow
     * revisions. Returned executions are ordered by their start time (newest
     * first).
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedParent = $executionsClient->workflowName('[PROJECT]', '[LOCATION]', '[WORKFLOW]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // Iterate through all elements
     *     $pagedResponse = $executionsClient->listExecutions($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Name of the workflow for which the executions should be listed.
     *                             Format: projects/{project}/locations/{location}/workflows/{workflow}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $pageSize
     *          The maximum number of resources contained in the underlying API
     *          response. The API may return fewer values in a page, even if
     *          there are additional values to be retrieved.
     *     @type string $pageToken
     *          A page token is used to specify a page of values to be returned.
     *          If no page token is specified (the default), the first page
     *          of values will be returned. Any page token used here must have
     *          been generated by a previous call to the API.
     *     @type int $view
     *          Optional. A view defining which fields should be filled in the returned executions.
     *          The API will default to the BASIC view.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Workflows\Executions\V1beta\ExecutionView}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\PagedListResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listExecutions($parent, array $optionalArgs = [])
    {
        $request = new ListExecutionsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListExecutions',
            $optionalArgs,
            ListExecutionsResponse::class,
            $request
        );
    }

    /**
     * Creates a new execution using the latest revision of the given workflow.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedParent = $executionsClient->workflowName('[PROJECT]', '[LOCATION]', '[WORKFLOW]');
     *     $execution = new Execution();
     *     $response = $executionsClient->createExecution($formattedParent, $execution);
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. Name of the workflow for which an execution should be created.
     *                                Format: projects/{project}/locations/{location}/workflows/{workflow}
     *                                The latest revision of the workflow will be used.
     * @param Execution $execution    Required. Execution to be created.
     * @param array     $optionalArgs {
     *                                Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Workflows\Executions\V1beta\Execution
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createExecution($parent, $execution, array $optionalArgs = [])
    {
        $request = new CreateExecutionRequest();
        $request->setParent($parent);
        $request->setExecution($execution);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateExecution',
            Execution::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns an execution of the given name.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[WORKFLOW]', '[EXECUTION]');
     *     $response = $executionsClient->getExecution($formattedName);
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the execution to be retrieved.
     *                             Format:
     *                             projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type int $view
     *          Optional. A view defining which fields should be filled in the returned execution.
     *          The API will default to the FULL view.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Workflows\Executions\V1beta\ExecutionView}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Workflows\Executions\V1beta\Execution
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getExecution($name, array $optionalArgs = [])
    {
        $request = new GetExecutionRequest();
        $request->setName($name);
        if (isset($optionalArgs['view'])) {
            $request->setView($optionalArgs['view']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetExecution',
            Execution::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Cancels an execution of the given name.
     *
     * Sample code:
     * ```
     * $executionsClient = new ExecutionsClient();
     * try {
     *     $formattedName = $executionsClient->executionName('[PROJECT]', '[LOCATION]', '[WORKFLOW]', '[EXECUTION]');
     *     $response = $executionsClient->cancelExecution($formattedName);
     * } finally {
     *     $executionsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the execution to be cancelled.
     *                             Format:
     *                             projects/{project}/locations/{location}/workflows/{workflow}/executions/{execution}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Workflows\Executions\V1beta\Execution
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function cancelExecution($name, array $optionalArgs = [])
    {
        $request = new CancelExecutionRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CancelExecution',
            Execution::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
