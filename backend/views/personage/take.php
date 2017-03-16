<?php
  use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="/many/upload/favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<title> Powered by 74CMS</title>
<?=Html::cssFile('@web/public/css/common.css')?>
<?=Html::jsFile( '@web/public/js/jquery.min.js')?>
<script>
  var URL = '/many/upload/index.php/admin/personal',
    SELF = '/many/upload/index.php?m=admin&amp;c=personal&amp;a=promotion',
    ROOT_PATH = '/many/upload/index.php/admin',
    APP  =   '/many/upload/index.php';
</script>
<?=Html::jsFile( '@web/public/js/jquery.QSdialog.js')?>
<?=Html::jsFile( '@web/public/js/jquery.vtip-min.js')?>
<?=Html::jsFile( '@web/public/js/jquery.grid.rowSizing.pack.js')?>
<?=Html::jsFile( '@web/public/js/jquery.validate.min.js')?>
<?=Html::jsFile( '@web/public/js/common.js')?>
</head>
<body style="background-color:#E0F0FE">
	<div class="admin_main_nr_dbox">
	    <div class="pagetit">
	        <div class="ptit"> 职位订阅</div>
	        	        <div class="clear"></div>
	    </div>
   <div class="seltpye_x">
    <div class="left">添加时间</div>  
    <div class="right">
    <a href="/many/upload/index.php?m=admin&c=personal&a=jobs_subscribe&addtime=" class="select">不限</a>
    <a href="/many/upload/index.php?m=admin&c=personal&a=jobs_subscribe&addtime=3" >三天内</a>
    <a href="/many/upload/index.php?m=admin&c=personal&a=jobs_subscribe&addtime=7" >一周内</a>
    <a href="/many/upload/index.php?m=admin&c=personal&a=jobs_subscribe&addtime=30" >一月内</a>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
  <form id="form1" name="form1" method="post" action="/many/upload/index.php?m=admin&c=personal&a=subscribe_del">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="link_lan" id="list">
    <tr>
      <td height="26" class="admin_list_tit admin_list_first" >
      <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>接收邮箱</label>
    </td>
      <td width="15%" class="admin_list_tit">订阅关键字</td>
     <td width="15%" class="admin_list_tit">意向职位</td>
     <td width="15%" class="admin_list_tit">意向行业</td>
     <td width="10%" class="admin_list_tit">意向薪资</td>
      <td width="10%" align="center" class="admin_list_tit"> 意向地区 </td>
      <td width="10%" align="center" class="admin_list_tit" >添加时间</td>
      <td width="10%" align="center" class="admin_list_tit" >操作</td>
    </tr>
        </table>
  </form>
  <div class="admin_list_no_info">没有任何信息！</div><table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
<tr>
        <td>
    <input name="ButDel" type="button" class="admin_submit" id="ButDel"  value="删除"/>
    </td>
        <td width="305" align="right">
    <form id="formseh" name="formseh" method="get" action="?">  
          <input type="hidden" name="m" value="Admin">
          <input type="hidden" name="c" value="Personal">
          <input type="hidden" name="a" value="jobs_subscribe">
      <div class="seh">
          <div class="keybox"><input name="key" type="text"   value="" /></div>
          <div class="selbox">
          <input name="key_type_cn"  id="key_type_cn" type="text" value="意向职位" readonly="true"/>
            <div>
                <input name="key_type" id="key_type" type="hidden" value="1" />
                        <div id="sehmenu" class="seh_menu">
                            <ul>
                            <li id="1" title="意向职位">意向职位</li>
                            <li id="2" title="意向行业">意向行业</li>
                            <li id="3" title="意向地区">意向地区</li>
                            <li id="4" title="接收邮箱">接收邮箱</li>
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
</body>
</html>
<script type="text/javascript">
$(document).ready(function()
{
  showmenu("#key_type_cn","#sehmenu","#key_type");
  //删除
  $("#ButDel").click(function(){
    if (confirm('你确定要删除吗？'))
    {
      $("form[name=form1]").submit()
    }
  }); 
});
</script>
</body>
</html>