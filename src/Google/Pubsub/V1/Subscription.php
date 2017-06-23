<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A subscription resource.
 *
 * Protobuf type <code>Google\Pubsub\V1\Subscription</code>
 */
class Subscription extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the subscription. It must have the format
     * `"projects/{project}/subscriptions/{subscription}"`. `{subscription}` must
     * start with a letter, and contain only letters (`[A-Za-z]`), numbers
     * (`[0-9]`), dashes (`-`), underscores (`_`), periods (`.`), tildes (`~`),
     * plus (`+`) or percent signs (`%`). It must be between 3 and 255 characters
     * in length, and it must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     * The value of this field will be `_deleted-topic_` if the topic has been
     * deleted.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     */
    private $topic = '';
    /**
     * If push delivery is used with this subscription, this field is
     * used to configure it. An empty `pushConfig` signifies that the subscriber
     * will pull and ack messages using API methods.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 4;</code>
     */
    private $push_config = null;
    /**
     * This value is the maximum time after a subscriber receives a message
     * before the subscriber should acknowledge the message. After message
     * delivery but before the ack deadline expires and before the message is
     * acknowledged, it is an outstanding message and will not be delivered
     * again during that time (on a best-effort basis).
     * For pull subscriptions, this value is used as the initial value for the ack
     * deadline. To override this value for a given message, call
     * `ModifyAckDeadline` with the corresponding `ack_id` if using
     * pull.
     * The minimum custom deadline you can specify is 10 seconds.
     * The maximum custom deadline you can specify is 600 seconds (10 minutes).
     * If this parameter is 0, a default value of 10 seconds is used.
     * For push delivery, this value is also used to set the request timeout for
     * the call to the push endpoint.
     * If the subscriber never acknowledges the message, the Pub/Sub
     * system will eventually redeliver the message.
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 5;</code>
     */
    private $ack_deadline_seconds = 0;
    /**
     * Indicates whether to retain acknowledged messages. If true, then
     * messages are not expunged from the subscription's backlog, even if they are
     * acknowledged, until they fall out of the `message_retention_duration`
     * window.
     *
     * Generated from protobuf field <code>bool retain_acked_messages = 7;</code>
     */
    private $retain_acked_messages = false;
    /**
     * How long to retain unacknowledged messages in the subscription's backlog,
     * from the moment a message is published.
     * If `retain_acked_messages` is true, then this also configures the retention
     * of acknowledged messages, and thus configures how far back in time a `Seek`
     * can be done. Defaults to 7 days. Cannot be more than 7 days or less than 10
     * minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     */
    private $message_retention_duration = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The name of the subscription. It must have the format
     * `"projects/{project}/subscriptions/{subscription}"`. `{subscription}` must
     * start with a letter, and contain only letters (`[A-Za-z]`), numbers
     * (`[0-9]`), dashes (`-`), underscores (`_`), periods (`.`), tildes (`~`),
     * plus (`+`) or percent signs (`%`). It must be between 3 and 255 characters
     * in length, and it must not start with `"goog"`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the subscription. It must have the format
     * `"projects/{project}/subscriptions/{subscription}"`. `{subscription}` must
     * start with a letter, and contain only letters (`[A-Za-z]`), numbers
     * (`[0-9]`), dashes (`-`), underscores (`_`), periods (`.`), tildes (`~`),
     * plus (`+`) or percent signs (`%`). It must be between 3 and 255 characters
     * in length, and it must not start with `"goog"`.
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
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     * The value of this field will be `_deleted-topic_` if the topic has been
     * deleted.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The name of the topic from which this subscription is receiving messages.
     * Format is `projects/{project}/topics/{topic}`.
     * The value of this field will be `_deleted-topic_` if the topic has been
     * deleted.
     *
     * Generated from protobuf field <code>string topic = 2;</code>
     * @param string $var
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;
    }

    /**
     * If push delivery is used with this subscription, this field is
     * used to configure it. An empty `pushConfig` signifies that the subscriber
     * will pull and ack messages using API methods.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 4;</code>
     * @return \Google\Pubsub\V1\PushConfig
     */
    public function getPushConfig()
    {
        return $this->push_config;
    }

    /**
     * If push delivery is used with this subscription, this field is
     * used to configure it. An empty `pushConfig` signifies that the subscriber
     * will pull and ack messages using API methods.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 4;</code>
     * @param \Google\Pubsub\V1\PushConfig $var
     */
    public function setPushConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1\PushConfig::class);
        $this->push_config = $var;
    }

    /**
     * This value is the maximum time after a subscriber receives a message
     * before the subscriber should acknowledge the message. After message
     * delivery but before the ack deadline expires and before the message is
     * acknowledged, it is an outstanding message and will not be delivered
     * again during that time (on a best-effort basis).
     * For pull subscriptions, this value is used as the initial value for the ack
     * deadline. To override this value for a given message, call
     * `ModifyAckDeadline` with the corresponding `ack_id` if using
     * pull.
     * The minimum custom deadline you can specify is 10 seconds.
     * The maximum custom deadline you can specify is 600 seconds (10 minutes).
     * If this parameter is 0, a default value of 10 seconds is used.
     * For push delivery, this value is also used to set the request timeout for
     * the call to the push endpoint.
     * If the subscriber never acknowledges the message, the Pub/Sub
     * system will eventually redeliver the message.
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 5;</code>
     * @return int
     */
    public function getAckDeadlineSeconds()
    {
        return $this->ack_deadline_seconds;
    }

    /**
     * This value is the maximum time after a subscriber receives a message
     * before the subscriber should acknowledge the message. After message
     * delivery but before the ack deadline expires and before the message is
     * acknowledged, it is an outstanding message and will not be delivered
     * again during that time (on a best-effort basis).
     * For pull subscriptions, this value is used as the initial value for the ack
     * deadline. To override this value for a given message, call
     * `ModifyAckDeadline` with the corresponding `ack_id` if using
     * pull.
     * The minimum custom deadline you can specify is 10 seconds.
     * The maximum custom deadline you can specify is 600 seconds (10 minutes).
     * If this parameter is 0, a default value of 10 seconds is used.
     * For push delivery, this value is also used to set the request timeout for
     * the call to the push endpoint.
     * If the subscriber never acknowledges the message, the Pub/Sub
     * system will eventually redeliver the message.
     *
     * Generated from protobuf field <code>int32 ack_deadline_seconds = 5;</code>
     * @param int $var
     */
    public function setAckDeadlineSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->ack_deadline_seconds = $var;
    }

    /**
     * Indicates whether to retain acknowledged messages. If true, then
     * messages are not expunged from the subscription's backlog, even if they are
     * acknowledged, until they fall out of the `message_retention_duration`
     * window.
     *
     * Generated from protobuf field <code>bool retain_acked_messages = 7;</code>
     * @return bool
     */
    public function getRetainAckedMessages()
    {
        return $this->retain_acked_messages;
    }

    /**
     * Indicates whether to retain acknowledged messages. If true, then
     * messages are not expunged from the subscription's backlog, even if they are
     * acknowledged, until they fall out of the `message_retention_duration`
     * window.
     *
     * Generated from protobuf field <code>bool retain_acked_messages = 7;</code>
     * @param bool $var
     */
    public function setRetainAckedMessages($var)
    {
        GPBUtil::checkBool($var);
        $this->retain_acked_messages = $var;
    }

    /**
     * How long to retain unacknowledged messages in the subscription's backlog,
     * from the moment a message is published.
     * If `retain_acked_messages` is true, then this also configures the retention
     * of acknowledged messages, and thus configures how far back in time a `Seek`
     * can be done. Defaults to 7 days. Cannot be more than 7 days or less than 10
     * minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getMessageRetentionDuration()
    {
        return $this->message_retention_duration;
    }

    /**
     * How long to retain unacknowledged messages in the subscription's backlog,
     * from the moment a message is published.
     * If `retain_acked_messages` is true, then this also configures the retention
     * of acknowledged messages, and thus configures how far back in time a `Seek`
     * can be done. Defaults to 7 days. Cannot be more than 7 days or less than 10
     * minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration message_retention_duration = 8;</code>
     * @param \Google\Protobuf\Duration $var
     */
    public function setMessageRetentionDuration(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->message_retention_duration = $var;
    }

}

