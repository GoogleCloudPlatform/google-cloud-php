<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/notification_message.proto

namespace GPBMetadata\Google\Cloud\Securitycenter\V1;

class NotificationMessage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Finding::initOnce();
        \GPBMetadata\Google\Cloud\Securitycenter\V1\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/cloud/securitycenter/v1/notification_message.protogoogle.cloud.securitycenter.v1,google/cloud/securitycenter/v1/finding.proto-google/cloud/securitycenter/v1/resource.proto"�
NotificationMessage 
notification_config_name (	:
finding (2\'.google.cloud.securitycenter.v1.FindingH :
resource (2(.google.cloud.securitycenter.v1.ResourceB
eventB�
"com.google.cloud.securitycenter.v1BNotificationMessageProtoPZLgoogle.golang.org/genproto/googleapis/cloud/securitycenter/v1;securitycenter�Google.Cloud.SecurityCenter.V1�Google\\Cloud\\SecurityCenter\\V1�!Google::Cloud::SecurityCenter::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

