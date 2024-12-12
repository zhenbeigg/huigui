<?php
/*
 * @author: 布尔
 * @name:  公共api
 * @desc: 介绍
 * @LastEditTime: 2024-12-12 11:43:23
 */

namespace Eykj\Haigui;

use Eykj\AliyunApiGateway\Service;
use function Hyperf\Support\env;

class Api
{
    private  $Service;
    
    /**
     * 构造方法初始化配置参数
     */
    public function __construct()
    {
        $this->Service =  new Service(env('HAIGUI_APP_KEY', ''), env('HAIGUI_APP_SECRET', ''), env('HAIGUI_HOST', 'https://api-dev.hpzn.vip'));
    }
     /**
     * @author: 布尔
     * @name: 获取版本号
     * @param array $param
     * @return array
     */
    public function version($path, array $headers, array $querys, $debug = false)
    {
        //域名后、query前的部分
        $path = "/get";
        $request = new HttpRequest($this::$host, $path, HttpMethod::GET, $this::$appKey, $this::$appSecret);

        //设定Content-Type，根据服务器端接受的值来设置
        $request->setHeader(HttpHeader::HTTP_HEADER_CONTENT_TYPE, ContentType::CONTENT_TYPE_TEXT);

        //设定Accept，根据服务器端接受的值来设置
        $request->setHeader(HttpHeader::HTTP_HEADER_ACCEPT, ContentType::CONTENT_TYPE_TEXT);
    }
}
