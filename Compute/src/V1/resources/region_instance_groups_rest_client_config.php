<?php

return [
    'interfaces' => [
        'google.cloud.compute.v1.RegionInstanceGroups' => [
            'Get' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/regions/{region}/instanceGroups/{instance_group}',
                'placeholders' => [
                    'instance_group' => [
                        'getters' => [
                            'getInstanceGroup',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'region' => [
                        'getters' => [
                            'getRegion',
                        ],
                    ],
                ],
            ],
            'List' => [
                'method' => 'get',
                'uriTemplate' => '/compute/v1/projects/{project}/regions/{region}/instanceGroups',
                'placeholders' => [
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'region' => [
                        'getters' => [
                            'getRegion',
                        ],
                    ],
                ],
            ],
            'ListInstances' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/regions/{region}/instanceGroups/{instance_group}/listInstances',
                'body' => 'region_instance_groups_list_instances_request_resource',
                'placeholders' => [
                    'instance_group' => [
                        'getters' => [
                            'getInstanceGroup',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'region' => [
                        'getters' => [
                            'getRegion',
                        ],
                    ],
                ],
            ],
            'SetNamedPorts' => [
                'method' => 'post',
                'uriTemplate' => '/compute/v1/projects/{project}/regions/{region}/instanceGroups/{instance_group}/setNamedPorts',
                'body' => 'region_instance_groups_set_named_ports_request_resource',
                'placeholders' => [
                    'instance_group' => [
                        'getters' => [
                            'getInstanceGroup',
                        ],
                    ],
                    'project' => [
                        'getters' => [
                            'getProject',
                        ],
                    ],
                    'region' => [
                        'getters' => [
                            'getRegion',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
