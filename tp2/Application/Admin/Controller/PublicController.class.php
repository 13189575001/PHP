<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/8/1
 * Time: 12:59
 */
//声明空间
namespace Admin\Controller;
//引入父类
use Think\Controller;

class PublicController extends Controller
{
    //验证码获取
    public function captcha(){
        $cfg=array(
            'fontSize' =>15,
            'useCurve' =>false,
            'useNoise' =>false,
            'length'   =>4,
        );
        //实例化验证码
        $verify= new \Think\Verify($cfg);
        //输出验证码
        $verify->entry();
    }

    //展示登录模板
    public function login(){
//接收数据


        $this->display();
    }

    public function checklogin(){
        $post=I('post.');
        //验证码
        $verify=new \Think\Verify();
        //判断验证true or false
        $result=$verify->check($post[capcha]);

       if($result){
           //验证码正确
           $model=M('user');
           //删除验证码元素
           unset($post['captcha']);
           //查询一条记录不用 select（）
           $data=$model->where($post)->find();

           //判断结果集
           if($data){
             //存在用户，用户信息的持久化，保存到session
               session('id',$data['id']);
               session('username',$data['username']);
               session('role_id',$data['role_id']);
               //跳转
               $this->success('登录成功',U('Index/index'),2);//2为等待时间2S

           }else{
               //用户不存在
               $this->error('用户名或密码错误');}

       }else{
           //验证码不正确
           $this->error('你输入验证码错误');
       }
    }

    //退出登录
    public function logout(){

        //清除session
        session(null);
        //跳转
        $this->success('退出成功',U('login'),3);

    }

}