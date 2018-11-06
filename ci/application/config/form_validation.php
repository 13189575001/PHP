<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/3/22
 * Time: 19:29
 */
;
$config=array(
    /*
     * 发表文章字段数组
     */

    'article'=>array(
        array(
                'field'=>'title',
                'lable'=>'标题',
                'rules'=>'required|min_length[5]'
              ),
        array(
            'field'=>'type',
            'label'=>'类型',
            'rules'=>'required|integer'
        ),
        array(
            'field'=>'cid',
            'label'=>'栏目',
            'rules'=>'integer'
        ),
        array(
            'field'=>'info',
            'label'=>'摘要',
            'rules'=>'required|max_length[155]'
        ),
        array(
            'field'=>'content',
            'label'=>'内容',
            'rules'=>'required|max_length[200]'
        ),
   ),
    /*
     * 添加栏目字段数组
     */
    'cate'=>array(
        array(
            'field'=>'cname',
            'label'=>'栏目标题',
            'rules'=>'required|max_length[155]'
        ),

)
);