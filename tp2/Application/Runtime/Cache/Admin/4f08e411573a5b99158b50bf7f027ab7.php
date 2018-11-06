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
    <a href="javascript:;" class="del">删除</a>
    <a href="javascript:;" class="edit">编辑</a>
    <a href="javascript:;" class="count">统计</a>
    <a href="javascript:;" class="check">审核</a>
</div>
<div class="table-box">
	<table>
    	<thead>
        	<tr>
            	<th class="num">序号</th>
                <th class="name">部门</th>
                <th class="process">所属部门</th>
                <th class="node">排序</th>
                <th class="time">备注</th>
                <th class="operate">操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><tr>
            	<td class="num"><?php echo ($vol["id"]); ?></td>
                <td class="name"><?php echo ($vol["name"]); ?></td>
                <td class="process"><?php echo ($vol["pid"]); ?></td>
                <td class="node"><?php echo ($vol["sort"]); ?></td>
                <td class="time"><?php echo ($vol["remark"]); ?></td>
                <td class="operate">
                    <input type="checkbox" class="depeid" value="<?php echo ($vol["id"]); ?>">
                    <a href="/tp2/index.php/Admin/Dept/edit/id/<?php echo ($vol["id"]); ?>">编辑</a>
                </td>

            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<div class="pagination ue-clear"></div>
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

$('.pagination').pagination(100,{
	callback: function(page){
		alert(page);	
	},
	display_msg: true,
	setPageNo: true
});

$("tbody").find("tr:odd").css("backgroundColor","#eff6fa");

showRemind('input[type=text], textarea','placeholder');

//JQ
    $(function(){
        $('.del').on('click',function () {
            //事件处理程序
            var idobj=$(':checkbox:checked');//选中的id
            var id='';

            //遍历idobj对象，获取其中的id
            for(var i=0;i<idobj.length;i++)
            {
                id=id+idobj[i].value+',';
            }
            id=id.substring(0,id.length-1);
            //带参数跳转
            window.location.href='/tp2/index.php/Admin/Dept/del/id/'+
            id;
        })
    });
</script>
</html>