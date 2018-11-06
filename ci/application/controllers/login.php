<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/18
 * Time: 16:22
 */
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * 后台登录
 */
class login extends CI_Controller{

    public function index(){
        //加载辅助函数

        $this->load->view('admin/index.html');
    }
    public function code(){
        $config=array(
            'width'  =>80,
            'height' =>30,
            'codeLen'=>1
        );
        $this->load->library('code',$config);
        $this->code->show();
    }
    public function login_in(){
        $code=$this->input->post('captcha');
        if(!isset($_SESSION))
        {
            session_start();
        }
        if(strtoupper($code)!=$_SESSION['code'])error('验证码错误');
         $uname=$this->input->post('username');
         $passwd=$this->input->post('passwd');
         $this->load->model('admin_model','ad');
         $userdata=$this->ad->check($uname);
         if(!$userdata||$userdata[0]['passwd']!=md5($passwd))error('账户密码错误');

//          $this->load->viwe(admin/index);
        $sessionData=array(
            'uname'    =>$uname,
            'uid'      =>$userdata[0]['uid'],
            'logintime'=>time()
        );
        //载入全局Sessiond后的写法
            $this->session->set_userdata($sessionData);
        succeed('admin/index','登录成功');
    }
    public function login_out(){
        $this->session->sess_destroy();
        succeed('login/index','退出成功');
    }
}