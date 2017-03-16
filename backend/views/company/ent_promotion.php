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
  var URL = '/tpl/index.php/admin/promotion',
    SELF = '/tpl/index.php?m=admin&amp;c=promotion&amp;a=index',
    ROOT_PATH = '/tpl/index.php/admin',
    APP  =   '/tpl/index.php';
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
          <div class="ptit"> 企业推广</div>
          <div class="topnav">
              <a href="/tpl/index.php?m=admin&c=promotion&a=index" class="select"><u>推广列表</u></a>           <div class="clear"></div>
        </div>          <div class="clear"></div>
      </div>
  <div class="toptip">
    <h2>提示：</h2>
    <p>
      系统将自动取消到期的企业推广。<br />
      此列表不显示到期、停止、未通过审核等职位的推广信息。<br />
    </p>
  </div>
    <div class="seltpye_x">
    <div class="left">到期时间</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=0" >已经到期</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=3" >三天内到期</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=7" >一周内到期</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=30" >一月内到期</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&settr=90" >三月内到期</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
    <div class="left">推广方案</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&ptype=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&ptype=stick" >职位置顶</a>
      <a href="/tpl/index.php?m=admin&c=promotion&a=index&ptype=emergency" >职位紧急</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/tpl/index.php?m=admin&c=promotion&a=delete">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
      <tr>
        <td  width="30%" class="admin_list_tit admin_list_first">
          <label id="chkAll"><input type="checkbox" name="" title="全选/反选" id="chk"/>推广职位</label>   </td>
          <td  width="20%" class="admin_list_tit">所属公司</td>
          <td  align="center"  class="admin_list_tit">会员ID</td>
          <td align="center"  class="admin_list_tit">开始时间</td>
          <td  align="center"  class="admin_list_tit">到期时间</td>
          <td width="10%" align="center"  class="admin_list_tit">操作</td>
        </tr>
                </table>
        <div class="admin_list_no_info">没有任何信息！</div>      </form>
      
      <table width="100%" border="0" cellspacing="10"  class="admin_list_btm">
        <tr>
          <td>
            <input type="button" name="Submit22" value="添加推广" class="admin_submit"    onclick="window.location='/tpl/index.php?m=admin&c=promotion&a=add'"/>
            
            <input type="button" name="ButDel" id="ButDel" value="取消推广" class="admin_submit" />
          </td>
          <td width="305">
            <form id="formseh" name="formseh" method="get" action="?">
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Promotion">
              <input type="hidden" name="a" value="index">
              <div class="seh">
                <div class="keybox"><input name="key" type="text"   value="" /></div>
                <div class="selbox">
                  <input name="key_type_cn"  id="key_type_cn" type="text" value="职位名" readonly="true"/>
                  <div>
                    <input name="key_type" id="key_type" type="hidden" value="1" />
                    <div id="sehmenu" class="seh_menu">
                      <ul>
                        <li id="1" title="职位名">职位名</li>
                        <li id="2" title="公司名">公司名</li>
                        <li id="3" title="职位ID">职位ID</li>
                        <li id="4" title="公司ID">公司ID</li>
                        <li id="5" title="会员ID">会员ID</li>
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