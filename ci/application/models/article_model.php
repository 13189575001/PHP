<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/5
 * Time: 10:36
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class article_model extends CI_Model{

    public function add($data){
        $this->db->insert('article',$data);
   }
    /*
     * 查看文章
     */
    public function check(){

        $data=$this->db->select('aid,title,cname,time')->from('article')->
        join('category','article.cid=category.cid')->order_by('aid','asc')->get()->result_array();
        return $data;

    }
    /*
     * 查询对文章
     */
    public function check_article($aid){
        $data=$this->db->where(array('aid'=>$aid))->get('article')->result_array();
        return $data;


    }
    /*
    * 删除文章
    */
    public function delete($aid){
        $this->db->delete('article',array('aid'=>$aid));
    }
    /*
     * 修改更新文章
     */
    public function update($data,$aid){
        $this->db->update('article',$data,array('aid'=>$aid));
    }




}