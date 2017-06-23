<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/instance/v1/spanner_instance_admin.proto

namespace Google\Spanner\Admin\Instance\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A possible configuration for a Cloud Spanner instance. Configurations
 * define the geographic placement of nodes and their replication.
 *
 * Protobuf type <code>Google\Spanner\Admin\Instance\V1\InstanceConfig</code>
 */
class InstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';

    public function __construct() {
        \GPBMetadata\Google\Spanner\Admin\Instance\V1\SpannerInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * A unique identifier for the instance configuration.  Values
     * are of the form
     * `projects/<project>/instanceConfigs/[a-z][-a-z0-9]*`
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
    }

    /**
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The name of this instance configuration as it appears in UIs.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
    }

}

