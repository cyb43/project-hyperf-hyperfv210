<?php

declare(strict_types=1);
/**
 * ^2_3^ This file is part of Hyperf.
 * 路由定义
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

//// 默认路由
Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

//// icon请求
Router::get('/favicon.ico', function () {
    return '';
});
