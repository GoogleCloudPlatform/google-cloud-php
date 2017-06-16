<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1beta1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Video annotation response. Included in the `response`
 * field of the `Operation` returned by the `GetOperation`
 * call of the `google::longrunning::Operations` service.
 * </pre>
 *
 * Protobuf type <code>Google\Cloud\Videointelligence\V1beta1\AnnotateVideoResponse</code>
 */
class AnnotateVideoResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Annotation results for all videos specified in `AnnotateVideoRequest`.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationResults annotation_results = 1;</code>
     */
    private $annotation_results;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1Beta1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Annotation results for all videos specified in `AnnotateVideoRequest`.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationResults annotation_results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnnotationResults()
    {
        return $this->annotation_results;
    }

    /**
     * <pre>
     * Annotation results for all videos specified in `AnnotateVideoRequest`.
     * </pre>
     *
     * <code>repeated .google.cloud.videointelligence.v1beta1.VideoAnnotationResults annotation_results = 1;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setAnnotationResults(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1beta1\VideoAnnotationResults::class);
        $this->annotation_results = $arr;

        return $this;
    }

}

