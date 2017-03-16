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
		SELF = '/many/upload/index.php?m=admin&amp;c=personal&amp;a=index',
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
	        <div class="ptit"> 简历列表</div>
	        	        <div class="clear"></div>
	    </div>
<div class="seltpye_y">
  <div class="tit link_lan">
    <strong>简历列表</strong><span>(共找到1条)</span>
    <a href="/many/upload/index.php?m=admin&c=personal&a=index">[恢复默认]</a>
    <div class="pli link_bk"><u>每页显示：</u>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&pagesize=10" class="select">10</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&pagesize=20" >20</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&pagesize=30" >30</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&pagesize=60" >60</a>
      <div class="clear"></div>
    </div>
  </div>
  <div class="list">
    <div class="t">可见状态</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&tabletype=0" class="select">不限<span>(1)</span></a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&tabletype=1" >可见简历<span>(1)</span></a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&tabletype=2" >非可见简历<span>(0)</span></a>
    </div>
  </div>
  
  <div class="list">
    <div class="t">审核状态</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&audit=" class="select">不限</a>
	    <a href="/many/upload/index.php?m=admin&c=personal&a=index&audit=2" >等待审核<span >(0)</span></a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&audit=1" >审核通过<span>(1)</span></a>
    
	  <a href="/many/upload/index.php?m=admin&c=personal&a=index&audit=3" >审核未通过<span>(0)</span></a>    </div>
  </div>
 
<div class="list" >
    <div class="t">照片</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&photos=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&photos=1" >有</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&photos=2" >无</a>
    </div>
  </div>
  <div class="list" >
    <div class="t">添加时间</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&addtimesettr=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&addtimesettr=3" >三天内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&addtimesettr=7" >一周内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&addtimesettr=30" >一月内</a>
    </div>
  </div>
  <div class="list" >
    <div class="t">刷新时间</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&settr=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&settr=3" >三天内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&settr=7" >一周内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&settr=30" >一月内</a>
    </div>
  </div>
  <div class="list" >
    <div class="t">是否委托</div>
    <div class="txt link_lan">
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&entrust=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&entrust=1" >一周</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&entrust=2" >二周</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=index&entrust=3" >一个月</a>
    </div>
  </div>
    <div class="clear"></div>
</div>
<form id="form1" name="form1" enctype="multipart/form-data" method="post" action="/many/upload/index.php?m=admin&c=personal&a=set_audit">
  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="link_lan">
    <tr>
      <td class="admin_list_tit admin_list_first" >
        <label id="chkAll"><input type="checkbox" name="" title="全选/反选" id="chk"/>姓名</label>   </td>
        <td   align="center"  width="140" class="admin_list_tit">完整指数 </td>
        <td align="center"  width="12%"  class="admin_list_tit">审核状态</td>
        <td   align="center" width="12%" class="admin_list_tit">公开</td>
        <td align="center" width="12%"  class="admin_list_tit">添加时间</td>
        <td align="center"  width="12%"  class="admin_list_tit">刷新时间</td>
        <td align="center"  width="100"  class="admin_list_tit">委托状态</td>
        <td  align="center"  width="200" class="admin_list_tit">操作</td>
    </tr>
      <tr>
        <td  class="admin_list admin_list_first" >
          <input name="id[]" type="checkbox" id="id" value="1"  />
          <a href="/many/upload/index.php?m=home&c=resume&a=resume_show&id=1" target="_blank">小样</a>
      
                   
		  
        </td>
        <td align="center"  class="admin_list">
          <div style="width:100px;text-align:left; background-color:#CCCCCC; position:relative; font-size:0px">
            <div style="background-color: #99CC00; height:13px; color:#990000;width:35%;font-size:0px"></div>
            <div style="position:absolute;top:0px; left:40%; font-size:9px;">35%</div>
          </div> </td>
          <td align="center"  class="admin_list">
            审核通过                        			<span class="view audit_log" title="查看日志" parameter="type=resume_id&id=1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </td>
          <td align="center"  class="admin_list">
            公开
                      </td>
          <td align="center"  class="admin_list">03-14 11:59</td>
          <td align="center"  class="admin_list">03-14 11:59</td>
		  <td align="center"  class="admin_list">
		  
          无
		           </td>
          <td align="center"  class="admin_list">
            <a href="/many/upload/index.php?m=admin&c=personal&a=resume_show&id=1" >查看</a>
            &nbsp;
            <a class="userinfo"  parameter="uid=1" href="javascript:void(0);" hideFocus="true">管理</a>
            &nbsp;
            <a class="userinfo"  href="/many/upload/index.php?m=admin&c=personal&a=resume_delete&id=1" onClick="return confirm('您确定删除吗?')">删除</a>
            &nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;          </td>
        </tr>      </table>
      <span id="OpAudit"></span>
      <span id="OpPhotoresume"></span>
      <span id="OpImportresume"></span>
    </form>
        <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
          <input type="button" class="admin_submit" id="ButAudit" value="审核简历" />
          <input type="button" class="admin_submit" id="Butrefresh" value="刷新"/>
          <input type="button" class="admin_submit" id="ButDel" value="删除"/>
        </td>
        <td width="305" align="right">
          <form id="formseh" name="formseh" method="get" action="?">
          <input type="hidden" name="m" value="Admin">
          <input type="hidden" name="c" value="Personal">
          <input type="hidden" name="a" value="index">
            <div class="seh">
              <div class="keybox"><input name="key" type="text"   value="" /></div>
              <div class="selbox">
                <input name="key_type_cn"  id="key_type_cn" type="text" value="姓名" readonly="true"/>
                <div>
                  <input name="key_type" id="key_type" type="hidden" value="1" />
                  <div id="sehmenu" class="seh_menu">
                    <ul>
                      <li id="1" title="姓名">姓名</li>
                      <li id="2" title="ID">ID</li>
                      <li id="3" title="UID">UID</li>
                      <li id="4" title="电话">电话</li>
                      <!--<li id="5" title="QQ">QQ</li>-->
                      <li id="6" title="地址">地址</li>
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
    <div class="qspage"> <a class='unable'>上一页</a>  <span class='current'>1</span> <a class='unable'>下一页</a> </div>
  </div>
  <div id="AuditSet" style="display: none" >
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
      <tr>
        <td height="30">&nbsp;</td>
        <td height="30"><strong  style="color:#0066CC; font-size:14px;">将所选简历设置为：</strong></td>
      </tr>
      <tr>
        <td width="40" height="25">&nbsp;</td>
        <td>
          <label >
            <input name="audit" type="radio" value="1" checked="checked" id="success" />
          审核通过 </label>   </td>
        </tr>
        <tr>
          <td width="40" height="25">&nbsp;</td>
          <td width="400"><label >
            <input type="radio" name="audit" value="3"  id="fail"/>
          审核未通过</label></td>
        </tr>
        <tr>
          <td width="50" height="25">&nbsp;</td>
          <td>
            <label><input type="checkbox" name="pms_notice" value="1"  checked="checked"/>
            站内信通知
          </label></td>
        </tr>
        <tr id="reason">
          <td width="40" height="25" >备注：</td>
          <td>
            <textarea name="reason" id="reason" cols="40" style="font-size:12px"></textarea>
          </td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td><span style="border-top: 1px #A3C7DA solid;">
            <input type="submit" name="set_audit" value="确定" class="admin_submit">
          </span></td>
        </tr>
      </table>
    </div>
    <div id="ImportSet" style="display: none" >
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
        <tr>
          <input type="file" name="file"  style="height:21px; width:210px; border:1px #999999 solid" />
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td><span style="border-top: 1px #A3C7DA solid;">
            <input type="button" name="set_import" id="set_import" value="确定" class="admin_submit">
          </span></td>
        </tr>
      </table>
    </div>
   
    
</body>
</html>
    <?=Html::jsFile( '@web/public/js/jquery.entrustinfotip-min.js')?>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $(".ajax_send_sms").QSdialog({
    DialogTitle:"发送短信",
    DialogContentType:"url",
    DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=ajax_send_sms&"
    });
  $(".ajax_send_email").QSdialog({
    DialogTitle:"发送邮件",
    DialogContentType:"url",
    DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=ajax_send_email&"
    });
    showmenu("#key_type_cn","#sehmenu","#key_type");
    $("#ButAudit").QSdialog({
    DialogAddObj:"#OpAudit",
    DialogTitle:"请选择",
    DialogContent:"#AuditSet",
    DialogContentType:"id"
    });
	 $(".userinfo").QSdialog({
  DialogTitle:"管理",
  DialogContentType:"url",
  DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=userinfo&"
  });
  $(".audit_log").QSdialog({
  DialogTitle:"审核日志",
  DialogContentType:"url",
  DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=audit_log&"
  });
    //点击批量删除
    $("#ButDel").click(function(){
    if (confirm('你确定要删除吗？'))
    {
    $("form[name=form1]").attr("action","/many/upload/index.php?m=admin&c=personal&a=resume_delete");
    $("form[name=form1]").submit()
    }
    });
    $("#Butrefresh").click(function(){
    $("form[name=form1]").attr("action","/many/upload/index.php?m=admin&c=personal&a=refresh");
    $("form[name=form1]").submit()
    });
    //纵向列表排序
    $(".listod .txt").each(function(i){
    var li=$(this).children(".select");
    var htm="<a href=\""+li.attr("href")+"\" class=\""+li.attr("class")+"\">"+li.text()+"</a>";
    li.detach();
    $(this).prepend(htm);
    });
    $("#not_audit").click(function(){
    $("#is_del_img").show();
    });
    $("#yes_audit").click(function(){
    $("#is_del_img").hide();
    });
    });
    </script>
  </body>
</html>