<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Subnetwork resource.
 * A subnetwork (also known as a subnet) is a logical partition of a Virtual Private Cloud network with one primary IP range and zero or more secondary IP ranges. For more information, read  Virtual Private Cloud (VPC) Network. (== resource_for {$api_version}.subnetworks ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Subnetwork</code>
 */
class Subnetwork extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * An optional description of this resource. Provide this property when you create the resource. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     */
    private $description = null;
    /**
     * Whether to enable flow logging for this subnetwork. If this field is not explicitly set, it will not appear in get listings. If not set the default behavior is to disable flow logging. This field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>bool enable_flow_logs = 151544420;</code>
     */
    private $enable_flow_logs = null;
    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a Subnetwork. An up-to-date fingerprint must be provided in order to update the Subnetwork, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve a Subnetwork.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     */
    private $fingerprint = null;
    /**
     * [Output Only] The gateway address for default routes to reach destination addresses outside this subnetwork.
     *
     * Generated from protobuf field <code>string gateway_address = 459867385;</code>
     */
    private $gateway_address = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = null;
    /**
     * The range of internal addresses that are owned by this subnetwork. Provide this property when you create the subnetwork. For example, 10.0.0.0/8 or 100.64.0.0/10. Ranges must be unique and non-overlapping within a network. Only IPv4 is supported. This field is set at resource creation time. The range can be any range listed in the Valid ranges list. The range can be expanded after creation using expandIpCidrRange.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     */
    private $ip_cidr_range = null;
    /**
     * [Output Only] The range of internal IPv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ipv6_cidr_range = 273141258;</code>
     */
    private $ipv6_cidr_range = null;
    /**
     * [Output Only] Type of the resource. Always compute#subnetwork for Subnetwork resources.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * This field denotes the VPC flow logging options for this subnetwork. If logging is enabled, logs are exported to Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SubnetworkLogConfig log_config = 351299741;</code>
     */
    private $log_config = null;
    /**
     * The name of the resource, provided by the client when initially creating the resource. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = null;
    /**
     * The URL of the network to which this subnetwork belongs, provided by the client when initially creating the subnetwork. Only networks that are in the distributed mode can have subnetworks. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     */
    private $network = null;
    /**
     * Whether the VMs in this subnet can access Google services without assigned external IP addresses. This field can be both set at resource creation time and updated using setPrivateIpGoogleAccess.
     *
     * Generated from protobuf field <code>bool private_ip_google_access = 421491790;</code>
     */
    private $private_ip_google_access = null;
    /**
     * The private IPv6 google access type for the VMs in this subnet. This is an expanded field of enablePrivateV6Access. If both fields are set, privateIpv6GoogleAccess will take priority.
     * This field can be both set at resource creation time and updated using patch.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.PrivateIpv6GoogleAccess private_ipv6_google_access = 48277006;</code>
     */
    private $private_ipv6_google_access = null;
    /**
     * The purpose of the resource. This field can be either PRIVATE_RFC_1918 or INTERNAL_HTTPS_LOAD_BALANCER. A subnetwork with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a user-created subnetwork that is reserved for Internal HTTP(S) Load Balancing. If unspecified, the purpose defaults to PRIVATE_RFC_1918. The enableFlowLogs field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Purpose purpose = 316407070;</code>
     */
    private $purpose = null;
    /**
     * URL of the region where the Subnetwork resides. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = null;
    /**
     * The role of subnetwork. Currently, this field is only used when purpose = INTERNAL_HTTPS_LOAD_BALANCER. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Internal HTTP(S) Load Balancing. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Role role = 3506294;</code>
     */
    private $role = null;
    /**
     * An array of configurations for secondary IP ranges for VM instances contained in this subnetwork. The primary IP of such VM must belong to the primary ipCidrRange of the subnetwork. The alias IPs may belong to either primary or secondary ranges. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     */
    private $secondary_ip_ranges;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] The state of the subnetwork, which can be one of the following values: READY: Subnetwork is created and ready to use DRAINING: only applicable to subnetworks that have the purpose set to INTERNAL_HTTPS_LOAD_BALANCER and indicates that connections to the load balancer are being drained. A subnetwork that is draining cannot be used or modified until it reaches a status of READY
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.State state = 109757585;</code>
     */
    private $state = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource. This field can be set only at resource creation time.
     *     @type bool $enable_flow_logs
     *           Whether to enable flow logging for this subnetwork. If this field is not explicitly set, it will not appear in get listings. If not set the default behavior is to disable flow logging. This field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *     @type string $fingerprint
     *           Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a Subnetwork. An up-to-date fingerprint must be provided in order to update the Subnetwork, otherwise the request will fail with error 412 conditionNotMet.
     *           To see the latest fingerprint, make a get() request to retrieve a Subnetwork.
     *     @type string $gateway_address
     *           [Output Only] The gateway address for default routes to reach destination addresses outside this subnetwork.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $ip_cidr_range
     *           The range of internal addresses that are owned by this subnetwork. Provide this property when you create the subnetwork. For example, 10.0.0.0/8 or 100.64.0.0/10. Ranges must be unique and non-overlapping within a network. Only IPv4 is supported. This field is set at resource creation time. The range can be any range listed in the Valid ranges list. The range can be expanded after creation using expandIpCidrRange.
     *     @type string $ipv6_cidr_range
     *           [Output Only] The range of internal IPv6 addresses that are owned by this subnetwork.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#subnetwork for Subnetwork resources.
     *     @type \Google\Cloud\Compute\V1\SubnetworkLogConfig $log_config
     *           This field denotes the VPC flow logging options for this subnetwork. If logging is enabled, logs are exported to Cloud Logging.
     *     @type string $name
     *           The name of the resource, provided by the client when initially creating the resource. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type string $network
     *           The URL of the network to which this subnetwork belongs, provided by the client when initially creating the subnetwork. Only networks that are in the distributed mode can have subnetworks. This field can be set only at resource creation time.
     *     @type bool $private_ip_google_access
     *           Whether the VMs in this subnet can access Google services without assigned external IP addresses. This field can be both set at resource creation time and updated using setPrivateIpGoogleAccess.
     *     @type int $private_ipv6_google_access
     *           The private IPv6 google access type for the VMs in this subnet. This is an expanded field of enablePrivateV6Access. If both fields are set, privateIpv6GoogleAccess will take priority.
     *           This field can be both set at resource creation time and updated using patch.
     *     @type int $purpose
     *           The purpose of the resource. This field can be either PRIVATE_RFC_1918 or INTERNAL_HTTPS_LOAD_BALANCER. A subnetwork with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a user-created subnetwork that is reserved for Internal HTTP(S) Load Balancing. If unspecified, the purpose defaults to PRIVATE_RFC_1918. The enableFlowLogs field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *     @type string $region
     *           URL of the region where the Subnetwork resides. This field can be set only at resource creation time.
     *     @type int $role
     *           The role of subnetwork. Currently, this field is only used when purpose = INTERNAL_HTTPS_LOAD_BALANCER. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Internal HTTP(S) Load Balancing. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     *     @type \Google\Cloud\Compute\V1\SubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $secondary_ip_ranges
     *           An array of configurations for secondary IP ranges for VM instances contained in this subnetwork. The primary IP of such VM must belong to the primary ipCidrRange of the subnetwork. The alias IPs may belong to either primary or secondary ranges. This field can be updated with a patch request.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type int $state
     *           [Output Only] The state of the subnetwork, which can be one of the following values: READY: Subnetwork is created and ready to use DRAINING: only applicable to subnetworks that have the purpose set to INTERNAL_HTTPS_LOAD_BALANCER and indicates that connections to the load balancer are being drained. A subnetwork that is draining cannot be used or modified until it reaches a status of READY
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Whether to enable flow logging for this subnetwork. If this field is not explicitly set, it will not appear in get listings. If not set the default behavior is to disable flow logging. This field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>bool enable_flow_logs = 151544420;</code>
     * @return bool
     */
    public function getEnableFlowLogs()
    {
        return isset($this->enable_flow_logs) ? $this->enable_flow_logs : false;
    }

    public function hasEnableFlowLogs()
    {
        return isset($this->enable_flow_logs);
    }

    public function clearEnableFlowLogs()
    {
        unset($this->enable_flow_logs);
    }

    /**
     * Whether to enable flow logging for this subnetwork. If this field is not explicitly set, it will not appear in get listings. If not set the default behavior is to disable flow logging. This field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>bool enable_flow_logs = 151544420;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableFlowLogs($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_flow_logs = $var;

        return $this;
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a Subnetwork. An up-to-date fingerprint must be provided in order to update the Subnetwork, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve a Subnetwork.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @return string
     */
    public function getFingerprint()
    {
        return isset($this->fingerprint) ? $this->fingerprint : '';
    }

    public function hasFingerprint()
    {
        return isset($this->fingerprint);
    }

    public function clearFingerprint()
    {
        unset($this->fingerprint);
    }

    /**
     * Fingerprint of this resource. A hash of the contents stored in this object. This field is used in optimistic locking. This field will be ignored when inserting a Subnetwork. An up-to-date fingerprint must be provided in order to update the Subnetwork, otherwise the request will fail with error 412 conditionNotMet.
     * To see the latest fingerprint, make a get() request to retrieve a Subnetwork.
     *
     * Generated from protobuf field <code>string fingerprint = 234678500;</code>
     * @param string $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * [Output Only] The gateway address for default routes to reach destination addresses outside this subnetwork.
     *
     * Generated from protobuf field <code>string gateway_address = 459867385;</code>
     * @return string
     */
    public function getGatewayAddress()
    {
        return isset($this->gateway_address) ? $this->gateway_address : '';
    }

    public function hasGatewayAddress()
    {
        return isset($this->gateway_address);
    }

    public function clearGatewayAddress()
    {
        unset($this->gateway_address);
    }

    /**
     * [Output Only] The gateway address for default routes to reach destination addresses outside this subnetwork.
     *
     * Generated from protobuf field <code>string gateway_address = 459867385;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_address = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : '';
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The range of internal addresses that are owned by this subnetwork. Provide this property when you create the subnetwork. For example, 10.0.0.0/8 or 100.64.0.0/10. Ranges must be unique and non-overlapping within a network. Only IPv4 is supported. This field is set at resource creation time. The range can be any range listed in the Valid ranges list. The range can be expanded after creation using expandIpCidrRange.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     * @return string
     */
    public function getIpCidrRange()
    {
        return isset($this->ip_cidr_range) ? $this->ip_cidr_range : '';
    }

    public function hasIpCidrRange()
    {
        return isset($this->ip_cidr_range);
    }

    public function clearIpCidrRange()
    {
        unset($this->ip_cidr_range);
    }

    /**
     * The range of internal addresses that are owned by this subnetwork. Provide this property when you create the subnetwork. For example, 10.0.0.0/8 or 100.64.0.0/10. Ranges must be unique and non-overlapping within a network. Only IPv4 is supported. This field is set at resource creation time. The range can be any range listed in the Valid ranges list. The range can be expanded after creation using expandIpCidrRange.
     *
     * Generated from protobuf field <code>string ip_cidr_range = 98117322;</code>
     * @param string $var
     * @return $this
     */
    public function setIpCidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ip_cidr_range = $var;

        return $this;
    }

    /**
     * [Output Only] The range of internal IPv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ipv6_cidr_range = 273141258;</code>
     * @return string
     */
    public function getIpv6CidrRange()
    {
        return isset($this->ipv6_cidr_range) ? $this->ipv6_cidr_range : '';
    }

    public function hasIpv6CidrRange()
    {
        return isset($this->ipv6_cidr_range);
    }

    public function clearIpv6CidrRange()
    {
        unset($this->ipv6_cidr_range);
    }

    /**
     * [Output Only] The range of internal IPv6 addresses that are owned by this subnetwork.
     *
     * Generated from protobuf field <code>string ipv6_cidr_range = 273141258;</code>
     * @param string $var
     * @return $this
     */
    public function setIpv6CidrRange($var)
    {
        GPBUtil::checkString($var, True);
        $this->ipv6_cidr_range = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#subnetwork for Subnetwork resources.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#subnetwork for Subnetwork resources.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * This field denotes the VPC flow logging options for this subnetwork. If logging is enabled, logs are exported to Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SubnetworkLogConfig log_config = 351299741;</code>
     * @return \Google\Cloud\Compute\V1\SubnetworkLogConfig|null
     */
    public function getLogConfig()
    {
        return isset($this->log_config) ? $this->log_config : null;
    }

    public function hasLogConfig()
    {
        return isset($this->log_config);
    }

    public function clearLogConfig()
    {
        unset($this->log_config);
    }

    /**
     * This field denotes the VPC flow logging options for this subnetwork. If logging is enabled, logs are exported to Cloud Logging.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.SubnetworkLogConfig log_config = 351299741;</code>
     * @param \Google\Cloud\Compute\V1\SubnetworkLogConfig $var
     * @return $this
     */
    public function setLogConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\SubnetworkLogConfig::class);
        $this->log_config = $var;

        return $this;
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the resource, provided by the client when initially creating the resource. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The URL of the network to which this subnetwork belongs, provided by the client when initially creating the subnetwork. Only networks that are in the distributed mode can have subnetworks. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @return string
     */
    public function getNetwork()
    {
        return isset($this->network) ? $this->network : '';
    }

    public function hasNetwork()
    {
        return isset($this->network);
    }

    public function clearNetwork()
    {
        unset($this->network);
    }

    /**
     * The URL of the network to which this subnetwork belongs, provided by the client when initially creating the subnetwork. Only networks that are in the distributed mode can have subnetworks. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string network = 232872494;</code>
     * @param string $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->network = $var;

        return $this;
    }

    /**
     * Whether the VMs in this subnet can access Google services without assigned external IP addresses. This field can be both set at resource creation time and updated using setPrivateIpGoogleAccess.
     *
     * Generated from protobuf field <code>bool private_ip_google_access = 421491790;</code>
     * @return bool
     */
    public function getPrivateIpGoogleAccess()
    {
        return isset($this->private_ip_google_access) ? $this->private_ip_google_access : false;
    }

    public function hasPrivateIpGoogleAccess()
    {
        return isset($this->private_ip_google_access);
    }

    public function clearPrivateIpGoogleAccess()
    {
        unset($this->private_ip_google_access);
    }

    /**
     * Whether the VMs in this subnet can access Google services without assigned external IP addresses. This field can be both set at resource creation time and updated using setPrivateIpGoogleAccess.
     *
     * Generated from protobuf field <code>bool private_ip_google_access = 421491790;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivateIpGoogleAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->private_ip_google_access = $var;

        return $this;
    }

    /**
     * The private IPv6 google access type for the VMs in this subnet. This is an expanded field of enablePrivateV6Access. If both fields are set, privateIpv6GoogleAccess will take priority.
     * This field can be both set at resource creation time and updated using patch.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.PrivateIpv6GoogleAccess private_ipv6_google_access = 48277006;</code>
     * @return int
     */
    public function getPrivateIpv6GoogleAccess()
    {
        return isset($this->private_ipv6_google_access) ? $this->private_ipv6_google_access : 0;
    }

    public function hasPrivateIpv6GoogleAccess()
    {
        return isset($this->private_ipv6_google_access);
    }

    public function clearPrivateIpv6GoogleAccess()
    {
        unset($this->private_ipv6_google_access);
    }

    /**
     * The private IPv6 google access type for the VMs in this subnet. This is an expanded field of enablePrivateV6Access. If both fields are set, privateIpv6GoogleAccess will take priority.
     * This field can be both set at resource creation time and updated using patch.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.PrivateIpv6GoogleAccess private_ipv6_google_access = 48277006;</code>
     * @param int $var
     * @return $this
     */
    public function setPrivateIpv6GoogleAccess($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Subnetwork\PrivateIpv6GoogleAccess::class);
        $this->private_ipv6_google_access = $var;

        return $this;
    }

    /**
     * The purpose of the resource. This field can be either PRIVATE_RFC_1918 or INTERNAL_HTTPS_LOAD_BALANCER. A subnetwork with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a user-created subnetwork that is reserved for Internal HTTP(S) Load Balancing. If unspecified, the purpose defaults to PRIVATE_RFC_1918. The enableFlowLogs field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Purpose purpose = 316407070;</code>
     * @return int
     */
    public function getPurpose()
    {
        return isset($this->purpose) ? $this->purpose : 0;
    }

    public function hasPurpose()
    {
        return isset($this->purpose);
    }

    public function clearPurpose()
    {
        unset($this->purpose);
    }

    /**
     * The purpose of the resource. This field can be either PRIVATE_RFC_1918 or INTERNAL_HTTPS_LOAD_BALANCER. A subnetwork with purpose set to INTERNAL_HTTPS_LOAD_BALANCER is a user-created subnetwork that is reserved for Internal HTTP(S) Load Balancing. If unspecified, the purpose defaults to PRIVATE_RFC_1918. The enableFlowLogs field isn't supported with the purpose field set to INTERNAL_HTTPS_LOAD_BALANCER.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Purpose purpose = 316407070;</code>
     * @param int $var
     * @return $this
     */
    public function setPurpose($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Subnetwork\Purpose::class);
        $this->purpose = $var;

        return $this;
    }

    /**
     * URL of the region where the Subnetwork resides. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * URL of the region where the Subnetwork resides. This field can be set only at resource creation time.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The role of subnetwork. Currently, this field is only used when purpose = INTERNAL_HTTPS_LOAD_BALANCER. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Internal HTTP(S) Load Balancing. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Role role = 3506294;</code>
     * @return int
     */
    public function getRole()
    {
        return isset($this->role) ? $this->role : 0;
    }

    public function hasRole()
    {
        return isset($this->role);
    }

    public function clearRole()
    {
        unset($this->role);
    }

    /**
     * The role of subnetwork. Currently, this field is only used when purpose = INTERNAL_HTTPS_LOAD_BALANCER. The value can be set to ACTIVE or BACKUP. An ACTIVE subnetwork is one that is currently being used for Internal HTTP(S) Load Balancing. A BACKUP subnetwork is one that is ready to be promoted to ACTIVE or is currently draining. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.Role role = 3506294;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Subnetwork\Role::class);
        $this->role = $var;

        return $this;
    }

    /**
     * An array of configurations for secondary IP ranges for VM instances contained in this subnetwork. The primary IP of such VM must belong to the primary ipCidrRange of the subnetwork. The alias IPs may belong to either primary or secondary ranges. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecondaryIpRanges()
    {
        return $this->secondary_ip_ranges;
    }

    /**
     * An array of configurations for secondary IP ranges for VM instances contained in this subnetwork. The primary IP of such VM must belong to the primary ipCidrRange of the subnetwork. The alias IPs may belong to either primary or secondary ranges. This field can be updated with a patch request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.compute.v1.SubnetworkSecondaryRange secondary_ip_ranges = 136658915;</code>
     * @param \Google\Cloud\Compute\V1\SubnetworkSecondaryRange[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecondaryIpRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Compute\V1\SubnetworkSecondaryRange::class);
        $this->secondary_ip_ranges = $arr;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] The state of the subnetwork, which can be one of the following values: READY: Subnetwork is created and ready to use DRAINING: only applicable to subnetworks that have the purpose set to INTERNAL_HTTPS_LOAD_BALANCER and indicates that connections to the load balancer are being drained. A subnetwork that is draining cannot be used or modified until it reaches a status of READY
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.State state = 109757585;</code>
     * @return int
     */
    public function getState()
    {
        return isset($this->state) ? $this->state : 0;
    }

    public function hasState()
    {
        return isset($this->state);
    }

    public function clearState()
    {
        unset($this->state);
    }

    /**
     * [Output Only] The state of the subnetwork, which can be one of the following values: READY: Subnetwork is created and ready to use DRAINING: only applicable to subnetworks that have the purpose set to INTERNAL_HTTPS_LOAD_BALANCER and indicates that connections to the load balancer are being drained. A subnetwork that is draining cannot be used or modified until it reaches a status of READY
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.Subnetwork.State state = 109757585;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\Subnetwork\State::class);
        $this->state = $var;

        return $this;
    }

}

