<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/spanner_database_admin.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for
 * [ListDatabaseOperations][google.spanner.admin.database.v1.DatabaseAdmin.ListDatabaseOperations].
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.ListDatabaseOperationsRequest</code>
 */
class ListDatabaseOperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The instance of the database operations.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * An expression that filters the list of returned operations.
     * A filter expression consists of a field name, a
     * comparison operator, and a value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the [Operation][google.longrunning.Operation]
     * are eligible for filtering:
     *   * `name` - The name of the long-running operation
     *   * `done` - False if the operation is in progress, else true.
     *   * `metadata.&#64;type` - the type of metadata. For example, the type string
     *      for
     *      [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata]
     *      is
     *      `type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata`.
     *   * `metadata.<field_name>` - any field in metadata.value.
     *   * `error` - Error associated with the long-running operation.
     *   * `response.&#64;type` - the type of response.
     *   * `response.<field_name>` - any field in response.value.
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic. However,
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `done:true` - The operation is complete.
     *   * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata) AND` \
     *     `(metadata.source_type:BACKUP) AND` \
     *     `(metadata.backup_info.backup:backup_howl) AND` \
     *     `(metadata.name:restored_howl) AND` \
     *     `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` \
     *     `(error:*)` - Return operations where:
     *     * The operation's metadata type is
     *     [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     *     * The database is restored from a backup.
     *     * The backup name contains "backup_howl".
     *     * The restored database's name contains "restored_howl".
     *     * The operation started before 2018-03-28T14:50:00Z.
     *     * The operation resulted in an error.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Number of operations to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabaseOperationsResponse.next_page_token]
     * from a previous
     * [ListDatabaseOperationsResponse][google.spanner.admin.database.v1.ListDatabaseOperationsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The instance of the database operations.
     *           Values are of the form `projects/<project>/instances/<instance>`.
     *     @type string $filter
     *           An expression that filters the list of returned operations.
     *           A filter expression consists of a field name, a
     *           comparison operator, and a value for filtering.
     *           The value must be a string, a number, or a boolean. The comparison operator
     *           must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     *           Colon `:` is the contains operator. Filter rules are not case sensitive.
     *           The following fields in the [Operation][google.longrunning.Operation]
     *           are eligible for filtering:
     *             * `name` - The name of the long-running operation
     *             * `done` - False if the operation is in progress, else true.
     *             * `metadata.&#64;type` - the type of metadata. For example, the type string
     *                for
     *                [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata]
     *                is
     *                `type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata`.
     *             * `metadata.<field_name>` - any field in metadata.value.
     *             * `error` - Error associated with the long-running operation.
     *             * `response.&#64;type` - the type of response.
     *             * `response.<field_name>` - any field in response.value.
     *           You can combine multiple expressions by enclosing each expression in
     *           parentheses. By default, expressions are combined with AND logic. However,
     *           you can specify AND, OR, and NOT logic explicitly.
     *           Here are a few examples:
     *             * `done:true` - The operation is complete.
     *             * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata) AND` \
     *               `(metadata.source_type:BACKUP) AND` \
     *               `(metadata.backup_info.backup:backup_howl) AND` \
     *               `(metadata.name:restored_howl) AND` \
     *               `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` \
     *               `(error:*)` - Return operations where:
     *               * The operation's metadata type is
     *               [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     *               * The database is restored from a backup.
     *               * The backup name contains "backup_howl".
     *               * The restored database's name contains "restored_howl".
     *               * The operation started before 2018-03-28T14:50:00Z.
     *               * The operation resulted in an error.
     *     @type int $page_size
     *           Number of operations to be returned in the response. If 0 or
     *           less, defaults to the server's maximum allowed page size.
     *     @type string $page_token
     *           If non-empty, `page_token` should contain a
     *           [next_page_token][google.spanner.admin.database.v1.ListDatabaseOperationsResponse.next_page_token]
     *           from a previous
     *           [ListDatabaseOperationsResponse][google.spanner.admin.database.v1.ListDatabaseOperationsResponse]
     *           to the same `parent` and with the same `filter`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\SpannerDatabaseAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The instance of the database operations.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The instance of the database operations.
     * Values are of the form `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * An expression that filters the list of returned operations.
     * A filter expression consists of a field name, a
     * comparison operator, and a value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the [Operation][google.longrunning.Operation]
     * are eligible for filtering:
     *   * `name` - The name of the long-running operation
     *   * `done` - False if the operation is in progress, else true.
     *   * `metadata.&#64;type` - the type of metadata. For example, the type string
     *      for
     *      [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata]
     *      is
     *      `type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata`.
     *   * `metadata.<field_name>` - any field in metadata.value.
     *   * `error` - Error associated with the long-running operation.
     *   * `response.&#64;type` - the type of response.
     *   * `response.<field_name>` - any field in response.value.
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic. However,
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `done:true` - The operation is complete.
     *   * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata) AND` \
     *     `(metadata.source_type:BACKUP) AND` \
     *     `(metadata.backup_info.backup:backup_howl) AND` \
     *     `(metadata.name:restored_howl) AND` \
     *     `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` \
     *     `(error:*)` - Return operations where:
     *     * The operation's metadata type is
     *     [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     *     * The database is restored from a backup.
     *     * The backup name contains "backup_howl".
     *     * The restored database's name contains "restored_howl".
     *     * The operation started before 2018-03-28T14:50:00Z.
     *     * The operation resulted in an error.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * An expression that filters the list of returned operations.
     * A filter expression consists of a field name, a
     * comparison operator, and a value for filtering.
     * The value must be a string, a number, or a boolean. The comparison operator
     * must be one of: `<`, `>`, `<=`, `>=`, `!=`, `=`, or `:`.
     * Colon `:` is the contains operator. Filter rules are not case sensitive.
     * The following fields in the [Operation][google.longrunning.Operation]
     * are eligible for filtering:
     *   * `name` - The name of the long-running operation
     *   * `done` - False if the operation is in progress, else true.
     *   * `metadata.&#64;type` - the type of metadata. For example, the type string
     *      for
     *      [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata]
     *      is
     *      `type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata`.
     *   * `metadata.<field_name>` - any field in metadata.value.
     *   * `error` - Error associated with the long-running operation.
     *   * `response.&#64;type` - the type of response.
     *   * `response.<field_name>` - any field in response.value.
     * You can combine multiple expressions by enclosing each expression in
     * parentheses. By default, expressions are combined with AND logic. However,
     * you can specify AND, OR, and NOT logic explicitly.
     * Here are a few examples:
     *   * `done:true` - The operation is complete.
     *   * `(metadata.&#64;type=type.googleapis.com/google.spanner.admin.database.v1.RestoreDatabaseMetadata) AND` \
     *     `(metadata.source_type:BACKUP) AND` \
     *     `(metadata.backup_info.backup:backup_howl) AND` \
     *     `(metadata.name:restored_howl) AND` \
     *     `(metadata.progress.start_time < \"2018-03-28T14:50:00Z\") AND` \
     *     `(error:*)` - Return operations where:
     *     * The operation's metadata type is
     *     [RestoreDatabaseMetadata][google.spanner.admin.database.v1.RestoreDatabaseMetadata].
     *     * The database is restored from a backup.
     *     * The backup name contains "backup_howl".
     *     * The restored database's name contains "restored_howl".
     *     * The operation started before 2018-03-28T14:50:00Z.
     *     * The operation resulted in an error.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Number of operations to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of operations to be returned in the response. If 0 or
     * less, defaults to the server's maximum allowed page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabaseOperationsResponse.next_page_token]
     * from a previous
     * [ListDatabaseOperationsResponse][google.spanner.admin.database.v1.ListDatabaseOperationsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * If non-empty, `page_token` should contain a
     * [next_page_token][google.spanner.admin.database.v1.ListDatabaseOperationsResponse.next_page_token]
     * from a previous
     * [ListDatabaseOperationsResponse][google.spanner.admin.database.v1.ListDatabaseOperationsResponse]
     * to the same `parent` and with the same `filter`.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

