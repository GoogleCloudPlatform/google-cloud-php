<?php
/*
 * Copyright 2019 Google LLC
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
 * DO NOT EDIT! This is a generated sample ("Request",  "samplegen_no_response")
 */

// sample-metadata
//   title: Delete Product Set (returns Empty)
//   description: Delete Product Set (returns Empty)
//   usage: php samples/V1/SamplegenNoResponse.php
// [START samplegen_no_response]
require __DIR__.'/../../vendor/autoload.php';

use Google\Cloud\Vision\V1\ProductSearchClient;

/** Delete Product Set (returns Empty) */
function sampleDeleteProductSet()
{
    $productSearchClient = new ProductSearchClient();

    // The full name of the product set to delete
    $formattedName = $productSearchClient->productSetName('[PROJECT]', '[LOCATION]', '[PRODUCT_SET]');

    try {
        $productSearchClient->deleteProductSet($formattedName);
        printf('Deleted product set.'.PHP_EOL);
    } finally {
        $productSearchClient->close();
    }
}
// [END samplegen_no_response]

sampleDeleteProductSet();
