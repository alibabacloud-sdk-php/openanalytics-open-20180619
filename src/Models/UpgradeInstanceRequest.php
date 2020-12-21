<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class UpgradeInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $component;
    protected $_name = [
        'regionId'     => 'RegionId',
        'instanceId'   => 'InstanceId',
        'chargeType'   => 'ChargeType',
        'instanceType' => 'InstanceType',
        'component'    => 'Component',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('component', $this->component, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->component) {
            $res['Component'] = $this->component;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Component'])) {
            $model->component = $map['Component'];
        }

        return $model;
    }
}
