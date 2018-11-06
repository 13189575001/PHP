<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页</title>
<link  type="text/css" rel="stylesheet"  href="/tp2/Public/Admin/css/style.css"/>
<link  type="text/css" rel="stylesheet"  href="/tp2/Public/Admin/css/index.css"/>
<script  src="/tp2/Public/Adminjs/jquery.min.js"></script>
<!-- 动态菜单JS -->
<script type="text/javascript"  src="/tp2/Public/Admin/js/menu.js"></script>
</head>

<body>
<div class="container">
 <div class="cont-top">
  <div class="companyname">首耀照明</div>
  <div class="cont-top-middle">
   <ul>
    <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Adminimg/icon.png">
      </div>
       <div class="top-txt">购物单</div>
     </a>
    </li>
    
    <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Admin/img/icon1.png">
      </div>
      <div class="top-txt">收款单</div>
     </a>
    </li>
    
     <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Admin/img/icon1.png">
      </div>
      <div class="top-txt">收款单</div>
     </a>
    </li>
    
     <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Admin/img/icon1.png">
      </div>
      <div class="top-txt">收款单</div>
     </a>
    </li>
    
     <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Admin/img/icon1.png">
      </div>
      <div class="top-txt">收款单</div>
     </a>
    </li>
    
     <li>
     <a href="#">
      <div class="top-middle">
       <img src="/tp2/Public/Admin/img/icon1.png">
      </div>
      <div class="top-txt">收款单</div>
     </a>
    </li>
   
   </ul>
  </div>
  <div class="cont-top-rg">
   <ul class="advanced-menu">
    <li>
     <div class="top-search">
      <div class="t-s-l">
       <span class="left-line"></span>
       <input type="text" value="搜库存" class="search-type" disabled>
       <span class="triangle-bottom"></span>
      </div>
      <div class="t-s-l">
       <input type="text" placeholder="请输入商品编码或名称" class="search-dt" autocomplete="off"> 
       <span class="right-line"></span>
       <span class="right-icon"><img src="/tp2/Public/Admin/img/search-icon.png"></span>
      </div>
     </div>
    </li>

    <li class="default" style="position:relative;">
     <span class="user"><img src="img/user.png"></span>
     <a  href="#" class="special"> 小丫头<i><img src="/tp2/Public/Admin/img/xl.png"></i></a>
     <div class="drop-down-wrap" style="width:180px;left:15px;display: none;">
      <div class="drop-down">
       <span class="triangle-border"></span>
       <span class="triangle-bg"></span>
       <ul class="del-ul">
        <li><a href="#" class="hot">首耀照明</a></li>
        <li><a href="#">小丫头</a></li>
        <li><a href="#">操作日志</a></li>       
       </ul>
      </div>
     </div>
    </li>    
   </ul>
   <ul class="advanced-menu">
    <li>
     <a href="#"><img  src="/tp2/Public/Admin/img/top-icon1.png"></a>
    </li>
    <li>
     <a href="#"><img  src="/tp2/Public/Admin/img/top-icon2.png"></a>
    </li>
    <li>
     <a href="#"><img  src="/tp2/Public/Admin/img/top-icon3.png"></a>
    </li>
    <li>
     <a href="#"><img  src="/tp2/Public/Admin/img/top-icon4.png"></a>
    </li>
    <li>
     <a href="login.php"><img  src="/tp2/Public/Admin/img/top-icon5.png" onclick="return confirm('你确定要退出系统吗？')"></a>
    </li>
   </ul>
  </div>
 </div>
 <div class="left-menu" style="height:949px;">
  <div class="menu-list">
   <ul>

    
    <li class="menu-list-02">
     <a  href="ckgl.php">
     <p class="fumenu">产品管理</p>
     <img class="xiala" src="/tp2/Public/Admin/img/xiala.png" />
     </a>
     <div class="list-p">

     </div>
    </li>
    
    <li class="menu-list-01" >
    <a href="goods_order.php">
     <p class="fumenu">订单管理</p>
     <img class="xiala" src="/tp2/Public/Admin/img/xiala.png" />
     </a>
     <div class="list-p">
      <p class="zcd" id="zcd8">下单账户</p>

     </div>
    </li>
    
    <li class="menu-list-01" >
    <a href="user.php">
     <p class="fumenu">客户管理</p>
     <img class="xiala" src="/tp2/Public/Admin/img/xiala.png" />
     </a>
     <div class="list-p">

     </div>
    </li>
    
    <li class="menu-list-02">
    <a href="Employee.php">
     <p class="fumenu">员工管理</p>
     <img class="xiala" src="/tp2/Public/Admin/img/xiala.png" />
     </a>
     <div class="list-p">
      <p class="zcd" id="zcd22">员工基本信息</p>
      <p class="zcd" id="zcd23">员工权限</p>
       <p class="zcd" id="zcd24">开通新客户</p>
      <p class="zcd" id="zcd25">销售额管理</p>
     </div>
    </li>
   </ul>
  </div>
 </div>
 <div class="right-menu">
  <div class="main-hd">
   <div class="page-teb" style="height:887px;">
    <div class="l-tab-links">
     <ul style="left:0;">
      <li class="l-select">
       <a href="index.php" style="padding:0 25px;">首页</a>
      </li>
     </ul>
    </div>
    <div class="l-tab-content" style="height:851px;">
     <div class="tab-content-item">
      <div class="home">
      <!--成交金额-->
       <div class="space-style">
        <div class="col-xs">
         <a  href="#" class="title-button bg-deep">
          <div class="carousel">
           <div class="left-img">
            <i><img src="/tp2/Public/Admin/img/left-img1.png"></i>
            <p>成交金额</p>
           </div>
           <div class="right-info"></div>
          </div>
         </a>
        </div>
        
         <div class="col-xs">
         <a  href="#" class="title-button bg-red">
          <div class="carousel">
           <div class="left-img bg-color-red">
            <i><img src="img/left-img2.png"></i>
            <p>订单</p>
           </div>
           <div class="right-info"></div>
          </div>
         </a>
        </div>
        
         <div class="col-xs">
         <a  href="#" class="title-button bg-green">
          <div class="carousel">
           <div class="left-img bg-color-green">
            <i><img src="img/left-img3.png"></i>
            <p>通知</p>
           </div>
           <div class="right-info">125条</div>
          </div>
         </a>
        </div>
        
         <div class="col-xs">
         <a  href="#" class="title-button bg-orange">
          <div class="carousel">
           <div class="left-img bg-color-orange">
            <i><img src="/tp2/Public/Admin/img/left-img4.png"></i>
            <p>待处理</p>
           </div>
           <div class="right-info">10条</div>
          </div>
         </a>
        </div>

       </div>
       

       
       <!--销售情况-->
       <div class="order-form">
        <div class="col-xs-3 col-lg-7">
         <div class="admin-info">
          <div class="title-name">
           <i></i>
            登录记录
           <a href="#">+更多</a>
          </div>
          <table class="record-list">
           <tbody>

            <tr>
             <td>/td>
             <td></td>
            </tr>

           </tbody>
          </table>
         </div>
        </div>
        
        <div class="col-xs-6 ranking-style">
         <div class="frame">
          <div class="title-name">
            <i></i>
            商品销售排行
           <a href="#">+更多</a>
          </div>
          <table class="table table-list">
           <thead>
            <tr>
             <th width="50">排名</th>
             <th>商品编号</th>
             <th>商品名称</th>
             <th width="80">销售数量</th>
            </tr>
           </thead>
           <tbody>

            <tr>
             <td>
              <em></em>
             </td>
             <td></td>
             <td><a href="#"></a></td>
             <td></td>
            </tr>
            

           </tbody>
          </table>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
</body>
</html>