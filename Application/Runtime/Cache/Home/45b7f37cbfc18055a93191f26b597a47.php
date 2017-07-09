<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>出售记录</title>
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" href="/register/Public/Home/css/style1.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	<style type="text/css">
		.flex{display: flex;background: #fff;border-bottom: 1px solid #eee;}
		.flex>li{flex:1;height: 35px;line-height: 35px;text-align: center;}
		.time{color: #999;font-size: 12px;}
	</style>
</head>
<body>
    <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">出售记录</h1>
	</header>
	<div class="mui-content">
		<?php if(is_array($res)): foreach($res as $key=>$v): ?><ul class="flex">
			<li><?php echo ($v["reson"]); ?></li>
			<li><?php echo ($v["income"]); ?></li>
			<li class="time"><?php echo ($v["addtime"]); ?></li>
		</ul><?php endforeach; endif; ?>
	</div>
</body>
</html>