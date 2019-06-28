<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/tasks/v2beta3/target.proto

namespace Google\Cloud\Tasks\V2beta3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * App Engine Routing.
 * Defines routing characteristics specific to App Engine - service, version,
 * and instance.
 * For more information about services, versions, and instances see
 * [An Overview of App
 * Engine](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine),
 * [Microservices Architecture on Google App
 * Engine](https://cloud.google.com/appengine/docs/python/microservices-on-app-engine),
 * [App Engine Standard request
 * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed),
 * and [App Engine Flex request
 * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
 *
 * Generated from protobuf message <code>google.cloud.tasks.v2beta3.AppEngineRouting</code>
 */
final class AppEngineRouting extends \Google\Protobuf\Internal\Message
{
    /**
     * App service.
     * By default, the task is sent to the service which is the default
     * service when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     */
    private $service = '';
    /**
     * App version.
     * By default, the task is sent to the version which is the default
     * version when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';
    /**
     * App instance.
     * By default, the task is sent to an instance which is available when
     * the task is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?hl=en_US#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     */
    private $instance = '';
    /**
     * Output only. The host that the task is sent to.
     * The host is constructed from the domain name of the app associated with
     * the queue's project ID (for example <app-id>.appspot.com), and the
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service], [version][google.cloud.tasks.v2beta3.AppEngineRouting.version],
     * and [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. Tasks which were created using
     * the App Engine SDK might have a custom domain name.
     * For more information, see
     * [How Requests are
     * Routed](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string host = 4;</code>
     */
    private $host = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           App service.
     *           By default, the task is sent to the service which is the default
     *           service when the task is attempted.
     *           For some queues or tasks which were created using the App Engine
     *           Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     *           into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     *           [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     *           [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     *           which were created using the App Engine SDK use a custom domain
     *           name; custom domains are not parsed by Cloud Tasks. If
     *           [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     *           [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     *           [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     *           [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *     @type string $version
     *           App version.
     *           By default, the task is sent to the version which is the default
     *           version when the task is attempted.
     *           For some queues or tasks which were created using the App Engine
     *           Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     *           into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     *           [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     *           [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     *           which were created using the App Engine SDK use a custom domain
     *           name; custom domains are not parsed by Cloud Tasks. If
     *           [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     *           [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     *           [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     *           [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *     @type string $instance
     *           App instance.
     *           By default, the task is sent to an instance which is available when
     *           the task is attempted.
     *           Requests can only be sent to a specific instance if
     *           [manual scaling is used in App Engine
     *           Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?hl=en_US#scaling_types_and_instance_classes).
     *           App Engine Flex does not support instances. For more information, see
     *           [App Engine Standard request
     *           routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     *           and [App Engine Flex request
     *           routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *     @type string $host
     *           Output only. The host that the task is sent to.
     *           The host is constructed from the domain name of the app associated with
     *           the queue's project ID (for example <app-id>.appspot.com), and the
     *           [service][google.cloud.tasks.v2beta3.AppEngineRouting.service], [version][google.cloud.tasks.v2beta3.AppEngineRouting.version],
     *           and [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. Tasks which were created using
     *           the App Engine SDK might have a custom domain name.
     *           For more information, see
     *           [How Requests are
     *           Routed](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Tasks\V2Beta3\Target::initOnce();
        parent::__construct($data);
    }

    /**
     * App service.
     * By default, the task is sent to the service which is the default
     * service when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * App service.
     * By default, the task is sent to the service which is the default
     * service when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * App version.
     * By default, the task is sent to the version which is the default
     * version when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * App version.
     * By default, the task is sent to the version which is the default
     * version when the task is attempted.
     * For some queues or tasks which were created using the App Engine
     * Task Queue API, [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable
     * into [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. For example, some tasks
     * which were created using the App Engine SDK use a custom domain
     * name; custom domains are not parsed by Cloud Tasks. If
     * [host][google.cloud.tasks.v2beta3.AppEngineRouting.host] is not parsable, then
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service],
     * [version][google.cloud.tasks.v2beta3.AppEngineRouting.version], and
     * [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance] are the empty string.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * App instance.
     * By default, the task is sent to an instance which is available when
     * the task is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?hl=en_US#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * App instance.
     * By default, the task is sent to an instance which is available when
     * the task is attempted.
     * Requests can only be sent to a specific instance if
     * [manual scaling is used in App Engine
     * Standard](https://cloud.google.com/appengine/docs/python/an-overview-of-app-engine?hl=en_US#scaling_types_and_instance_classes).
     * App Engine Flex does not support instances. For more information, see
     * [App Engine Standard request
     * routing](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed)
     * and [App Engine Flex request
     * routing](https://cloud.google.com/appengine/docs/flexible/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string instance = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Output only. The host that the task is sent to.
     * The host is constructed from the domain name of the app associated with
     * the queue's project ID (for example <app-id>.appspot.com), and the
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service], [version][google.cloud.tasks.v2beta3.AppEngineRouting.version],
     * and [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. Tasks which were created using
     * the App Engine SDK might have a custom domain name.
     * For more information, see
     * [How Requests are
     * Routed](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string host = 4;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Output only. The host that the task is sent to.
     * The host is constructed from the domain name of the app associated with
     * the queue's project ID (for example <app-id>.appspot.com), and the
     * [service][google.cloud.tasks.v2beta3.AppEngineRouting.service], [version][google.cloud.tasks.v2beta3.AppEngineRouting.version],
     * and [instance][google.cloud.tasks.v2beta3.AppEngineRouting.instance]. Tasks which were created using
     * the App Engine SDK might have a custom domain name.
     * For more information, see
     * [How Requests are
     * Routed](https://cloud.google.com/appengine/docs/standard/python/how-requests-are-routed).
     *
     * Generated from protobuf field <code>string host = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

}

