<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/25
 * Time: 11:01
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class category_model extends CI_Model{
    /**
     * 添加
     */
    public function add($data){
        //category是表名
       $this->db->insert('category',$data);
    }

    /*
     * 查看栏目get查询category全部数据
     */
    public function check(){
        $data=$this->db->get('category')->result_array();
        return $data;
}
    /*
     * 查询对应栏目
     */
    public function check_cate($cid){
        $data=$this->db->where(array('cid'=>$cid))->get('category')->result_array();

        return $data;
    }
    /*
     * 修改栏目
     */
    public function update_cate($cid,$data){
        $this->db->update('category',$data,array('cid'=>$cid));

    }
    /*
     * 删除栏目
     */
    public function delete($cid){
        $this->db->delete('category',array('cid'=>$cid));
    }
    /*
     * 查询文章
     */
    public function limit_category($limin){
        $data['category']=$this->db->limit($limin)->get('category')->result_array();
        return $data;
    }


}