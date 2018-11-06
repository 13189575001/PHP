<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/19
 * Time: 8:37
 */
defined('BASEPATH') OR exit('No direct script access allowed');
     /*
     *
     */
class article extends MY_Controller{
    public function __construct()
    {
        //重写方法必须写在parent::__construct()下面
        parent::__construct();
        $this->load->model('article_model','art');
        $this->load->helper('form');
    }
     /*
       *发表模板显示
      */
    public function send_article(){
      // $this->load->helper('form');
       $this->load->model('category_model','cat');
        $data['actegory'] =$this->cat->check();

        $this->load->view('admin/article.html',$data);
    }
    /*
     * 查看文章
     */
    public function check_article(){

       $this->load->library('pagination');
        $perPage=3;
        //配置项设置
        $config['base_url']=site_url('article/check_article');
        $config['total_rows']=$this->db->count_all_results('article');
        $config['per_page']=$perPage;
        $config['uri_segment']=3;

        $config['first_link']='第一页';
        $config['prev_link']='上一页';
        $config['next_link']='下一页';
        $config['last_link']='最后一页';
        $this->pagination->initialize($config);
        $data['links']=$this->pagination->create_links();

        $offset=$this->uri->segment(3);
        $this->db->limit($perPage,$offset);

       $this->load->helper('form');
        $data['article']=$this->art->check();
        $this->load->view('admin/check_article.html',$data);
    }
    /*
     * 显示编辑文章
     */
    public function edit_article(){
        $aid=$this->uri->segment(3);
        $data['article']=$this->art->check_article($aid);
        $this->load->model('category_model','cat');
        $data['actegory'] =$this->cat->check();

        $this->load->view('admin/edit_article.html',$data);
    }
    /*
     * 编辑动作
     */
    public function update_article(){
        //载入表单验证类
        $this->load->library('form_validation');
        //验证规则
//        $this->form_validation->set_rules('title','文章标题','required|min_length[3]');
//        $this->form_validation->set_rules('type','类型','required|integer');
//        $this->form_validation->set_rules('cid','栏目','integer');
//        $this->form_validation->set_rules('info','摘要','required|max_length[155]');
//        $this->form_validation->set_rules('content','内容','required|max_length[100]');
        //执行验证
        $stast=$this->form_validation->run('article');
        //文件上传——————————————
        //配置
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['file_name']=time().mt_rand(1000,9999);

        //载入上传类
        $this->load->library('upload',$config);
        //执行上传
        $this->upload->do_upload('thcmb');

        $wrong=$this->upload->display_errors();
        if(!$wrong){
            echo "<script>alsrt('上传失败');</script>";
            echo error($wrong);
        }

        //返回信息
        $info=$this->upload->data();

        $aid=$this->input->post('aid');
        $str = trim($this->input->post('title'));// 首先去掉头尾空格
        $str = preg_replace('/\s(?=\s)/', '', $str);
        $data=array(
            'title'=>$str,
            'abstract'=>$this->input->post('info'),
            'content'=>$this->input->post('content'),
            'thcmb'=>$info['file_name'],
            'type'=>$this->input->post('type'),
            'cid'=>$this->input->post('cid'),
            'time'=>time()
        );

        $this->art->update($data,$aid);
        succeed('article/check_article',"修改成功");

    }
    /*
     * 删除动作
     */
    public function delete(){
        //取aid
        $aid= $this->uri->segment(3);

        $this->art->delete($aid);
        succeed('article/check_article','删除成功');

    }
    public function send (){
        //载入表单验证类
        $this->load->library('form_validation');
        //验证规则
//        $this->form_validation->set_rules('title','文章标题','required|min_length[3]');
//        $this->form_validation->set_rules('type','类型','required|integer');
//        $this->form_validation->set_rules('cid','栏目','integer');
//        $this->form_validation->set_rules('info','摘要','required|max_length[155]');
//        $this->form_validation->set_rules('content','内容','required|max_length[100]');
        //执行验证
        $stast=$this->form_validation->run('article');
        //文件上传——————————————
        //配置
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2000';
        $config['file_name']=time().mt_rand(1000,9999);

        //载入上传类
        $this->load->library('upload',$config);
        //执行上传
        $this->upload->do_upload('thcmb');

       $wrong=$this->upload->display_errors();
       if(!$wrong){
           echo "<script>alsrt('上传失败');</script>";
           echo error($wrong);
       }

       //返回信息
        $info=$this->upload->data();



       //缩略图--------
        //配置
       /* $arr['source_image']=$info['full_path'];
        $arr['create_thumb']=TRUE;
        $arr['maintain_ratio']=TRUE;
        $arr['width']=200;
        $arr['height']=200;
        //载入缩略图
        $this->load->library('image_lib',$arr);
        //执行动作

        $status=$this->image_lib->resize();
        
        if(!$status){
            error("缩略图动作失败");
        }*/

        if($stast){
            //echo "数据操作";

            $data=array(
                'title'=>$this->input->post('title'),
                'type'=>$this->input->post('type'),
                'cid'=>$this->input->post('cid'),
                'thcmb'=>$info['file_name'],

                'abstract'=>$this->input->post('info'),
                'content'=>$this->input->post('content'),
                'time'=>time()
            );

            $this->art->add($data);

            succeed('article/check_article','提交成功');//自定义函数

        }else{
            $this->load->model('category_model','cat');
            $data['actegory'] =$this->cat->check();

            $this->load->view('admin/article.html',$data);
        }

    }
}