<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>农场</title>
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style.css">
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style1.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/register/Public/Home/layer_mobile/layer.js"></script>

	<script type="text/javascript" src="/register/Public/Home/js/fontSize.js"></script>
	<style type="text/css">
		.hand{width: 1rem;display: block;margin:0 auto;}
		.touqu{font-size: .5rem;color: #fff;text-align: center;position: absolute;bottom: -.5rem;width: 100%;}
	</style>
</head>
<body>
    <header class="mui-bar mui-bar-nav">
	  <a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	  <a class="mui-icon mui-icon-reply mui-pull-right"></a>
	  <h1 class="mui-title"><?php echo ($user["truename"]); ?> 的农场</h1>
	</header>
	<img src="/register/Public/Home/images/gou.gif" alt="" class="dogImg">
	<img src="/register/Public/Home/images/gou.gif" alt="" class="dogImg1">
	<img src="/register/Public/Home/images/gou.gif" alt="" class="dogImg2">
	<img src="/register/Public/Home/images/gou.gif" alt="" class="dogImg3">
    <ul class="lands">
        <li class="land land1" style="background: url(/register/Public/Home/images/land1.png) no-repeat;">
        	<img src="/register/Public/Home/images/meiguihua.png" alt="" class="plant">
        </li>
        <li class="land land2" style="background: url(/register/Public/Home/images/land1.png) no-repeat;">
        	<img src="/register/Public/Home/images/xihongshi.gif" alt="" class="plant">
        </li>
        <li class="land land3" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land4" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land5" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land6" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land7" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land8" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land9" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land10" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land11" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land12" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land13" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land14" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
        <li class="land land15" style="background: url(/register/Public/Home/images/land2.png) no-repeat;"></li>
	</ul>
	<ul class="operation hand">
		<img src="/register/Public/Home/images/hand.png" alt="" class="hand">
		<div class="touqu">偷取</div>
	</ul>

	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$('body').height($(window).height());
		$(".hand").click(function() {
			$.ajax({
				url:"/register/index.php/Home/Index/friendstouqu",
				data:{
					uid : <?php echo ($uid); ?>,
					friendid:<?php echo ($friendid); ?>
				},
				cache:false,
				type:'get',
				success:function(result){
					if(result.state==1){
						layer.open({
							content: result.msg
							,btn:'好的'
						});
					}else{
						layer.open({
							content: result.msg
							,btn:'好的'
						});
					}
//				$("#div1").html(result);
			}});

		});
		
	</script>
</body>
</html>