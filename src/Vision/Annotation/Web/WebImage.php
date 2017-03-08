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

namespace Google\Cloud\Vision\Annotation\Web;

use Google\Cloud\CallTrait;
use Google\Cloud\Vision\Annotation\AbstractFeature;

/**
 * Represents a Web Image from a Web Detection operation.
 *
 * Example:
 * ```
 * use Google\Cloud\ServiceBuilder;
 *
 * $cloud = new ServiceBuilder();
 * $vision = $cloud->vision();
 *
 * $imageResource = fopen(__DIR__ . '/assets/eiffel-tower.jpg', 'r');
 * $image = $vision->image($imageResource, ['WEB_DETECTION']);
 * $annotation = $vision->annotate($image);
 *
 * $matchingImages = $annotation->web()->matchingImages();
 * $firstImage = $matchingImages[0];
 * ```
 *
 * @method url() {
 *     The result image URL
 *
 *     Example:
 *     ```
 *     $url = $image->url();
 *     ```
 *
 *     @return string
 * }
 * @method score() {
 *     Overall relevancy score for the image.
 *
 *     Not normalized and not comparable across different image queries.
 *
 *     Example:
 *     ```
 *     $score = $image->score();
 *     ```
 *
 *     @return float
 * }
 */
class WebImage extends AbstractFeature
{
    use CallTrait;

    /**
     * @var array
     */
    private $magicMethods = [
        'url',
        'score'
    ];

    /**
     * @param array $info The WebImage result
     */
    public function __construct(array $info)
    {
        $this->info = $info;
    }
}
