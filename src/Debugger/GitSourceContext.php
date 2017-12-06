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
 * A GitSourceContext denotes a particular revision in a third party Git
 * repository (e.g. GitHub).
 */
class GitSourceContext implements SourceContext, \JsonSerializable
{
    /**
     * @var string Git repository URL.
     */
    private $url;

    /**
     * @var string Git commit hash.
     */
    private $revisionId;

    /**
     * Instantiate a new GitSourceContext.
     *
     * @param string $url Git repository URL.
     * @param string $revisionId Git commit hash.
     */
    public function __construct($url, $revisionId)
    {
        $this->url = $url;
        $this->revisionId = $revisionId;
    }

    /**
     * Callback to implement JsonSerializable interface
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return [
            'git' => [
                'url' => $this->url,
                'revisionId' => $this->revisionId
            ]
        ];
    }
}
