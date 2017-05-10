<?php
/*
 * Copyright 2017, Google Inc. All rights reserved.
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

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/devtools/clouderrorreporting/v1beta1/error_group_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * EXPERIMENTAL: this client library class has not yet been declared beta. This class may change
 * more frequently than those which have been declared beta or 1.0, including changes which break
 * backwards compatibility.
 */

namespace Google\Cloud\ErrorReporting\V1beta1;

use Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroup;
use Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroupServiceGrpcClient;
use Google\Devtools\Clouderrorreporting\V1beta1\GetGroupRequest;
use Google\Devtools\Clouderrorreporting\V1beta1\UpdateGroupRequest;
use Google\GAX\AgentHeaderDescriptor;
use Google\GAX\ApiCallable;
use Google\GAX\CallSettings;
use Google\GAX\GrpcConstants;
use Google\GAX\GrpcCredentialsHelper;
use Google\GAX\PathTemplate;

/**
 * Service Description: Service for retrieving and updating individual error groups.
 *
 * EXPERIMENTAL: this client library class has not yet been declared beta. This class may change
 * more frequently than those which have been declared beta or 1.0, including changes which break
 * backwards compatibility.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * try {
 *     $errorGroupServiceClient = new ErrorGroupServiceClient();
 *     $formattedGroupName = ErrorGroupServiceClient::formatGroupName("[PROJECT]", "[GROUP]");
 *     $response = $errorGroupServiceClient->getGroup($formattedGroupName);
 * } finally {
 *     $errorGroupServiceClient->close();
 * }
 * ```
 *
 * Many parameters require resource names to be formatted in a particular way. To assist
 * with these names, this class includes a format method for each type of name, and additionally
 * a parse method to extract the individual identifiers contained within names that are
 * returned.
 */
class ErrorGroupServiceClient
{
    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'clouderrorreporting.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The default timeout for non-retrying methods.
     */
    const DEFAULT_TIMEOUT_MILLIS = 30000;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The code generator version, to be included in the agent header.
     */
    const CODEGEN_VERSION = '0.0.5';

    private static $groupNameTemplate;

    private $grpcCredentialsHelper;
    private $errorGroupServiceStub;
    private $scopes;
    private $defaultCallSettings;
    private $descriptors;

    /**
     * Formats a string containing the fully-qualified path to represent
     * a group resource.
     */
    public static function formatGroupName($project, $group)
    {
        return self::getGroupNameTemplate()->render([
            'project' => $project,
            'group' => $group,
        ]);
    }

    /**
     * Parses the project from the given fully-qualified path which
     * represents a group resource.
     */
    public static function parseProjectFromGroupName($groupName)
    {
        return self::getGroupNameTemplate()->match($groupName)['project'];
    }

    /**
     * Parses the group from the given fully-qualified path which
     * represents a group resource.
     */
    public static function parseGroupFromGroupName($groupName)
    {
        return self::getGroupNameTemplate()->match($groupName)['group'];
    }

    private static function getGroupNameTemplate()
    {
        if (self::$groupNameTemplate == null) {
            self::$groupNameTemplate = new PathTemplate('projects/{project}/groups/{group}');
        }

        return self::$groupNameTemplate;
    }

    private static function getGapicVersion()
    {
        if (file_exists(__DIR__.'/../VERSION')) {
            return trim(file_get_contents(__DIR__.'/../VERSION'));
        } elseif (class_exists('\Google\Cloud\ServiceBuilder')) {
            return \Google\Cloud\ServiceBuilder::VERSION;
        } else {
            return;
        }
    }

    // TODO(garrettjones): add channel (when supported in gRPC)
    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress The domain name of the API remote host.
     *                                  Default 'clouderrorreporting.googleapis.com'.
     *     @type mixed $port The port on which to connect to the remote host. Default 443.
     *     @type \Grpc\ChannelCredentials $sslCreds
     *           A `ChannelCredentials` for use with an SSL-enabled channel.
     *           Default: a credentials object returned from
     *           \Grpc\ChannelCredentials::createSsl()
     *     @type array $scopes A string array of scopes to use when acquiring credentials.
     *                         Default the scopes for the Stackdriver Error Reporting API.
     *     @type array $retryingOverride
     *           An associative array of string => RetryOptions, where the keys
     *           are method names (e.g. 'createFoo'), that overrides default retrying
     *           settings. A value of null indicates that the method in question should
     *           not retry.
     *     @type int $timeoutMillis The timeout in milliseconds to use for calls
     *                              that don't use retries. For calls that use retries,
     *                              set the timeout in RetryOptions.
     *                              Default: 30000 (30 seconds)
     *     @type \Google\Auth\CredentialsLoader $credentialsLoader
     *                              A CredentialsLoader object created using the
     *                              Google\Auth library.
     * }
     */
    public function __construct($options = [])
    {
        $defaultOptions = [
            'serviceAddress' => self::SERVICE_ADDRESS,
            'port' => self::DEFAULT_SERVICE_PORT,
            'scopes' => [
                'https://www.googleapis.com/auth/cloud-platform',
            ],
            'retryingOverride' => null,
            'timeoutMillis' => self::DEFAULT_TIMEOUT_MILLIS,
            'libName' => null,
            'libVersion' => null,
        ];
        $options = array_merge($defaultOptions, $options);

        $gapicVersion = $options['libVersion'] ?: self::getGapicVersion();

        $headerDescriptor = new AgentHeaderDescriptor([
            'libName' => $options['libName'],
            'libVersion' => $options['libVersion'],
            'gapicVersion' => $gapicVersion,
        ]);

        $defaultDescriptors = ['headerDescriptor' => $headerDescriptor];
        $this->descriptors = [
            'getGroup' => $defaultDescriptors,
            'updateGroup' => $defaultDescriptors,
        ];

        $clientConfigJsonString = file_get_contents(__DIR__.'/resources/error_group_service_client_config.json');
        $clientConfig = json_decode($clientConfigJsonString, true);
        $this->defaultCallSettings =
                CallSettings::load(
                    'google.devtools.clouderrorreporting.v1beta1.ErrorGroupService',
                    $clientConfig,
                    $options['retryingOverride'],
                    GrpcConstants::getStatusCodeNames(),
                    $options['timeoutMillis']
                );

        $this->scopes = $options['scopes'];

        $createStubOptions = [];
        if (array_key_exists('sslCreds', $options)) {
            $createStubOptions['sslCreds'] = $options['sslCreds'];
        }
        $grpcCredentialsHelperOptions = array_diff_key($options, $defaultOptions);
        $this->grpcCredentialsHelper = new GrpcCredentialsHelper($this->scopes, $grpcCredentialsHelperOptions);

        $createErrorGroupServiceStubFunction = function ($hostname, $opts) {
            return new ErrorGroupServiceGrpcClient($hostname, $opts);
        };
        if (array_key_exists('createErrorGroupServiceStubFunction', $options)) {
            $createErrorGroupServiceStubFunction = $options['createErrorGroupServiceStubFunction'];
        }
        $this->errorGroupServiceStub = $this->grpcCredentialsHelper->createStub(
            $createErrorGroupServiceStubFunction,
            $options['serviceAddress'],
            $options['port'],
            $createStubOptions
        );
    }

    /**
     * Get the specified group.
     *
     * Sample code:
     * ```
     * try {
     *     $errorGroupServiceClient = new ErrorGroupServiceClient();
     *     $formattedGroupName = ErrorGroupServiceClient::formatGroupName("[PROJECT]", "[GROUP]");
     *     $response = $errorGroupServiceClient->getGroup($formattedGroupName);
     * } finally {
     *     $errorGroupServiceClient->close();
     * }
     * ```
     *
     * @param string $groupName [Required] The group resource name. Written as
     *                          <code>projects/<var>projectID</var>/groups/<var>group_name</var></code>.
     *                          Call
     *                          <a href="/error-reporting/reference/rest/v1beta1/projects.groupStats/list">
     *                          <code>groupStats.list</code></a> to return a list of groups belonging to
     *                          this project.
     *
     * Example: <code>projects/my-project-123/groups/my-group</code>
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type \Google\GAX\RetrySettings $retrySettings
     *          Retry settings to use for this call. If present, then
     *          $timeoutMillis is ignored.
     *     @type int $timeoutMillis
     *          Timeout to use for this call. Only used if $retrySettings
     *          is not set.
     * }
     *
     * @return \Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroup
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     */
    public function getGroup($groupName, $optionalArgs = [])
    {
        $request = new GetGroupRequest();
        $request->setGroupName($groupName);

        $mergedSettings = $this->defaultCallSettings['getGroup']->merge(
            new CallSettings($optionalArgs)
        );
        $callable = ApiCallable::createApiCall(
            $this->errorGroupServiceStub,
            'GetGroup',
            $mergedSettings,
            $this->descriptors['getGroup']
        );

        return $callable(
            $request,
            [],
            ['call_credentials_callback' => $this->createCredentialsCallback()]);
    }

    /**
     * Replace the data for the specified group.
     * Fails if the group does not exist.
     *
     * Sample code:
     * ```
     * try {
     *     $errorGroupServiceClient = new ErrorGroupServiceClient();
     *     $group = new ErrorGroup();
     *     $response = $errorGroupServiceClient->updateGroup($group);
     * } finally {
     *     $errorGroupServiceClient->close();
     * }
     * ```
     *
     * @param ErrorGroup $group        [Required] The group which replaces the resource on the server.
     * @param array      $optionalArgs {
     *                                 Optional.
     *
     *     @type \Google\GAX\RetrySettings $retrySettings
     *          Retry settings to use for this call. If present, then
     *          $timeoutMillis is ignored.
     *     @type int $timeoutMillis
     *          Timeout to use for this call. Only used if $retrySettings
     *          is not set.
     * }
     *
     * @return \Google\Devtools\Clouderrorreporting\V1beta1\ErrorGroup
     *
     * @throws \Google\GAX\ApiException if the remote call fails
     */
    public function updateGroup($group, $optionalArgs = [])
    {
        $request = new UpdateGroupRequest();
        $request->setGroup($group);

        $mergedSettings = $this->defaultCallSettings['updateGroup']->merge(
            new CallSettings($optionalArgs)
        );
        $callable = ApiCallable::createApiCall(
            $this->errorGroupServiceStub,
            'UpdateGroup',
            $mergedSettings,
            $this->descriptors['updateGroup']
        );

        return $callable(
            $request,
            [],
            ['call_credentials_callback' => $this->createCredentialsCallback()]);
    }

    /**
     * Initiates an orderly shutdown in which preexisting calls continue but new
     * calls are immediately cancelled.
     */
    public function close()
    {
        $this->errorGroupServiceStub->close();
    }

    private function createCredentialsCallback()
    {
        return $this->grpcCredentialsHelper->createCallCredentialsCallback();
    }
}
