<?php
/**
 * Copyright 2016 Google Inc.
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

namespace Google\Cloud\Datastore;

use Google\Cloud\Core;
use GuzzleHttp\Psr7;
use Psr\Http\Message\StreamInterface;

/**
 * Represents a Blob value.
 *
 * Blobs can be used to store binary data in Google Cloud Datastore.
 *
 * Example:
 * ```
 * use Google\Cloud\Datastore\DatastoreClient;
 *
 * $datastore = new DatastoreClient();
 *
 * $blob = $datastore->blob(file_get_contents(__DIR__ .'/family-photo.jpg'));
 * ```
 *
 * ```
 * // Get the value of a blob by casting to a string.
 *
 * echo (string) $blob;
 * ```
 */
class Blob extends Core\Blob
{

}
