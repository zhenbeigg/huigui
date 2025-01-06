<?php
/*
 * @author: 布尔
 * @name:  C端api
 * @desc: 介绍
 * @LastEditTime: 2025-01-02 17:26:37
 */

namespace Eykj\Haigui;

class ApiC extends Service
{
    /**
     * @author: 布尔
     * @name: 创建订单
     * @param array $param
     */
    public function order_create(array $param)
    {
        //域名后、query前的部分
        $path = "/api-c/order/create";
        // 请求体
        $bodys = eyc_array_key($param, 'outOrderNo|number,outConsumerId|id,machineId|machine_id,details');
        $bodys['outConsumerId'] = (int)$bodys['outConsumerId'];
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 订单解锁货柜
     * @param array $param
     */
    public function machine_lock_up(array $param)
    {
        //域名后、query前的部分
        $path = "/api-c/machine/lock-up";
        // 请求体
        $bodys = eyc_array_key($param, 'orderId,machineId|machine_id');
        $bodys['orderId'] = (int)$bodys['orderId'];
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 合作方同步订单状态
     * @param array $param
     */
    public function order_sync_status(array $param)
    {
        //域名后、query前的部分
        $path = "/api-c/order/sync-status";
        // 请求体
        $bodys = eyc_array_key($param, 'orderId,orderStatus');
        $bodys['orderId'] = (int)$bodys['orderId'];
        $bodys['orderStatus'] = (int)$bodys['orderStatus'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
}
