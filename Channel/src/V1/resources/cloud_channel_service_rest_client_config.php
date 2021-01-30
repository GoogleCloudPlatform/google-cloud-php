<?php

return [
    'interfaces' => [
        'google.cloud.channel.v1.CloudChannelService' => [
            'ListCustomers' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=accounts/*}/customers',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetCustomer' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CheckCloudIdentityAccountsExist' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*}:checkCloudIdentityAccountsExist',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'CreateCustomer' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*}/customers',
                'body' => 'customer',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateCustomer' => [
                'method' => 'patch',
                'uriTemplate' => '/v1/{customer.name=accounts/*/customers/*}',
                'body' => 'customer',
                'placeholders' => [
                    'customer.name' => [
                        'getters' => [
                            'getCustomer',
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteCustomer' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ProvisionCloudIdentity' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{customer=accounts/*/customers/*}:provisionCloudIdentity',
                'body' => '*',
                'placeholders' => [
                    'customer' => [
                        'getters' => [
                            'getCustomer',
                        ],
                    ],
                ],
            ],
            'ListEntitlements' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=accounts/*/customers/*}/entitlements',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListTransferableSkus' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*}:listTransferableSkus',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListTransferableOffers' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*}:listTransferableOffers',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetEntitlement' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateEntitlement' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*/customers/*}/entitlements',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ChangeParameters' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:changeParameters',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ChangeRenewalSettings' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:changeRenewalSettings',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ChangeOffer' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:changeOffer',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'StartPaidService' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:startPaidService',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'SuspendEntitlement' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:suspend',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CancelEntitlement' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:cancel',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ActivateEntitlement' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=accounts/*/customers/*/entitlements/*}:activate',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'TransferEntitlements' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*/customers/*}:transferEntitlements',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'TransferEntitlementsToGoogle' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*/customers/*}:transferEntitlementsToGoogle',
                'body' => '*',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListChannelPartnerLinks' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=accounts/*}/channelPartnerLinks',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'GetChannelPartnerLink' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=accounts/*/channelPartnerLinks/*}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'CreateChannelPartnerLink' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{parent=accounts/*}/channelPartnerLinks',
                'body' => 'channel_partner_link',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'UpdateChannelPartnerLink' => [
                'method' => 'patch',
                'uriTemplate' => '/v1/{name=accounts/*/channelPartnerLinks/*}',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListProducts' => [
                'method' => 'get',
                'uriTemplate' => '/v1/products',
            ],
            'ListSkus' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=products/*}/skus',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListOffers' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{parent=accounts/*}/offers',
                'placeholders' => [
                    'parent' => [
                        'getters' => [
                            'getParent',
                        ],
                    ],
                ],
            ],
            'ListPurchasableSkus' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{customer=accounts/*/customers/*}:listPurchasableSkus',
                'placeholders' => [
                    'customer' => [
                        'getters' => [
                            'getCustomer',
                        ],
                    ],
                ],
            ],
            'ListPurchasableOffers' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{customer=accounts/*/customers/*}:listPurchasableOffers',
                'placeholders' => [
                    'customer' => [
                        'getters' => [
                            'getCustomer',
                        ],
                    ],
                ],
            ],
        ],
        'google.longrunning.Operations' => [
            'CancelOperation' => [
                'method' => 'post',
                'uriTemplate' => '/v1/{name=operations/**}:cancel',
                'body' => '*',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'DeleteOperation' => [
                'method' => 'delete',
                'uriTemplate' => '/v1/{name=operations/**}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'GetOperation' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=operations/**}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
            'ListOperations' => [
                'method' => 'get',
                'uriTemplate' => '/v1/{name=operations}',
                'placeholders' => [
                    'name' => [
                        'getters' => [
                            'getName',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
