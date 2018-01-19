<?php
/*
 * Copyright 2018 Google LLC
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
 * https://github.com/google/googleapis/blob/master/google/spanner/v1/spanner.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * EXPERIMENTAL: This client library class has not yet been declared GA (1.0). This means that
 * even though we intend the surface to be stable, we may make backwards incompatible changes
 * if necessary.
 *
 * @experimental
 */

namespace Google\Cloud\Spanner\V1\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\Call;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PathTemplate;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\CredentialsLoader;
use Google\Cloud\Spanner\V1\BeginTransactionRequest;
use Google\Cloud\Spanner\V1\CommitRequest;
use Google\Cloud\Spanner\V1\CommitResponse;
use Google\Cloud\Spanner\V1\CreateSessionRequest;
use Google\Cloud\Spanner\V1\DeleteSessionRequest;
use Google\Cloud\Spanner\V1\ExecuteSqlRequest;
use Google\Cloud\Spanner\V1\GetSessionRequest;
use Google\Cloud\Spanner\V1\KeySet;
use Google\Cloud\Spanner\V1\ListSessionsRequest;
use Google\Cloud\Spanner\V1\ListSessionsResponse;
use Google\Cloud\Spanner\V1\Mutation;
use Google\Cloud\Spanner\V1\PartialResultSet;
use Google\Cloud\Spanner\V1\ReadRequest;
use Google\Cloud\Spanner\V1\ResultSet;
use Google\Cloud\Spanner\V1\RollbackRequest;
use Google\Cloud\Spanner\V1\Session;
use Google\Cloud\Spanner\V1\Transaction;
use Google\Cloud\Spanner\V1\TransactionOptions;
use Google\Cloud\Spanner\V1\TransactionSelector;
use Google\Protobuf\GPBEmpty;
use Google\Protobuf\Struct;
use Grpc\Channel;
use Grpc\ChannelCredentials;

/**
 * Service Description: Cloud Spanner API.
 *
 * The Cloud Spanner API can be used to manage sessions and execute
 * transactions on data stored in Cloud Spanner databases.
 *
 * EXPERIMENTAL: This client library class has not yet been declared GA (1.0). This means that
 * even though we intend the surface to be stable, we may make backwards incompatible changes
 * if necessary.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $spannerClient = new SpannerClient();
 * try {
 *     $formattedDatabase = $spannerClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
 *     $response = $spannerClient->createSession($formattedDatabase);
 * } finally {
 *     $spannerClient->close();
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
class SpannerGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.spanner.v1.Spanner';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'spanner.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The code generator version, to be included in the agent header.
     */
    const CODEGEN_VERSION = '0.0.5';

    private static $databaseNameTemplate;
    private static $sessionNameTemplate;
    private static $pathTemplateMap;

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS,
            'port' => self::DEFAULT_SERVICE_PORT,
            'scopes' => [
                'https://www.googleapis.com/auth/cloud-platform',
                'https://www.googleapis.com/auth/spanner.data',
            ],
            'clientConfigPath' => __DIR__.'/../resources/spanner_client_config.json',
            'restClientConfigPath' => __DIR__.'/../resources/spanner_rest_client_config.php',
            'descriptorsConfigPath' => __DIR__.'/../resources/spanner_descriptor_config.php',
            'versionFile' => __DIR__.'/../../VERSION',
        ];
    }

    private static function getDatabaseNameTemplate()
    {
        if (null == self::$databaseNameTemplate) {
            self::$databaseNameTemplate = new PathTemplate('projects/{project}/instances/{instance}/databases/{database}');
        }

        return self::$databaseNameTemplate;
    }

    private static function getSessionNameTemplate()
    {
        if (null == self::$sessionNameTemplate) {
            self::$sessionNameTemplate = new PathTemplate('projects/{project}/instances/{instance}/databases/{database}/sessions/{session}');
        }

        return self::$sessionNameTemplate;
    }

    private static function getPathTemplateMap()
    {
        if (null == self::$pathTemplateMap) {
            self::$pathTemplateMap = [
                'database' => self::getDatabaseNameTemplate(),
                'session' => self::getSessionNameTemplate(),
            ];
        }

        return self::$pathTemplateMap;
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a database resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $database
     *
     * @return string The formatted database resource.
     * @experimental
     */
    public static function databaseName($project, $instance, $database)
    {
        return self::getDatabaseNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
            'database' => $database,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent
     * a session resource.
     *
     * @param string $project
     * @param string $instance
     * @param string $database
     * @param string $session
     *
     * @return string The formatted session resource.
     * @experimental
     */
    public static function sessionName($project, $instance, $database, $session)
    {
        return self::getSessionNameTemplate()->render([
            'project' => $project,
            'instance' => $instance,
            'database' => $database,
            'session' => $session,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - database: projects/{project}/instances/{instance}/databases/{database}
     * - session: projects/{project}/instances/{instance}/databases/{database}/sessions/{session}.
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
     *     @type string $serviceAddress The domain name of the API remote host.
     *                                  Default 'spanner.googleapis.com'.
     *     @type mixed $port The port on which to connect to the remote host. Default 443.
     *     @type Channel $channel
     *           A `Channel` object. If not specified, a channel will be constructed.
     *           NOTE: This option is only valid when utilizing the gRPC transport.
     *     @type ChannelCredentials $sslCreds
     *           A `ChannelCredentials` object for use with an SSL-enabled channel.
     *           Default: a credentials object returned from
     *           \Grpc\ChannelCredentials::createSsl().
     *           NOTE: This option is only valid when utilizing the gRPC transport. Also, if the $channel
     *           optional argument is specified, then this argument is unused.
     *     @type bool $forceNewChannel
     *           If true, this forces gRPC to create a new channel instead of using a persistent channel.
     *           Defaults to false.
     *           NOTE: This option is only valid when utilizing the gRPC transport. Also, if the $channel
     *           optional argument is specified, then this option is unused.
     *     @type CredentialsLoader $credentialsLoader
     *           A CredentialsLoader object created using the Google\Auth library.
     *     @type string[] $scopes A string array of scopes to use when acquiring credentials.
     *                          Defaults to the scopes for the Cloud Spanner API.
     *     @type string $clientConfigPath
     *           Path to a JSON file containing client method configuration, including retry settings.
     *           Specify this setting to specify the retry behavior of all methods on the client.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder. The retry settings provided in this option can be overridden
     *           by settings in $retryingOverride
     *     @type array $retryingOverride
     *           An associative array in which the keys are method names (e.g. 'createFoo'), and
     *           the values are retry settings to use for that method. The retry settings for each
     *           method can be a {@see Google\ApiCore\RetrySettings} object, or an associative array
     *           of retry settings parameters. See the documentation on {@see Google\ApiCore\RetrySettings}
     *           for example usage. Passing a value of null is equivalent to a value of
     *           ['retriesEnabled' => false]. Retry settings provided in this setting override the
     *           settings in $clientConfigPath.
     *     @type callable $authHttpHandler A handler used to deliver PSR-7 requests specifically
     *           for authentication. Should match a signature of
     *           `function (RequestInterface $request, array $options) : ResponseInterface`.
     *     @type callable $httpHandler A handler used to deliver PSR-7 requests. Should match a
     *           signature of `function (RequestInterface $request, array $options) : PromiseInterface`.
     *           NOTE: This option is only valid when utilizing the REST transport.
     *     @type string|TransportInterface $transport The transport used for executing network
     *           requests. May be either the string `rest` or `grpc`. Additionally, it is possible
     *           to pass in an already instantiated transport. Defaults to `grpc` if gRPC support is
     *           detected on the system.
     * }
     * @experimental
     */
    public function __construct($options = [])
    {
        $this->setClientOptions($options + self::getClientDefaults());
    }

    /**
     * Creates a new session. A session can be used to perform
     * transactions that read and/or modify data in a Cloud Spanner database.
     * Sessions are meant to be reused for many consecutive
     * transactions.
     *
     * Sessions can only execute one transaction at a time. To execute
     * multiple concurrent read-write/write-only transactions, create
     * multiple sessions. Note that standalone reads and queries use a
     * transaction internally, and count toward the one transaction
     * limit.
     *
     * Cloud Spanner limits the number of sessions that can exist at any given
     * time; thus, it is a good idea to delete idle and/or unneeded sessions.
     * Aside from explicit deletes, Cloud Spanner can delete sessions for which no
     * operations are sent for more than an hour. If a session is deleted,
     * requests to it return `NOT_FOUND`.
     *
     * Idle sessions can be kept alive by sending a trivial SQL query
     * periodically, e.g., `"SELECT 1"`.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedDatabase = $spannerClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     $response = $spannerClient->createSession($formattedDatabase);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $database     Required. The database in which the new session is created.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type Session $session
     *          The session to create.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\V1\Session
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function createSession($database, $optionalArgs = [])
    {
        $request = new CreateSessionRequest();
        $request->setDatabase($database);
        if (isset($optionalArgs['session'])) {
            $request->setSession($optionalArgs['session']);
        }

        return $this->startCall(
            'CreateSession',
            Session::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Gets a session. Returns `NOT_FOUND` if the session does not exist.
     * This is mainly useful for determining whether a session is still
     * alive.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedName = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $response = $spannerClient->getSession($formattedName);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the session to retrieve.
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
     * @return \Google\Cloud\Spanner\V1\Session
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function getSession($name, $optionalArgs = [])
    {
        $request = new GetSessionRequest();
        $request->setName($name);

        return $this->startCall(
            'GetSession',
            Session::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Lists all sessions in a given database.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedDatabase = $spannerClient->databaseName('[PROJECT]', '[INSTANCE]', '[DATABASE]');
     *     // Iterate through all elements
     *     $pagedResponse = $spannerClient->listSessions($formattedDatabase);
     *     foreach ($pagedResponse->iterateAllElements() as $element) {
     *         // doSomethingWith($element);
     *     }
     *
     *     // OR iterate over pages of elements
     *     $pagedResponse = $spannerClient->listSessions($formattedDatabase);
     *     foreach ($pagedResponse->iteratePages() as $page) {
     *         foreach ($page as $element) {
     *             // doSomethingWith($element);
     *         }
     *     }
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $database     Required. The database in which to list sessions.
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
     *          An expression for filtering the results of the request. Filter rules are
     *          case insensitive. The fields eligible for filtering are:
     *
     *            * `labels.key` where key is the name of a label
     *
     *          Some examples of using filters are:
     *
     *            * `labels.env:*` --> The session has the label "env".
     *            * `labels.env:dev` --> The session has the label "env" and the value of
     *                                 the label contains the string "dev".
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
    public function listSessions($database, $optionalArgs = [])
    {
        $request = new ListSessionsRequest();
        $request->setDatabase($database);
        if (isset($optionalArgs['pageSize'])) {
            $request->setPageSize($optionalArgs['pageSize']);
        }
        if (isset($optionalArgs['pageToken'])) {
            $request->setPageToken($optionalArgs['pageToken']);
        }
        if (isset($optionalArgs['filter'])) {
            $request->setFilter($optionalArgs['filter']);
        }

        return $this->getPagedListResponse(
            'ListSessions',
            $optionalArgs,
            ListSessionsResponse::class,
            $request
        );
    }

    /**
     * Ends a session, releasing server resources associated with it.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedName = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $spannerClient->deleteSession($formattedName);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $name         Required. The name of the session to delete.
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
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function deleteSession($name, $optionalArgs = [])
    {
        $request = new DeleteSessionRequest();
        $request->setName($name);

        return $this->startCall(
            'DeleteSession',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Executes an SQL query, returning all rows in a single reply. This
     * method cannot be used to return a result set larger than 10 MiB;
     * if the query yields more data than that, the query fails with
     * a `FAILED_PRECONDITION` error.
     *
     * Queries inside read-write transactions might return `ABORTED`. If
     * this occurs, the application should restart the transaction from
     * the beginning. See [Transaction][google.spanner.v1.Transaction] for more details.
     *
     * Larger result sets can be fetched in streaming fashion by calling
     * [ExecuteStreamingSql][google.spanner.v1.Spanner.ExecuteStreamingSql] instead.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $sql = '';
     *     $response = $spannerClient->executeSql($formattedSession, $sql);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $session      Required. The session in which the SQL query should be performed.
     * @param string $sql          Required. The SQL query string.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type TransactionSelector $transaction
     *          The transaction to use. If none is provided, the default is a
     *          temporary read-only transaction with strong concurrency.
     *     @type Struct $params
     *          The SQL query string can contain parameter placeholders. A parameter
     *          placeholder consists of `'&#64;'` followed by the parameter
     *          name. Parameter names consist of any combination of letters,
     *          numbers, and underscores.
     *
     *          Parameters can appear anywhere that a literal value is expected.  The same
     *          parameter name can be used more than once, for example:
     *            `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     *
     *          It is an error to execute an SQL query with unbound parameters.
     *
     *          Parameter values are specified using `params`, which is a JSON
     *          object whose keys are parameter names, and whose values are the
     *          corresponding parameter values.
     *     @type array $paramTypes
     *          It is not always possible for Cloud Spanner to infer the right SQL type
     *          from a JSON value.  For example, values of type `BYTES` and values
     *          of type `STRING` both appear in [params][google.spanner.v1.ExecuteSqlRequest.params] as JSON strings.
     *
     *          In these cases, `param_types` can be used to specify the exact
     *          SQL type for some or all of the SQL query parameters. See the
     *          definition of [Type][google.spanner.v1.Type] for more information
     *          about SQL types.
     *     @type string $resumeToken
     *          If this request is resuming a previously interrupted SQL query
     *          execution, `resume_token` should be copied from the last
     *          [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     *          enables the new SQL query execution to resume where the last one left
     *          off. The rest of the request parameters must exactly match the
     *          request that yielded this token.
     *     @type int $queryMode
     *          Used to control the amount of debugging information returned in
     *          [ResultSetStats][google.spanner.v1.ResultSetStats].
     *          For allowed values, use constants defined on {@see \Google\Cloud\Spanner\V1\ExecuteSqlRequest_QueryMode}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\V1\ResultSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function executeSql($session, $sql, $optionalArgs = [])
    {
        $request = new ExecuteSqlRequest();
        $request->setSession($session);
        $request->setSql($sql);
        if (isset($optionalArgs['transaction'])) {
            $request->setTransaction($optionalArgs['transaction']);
        }
        if (isset($optionalArgs['params'])) {
            $request->setParams($optionalArgs['params']);
        }
        if (isset($optionalArgs['paramTypes'])) {
            $request->setParamTypes($optionalArgs['paramTypes']);
        }
        if (isset($optionalArgs['resumeToken'])) {
            $request->setResumeToken($optionalArgs['resumeToken']);
        }
        if (isset($optionalArgs['queryMode'])) {
            $request->setQueryMode($optionalArgs['queryMode']);
        }

        return $this->startCall(
            'ExecuteSql',
            ResultSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Like [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql], except returns the result
     * set as a stream. Unlike [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql], there
     * is no limit on the size of the returned result set. However, no
     * individual row in the result set can exceed 100 MiB, and no
     * column value can exceed 10 MiB.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $sql = '';
     *     // Read all responses until the stream is complete
     *     $stream = $spannerClient->executeStreamingSql($formattedSession, $sql);
     *     foreach ($stream->readAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $session      Required. The session in which the SQL query should be performed.
     * @param string $sql          Required. The SQL query string.
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type TransactionSelector $transaction
     *          The transaction to use. If none is provided, the default is a
     *          temporary read-only transaction with strong concurrency.
     *     @type Struct $params
     *          The SQL query string can contain parameter placeholders. A parameter
     *          placeholder consists of `'&#64;'` followed by the parameter
     *          name. Parameter names consist of any combination of letters,
     *          numbers, and underscores.
     *
     *          Parameters can appear anywhere that a literal value is expected.  The same
     *          parameter name can be used more than once, for example:
     *            `"WHERE id > &#64;msg_id AND id < &#64;msg_id + 100"`
     *
     *          It is an error to execute an SQL query with unbound parameters.
     *
     *          Parameter values are specified using `params`, which is a JSON
     *          object whose keys are parameter names, and whose values are the
     *          corresponding parameter values.
     *     @type array $paramTypes
     *          It is not always possible for Cloud Spanner to infer the right SQL type
     *          from a JSON value.  For example, values of type `BYTES` and values
     *          of type `STRING` both appear in [params][google.spanner.v1.ExecuteSqlRequest.params] as JSON strings.
     *
     *          In these cases, `param_types` can be used to specify the exact
     *          SQL type for some or all of the SQL query parameters. See the
     *          definition of [Type][google.spanner.v1.Type] for more information
     *          about SQL types.
     *     @type string $resumeToken
     *          If this request is resuming a previously interrupted SQL query
     *          execution, `resume_token` should be copied from the last
     *          [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     *          enables the new SQL query execution to resume where the last one left
     *          off. The rest of the request parameters must exactly match the
     *          request that yielded this token.
     *     @type int $queryMode
     *          Used to control the amount of debugging information returned in
     *          [ResultSetStats][google.spanner.v1.ResultSetStats].
     *          For allowed values, use constants defined on {@see \Google\Cloud\Spanner\V1\ExecuteSqlRequest_QueryMode}
     *     @type int $timeoutMillis
     *          Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\ServerStream
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function executeStreamingSql($session, $sql, $optionalArgs = [])
    {
        $request = new ExecuteSqlRequest();
        $request->setSession($session);
        $request->setSql($sql);
        if (isset($optionalArgs['transaction'])) {
            $request->setTransaction($optionalArgs['transaction']);
        }
        if (isset($optionalArgs['params'])) {
            $request->setParams($optionalArgs['params']);
        }
        if (isset($optionalArgs['paramTypes'])) {
            $request->setParamTypes($optionalArgs['paramTypes']);
        }
        if (isset($optionalArgs['resumeToken'])) {
            $request->setResumeToken($optionalArgs['resumeToken']);
        }
        if (isset($optionalArgs['queryMode'])) {
            $request->setQueryMode($optionalArgs['queryMode']);
        }

        return $this->startCall(
            'ExecuteStreamingSql',
            PartialResultSet::class,
            $optionalArgs,
            $request,
            Call::SERVER_STREAMING_CALL
        );
    }

    /**
     * Reads rows from the database using key lookups and scans, as a
     * simple key/value style alternative to
     * [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql].  This method cannot be used to
     * return a result set larger than 10 MiB; if the read matches more
     * data than that, the read fails with a `FAILED_PRECONDITION`
     * error.
     *
     * Reads inside read-write transactions might return `ABORTED`. If
     * this occurs, the application should restart the transaction from
     * the beginning. See [Transaction][google.spanner.v1.Transaction] for more details.
     *
     * Larger result sets can be yielded in streaming fashion by calling
     * [StreamingRead][google.spanner.v1.Spanner.StreamingRead] instead.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $table = '';
     *     $columns = [];
     *     $keySet = new KeySet();
     *     $response = $spannerClient->read($formattedSession, $table, $columns, $keySet);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string   $session Required. The session in which the read should be performed.
     * @param string   $table   Required. The name of the table in the database to be read.
     * @param string[] $columns The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     *                          this request.
     * @param KeySet   $keySet  Required. `key_set` identifies the rows to be yielded. `key_set` names the
     *                          primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     *                          is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     *                          index keys in [index][google.spanner.v1.ReadRequest.index].
     *
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     *
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type TransactionSelector $transaction
     *          The transaction to use. If none is provided, the default is a
     *          temporary read-only transaction with strong concurrency.
     *     @type string $index
     *          If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     *          used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     *          and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     *     @type int $limit
     *          If greater than zero, only the first `limit` rows are yielded. If `limit`
     *          is zero, the default is no limit.
     *     @type string $resumeToken
     *          If this request is resuming a previously interrupted read,
     *          `resume_token` should be copied from the last
     *          [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     *          enables the new read to resume where the last read left off. The
     *          rest of the request parameters must exactly match the request
     *          that yielded this token.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\V1\ResultSet
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function read($session, $table, $columns, $keySet, $optionalArgs = [])
    {
        $request = new ReadRequest();
        $request->setSession($session);
        $request->setTable($table);
        $request->setColumns($columns);
        $request->setKeySet($keySet);
        if (isset($optionalArgs['transaction'])) {
            $request->setTransaction($optionalArgs['transaction']);
        }
        if (isset($optionalArgs['index'])) {
            $request->setIndex($optionalArgs['index']);
        }
        if (isset($optionalArgs['limit'])) {
            $request->setLimit($optionalArgs['limit']);
        }
        if (isset($optionalArgs['resumeToken'])) {
            $request->setResumeToken($optionalArgs['resumeToken']);
        }

        return $this->startCall(
            'Read',
            ResultSet::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Like [Read][google.spanner.v1.Spanner.Read], except returns the result set as a
     * stream. Unlike [Read][google.spanner.v1.Spanner.Read], there is no limit on the
     * size of the returned result set. However, no individual row in
     * the result set can exceed 100 MiB, and no column value can exceed
     * 10 MiB.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $table = '';
     *     $columns = [];
     *     $keySet = new KeySet();
     *     // Read all responses until the stream is complete
     *     $stream = $spannerClient->streamingRead($formattedSession, $table, $columns, $keySet);
     *     foreach ($stream->readAll() as $element) {
     *         // doSomethingWith($element);
     *     }
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string   $session Required. The session in which the read should be performed.
     * @param string   $table   Required. The name of the table in the database to be read.
     * @param string[] $columns The columns of [table][google.spanner.v1.ReadRequest.table] to be returned for each row matching
     *                          this request.
     * @param KeySet   $keySet  Required. `key_set` identifies the rows to be yielded. `key_set` names the
     *                          primary keys of the rows in [table][google.spanner.v1.ReadRequest.table] to be yielded, unless [index][google.spanner.v1.ReadRequest.index]
     *                          is present. If [index][google.spanner.v1.ReadRequest.index] is present, then [key_set][google.spanner.v1.ReadRequest.key_set] instead names
     *                          index keys in [index][google.spanner.v1.ReadRequest.index].
     *
     * Rows are yielded in table primary key order (if [index][google.spanner.v1.ReadRequest.index] is empty)
     * or index key order (if [index][google.spanner.v1.ReadRequest.index] is non-empty).
     *
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     * @param array $optionalArgs {
     *                            Optional.
     *
     *     @type TransactionSelector $transaction
     *          The transaction to use. If none is provided, the default is a
     *          temporary read-only transaction with strong concurrency.
     *     @type string $index
     *          If non-empty, the name of an index on [table][google.spanner.v1.ReadRequest.table]. This index is
     *          used instead of the table primary key when interpreting [key_set][google.spanner.v1.ReadRequest.key_set]
     *          and sorting result rows. See [key_set][google.spanner.v1.ReadRequest.key_set] for further information.
     *     @type int $limit
     *          If greater than zero, only the first `limit` rows are yielded. If `limit`
     *          is zero, the default is no limit.
     *     @type string $resumeToken
     *          If this request is resuming a previously interrupted read,
     *          `resume_token` should be copied from the last
     *          [PartialResultSet][google.spanner.v1.PartialResultSet] yielded before the interruption. Doing this
     *          enables the new read to resume where the last read left off. The
     *          rest of the request parameters must exactly match the request
     *          that yielded this token.
     *     @type int $timeoutMillis
     *          Timeout to use for this call.
     * }
     *
     * @return \Google\ApiCore\ServerStream
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function streamingRead($session, $table, $columns, $keySet, $optionalArgs = [])
    {
        $request = new ReadRequest();
        $request->setSession($session);
        $request->setTable($table);
        $request->setColumns($columns);
        $request->setKeySet($keySet);
        if (isset($optionalArgs['transaction'])) {
            $request->setTransaction($optionalArgs['transaction']);
        }
        if (isset($optionalArgs['index'])) {
            $request->setIndex($optionalArgs['index']);
        }
        if (isset($optionalArgs['limit'])) {
            $request->setLimit($optionalArgs['limit']);
        }
        if (isset($optionalArgs['resumeToken'])) {
            $request->setResumeToken($optionalArgs['resumeToken']);
        }

        return $this->startCall(
            'StreamingRead',
            PartialResultSet::class,
            $optionalArgs,
            $request,
            Call::SERVER_STREAMING_CALL
        );
    }

    /**
     * Begins a new transaction. This step can often be skipped:
     * [Read][google.spanner.v1.Spanner.Read], [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql] and
     * [Commit][google.spanner.v1.Spanner.Commit] can begin a new transaction as a
     * side-effect.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $options = new TransactionOptions();
     *     $response = $spannerClient->beginTransaction($formattedSession, $options);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string             $session      Required. The session in which the transaction runs.
     * @param TransactionOptions $options      Required. Options for the new transaction.
     * @param array              $optionalArgs {
     *                                         Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\V1\Transaction
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function beginTransaction($session, $options, $optionalArgs = [])
    {
        $request = new BeginTransactionRequest();
        $request->setSession($session);
        $request->setOptions($options);

        return $this->startCall(
            'BeginTransaction',
            Transaction::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Commits a transaction. The request includes the mutations to be
     * applied to rows in the database.
     *
     * `Commit` might return an `ABORTED` error. This can occur at any time;
     * commonly, the cause is conflicts with concurrent
     * transactions. However, it can also happen for a variety of other
     * reasons. If `Commit` returns `ABORTED`, the caller should re-attempt
     * the transaction from the beginning, re-using the same session.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $mutations = [];
     *     $response = $spannerClient->commit($formattedSession, $mutations);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string     $session      Required. The session in which the transaction to be committed is running.
     * @param Mutation[] $mutations    The mutations to be executed when this transaction commits. All
     *                                 mutations are applied atomically, in the order they appear in
     *                                 this list.
     * @param array      $optionalArgs {
     *                                 Optional.
     *
     *     @type string $transactionId
     *          Commit a previously-started transaction.
     *     @type TransactionOptions $singleUseTransaction
     *          Execute mutations in a temporary transaction. Note that unlike
     *          commit of a previously-started transaction, commit with a
     *          temporary transaction is non-idempotent. That is, if the
     *          `CommitRequest` is sent to Cloud Spanner more than once (for
     *          instance, due to retries in the application, or in the
     *          transport library), it is possible that the mutations are
     *          executed more than once. If this is undesirable, use
     *          [BeginTransaction][google.spanner.v1.Spanner.BeginTransaction] and
     *          [Commit][google.spanner.v1.Spanner.Commit] instead.
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Spanner\V1\CommitResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function commit($session, $mutations, $optionalArgs = [])
    {
        $request = new CommitRequest();
        $request->setSession($session);
        $request->setMutations($mutations);
        if (isset($optionalArgs['transactionId'])) {
            $request->setTransactionId($optionalArgs['transactionId']);
        }
        if (isset($optionalArgs['singleUseTransaction'])) {
            $request->setSingleUseTransaction($optionalArgs['singleUseTransaction']);
        }

        return $this->startCall(
            'Commit',
            CommitResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Rolls back a transaction, releasing any locks it holds. It is a good
     * idea to call this for any transaction that includes one or more
     * [Read][google.spanner.v1.Spanner.Read] or [ExecuteSql][google.spanner.v1.Spanner.ExecuteSql] requests and
     * ultimately decides not to commit.
     *
     * `Rollback` returns `OK` if it successfully aborts the transaction, the
     * transaction was already aborted, or the transaction is not
     * found. `Rollback` never returns `ABORTED`.
     *
     * Sample code:
     * ```
     * $spannerClient = new SpannerClient();
     * try {
     *     $formattedSession = $spannerClient->sessionName('[PROJECT]', '[INSTANCE]', '[DATABASE]', '[SESSION]');
     *     $transactionId = '';
     *     $spannerClient->rollback($formattedSession, $transactionId);
     * } finally {
     *     $spannerClient->close();
     * }
     * ```
     *
     * @param string $session       Required. The session in which the transaction to roll back is running.
     * @param string $transactionId Required. The transaction to roll back.
     * @param array  $optionalArgs  {
     *                              Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function rollback($session, $transactionId, $optionalArgs = [])
    {
        $request = new RollbackRequest();
        $request->setSession($session);
        $request->setTransactionId($transactionId);

        return $this->startCall(
            'Rollback',
            GPBEmpty::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
