<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/8
 * Time: 15:51
 */

namespace app\index\controller;

use think\Controller;
class UseInfo extends  Controller
{
  //前置方法的属性
    protected $beforeActionList=[
        'one',
        //不想让index使用two方法
        'two'=>['except'=>"index"],
        //只让index使用three方法
        'three'=>['only'=>'index'],
    ];
    public function one(){
        echo "one<hr>";
    }
    public function two(){
        echo "two<hr>";
    }
    public function three(){
        echo "three<hr>";
    }
    public function index(){
        echo "我是index方法";
    }
    public function index1(){
        echo "我是index1方法";
    }
}