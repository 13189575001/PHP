<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/tp2/Public/Admin/css/base.css" />
    <link rel="stylesheet" href="/tp2/Public/Admin/css/info-reg.css" />
    <title>移动办公自动化系统</title>
</head>


<div class="title"><h2>信息登记</h2></div>
<form action="" method="post">
    <div class="main">

        <p class="short-input ue-clear">
            <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
            <label>部门名称：</label>
            <input type="text" name="name" placeholder="部门名称" value="<?php echo ($data["name"]); ?>"/>
        </p>
        <div class="short-input select ue-clear">
            <label>是上级部门：</label>
            <div class="select-wrap">
                <select name="pid">
                    <option value="0">顶级部门</option>
                    <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </div>
        </div>
        <p class="short-input ue-clear">
            <label>排序：</label>
            <input type="text" placeholder="排序" name="sort" value="<?php echo ($data["sort"]); ?>" >
        </p>

        <p class="short-input ue-clear">
            <label>备注：</label>
            <textarea placeholder="请输入内容" name="remark" ><?php echo ($data["remark"]); ?></textarea>
        </p>
    </div>
    <div class="btn ue-clear">
        <a href="javascript:;" class="confirm">确定</a>
        <a href="javascript:;" class="clear">清空内容</a>
    </div>
</form>
</body>
<script type="text/javascript" src="/tp2/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/tp2/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/tp2/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript">
    $(".select-title").on("click",function(){
        $(".select-list").toggle();
        return false;
    });
    $(".select-list").on("click","li",function(){
        var txt = $(this).text();
        $(".select-title").find("span").text(txt);
    });
    showRemind('input[type=text], textarea','placeholder');
    //JQ代码



    //  给确定按钮绑定点击事件
    $('.confirm').click(function () {
        $('form').submit();
    });
    $('.clear').click(function () {
        $('form')[0].reset();
    });


</script>
</html>