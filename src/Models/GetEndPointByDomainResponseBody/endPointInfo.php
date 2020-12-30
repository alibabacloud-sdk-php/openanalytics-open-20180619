<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models\GetEndPointByDomainResponseBody;

use AlibabaCloud\Tea\Model;

class endPointInfo extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $cloudInstanceID;

    /**
     * @var string
     */
    public $zone;

    /**
     * @var string
     */
    public $domainURL;

    /**
     * @var string
     */
    public $vSwitch;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $allowIP;

    /**
     * @var string
     */
    public $vpcID;

    /**
     * @var string
     */
    public $endPointID;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'product'         => 'product',
        'cloudInstanceID' => 'cloudInstanceID',
        'zone'            => 'zone',
        'domainURL'       => 'domainURL',
        'vSwitch'         => 'vSwitch',
        'host'            => 'host',
        'allowIP'         => 'allowIP',
        'vpcID'           => 'vpcID',
        'endPointID'      => 'endPointID',
        'networkType'     => 'networkType',
        'port'            => 'port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->cloudInstanceID) {
            $res['cloudInstanceID'] = $this->cloudInstanceID;
        }
        if (null !== $this->zone) {
            $res['zone'] = $this->zone;
        }
        if (null !== $this->domainURL) {
            $res['domainURL'] = $this->domainURL;
        }
        if (null !== $this->vSwitch) {
            $res['vSwitch'] = $this->vSwitch;
        }
        if (null !== $this->host) {
            $res['host'] = $this->host;
        }
        if (null !== $this->allowIP) {
            $res['allowIP'] = $this->allowIP;
        }
        if (null !== $this->vpcID) {
            $res['vpcID'] = $this->vpcID;
        }
        if (null !== $this->endPointID) {
            $res['endPointID'] = $this->endPointID;
        }
        if (null !== $this->networkType) {
            $res['networkType'] = $this->networkType;
        }
        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endPointInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['cloudInstanceID'])) {
            $model->cloudInstanceID = $map['cloudInstanceID'];
        }
        if (isset($map['zone'])) {
            $model->zone = $map['zone'];
        }
        if (isset($map['domainURL'])) {
            $model->domainURL = $map['domainURL'];
        }
        if (isset($map['vSwitch'])) {
            $model->vSwitch = $map['vSwitch'];
        }
        if (isset($map['host'])) {
            $model->host = $map['host'];
        }
        if (isset($map['allowIP'])) {
            $model->allowIP = $map['allowIP'];
        }
        if (isset($map['vpcID'])) {
            $model->vpcID = $map['vpcID'];
        }
        if (isset($map['endPointID'])) {
            $model->endPointID = $map['endPointID'];
        }
        if (isset($map['networkType'])) {
            $model->networkType = $map['networkType'];
        }
        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        return $model;
    }
}
