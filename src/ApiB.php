<?php
/*
 * @author: 布尔
 * @name:  B端api
 * @desc: 介绍
 * @LastEditTime: 2024-12-23 16:18:25
 */

namespace Eykj\Haigui;

class ApiB extends Service
{
    /**
     * @author: 布尔
     * @name: 查询货柜信息
     * @param array $param
     */
    public function machine_shop_search(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/machine-shop/search";
        // 请求体
        $bodys = eyc_array_key($param, 'machineId|machine_id');
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 激活货柜
     * @param array $param
     */
    public function machine_shop_create(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/machine-shop/create";
        // 请求体
        $bodys = eyc_array_key($param, 'machineSerialNum|machineSn,name|title,address');
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 查询店铺的商品模板
     * @param array $param
     */
    public function commodity_shop_search(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/commodity-shop/search";
        // 请求体
        $bodys = eyc_array_key($param, 'commodityId|commodity_id');
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 新增商品模板
     * @param array $param
     */
    public function commodity_shop_create(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/commodity-shop/create";
        // 请求体
        $bodys = eyc_array_key($param, 'name|title,packId|pack_id,categoryId|category_id,price,images|image');
        $bodys['packId'] = (int)$bodys['packId'];
        $bodys['categoryId'] = (int)$bodys['categoryId'];
        $bodys['images'] = y_json_decode($bodys['images']);
        $bodys['price'] = (float)($bodys['price'] ?? 0.01);
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 删除商品模板
     * @param array $param
     */
    public function commodity_shop_delete(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/commodity-shop/delete";
        // 请求体
        $bodys = eyc_array_key($param, 'commodityId|commodity_id');
        $bodys['commodityId'] = (int)$bodys['commodityId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 更新货柜的商品信息
     * @param array $param
     */
    public function commodity_machine_update(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/commodity-machine/update";
        // 请求体
        $bodys = eyc_array_key($param, 'machineId|machine_id,commodity,machineSerialNum|machineSn,name|title,name|title,address');
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 操作货柜重启/开门
     * @param array $param
     */
    public function machine_manager(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/machine/manager";
        // 请求体
        $bodys = eyc_array_key($param, 'machineId|machine_id,action,param');
        $bodys['machineId'] = (int)$bodys['machineId'];
        if (isset($bodys['param'])) {
            $bodys['param'] = (int)$bodys['param'];
        }
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 获取货柜状态
     * @param array $param
     */
    public function machine_get_status(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/machine/get-status";
        // 请求体
        $bodys = eyc_array_key($param, 'machineIds|machine_ids');
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
    /**
     * @author: 布尔
     * @name: 配置广告视频
     * @param array $param
     */
    public function machine_update_ads(array $param)
    {
        //域名后、query前的部分
        $path = "/api-b/machine/update-ads";
        // 请求体
        $bodys = eyc_array_key($param, 'machineId|machine_id,ads');
        $bodys['machineId'] = (int)$bodys['machineId'];
        return $this->Client->doPostStream($path, bodyContent: json_encode($bodys, 320));
    }
}
