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
  var URL = '/tpl/index.php/admin/company',
    SELF = '/tpl/index.php?m=admin&amp;c=company&amp;a=index',
    ROOT_PATH = '/tpl/index.php/admin',
    APP  =   '/tpl/index.php';
</script>
<?=Html::jsFile('@web/public/js/jquery.QSdialog.js')?>
<?=Html::jsFile('@web/public/js/jquery.vtip-min.js')?>
<?=Html::jsFile('@web/public/js/jquery.grid.rowSizing.pack.js')?>
<?=Html::jsFile('@web/public/js/jquery.validate.min.js')?>
<?=Html::jsFile('@web/public/js/common.js')?>
<?=Html::jsFile('@web/public/js/jquery-1.9.1.min.js')?>
</head>
<body style="background-color:#E0F0FE">
  <div class="admin_main_nr_dbox">
      <div class="pagetit">
          <div class="ptit"> 企业列表</div>
                    <div class="clear"></div>
      </div>
    <div class="seltpye_x">
    <div class="left">企业认证</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=company&a=index&audit=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&audit=1" >已通过</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&audit=2" >待认证</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&audit=3" >未通过</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&audit=0" >未认证</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
    <div class="left">诚聘通</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=company&a=index&famous=&setmeal_id=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&famous=1" >诚聘通</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&famous=0&setmeal_id=" >非诚聘通</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="seltpye_x">
     
  </div>
  <div class="seltpye_x">
    <div class="left">添加时间</div>
    <div class="right">
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=" class="select">不限</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=3" >三天内</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=7" >一周内</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=30" >一月内</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=180" >半年内</a>
      <a href="/tpl/index.php?m=admin&c=company&a=index&settr=360" >一年内</a>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/tpl/index.php?m=admin&c=company&a=delete_company">
    <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
      <tr>
        <td  class="admin_list_tit admin_list_first">
          <label id="chkAll">公司名称</label>
        </td>
        <td class="admin_list_tit">企业行业</td>
    <td width="35" align="center" class="admin_list_tit"></td>
        <td width="10%" class="admin_list_tit">企业认证</td>
    <td width="10%" align="center" class="admin_list_tit">诚聘通</td>
        <td width="10%" align="center" class="admin_list_tit">创建时间</td>
        <td width="10%" align="center" class="admin_list_tit">刷新时间</td>
        <td width="8%" align="center" class="admin_list_tit">联系电话</td>
        <td width="120" align="center" class="admin_list_tit">操作</td>
      </tr>
      
         
      
    <span id="OpAudit"></span>
    <span id="OpAuditFamous"></span>
    <span id="OpDel"></span>
    <span id="Oprefresh"></span>
  </form>
 
   <?php if(!empty($data)){?>
    <tbody id="bo">
      <?php foreach ($data as $key => $v) {?>
         <tr class="admin_list_no_info">
           
        <td><input type="checkbox" class="che" value="<?php echo $v['id']?>"><?php echo $v['companyname']?></td>
       <td><?php echo $v['trade_cn']?></td>
       <td><?php echo $v['trade']?></td>
       <td></td>
       <td><?php echo $v['famous'] ? '是' :'否' ?></td>
     <td><?php echo $v['addtime']?></td>
       <td><?php echo $v['refreshtime']?></td>
       <td><?php echo $v['telephone']?></td> 
       <td><a href="?r=company/del&id=<?php echo $v['id']?>">删除</a>||<a href="">修改</a></td>
      </tr> <?php }?>
      </tbody>
      <?php }?>
    </table>
   
  <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
    <tr>
      <td>
        <input type="button" name="" value="认证企业" class="admin_submit"  id="ButAudit" />
    <input type="button" name="" value="诚聘通" class="admin_submit"  id="ButAuditFamous" />
        <input type="button" name="" value="刷新" class="admin_submit"  id="Butrefresh" />
        <input type="button" name="" value="删除" class="admin_submit"   id="ButDel"/>
        
      </td>
      <td width="305" align="right">
        <form id="formseh" name="formseh" method="get" action="?">
              <input type="hidden" name="m" value="Admin">
              <input type="hidden" name="c" value="Company">
              <input type="hidden" name="a" value="index">
          <div class="seh">
            <div class="keybox"><input id="key" type="text"   value="" /></div>
            <div class="selbox">
              <input name="key_type_cn"  id="key_type_cn" type="text" value="公司名" readonly="true"/>
              <div>
                <input name="key_type" id="key_type" type="hidden" value="1" />
                <div id="sehmenu" class="seh_menu">
                  <ul>
                    <li id="1" title="公司名">公司名</li>
                    <li id="2" title="公司id">公司id</li>
                    <li id="3" title="会员名">会员名</li>
                    <li id="4" title="会员id">会员id</li>
                    <li id="5" title="地址">地址</li>
                    <li id="6" title="电话">电话</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="sbtbox">

              <input type="button" name="" class="sbt" id="sbt" value="搜索"/>
              
              <script type="text/javascript">
               $(function(){
                
                  $('#sbt').click(function(){
                     var cname=$('#key').val();
                     $.ajax({
                      type:'get',
                      url:'?r=company/search',
                      data:{cname:cname},
                      dataType:'json',
                      success:function(data){
                        if(data==0){
                          alert('您搜索的公司不存在')
                        }else{
                        var str='';
                         str+='<tr class="admin_list_no_info">'
                         str+='<td>'+data['companyname']+'</td>'
                         str+='<td>'+data['trade_cn']+'</td>'
                         str+='<td>'+data['trade']+'</td>'
                         str+='<td></td>'
                         str+='<td>'+data['famous']+'</td>'
                         str+='<td>'+data['addtime']+'</td>'
                         str+='<td>'+data['refreshtime']+'</td>'
                         str+='<td>'+data['telephone']+'</td>'
                         str+='<td><a href="">删除</a>||<a href="">修改</a></td>'
                         str+='</tr>'
                         $('#bo').html(str);

                        }
                       }
                     })

                  })
               
      $('#ButDel').click(function(){
          var che=$('.che');
          var str='';
         
          for(var i=0;i<che.length;i++){
                if(che.eq(i).prop('checked')==true){
                  str+=','+che.eq(i).val();
                }
          }
         var id=str.substr(1);
         //alert()
           $.ajax({
            type:"get",
            url:'?r=company/shan',
            data:{id:id},


            success:function(data){
               if(data==0){
               for(var i=0;i<che.length;i++){
                  if(che.eq(i).prop('checked')==true){
                   
                     che.eq(i).parent().parent().remove();
                      }
                    }
               
               }


            }
          })
        })
  
  })
              </script>
            </div>
            <div class="clear"></div>
          </div>
        </form>
      </td>
    </tr>
  </table>
  <div class="qspage"></div>
</div>
<div style="display:none" id="OpDelLayer">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td height="30" colspan="2"><strong  style="color:#0066CC; font-size:14px;">你确定要删除吗？</strong></td>
    </tr>
    <tr>
      <td width="20" height="25">&nbsp;</td>
      <td><label>
        <input name="delete_company" type="checkbox" id="delete_company" value="yes" checked="checked" />
      删除企业资料</label></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><label>
        <input name="delete_jobs" type="checkbox" id="delete_jobs" value="yes" checked="checked"/>
      删除此企业发布的招聘信息</label></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="submit" name="delete" value="确定" class="admin_submit"    /></td>
    </tr>
  </table>
</div>
<!-- -->
<div style="display:none" id="OprefreshLayer">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td height="30" colspan="2"><strong  style="color:#0066CC; font-size:14px;">刷新该企业的职位：</strong></td>
    </tr>
    <tr>
      <td width="20" height="25">&nbsp;</td>
      <td><label>
        <input name="refresh_jobs" type="checkbox" id="refresh_jobs" value="yes" checked/>
      同时刷新所选企业的职位</label></td>
    </tr>
    <tr>
      <td height="25">&nbsp;</td>
      <td><input type="button" name="set_refresh" id="set_refresh" value="确定" class="admin_submit"    /></td>
    </tr>
  </table>
</div>
<!-- -->
<div style="display:none" id="OpAuditLayer">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">将所选企业设置为：</strong></td>
    </tr>
    
    <tr>
      <td height="25">&nbsp;</td>
      <td>
        <label >
          <input name="audit" type="radio" value="1" checked="checked"  id="success" />
        认证通过 </label>   </td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td><label >
          <input type="radio" name="audit" value="3"  id="fail"/>
        认证未通过</label></td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td>
          <label >
            <input type="radio" name="audit" value="2"  id="wait"/>
            等待认证
          </label>  </td>
        </tr>
      <tr id="reason">
        <td width="40" height="25" >备注：</td>
        <td>
          <textarea name="reason" id="reason" cols="50" style="font-size:12px"></textarea>
        </td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td><input type="button" name="set_audit" id="set_audit" value="确定" class="admin_submit"    /></td>
      </tr>
    </table>
  </div>
  <div style="display:none" id="OpAuditLayerFamous">
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="6" >
    <tr>
      <td width="20" height="30">&nbsp;</td>
      <td height="30"><strong  style="color:#0066CC; font-size:14px;">将所选企业设置为：</strong></td>
    </tr>
    
    <tr>
      <td height="25">&nbsp;</td>
      <td>
        <label >
          <input name="famous" type="radio" value="1" checked="checked"  id="success" />
        是 </label>   </td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td><label >
          <input type="radio" name="famous" value="0"  id="fail"/>
        否</label></td>
      </tr>
      <tr id="reason">
        <td width="40" height="25" >备注：</td>
        <td>
          <textarea name="reason" id="reason" cols="50" style="font-size:12px"></textarea>
        </td>
      </tr>
      <tr>
        <td height="25">&nbsp;</td>
        <td><input type="button" name="set_audit_famous" id="set_audit_famous" value="确定" class="admin_submit"    /></td>
      </tr>
    </table>
  </div>
  <!-- -->
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
  $("#ButAudit").QSdialog({
  DialogAddObj:"#OpAudit",
  DialogTitle:"请选择",
  DialogContent:"#OpAuditLayer",
  DialogContentType:"id"
  });
  $("#ButAuditFamous").QSdialog({
  DialogAddObj:"#OpAuditFamous",
  DialogTitle:"请选择",
  DialogContent:"#OpAuditLayerFamous",
  DialogContentType:"id"
  });
  $("#ButDel").QSdialog({
  DialogAddObj:"#OpDel",
  DialogTitle:"请选择",
  DialogContent:"#OpDelLayer",
  DialogContentType:"id"
  });
  $("#Butrefresh").QSdialog({
  DialogAddObj:"#Oprefresh",
  DialogTitle:"请选择",
  DialogContent:"#OprefreshLayer",
  DialogContentType:"id"
  });
  $(".userinfo").QSdialog({
  DialogTitle:"管理",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=userinfo&"
  });
  $(".audit_log").QSdialog({
  DialogTitle:"审核日志",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=audit_log&"
  });
  $(".famous_log").QSdialog({
  DialogTitle:"诚聘通",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=famous_log&"
  });
  $(".setmeal_detail").QSdialog({
  DialogTitle:"套餐详情",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=setmeal_detail&"
  });
  $("#set_audit").live('click',function(){
      $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=company&a=com_audit");
      $("form[name=form1]").submit()
  });
  $("#set_audit_famous").live('click',function(){
      $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=company&a=com_audit_famous");
      $("form[name=form1]").submit()
  });
  $("#set_refresh").live('click',function(){
      $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=company&a=refresh_company");
      $("form[name=form1]").submit()
  });
});
</script>
</body>
</html>