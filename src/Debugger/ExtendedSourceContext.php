<?php
/**
 * Copyright 2017 Google Inc. All Rights Reserved.
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

namespace Google\Cloud\Debugger;

/**
 * An ExtendedSourceContext is a SourceContext combined with additional details
 * describing the context.
 */
class ExtendedSourceContext implements SourceContext
{
    /**
     * @var SourceContext Any source context.
     */
    private $context;

    /**
     * @var array Labels with user defined metadata. An object containing a list
     *      of "key": value pairs.
     */
    private $labels;

    /**
     * Instantiate a new ExtendedSourceContext.
     *
     * @param SourceContext $context Any source context.
     * @param array $labels Labels with user defined metadata. An object
     *        containing a list of "key": value pairs.
     */
    public function __construct($context, $labels)
    {
        $this->context = $context;
        $this->labels = $labels;
    }

    /**
     * Callback to implement JsonSerializable interface
     *
     * @access private
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'context' => $this->context,
            'labels' => $this->labels
        ];
    }
}
