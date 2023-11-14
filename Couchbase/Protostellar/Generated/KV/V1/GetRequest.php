<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv/v1/kv.proto

namespace Couchbase\Protostellar\Generated\KV\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.kv.v1.GetRequest</code>
 */
class GetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     */
    protected $scope_name = '';
    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     */
    protected $collection_name = '';
    /**
     * Generated from protobuf field <code>string key = 4;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>repeated string project = 5;</code>
     */
    private $project;
    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.CompressionEnabled compression = 6;</code>
     */
    protected $compression = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *     @type string $scope_name
     *     @type string $collection_name
     *     @type string $key
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $project
     *     @type int $compression
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Kv\V1\Kv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @return string
     */
    public function getScopeName()
    {
        return $this->scope_name;
    }

    /**
     * Generated from protobuf field <code>string scope_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScopeName($var)
    {
        GPBUtil::checkString($var, True);
        $this->scope_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return $this->collection_name;
    }

    /**
     * Generated from protobuf field <code>string collection_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCollectionName($var)
    {
        GPBUtil::checkString($var, True);
        $this->collection_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 4;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string project = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Generated from protobuf field <code>repeated string project = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProject($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->project = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.CompressionEnabled compression = 6;</code>
     * @return int
     */
    public function getCompression()
    {
        return isset($this->compression) ? $this->compression : 0;
    }

    public function hasCompression()
    {
        return isset($this->compression);
    }

    public function clearCompression()
    {
        unset($this->compression);
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.CompressionEnabled compression = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setCompression($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\Protostellar\Generated\KV\V1\CompressionEnabled::class);
        $this->compression = $var;

        return $this;
    }

}
