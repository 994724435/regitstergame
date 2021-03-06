<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>兑换商品</title>
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" href="/register/Public/Home/css/style1.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	
	<style type="text/css">
	 *{margin:0;padding: 0;font-family: "微软雅黑";}
	 li{list-style-type: none;}
		
		.list{width: 90%;margin:20px auto 0;}
		.list>li{background: #fff;position: relative;border-radius: 7px;box-shadow: 0px 0px 14px 0px rgba(177, 175, 175, 0.74);
			margin-bottom: 20px;max-height: 126px;overflow: hidden;}
		.list>li span{position: absolute;top: 6px;left: 31%;}
		.liImg{width: 30%;float: left;}
		.time{color: #02d8c6;}
		.money{color: #fb436e;}
		.sales{color: #ff5454;}
		.mui-icon img{display: block;width: 100%;}
		.mui-bar-tab .mui-tab-item .mui-icon{width: 27px;}
		.mui-bar.mui-bar-tab{background: #04b6d4;height: 56px;}
		.mui-bar-tab .mui-tab-item .mui-icon~.mui-tab-label{color: #fff;}

        .mui-bar-tab .mui-tab-item.mui-active{background: #10c2e0;}
        .list>li>ul{float: left;width: 69%;}
        .list>li>ul li{margin-top: 5px;}
        .list>li>ul li button{width: 80px;border-radius: 20px;outline: none;border:none;background: green;color: #fff;padding: 4px 12px;}
        
	</style>
</head>
<body>
	 <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <h1 class="mui-title">兑换商品</h1>
	</header>
	<div class="mui-content">	
		<ul class="list">
			<?php if(is_array($pro)): foreach($pro as $key=>$v): ?><li>	
             	<img src="<?php echo ($v["pic"]); ?>" alt="" class="liImg">
             	<ul> 
             	    <li><?php echo ($v["name"]); ?></li>
             		<li class="sales">￥<?php echo ($v["price"]); ?></li>
             		<li><button class="buy" data-id ="<?php echo ($v["id"]); ?>">点击兑换</button></li>
             	</ul>
			</li><?php endforeach; endif; ?>
		</ul>
	</div>

	
	<script src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
	
	  $(".buy").click(function() {
		  var attr=$(this).attr('data-id');
	  	 window.location.href="/register/index.php/Home/User/drawCash/num/"+attr;
	  });
	</script>
</body>
</html>