<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Describes a sink used to export log entries to one of the following
 * destinations in any project: a Cloud Storage bucket, a BigQuery dataset, or a
 * Cloud Pub/Sub topic.  A logs filter controls which log entries are
 * exported. The sink must be created within a project, organization, billing
 * account, or folder.
 * </pre>
 *
 * Protobuf type <code>Google\Logging\V2\LogSink</code>
 */
class LogSink extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Required. The client-assigned sink identifier, unique within the
     * project. Example: `"my-syslog-errors-to-pubsub"`.  Sink identifiers are
     * limited to 100 characters and can include only the following characters:
     * upper and lower-case alphanumeric characters, underscores, hyphens, and
     * periods.
     * </pre>
     *
     * <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * <pre>
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must
     * have permission to write to the destination or else the log
     * entries are not exported.  For more information, see
     * [Exporting Logs With Sinks](/logging/docs/api/tasks/exporting-logs).
     * </pre>
     *
     * <code>string destination = 3;</code>
     */
    private $destination = '';
    /**
     * <pre>
     * Optional.
     * An [advanced logs filter](/logging/docs/view/advanced_filters).  The only
     * exported log entries are those that are in the resource owning the sink and
     * that match the filter. The filter must use the log entry format specified
     * by the `output_version_format` parameter.  For example, in the v2 format:
     *     logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR
     * </pre>
     *
     * <code>string filter = 5;</code>
     */
    private $filter = '';
    /**
     * <pre>
     * Optional. The log entry format to use for this sink's exported log
     * entries.  The v2 format is used by default.
     * **The v1 format is deprecated** and should be used only as part of a
     * migration effort to v2.
     * See [Migration to the v2 API](/logging/docs/api/v2/migration-to-v2).
     * </pre>
     *
     * <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6;</code>
     */
    private $output_version_format = 0;
    /**
     * <pre>
     * Output only. An IAM identity&mdash;a service account or group&mdash;under
     * which Stackdriver Logging writes the exported log entries to the sink's
     * destination.  This field is set by
     * [sinks.create](/logging/docs/api/reference/rest/v2/projects.sinks/create)
     * and
     * [sinks.update](/logging/docs/api/reference/rest/v2/projects.sinks/update),
     * based on the setting of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information,
     * see [Granting access for a
     * resource](/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * </pre>
     *
     * <code>string writer_identity = 8;</code>
     */
    private $writer_identity = '';
    /**
     * <pre>
     * Optional. This field applies only to sinks owned by organizations and
     * folders. If the field is false, the default, only the logs owned by the
     * sink's parent resource are available for export. If the field is true, then
     * logs from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression. For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent. To only export entries
     * from certain child projects, filter on the project part of the log name:
     *     logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *     resource.type=gce_instance
     * </pre>
     *
     * <code>bool include_children = 9;</code>
     */
    private $include_children = false;
    /**
     * <pre>
     * Optional. The time at which this sink will begin exporting log entries.
     * Log entries are exported only if their timestamp is not earlier than the
     * start time.  The default value of this field is the time the sink is
     * created or updated.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 10;</code>
     */
    private $start_time = null;
    /**
     * <pre>
     * Optional. The time at which this sink will stop exporting log entries.  Log
     * entries are exported only if their timestamp is earlier than the end time.
     * If this field is not supplied, there is no end time.  If both a start time
     * and an end time are provided, then the end time must be later than the
     * start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 11;</code>
     */
    private $end_time = null;

    public function __construct() {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Required. The client-assigned sink identifier, unique within the
     * project. Example: `"my-syslog-errors-to-pubsub"`.  Sink identifiers are
     * limited to 100 characters and can include only the following characters:
     * upper and lower-case alphanumeric characters, underscores, hyphens, and
     * periods.
     * </pre>
     *
     * <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <pre>
     * Required. The client-assigned sink identifier, unique within the
     * project. Example: `"my-syslog-errors-to-pubsub"`.  Sink identifiers are
     * limited to 100 characters and can include only the following characters:
     * upper and lower-case alphanumeric characters, underscores, hyphens, and
     * periods.
     * </pre>
     *
     * <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * <pre>
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must
     * have permission to write to the destination or else the log
     * entries are not exported.  For more information, see
     * [Exporting Logs With Sinks](/logging/docs/api/tasks/exporting-logs).
     * </pre>
     *
     * <code>string destination = 3;</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * <pre>
     * Required. The export destination:
     *     "storage.googleapis.com/[GCS_BUCKET]"
     *     "bigquery.googleapis.com/projects/[PROJECT_ID]/datasets/[DATASET]"
     *     "pubsub.googleapis.com/projects/[PROJECT_ID]/topics/[TOPIC_ID]"
     * The sink's `writer_identity`, set when the sink is created, must
     * have permission to write to the destination or else the log
     * entries are not exported.  For more information, see
     * [Exporting Logs With Sinks](/logging/docs/api/tasks/exporting-logs).
     * </pre>
     *
     * <code>string destination = 3;</code>
     * @param string $var
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional.
     * An [advanced logs filter](/logging/docs/view/advanced_filters).  The only
     * exported log entries are those that are in the resource owning the sink and
     * that match the filter. The filter must use the log entry format specified
     * by the `output_version_format` parameter.  For example, in the v2 format:
     *     logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR
     * </pre>
     *
     * <code>string filter = 5;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * <pre>
     * Optional.
     * An [advanced logs filter](/logging/docs/view/advanced_filters).  The only
     * exported log entries are those that are in the resource owning the sink and
     * that match the filter. The filter must use the log entry format specified
     * by the `output_version_format` parameter.  For example, in the v2 format:
     *     logName="projects/[PROJECT_ID]/logs/[LOG_ID]" AND severity>=ERROR
     * </pre>
     *
     * <code>string filter = 5;</code>
     * @param string $var
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional. The log entry format to use for this sink's exported log
     * entries.  The v2 format is used by default.
     * **The v1 format is deprecated** and should be used only as part of a
     * migration effort to v2.
     * See [Migration to the v2 API](/logging/docs/api/v2/migration-to-v2).
     * </pre>
     *
     * <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6;</code>
     * @return int
     */
    public function getOutputVersionFormat()
    {
        return $this->output_version_format;
    }

    /**
     * <pre>
     * Optional. The log entry format to use for this sink's exported log
     * entries.  The v2 format is used by default.
     * **The v1 format is deprecated** and should be used only as part of a
     * migration effort to v2.
     * See [Migration to the v2 API](/logging/docs/api/v2/migration-to-v2).
     * </pre>
     *
     * <code>.google.logging.v2.LogSink.VersionFormat output_version_format = 6;</code>
     * @param int $var
     */
    public function setOutputVersionFormat($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Logging\V2\LogSink_VersionFormat::class);
        $this->output_version_format = $var;

        return $this;
    }

    /**
     * <pre>
     * Output only. An IAM identity&mdash;a service account or group&mdash;under
     * which Stackdriver Logging writes the exported log entries to the sink's
     * destination.  This field is set by
     * [sinks.create](/logging/docs/api/reference/rest/v2/projects.sinks/create)
     * and
     * [sinks.update](/logging/docs/api/reference/rest/v2/projects.sinks/update),
     * based on the setting of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information,
     * see [Granting access for a
     * resource](/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * </pre>
     *
     * <code>string writer_identity = 8;</code>
     * @return string
     */
    public function getWriterIdentity()
    {
        return $this->writer_identity;
    }

    /**
     * <pre>
     * Output only. An IAM identity&mdash;a service account or group&mdash;under
     * which Stackdriver Logging writes the exported log entries to the sink's
     * destination.  This field is set by
     * [sinks.create](/logging/docs/api/reference/rest/v2/projects.sinks/create)
     * and
     * [sinks.update](/logging/docs/api/reference/rest/v2/projects.sinks/update),
     * based on the setting of `unique_writer_identity` in those methods.
     * Until you grant this identity write-access to the destination, log entry
     * exports from this sink will fail. For more information,
     * see [Granting access for a
     * resource](/iam/docs/granting-roles-to-service-accounts#granting_access_to_a_service_account_for_a_resource).
     * Consult the destination service's documentation to determine the
     * appropriate IAM roles to assign to the identity.
     * </pre>
     *
     * <code>string writer_identity = 8;</code>
     * @param string $var
     */
    public function setWriterIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->writer_identity = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional. This field applies only to sinks owned by organizations and
     * folders. If the field is false, the default, only the logs owned by the
     * sink's parent resource are available for export. If the field is true, then
     * logs from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression. For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent. To only export entries
     * from certain child projects, filter on the project part of the log name:
     *     logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *     resource.type=gce_instance
     * </pre>
     *
     * <code>bool include_children = 9;</code>
     * @return bool
     */
    public function getIncludeChildren()
    {
        return $this->include_children;
    }

    /**
     * <pre>
     * Optional. This field applies only to sinks owned by organizations and
     * folders. If the field is false, the default, only the logs owned by the
     * sink's parent resource are available for export. If the field is true, then
     * logs from all the projects, folders, and billing accounts contained in the
     * sink's parent resource are also available for export. Whether a particular
     * log entry from the children is exported depends on the sink's filter
     * expression. For example, if this field is true, then the filter
     * `resource.type=gce_instance` would export all Compute Engine VM instance
     * log entries from all projects in the sink's parent. To only export entries
     * from certain child projects, filter on the project part of the log name:
     *     logName:("projects/test-project1/" OR "projects/test-project2/") AND
     *     resource.type=gce_instance
     * </pre>
     *
     * <code>bool include_children = 9;</code>
     * @param bool $var
     */
    public function setIncludeChildren($var)
    {
        GPBUtil::checkBool($var);
        $this->include_children = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional. The time at which this sink will begin exporting log entries.
     * Log entries are exported only if their timestamp is not earlier than the
     * start time.  The default value of this field is the time the sink is
     * created or updated.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 10;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * <pre>
     * Optional. The time at which this sink will begin exporting log entries.
     * Log entries are exported only if their timestamp is not earlier than the
     * start time.  The default value of this field is the time the sink is
     * created or updated.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp start_time = 10;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * <pre>
     * Optional. The time at which this sink will stop exporting log entries.  Log
     * entries are exported only if their timestamp is earlier than the end time.
     * If this field is not supplied, there is no end time.  If both a start time
     * and an end time are provided, then the end time must be later than the
     * start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 11;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * <pre>
     * Optional. The time at which this sink will stop exporting log entries.  Log
     * entries are exported only if their timestamp is earlier than the end time.
     * If this field is not supplied, there is no end time.  If both a start time
     * and an end time are provided, then the end time must be later than the
     * start time.
     * </pre>
     *
     * <code>.google.protobuf.Timestamp end_time = 11;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

