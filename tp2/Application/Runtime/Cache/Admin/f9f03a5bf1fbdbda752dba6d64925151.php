<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/tp2/Public/Admin/css/base.css" />
<link rel="stylesheet" href="/tp2/Public/Admin/css/info-mgt.css" />
<link rel="stylesheet" href="/tp2/Public/Admin/css/WdatePicker.css" />
<title>移动办公自动化系统</title>
</head>

<body>
<div class="title"><h2>信息管理</h2></div>
</div>
<div class="table-operate ue-clear">
	<a href="javascript:;" class="add">添加</a>
    <a href="javascript:;" class="del" >删除</a>
    <a href="javascript:;" class="edit">编辑</a>
    <a href="javascript:;" class="count">统计</a>
    <a href="javascript:;" class="check">审核</a>
</div>
<div class="table-box">
	<table>
    	<thead>
        	<tr>
            	<th class="id">序号</th>
                <th class="username">姓名</th>
                <th class="nickname">昵称</th>
                <th class="dept_id">所属部门</th>
                <th class="sex">性别</th>
                <th class="birthday">生日</th>
                <th class="tel">电话</th>
                <th class="email">邮箱</th>
                <th class="addtime">添加时间</th>
                <th class="operate">操作</th>

            </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
                <th class="id"><?php echo ($vol["id"]); ?></th>
                <th class="username"><?php echo ($vol["username"]); ?></th>
                <th class="nickname"><?php echo ($vol["nickname"]); ?></th>
                <th class="dept_id"><?php echo ($vol["dept_id"]); ?></th>
                <th class="sex"><?php echo ($vol["sex"]); ?></th>
                <th class="birthday"><?php echo ($vol["birthday"]); ?></th>
                <th class="tel"><?php echo ($vol["tel"]); ?></th>
                <th class="email"><?php echo ($vol["email"]); ?></th>
                <th class="addtime"><?php echo ($vol["addtime"]); ?></th>

                <td class="operate">
                    <input type="checkbox" class="depeid" value="<?php echo ($vol["id"]); ?>">
                    <a href="/tp2/index.php/Admin/User/edit/id/<?php echo ($vol["id"]); ?>">编辑</a>
                </td>

            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>

<div class="pagination ue-clear">
    <div class="package-list">
        <?php echo ($show); ?>
    </div>
    <div class="pxofy">一共<?php echo ($count); ?>记录</div>
</div>
</body>
<script type="text/javascript" src="/tp2/Public/Admin/js/jquery.js"></script>
<script type="text/javascript" src="/tp2/Public/Admin/js/common.js"></script>
<script type="text/javascript" src="/tp2/Public/Admin/js/WdatePicker.js"></script>
<script type="text/javascript" src="/tp2/Public/Admin/js/jquery.pagination.js"></script>
<script type="text/javascript">
$(".select-title").on("click",function(){
	$(".select-list").hide();
	$(this).siblings($(".select-list")).show();
	return false;
})
$(".select-list").on("click","li",function(){
	var txt = $(this).text();
	$(this).parent($(".select-list")).siblings($(".select-title")).find("span").text(txt);
})

/*$('.pagination').pagination(100,{
	callback: function(page){
		alert(page);	
	},
	display_msg: true,
	setPageNo: true
});*/

$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');

//JQ
    $(function(){
        $('.del').on('click',function () {
            if(confirm('确认删除吗')) {
                //事件处理程序
                var idobj = $(':checkbox:checked');//选中的id
                var id = '';

                //遍历idobj对象，获取其中的id
                for (var i = 0; i < idobj.length; i++) {
                    id = id + idobj[i].value + ',';
                }
                id = id.substring(0, id.length - 1);
                //带参数跳转
                window.location.href = '/tp2/index.php/Admin/User/del/id/' +
                    id;
            }})
    });
</script>
</html>