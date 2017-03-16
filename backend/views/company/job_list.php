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
  var URL = '/tpl/index.php/admin/jobs',
    SELF = '/tpl/index.php?m=admin&amp;c=jobs&amp;a=index',
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
          <div class="ptit"> 职位列表</div>
                    <div class="clear"></div>
      </div>
  <div class="toptip link_g">
    <h2>提示：</h2>
    <p>
      有效职位是指：审核通过、审核中、服务未到期等网站能正常显示的职位。<br />
    无效职位是指：审核未通过、服务到期等网站前台不显示的职位。<br />
</p>
  </div>
  <div class="seltpye_y">
    <div class="tit link_lan">
      <strong>职位列表</strong><span>(共找到0条)</span>
      <a href="/tpl/index.php?m=admin&c=jobs&a=index">[恢复默认]</a>
      <div class="pli link_bk"><u>每页显示：</u>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&pagesize=10" class="select">10</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&pagesize=20" >20</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&pagesize=30" >30</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&pagesize=60" >60</a>
        <div class="clear"></div>
      </div>
    </div>
    <div class="list">
      <div class="t">有效状态</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&jobtype=0" class="select">不限<span>(0)</span></a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&jobtype=1" >有效职位<span>(0)</span></a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&jobtype=2" >无效职位<span>(0)</span></a>
      </div>
    </div>
    
    <div class="list">
      <div class="t">审核状态</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&audit=" class="select">不限</a>
     <a href="/tpl/index.php?m=admin&c=jobs&a=index&audit=2" >等待审核<span >(0)</span></a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&audit=1" >审核通过<span>(0)</span></a>
       
    <a href="/tpl/index.php?m=admin&c=jobs&a=index&audit=3" >审核未通过<span>(0)</span></a>      </div>
    </div>
  
      
    
    <div class="list listod" >
      <div class="t">服务到期</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&deadline=" class="select">不限</a>
                <a href="/tpl/index.php?m=admin&c=jobs&a=index&deadline=3" >三天内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&deadline=7" >一周内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&deadline=30" >一月内</a>
      </div>
    </div>
    
    <div class="list listod" >
      <div class="t">推广类型</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&promote=" class="select">不限</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&promote=-1" >未推广</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&promote=1" >置顶</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&promote=2" >紧急</a>
      </div>
    </div>
    
    
    
    <div class="list" >
      <div class="t">添加时间</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&addsettr=" class="select">不限</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&addsettr=3" >三天内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&addsettr=7" >一周内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&addsettr=30" >一月内</a>
      </div>
    </div>
    
    <div class="list" >
      <div class="t">刷新时间</div>
      <div class="txt link_lan">
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&settr=" class="select">不限</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&settr=3" >三天内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&settr=7" >一周内</a>
        <a href="/tpl/index.php?m=admin&c=jobs&a=index&settr=30" >一月内</a>
      </div>
    </div>
          <div class="clear"></div>
    </div>
  <form id="form1" name="form1" method="post" action="/tpl/index.php?m=admin&c=jobs&a=set_audit">
    <table width="100%" border="0" cellpadding="0" cellspacing="0" id="list" class="link_lan">
      <tr>
        <td   class="admin_list_tit admin_list_first">
          <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>职位名称</label></td>
          <td  class="admin_list_tit"> 发布公司 </td>
          <td align="center"  width="10%" class="admin_list_tit">审核状态</td>
          <td align="center" width="10%" class="admin_list_tit">来源</td>
          <td align="center"  width="10%" class="admin_list_tit">添加时间</td>
          <td align="center" width="10%"  class="admin_list_tit">刷新时间</td>
          <td align="center" width="10%" class="admin_list_tit">点击</td>
          <td    width="100" align="center"  class="admin_list_tit">操作</td>
      </tr>
              </table>
      <span id="OpAudit">
        <?php foreach ($arr as $key => $value): ?>
    <div class="admin_list_no_info">
      <table id="list" class="link_lan" cellspacing="0" cellpadding="0" border="0" width="100%">
        
          <tbody>
            <tr>
              <td>
                <label id="chkAll" style="color: rgb(102, 102, 102);">&nbsp;&nbsp;&nbsp;
                  <input name=" " title="全选/反选" id="chk" type="checkbox"><?php echo $value['jobs_name'] ?>
                </label>
              </td>
              <td><?php echo $value['companyname'] ?></td>
              <td align="center" width="10%">
                <?php if ($value['audit'] == 1): ?>
                  已审核
                <?php else: ?>
                  未审核
                <?php endif ?>
              </td>
              <td align="center" width="10%">
              <?php if ($value['add_mode'] == 1): ?>
                电脑网页端
              <?php elseif($value['add_mode'] == 2): ?>
                手机客户端
              <?php else: ?>
                电脑客户端
              <?php endif ?>
              </td>
              <td align="center" width="10%"><?php echo date('Y-m-d',$value['addtime']) ?></td>
              <td align="center" width="10%"><?php echo date('Y-m-d',$value['refreshtime']) ?></td>
              <td align="center" width="10%"><?php echo $value['click'] ?></td>
              <td align="center" width="100">操作</td>
            </tr>
        </tbody>
       
      </table>
    </div>
  <?php endforeach ?>
      </span>
</form>
    <div class="admin_list_no_info">没有任何信息！</div>    <table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
          <input name="ButAudit" type="button" class="admin_submit" id="ButAudit"    value="审核"  />
          <input type="button" name="Butrefresh"  id="Butrefresh" value="刷新" class="admin_submit"/>
          <input type="button" name="ButDel"  id="ButDel" value="删除" class="admin_submit"/>
        </td>
        <td width="305" align="right">
          <form id="formseh" name="formseh" method="get" action="?">
          <input type="hidden" name="m" value="Admin">
          <input type="hidden" name="c" value="Jobs">
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
    <div style="display:none" id="AuditSet">
      <table width="400" border="0" align="center" cellpadding="0" cellspacing="6">
        <tr>
          <td width="20" height="30">&nbsp;</td>
          <td height="30"><strong  style="color:#0066CC; font-size:14px;">将所选职位置为：</strong></td>
        </tr>
        
        <tr>
          <td width="40" height="25">&nbsp;</td>
          <td>
            <label><input name="audit" type="radio" value="1" checked="checked"  id="success" />
          审核通过</label></td>
        </tr>
        <tr>
          <td width="40" height="25">&nbsp;</td>
          <td>
            <label><input type="radio" name="audit" value="3"  id="fail"/>
          审核未通过</label></td>
        </tr>
        <tr id="reason">
          <td width="40" height="25" >备注：</td>
          <td>
            <textarea name="reason" id="reason" cols="50" style="font-size:12px"></textarea>
          </td>
        </tr>
        <tr>
          <td height="25">&nbsp;</td>
          <td>
            <input type="submit" name="set_audit" value="确定" class="admin_submit"/>
          </td>
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
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=userinfo&"
  });
  
   $(".jobs_log").QSdialog({
  DialogTitle:"职位日志",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=jobs_log&"
  });
   $(".audit_log").QSdialog({
  DialogTitle:"审核日志",
  DialogContentType:"url",
  DialogContent:"/tpl/index.php?m=admin&c=ajax&a=audit_log&"
  });
    //点击批量删除
  $("#ButDel").click(function(){
    if (confirm('你确定要删除吗？'))
    {
       $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=jobs&a=delete_jobs");
      $("form[name=form1]").submit()
    }
  });
  //刷新
  $("#Butrefresh").click(function(){
      $("form[name=form1]").attr("action","/tpl/index.php?m=admin&c=jobs&a=refresh_jobs");
      $("form[name=form1]").submit()
  });
  
  //纵向列表排序
  $(".listod .txt").each(function(i){
  var li=$(this).children(".select");
  var htm="<a href=\""+li.attr("href")+"\" class=\""+li.attr("class")+"\">"+li.text()+"</a>";
  li.detach();
  $(this).prepend(htm);
  });
    
  
});
</script>
</body>
</html>