<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/17
 * Time: 19:14
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller
{
    /*
     * 默认控制器
     */
    public function index()
    {
          $this->load->model('category_model','cat');
         $data['category']=$this->cat->limit_category(2);

        $this->load->view('index/home.html',$data);

    }
    public function category() {
        $this->load->view('index/emotion.html');

    }
}