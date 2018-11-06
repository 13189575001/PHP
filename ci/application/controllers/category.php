<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/23
 * Time: 10:54
 */

defined('BASEPATH') OR exit('No direct script access allowed');
class category extends MY_COntroller
{
    public function __construct()
    {
        //重写方法必须写在parent::__construct()下面
        parent::__construct();
        $this->load->model('category_model','cate');
        $this->load->helper('form');
    }

    public function index(){


        //$this->load->model('category_model','cate');//载入模型
        $data['category']=$this->cate->check();//check方法显示category数据
        $this->load->view('admin/cate.html',$data);//$data传输数据过去
    }
     public function cate_view(){

         $this->load->helper('form');
         $this->load->view('admin/add_cate.html');
     }

    /**
     * 添加动作
     */
     public function add(){
         //载入表单验证类
         $this->load->library('form_validation');
         //执行验证
         $stast=$this->form_validation->run('cate');

         if($stast){
             $data=array(
                 //$this->input->post('cname')获取POST值
             'cname'=>$this->input->post('cname'),//cname对应的数据库字段
         );
             //载入model

            // $this->load->model('category_model');
             $this->cate->add($data);
             succeed('category/index','添加成功');//自定义函数

         }else{
             $this->load->helper('form');
             $this->load->view('admin/add_cate.html');
         }
     }
     /*
      * 编辑
      */
     public function edit_cate(){
         //取片段
        $cid= $this->uri->segment(3);
        //echo $cid;die;
         //载入model

         //$this->load->model('category_model','cate');
         $data['category']=$this->cate->check_cate($cid);
         $this->load->helper('form');
         $this->load->view('admin/edit_cate.html',$data);
     }
     /*
      * 编辑动作
      */
     public function edit(){
         //载入表单验证类
         $this->load->library('form_validation');
         //执行验证
         $stast=$this->form_validation->run('cate');

         if($stast){
             //载入model
            // $this->load->model('category_model','cate');//cate是category_model的别名
             $cid=$this->input->post('cid');
             $cname=$this->input->post('cname');
             $data=array(
                 'cname'=>$cname
             );
             $data['category']=$this->cate->update_cate($cid,$data);//$this->cate->update_cate（）
             succeed('category/index','修改成功');
         }else{
             $this->load->helper('form');
             $this->load->view('admin/edit_cate.html');
         }
     }
     /*
      * 删除动作
      */
     public function delete(){
         //取cid
        $cid= $this->uri->segment(3);
         //载入model
        // $this->load->model('category_model','cate');//cate是category_model的别名
         $this->cate->delete($cid);
         succeed('category/index','删除成功');

     }
}