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

namespace Google\Cloud\Core\Report;

/**
 * Simple MetadataProvider.
 */
class SimpleMetadataProvider implements MetadataProviderInterface
{
    /** @var array */
    private $monitoredResource;

    /** @var string */
    private $projectId;

    /** @var string */
    private $serviceId;

    /** @var string */
    private $versionId;

    /**
     * @param array $monitoredResource.
     * {@see https://cloud.google.com/logging/docs/reference/v2/rest/v2/MonitoredResource}
     */
    public function __construct(
        $monitoredResource = [],
        $projectId = '',
        $serviceId = '',
        $versionId = ''
    ) {
        $this->monitoredResource = $monitoredResource;
        $this->projectId = $projectId;
        $this->serviceId = $serviceId;
        $this->versionId = $versionId;
    }

    /**
     * Return an array representing MonitoredResource.
     * {@see https://cloud.google.com/logging/docs/reference/v2/rest/v2/MonitoredResource}
     *
     * @return array
     */
    public function getMonitoredResource()
    {
        return $this->monitoredResource;
    }

    /**
     * Return the project id.
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Return the service id.
     * @return string
     */
    public function getService()
    {
        return $this->serviceId;
    }

    /**
     * Return the version id.
     * @return string
     */
    public function getVersion()
    {
        return $this->versionId;
    }
}
