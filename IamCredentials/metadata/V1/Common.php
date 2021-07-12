<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/credentials/v1/common.proto

namespace GPBMetadata\Google\Iam\Credentials\V1;

class Common
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
&google/iam/credentials/v1/common.protogoogle.iam.credentials.v1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/timestamp.proto"�
GenerateAccessTokenRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount
	delegates (	
scope (	B�A+
lifetime (2.google.protobuf.Duration"d
GenerateAccessTokenResponse
access_token (	/
expire_time (2.google.protobuf.Timestamp"s
SignBlobRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount
	delegates (	
payload (B�A"7
SignBlobResponse
key_id (	
signed_blob ("r
SignJwtRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount
	delegates (	
payload (	B�A"5
SignJwtResponse
key_id (	

signed_jwt (	"�
GenerateIdTokenRequest7
name (	B)�A�A#
!iam.googleapis.com/ServiceAccount
	delegates (	
audience (	B�A
include_email ("(
GenerateIdTokenResponse
token (	B�
#com.google.cloud.iam.credentials.v1BIAMCredentialsCommonProtoPZDgoogle.golang.org/genproto/googleapis/iam/credentials/v1;credentials��Google.Cloud.Iam.Credentials.V1�AY
!iam.googleapis.com/ServiceAccount4projects/{project}/serviceAccounts/{service_account}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

