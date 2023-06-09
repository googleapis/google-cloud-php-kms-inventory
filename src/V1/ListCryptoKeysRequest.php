<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/kms/inventory/v1/key_dashboard_service.proto

namespace Google\Cloud\Kms\Inventory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [KeyDashboardService.ListCryptoKeys][google.cloud.kms.inventory.v1.KeyDashboardService.ListCryptoKeys].
 *
 * Generated from protobuf message <code>google.cloud.kms.inventory.v1.ListCryptoKeysRequest</code>
 */
class ListCryptoKeysRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Google Cloud project for which to retrieve key metadata, in
     * the format `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The maximum number of keys to return. The service may return
     * fewer than this value. If unspecified, at most 1000 keys will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. Pass this into a subsequent request in order to receive the next
     * page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. The Google Cloud project for which to retrieve key metadata, in
     *                       the format `projects/*`
     *                       Please see {@see KeyDashboardServiceClient::projectName()} for help formatting this field.
     *
     * @return \Google\Cloud\Kms\Inventory\V1\ListCryptoKeysRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The Google Cloud project for which to retrieve key metadata, in
     *           the format `projects/&#42;`
     *     @type int $page_size
     *           Optional. The maximum number of keys to return. The service may return
     *           fewer than this value. If unspecified, at most 1000 keys will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *     @type string $page_token
     *           Optional. Pass this into a subsequent request in order to receive the next
     *           page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Kms\Inventory\V1\KeyDashboardService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Cloud project for which to retrieve key metadata, in
     * the format `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The Google Cloud project for which to retrieve key metadata, in
     * the format `projects/&#42;`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of keys to return. The service may return
     * fewer than this value. If unspecified, at most 1000 keys will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of keys to return. The service may return
     * fewer than this value. If unspecified, at most 1000 keys will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. Pass this into a subsequent request in order to receive the next
     * page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. Pass this into a subsequent request in order to receive the next
     * page of results.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

