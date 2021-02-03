<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for a property's dimension and metric metadata.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.GetMetadataRequest</code>
 */
class GetMetadataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the metadata to retrieve. This name field is
     * specified in the URL path and not URL parameters. Property is a numeric
     * Google Analytics GA4 Property identifier. To learn more, see [where to find
     * your Property
     * ID](https://developers.google.com/analytics/trusted-testing/analytics-data/property-id).
     * Example: properties/1234/metadata
     * Set the Property ID to 0 for dimensions and metrics common to all
     * properties. In this special mode, this method will not return custom
     * dimensions and metrics.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the metadata to retrieve. This name field is
     *           specified in the URL path and not URL parameters. Property is a numeric
     *           Google Analytics GA4 Property identifier. To learn more, see [where to find
     *           your Property
     *           ID](https://developers.google.com/analytics/trusted-testing/analytics-data/property-id).
     *           Example: properties/1234/metadata
     *           Set the Property ID to 0 for dimensions and metrics common to all
     *           properties. In this special mode, this method will not return custom
     *           dimensions and metrics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the metadata to retrieve. This name field is
     * specified in the URL path and not URL parameters. Property is a numeric
     * Google Analytics GA4 Property identifier. To learn more, see [where to find
     * your Property
     * ID](https://developers.google.com/analytics/trusted-testing/analytics-data/property-id).
     * Example: properties/1234/metadata
     * Set the Property ID to 0 for dimensions and metrics common to all
     * properties. In this special mode, this method will not return custom
     * dimensions and metrics.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the metadata to retrieve. This name field is
     * specified in the URL path and not URL parameters. Property is a numeric
     * Google Analytics GA4 Property identifier. To learn more, see [where to find
     * your Property
     * ID](https://developers.google.com/analytics/trusted-testing/analytics-data/property-id).
     * Example: properties/1234/metadata
     * Set the Property ID to 0 for dimensions and metrics common to all
     * properties. In this special mode, this method will not return custom
     * dimensions and metrics.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

