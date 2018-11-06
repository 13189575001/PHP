<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/15
 * Time: 21:00
 */
/*
 * 管理员模型
 */
class admin_model extends CI_Model
{
    /*
     * 查询后台用户
     */
    public function check($uname){
       $data= $this->db->get_where('admin',array('uname'=>$uname))->result_array();
      return $data;
    }

    /*
     * 修改密码
     */
    public function change($uid,$data){
        $this->db->update('admin',$data,array('uid'=>$uid));
    }
}