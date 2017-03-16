<?php

use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
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
	var URL = '/tpl/index.php/admin/company',
		SELF = '/tpl/index.php?m=admin&amp;c=company&amp;a=increment',
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
	        <div class="ptit"> 增值服务</div>
	        	        <div class="clear"></div>
	    </div>
    <div class="seltpye_x">
		<div class="left">类型</div>	
		<div class="right">
			<a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=" class="select">不限</a>
			<a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=1" >套餐升级</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=2" >充值积分</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=6" >简历包</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=7" >短信包</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=8" >职位置顶</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=9" >职位紧急</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=10" >企业模板</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=11" >诚聘通</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=12" >预约刷新职位</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=13" >职位刷新</a><a href="/tpl/index.php?m=admin&c=company&a=increment&order_type=14" >简历下载</a>			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <div class="seltpye_x">
		<div class="left">添加时间</div>	
		<div class="right">
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=" class="select">不限</a>
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=3" >三天内</a>
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=7" >一周内</a>
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=30" >一月内</a>
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=180" >半年内</a>
		<a href="/tpl/index.php?m=admin&c=company&a=increment&settr=360" >一年内</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  class="admin_list_tit admin_list_first">服务内容</td>
	  <td class="admin_list_tit">公司名称</td>
	  <td align="center" class="admin_list_tit">申请会员</td>
	  <td class="admin_list_tit">金额</td> 
	  <td width="8%" align="center" class="admin_list_tit">时间</td>    
      <td width="15%" align="center"  class="admin_list_tit">操作</td>
    </tr>
	  </table>
	<div class="admin_list_no_info">没有任何信息！</div>	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td width="305" align="right">
		<form id="formseh" name="formseh" method="get" action="?">	
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Company">
              <input type="hidden" name="a" value="increment">
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
		
});
</script>
</body>
</html>