<?php
	use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="">
	<?=Html::cssFile('@web/public/css/reset.css')?>
	<?=Html::cssFile('@web/public/css/public.css')?>
</head>
<body>
<div class="public-header-warrp">
	<div class="public-header">
		<div class="content">
			<div class="public-header-logo"><a href=""><i>LOGO</i><h3>苞米地网络科技</h3></a></div>
			<div class="public-header-admin fr">
				<p class="admin-name"><?=Yii::$app->user->identity->username?>管理员 您好！</p>
				<div class="public-header-fun fr">
					<a href="" class="public-header-man">管理</a>
					<a href="?r=site/logout" class="public-header-loginout">安全退出</a>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<!-- 内容展示 -->
<div class="public-ifame mt20">
	<div class="content">
	<!-- 内容模块头 -->
		<div class="clearfix"></div>
		<!-- 左侧导航栏 -->
		<div class="public-ifame-leftnav">
			<div class="public-title-warrp">
				<div class="public-ifame-title ">
					<a href="">首页</a>
				</div>
			</div>
			<ul class="left-nav-list">
				<li class="public-ifame-item">
					<a href="javascript:;">系统管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li class="active"><a href="系统管理/config.html" target="content">网站配置</a></li>
							<li><a href="系统管理/admin_music.html" target="content">热门关键字</a></li>
							<li><a href="系统管理/admin_cardTemplate.html" target="content">邮件设置</a></li>
							<li><a href="系统管理/index_tj.html" target="content">短信设置</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">企业管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="?r=company/job_list" target="content">职位列表</a></li>
							<li><a href="?r=company/ent_list" target="content">企业列表</a></li>
							<li><a href="?r=company/member" target="content">企业会员</a></li>
							<li><a href="?r=company/order" target="content">订单管理</a></li>
							<li><a href="?r=company/ent_promotion" target="content">企业推广</a></li>
							<li><a href="?r=company/increment" target="content">增值服务</a></li>
							<li><a href="信息管理/cate_manage.html" target="content"></a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">个人管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="?r=personage/perl" target="content">简历列表</a></li>
							<li><a href="?r=personage/member" target="content">个人会员</a></li>
							<li><a href="?r=order/order" target="content">订单管理</a></li>
							<li><a href="?r=personage/prom" target="content">个人推广</a></li>
							<li><a href="?r=personage/subscribe" target="content">职位订阅</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">内容管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="#" target="content">公告管理</a></li>
							<li><a href="#" target="content">新闻资讯</a></li>
							<li><a href="#" target="content">广告管理</a></li>
							<li><a href="#" target="content">友情链接</a></li>
							<li><a href="#" target="content">HR工具箱</a></li>
							<li><a href="#" target="content">HR工具箱</a></li>
						</ul>
					</div>
				</li>
				<li class="public-ifame-item">
					<a href="javascript:;">工具管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="#" target="content">第三方登陆</a></li>
							<li><a href="#" target="content">邮件营销</a></li>
							<li><a href="#" target="content">短信营销</a></li>
						</ul>
					</div>
				</li>

				<li class="public-ifame-item">
					<a href="javascript:;">管理员管理</a>
					<div class="ifame-item-sub">
						<ul>
							<li><a href="#" target="content">管理员管理</a>|<a href="#" target="content">添加</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<!-- 右侧内容展示部分 -->
		<div class="public-ifame-content">
		<iframe name="content" src="?r=site/right" frameborder="0" id="mainframe" scrolling="yes" marginheight="0" marginwidth="0" width="100%" style="height: 700px;"></iframe>
		</div>
	</div>
</div>
<?=Html::jsFile( '@web/public/js/jquery.min.js')?>
<script>
$().ready(function(){
	var item = $(".public-ifame-item");

	for(var i=0; i < item.length; i++){
		$(item[i]).on('click',function(){
			$(".ifame-item-sub").hide();
			if($(this.lastElementChild).css('display') == 'block'){
				$(this.lastElementChild).hide()
				$(".ifame-item-sub li").removeClass("active");
			}else{
				$(this.lastElementChild).show();
				$(".ifame-item-sub li").on('click',function(){
					$(".ifame-item-sub li").removeClass("active");
					$(this).addClass("active");
				});
			}
		});
	}
});
</script>
</body>
</html>