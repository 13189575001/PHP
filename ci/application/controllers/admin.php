<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/18
 * Time: 14:43
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class admin extends MY_Controller{
    /*
     * 默认控制器
     */
    public function index(){
   $this->load->view('admin/index.html');
    }
    public function copy(){
        $this->load->view('admin/copy.html');
    }
    /*
     * 密码修改
     */
    public function change(){
        $this->load->view('admin/change_passwd.html');
    }
    /*
     * 密码修改动作
     */
    public function change_passwd(){
        //载入admin_model模型
        $this->load->model('admin_model','admin');
        $uname=$this->session->userdata('uname');
        $userData=$this->admin->check($uname);

        $passwd=$this->input->post('passwd');

        if(md5($passwd)!=$userData[0]['passwd'])error("原始密码错误");

        $passwdf=$this->input->post('passwdF');
        $passwdS=$this->input->post('passwdS');
        if($passwdf!=$passwdS)error("两次密码不相同");

        $uid=$this->session->userdata('uid');
        $data=array(
            'passwd' =>md5($passwdS)

        );
        $this->admin->change($uid,$data);
         succeed("admin/change","修改成功");
    }
}