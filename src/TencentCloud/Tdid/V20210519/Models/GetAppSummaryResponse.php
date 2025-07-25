<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAppSummary返回参数结构体
 *
 * @method ResourceCounterData getAppCounter() 获取用户参与应用的统计指标 
 * @method void setAppCounter(ResourceCounterData $AppCounter) 设置用户参与应用的统计指标 
 * @method ResourceCounterData getUserCounter() 获取用户创建资源的统计指标
 * @method void setUserCounter(ResourceCounterData $UserCounter) 设置用户创建资源的统计指标
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetAppSummaryResponse extends AbstractModel
{
    /**
     * @var ResourceCounterData 用户参与应用的统计指标 
     */
    public $AppCounter;

    /**
     * @var ResourceCounterData 用户创建资源的统计指标
     */
    public $UserCounter;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ResourceCounterData $AppCounter 用户参与应用的统计指标 
     * @param ResourceCounterData $UserCounter 用户创建资源的统计指标
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppCounter",$param) and $param["AppCounter"] !== null) {
            $this->AppCounter = new ResourceCounterData();
            $this->AppCounter->deserialize($param["AppCounter"]);
        }

        if (array_key_exists("UserCounter",$param) and $param["UserCounter"] !== null) {
            $this->UserCounter = new ResourceCounterData();
            $this->UserCounter->deserialize($param["UserCounter"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
