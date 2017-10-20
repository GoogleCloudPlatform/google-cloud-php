<?php
/**
 * Copyright 2017 Google Inc.
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

namespace Google\Cloud\Tests\Snippets\Firestore;

use Google\Cloud\Firestore\Query;
use Google\Cloud\Firestore\ValueMapper;
use Google\Cloud\Firestore\QuerySnapshot;
use Google\Cloud\Dev\Snippet\SnippetTestCase;
use Google\Cloud\Firestore\Connection\ConnectionInterface;

/**
 * @group firestore
 * @group firestore-querysnapshot
 */
class QuerySnapshotTest extends SnippetTestCase
{
    private $connection;
    private $snapshot;

    public function setUp()
    {
        $this->connection = $this->prophesize(ConnectionInterface::class);
        $this->snapshot = \Google\Cloud\Dev\stub(QuerySnapshot::class, [
            $this->connection->reveal(),
            new ValueMapper($this->connection->reveal(), false),
            $this->prophesize(Query::class)->reveal(),
            function(){}
        ], ['connection', 'call']);
    }

    public function testClass()
    {
        $snippet = $this->snippetFromClass(QuerySnapshot::class);
        $res = $snippet->invoke('snapshot');
        $this->assertInstanceOf(QuerySnapshot::class, $res->returnVal());
    }

    public function testClassIteratorExample()
    {
        $snippet = $this->snippetFromClass(QuerySnapshot::class, 1);
        $snippet->addLocal('snapshot', $this->snapshot);

        $this->snapshot->___setProperty('call', function () {
            return new \ArrayIterator([
                [
                    'document' => [
                        'name' => 'foo',
                        'fields' => [
                            'name' => [
                                'stringValue' => 'John'
                            ]
                        ]
                    ],
                    'readTime' => ['seconds' => time()]
                ]
            ]);
        });

        $res = $snippet->invoke();
        $this->assertEquals('John', trim($res->output()));
    }

    public function testRows()
    {
        $snippet = $this->snippetFromMethod(QuerySnapshot::class, 'rows');
        $snippet->addLocal('snapshot', $this->snapshot);
        $res = $snippet->invoke('rows');
        $this->assertInstanceOf(\Generator::class, $res->returnVal());
    }
}
