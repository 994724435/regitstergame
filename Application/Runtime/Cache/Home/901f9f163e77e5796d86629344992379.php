<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>我要充值</title>
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" href="/register/Public/Home/css/style1.css">
	<link rel="stylesheet" href="/register/Public/Home/css/mui.picker.css">
	<link rel="stylesheet" href="/register/Public/Home/css/mui.poppicker.css">
	<script type="text/javascript" src="/register/Public/Home/js/aui.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/mui.picker.js"></script>
	<script type="text/javascript" src="/register/Public/Home/js/mui.poppicker.js"></script>
	<style type="text/css">
		.tipTitle{font-size: 15px;font-weight: bold;margin-top: 10px;color: #000;padding:0 10px;}
		.tip{padding:0 10px;font-size: 14px; }
		.hidden,.hidden1{display: none;}
	</style>
</head>
<body>
<header class="mui-bar mui-bar-nav">
	<a class="mui-icon mui-icon-left-nav mui-pull-left mui-action-back"></a>
	<a class="mui-icon mui-icon-reply mui-pull-right"></a>
	<h1 class="mui-title">兑换信息</h1>
</header>
<div class="mui-content">
	<form class="mui-input-group" action="" method="post" style="margin-top: 20px;">

		<div class="mui-input-row">
			<label>提现方式</label>
			<input type="text" name="type" placeholder="请选择提现方式" id="selelcted"  readonly="readonly" data-value="">
		</div>
		<div class="hidden">
			<div class="mui-input-row">
				<label>支付宝账号</label>
				<input type="text" name="account" class="mui-input-clear" placeholder="请输入支付宝账号">
			</div>

		</div>
		<div class="hidden1">
			<div class="mui-input-row">
				<label>银行卡号</label>
				<input type="text"  name="carnum" class="mui-input-clear" placeholder="请输入银行卡号">
			</div>

		</div>
		<div class="mui-input-row">
			<label>姓名</label>
			<input type="text" name="carmame" class="mui-input-clear" placeholder="请输入姓名">
		</div>
		<button class="mui-btn mui-btn-block">确认</button>
	</form>


</div>
<script type="text/javascript">
	var userPicker = new mui.PopPicker();
	userPicker.setData([{
		value: '0',
		text: '支付宝'
	}, {
		value: '1',
		text: '银行卡'
	}]);
	$("#selelcted").click(function() {
		userPicker.show(function(items) {
			$("#selelcted").val(items[0].text);
			$("#selelcted").attr('data-value', items[0].value);
			if(items[0].value==0){
				$(".hidden").show();
				$(".hidden1").hide();

			}else{
				$(".hidden1").show();
				$(".hidden").hide();
			}

		});
	});
</script>


</body>
</html>