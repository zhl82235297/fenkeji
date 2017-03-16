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
	var URL = '/many/upload/index.php/admin/order',
		SELF = '/many/upload/index.php?m=admin&amp;c=order&amp;a=index_per',
		ROOT_PATH = '/many/upload/index.php/admin',
		APP	 =	 '/many/upload/index.php';
</script>
<?=Html::jsFile( '@web/public/js/jquery.QSdialog.js')?>
<?=Html::jsFile( '@web/public/js/jquery.vtip-min.js')?>
<?=Html::jsFile( '@web/public/js/jquery.grid.rowSizing.pack.js')?>
<?=Html::jsFile( '@web/public/js/jquery.validate.min.js')?>
<?=Html::jsFile( '@web/public/js/jquery.common.js')?>
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
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&is_paid=" class="select">不限</a>
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&is_paid=2" >已完成</a>
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&is_paid=1" >待付款</a>
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&is_paid=3" >已取消</a>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
    <div class="seltpye_x">
		<div class="left">付款方式</div>	
		<div class="right">
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&payment=" class="select">不限</a>
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&payment=points" >积分支付</a>
			<a href="/many/upload/index.php?m=admin&c=order&a=index_per&payment=alipay" >支付宝</a><a href="/many/upload/index.php?m=admin&c=order&a=index_per&payment=wxpay" >微信支付</a>			<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <div class="seltpye_x">
		<div class="left">添加时间</div>	
		<div class="right">
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=" class="select">不限</a>
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=3" >三天内</a>
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=7" >一周内</a>
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=30" >一月内</a>
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=180" >半年内</a>
		<a href="/many/upload/index.php?m=admin&c=order&a=index_per&settr=360" >一年内</a>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
  </div>
  <form id="form1" name="form1" method="post" action="/many/upload/index.php?m=admin&c=order&a=order_cancel_per">
  <input type="hidden" name="_k_v" value="">
  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan">
    <tr>
      <td  width="10%" class="admin_list_tit admin_list_first">
	   <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/>全选</label></td>
      <td class="admin_list_tit" width="10%">金额</td>   
	  <td class="admin_list_tit" align="center">说明</td> 
	  <td align="center" class="admin_list_tit" width="190">单号</td>
	  <td width="10%" align="center" class="admin_list_tit">申请会员</td>
	  <td width="8%" align="center" class="admin_list_tit">申请时间</td>
      <td width="8%" align="center" class="admin_list_tit">支付方式</td>      
      <td width="15%" align="center"  class="admin_list_tit">操作</td>
    </tr>
    <?if ($data) { ?>
    	<?php foreach ($data as $key => $v) { ?>
		<!-- <tr>
			<td  width="10%" class="admin_list_tit admin_list_first">
			   <label id="chkAll"><input type="checkbox" name=" " title="全选/反选" id="chk"/></label></td>
			<td align="center"><?=$v['amount']?></td>
			<td align="center"><?=$v['description']?></td>
			<td align="center"><?=$v['oid']?></td>
			<td align="center"><?=$v['uid']?></td>
			<td align="center"><?=$v['addtime']?></td>
			<td align="center"><?=$v['payment_name']?></td>
			<td align="center"></td>
		</tr> -->
	<?php }?>
    <?php }else{?>
   		<!-- <tr><div class="admin_list_no_info">没有任何信息！</div> </tr> -->
		
    <?php }?>


    <?php foreach ($data as $key => $vo) {?>
    <tr>
      <td class="admin_list admin_list_first">	
      <?php if ($vo['is_paid']==1) { ?>
      	<input name="id[]" type="checkbox" id="y_id" value="<?=$vo['id']?>"  />
      	<span style="color: #FF6600">待付款...</span>
      <?php }else if($vo['is_paid']==2){?>
		<input name="id[]" type="checkbox" id="y_id" value="<?=$vo['id']?>" disabled="disabled"/>
		<span style="color: #009900;">已完成</span>
      <?php }else{ ?>
		<input name="id[]" type="checkbox" id="y_id" value="<?=$vo['id']?>" disabled="disabled"/>
		<span style="color: #999;">已取消</span>
      <?php } ?> 
	   </td>
        <td class="admin_list">￥<strong><?=$vo['amount']?></strong>元</td>        
		<td class="admin_list"><?=$vo['description']?></td>     
		<td align="center" class="admin_list"><?=$vo['oid']?></td>
		<td align="center" class="admin_list"><?=$vo['uid']?></td>
		<td align="center" class="admin_list"><?=date('Y-m-d',$vo['addtime'])?></td>    
        <td align="center" class="admin_list"><?=$vo['payment_name']?></td>        
        <td align="center" class="admin_list">
        <?php if ($vo['is_paid'] == 2 || $vo['is_paid'] == 3) { ?>

			<a href="?r=order/order_show&id=<?=$vo['id']?>">查看</a>&nbsp;设置

		<?php } ?>
		<!-- <if condition="$vo['is_paid'] eq 1">
			<a href="{:U('order_set_per',array('id'=>$vo['id'],'_k_v'=>$_GET['_k_v']))}">设置</a>
			<a href="{:U('order_cancel_per',array('id'=>$vo['id'],'_k_v'=>$_GET['_k_v']))}" onclick="return confirm('你确定要取消吗？')">取消</a>
		</if>
		<if condition="$Think.get._k_v eq ''">
		        	&nbsp;
		        	<a class="userinfo" parameter="uid={$vo['uid']}" href="javascript:void(0);" hideFocus="true">管理</a>
		        </if> -->
		</td>
     </tr>
    <?php }?>
      

	  </table>
	 </form>
	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
          <input name="ButAudit" type="button" class="admin_submit" id="ButDelOrder"  value="取消订单"  />
		</td>
		<td width="305" align="right">
			<form id="formseh" name="formseh" method="get" action="?">	
	              <input type="hidden" name="m" value="Admin">
	              <input type="hidden" name="c" value="Order">
	              <input type="hidden" name="a" value="index_per">
				<div class="seh">
				    <div class="keybox"><input name="key" type="text"   value="" /></div>
				    <div class="selbox">
						<input name="key_type_cn"  id="key_type_cn" type="text" value="用户名" readonly="true"/>
							<div>
								<input name="key_type" id="key_type" type="hidden" value="1" />
									<div id="sehmenu" class="seh_menu">
											<ul>
											<li id="1" title="用户名">用户名</li>
											<li id="2" title="单号">单号</li>
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
	    	</td>      </tr>
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