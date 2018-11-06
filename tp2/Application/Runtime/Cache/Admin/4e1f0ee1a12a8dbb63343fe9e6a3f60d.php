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
    	<label>用户名：</label>
        <input type="text" name="username" placeholder="用户名:" />
    </p>
    <p class="short-input ue-clear">
        <label>密码：</label>
        <input type="password" name="password" placeholder="密码:" />
    </p>
    <p class="short-input ue-clear">
        <label>姓名：</label>
        <input type="text" name="nickname" placeholder="姓名:" />
    </p>
    <p class="short-input ue-clear">
        <label>昵称：</label>
        <input type="text" name="truename" placeholder="昵称:" />
    </p>
    <div class="short-input select ue-clear">
    	<label>所属部门：</label>
        <div class="select-wrap">
                <select name="dept_id">
                    <option value="-1">请选择</option>
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vol["id"]); ?>"><?php echo ($vol["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
        </div>
    </div>
    <p class="short-input ue-clear">
        <label>性别：</label>
        <input type="radio" name="sex" value="男" checked="checked" /><span>男</span>
        <input type="radio" name="sex" value="女"/><span>女</span>
    </p>

    <p class="short-input ue-clear">
    	<label>生日：</label>
        <input type="text" name="birthday" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})"/>
    </p>
    <p class="short-input ue-clear">
        <label>联系电话：</label>
        <input type="text" name="tel" placeholder="联系电话:" />
    </p>
    <p class="short-input ue-clear">
        <label>邮箱：</label>
        <input type="text" name="email" placeholder="邮箱:" />
    </p>
    <p class="short-input ue-clear">
        <label>备注：</label>
        <textarea placeholder="请输入内容" name="remark"></textarea>
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