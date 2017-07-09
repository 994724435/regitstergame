<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>我的</title>
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style1.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/fontSize.js"></script>
	<style type="text/css">
	.fr{float: right;}
	#loginOut{background: #fff;color: red;height:1rem;line-height: 1rem;text-align: center;margin-top: .6rem;}
	</style>
	
</head>
<body>
	 <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">我的</h1>
	</header>
	<div class="mui-content">
		<ul class="mui-table-view">
			<li class="mui-table-view-cell">
				余额
				<span class="fr"><?php echo ($money); ?></span>
			</li>
			<li class="mui-table-view-cell">
				注册码
				<span class="fr"><?php echo ($myid); ?></span>
			</li>

			<li class="mui-table-view-cell">
				<a class="mui-navigate-right" href="exchange.html">
					商城
				</a>
			</li>
			<li class="mui-table-view-cell">
				<a class="mui-navigate-right" href="payRecord.html">
					商城消费记录
				</a>
			</li>

		    <li class="mui-table-view-cell">
			    <a class="mui-navigate-right" href="addMoney.html">
			      充值
			    </a>
		    </li>
		    <li class="mui-table-view-cell">
			    <a class="mui-navigate-right" href="cashDetail.html">
			    果实买卖记录
			    </a>
		    </li>

		</ul>
		<a href="/register/index.php/Home/Login/login"> <div id="loginOut">
			退出登录
		</div>
		</a>
	</div>
	<script type="text/javascript">
		$("#loginOut").click(function() {
			// $.ajax({
			// url:"",
			// data:{
				
			// },
			// cache:false,
			// type:'get',
			// dataType:"text",
			// success:function(result){
			
			// }});
		});
	</script>
</body>
</html>