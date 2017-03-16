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
		APP	 =	 '/many/upload/index.php';
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
	        <div class="ptit"> 个人推广</div>
	        	        <div class="clear"></div>
	    </div>
  <div class="toptip">
    <h2>提示：</h2>
    <p>
      系统将自动取消到期的简历推广。<br />
      此列表不显示到期、停止、未通过审核的简历推广信息。<br />
    </p>
  </div>
    <div class="seltpye_x">
    <div class="left">推广类型</div>
    <div class="right">
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&type=stick" class="select">置顶</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&type=tag" >标签</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
    <div class="left">到期时间</div>
    <div class="right">
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=0" >已经到期</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=3" >三天内到期</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=7" >一周内到期</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=30" >一月内到期</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=promotion&settr=90" >三月内到期</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/many/upload/index.php?m=admin&c=personal&a=promotion_stick_deltet">
    <input name="_k_v" type="hidden" value="">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
      <tr>
        <td  width="30%" class="admin_list_tit admin_list_first">
          <label id="chkAll"><input type="checkbox" name="" title="全选/反选" id="chk"/>姓名</label>   </td>
          <td  width="10%" align="center" class="admin_list_tit">推广类型</td>
          <td  align="center"  class="admin_list_tit">会员ID</td>
          <td  align="center"  class="admin_list_tit">推广天数</td>
          <td align="center"  class="admin_list_tit">开始时间</td>
          <td  align="center"  class="admin_list_tit">到期时间</td>
          <td width="10%" align="center"  class="admin_list_tit">操作</td>
        </tr>
                </table>
        <div class="admin_list_no_info">没有任何信息！</div>      </form>
      
      <table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
        <tr>
          <td>
            <input type="button" name="Submit22" value="添加推广" class="admin_submit"    onclick="window.location='/many/upload/index.php?m=admin&c=personal&a=promotion_add&'"/>
            <input type="button" name="ButDel" id="ButDel" value="取消推广" class="admin_submit" />
          </td>
          <td width="305">
            <form id="formseh" name="formseh" method="get" action="?">
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Personal">
              <input type="hidden" name="a" value="promotion">
              <input type="hidden" name="type" value="">
              <div class="seh">
                <div class="keybox"><input name="key" type="text"   value="" /></div>
                <div class="selbox">
                  <input name="key_type_cn"  id="key_type_cn" type="text" value="简历名称" readonly="true"/>
                  <div>
                    <input name="key_type" id="key_type" type="hidden" value="1" />
                    <div id="sehmenu" class="seh_menu">
                      <ul>
                        <li id="1" title="简历名称">简历名称</li>
                        <li id="2" title="简历ID">简历ID</li>
                        <li id="3" title="会员ID">会员ID</li>
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
          </td>        </tr>
      </table>
      <div class="qspage"></div>
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
  DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=userinfo&"
  });
    //点击批量取消
  $("#ButDel").click(function(){
    
    if (confirm('你确定要取消推广吗？'))
    {
      $("form[name=form1]").submit()
    }
  });
    
});
</script>
  </body>
</html>