<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: opentelemetry/proto/logs/v1/logs.proto

namespace Opentelemetry\Proto\Logs\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of ScopeLogs from a Resource.
 *
 * Generated from protobuf message <code>opentelemetry.proto.logs.v1.ResourceLogs</code>
 */
class ResourceLogs extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     */
    protected $resource = null;
    /**
     * A list of ScopeLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.ScopeLogs scope_logs = 2;</code>
     */
    private $scope_logs;
    /**
     * The Schema URL, if known. This is the identifier of the Schema that the resource data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "scope_logs" field which have their own schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     */
    protected $schema_url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Opentelemetry\Proto\Resource\V1\Resource $resource
     *           The resource for the logs in this message.
     *           If this field is not set then resource info is unknown.
     *     @type \Opentelemetry\Proto\Logs\V1\ScopeLogs[]|\Google\Protobuf\Internal\RepeatedField $scope_logs
     *           A list of ScopeLogs that originate from a resource.
     *     @type string $schema_url
     *           The Schema URL, if known. This is the identifier of the Schema that the resource data
     *           is recorded in. To learn more about Schema URL see
     *           https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     *           This schema_url applies to the data in the "resource" field. It does not apply
     *           to the data in the "scope_logs" field which have their own schema_url field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Opentelemetry\Proto\Logs\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     * @return \Opentelemetry\Proto\Resource\V1\Resource|null
     */
    public function getResource()
    {
        return $this->resource;
    }

    public function hasResource()
    {
        return isset($this->resource);
    }

    public function clearResource()
    {
        unset($this->resource);
    }

    /**
     * The resource for the logs in this message.
     * If this field is not set then resource info is unknown.
     *
     * Generated from protobuf field <code>.opentelemetry.proto.resource.v1.Resource resource = 1;</code>
     * @param \Opentelemetry\Proto\Resource\V1\Resource $var
     * @return $this
     */
    public function setResource($var)
    {
        GPBUtil::checkMessage($var, \Opentelemetry\Proto\Resource\V1\Resource::class);
        $this->resource = $var;

        return $this;
    }

    /**
     * A list of ScopeLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.ScopeLogs scope_logs = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopeLogs()
    {
        return $this->scope_logs;
    }

    /**
     * A list of ScopeLogs that originate from a resource.
     *
     * Generated from protobuf field <code>repeated .opentelemetry.proto.logs.v1.ScopeLogs scope_logs = 2;</code>
     * @param \Opentelemetry\Proto\Logs\V1\ScopeLogs[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopeLogs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Opentelemetry\Proto\Logs\V1\ScopeLogs::class);
        $this->scope_logs = $arr;

        return $this;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the resource data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "scope_logs" field which have their own schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @return string
     */
    public function getSchemaUrl()
    {
        return $this->schema_url;
    }

    /**
     * The Schema URL, if known. This is the identifier of the Schema that the resource data
     * is recorded in. To learn more about Schema URL see
     * https://opentelemetry.io/docs/specs/otel/schemas/#schema-url
     * This schema_url applies to the data in the "resource" field. It does not apply
     * to the data in the "scope_logs" field which have their own schema_url field.
     *
     * Generated from protobuf field <code>string schema_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSchemaUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->schema_url = $var;

        return $this;
    }

}

