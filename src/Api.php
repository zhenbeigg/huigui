<?php
/*
 * @author: 布尔
 * @name:  公共api
 * @desc: 介绍
 * @LastEditTime: 2024-12-17 09:18:30
 */

namespace Eykj\Haigui;

class Api extends Service
{
    /**
     * @author: 布尔
     * @name: 获取版本号
     * @param array $param
     */
    public function version()
    {
        $path = "/api/version";
        return $this->Client->doPostForm($path);
    }
}
