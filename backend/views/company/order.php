<?php

use yii\helpers\Html;
?>
<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/tpl/favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<title> Powered by 74CMS</title>
<?=Html::cssFile('@web/public/css/common.css')?>
<?=Html::jsFile('@web/public/js/jquery.min.js')?>
<script>
	var URL = '/tpl/index.php/admin/order',
		SELF = '/tpl/index.php?m=admin&amp;c=order&amp;a=index',
		ROOT_PATH = '/tpl/index.php/admin',
		APP	 =	 '/tpl/index.php';
</script>
<?=Html::jsFile('@web/public/js/jquery.QSdialog.js')?>
<?=Html::jsFile('@web/public/js/jquery.vtip-min.js')?>
<?=Html::jsFile('@web/public/js/jquery.grid.rowSizing.pack.js')?>
<?=Html::jsFile('@web/public/js/jquery.validate.min.js')?>
<?=Html::jsFile('@web/public/js/common.js')?>
</head>
<body style="background-color:#E0F0FE">
	<div class="admin_main_nr_dbox">
	    <div class="pagetit">
	        <div class="ptit"> 订单管理</div>
	        	        <div class="clear"></div>
	    </div>
		<div class="seltpye_x">
		<div class="left">完成状态</div>	
		<div class="right">
			<a href="/tpl/index.php?m=admin&c=order&a=index&is_paid=" class="select">不限</a>
			<a href="/tpl/index.php?m=admin&c=order&a=index&is_paid=2" >已完成</a>
			<a href="/tpl/index.php?m=admin&c=order&a=index&is_paid=1" >待付款</a>
			<a href="/tpl/index.php?m=admin&c=order&a=index&is_paid=3" >已取消</a>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
    <div class="seltpye_x">
		<div class="left">付款方式</div>	
		<div class="right">
			<a href="/tpl/index.php?m=admin&c=order&a=index&payment=" class="select">不限</a>
			<a href="/tpl/index.php?m=admin&c=order&a=index&payment=points" >积分支付</a>
			<a href="/tpl/index.php?m=admin&c=order&a=index&payment=alipay" >支付宝</a><a href="/tpl/index.php?m=admin&c=order&a=index&payment=wxpay" >微信支付</a>			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <div class="seltpye_x">
		<div class="left">添加时间</div>	
		<div class="right">
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=" class="select">不限</a>
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=3" >三天内</a>
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=7" >一周内</a>
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=30" >一月内</a>
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=180" >半年内</a>
		<a href="/tpl/index.php?m=admin&c=order&a=index&settr=360" >一年内</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/tpl/index.php?m=admin&c=order&a=order_cancel">
  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  width="10%" class="admin_list_tit admin_list_first">
	   <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>全选</label></td>
      <td class="admin_list_tit" width="10%">金额</td>           
	  <td class="admin_list_tit">公司名称</td>
	  <td class="admin_list_tit">说明</td> 
	  <td align="center" class="admin_list_tit" width="190">单号</td>
	  <td width="10%" align="center" class="admin_list_tit">申请会员</td>
	  <td width="8%" align="center" class="admin_list_tit">申请时间</td>
      <td width="8%" align="center" class="admin_list_tit">支付方式</td>      
      <td width="15%" align="center"  class="admin_list_tit">操作</td>
    </tr>
	  </table>
	<div class="admin_list_no_info">没有任何信息！</div>  </form>
	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
          <input name="ButAudit" type="button" class="admin_submit" id="ButDelOrder"  value="取消订单"  />
		</td>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?">	
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Order">
              <input type="hidden" name="a" value="index">
			<div class="seh">
			    <div class="keybox"><input name="key" type="text"   value="" /></div>
			    <div class="selbox">
					<input name="key_type_cn"  id="key_type_cn" type="text" value="公司名" readonly="true"/>
						<div>
								<input name="key_type" id="key_type" type="hidden" value="1" />
												<div id="sehmenu" class="seh_menu">
														<ul>
														<li id="1" title="公司名">公司名</li>
														<li id="2" title="会员名">会员名</li>
														<li id="3" title="单号">单号</li>
														</ul>
												</div>
						</div>				
				</div>
				<div class="sbtbox">
				<input type="submit" name="" class="sbt" id="sbt" value="搜索"/>
				</div>
				<div class="clear"></div>
		  </div>
		  </form>
	    </td>
      </tr>
  </table>
<div class="qspage"></div>
</div>
<div class="footer link_lan">
Powered by <a href="http://www.74cms.com" target="_blank"><span style="color:#009900">74</span><span style="color: #FF3300">CMS</span></a> 4.1.24</div>
<div class="admin_frameset" >
  <div class="open_frame" title="全屏" id="open_frame"></div>
  <div class="close_frame" title="还原窗口" id="close_frame"></div>
</div>
</body>
</html>

<script type="text/javascript">
$(document).ready(function()
{
	showmenu("#key_type_cn","#sehmenu","#key_type");
$(".userinfo").QSdialog({
  DialogTitle:"管理",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=userinfo&"
  });
	//点击批量取消	
	$("#ButDelOrder").click(function(){
		if (confirm('你确定要取消吗？'))
		{
			$("form[name=form1]").submit()
		}
	});
		
});
</script>
</body>
</html>