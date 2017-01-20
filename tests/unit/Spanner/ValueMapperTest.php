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

namespace Google\Cloud\Tests\Spanner;

use Google\Cloud\Int64;
use Google\Cloud\Spanner\Bytes;
use Google\Cloud\Spanner\Date;
use Google\Cloud\Spanner\Timestamp;
use Google\Cloud\Spanner\ValueMapper;

/**
 * @group spanner
 */
class ValueMapperTest extends \PHPUnit_Framework_TestCase
{
    private $mapper;

    public function setUp()
    {
        $this->mapper = new ValueMapper(false);
    }

    public function testFormatParamsForExecuteSqlSimpleTypes()
    {
        $params = [
            'id' => 1,
            'name' => 'john',
            'pi' => 3.1515,
            'isCool' => false,
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals($params, $res['params']);
        $this->assertEquals(ValueMapper::TYPE_INT64, $res['paramTypes']['id']['code']);
        $this->assertEquals(ValueMapper::TYPE_STRING, $res['paramTypes']['name']['code']);
        $this->assertEquals(ValueMapper::TYPE_FLOAT64, $res['paramTypes']['pi']['code']);
        $this->assertEquals(ValueMapper::TYPE_BOOL, $res['paramTypes']['isCool']['code']);
    }

    public function testFormatParamsForExecuteSqlResource()
    {
        $c = 'hello world';

        $resource = fopen('php://temp', 'r+');
        fwrite($resource, $c);
        rewind($resource);

        $params = [
            'resource' => $resource
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals($c, base64_decode($res['params']['resource']));
        $this->assertEquals(ValueMapper::TYPE_BYTES, $res['paramTypes']['resource']['code']);
    }

    public function testFormatParamsForExecuteSqlArray()
    {
        $params = [
            'array' => ['foo', 'bar']
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals('foo', $res['params']['array'][0]);
        $this->assertEquals('bar', $res['params']['array'][1]);
        $this->assertEquals(ValueMapper::TYPE_ARRAY, $res['paramTypes']['array']['code']);
        $this->assertEquals(ValueMapper::TYPE_STRING, $res['paramTypes']['array']['arrayElementType']['code']);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testFormatParamsForExecuteSqlInvalidTypes()
    {
        $this->mapper->formatParamsForExecuteSql(['array' => ['foo', 3.1515]]);
    }

    public function testFormatParamsForExecuteSqlInt64()
    {
        $val = '1234';
        $params = [
            'int' => new Int64($val)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);

        $this->assertEquals($val, $res['params']['int']);
        $this->assertEquals(ValueMapper::TYPE_INT64, $res['paramTypes']['int']['code']);
    }

    public function testFormatParamsForExecuteSqlValueInterface()
    {
        $val = 'hello world';
        $params = [
            'bytes' => new Bytes($val)
        ];

        $res = $this->mapper->formatParamsForExecuteSql($params);
        $this->assertEquals($val, base64_decode($res['params']['bytes']));
        $this->assertEquals(ValueMapper::TYPE_BYTES, $res['paramTypes']['bytes']['code']);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testFormatParamsForExecuteSqlInvalidObjectType()
    {
        $params = [
            'bad' => $this
        ];

        $this->mapper->formatParamsForExecuteSql($params);
    }

    public function testEncodeValuesAsSimpleType()
    {
        $dt = new \DateTime;

        $vals = [];
        $vals['bool'] = true;
        $vals['int'] = 555555;
        $vals['intObj'] = new Int64((string) $vals['int']);
        $vals['float'] = 3.1415;
        $vals['nan'] = NAN;
        $vals['inf'] = INF;
        $vals['timestamp'] = new Timestamp($dt);
        $vals['date'] = new Date($dt);
        $vals['string'] = 'foo';
        $vals['bytes'] = new Bytes('hello world');
        $vals['array'] = ['foo', 'bar'];

        $res = $this->mapper->encodeValuesAsSimpleType($vals);

        $this->assertTrue($res[0]);
        $this->assertEquals((string) $vals['int'], $res[1]);
        $this->assertEquals((string) $vals['int'], $res[2]);
        $this->assertEquals($vals['float'], $res[3]);
        $this->assertTrue(is_nan($res[4]));
        $this->assertEquals(INF, $res[5]);
        $this->assertEquals($dt->format(Timestamp::FORMAT), $res[6]);
        $this->assertEquals($dt->format(Date::FORMAT), $res[7]);
        $this->assertEquals($vals['string'], $res[8]);
        $this->assertEquals(base64_encode('hello world'), $res[9]);
        $this->assertEquals($vals['array'], $res[10]);
    }

    public function testDecodeValuesBool()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_BOOL),
            $this->createRow(false)
        );
        $this->assertEquals(false, $res['rowName']);
    }

    public function testDecodeValuesInt()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_INT64),
            $this->createRow('555')
        );
        $this->assertEquals(555, $res['rowName']);
    }

    public function testDecodeValuesInt64Object()
    {
        $mapper = new ValueMapper(true);
        $res = $mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_INT64),
            $this->createRow('555')
        );
        $this->assertInstanceOf(Int64::class, $res['rowName']);
        $this->assertEquals('555', $res['rowName']->get());
    }

    public function testDecodeValuesFloat()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_FLOAT64),
            $this->createRow(3.1415)
        );
        $this->assertEquals(3.1415, $res['rowName']);
    }

    public function testDecodeValuesFloatNaN()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_FLOAT64),
            $this->createRow('NaN')
        );
        $this->assertTrue(is_nan($res['rowName']));
    }

    public function testDecodeValuesFloatInfinity()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_FLOAT64),
            $this->createRow('Infinity')
        );

        $this->assertTrue(is_infinite($res['rowName']));
        $this->assertTrue($res['rowName'] > 0);
    }

    public function testDecodeValuesFloatNegativeInfinity()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_FLOAT64),
            $this->createRow('-Infinity')
        );

        $this->assertTrue(is_infinite($res['rowName']));
        $this->assertTrue($res['rowName'] < 0);
    }

    /**
     * @expectedException RuntimeException
     */
    public function testDecodeValuesFloatError()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_FLOAT64),
            $this->createRow('foo')
        );
    }

    public function testDecodeValuesString()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_STRING),
            $this->createRow('foo')
        );
        $this->assertEquals('foo', $res['rowName']);
    }

    public function testDecodeValuesTimestamp()
    {
        $dt = new \DateTime;
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_TIMESTAMP),
            $this->createRow($dt->format(Timestamp::FORMAT))
        );

        $this->assertInstanceOf(Timestamp::class, $res['rowName']);
        $this->assertEquals($dt->format(Timestamp::FORMAT), $res['rowName']->formatAsString());
    }

    public function testDecodeValuesDate()
    {
        $dt = new \DateTime;
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_DATE),
            $this->createRow($dt->format(Date::FORMAT))
        );

        $this->assertInstanceOf(Date::class, $res['rowName']);
        $this->assertEquals($dt->format(Date::FORMAT), $res['rowName']->formatAsString());
    }

    public function testDecodeValuesBytes()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_BYTES),
            $this->createRow(base64_encode('hello world'))
        );

        $this->assertInstanceOf(Bytes::class, $res['rowName']);
        $this->assertEquals('hello world', $res['rowName']->get());
    }

    public function testDecodeValuesArray()
    {
        $res = $this->mapper->decodeValues(
            $this->createField(ValueMapper::TYPE_ARRAY, 'arrayElementType', [
                'code' => ValueMapper::TYPE_STRING
            ]), $this->createRow(['foo', 'bar'])
        );

        $this->assertEquals('foo', $res['rowName'][0]);
        $this->assertEquals('bar', $res['rowName'][1]);
    }

    public function testDecodeValuesStruct()
    {
        $field = [
            'name' => 'structTest',
            'type' => [
                'code' => ValueMapper::TYPE_ARRAY,
                'arrayElementType' => [
                    'code' => ValueMapper::TYPE_STRUCT,
                    'structType' => [
                        'fields' => [
                            [
                                'name' => 'rowName',
                                'type' => [
                                    'code' => ValueMapper::TYPE_STRING
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $row = [
            [
                'Hello World'
            ]
        ];

        $res = $this->mapper->decodeValues(
            [$field],
            [$row]
        );

        $this->assertEquals('Hello World', $res['structTest'][0]['rowName']);
    }

    public function testDecodeValuesAnonymousField()
    {
        $fields = [
            [
                'name' => 'ID',
                'type' => [
                    'code' => ValueMapper::TYPE_INT64,
                ]
            ], [
                'type' => [
                    'code' => ValueMapper::TYPE_STRING
                ]
            ]
        ];

        $row = ['1337', 'John'];

        $res = $this->mapper->decodeValues($fields, $row);

        $this->assertEquals('1337', $res['ID']);
        $this->assertEquals('John', $res[1]);
    }

    private function createField($code, $type = null, array $typeObj = [])
    {
        return [[
            'name' => 'rowName',
            'type' => array_filter([
                'code' => $code,
                $type => $typeObj
            ])
        ]];
    }

    private function createRow($val)
    {
        return [$val];
    }
}
