<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/5/30
 * Time: 8:35
 */
//声明空间
namespace Admin\Model;
//导入父类model
use Think\Model;
class NameModel extends Model{
    //字段映射定义
    protected $_map             =  array(
        //映射规则
        //键是表单中的name值=值是数据库表中的字段名
      'abc'      =>      'name',
      'fg'      =>      'deo'
    );
    //批量验证
    protected $patchValidate    = true;
//自动验证
    protected $_validate        =   array(
        array('','','部门名称已经存在！')
    );
}