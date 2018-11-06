<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/8/1
 * Time: 14:01
 */
//声明空间
namespace Admin\Controller;
//引入父类
use Think\Controller;
class DeptController extends Controller
{

  /*  public function tianjia(){
       //实例化模型
        $model=M('Dept');//直接使用基本增删改查可以使用父类模型
        //关联数组
        $data=array(
                    'name'  => '人事部',
                    'pid'   => '0',
                    'sort'  => '1',
                    'remark'=> '这是人事部门'


             )  ;
        $result=  $model->add($data);//添加操作
        dump($result);
    }*/
    public function add(){


        if(IS_POST){
           //处理表单提交
            //$post=I('post.');
            //写入数据
            $model=D('Dept');
            //表单的字段需要和数据库表字段一致，不然会被过滤
            $data=$model->create();//不传递参数则接收post值
            if(!$data){
                //提示用户验证失败
                $this->error($model->getError());exit();
            }
            $result=$model->add();
            if($result){
                //成功
                $this->success('添加成功',U('showlist'),3);
            }else{
                //失败
                $this->error('添加失败');
            }
        }else{
            //实例化模型
            $model=M('Dept');
            $data=$model->where('pid=0')->select();
            //展示数据
            $this->assign('data',$data);
            $this->display();
        }
    }
        //部门列表
    public function showList(){
       //模型实例化
        $model=M('dept');
        //查询
        $data=$model->order('sort asc')->select();
        $this->assign('data',$data);
        //展现模板
        $this->display();
    }
    //编辑
    public function edit(){
        if(IS_POST)
        {
            //接收数据
            $post=I('post.');
            //实例化模型
            $model=M('dept');
            //执行更新数据

            $result=$model->save($post);
            //判断是否成功
            if($result!==false){
                //成功
                $this->success('更新成功',U(showList),3);
            }else{
                //失败
                $this->error('更新失败');
            }

        }else {
            //接收id
            $id = I('get.id');
            //实例化模型
            $model = M('dept');
            //查询
            $data = $model->find($id);
            $info = $model->where('id!=' . $id)->select();
            //传入模板
            $this->assign('data', $data);
            $this->assign('info', $info);
            $this->display();
        }
    }
    //删除操作
    public function del(){
        //接收数据
        $id=I('get.id');
        //实例化模型
        $model=M('dept');
        //删除
        $result=$model->delete($id);
        if($result){
            $this->success('删除成功',U(showList),3);
        }else{
            $this->error('删除失败');
        }

    }
}