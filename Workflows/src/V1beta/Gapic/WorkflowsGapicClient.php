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
 * https://github.com/google/googleapis/blob/master/google/cloud/workflows/v1beta/workflows.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Workflows\V1beta\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\LongRunning\OperationsClient;
use Google\ApiCore\OperationResponse;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Workflows\V1beta\CreateWorkflowRequest;
use Google\Cloud\Workflows\V1beta\DeleteWorkflowRequest;
use Google\Cloud\Workflows\V1beta\GetWorkflowRequest;
use Google\Cloud\Workflows\V1beta\ListWorkflowsRequest;
use Google\Cloud\Workflows\V1beta\ListWorkflowsResponse;
use Google\Cloud\Workflows\V1beta\UpdateWorkflowRequest;
use Google\Cloud\Workflows\V1beta\Workflow;
use Google\LongRunning\Operation;
use Google\Protobuf\FieldMask;

/**
 * Service Description: Workflows is used to deploy and execute workflow programs.
 * Workflows makes sure the program executes reliably, despite hardware and
 * networking interruptions.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $workflowsClient = new WorkflowsClient();
 * try {
 *     $formattedParent = $workflowsClient->locationName('[PROJECT]', '[LOCATION]');
 *     // Iterate over pages of elements
 *     $pagedResponse = $workflowsClient->listWorkflows($formattedParent);
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
 *     $pagedResponse = $workflowsClient->listWorkflows($formattedParent);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $workflowsClient->close();
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
class WorkflowsGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.workflows.v1beta.Workflows';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'workflows.googleapis.com';

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
    private static $locationNameTemplate;
    private static $workflowNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/workflows_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/workflows_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/workflows_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/workflows_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getLocationNameTemplate()
    {
        if (null == self::$locationNameTemplate) {
            self::$locationNameTemplate = new PathTemplate('projects/{project}/locations/{location}');
        }

        return self::$locationNameTemplate;
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
                'location' => self::getLocationNameTemplate(),
                'workflow' => self::getWorkflowNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a location resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     * @experimental
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
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
     * - location: projects/{project}/locations/{location}
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
     * Return an OperationsClient object with the same endpoint as $this.
     *
     * @return OperationsClient
     * @experimental
     */
    public function getOperationsClient()
    {
        return $this->operationsClient;
    }

    /**
     * Resume an existing long running operation that was previously started
     * by a long running API method. If $methodName is not provided, or does
     * not match a long running API method, then the operation can still be
     * resumed, but the OperationResponse object will not deserialize the
     * final response.
     *
     * @param string $operationName The name of the long running operation
     * @param string $methodName    The name of the method used to start the operation
     *
     * @return OperationResponse
     * @experimental
     */
    public function resumeOperation($operationName, $methodName = null)
    {
        $options = isset($this->descriptors[$methodName]['longRunning'])
            ? $this->descriptors[$methodName]['longRunning']
            : [];
        $operation = new OperationResponse($operationName, $this->getOperationsClient(), $options);
        $operation->reload();

        return $operation;
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
     *           as "<uri>:<port>". Default 'workflows.googleapis.com:443'.
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
        $this->operationsClient = $this->createOperationsClient($clientOptions);
    }

    /**
     * Lists Workflows in a given project and location.
     * The default order is not specified.
     *
     * Sample code:
     * ```
     * $workflowsClient = new WorkflowsClient();
     * try {
     *     $formattedParent = $workflowsClient->locationName('[PROJECT]', '[LOCATION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $workflowsClient->listWorkflows($formattedParent);
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
     *     $pagedResponse = $workflowsClient->listWorkflows($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $workflowsClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Project and location from which the workflows should be listed.
     *                             Format: projects/{project}/locations/{location}
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
     *     @type string $filter
     *          Filter to restrict results to specific workflows.
     *     @type string $orderBy
     *          Comma-separated list of fields that that specify the order of the results.
     *          Default sorting order for a field is ascending. To specify descending order
     *          for a field, append a " desc" suffix.
     *          If not specified, the results will be returned in an unspecified order.
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
    public function listWorkflows($parent, array $optionalArgs = [])
    {
        $request = new ListWorkflowsRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }
        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListWorkflows',
            $optionalArgs,
            ListWorkflowsResponse::class,
            $request
        );
    }

    /**
     * Gets details of a single Workflow.
     *
     * Sample code:
     * ```
     * $workflowsClient = new WorkflowsClient();
     * try {
     *     $formattedName = $workflowsClient->workflowName('[PROJECT]', '[LOCATION]', '[WORKFLOW]');
     *     $response = $workflowsClient->getWorkflow($formattedName);
     * } finally {
     *     $workflowsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the workflow which information should be retrieved.
     *                             Format: projects/{project}/locations/{location}/workflows/{workflow}
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
     * @return \Google\Cloud\Workflows\V1beta\Workflow
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getWorkflow($name, array $optionalArgs = [])
    {
        $request = new GetWorkflowRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetWorkflow',
            Workflow::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Creates a new workflow. If a workflow with the specified name already
     * exists in the specified project and location, the long running operation
     * will return [ALREADY_EXISTS][google.rpc.Code.ALREADY_EXISTS] error.
     *
     * Sample code:
     * ```
     * $workflowsClient = new WorkflowsClient();
     * try {
     *     $formattedParent = $workflowsClient->locationName('[PROJECT]', '[LOCATION]');
     *     $workflow = new Workflow();
     *     $workflowId = '';
     *     $operationResponse = $workflowsClient->createWorkflow($formattedParent, $workflow, $workflowId);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $workflowsClient->createWorkflow($formattedParent, $workflow, $workflowId);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workflowsClient->resumeOperation($operationName, 'createWorkflow');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $workflowsClient->close();
     * }
     * ```
     *
     * @param string   $parent     Required. Project and location in which the workflow should be created.
     *                             Format:  projects/{project}/locations/{location}
     * @param Workflow $workflow   Required. Workflow to be created.
     * @param string   $workflowId Required. The ID of the workflow to be created. It has to fulfill the
     *                             following requirements:
     *
     * * Must contain only letters, numbers, underscores and hyphens.
     * * Must start with a letter.
     * * Must be between 1-64 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the customer project and location.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createWorkflow($parent, $workflow, $workflowId, array $optionalArgs = [])
    {
        $request = new CreateWorkflowRequest();
        $request->setParent($parent);
        $request->setWorkflow($workflow);
        $request->setWorkflowId($workflowId);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'CreateWorkflow',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Deletes a workflow with the specified name.
     * This method also cancels and deletes all running executions of the
     * workflow.
     *
     * Sample code:
     * ```
     * $workflowsClient = new WorkflowsClient();
     * try {
     *     $formattedName = $workflowsClient->workflowName('[PROJECT]', '[LOCATION]', '[WORKFLOW]');
     *     $operationResponse = $workflowsClient->deleteWorkflow($formattedName);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         // operation succeeded and returns no value
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $workflowsClient->deleteWorkflow($formattedName);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workflowsClient->resumeOperation($operationName, 'deleteWorkflow');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       // operation succeeded and returns no value
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $workflowsClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the workflow to be deleted.
     *                             Format: projects/{project}/locations/{location}/workflows/{workflow}
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
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteWorkflow($name, array $optionalArgs = [])
    {
        $request = new DeleteWorkflowRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'DeleteWorkflow',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Updates an existing workflow.
     * Running this method has no impact on already running executions of the
     * workflow. A new revision of the workflow may be created as a result of a
     * successful update operation. In that case, such revision will be used
     * in new workflow executions.
     *
     * Sample code:
     * ```
     * $workflowsClient = new WorkflowsClient();
     * try {
     *     $workflow = new Workflow();
     *     $operationResponse = $workflowsClient->updateWorkflow($workflow);
     *     $operationResponse->pollUntilComplete();
     *     if ($operationResponse->operationSucceeded()) {
     *         $result = $operationResponse->getResult();
     *         // doSomethingWith($result)
     *     } else {
     *         $error = $operationResponse->getError();
     *         // handleError($error)
     *     }
     *
     *
     *     // Alternatively:
     *
     *     // start the operation, keep the operation name, and resume later
     *     $operationResponse = $workflowsClient->updateWorkflow($workflow);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $workflowsClient->resumeOperation($operationName, 'updateWorkflow');
     *     while (!$newOperationResponse->isDone()) {
     *         // ... do other work
     *         $newOperationResponse->reload();
     *     }
     *     if ($newOperationResponse->operationSucceeded()) {
     *       $result = $newOperationResponse->getResult();
     *       // doSomethingWith($result)
     *     } else {
     *       $error = $newOperationResponse->getError();
     *       // handleError($error)
     *     }
     * } finally {
     *     $workflowsClient->close();
     * }
     * ```
     *
     * @param Workflow $workflow     Required. Workflow to be updated.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type FieldMask $updateMask
     *          List of fields to be updated. If not present, the entire workflow
     *          will be updated.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\ApiCore\OperationResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function updateWorkflow($workflow, array $optionalArgs = [])
    {
        $request = new UpdateWorkflowRequest();
        $request->setWorkflow($workflow);
        if (isset($optionalArgs['updateMask'])) {
            $request->setUpdateMask($optionalArgs['updateMask']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'workflow.name' => $request->getWorkflow()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'UpdateWorkflow',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }
}
