<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/storage/v1/storage.proto

namespace GPBMetadata\Google\Cloud\Bigquery\Storage\V1;

class Storage
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Arrow::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Avro::initOnce();
        \GPBMetadata\Google\Cloud\Bigquery\Storage\V1\Stream::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/bigquery/storage/v1/storage.proto google.cloud.bigquery.storage.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto,google/cloud/bigquery/storage/v1/arrow.proto+google/cloud/bigquery/storage/v1/avro.proto-google/cloud/bigquery/storage/v1/stream.proto"�
CreateReadSessionRequestC
parent (	B3�A�A-
+cloudresourcemanager.googleapis.com/ProjectH
read_session (2-.google.cloud.bigquery.storage.v1.ReadSessionB�A
max_stream_count ("i
ReadRowsRequestF
read_stream (	B1�A�A+
)bigquerystorage.googleapis.com/ReadStream
offset (")
ThrottleState
throttle_percent ("�
StreamStatsH
progress (26.google.cloud.bigquery.storage.v1.StreamStats.Progress>
Progress
at_response_start (
at_response_end ("�
ReadRowsResponse?
	avro_rows (2*.google.cloud.bigquery.storage.v1.AvroRowsH P
arrow_record_batch (22.google.cloud.bigquery.storage.v1.ArrowRecordBatchH 
	row_count (<
stats (2-.google.cloud.bigquery.storage.v1.StreamStatsG
throttle_state (2/.google.cloud.bigquery.storage.v1.ThrottleStateB
rows"k
SplitReadStreamRequest?
name (	B1�A�A+
)bigquerystorage.googleapis.com/ReadStream
fraction ("�
SplitReadStreamResponseD
primary_stream (2,.google.cloud.bigquery.storage.v1.ReadStreamF
remainder_stream (2,.google.cloud.bigquery.storage.v1.ReadStream2�
BigQueryRead�
CreateReadSession:.google.cloud.bigquery.storage.v1.CreateReadSessionRequest-.google.cloud.bigquery.storage.v1.ReadSession"i���<"7/v1/{read_session.table=projects/*/datasets/*/tables/*}:*�A$parent,read_session,max_stream_count�
ReadRows1.google.cloud.bigquery.storage.v1.ReadRowsRequest2.google.cloud.bigquery.storage.v1.ReadRowsResponse"Z���?=/v1/{read_stream=projects/*/locations/*/sessions/*/streams/*}�Aread_stream,offset0�
SplitReadStream8.google.cloud.bigquery.storage.v1.SplitReadStreamRequest9.google.cloud.bigquery.storage.v1.SplitReadStreamResponse">���86/v1/{name=projects/*/locations/*/sessions/*/streams/*}��Abigquerystorage.googleapis.com�A�https://www.googleapis.com/auth/bigquery,https://www.googleapis.com/auth/bigquery.readonly,https://www.googleapis.com/auth/cloud-platformB�
$com.google.cloud.bigquery.storage.v1BStorageProtoPZGgoogle.golang.org/genproto/googleapis/cloud/bigquery/storage/v1;storage� Google.Cloud.BigQuery.Storage.V1� Google\\Cloud\\BigQuery\\Storage\\V1�AU
bigquery.googleapis.com/Table4projects/{project}/datasets/{dataset}/tables/{table}bproto3'
        , true);

        static::$is_initialized = true;
    }
}

