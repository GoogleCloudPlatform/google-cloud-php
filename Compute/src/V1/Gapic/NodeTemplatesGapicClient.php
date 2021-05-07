<?php
/*
 * Copyright 2021 Google LLC
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
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/compute/v1/compute.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Compute\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;

use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Compute\V1\AggregatedListNodeTemplatesRequest;
use Google\Cloud\Compute\V1\DeleteNodeTemplateRequest;
use Google\Cloud\Compute\V1\GetIamPolicyNodeTemplateRequest;
use Google\Cloud\Compute\V1\GetNodeTemplateRequest;
use Google\Cloud\Compute\V1\InsertNodeTemplateRequest;
use Google\Cloud\Compute\V1\ListNodeTemplatesRequest;
use Google\Cloud\Compute\V1\NodeTemplate;
use Google\Cloud\Compute\V1\NodeTemplateAggregatedList;
use Google\Cloud\Compute\V1\NodeTemplateList;
use Google\Cloud\Compute\V1\Operation;
use Google\Cloud\Compute\V1\Policy;
use Google\Cloud\Compute\V1\RegionSetPolicyRequest;
use Google\Cloud\Compute\V1\SetIamPolicyNodeTemplateRequest;
use Google\Cloud\Compute\V1\TestIamPermissionsNodeTemplateRequest;
use Google\Cloud\Compute\V1\TestPermissionsRequest;
use Google\Cloud\Compute\V1\TestPermissionsResponse;

/**
 * Service Description: The NodeTemplates API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $nodeTemplatesClient = new NodeTemplatesClient();
 * try {
 *     $project = 'project';
 *     // Iterate over pages of elements
 *     $pagedResponse = $nodeTemplatesClient->aggregatedList($project);
 *     foreach ($pagedResponse->iteratePages() as $page) {
 *         foreach ($page as $element) {
 *             // doSomethingWith($element);
 *         }
 *     }
 *     // Alternatively:
 *     // Iterate through all elements
 *     $pagedResponse = $nodeTemplatesClient->aggregatedList($project);
 *     foreach ($pagedResponse->iterateAllElements() as $element) {
 *         // doSomethingWith($element);
 *     }
 * } finally {
 *     $nodeTemplatesClient->close();
 * }
 * ```
 */
class NodeTemplatesGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.compute.v1.NodeTemplates';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'compute.googleapis.com';

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
        'https://www.googleapis.com/auth/compute',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/node_templates_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/node_templates_descriptor_config.php',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/node_templates_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Implements GapicClientTrait::defaultTransport.
     */
    private static function defaultTransport()
    {
        return 'rest';
    }

    /**
     * Implements GapicClientTrait::getSupportedTransports.
     */
    private static function getSupportedTransports()
    {
        return [
            'rest',
        ];
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
     *           as "<uri>:<port>". Default 'compute.googleapis.com:443'.
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
     *           The transport used for executing network requests. At the moment, supports only
     *           `rest`. *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $serviceAddress setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\RestTransport::build()} method for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Retrieves an aggregated list of node templates.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $project = 'project';
     *     // Iterate over pages of elements
     *     $pagedResponse = $nodeTemplatesClient->aggregatedList($project);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $nodeTemplatesClient->aggregatedList($project);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           A filter expression that filters resources listed in the response. The expression must specify the field name, a comparison operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The comparison operator must be either `=`, `!=`, `>`, or `<`.
     *
     *           For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`.
     *
     *           You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels.
     *
     *           To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ```
     *     @type bool $includeAllScopes
     *           Indicates whether every visible scope for each scope type (zone, region, global) should be included in the response. For new resource types added after this field, the flag has no effect as new resource types will always include every visible scope for each scope type in response. For resource types which predate this field, if this flag is omitted or false, only scopes of the scope types where the resource type is expected to be found will be included.
     *     @type int $maxResults
     *           The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $orderBy
     *           Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name.
     *
     *           You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first.
     *
     *           Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type bool $returnPartialSuccess
     *           Opt-in for partial success behavior which provides partial results in case of failure. The default value is false and the logic is the same as today.
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
     */
    public function aggregatedList($project, array $optionalArgs = [])
    {
        $request = new AggregatedListNodeTemplatesRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $requestParamHeaders['project'] = $project;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['includeAllScopes'])) {
            $request->setIncludeAllScopes($optionalArgs['includeAllScopes']);
        }

        if (isset($optionalArgs['maxResults'])) {
            $request->setMaxResults($optionalArgs['maxResults']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['returnPartialSuccess'])) {
            $request->setReturnPartialSuccess($optionalArgs['returnPartialSuccess']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('AggregatedList', $optionalArgs, NodeTemplateAggregatedList::class, $request);
    }

    /**
     * Deletes the specified NodeTemplate resource.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $nodeTemplate = 'node_template';
     *     $project = 'project';
     *     $region = 'region';
     *     $response = $nodeTemplatesClient->delete($nodeTemplate, $project, $region);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string $nodeTemplate Name of the NodeTemplate resource to delete.
     * @param string $project      Project ID for this request.
     * @param string $region       The name of the region for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $requestId
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     */
    public function delete($nodeTemplate, $project, $region, array $optionalArgs = [])
    {
        $request = new DeleteNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setNodeTemplate($nodeTemplate);
        $request->setProject($project);
        $request->setRegion($region);
        $requestParamHeaders['project'] = $nodeTemplate;
        $requestParamHeaders['region'] = $project;
        $requestParamHeaders['node_template'] = $region;
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Delete', Operation::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns the specified node template. Gets a list of available node templates by making a list() request.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $nodeTemplate = 'node_template';
     *     $project = 'project';
     *     $region = 'region';
     *     $response = $nodeTemplatesClient->get($nodeTemplate, $project, $region);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string $nodeTemplate Name of the node template to return.
     * @param string $project      Project ID for this request.
     * @param string $region       The name of the region for this request.
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
     * @return \Google\Cloud\Compute\V1\NodeTemplate
     *
     * @throws ApiException if the remote call fails
     */
    public function get($nodeTemplate, $project, $region, array $optionalArgs = [])
    {
        $request = new GetNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setNodeTemplate($nodeTemplate);
        $request->setProject($project);
        $request->setRegion($region);
        $requestParamHeaders['project'] = $nodeTemplate;
        $requestParamHeaders['region'] = $project;
        $requestParamHeaders['node_template'] = $region;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Get', NodeTemplate::class, $optionalArgs, $request)->wait();
    }

    /**
     * Gets the access control policy for a resource. May be empty if no such policy or resource exists.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $project = 'project';
     *     $region = 'region';
     *     $resource = 'resource';
     *     $response = $nodeTemplatesClient->getIamPolicy($project, $region, $resource);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $region       The name of the region for this request.
     * @param string $resource     Name or id of the resource for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type int $optionsRequestedPolicyVersion
     *           Requested IAM Policy version.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($project, $region, $resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $request->setRegion($region);
        $request->setResource($resource);
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['region'] = $region;
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['optionsRequestedPolicyVersion'])) {
            $request->setOptionsRequestedPolicyVersion($optionalArgs['optionsRequestedPolicyVersion']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('GetIamPolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Creates a NodeTemplate resource in the specified project using the data included in the request.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $nodeTemplateResource = new NodeTemplate();
     *     $project = 'project';
     *     $region = 'region';
     *     $response = $nodeTemplatesClient->insert($nodeTemplateResource, $project, $region);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param NodeTemplate $nodeTemplateResource The body resource for this request
     * @param string       $project              Project ID for this request.
     * @param string       $region               The name of the region for this request.
     * @param array        $optionalArgs         {
     *     Optional.
     *
     *     @type string $requestId
     *           An optional request ID to identify requests. Specify a unique request ID so that if you must retry your request, the server will know to ignore the request if it has already been completed.
     *
     *           For example, consider a situation where you make an initial request and the request times out. If you make the request again with the same request ID, the server can check if original operation with the same request ID was received, and if so, will ignore the second request. This prevents clients from accidentally creating duplicate commitments.
     *
     *           The request ID must be a valid UUID with the exception that zero UUID is not supported (00000000-0000-0000-0000-000000000000).
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Operation
     *
     * @throws ApiException if the remote call fails
     */
    public function insert($nodeTemplateResource, $project, $region, array $optionalArgs = [])
    {
        $request = new InsertNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setNodeTemplateResource($nodeTemplateResource);
        $request->setProject($project);
        $request->setRegion($region);
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['region'] = $region;
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('Insert', Operation::class, $optionalArgs, $request)->wait();
    }

    /**
     * Retrieves a list of node templates available to the specified project.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $project = 'project';
     *     $region = 'region';
     *     // Iterate over pages of elements
     *     $pagedResponse = $nodeTemplatesClient->list($project, $region);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $nodeTemplatesClient->list($project, $region);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string $project      Project ID for this request.
     * @param string $region       The name of the region for this request.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $filter
     *           A filter expression that filters resources listed in the response. The expression must specify the field name, a comparison operator, and the value that you want to use for filtering. The value must be a string, a number, or a boolean. The comparison operator must be either `=`, `!=`, `>`, or `<`.
     *
     *           For example, if you are filtering Compute Engine instances, you can exclude instances named `example-instance` by specifying `name != example-instance`.
     *
     *           You can also filter nested fields. For example, you could specify `scheduling.automaticRestart = false` to include instances only if they are not scheduled for automatic restarts. You can use filtering on nested fields to filter based on resource labels.
     *
     *           To filter on multiple expressions, provide each separate expression within parentheses. For example: ``` (scheduling.automaticRestart = true) (cpuPlatform = "Intel Skylake") ``` By default, each expression is an `AND` expression. However, you can include `AND` and `OR` expressions explicitly. For example: ``` (cpuPlatform = "Intel Skylake") OR (cpuPlatform = "Intel Broadwell") AND (scheduling.automaticRestart = true) ```
     *     @type int $maxResults
     *           The maximum number of results per page that should be returned. If the number of available results is larger than `maxResults`, Compute Engine returns a `nextPageToken` that can be used to get the next page of results in subsequent list requests. Acceptable values are `0` to `500`, inclusive. (Default: `500`)
     *     @type string $orderBy
     *           Sorts list results by a certain order. By default, results are returned in alphanumerical order based on the resource name.
     *
     *           You can also sort results in descending order based on the creation timestamp using `orderBy="creationTimestamp desc"`. This sorts results based on the `creationTimestamp` field in reverse chronological order (newest result first). Use this to sort resources like operations so that the newest operation is returned first.
     *
     *           Currently, only sorting by `name` or `creationTimestamp desc` is supported.
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
     *     @type bool $returnPartialSuccess
     *           Opt-in for partial success behavior which provides partial results in case of failure. The default value is false and the logic is the same as today.
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
     */
    public function list_($project, $region, array $optionalArgs = [])
    {
        $request = new ListNodeTemplatesRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $request->setRegion($region);
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['region'] = $region;
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        if (isset($optionalArgs['maxResults'])) {
            $request->setMaxResults($optionalArgs['maxResults']);
        }

        if (isset($optionalArgs['orderBy'])) {
            $request->setOrderBy($optionalArgs['orderBy']);
        }

        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        if (isset($optionalArgs['returnPartialSuccess'])) {
            $request->setReturnPartialSuccess($optionalArgs['returnPartialSuccess']);
        }

        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->getPagedListResponse('List', $optionalArgs, NodeTemplateList::class, $request);
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any existing policy.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $project = 'project';
     *     $region = 'region';
     *     $regionSetPolicyRequestResource = new RegionSetPolicyRequest();
     *     $resource = 'resource';
     *     $response = $nodeTemplatesClient->setIamPolicy($project, $region, $regionSetPolicyRequestResource, $resource);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string                 $project                        Project ID for this request.
     * @param string                 $region                         The name of the region for this request.
     * @param RegionSetPolicyRequest $regionSetPolicyRequestResource The body resource for this request
     * @param string                 $resource                       Name or id of the resource for this request.
     * @param array                  $optionalArgs                   {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($project, $region, $regionSetPolicyRequestResource, $resource, array $optionalArgs = [])
    {
        $request = new SetIamPolicyNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $request->setRegion($region);
        $request->setRegionSetPolicyRequestResource($regionSetPolicyRequestResource);
        $request->setResource($resource);
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['region'] = $region;
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('SetIamPolicy', Policy::class, $optionalArgs, $request)->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     *
     * Sample code:
     * ```
     * $nodeTemplatesClient = new NodeTemplatesClient();
     * try {
     *     $project = 'project';
     *     $region = 'region';
     *     $resource = 'resource';
     *     $testPermissionsRequestResource = new TestPermissionsRequest();
     *     $response = $nodeTemplatesClient->testIamPermissions($project, $region, $resource, $testPermissionsRequestResource);
     * } finally {
     *     $nodeTemplatesClient->close();
     * }
     * ```
     *
     * @param string                 $project                        Project ID for this request.
     * @param string                 $region                         The name of the region for this request.
     * @param string                 $resource                       Name or id of the resource for this request.
     * @param TestPermissionsRequest $testPermissionsRequestResource The body resource for this request
     * @param array                  $optionalArgs                   {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Compute\V1\TestPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions($project, $region, $resource, $testPermissionsRequestResource, array $optionalArgs = [])
    {
        $request = new TestIamPermissionsNodeTemplateRequest();
        $requestParamHeaders = [];
        $request->setProject($project);
        $request->setRegion($region);
        $request->setResource($resource);
        $request->setTestPermissionsRequestResource($testPermissionsRequestResource);
        $requestParamHeaders['project'] = $project;
        $requestParamHeaders['region'] = $region;
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor($requestParamHeaders);
        $optionalArgs['headers'] = isset($optionalArgs['headers']) ? array_merge($requestParams->getHeader(), $optionalArgs['headers']) : $requestParams->getHeader();
        return $this->startCall('TestIamPermissions', TestPermissionsResponse::class, $optionalArgs, $request)->wait();
    }
}
