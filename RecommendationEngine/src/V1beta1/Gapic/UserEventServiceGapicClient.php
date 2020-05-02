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
 * https://github.com/google/googleapis/blob/master/google/cloud/recommendationengine/v1beta1/user_event_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\RecommendationEngine\V1beta1\Gapic;

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
use Google\Api\HttpBody;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\RecommendationEngine\V1beta1\CollectUserEventRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ImportErrorsConfig;
use Google\Cloud\RecommendationEngine\V1beta1\ImportMetadata;
use Google\Cloud\RecommendationEngine\V1beta1\ImportUserEventsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\InputConfig;
use Google\Cloud\RecommendationEngine\V1beta1\ListUserEventsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\ListUserEventsResponse;
use Google\Cloud\RecommendationEngine\V1beta1\PurgeUserEventsRequest;
use Google\Cloud\RecommendationEngine\V1beta1\UserEvent;
use Google\Cloud\RecommendationEngine\V1beta1\WriteUserEventRequest;
use Google\LongRunning\Operation;

/**
 * Service Description: Service for ingesting end user actions on the customer website.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $userEventServiceClient = new UserEventServiceClient();
 * try {
 *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
 *     $filter = '';
 *     $operationResponse = $userEventServiceClient->purgeUserEvents($formattedParent, $filter);
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
 *     $operationResponse = $userEventServiceClient->purgeUserEvents($formattedParent, $filter);
 *     $operationName = $operationResponse->getName();
 *     // ... do other work
 *     $newOperationResponse = $userEventServiceClient->resumeOperation($operationName, 'purgeUserEvents');
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
 *     $userEventServiceClient->close();
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
class UserEventServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.recommendationengine.v1beta1.UserEventService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'recommendationengine.googleapis.com';

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
    private static $eventStoreNameTemplate;
    private static $pathTemplateMap;

    private $operationsClient;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/user_event_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/user_event_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/user_event_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/user_event_service_rest_client_config.php',
                ],
            ],
        ];
    }

    private static function getEventStoreNameTemplate()
    {
        if (null == self::$eventStoreNameTemplate) {
            self::$eventStoreNameTemplate = new PathTemplate('projects/{project}/locations/{location}/catalogs/{catalog}/eventStores/{event_store}');
        }

        return self::$eventStoreNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'eventStore' => self::getEventStoreNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a event_store resource.
     *
     * @param string $project
     * @param string $location
     * @param string $catalog
     * @param string $eventStore
     *
     * @return string The formatted event_store resource.
     * @experimental
     */
    public static function eventStoreName($project, $location, $catalog, $eventStore)
    {
        return self::getEventStoreNameTemplate()->render([
            'project' => $project,
            'location' => $location,
            'catalog' => $catalog,
            'event_store' => $eventStore,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - eventStore: projects/{project}/locations/{location}/catalogs/{catalog}/eventStores/{event_store}.
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
     *           as "<uri>:<port>". Default 'recommendationengine.googleapis.com:443'.
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
     * Deletes permanently all user events specified by the filter provided.
     * Depending on the number of events specified by the filter, this operation
     * could take hours or days to complete. To test a filter, use the list
     * command first.
     *
     * Sample code:
     * ```
     * $userEventServiceClient = new UserEventServiceClient();
     * try {
     *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
     *     $filter = '';
     *     $operationResponse = $userEventServiceClient->purgeUserEvents($formattedParent, $filter);
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
     *     $operationResponse = $userEventServiceClient->purgeUserEvents($formattedParent, $filter);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $userEventServiceClient->resumeOperation($operationName, 'purgeUserEvents');
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
     *     $userEventServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The resource name of the event_store under which the events are
     *                             created. The format is
     *                             "projects/${projectId}/locations/global/catalogs/${catalogId}/eventStores/${eventStoreId}"
     * @param string $filter       Required. The filter string to specify the events to be deleted. Empty
     *                             string filter is not allowed. This filter can also be used with
     *                             ListUserEvents API to list events that will be deleted. The eligible fields
     *                             for filtering are:
     *                             * eventType - UserEvent.eventType field of type string.
     *                             * eventTime - in ISO 8601 "zulu" format.
     *                             * visitorId - field of type string. Specifying this will delete all events
     *                             associated with a visitor.
     *                             * userId - field of type string. Specifying this will delete all events
     *                             associated with a user.
     *                             Example 1: Deleting all events in a time range.
     *                             `eventTime > "2012-04-23T18:25:43.511Z" eventTime <
     *                             "2012-04-23T18:30:43.511Z"`
     *                             Example 2: Deleting specific eventType in time range.
     *                             `eventTime > "2012-04-23T18:25:43.511Z" eventType = "detail-page-view"`
     *                             Example 3: Deleting all events for a specific visitor
     *                             `visitorId = visitor1024`
     *                             The filtering fields are assumed to have an implicit AND.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type bool $force
     *          Optional. The default value is false. Override this flag to true to
     *          actually perform the purge. If the field is not set to true, a sampling of
     *          events to be deleted will be returned.
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
    public function purgeUserEvents($parent, $filter, array $optionalArgs = [])
    {
        $request = new PurgeUserEventsRequest();
        $request->setParent($parent);
        $request->setFilter($filter);
        if (isset($optionalArgs['force'])) {
            $request->setForce($optionalArgs['force']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'PurgeUserEvents',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Bulk import of User events. Request processing might be
     * synchronous. Events that already exist are skipped.
     * Use this method for backfilling historical user events.
     *
     * Operation.response is of type ImportResponse. Note that it is
     * possible for a subset of the items to be successfully inserted.
     * Operation.metadata is of type ImportMetadata.
     *
     * Sample code:
     * ```
     * $userEventServiceClient = new UserEventServiceClient();
     * try {
     *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
     *     $inputConfig = new InputConfig();
     *     $operationResponse = $userEventServiceClient->importUserEvents($formattedParent, $inputConfig);
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
     *     $operationResponse = $userEventServiceClient->importUserEvents($formattedParent, $inputConfig);
     *     $operationName = $operationResponse->getName();
     *     // ... do other work
     *     $newOperationResponse = $userEventServiceClient->resumeOperation($operationName, 'importUserEvents');
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
     *     $userEventServiceClient->close();
     * }
     * ```
     *
     * @param string      $parent       Required.
     *                                  "projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store"
     * @param InputConfig $inputConfig  Required. The desired input location of the data.
     * @param array       $optionalArgs {
     *                                  Optional.
     *
     *     @type string $requestId
     *          Optional. Unique identifier provided by client, within the ancestor
     *          dataset scope. Ensures idempotency for expensive long running operations.
     *          Server-generated if unspecified. Up to 128 characters long. This is
     *          returned as google.longrunning.Operation.name in the response. Note that
     *          this field must not be set if the desired input config is
     *          catalog_inline_source.
     *     @type ImportErrorsConfig $errorsConfig
     *          Optional. The desired location of errors incurred during the Import.
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
    public function importUserEvents($parent, $inputConfig, array $optionalArgs = [])
    {
        $request = new ImportUserEventsRequest();
        $request->setParent($parent);
        $request->setInputConfig($inputConfig);
        if (isset($optionalArgs['requestId'])) {
            $request->setRequestId($optionalArgs['requestId']);
        }
        if (isset($optionalArgs['errorsConfig'])) {
            $request->setErrorsConfig($optionalArgs['errorsConfig']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startOperationsCall(
            'ImportUserEvents',
            $optionalArgs,
            $request,
            $this->getOperationsClient()
        )->wait();
    }

    /**
     * Writes a single user event.
     *
     * Sample code:
     * ```
     * $userEventServiceClient = new UserEventServiceClient();
     * try {
     *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
     *     $userEvent = new UserEvent();
     *     $response = $userEventServiceClient->writeUserEvent($formattedParent, $userEvent);
     * } finally {
     *     $userEventServiceClient->close();
     * }
     * ```
     *
     * @param string    $parent       Required. The parent eventStore resource name, such as
     *                                "projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store".
     * @param UserEvent $userEvent    Required. User event to write.
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
     * @return \Google\Cloud\RecommendationEngine\V1beta1\UserEvent
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function writeUserEvent($parent, $userEvent, array $optionalArgs = [])
    {
        $request = new WriteUserEventRequest();
        $request->setParent($parent);
        $request->setUserEvent($userEvent);

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'WriteUserEvent',
            UserEvent::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Writes a single user event from the browser. This uses a GET request to
     * due to browser restriction of POST-ing to a 3rd party domain.
     *
     * This method is used only by the Recommendations AI JavaScript pixel.
     * Users should not call this method directly.
     *
     * Sample code:
     * ```
     * $userEventServiceClient = new UserEventServiceClient();
     * try {
     *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
     *     $userEvent = '';
     *     $response = $userEventServiceClient->collectUserEvent($formattedParent, $userEvent);
     * } finally {
     *     $userEventServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent eventStore name, such as
     *                             "projects/1234/locations/global/catalogs/default_catalog/eventStores/default_event_store".
     * @param string $userEvent    Required. URL encoded UserEvent proto.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type string $uri
     *          Optional. The url including cgi-parameters but excluding the hash fragment.
     *          The URL must be truncated to 1.5K bytes to conservatively be under the 2K
     *          bytes. This is often more useful than the referer url, because many
     *          browsers only send the domain for 3rd party requests.
     *     @type int $ets
     *          Optional. The event timestamp in milliseconds. This prevents browser
     *          caching of otherwise identical get requests. The name is abbreviated to
     *          reduce the payload bytes.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Api\HttpBody
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function collectUserEvent($parent, $userEvent, array $optionalArgs = [])
    {
        $request = new CollectUserEventRequest();
        $request->setParent($parent);
        $request->setUserEvent($userEvent);
        if (isset($optionalArgs['uri'])) {
            $request->setUri($optionalArgs['uri']);
        }
        if (isset($optionalArgs['ets'])) {
            $request->setEts($optionalArgs['ets']);
        }

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'CollectUserEvent',
            HttpBody::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a list of user events within a time range, with potential filtering.
     *
     * Sample code:
     * ```
     * $userEventServiceClient = new UserEventServiceClient();
     * try {
     *     $formattedParent = $userEventServiceClient->eventStoreName('[PROJECT]', '[LOCATION]', '[CATALOG]', '[EVENT_STORE]');
     *     // Iterate over pages of elements
     *     $pagedResponse = $userEventServiceClient->listUserEvents($formattedParent);
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
     *     $pagedResponse = $userEventServiceClient->listUserEvents($formattedParent);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $userEventServiceClient->close();
     * }
     * ```
     *
     * @param string $parent       Required. The parent eventStore resource name, such as
     *                             "projects/&#42;/locations/&#42;/catalogs/default_catalog/eventStores/default_event_store".
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
     *          Optional. Filtering expression to specify restrictions over
     *          returned events. This is a sequence of terms, where each term applies some
     *          kind of a restriction to the returned user events. Use this expression to
     *          restrict results to a specific time range, or filter events by eventType.
     *             eg: eventTime > "2012-04-23T18:25:43.511Z" eventsMissingCatalogItems
     *             eventTime<"2012-04-23T18:25:43.511Z" eventType=search
     *
     *            We expect only 3 types of fields:
     *
     *             * eventTime: this can be specified a maximum of 2 times, once with a
     *               less than operator and once with a greater than operator. The
     *               eventTime restrict should result in one contiguous valid eventTime
     *               range.
     *
     *             * eventType: only 1 eventType restriction can be specified.
     *
     *             * eventsMissingCatalogItems: specififying this will restrict results
     *               to events for which catalog items were not found in the catalog. The
     *               default behavior is to return only those events for which catalog
     *               items were found.
     *
     *            Some examples of valid filters expressions:
     *
     *            * Example 1: eventTime > "2012-04-23T18:25:43.511Z"
     *                      eventTime < "2012-04-23T18:30:43.511Z"
     *            * Example 2: eventTime > "2012-04-23T18:25:43.511Z"
     *                      eventType = detail-page-view
     *            * Example 3: eventsMissingCatalogItems
     *                      eventType = search eventTime < "2018-04-23T18:30:43.511Z"
     *            * Example 4: eventTime > "2012-04-23T18:25:43.511Z"
     *            * Example 5: eventType = search
     *            * Example 6: eventsMissingCatalogItems
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
    public function listUserEvents($parent, array $optionalArgs = [])
    {
        $request = new ListUserEventsRequest();
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

        $requestParams = new RequestParamsHeaderDescriptor([
          'parent' => $request->getParent(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->getPagedListResponse(
            'ListUserEvents',
            $optionalArgs,
            ListUserEventsResponse::class,
            $request
        );
    }
}
