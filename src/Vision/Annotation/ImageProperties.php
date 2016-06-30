<?php
/**
 * Copyright 2016 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Cloud\Vision\Annotation;

/**
 * Represents the imageProperties feature result
 */
class ImageProperties implements FeatureInterface
{
    use FeatureTrait;

    /**
     * @var array
     */
    private $result;

    /**
     * Create an ImageProperties result.
     *
     * This class is created internally by {@see Google\Cloud\Vision\Annotation}.
     * See {@see Google\Cloud\Vision\Annotation::imageProperties()} for full usage details.
     * This class should not be instantiated outside the gcloud-php library.
     *
     * Example:
     * ```
     * use Google\Cloud\ServiceBuilder;
     *
     * $cloud = new ServiceBuilder();
     * $vision = $cloud->vision();
     *
     * $image = $vision->image(fopen(__DIR__ .'/assets/family-photo.jpg', 'r'), [ 'imageProperties' ]);
     * $annotation = $vision->annotate($image);
     *
     * $properties = $annotation->imageProperties();
     * ```
     *
     * @param array $result The imageProperties annotation result
     */
    public function __construct(array $result)
    {
        $this->result = $result;
    }

    /**
     * Get the dominant colors in the image
     *
     * Example:
     * ```
     * $colors = $properties->colors();
     * ```
     * 
     * @return array
     */
    public function colors()
    {
        return $this->result['dominantColors']['colors'];
    }
}
