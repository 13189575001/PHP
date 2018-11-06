<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/15
 * Time: 21:48
 */

class MY_Controller extends CI_Controller
{

    public function __construct()
    {
        parent::__Construct();
        $uname=$this->session->userdata('uname');
        $uid=$this->session->userdata('uid');
        if(!$uname||!$uid){
            redirect('login/index');
        }
    }
}