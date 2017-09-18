<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//引入系统类
use think\Route;
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//
//];

//定义路由规则

//静态路由
Route::rule('/','index/index/index');
Route::rule('admin','admin/Entry/index');
//带参数路由
//Route::rule('course/:id','index/index/course');
//Route::rule('shijian/:year/[:month]','index/index/shijian');
//动态 (不建议使用)
//Route::rule(':a/:b','index/index/dongtai');
//完全匹配路由
//Route::rule('test1$','index/index/test1');

//Route::rule('post','index/index/post','post');
Route::rule([
   "test"=>"index/index/test",
   "course/:id"=>"index/index/course"
],"",'get');