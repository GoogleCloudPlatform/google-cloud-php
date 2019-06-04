<?php
/*
 * Copyright 2017 Google LLC
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
 * https://github.com/google/googleapis/blob/master/google/cloud/language/v1beta2/language_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Cloud\Language\V1beta2\Gapic;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Language\V1beta2\AnalyzeEntitiesRequest;
use Google\Cloud\Language\V1beta2\AnalyzeEntitiesResponse;
use Google\Cloud\Language\V1beta2\AnalyzeEntitySentimentRequest;
use Google\Cloud\Language\V1beta2\AnalyzeEntitySentimentResponse;
use Google\Cloud\Language\V1beta2\AnalyzeSentimentRequest;
use Google\Cloud\Language\V1beta2\AnalyzeSentimentResponse;
use Google\Cloud\Language\V1beta2\AnalyzeSyntaxRequest;
use Google\Cloud\Language\V1beta2\AnalyzeSyntaxResponse;
use Google\Cloud\Language\V1beta2\AnnotateTextRequest;
use Google\Cloud\Language\V1beta2\AnnotateTextRequest\Features;
use Google\Cloud\Language\V1beta2\AnnotateTextResponse;
use Google\Cloud\Language\V1beta2\ClassifyTextRequest;
use Google\Cloud\Language\V1beta2\ClassifyTextResponse;
use Google\Cloud\Language\V1beta2\Document;
use Google\Cloud\Language\V1beta2\EncodingType;

/**
 * Service Description: Provides text analysis operations such as sentiment analysis and entity
 * recognition.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $languageServiceClient = new LanguageServiceClient();
 * try {
 *     $document = new Document();
 *     $response = $languageServiceClient->analyzeSentiment($document);
 * } finally {
 *     $languageServiceClient->close();
 * }
 * ```
 *
 * @experimental
 */
class LanguageServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.cloud.language.v1beta2.LanguageService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'language.googleapis.com';

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

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/language_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/language_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/language_service_grpc_config.json',
            'credentialsConfig' => [
                'scopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/language_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'language.googleapis.com:443'.
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
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
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
     * Analyzes the sentiment of the provided text.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $response = $languageServiceClient->analyzeSentiment($document);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type int $encodingType
     *          The encoding type used by the API to calculate sentence offsets for the
     *          sentence sentiment.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Language\V1beta2\EncodingType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\AnalyzeSentimentResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function analyzeSentiment($document, array $optionalArgs = [])
    {
        $request = new AnalyzeSentimentRequest();
        $request->setDocument($document);
        if (isset($optionalArgs['encodingType'])) {
            $request->setEncodingType($optionalArgs['encodingType']);
        }

        return $this->startCall(
            'AnalyzeSentiment',
            AnalyzeSentimentResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Finds named entities (currently proper names and common nouns) in the text
     * along with entity types, salience, mentions for each entity, and
     * other properties.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $response = $languageServiceClient->analyzeEntities($document);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type int $encodingType
     *          The encoding type used by the API to calculate offsets.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Language\V1beta2\EncodingType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\AnalyzeEntitiesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function analyzeEntities($document, array $optionalArgs = [])
    {
        $request = new AnalyzeEntitiesRequest();
        $request->setDocument($document);
        if (isset($optionalArgs['encodingType'])) {
            $request->setEncodingType($optionalArgs['encodingType']);
        }

        return $this->startCall(
            'AnalyzeEntities',
            AnalyzeEntitiesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Finds entities, similar to
     * [AnalyzeEntities][google.cloud.language.v1beta2.LanguageService.AnalyzeEntities]
     * in the text and analyzes sentiment associated with each entity and its
     * mentions.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $response = $languageServiceClient->analyzeEntitySentiment($document);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type int $encodingType
     *          The encoding type used by the API to calculate offsets.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Language\V1beta2\EncodingType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\AnalyzeEntitySentimentResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function analyzeEntitySentiment($document, array $optionalArgs = [])
    {
        $request = new AnalyzeEntitySentimentRequest();
        $request->setDocument($document);
        if (isset($optionalArgs['encodingType'])) {
            $request->setEncodingType($optionalArgs['encodingType']);
        }

        return $this->startCall(
            'AnalyzeEntitySentiment',
            AnalyzeEntitySentimentResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Analyzes the syntax of the text and provides sentence boundaries and
     * tokenization along with part of speech tags, dependency trees, and other
     * properties.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $response = $languageServiceClient->analyzeSyntax($document);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type int $encodingType
     *          The encoding type used by the API to calculate offsets.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Language\V1beta2\EncodingType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\AnalyzeSyntaxResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function analyzeSyntax($document, array $optionalArgs = [])
    {
        $request = new AnalyzeSyntaxRequest();
        $request->setDocument($document);
        if (isset($optionalArgs['encodingType'])) {
            $request->setEncodingType($optionalArgs['encodingType']);
        }

        return $this->startCall(
            'AnalyzeSyntax',
            AnalyzeSyntaxResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * Classifies a document into categories.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $response = $languageServiceClient->classifyText($document);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\ClassifyTextResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function classifyText($document, array $optionalArgs = [])
    {
        $request = new ClassifyTextRequest();
        $request->setDocument($document);

        return $this->startCall(
            'ClassifyText',
            ClassifyTextResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }

    /**
     * A convenience method that provides all syntax, sentiment, entity, and
     * classification features in one call.
     *
     * Sample code:
     * ```
     * $languageServiceClient = new LanguageServiceClient();
     * try {
     *     $document = new Document();
     *     $features = new Features();
     *     $response = $languageServiceClient->annotateText($document, $features);
     * } finally {
     *     $languageServiceClient->close();
     * }
     * ```
     *
     * @param Document $document     Input document.
     * @param Features $features     The enabled features.
     * @param array    $optionalArgs {
     *                               Optional.
     *
     *     @type int $encodingType
     *          The encoding type used by the API to calculate offsets.
     *          For allowed values, use constants defined on {@see \Google\Cloud\Language\V1beta2\EncodingType}
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Cloud\Language\V1beta2\AnnotateTextResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function annotateText($document, $features, array $optionalArgs = [])
    {
        $request = new AnnotateTextRequest();
        $request->setDocument($document);
        $request->setFeatures($features);
        if (isset($optionalArgs['encodingType'])) {
            $request->setEncodingType($optionalArgs['encodingType']);
        }

        return $this->startCall(
            'AnnotateText',
            AnnotateTextResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
