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
 * Generated by gapic-generator-php from the file
 * https://github.com/google/googleapis/blob/master/google/cloud/bigquery/connection/v1/connection.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\BigQuery\Connection\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;

use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\BigQuery\Connection\V1\Connection;
use Google\Cloud\BigQuery\Connection\V1\CreateConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\DeleteConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\GetConnectionRequest;
use Google\Cloud\BigQuery\Connection\V1\ListConnectionsRequest;
use Google\Cloud\BigQuery\Connection\V1\ListConnectionsResponse;
use Google\Cloud\BigQuery\Connection\V1\UpdateConnectionRequest;
use Google\Cloud\Iam\V1\GetIamPolicyRequest;
use Google\Cloud\Iam\V1\GetPolicyOptions;
use Google\Cloud\Iam\V1\Policy;
use Google\Cloud\Iam\V1\SetIamPolicyRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsRequest;
use Google\Cloud\Iam\V1\TestIamPermissionsResponse;
use Google\Protobuf\FieldMask;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: Manages external data source connections and credentials.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $connectionServiceClient = new ConnectionServiceClient();
 * try {
 *     $formattedParent = $connectionServiceClient->locationName('[PROJECT]', '[LOCATION]');
 *     $connection = new Connection();
 *     $response = $connectionServiceClient->createConnection($formattedParent, $connection);
 * } finally {
 *     $connectionServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 */
class ConnectionServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.bigquery.connection.v1.ConnectionService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'bigqueryconnection.googleapis.com';

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
        'https://www.googleapis.com/auth/bigquery',
        'https://www.googleapis.com/auth/cloud-platform',
    ];

    private static $connectionNameTemplate;

    private static $locationNameTemplate;

    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' =>
                self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' =>
                __DIR__ . '/../resources/connection_service_client_config.json',
            'descriptorsConfigPath' =>
                __DIR__ .
                '/../resources/connection_service_descriptor_config.php',
            'gcpApiConfigPath' =>
                __DIR__ . '/../resources/connection_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' =>
                        __DIR__ .
                        '/../resources/connection_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getConnectionNameTemplate()
    {
        if (self::$connectionNameTemplate == null) {
            self::$connectionNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}/connections/{connection}'
            );
        }

        return self::$connectionNameTemplate;
    }

    private static function getLocationNameTemplate()
    {
        if (self::$locationNameTemplate == null) {
            self::$locationNameTemplate = new PathTemplate(
                'projects/{project}/locations/{location}'
            );
        }

        return self::$locationNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (self::$pathTemplateMap == null) {
            self::$pathTemplateMap = [
                'connection' => self::getConnectionNameTemplate(),
                'location' => self::getLocationNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent a connection
     * resource.
     *
     * @param string $project
     * @param string $location
     * @param string $connection
     *
     * @return string The formatted connection resource.
     */
    public static function connectionName($project, $location, $connection)
    {
        return self::getConnectionNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'connection' => $connection,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a location
     * resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted location resource.
     */
    public static function locationName($project, $location)
    {
        return self::getLocationNameTemplate()->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - connection: projects/{project}/locations/{location}/connections/{connection}
     * - location: projects/{project}/locations/{location}
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
     */
    public static function parseName($formattedName, $template = null)
    {
        $templateMap = self::getPathTemplateMap();
        if ($template) {
            if (!isset($templateMap[$template])) {
                throw new ValidationException(
                    "Template name $template does not exist"
                );
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

        throw new ValidationException(
            "Input did not match any known format. Input: $formattedName"
        );
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
     *           as "<uri>:<port>". Default 'bigqueryconnection.googleapis.com:443'.
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
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates a new connection.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $formattedParent = $connectionServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $connection = new Connection();
     *     $response = $connectionServiceClient->createConnection($formattedParent, $connection);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string     $parent       Required. Parent resource name.
     *                                 Must be in the format `projects/{project_id}/locations/{location_id}`
     * @param Connection $connection   Required. Connection to create.
     * @param array      $optionalArgs {
     *     Optional.
     *
     *     @type string $connectionId
     *           Optional. Connection id that should be assigned to the created connection.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\BigQuery\Connection\V1\Connection
     *
     * @throws ApiException if the remote call fails
     */
    public function createConnection(
        $parent,
        $connection,
        array $optionalArgs = []
    ) {
        $request = new CreateConnectionRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setConnection($connection);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['connectionId'])) {
            $request->setConnectionId($optionalArgs['connectionId']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'CreateConnection',
            Connection::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Deletes connection and associated credential.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $formattedName = $connectionServiceClient->connectionName('[PROJECT]', '[LOCATION]', '[CONNECTION]');
     *     $connectionServiceClient->deleteConnection($formattedName);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the deleted connection, for example:
     *                             `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
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
     */
    public function deleteConnection($name, array $optionalArgs = [])
    {
        $request = new DeleteConnectionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'DeleteConnection',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns specified connection.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $formattedName = $connectionServiceClient->connectionName('[PROJECT]', '[LOCATION]', '[CONNECTION]');
     *     $response = $connectionServiceClient->getConnection($formattedName);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string $name         Required. Name of the requested connection, for example:
     *                             `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
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
     * @return \Google\Cloud\BigQuery\Connection\V1\Connection
     *
     * @throws ApiException if the remote call fails
     */
    public function getConnection($name, array $optionalArgs = [])
    {
        $request = new GetConnectionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetConnection',
            Connection::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets the access control policy for a resource.
     * Returns an empty policy if the resource exists and does not have a policy
     * set.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $response = $connectionServiceClient->getIamPolicy($resource);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being requested.
     *                             See the operation documentation for the appropriate value for this field.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type GetPolicyOptions $options
     *           OPTIONAL: A `GetPolicyOptions` object for specifying options to
     *           `GetIamPolicy`. This field is only used by Cloud IAM.
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function getIamPolicy($resource, array $optionalArgs = [])
    {
        $request = new GetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $requestParamHeaders['resource'] = $resource;
        if (isset($optionalArgs['options'])) {
            $request->setOptions($optionalArgs['options']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'GetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns a list of connections in the given project.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $formattedParent = $connectionServiceClient->locationName('[PROJECT]', '[LOCATION]');
     *     $pageSize = 0;
     *     // Iterate over pages of elements
     *     $pagedResponse = $connectionServiceClient->listConnections($formattedParent, $pageSize);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     *     // Alternatively:
     *     // Iterate through all elements
     *     $pagedResponse = $connectionServiceClient->listConnections($formattedParent, $pageSize);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. Parent resource name.
     *                             Must be in the form: `projects/{project_id}/locations/{location_id}`
     * @param int    $pageSize     The maximum number of resources contained in the underlying API
     *                             response. The API may return fewer values in a page, even if
     *                             there are additional values to be retrieved.
     * @param array  $optionalArgs {
     *     Optional.
     *
     *     @type string $pageToken
     *           A page token is used to specify a page of values to be returned.
     *           If no page token is specified (the default), the first page
     *           of values will be returned. Any page token used here must have
     *           been generated by a previous call to the API.
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
    public function listConnections(
        $parent,
        $pageSize,
        array $optionalArgs = []
    ) {
        $request = new ListConnectionsRequest();
        $requestParamHeaders = [];
        $request->setParent($parent);
        $request->setPageSize($pageSize);
        $requestParamHeaders['parent'] = $parent;
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->getPagedListResponse(
            'ListConnections',
            $optionalArgs,
            ListConnectionsResponse::class,
            $request
        );
    }

    /**
     * Sets the access control policy on the specified resource. Replaces any
     * existing policy.
     *
     * Can return `NOT_FOUND`, `INVALID_ARGUMENT`, and `PERMISSION_DENIED` errors.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $policy = new Policy();
     *     $response = $connectionServiceClient->setIamPolicy($resource, $policy);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string $resource     REQUIRED: The resource for which the policy is being specified.
     *                             See the operation documentation for the appropriate value for this field.
     * @param Policy $policy       REQUIRED: The complete policy to be applied to the `resource`. The size of
     *                             the policy is limited to a few 10s of KB. An empty policy is a
     *                             valid policy but certain Cloud Platform services (such as Projects)
     *                             might reject them.
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
     * @return \Google\Cloud\Iam\V1\Policy
     *
     * @throws ApiException if the remote call fails
     */
    public function setIamPolicy($resource, $policy, array $optionalArgs = [])
    {
        $request = new SetIamPolicyRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPolicy($policy);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'SetIamPolicy',
            Policy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Returns permissions that a caller has on the specified resource.
     * If the resource does not exist, this will return an empty set of
     * permissions, not a `NOT_FOUND` error.
     *
     * Note: This operation is designed to be used for building permission-aware
     * UIs and command-line tools, not for authorization checking. This operation
     * may "fail open" without warning.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $resource = 'resource';
     *     $permissions = [];
     *     $response = $connectionServiceClient->testIamPermissions($resource, $permissions);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string   $resource     REQUIRED: The resource for which the policy detail is being requested.
     *                               See the operation documentation for the appropriate value for this field.
     * @param string[] $permissions  The set of permissions to check for the `resource`. Permissions with
     *                               wildcards (such as '*' or 'storage.*') are not allowed. For more
     *                               information see
     *                               [IAM Overview](https://cloud.google.com/iam/docs/overview#permissions).
     * @param array    $optionalArgs {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a
     *           {@see Google\ApiCore\RetrySettings} object, or an associative array of retry
     *           settings parameters. See the documentation on
     *           {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Iam\V1\TestIamPermissionsResponse
     *
     * @throws ApiException if the remote call fails
     */
    public function testIamPermissions(
        $resource,
        $permissions,
        array $optionalArgs = []
    ) {
        $request = new TestIamPermissionsRequest();
        $requestParamHeaders = [];
        $request->setResource($resource);
        $request->setPermissions($permissions);
        $requestParamHeaders['resource'] = $resource;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'TestIamPermissions',
            TestIamPermissionsResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates the specified connection. For security reasons, also resets
     * credential if connection properties are in the update field mask.
     *
     * Sample code:
     * ```
     * $connectionServiceClient = new ConnectionServiceClient();
     * try {
     *     $formattedName = $connectionServiceClient->connectionName('[PROJECT]', '[LOCATION]', '[CONNECTION]');
     *     $connection = new Connection();
     *     $updateMask = new FieldMask();
     *     $response = $connectionServiceClient->updateConnection($formattedName, $connection, $updateMask);
     * } finally {
     *     $connectionServiceClient->close();
     * }
     * ```
     *
     * @param string     $name         Required. Name of the connection to update, for example:
     *                                 `projects/{project_id}/locations/{location_id}/connections/{connection_id}`
     * @param Connection $connection   Required. Connection containing the updated fields.
     * @param FieldMask  $updateMask   Required. Update mask for the connection fields to be updated.
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
     * @return \Google\Cloud\BigQuery\Connection\V1\Connection
     *
     * @throws ApiException if the remote call fails
     */
    public function updateConnection(
        $name,
        $connection,
        $updateMask,
        array $optionalArgs = []
    ) {
        $request = new UpdateConnectionRequest();
        $requestParamHeaders = [];
        $request->setName($name);
        $request->setConnection($connection);
        $request->setUpdateMask($updateMask);
        $requestParamHeaders['name'] = $name;
        $requestParams = new RequestParamsHeaderDescriptor(
            $requestParamHeaders
        );
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();
        return $this->startCall(
            'UpdateConnection',
            Connection::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
