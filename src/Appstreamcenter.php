<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ApproveOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\AuthorizeInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CancelOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CancelOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetOtaTaskByTaskIdResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetResourcePriceResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAppInstanceGroupResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListNodeInstanceTypeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListOtaTaskResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListRegionsResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppInstanceGroupAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyNodePoolAttributeShrinkRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\PageListAppInstanceGroupUserResponse;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageRequest;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\UpdateAppInstanceGroupImageResponse;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Appstreamcenter extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('appstream-center', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param ApproveOtaTaskRequest $request
     * @param RuntimeOptions        $runtime
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->otaType)) {
            $body['OtaType'] = $request->otaType;
        }
        if (!Utils::isUnset($request->startTime)) {
            $body['StartTime'] = $request->startTime;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ApproveOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ApproveOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ApproveOtaTaskRequest $request
     *
     * @return ApproveOtaTaskResponse
     */
    public function approveOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->approveOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @param AuthorizeInstanceGroupRequest $request
     * @param RuntimeOptions                $runtime
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->authorizeUserIds)) {
            $body['AuthorizeUserIds'] = $request->authorizeUserIds;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->unAuthorizeUserIds)) {
            $body['UnAuthorizeUserIds'] = $request->unAuthorizeUserIds;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'AuthorizeInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return AuthorizeInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param AuthorizeInstanceGroupRequest $request
     *
     * @return AuthorizeInstanceGroupResponse
     */
    public function authorizeInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->authorizeInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @param CancelOtaTaskRequest $request
     * @param RuntimeOptions       $runtime
     *
     * @return CancelOtaTaskResponse
     */
    public function cancelOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CancelOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CancelOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CancelOtaTaskRequest $request
     *
     * @return CancelOtaTaskResponse
     */
    public function cancelOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->cancelOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @param CreateAppInstanceGroupRequest $tmpReq
     * @param RuntimeOptions                $runtime
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroupWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new CreateAppInstanceGroupShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodePool)) {
            $request->nodePoolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->nodePool), 'NodePool', 'json');
        }
        if (!Utils::isUnset($tmpReq->userInfo)) {
            $request->userInfoShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->userInfo), 'UserInfo', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $body['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $body['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->autoPay)) {
            $body['AutoPay'] = $request->autoPay;
        }
        if (!Utils::isUnset($request->autoRenew)) {
            $body['AutoRenew'] = $request->autoRenew;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeResourceMode)) {
            $body['ChargeResourceMode'] = $request->chargeResourceMode;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $body['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->nodePoolShrink)) {
            $body['NodePool'] = $request->nodePoolShrink;
        }
        if (!Utils::isUnset($request->period)) {
            $body['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $body['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->promotionId)) {
            $body['PromotionId'] = $request->promotionId;
        }
        if (!Utils::isUnset($request->sessionTimeout)) {
            $body['SessionTimeout'] = $request->sessionTimeout;
        }
        if (!Utils::isUnset($request->userInfoShrink)) {
            $body['UserInfo'] = $request->userInfoShrink;
        }
        if (!Utils::isUnset($request->users)) {
            $body['Users'] = $request->users;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'CreateAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return CreateAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param CreateAppInstanceGroupRequest $request
     *
     * @return CreateAppInstanceGroupResponse
     */
    public function createAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->createAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @param GetOtaTaskByTaskIdRequest $request
     * @param RuntimeOptions            $runtime
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskIdWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->taskId)) {
            $body['TaskId'] = $request->taskId;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'GetOtaTaskByTaskId',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetOtaTaskByTaskIdResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetOtaTaskByTaskIdRequest $request
     *
     * @return GetOtaTaskByTaskIdResponse
     */
    public function getOtaTaskByTaskId($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getOtaTaskByTaskIdWithOptions($request, $runtime);
    }

    /**
     * @param GetResourcePriceRequest $request
     * @param RuntimeOptions          $runtime
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePriceWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->amount)) {
            $query['Amount'] = $request->amount;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->chargeType)) {
            $query['ChargeType'] = $request->chargeType;
        }
        if (!Utils::isUnset($request->nodeInstanceType)) {
            $query['NodeInstanceType'] = $request->nodeInstanceType;
        }
        if (!Utils::isUnset($request->period)) {
            $query['Period'] = $request->period;
        }
        if (!Utils::isUnset($request->periodUnit)) {
            $query['PeriodUnit'] = $request->periodUnit;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetResourcePrice',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return GetResourcePriceResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetResourcePriceRequest $request
     *
     * @return GetResourcePriceResponse
     */
    public function getResourcePrice($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->getResourcePriceWithOptions($request, $runtime);
    }

    /**
     * @param ListAppInstanceGroupRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroupWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $query['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->regionId)) {
            $query['RegionId'] = $request->regionId;
        }
        $body = [];
        if (!Utils::isUnset($request->status)) {
            $body['Status'] = $request->status;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
            'body'  => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListAppInstanceGroup',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListAppInstanceGroupResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListAppInstanceGroupRequest $request
     *
     * @return ListAppInstanceGroupResponse
     */
    public function listAppInstanceGroup($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listAppInstanceGroupWithOptions($request, $runtime);
    }

    /**
     * @param ListNodeInstanceTypeRequest $request
     * @param RuntimeOptions              $runtime
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceTypeWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->language)) {
            $query['Language'] = $request->language;
        }
        if (!Utils::isUnset($request->osType)) {
            $query['OsType'] = $request->osType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $query['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $query['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ListNodeInstanceType',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListNodeInstanceTypeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListNodeInstanceTypeRequest $request
     *
     * @return ListNodeInstanceTypeResponse
     */
    public function listNodeInstanceType($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listNodeInstanceTypeWithOptions($request, $runtime);
    }

    /**
     * @param ListOtaTaskRequest $request
     * @param RuntimeOptions     $runtime
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTaskWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->otaType)) {
            $body['OtaType'] = $request->otaType;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ListOtaTask',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListOtaTaskResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ListOtaTaskRequest $request
     *
     * @return ListOtaTaskResponse
     */
    public function listOtaTask($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->listOtaTaskWithOptions($request, $runtime);
    }

    /**
     * @param RuntimeOptions $runtime
     *
     * @return ListRegionsResponse
     */
    public function listRegionsWithOptions($runtime)
    {
        $req    = new OpenApiRequest([]);
        $params = new Params([
            'action'      => 'ListRegions',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ListRegionsResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @return ListRegionsResponse
     */
    public function listRegions()
    {
        $runtime = new RuntimeOptions([]);

        return $this->listRegionsWithOptions($runtime);
    }

    /**
     * @param ModifyAppInstanceGroupAttributeRequest $tmpReq
     * @param RuntimeOptions                         $runtime
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyAppInstanceGroupAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodePool)) {
            $request->nodePoolShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->nodePool), 'NodePool', 'json');
        }
        $query = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->appInstanceGroupName)) {
            $query['AppInstanceGroupName'] = $request->appInstanceGroupName;
        }
        if (!Utils::isUnset($request->nodePoolShrink)) {
            $query['NodePool'] = $request->nodePoolShrink;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        if (!Utils::isUnset($request->sessionTimeout)) {
            $query['SessionTimeout'] = $request->sessionTimeout;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'ModifyAppInstanceGroupAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyAppInstanceGroupAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyAppInstanceGroupAttributeRequest $request
     *
     * @return ModifyAppInstanceGroupAttributeResponse
     */
    public function modifyAppInstanceGroupAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyAppInstanceGroupAttributeWithOptions($request, $runtime);
    }

    /**
     * @param ModifyNodePoolAttributeRequest $tmpReq
     * @param RuntimeOptions                 $runtime
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttributeWithOptions($tmpReq, $runtime)
    {
        Utils::validateModel($tmpReq);
        $request = new ModifyNodePoolAttributeShrinkRequest([]);
        OpenApiUtilClient::convert($tmpReq, $request);
        if (!Utils::isUnset($tmpReq->nodePoolStrategy)) {
            $request->nodePoolStrategyShrink = OpenApiUtilClient::arrayToStringWithSpecifiedStyle(Tea::merge($tmpReq->nodePoolStrategy), 'NodePoolStrategy', 'json');
        }
        $body = [];
        if (!Utils::isUnset($request->bizRegionId)) {
            $body['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->nodeCapacity)) {
            $body['NodeCapacity'] = $request->nodeCapacity;
        }
        if (!Utils::isUnset($request->nodePoolStrategyShrink)) {
            $body['NodePoolStrategy'] = $request->nodePoolStrategyShrink;
        }
        if (!Utils::isUnset($request->poolId)) {
            $body['PoolId'] = $request->poolId;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'ModifyNodePoolAttribute',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return ModifyNodePoolAttributeResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param ModifyNodePoolAttributeRequest $request
     *
     * @return ModifyNodePoolAttributeResponse
     */
    public function modifyNodePoolAttribute($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->modifyNodePoolAttributeWithOptions($request, $runtime);
    }

    /**
     * @param PageListAppInstanceGroupUserRequest $request
     * @param RuntimeOptions                      $runtime
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUserWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $body = [];
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $body['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->pageNumber)) {
            $body['PageNumber'] = $request->pageNumber;
        }
        if (!Utils::isUnset($request->pageSize)) {
            $body['PageSize'] = $request->pageSize;
        }
        if (!Utils::isUnset($request->productType)) {
            $body['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'body' => OpenApiUtilClient::parseToMap($body),
        ]);
        $params = new Params([
            'action'      => 'PageListAppInstanceGroupUser',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return PageListAppInstanceGroupUserResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param PageListAppInstanceGroupUserRequest $request
     *
     * @return PageListAppInstanceGroupUserResponse
     */
    public function pageListAppInstanceGroupUser($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->pageListAppInstanceGroupUserWithOptions($request, $runtime);
    }

    /**
     * @param UpdateAppInstanceGroupImageRequest $request
     * @param RuntimeOptions                     $runtime
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImageWithOptions($request, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appCenterImageId)) {
            $query['AppCenterImageId'] = $request->appCenterImageId;
        }
        if (!Utils::isUnset($request->appInstanceGroupId)) {
            $query['AppInstanceGroupId'] = $request->appInstanceGroupId;
        }
        if (!Utils::isUnset($request->bizRegionId)) {
            $query['BizRegionId'] = $request->bizRegionId;
        }
        if (!Utils::isUnset($request->productType)) {
            $query['ProductType'] = $request->productType;
        }
        $req = new OpenApiRequest([
            'query' => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAppInstanceGroupImage',
            'version'     => '2021-09-01',
            'protocol'    => 'HTTPS',
            'pathname'    => '/',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'RPC',
            'reqBodyType' => 'formData',
            'bodyType'    => 'json',
        ]);

        return UpdateAppInstanceGroupImageResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAppInstanceGroupImageRequest $request
     *
     * @return UpdateAppInstanceGroupImageResponse
     */
    public function updateAppInstanceGroupImage($request)
    {
        $runtime = new RuntimeOptions([]);

        return $this->updateAppInstanceGroupImageWithOptions($request, $runtime);
    }
}
