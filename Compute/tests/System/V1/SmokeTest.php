<?php
/**
 * Copyright 2021 Google Inc.
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

namespace Google\Cloud\Compute\Tests\System\V1;

use Google\ApiCore\ApiException;
use Google\ApiCore\ValidationException;
use Google\Cloud\Compute\V1\AccessConfig;
use Google\Cloud\Compute\V1\AttachedDisk;
use Google\Cloud\Compute\V1\AttachedDiskInitializeParams;
use Google\Cloud\Compute\V1\Instance;
use Google\Cloud\Compute\V1\InstancesClient;
use Google\Cloud\Compute\V1\NetworkInterface;
use Google\Cloud\Compute\V1\ZoneOperationsClient;
use Google\Cloud\Compute\V1\ShieldedInstanceConfig;
use Google\Cloud\Core\Testing\System\SystemTestCase;

/**
 * @group compute
 * @group gapic
 */
class SmokeTest extends SystemTestCase
{
    const ZONE = 'us-central1-a';
    const IMAGE = 'projects/debian-cloud/global/images/family/debian-10';

    protected static $instancesClient;
    protected static $projectId;
    protected static $machineType;
    protected static $name;
    protected static $zoneOperationsClient;

    public static function setUpBeforeClass(): void
    {
        self::$projectId = getenv('PROJECT_ID');
        if (self::$projectId === false) {
            self::fail('Environment variable PROJECT_ID must be set for smoke test');
        }
        self::$instancesClient = new InstancesClient();
        self::$zoneOperationsClient = new ZoneOperationsClient();
        self::$machineType = sprintf(
            'https://www.googleapis.com/compute/v1/projects/%s/zones/%s/machineTypes/n1-standard-1',
            self::$projectId,
            self::ZONE
        );
        self::$name = "gapicphp" . strval(rand(100000, 999999));
    }

    public static function tearDownAfterClass(): void
    {
        self::$instancesClient->close();
    }

    public function testInsertInstance(): void
    {
        $disk = new AttachedDisk([
            'boot' => true,
            "auto_delete" => true,
            "type" => AttachedDisk\Type::PERSISTENT,
            'initialize_params' => new AttachedDiskInitializeParams([
                'source_image' => self::IMAGE
            ]),
        ]);
        $accessConfigs = new AccessConfig(['name' => 'default']);
        $networkConfig = new NetworkInterface([
            'access_configs' => [$accessConfigs]
        ]);
        $instanceResource = new Instance([
            'name' => self::$name,
            'machine_type' => self::$machineType,
            'network_interfaces' => [$networkConfig],
            'disks' => [$disk],
        ]);
        $operation = self::$instancesClient->insert(
            $instanceResource,
            self::$projectId,
            self::ZONE
        );

        self::$zoneOperationsClient->wait($operation->getName(), self::$projectId, self::ZONE);

        $instance = self::$instancesClient->get(
            self::$name,
            self::$projectId,
            self::ZONE
        );
        $this->assertEquals(self::$name, $instance->getName());
        $this->assertEquals(self::$machineType, $instance->getMachineType());
    }

    /**
     * @depends testInsertInstance
     */
    public function testPatchInstance()
    {
        $shieldedInstanceConfigResource = new ShieldedInstanceConfig();
        $shieldedInstanceConfigResource->setEnableSecureBoot(true);

        self::$instancesClient->stop(self::$name, self::$projectId, self::ZONE);
        while (true){
            $instance = self::$instancesClient->get(
                self::$name,
                self::$projectId,
                self::ZONE
            );
            if ($instance->getStatus() == Instance\Status::TERMINATED) {
                break;
            }
            sleep(10);
        }
        try {
            $op = self::$instancesClient->updateShieldedInstanceConfig(
                self::$name, self::$projectId, $shieldedInstanceConfigResource, self::ZONE);
        } catch (ApiException $e) {
            $this->fail("update method failed" . $e->getMessage());
        }

        self::$zoneOperationsClient->wait($op->getName(), self::$projectId, self::ZONE);

        $instance = self::$instancesClient->get(
            self::$name,
            self::$projectId,
            self::ZONE
        );

        $this->assertEquals(true, $instance->getShieldedInstanceConfig()->getEnableSecureBoot());
    }

    /**
     * @depends testInsertInstance
     */
    public function testDeleteInstance(): void
    {
        $op = self::$instancesClient->delete(self::$name, self::$projectId, self::ZONE);
        self::$zoneOperationsClient->wait($op->getName(), self::$projectId, self::ZONE);

        try {
            self::$instancesClient->get(self::$name, self::$projectId, self::ZONE);
            $this->fail('The deleted instance still exists');
        } catch (ApiException $e) {
            $this->assertEquals(404, $e->getCode());
        }
    }

    public function testAPIError()
    {
        $this->expectException(ApiException::class);
        $this->expectExceptionMessage('was not found');
        $operationClient = new ZoneOperationsClient();
        $operationClient->get('123', self::$projectId, self::ZONE);
    }

    public function testValidationError()
    {
        $this->expectException(ValidationException::class);
        $this->expectExceptionMessage('Could not map bindings');
        $operationClient = new ZoneOperationsClient();
        $operationClient->get('123', self::$projectId, '');
    }
}
