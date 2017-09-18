<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/5
 * Time: 13:53
 */

namespace app\index\controller;
use think\Controller;
use  think\View;

use app\index\controller\Index;
use app\admin\controller\Entry;
class User extends Controller
{
   public  function index(){
       return "yzhyzh";
   }

   //加载页面
    public function jiazai(){
       //return view();
        //$view=new view();
        //return $view->fetch();

        return $this->fetch();
    }

  public function _initialize(){
        echo "我是一个初始化的方法";
  }






   public function daioyong(){

       $model=new  \app\index\controller\Index;
       echo $model->test();
       echo "<hr>";
       //使用use
       $model=new Index;
       echo $model->test();
       echo "<hr>";
       //系统方法
       $model=controller('Index');
       echo $model->test();
   }

   //调用后台模块的
    public function admin(){
        $model=controller('admin/Entry');
        echo $model->index();
    }
}