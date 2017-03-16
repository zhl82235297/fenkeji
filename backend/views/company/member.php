<?php

use yii\helpers\Html;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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
  var URL = '/tpl/index.php/admin/company_members',
    SELF = '/tpl/index.php?m=admin&amp;c=company_members&amp;a=index',
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
          <div class="ptit"> 企业会员</div>
                    <div class="clear"></div>
      </div>
    <div class="seltpye_x">
    <div class="left">验证类型</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&verification=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&verification=1" >邮箱已验证</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&verification=2" >邮箱未验证</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&verification=3" >手机已验证</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&verification=4" >手机未验证</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
    <div class="left">注册时间</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=3" >三天内</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=7" >一周内</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=30" >一月内</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=180" >半年内</a>
      <a href="/tpl/index.php?m=admin&c=company_members&a=index&settr=360" >一年内</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  
  <form id="form1" name="form1" method="post" action="/tpl/index.php?m=admin&c=company_members&a=delete">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
      <tr>
        <td class="admin_list_tit admin_list_first" >
          <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>用户名</label></td>
       <td class="admin_list_tit">企业信息</td>
          <td class="admin_list_tit">email</td>
          <td class="admin_list_tit">手机</td>
         
          <td width="10%" align="center" class="admin_list_tit">注册时间</td>
          <td width="10%" align="center" class="admin_list_tit">注册IP</td>
       <td width="10%"   align="center"   class="admin_list_tit">注册地</td>
          <td width="10%" align="center" class="admin_list_tit">最后登录时间</td>
         
          <td width="13%"  align="center"  class="admin_list_tit" >操作</td>
        </tr>
                </table>
        <span id="DelSel"></span>
      </form>
      <div class="admin_list_no_info">没有任何信息！</div>      <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
        <tr>
          <td>
            <input type="button" name="ButAdd" value="添加会员" class="admin_submit"  onclick="window.location.href='/tpl/index.php?m=admin&c=company_members&a=add'"/>
            <input type="button" name="ButDel"  id="ButDel" value="删除会员" class="admin_submit"/>
            <input type="button" name="AddConsultant" id="AddConsultant" value="设置顾问" class="admin_submit"/>
          </td>
          <td width="305" align="right">
            <form id="formseh" name="formseh" method="get" action="?">
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="CompanyMembers">
              <input type="hidden" name="a" value="index">
              <div class="seh">
                <div class="keybox"><input name="key" type="text"   value="" /></div>
                <div class="selbox">
                  <input name="key_type_cn"  id="key_type_cn" type="text" value="用户名" readonly="true"/>
                  <div>
                    <input name="key_type" id="key_type" type="hidden" value="1" />
                    <div id="sehmenu" class="seh_menu">
                      <ul>
                        <li id="1" title="用户名">用户名</li>
                        <li id="2" title="UID">UID</li>
                        <li id="3" title="email">email</li>
                        <li id="4" title="手机号">手机号</li>
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
      <div id="GetDelInfo" style="display: none" >
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
        <tr>
          <td width="30" height="30">&nbsp;</td>
          <td height="30"><strong  style="color:#0066CC; font-size:14px;">你确定要删除吗？</strong></td>
        </tr>
        <tr>
          <td width="27" height="25">&nbsp;</td>
          <td><label>
            <input name="delete_user" type="checkbox" id="delete_user" value="yes" checked="checked" />
          删除此会员 <span style="color:#666666">(删除后此会员将无法登录，无法管理已发布的信息等)<span></label></td>
        </tr>
        <tr>
          <td width="27" height="25">&nbsp;</td>
          <td width="425"><label>
            <input name="delete_company" type="checkbox" id="delete_company" value="yes" checked="checked" />
          删除此会员的企业资料</label></td>
        </tr>
        <tr>
          <td width="27" height="25">&nbsp;</td>
          <td width="425"><label>
            <input name="delete_jobs" type="checkbox" id="delete_jobs" value="yes" checked="checked"/>
          删除此企业发布的招聘信息</label></td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td><input type="submit" name="delete" value="确定删除" class="admin_submit"/></td>
        </tr>
      </table>
    </div>
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
  $(".ajax_send_sms").QSdialog({
    DialogTitle:"发送短信",
    DialogContentType:"url",
    DialogContent:"/tpl/index.php?m=admin&c=ajax&a=ajax_send_sms&"
    });
  $(".ajax_send_email").QSdialog({
    DialogTitle:"发送邮件",
    DialogContentType:"url",
    DialogContent:"/tpl/index.php?m=admin&c=ajax&a=ajax_send_email&"
    });
  showmenu("#key_type_cn","#sehmenu","#key_type");
  $(".userinfo").QSdialog({
  DialogTitle:"管理",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=userinfo&"
  });
$("#ButDel").QSdialog({
DialogAddObj:"#DelSel",
DialogTitle:"请选择",
DialogContent:"#GetDelInfo",
DialogContentType:"id",
DialogWidth:"500"
});
$(".login_log").QSdialog({
  DialogTitle:"最新5次登录记录",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=login_log&"
  });
//点击批量设置顾问
  $("#AddConsultant").click(function(){
        $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=company_members&a=consultant_install&");
    $("form[name=form1]").submit()
  });
});
</script>
  </body>
</html>