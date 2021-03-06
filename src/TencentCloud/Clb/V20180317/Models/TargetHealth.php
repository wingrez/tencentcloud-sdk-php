<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getIP() 获取Target的内网IP
 * @method void setIP(string $IP) 设置Target的内网IP
 * @method integer getPort() 获取Target绑定的端口
 * @method void setPort(integer $Port) 设置Target绑定的端口
 * @method boolean getHealthStatus() 获取当前健康状态，true：健康，false：不健康。
 * @method void setHealthStatus(boolean $HealthStatus) 设置当前健康状态，true：健康，false：不健康。
 * @method string getTargetId() 获取Target的实例ID，如 ins-12345678
 * @method void setTargetId(string $TargetId) 设置Target的实例ID，如 ins-12345678
 */

/**
 *描述一个Target的健康信息
 */
class TargetHealth extends AbstractModel
{
    /**
     * @var string Target的内网IP
     */
    public $IP;

    /**
     * @var integer Target绑定的端口
     */
    public $Port;

    /**
     * @var boolean 当前健康状态，true：健康，false：不健康。
     */
    public $HealthStatus;

    /**
     * @var string Target的实例ID，如 ins-12345678
     */
    public $TargetId;
    /**
     * @param string $IP Target的内网IP
     * @param integer $Port Target绑定的端口
     * @param boolean $HealthStatus 当前健康状态，true：健康，false：不健康。
     * @param string $TargetId Target的实例ID，如 ins-12345678
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }
    }
}
