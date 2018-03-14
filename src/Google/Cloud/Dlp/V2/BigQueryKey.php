<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Row key for identifying a record in BigQuery table.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.BigQueryKey</code>
 */
class BigQueryKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     */
    private $table_reference = null;
    /**
     * Absolute number of the row from the beginning of the table at the time
     * of scanning.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     */
    private $row_number = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct();
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable
     */
    public function getTableReference()
    {
        return $this->table_reference;
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTableReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->table_reference = $var;

        return $this;
    }

    /**
     * Absolute number of the row from the beginning of the table at the time
     * of scanning.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     * @return int|string
     */
    public function getRowNumber()
    {
        return $this->row_number;
    }

    /**
     * Absolute number of the row from the beginning of the table at the time
     * of scanning.
     *
     * Generated from protobuf field <code>int64 row_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->row_number = $var;

        return $this;
    }

}

