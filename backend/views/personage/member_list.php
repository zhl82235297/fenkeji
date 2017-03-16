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
		SELF = '/many/upload/index.php?m=admin&amp;c=personal&amp;a=member_list',
		ROOT_PATH = '/many/upload/index.php/admin',
		APP	 =	 '/many/upload/index.php';
</script>
<?=Html::jsFile( '@web/public/js/jquery.QSdialog.js')?>
<?=Html::jsFile( '@web/public/js/jquery.vtip-min.js')?>
<?=Html::jsFile( '@web/public/js/jquery.grid.rowSizing.pack.js')?>
<?=Html::jsFile( '@web/public/js/jquery.validate.min.js')?>
<?=Html::jsFile( '@web/public/js/common.js')?>

<?=Html::jsFile('@web/public/js/jquery-1.9.1.min.js');  ?>
</head>
<body style="background-color:#E0F0FE">
	<div class="admin_main_nr_dbox">
	    <div class="pagetit">
	        <div class="ptit"> 个人会员</div>
	        	        <div class="clear"></div>
	    </div>
    <div class="seltpye_x">
    <div class="left">验证类型</div>
    <div class="right">
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&verification=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&verification=1" >邮箱已验证</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&verification=2" >邮箱未验证</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&verification=3" >手机已验证</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&verification=4" >手机未验证</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
    <div class="left">注册时间</div>
    <div class="right">
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=" class="select">不限</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=3" >三天内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=7" >一周内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=30" >一月内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=180" >半年内</a>
      <a href="/many/upload/index.php?m=admin&c=personal&a=member_list&settr=360" >一年内</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/many/upload/index.php?m=admin&c=personal&a=member_delete">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
      <tr>
        <td  width="20%" class="admin_list_tit admin_list_first" >
          <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>用户名</label></td>
          <td  width="20%" class="admin_list_tit">email</td>
          <td  align="center" width="120"  class="admin_list_tit">手机</td>
          <td align="center"   class="admin_list_tit">注册时间</td>
          <td    align="center"   class="admin_list_tit">注册IP</td>
          <td    align="center"   class="admin_list_tit">注册地址</td>
          <td   align="center"   class="admin_list_tit">最后登录时间</td>
          
          <td width="13%"  align="center"  class="admin_list_tit" >操作</td>
        </tr>

        <tr>

        <?php  foreach(array_reverse($data) as $key=>$v){  ?>
          <td class="admin_list admin_list_first">
            <input name="tuid[]" type="checkbox"  class="xuan" ids="<?php  echo $v['id']    ?>" value="1"/>
                  <?php  echo $v['name']    ?>     </td>
            <td class="admin_list">
			     <span>  <?php echo  $v['email'] ?> </span>
             <span class="emailtip ajax_send_email" title="发送邮件" parameter="email=admin@qq.com&uid=1">&nbsp;&nbsp;&nbsp;&nbsp;</span>           </td>
            <td align="center" class="admin_list">
              <span >   </span>
			  <span class="smstip ajax_send_sms" title="发送短信" parameter="mobile=13691117792&uid=1">&nbsp;&nbsp;&nbsp;&nbsp;</span>           
            </td>
            <td align="center" class="admin_list">
            <?php  echo  date('Y-m-d H:i:s',$v['add_time']) ?>  </td>
            <td align="center" class="admin_list">
            <?php  echo  $v['last_ip'] ?></td>
            <td align="center" class="admin_list">本机地址</td>
            <td align="center" class="admin_list">
             <?php  echo   date('Y-m-d H:i:s',$v['last_time']) ?>     <span class="view login_log" title="最新5次登录记录" parameter="id=1">&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </td>
            <td align="center" class="admin_list">
              <a href="/many/upload/index.php?m=admin&c=personal&a=member_edit&uid=1&_k_v=1">编辑</a>
              &nbsp;
              <a class="userinfo"  parameter="uid=1" href="javascript:void(0);" hideFocus="true">管理</a>
            </td>
          </tr>    
        <?php  } ?>

              </table>
        <span id="DelSel"></span>
       <span id="OpPhotoresume"></span>
      </form>
            <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
        <tr>
          <td>

          <input type="button" name="ButAdd" value="添加会员" class="admin_submit"  onclick="window.location.href='/personage/member/'"/>



            <input type="button" name="ButDel"  id="ButDel" value="删除会员" class="admin_submit"/>

          </td>
          <td width="305" align="right">
            <form id="formseh" name="formseh" method="get" action="?">
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Personal">
              <input type="hidden" name="a" value="member_list">
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

      <div class="qspage"> <a class='unable'>上一页</a>  <span class='current'>1</span> <a class='unable'>下一页</a> </div>


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
              <input name="delete_resume" type="checkbox" id="delete_resume" value="yes" checked="checked" />
            删除此会员发布的简历</label></td>
          </tr>
          <tr>
            <td height="25">&nbsp;</td>
            <td><input type="submit" name="delete" value="确定删除" class="admin_submit"/></td>
          </tr>
        </table>
      </div>


    </div>
   
</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
   //alert(1);
  $('#ButDel').click(function(){
        var ids = '';
      $('.xuan:checkbox:checked').each(function(){
          ids += ','+$(this).attr('ids');    //获取选中值 
      });
        ids = ids.substr(1);
        //alert(ids);
       $.ajax({
           url:'index.php?r=personage/memberdelete' ,
           type: 'get',
           data:'id='+ids,
           success:function(e){
            if(e){
           
                for(i=ids.length;i>=0;i--){
                    i.parentNode().parentNode().remove();
                }

            }
           }
       });

      
  });




  /*$(".ajax_send_sms").QSdialog({
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
$("#ButDel").QSdialog({
DialogAddObj:"#DelSel",
DialogTitle:"请选择",
DialogContent:"#GetDelInfo",
DialogContentType:"id",
DialogWidth:"500"
});
 $(".userinfo").QSdialog({
  DialogTitle:"管理",
  DialogContentType:"url",
  DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=userinfo&"
  });
 $(".login_log").QSdialog({
  DialogTitle:"最新5次登录记录",
  DialogContentType:"url",
  DialogContent:"/many/upload/index.php?m=admin&c=ajax&a=login_log&"
  });
  $("#ButPhotoresume").QSdialog({
  DialogAddObj:"#OpPhotoresume",
  DialogTitle:"请选择",
  DialogContent:"#PhotoresumeSet",
  DialogContentType:"id"
  });
    $("#photo_submit").live('click',function(){
      $("form[name=form1]").attr("action","/many/upload/index.php?m=admin&c=personal&a=set_photoaudit");
      $("form[name=form1]").submit();
    });
    $('input[name="photoaudit"]').live('click',function(){
      if($(this).val() == 3){
        $('#is_del_img').show();
      }else{
        $('#is_del_img').hide();
      }
    });*/
});
</script>
  </body>
</html>