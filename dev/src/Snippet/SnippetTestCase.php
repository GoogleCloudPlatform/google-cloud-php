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

namespace Google\Cloud\Dev\Snippet;

use Google\Cloud\Dev\Snippet\Container;

/**
 * Provide helpers for Snippet tests.
 *
 * Snippet test cases should extend this class.
 */
class SnippetTestCase extends \PHPUnit_Framework_TestCase
{
    private $coverage;
    private $parser;

    public function __construct()
    {
        parent::__construct();

        $this->coverage = Container::$coverage;
        $this->parser = Container::$parser;
    }

    public function snippetFromClass($class, $index = 0)
    {
        $identifier = $this->parser->createIdentifier($class, $index);

        $snippet = $this->coverage->cache($identifier);
        if (!$snippet) {
            $snippet = $this->parser->classExample($class, $index);
        }

        $this->coverage->cover($snippet->identifier());

        return $snippet;
    }

    public function snippetFromMagicMethod($class, $method, $index = 0)
    {
        $name = $class .'::'. $method;
        $identifier = $this->parser->createIdentifier($name, $index);

        $snippet = $this->coverage->cache($identifier);
        if (!$snippet) {
            throw new \Exception('Magic Method '. $name .' was not found');
        }

        $this->coverage->cover($identifier);

        return $snippet;
    }

    public function snippetFromMethod($class, $method, $index = 0)
    {
        $name = $class .'::'. $method;
        $identifier = $this->parser->createIdentifier($name, $index);

        $snippet = $this->coverage->cache($identifier);
        if (!$snippet) {
            $snippet = $this->parser->methodExample($class, $method, $index);
        }

        $this->coverage->cover($identifier);

        return $snippet;
    }
}
