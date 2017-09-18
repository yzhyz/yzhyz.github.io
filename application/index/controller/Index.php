<?php
namespace app\index\controller;
use think\Db;
use think\Controller;
use app\index\controller\User;
use think\Config;
class Index extends Controller
{
    public function index()
    {

         //return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
        $da=Db::table("users")->select();
         //分配数据
        $this->assign("data",$da);
        //加载页面
        return view();
    }
    public function jiazai(){
        return view();
    }
    public  function test(){
        return "我是用户自己创建的test方法";
    }

    public function fangfa(){
        //return "111";
        //调用那个当前控制器地方法
        echo $this->test();
        echo "<hr>";
        echo self::test();
        echo "<hr>";
        echo Index::test();
        echo "<hr>";
        echo action("test");
    }

    //调用其他控制器中的方法
    public function fangfas(){
        echo action("User/index");
    }

    //调用后台模块的方法
    public function fangfass(){
        echo action("admin/Index/index");
    }

    //读取配置文件
    public function getConfig(){
        //输出配置文件  系统函数
        echo  config('name');
        echo "<hr>";
        echo  config('age');
        echo "<hr>";
        echo  config('sex');

        //系统类读取
        //如果配置项存在 直接输出 不存在返回了null

        echo "<hr>";
        echo \think\config::get("name");
        echo \think\config::get("age");
        echo config::get("sex");
        echo "<hr>";

        echo config('teacher.name');
        echo config('teacher.age');
        echo config('teacher.sex');

        echo "<hr>";
        echo config::get("teacher.name");
        echo config::get("teacher.age");
        echo config::get("teacher.sex");
    }

    //课程
    public function course(){
         echo input('id');
    }

    public function shijian(){
        echo input('year').' '.input('month');
    }

    public function dongtai(){
        echo input('a').' '.input('b');
    }

    public function test1(){
        echo "我是测试方法1";
    }

    public function post(){
        dump(input());
        return view();
    }
}
