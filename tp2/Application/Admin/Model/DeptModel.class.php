<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/8/1
 * Time: 13:39
 */
//声明空间
namespace Admin\Model;
//引入父类
use Think\Model;
class DeptModel extends Model{

    //开启批量验证
    //protected $patchValidate=true;
//自动验证
    protected $_validate        =   array(
        //针对部门不能为空
        array('name','require','部门名称不能为空！'),
        array('name','','部门名称已存在！',0,'unique'),
        //使用函数验证是否为数字
        array('sort','is_numeric','排序必须是数字',0,'function'),
        //验证是否为数字
        //array('sort','number','排序必须为数字')
    );

    //字段映射定义
    protected $_map             =  array(
        //映射规则
        //键是表单中的name值=值是数据库表中的字段名
       // 'abc'      =>      'name',
      //        'fg'      =>      'deo'
    );

}