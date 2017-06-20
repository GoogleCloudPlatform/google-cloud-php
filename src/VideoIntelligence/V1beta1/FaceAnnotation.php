<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Face annotation.
 *
 * Protobuf type <code>Google\Cloud\Videointelligence\V1beta1\FaceAnnotation</code>
 */
class FaceAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Thumbnail of a representative face view (in JPEG format). Encoding: base64.
     *
     * Generated from protobuf field <code>string thumbnail = 1;</code>
     */
    private $thumbnail = '';
    /**
     * All locations where a face was detected.
     * Faces are detected and tracked on a per-video basis
     * (as opposed to across multiple videos).
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 2;</code>
     */
    private $segments;
    /**
     * Face locations at one frame per second.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.FaceLocation locations = 3;</code>
     */
    private $locations;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Thumbnail of a representative face view (in JPEG format). Encoding: base64.
     *
     * Generated from protobuf field <code>string thumbnail = 1;</code>
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Thumbnail of a representative face view (in JPEG format). Encoding: base64.
     *
     * Generated from protobuf field <code>string thumbnail = 1;</code>
     * @param string $var
     */
    public function setThumbnail($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbnail = $var;

        return $this;
    }

    /**
     * All locations where a face was detected.
     * Faces are detected and tracked on a per-video basis
     * (as opposed to across multiple videos).
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * All locations where a face was detected.
     * Faces are detected and tracked on a per-video basis
     * (as opposed to across multiple videos).
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.VideoSegment segments = 2;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setSegments(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Face locations at one frame per second.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.FaceLocation locations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Face locations at one frame per second.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1beta1.FaceLocation locations = 3;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLocations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\FaceLocation::class);
        $this->locations = $arr;

        return $this;
    }

}

