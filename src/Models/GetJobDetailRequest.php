<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Openanalyticsopen\V20180619\Models;

use AlibabaCloud\Tea\Model;

class GetJobDetailRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $vcName;
    protected $_name = [
        'jobId'  => 'JobId',
        'vcName' => 'VcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->vcName) {
            $res['VcName'] = $this->vcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['VcName'])) {
            $model->vcName = $map['VcName'];
        }

        return $model;
    }
}
