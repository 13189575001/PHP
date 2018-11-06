<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/6/1
 * Time: 17:04
 */
//声明空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
    class IndexController extends Controller{

        /**
         *
         *显示index模板
         */
        public function index(){
            $this->display('index');
        }

    }