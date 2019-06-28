<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information involved in an HTTP/HTTPS uptime check request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck</code>
 */
final class HttpCheck extends \Google\Protobuf\Internal\Message
{
    /**
     * If true, use HTTPS instead of HTTP to run the check.
     *
     * Generated from protobuf field <code>bool use_ssl = 1;</code>
     */
    private $use_ssl = false;
    /**
     * The path to the page to run the check against. Will be combined with the
     * host (specified within the MonitoredResource) and port to construct the
     * full URL. Optional (defaults to "/").
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    private $path = '';
    /**
     * The port to the page to run the check against. Will be combined with host
     * (specified within the MonitoredResource) and path to construct the full
     * URL. Optional (defaults to 80 without SSL, or 443 with SSL).
     *
     * Generated from protobuf field <code>int32 port = 3;</code>
     */
    private $port = 0;
    /**
     * The authentication information. Optional when creating an HTTP check;
     * defaults to empty.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.BasicAuthentication auth_info = 4;</code>
     */
    private $auth_info = null;
    /**
     * Boolean specifiying whether to encrypt the header information.
     * Encryption should be specified for any headers related to authentication
     * that you do not wish to be seen when retrieving the configuration. The
     * server will be responsible for encrypting the headers.
     * On Get/List calls, if mask_headers is set to True then the headers
     * will be obscured with ******.
     *
     * Generated from protobuf field <code>bool mask_headers = 5;</code>
     */
    private $mask_headers = false;
    /**
     * The list of headers to send as part of the uptime check request.
     * If two headers have the same key and different values, they should
     * be entered as a single header, with the value being a comma-separated
     * list of all the desired values as described at
     * https://www.w3.org/Protocols/rfc2616/rfc2616.txt (page 31).
     * Entering two separate headers with the same key in a Create call will
     * cause the first to be overwritten by the second.
     * The maximum number of headers allowed is 100.
     *
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     */
    private $headers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $use_ssl
     *           If true, use HTTPS instead of HTTP to run the check.
     *     @type string $path
     *           The path to the page to run the check against. Will be combined with the
     *           host (specified within the MonitoredResource) and port to construct the
     *           full URL. Optional (defaults to "/").
     *     @type int $port
     *           The port to the page to run the check against. Will be combined with host
     *           (specified within the MonitoredResource) and path to construct the full
     *           URL. Optional (defaults to 80 without SSL, or 443 with SSL).
     *     @type \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck\BasicAuthentication $auth_info
     *           The authentication information. Optional when creating an HTTP check;
     *           defaults to empty.
     *     @type bool $mask_headers
     *           Boolean specifiying whether to encrypt the header information.
     *           Encryption should be specified for any headers related to authentication
     *           that you do not wish to be seen when retrieving the configuration. The
     *           server will be responsible for encrypting the headers.
     *           On Get/List calls, if mask_headers is set to True then the headers
     *           will be obscured with ******.
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *           The list of headers to send as part of the uptime check request.
     *           If two headers have the same key and different values, they should
     *           be entered as a single header, with the value being a comma-separated
     *           list of all the desired values as described at
     *           https://www.w3.org/Protocols/rfc2616/rfc2616.txt (page 31).
     *           Entering two separate headers with the same key in a Create call will
     *           cause the first to be overwritten by the second.
     *           The maximum number of headers allowed is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * If true, use HTTPS instead of HTTP to run the check.
     *
     * Generated from protobuf field <code>bool use_ssl = 1;</code>
     * @return bool
     */
    public function getUseSsl()
    {
        return $this->use_ssl;
    }

    /**
     * If true, use HTTPS instead of HTTP to run the check.
     *
     * Generated from protobuf field <code>bool use_ssl = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setUseSsl($var)
    {
        GPBUtil::checkBool($var);
        $this->use_ssl = $var;

        return $this;
    }

    /**
     * The path to the page to run the check against. Will be combined with the
     * host (specified within the MonitoredResource) and port to construct the
     * full URL. Optional (defaults to "/").
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * The path to the page to run the check against. Will be combined with the
     * host (specified within the MonitoredResource) and port to construct the
     * full URL. Optional (defaults to "/").
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * The port to the page to run the check against. Will be combined with host
     * (specified within the MonitoredResource) and path to construct the full
     * URL. Optional (defaults to 80 without SSL, or 443 with SSL).
     *
     * Generated from protobuf field <code>int32 port = 3;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * The port to the page to run the check against. Will be combined with host
     * (specified within the MonitoredResource) and path to construct the full
     * URL. Optional (defaults to 80 without SSL, or 443 with SSL).
     *
     * Generated from protobuf field <code>int32 port = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * The authentication information. Optional when creating an HTTP check;
     * defaults to empty.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.BasicAuthentication auth_info = 4;</code>
     * @return \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck\BasicAuthentication
     */
    public function getAuthInfo()
    {
        return $this->auth_info;
    }

    /**
     * The authentication information. Optional when creating an HTTP check;
     * defaults to empty.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.UptimeCheckConfig.HttpCheck.BasicAuthentication auth_info = 4;</code>
     * @param \Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck\BasicAuthentication $var
     * @return $this
     */
    public function setAuthInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck_BasicAuthentication::class);
        $this->auth_info = $var;

        return $this;
    }

    /**
     * Boolean specifiying whether to encrypt the header information.
     * Encryption should be specified for any headers related to authentication
     * that you do not wish to be seen when retrieving the configuration. The
     * server will be responsible for encrypting the headers.
     * On Get/List calls, if mask_headers is set to True then the headers
     * will be obscured with ******.
     *
     * Generated from protobuf field <code>bool mask_headers = 5;</code>
     * @return bool
     */
    public function getMaskHeaders()
    {
        return $this->mask_headers;
    }

    /**
     * Boolean specifiying whether to encrypt the header information.
     * Encryption should be specified for any headers related to authentication
     * that you do not wish to be seen when retrieving the configuration. The
     * server will be responsible for encrypting the headers.
     * On Get/List calls, if mask_headers is set to True then the headers
     * will be obscured with ******.
     *
     * Generated from protobuf field <code>bool mask_headers = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setMaskHeaders($var)
    {
        GPBUtil::checkBool($var);
        $this->mask_headers = $var;

        return $this;
    }

    /**
     * The list of headers to send as part of the uptime check request.
     * If two headers have the same key and different values, they should
     * be entered as a single header, with the value being a comma-separated
     * list of all the desired values as described at
     * https://www.w3.org/Protocols/rfc2616/rfc2616.txt (page 31).
     * Entering two separate headers with the same key in a Create call will
     * cause the first to be overwritten by the second.
     * The maximum number of headers allowed is 100.
     *
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * The list of headers to send as part of the uptime check request.
     * If two headers have the same key and different values, they should
     * be entered as a single header, with the value being a comma-separated
     * list of all the desired values as described at
     * https://www.w3.org/Protocols/rfc2616/rfc2616.txt (page 31).
     * Entering two separate headers with the same key in a Create call will
     * cause the first to be overwritten by the second.
     * The maximum number of headers allowed is 100.
     *
     * Generated from protobuf field <code>map<string, string> headers = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HttpCheck::class, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck::class);

