<?php
/*
 * @author: 布尔
 * @name:  服务类
 * @desc: 介绍
 * @LastEditTime: 2024-12-17 09:18:30
 */

namespace Eykj\Haigui;

use Eykj\AliyunApiGateway\Client;
use function Hyperf\Support\env;

class Service
{
    public  $Client;

    /**
     * 构造方法初始化客户端
     */
    public function __construct()
    {
        $this->Client = new Client(env('HAIGUI_APP_KEY', ''), env('HAIGUI_APP_SECRET', ''), env('HAIGUI_HOST', 'https://api-dev.hpzn.vip'));
    }
}
