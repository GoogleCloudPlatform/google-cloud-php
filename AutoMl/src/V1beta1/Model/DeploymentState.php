<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/model.proto

namespace Google\Cloud\Automl\V1beta1\Model;

/**
 * Deployment state of the model.
 *
 * Protobuf type <code>google.cloud.automl.v1beta1.Model.DeploymentState</code>
 */
class DeploymentState
{
    /**
     * Should not be used, an un-set enum has this value by default.
     *
     * Generated from protobuf enum <code>DEPLOYMENT_STATE_UNSPECIFIED = 0;</code>
     */
    const DEPLOYMENT_STATE_UNSPECIFIED = 0;
    /**
     * Model is deployed.
     *
     * Generated from protobuf enum <code>DEPLOYED = 1;</code>
     */
    const DEPLOYED = 1;
    /**
     * Model is not deployed.
     *
     * Generated from protobuf enum <code>UNDEPLOYED = 2;</code>
     */
    const UNDEPLOYED = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeploymentState::class, \Google\Cloud\Automl\V1beta1\Model_DeploymentState::class);

