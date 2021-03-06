<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title>产品详细</title>
	<!-- <link rel="stylesheet" href="js/aui.js"> -->
	<link rel="stylesheet" href="/register/Public/Home/css/style.css">
	<link rel="stylesheet" href="/register/Public/Home/css/aui.min.css">
	<link rel="stylesheet" href="/register/Public/Home/css/detail.css">
	<style type="text/css">

	</style>
</head>
<body>
    <div class="mask">
    	<div id="buy-detail" style="bottom: 0px;" class="buy-detail">
		    <span class="mui-icon mui-icon-closeempty" onclick="closeBox()" style="position: absolute;right: 0;top: 0;font-size: 30px;"></span>
            <form action="" method="post" enctype="multipart/form-data">
            <div style="margin-bottom: 10px;">

		        <span>购买数量：</span>
		        <div class="mui-numbox">
		            <!-- "-"按钮，点击可减小当前数值 -->
		            <button class="mui-btn mui-numbox-btn-minus" data-type="desc" type="button" id="reduce">-</button>
		            <input class="mui-numbox-input" id="number" value="1" type="number" name="number">
		            <input class="mui-numbox-input" id="product_id" value="4" type="hidden" name="">
		            <!-- "+"按钮，点击可增大当前数值 -->
		            <button class="mui-btn mui-numbox-btn-plus" data-type="asc" type="button" id="plus">+</button>
		        </div>

		    </div>
		    <div style="height: 40px;">
		        <span style="line-height: 40px;">需支付：¥<strong id="total-price" style="color:#FF5053"><?php echo ($res["price"]); ?></strong></span>
		        <button class="go-pay my-right" id="sure_buy">确定购买</button>
		    </div>
            </form>
		</div>
    </div>
	 <header class="mui-bar mui-bar-nav">
		  <a class="mui-icon mui-icon-left-nav mui-pull-left" href="/register/index.php/Home/Index/index.html"></a>
		  <h1 class="mui-title">普卡会员</h1>
	</header>
	<div class="mui-content">
		 <img src="<?php echo ($res["pic"]); ?>" alt="" class="img">
		 <div class="content">
		 	 <?php echo ($res["cont"]); ?>
		 </div>
	</div>
	<ul class="mui-table-view" id="list-data">
        <li class="mui-table-view-cell">
            <span class="my-left">有效期限</span>
            <span class="my-right"> <?php echo ($res["effectdays"]); ?>天</span>
        </li>
        <li class="mui-table-view-cell">
            <span class="my-left">每日固定收益</span>
            <span class="my-right"><?php echo ($res["daycome"]); ?>元</span>
        </li>
        <li class="mui-table-view-cell">
            <span class="my-left">生效日期</span>
            <span class="my-right">购买确认后生效</span>
        </li>
    </ul>
    <nav class="mui-bar mui-bar-tab my-bar">
	    <div id="buy-price" data-price="<?php echo ($res["price"]); ?>" class="mui-col-xs-8 my-left buy-price">
	        单价：¥<?php echo ($res["price"]); ?>            </div>
	    <div id="showPay" class="mui-col-xs-4 my-left go-buy">我要购买</div>
	</nav>
	<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		 var closeBox=function(){
		 	  $(".mask").hide();
		 	}
		 	$("#showPay").click(function() {
		 		  $(".mask").show();
		 	});
		
  
    $("#plus").click(function () {
        var num = $("#number").val();
        num++;
         $("#number").val(num)
        if (num >= 5) {
            $("#number").val(5)
             num = 5;
        }
        // if (num < 1) {
        //     $("#number").val(1);
        //     num = 1;
        //     $("#number").prev().attr('disabled', true)
        // }
        var price = parseFloat($("#buy-price").attr('data-price').trim());
        var total = num * price;
        $("#total-price").html(total.toFixed(2))
    })
      $("#reduce").click(function () {
        var num = $("#number").val();
        num--;
        $("#number").val(num)
       
        if (num < 1) {
            $("#number").val(1);
            num = 1;
           
        }
        var price = parseFloat($("#buy-price").attr('data-price').trim());
        var total = num * price;
        $("#total-price").html(total.toFixed(2))
    })

    $('#sure_buy').click(function () {
        var num = $('#number').val();
        var product_id = $('#product_id').val();
        var url = "";
        var token = "";
        // $.ajax({
        //     url: url,
        //     type: 'get',
        //     data: 'num=' + num + '&product_id=' + product_id + '&token=' + token,
        //     dataType: 'json',
        //     success: function (data) {
        //         if (data.code == 0) {
        //             alert(data.message);
        //             window.location = data.url;
        //         } else {
        //             alert(data.message);
        //         }
        //     },
        // })
    })




	</script>


</body>
</html>