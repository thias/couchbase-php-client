<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/admin/query/v1/query.proto

namespace Couchbase\Protostellar\Generated\Admin\Query\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.admin.query.v1.DropIndexRequest</code>
 */
class DropIndexRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * Generated from protobuf field <code>optional string scope_name = 2;</code>
     */
    protected $scope_name = null;
    /**
     * Generated from protobuf field <code>optional string collection_name = 3;</code>
     */
    protected $collection_name = null;
    /**
     * Generated from protobuf field <code>string name = 4;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>optional bool ignore_if_missing = 5;</code>
     */
    protected $ignore_if_missing = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *     @type string $scope_name
     *     @type string $collection_name
     *     @type string $name
     *     @type bool $ignore_if_missing
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Admin\Query\V1\Query::initOnce();
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
     * Generated from protobuf field <code>optional string scope_name = 2;</code>
     * @return string
     */
    public function getScopeName()
    {
        return isset($this->scope_name) ? $this->scope_name : '';
    }

    public function hasScopeName()
    {
        return isset($this->scope_name);
    }

    public function clearScopeName()
    {
        unset($this->scope_name);
    }

    /**
     * Generated from protobuf field <code>optional string scope_name = 2;</code>
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
     * Generated from protobuf field <code>optional string collection_name = 3;</code>
     * @return string
     */
    public function getCollectionName()
    {
        return isset($this->collection_name) ? $this->collection_name : '';
    }

    public function hasCollectionName()
    {
        return isset($this->collection_name);
    }

    public function clearCollectionName()
    {
        unset($this->collection_name);
    }

    /**
     * Generated from protobuf field <code>optional string collection_name = 3;</code>
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
     * Generated from protobuf field <code>string name = 4;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool ignore_if_missing = 5;</code>
     * @return bool
     */
    public function getIgnoreIfMissing()
    {
        return isset($this->ignore_if_missing) ? $this->ignore_if_missing : false;
    }

    public function hasIgnoreIfMissing()
    {
        return isset($this->ignore_if_missing);
    }

    public function clearIgnoreIfMissing()
    {
        unset($this->ignore_if_missing);
    }

    /**
     * Generated from protobuf field <code>optional bool ignore_if_missing = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIgnoreIfMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->ignore_if_missing = $var;

        return $this;
    }

}
