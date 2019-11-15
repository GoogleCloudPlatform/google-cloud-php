<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace Google\Cloud\Monitoring\V3\UptimeCheckConfig\HttpCheck;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The authentication parameters to provide to the specified resource or
 * URL that requires a username and password. Currently, only
 * [Basic HTTP authentication](https://tools.ietf.org/html/rfc7617) is
 * supported in Uptime checks.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UptimeCheckConfig.HttpCheck.BasicAuthentication</code>
 */
class BasicAuthentication extends \Google\Protobuf\Internal\Message
{
    /**
     * The username to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     */
    private $username = '';
    /**
     * The password to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     */
    private $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $username
     *           The username to use when authenticating with the HTTP server.
     *     @type string $password
     *           The password to use when authenticating with the HTTP server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Monitoring\V3\Uptime::initOnce();
        parent::__construct($data);
    }

    /**
     * The username to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * The username to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string username = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->username = $var;

        return $this;
    }

    /**
     * The password to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * The password to use when authenticating with the HTTP server.
     *
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(BasicAuthentication::class, \Google\Cloud\Monitoring\V3\UptimeCheckConfig_HttpCheck_BasicAuthentication::class);

