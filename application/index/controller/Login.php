<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/8
 * Time: 16:18
 */

namespace app\index\controller;

use think\Controller;
class Login extends Controller
{
       public function index(){
           //加载登录页面
          return view();
       }

       //处理登录的提交页面
    public function check(){
           //接收数据
        $usernmae=$_POST['username'];
        $password=$_POST['password'];

        //判断数据
        if ($usernmae=='admin'&&$password=='123'){
            $this->success('跳转成功1',"/");
        }else{
            $this->error('挑战失败');

        }

    }
}