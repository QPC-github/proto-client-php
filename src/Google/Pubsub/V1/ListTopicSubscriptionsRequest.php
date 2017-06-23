<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListTopicSubscriptions` method.
 *
 * Protobuf type <code>Google\Pubsub\V1\ListTopicSubscriptionsRequest</code>
 */
class ListTopicSubscriptionsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the topic that subscriptions are attached to.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    private $topic = '';
    /**
     * Maximum number of subscription names to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * The value returned by the last `ListTopicSubscriptionsResponse`; indicates
     * that this is a continuation of a prior `ListTopicSubscriptions` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The name of the topic that subscriptions are attached to.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The name of the topic that subscriptions are attached to.
     * Format is `projects/{project}/topics/{topic}`.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;
    }

    /**
     * Maximum number of subscription names to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Maximum number of subscription names to return.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
    }

    /**
     * The value returned by the last `ListTopicSubscriptionsResponse`; indicates
     * that this is a continuation of a prior `ListTopicSubscriptions` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The value returned by the last `ListTopicSubscriptionsResponse`; indicates
     * that this is a continuation of a prior `ListTopicSubscriptions` call, and
     * that the system should return the next page of data.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
    }

}

