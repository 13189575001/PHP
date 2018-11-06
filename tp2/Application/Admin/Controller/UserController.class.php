<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/8/18
 * Time: 20:35
 */
//声明命名空间
namespace Admin\Controller;
//引入父类
use  Think\Controller;

class Usercontroller extends Controller{


    //添加职员
    public function add(){
        if(IS_POST){

            //实例化模型
            $model=M('user');
            //创建数据对象
            $data=$model->create();
            //添加时间字段

           $data['addtime']=date('Y-m-d',time());
            //执行插入操作

            $result=$model->add($data);
            if($result){
                //插入成功
                $this->success('添加成功',U(showlist),3);
            }else{
                //插入失败
                $this->error('添加失败');
            }
        }else {
            //实例化模型
            $model = M('dept');
            //执行查询部门数据
            $data = $model->field('id,name')->select();
            //展示数据
            $this->assign('data', $data);
            //展示模板
            $this->display();
        }
    }

    public function showList(){
        //模型实例化
        $model=M('user');
        //分页第一步：查询总的记录数
        $count=$model->count();
        //实例化分页类，传递参数
        $page =new \Think\Page($count,2);
        //分页显示
        $show=$page->show();
        //查询
        $data=$model->limit($page->firstRow,$page->listRows)->select();
        $this->assign('data',$data);
        $this->assign('show',$show);
        $this->assign('count',$count);
        //展现模板
        $this->display();

    }
    //删除操作
    public function del(){
        //接收数据
        $id=I('get.id');
        //实例化模型
        $model=M('user');
        //删除
        $result=$model->delete($id);
        if($result){
            $this->success('删除成功',U(showList),3);
        }else{
            $this->error('删除失败');
        }

    }

}