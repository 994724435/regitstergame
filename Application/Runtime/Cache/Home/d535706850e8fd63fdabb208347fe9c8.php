<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>我的好友</title>
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style1.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/fontSize.js"></script>
	<style type="text/css">
	   
	</style>
</head>
<body>
   <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <a class="mui-icon mui-icon-reply mui-pull-right"></a>
	  <h1 class="mui-title">我的好友</h1>
	</header>
	<div class="mui-content">
		<ul class="mui-table-view">
			<?php if(is_array($res)): foreach($res as $key=>$v): ?><li class="mui-table-view-cell">
				<a class="mui-navigate-right" href="/register/index.php/Home/Index/friend_farm/uid/<?php echo ($v["uid"]); ?>">
					<?php echo ($v["truename"]); ?> 的农场
				</a>
			  </li><?php endforeach; endif; ?>
		</ul>

	</div>
</body>
</html>