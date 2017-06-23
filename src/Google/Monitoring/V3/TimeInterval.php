<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/common.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A time interval extending just after a start time through an end time.
 * If the start time is the same as the end time, then the interval
 * represents a single point in time.
 *
 * Protobuf type <code>Google\Monitoring\V3\TimeInterval</code>
 */
class TimeInterval extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     */
    private $start_time = null;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\Common::initOnce();
        parent::__construct();
    }

    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Required. The end of the time interval.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setEndTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;
    }

    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Optional. The beginning of the time interval.  The default value
     * for the start time is the end time. The start time must not be
     * later than the end time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     */
    public function setStartTime(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;
    }

}

