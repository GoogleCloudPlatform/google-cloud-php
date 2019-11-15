<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search.proto

namespace Google\Cloud\Vision\V1\ProductSearchResults;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the products similar to a single product in a query
 * image.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.ProductSearchResults.GroupedResult</code>
 */
class GroupedResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The bounding polygon around the product detected in the query image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     */
    private $bounding_poly = null;
    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 2;</code>
     */
    private $results;
    /**
     * List of generic predictions for the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.ObjectAnnotation object_annotations = 3;</code>
     */
    private $object_annotations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\BoundingPoly $bounding_poly
     *           The bounding polygon around the product detected in the query image.
     *     @type \Google\Cloud\Vision\V1\ProductSearchResults\Result[]|\Google\Protobuf\Internal\RepeatedField $results
     *           List of results, one for each product match.
     *     @type \Google\Cloud\Vision\V1\ProductSearchResults\ObjectAnnotation[]|\Google\Protobuf\Internal\RepeatedField $object_annotations
     *           List of generic predictions for the object in the bounding box.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearch::initOnce();
        parent::__construct($data);
    }

    /**
     * The bounding polygon around the product detected in the query image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * The bounding polygon around the product detected in the query image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 1;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingPoly($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;

        return $this;
    }

    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * List of results, one for each product match.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.Result results = 2;</code>
     * @param \Google\Cloud\Vision\V1\ProductSearchResults\Result[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ProductSearchResults\Result::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * List of generic predictions for the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.ObjectAnnotation object_annotations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjectAnnotations()
    {
        return $this->object_annotations;
    }

    /**
     * List of generic predictions for the object in the bounding box.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.ProductSearchResults.ObjectAnnotation object_annotations = 3;</code>
     * @param \Google\Cloud\Vision\V1\ProductSearchResults\ObjectAnnotation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjectAnnotations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\ProductSearchResults\ObjectAnnotation::class);
        $this->object_annotations = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GroupedResult::class, \Google\Cloud\Vision\V1\ProductSearchResults_GroupedResult::class);

