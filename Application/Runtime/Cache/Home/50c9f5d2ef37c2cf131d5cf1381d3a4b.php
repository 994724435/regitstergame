<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>登陆</title>
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style.css">
	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/fontSize.js"></script>
	<style type="text/css">
		::-webkit-input-placeholder { /* WebKit browsers */
			color: #fff;
		}
		:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
			color: #fff;
		}
		::-moz-placeholder { /* Mozilla Firefox 19+ */
			color: #fff;
		}
		:-ms-input-placeholder { /* Internet Explorer 10+ */
			color: #fff;
		}
		body{background: url('/register/Public/Home/images/bg.jpg') no-repeat;background-size: 100% 100%;}
		.loginDiv{position: absolute;top: 4.6rem;left: 50%;width: 70%;margin-left: -35%;}
		.loginDiv li{height: 40px;line-height: 40px;color: #fff;background:#68d3fb;margin-top: 10px;border-radius: 10px; }
		.loginDiv span{display: inline-block;width: 30%;text-align: center;}
		.loginDiv  input{width: 66%;color: #fff;background:#68d3fb;border: none;outline: none; }
		.loginBtn{width: 200px;height: 45px;line-height: 45px;
			background: url('/register/Public/Home/images/btn.png') no-repeat;background-size: 100% 100%;text-align: center;border:none;color: #fff;display: block;margin: 30px auto 0;}
		.regBtn{width: 70px;height: 30px;line-height:30px;
			background: transparent;
			color: #fb8d00;
			/* background: url('img/btn.png') no-repeat;color: #fff; */
			background-size: 100% 100%;text-align: center;border:none;display: block;float: left;margin-top: 20px;}
		.code{width: 100px;margin:20px auto 0;background: #fff;height: 44px;line-height: 44px;text-align: center;color: red;}
		.logo{width: 50%;display: block;margin:0 auto;}
	</style>
</head>
<body>
<div style="height: 1rem;"></div>
<img src="/register/Public/Home/images/logo.png" alt="" class="logo">
<ul  class="loginDiv">
	<form action="" method="post">
		<li><span>手机</span><input type="text" name="name" placeholder="输入手机号"></li>
		<li><span>密码</span><input type="password" name="pwd" placeholder="输入密码"></li>
		<li><span>验证码</span><input type="text" name="numbers" placeholder="输入验证码"></li>
		<input type="hidden" name="number" value="<?php echo ($numbers); ?>">
		<!--<div class="code"><?php echo ($numbers); ?></div>-->
		<div style="overflow: hidden;"><span class="regBtn" onclick="location.href='/register/index.php/Home/Login/reg.html'">注册</span>
			<div class="code"><?php echo ($numbers); ?></div>
		</div>
		<!--<input  type="submit" value="登录">-->
		<button class="loginBtn">登录</button>
	</form>
</ul>

<script type="text/javascript">
	$('body').height($(window).height());
</script>
</body>
</html>