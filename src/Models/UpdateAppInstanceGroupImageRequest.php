<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppInstanceGroupImageRequest extends Model
{
    /**
     * @description The image ID of the application. You can obtain the ID from the Images page in the App Streaming console.
     *
     * This parameter is required.
     * @example img-8z4nztpaqvay4****
     *
     * @var string
     */
    public $appCenterImageId;

    /**
     * @description The ID of the delivery group.
     *
     * This parameter is required.
     * @example aig-9ciijz60n4xsv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @description The ID of the region where the delivery group resides. For information about the supported regions, see [Limits](https://help.aliyun.com/document_detail/426036.html).
     *
     * Valid values:
     *
     *   cn-shanghai: China (Shanghai).
     *   cn-hangzhou: China (Hangzhou)
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The product type.
     *
     * Valid value:
     *
     *   CloudApp: App Streaming
     *
     * This parameter is required.
     * @example CloudApp
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'appCenterImageId'   => 'AppCenterImageId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'bizRegionId'        => 'BizRegionId',
        'productType'        => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCenterImageId) {
            $res['AppCenterImageId'] = $this->appCenterImageId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppInstanceGroupImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCenterImageId'])) {
            $model->appCenterImageId = $map['AppCenterImageId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
