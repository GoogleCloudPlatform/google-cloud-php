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
 * https://github.com/google/googleapis/blob/master/google/cloud/dataproc/v1/autoscaling_policies.proto
 * and updates to that file get reflected here through a refresh process.
 */

namespace Google\Cloud\Dataproc\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dataproc\V1\AutoscalingPolicy;
use Google\Cloud\Dataproc\V1\CreateAutoscalingPolicyRequest;
use Google\Cloud\Dataproc\V1\DeleteAutoscalingPolicyRequest;
use Google\Cloud\Dataproc\V1\GetAutoscalingPolicyRequest;
use Google\Cloud\Dataproc\V1\ListAutoscalingPoliciesRequest;
use Google\Cloud\Dataproc\V1\ListAutoscalingPoliciesResponse;
use Google\Cloud\Dataproc\V1\UpdateAutoscalingPolicyRequest;
use Google\Protobuf\GPBEmpty;

/**
 * Service Description: The API interface for managing autoscaling policies in the
 * Dataproc API.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
 * try {
 *     $formattedParent = $autoscalingPolicyServiceClient->regionName('[PROJECT]', '[REGION]');
 *     $policy = new AutoscalingPolicy();
 *     $response = $autoscalingPolicyServiceClient->createAutoscalingPolicy($formattedParent, $policy);
 * } finally {
 *     $autoscalingPolicyServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parseName method to extract the individual identifiers contained within formatted names
 * that are returned by the API.
 */
class AutoscalingPolicyServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.dataproc.v1.AutoscalingPolicyService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'dataproc.googleapis.com';

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
    private static $autoscalingPolicyNameTemplate;
    private static $regionNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/autoscaling_policy_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/autoscaling_policy_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/autoscaling_policy_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/autoscaling_policy_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getAutoscalingPolicyNameTemplate()
    {
        if (null == self::$autoscalingPolicyNameTemplate) {
            self::$autoscalingPolicyNameTemplate = new PathTemplate('projects/{project}/regions/{region}/autoscalingPolicies/{autoscaling_policy}');
        }

        return self::$autoscalingPolicyNameTemplate;
    }

    private static function getRegionNameTemplate()
    {
        if (null == self::$regionNameTemplate) {
            self::$regionNameTemplate = new PathTemplate('projects/{project}/regions/{region}');
        }

        return self::$regionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'autoscalingPolicy' => self::getAutoscalingPolicyNameTemplate(),
                'region' => self::getRegionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a autoscaling_policy resource.
     *
     * @param string $project
     * @param string $region
     * @param string $autoscalingPolicy
     *
     * @return string The formatted autoscaling_policy resource.
     */
    public static function autoscalingPolicyName($project, $region, $autoscalingPolicy)
    {
        return self::getAutoscalingPolicyNameTemplate()->render([
            'project' => $project,
            'region' => $region,
            'autoscaling_policy' => $autoscalingPolicy,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a region resource.
     *
     * @param string $project
     * @param string $region
     *
     * @return string The formatted region resource.
     */
    public static function regionName($project, $region)
    {
        return self::getRegionNameTemplate()->render([
            'project' => $project,
            'region' => $region,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - autoscalingPolicy: projects/{project}/regions/{region}/autoscalingPolicies/{autoscaling_policy}
     * - region: projects/{project}/regions/{region}.
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
     *           as "<uri>:<port>". Default 'dataproc.googleapis.com:443'.
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
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Creates new autoscaling policy.
     *
     * Sample code:
     * ```
     * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
     * try {
     *     $formattedParent = $autoscalingPolicyServiceClient->regionName('[PROJECT]', '[REGION]');
     *     $policy = new AutoscalingPolicy();
     *     $response = $autoscalingPolicyServiceClient->createAutoscalingPolicy($formattedParent, $policy);
     * } finally {
     *     $autoscalingPolicyServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The "resource name" of the region or location, as described
     *                       in https://cloud.google.com/apis/design/resource_names.
     *
     * * For `projects.regions.autoscalingPolicies.create`, the resource name
     *   of the region has the following format:
     *   `projects/{project_id}/regions/{region}`
     *
     * * For `projects.locations.autoscalingPolicies.create`, the resource name
     *   of the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     * @param AutoscalingPolicy $policy       The autoscaling policy to create.
     * @param array             $optionalArgs {
     *                                        Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dataproc\V1\AutoscalingPolicy
     *
     * @throws ApiException if the remote call fails
     */
    public function createAutoscalingPolicy($parent, $policy, array $optionalArgs = [])
    {
        $request = new CreateAutoscalingPolicyRequest();
        $request->setParent($parent);
        $request->setPolicy($policy);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CreateAutoscalingPolicy',
            AutoscalingPolicy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Updates (replaces) autoscaling policy.
     *
     * Disabled check for update_mask, because all updates will be full
     * replacements.
     *
     * Sample code:
     * ```
     * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
     * try {
     *     $policy = new AutoscalingPolicy();
     *     $response = $autoscalingPolicyServiceClient->updateAutoscalingPolicy($policy);
     * } finally {
     *     $autoscalingPolicyServiceClient->close();
     * }
     * ```
     *
     * @param AutoscalingPolicy $policy       Required. The updated autoscaling policy.
     * @param array             $optionalArgs {
     *                                        Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Dataproc\V1\AutoscalingPolicy
     *
     * @throws ApiException if the remote call fails
     */
    public function updateAutoscalingPolicy($policy, array $optionalArgs = [])
    {
        $request = new UpdateAutoscalingPolicyRequest();
        $request->setPolicy($policy);

        $requestParams = new RequestParamsHeaderDescriptor([
          'policy.name' => $request->getPolicy()->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'UpdateAutoscalingPolicy',
            AutoscalingPolicy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Retrieves autoscaling policy.
     *
     * Sample code:
     * ```
     * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
     * try {
     *     $formattedName = $autoscalingPolicyServiceClient->autoscalingPolicyName('[PROJECT]', '[REGION]', '[AUTOSCALING_POLICY]');
     *     $response = $autoscalingPolicyServiceClient->getAutoscalingPolicy($formattedName);
     * } finally {
     *     $autoscalingPolicyServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The "resource name" of the autoscaling policy, as described
     *                     in https://cloud.google.com/apis/design/resource_names.
     *
     * * For `projects.regions.autoscalingPolicies.get`, the resource name
     *   of the policy has the following format:
     *   `projects/{project_id}/regions/{region}/autoscalingPolicies/{policy_id}`
     *
     * * For `projects.locations.autoscalingPolicies.get`, the resource name
     *   of the policy has the following format:
     *   `projects/{project_id}/locations/{location}/autoscalingPolicies/{policy_id}`
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
     * @return \Google\Cloud\Dataproc\V1\AutoscalingPolicy
     *
     * @throws ApiException if the remote call fails
     */
    public function getAutoscalingPolicy($name, array $optionalArgs = [])
    {
        $request = new GetAutoscalingPolicyRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'GetAutoscalingPolicy',
            AutoscalingPolicy::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists autoscaling policies in the project.
     *
     * Sample code:
     * ```
     * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
     * try {
     *     $formattedParent = $autoscalingPolicyServiceClient->regionName('[PROJECT]', '[REGION]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $autoscalingPolicyServiceClient->listAutoscalingPolicies($formattedParent);
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
     *     $pagedResponse = $autoscalingPolicyServiceClient->listAutoscalingPolicies($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $autoscalingPolicyServiceClient->close();
     * }
     * ```
     *
     * @param string $parent Required. The "resource name" of the region or location, as described
     *                       in https://cloud.google.com/apis/design/resource_names.
     *
     * * For `projects.regions.autoscalingPolicies.list`, the resource name
     *   of the region has the following format:
     *   `projects/{project_id}/regions/{region}`
     *
     * * For `projects.locations.autoscalingPolicies.list`, the resource name
     *   of the location has the following format:
     *   `projects/{project_id}/locations/{location}`
     * @param array $optionalArgs {
     *                            Optional.
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
     */
    public function listAutoscalingPolicies($parent, array $optionalArgs = [])
    {
        $request = new ListAutoscalingPoliciesRequest();
        $request->setParent($parent);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListAutoscalingPolicies',
            $optionalArgs,
            ListAutoscalingPoliciesResponse::class,
            $request
        );
    }

    /**
     * Deletes an autoscaling policy. It is an error to delete an autoscaling
     * policy that is in use by one or more clusters.
     *
     * Sample code:
     * ```
     * $autoscalingPolicyServiceClient = new AutoscalingPolicyServiceClient();
     * try {
     *     $formattedName = $autoscalingPolicyServiceClient->autoscalingPolicyName('[PROJECT]', '[REGION]', '[AUTOSCALING_POLICY]');
     *     $autoscalingPolicyServiceClient->deleteAutoscalingPolicy($formattedName);
     * } finally {
     *     $autoscalingPolicyServiceClient->close();
     * }
     * ```
     *
     * @param string $name Required. The "resource name" of the autoscaling policy, as described
     *                     in https://cloud.google.com/apis/design/resource_names.
     *
     * * For `projects.regions.autoscalingPolicies.delete`, the resource name
     *   of the policy has the following format:
     *   `projects/{project_id}/regions/{region}/autoscalingPolicies/{policy_id}`
     *
     * * For `projects.locations.autoscalingPolicies.delete`, the resource name
     *   of the policy has the following format:
     *   `projects/{project_id}/locations/{location}/autoscalingPolicies/{policy_id}`
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
     * @throws ApiException if the remote call fails
     */
    public function deleteAutoscalingPolicy($name, array $optionalArgs = [])
    {
        $request = new DeleteAutoscalingPolicyRequest();
        $request->setName($name);

        $requestParams = new RequestParamsHeaderDescriptor([
          'name' => $request->getName(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'DeleteAutoscalingPolicy',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
