<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class GetEndPointRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $endPointID;
    protected $_name = [
        'regionId'   => 'RegionId',
        'endPointID' => 'EndPointID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->endPointID) {
            $res['EndPointID'] = $this->endPointID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEndPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EndPointID'])) {
            $model->endPointID = $map['EndPointID'];
        }

        return $model;
    }
}
