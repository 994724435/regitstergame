<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>农场</title>
	<link rel="stylesheet" type="text/css" href="/register/Public/Home/css/style.css?v=4">
	<script type="text/javascript" src="/register/Public/Home/js/fontSize.js"></script>
	<script type="text/javascript" src="/register/Public/Home/layer_mobile/layer.js"></script>
	<style type="text/css">
	.dog_production{display: inline-block;padding: 0 .15rem;background: #fff;color: #333;border-radius: .1rem;font-size: .26rem;position: absolute;z-index: 100;opacity: 0;}
	.dog_production1{top: 3.8rem;left: 1.3rem;}
	.dog_production2{top: 4rem;left: 0rem;}
	.dog_production3{top: 6.7rem;left: 0rem;}
	.dog_production4{top: 7.5rem;left: 1.5rem;}
	</style>

</head>
<body>

<span class="dog_production dog_production1"><?php echo ($dogs[0]['output']); ?></span>
<span class="dog_production dog_production2"><?php echo ($dogs[0]['output']); ?></span>
<span class="dog_production dog_production3"><?php echo ($dogs[2]['output']); ?></span>
<span class="dog_production dog_production4"><?php echo ($dogs[2]['output']); ?></span>
<div>
	<?php if($dogs[0]['type'] == 2): ?><img src="<?php echo ($dogs[0]['pic']); ?>" alt="" class="dog dogImg">
		<img src="<?php echo ($dogs[0]['pic']); ?>" alt="" class="dog dogImg1"><?php endif; ?>
	<?php if($dogs[2]['type'] == 2): ?><img src="<?php echo ($dogs[2]['pic']); ?>" alt="" class="dog dogImg2">
		<img src="<?php echo ($dogs[2]['pic']); ?>" alt="" class="dog dogImg3"><?php endif; ?>

<!--<?php if(is_array($dogs)): foreach($dogs as $k=>$v): ?>-->
 <!--<img src="<?php echo ($v["pic"]); ?>" alt="" class="dog dogImg<?php if($k==0){echo '';}else{echo $k+1;} ?>">-->
 <!--<img src="<?php echo ($v["pic"]); ?>" alt="" class="dog dogImg<?php if($k==2){echo $k;}else{echo $k+1;} ?>">-->
<!--<?php endforeach; endif; ?>-->
</div>
<ul class="lands">

	<?php if(is_array($land)): foreach($land as $k=>$v): ?><li class="land land<?php echo $k; ?>" style="background: url(/register/Public/Home/images/land<?php if($v['type']==3){echo 1;}else{echo 2;}; ?>.png) no-repeat;" data-land="<?php echo $k; ?>" data-logid="<?php echo ($v["logid"]); ?>">
		<?php if($v["states"] == 1): ?><img src="/register/Public/Home/images/shumiao.png" alt="" class="plant"><?php elseif($v["states"] == 2): ?><img src="<?php echo ($v["pic"]); ?>" alt="" class="plant"><?php endif; ?>
		<?php if($v["iscao"] == 1): ?><img src="/register/Public/Home/images/cao.png" alt="" class="cao"><?php endif; ?>
		<?php if($v["ischong"] == 1): ?><img src="/register/Public/Home/images/chong1.png" alt="" class="chong1"><?php endif; ?>
		<span class="application"><?php echo ($v["output"]); ?></span>
	</li><?php endforeach; endif; ?>
</ul>
<ul class="operation">
	<li  class="cangku">
		<img src="/register/Public/Home/images/tab/cang.png" alt="">
		<span>仓库</span>
	</li>
	<li class="cai">
		<img src="/register/Public/Home/images/tab/shouhuo.png" alt="">
		<span>采摘</span>
	</li>
	<li  onclick="location.href='friend.html';">
		<img src="/register/Public/Home/images/tab/friend.png" alt="" class="">
		<span>好友</span>
	</li>

	<li  class="store">
		<img src="/register/Public/Home/images/tab/shop1.png" alt="">
		<span>商店</span>
	</li>
	<li>
		<img src="/register/Public/Home/images/tab/my.png" alt="" class="" onclick="location.href='/register/index.php/Home/User/my.html';">
		<span>我的</span>
	</li>
</ul>
<div class="mask">
	<div class="maskContent">
		<img src="/register/Public/Home/images/shopt.png" alt="" class="titleImg">
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg">
		<ul class="tab">
			<li class="selected" data-id="1">种子</li>
			<li  data-id="2">道具</li>
		</ul>
		<div class="tabContent">
			<ul class="lists">
				<?php if(is_array($zhongzi)): foreach($zhongzi as $key=>$v): ?><li class="list">
						<div class="left">
							<img src="<?php echo ($v["pic"]); ?>" alt="" class="tab_plant">
							<span class="plantName"><?php echo ($v["name"]); ?></span>
							<span class="plantid" style="display: none;"><?php echo ($v["id"]); ?></span>
						</div>
						<ul class="right">
							<li>售价：<span class="plantMoney"><?php echo ($v["price"]); ?></span></li>
							<li><button>购买</button>
								<input type="hidden" value="<?php echo ($v["id"]); ?>">
							</li>
						</ul>
					</li><?php endforeach; endif; ?>
			</ul>
		</div>
		<div class="tabContent hidden">
			<ul class="lists">
				<?php if(is_array($daoju)): foreach($daoju as $key=>$v): ?><li class="list">
						<div class="left">
							<img src="<?php echo ($v["pic"]); ?>" alt="" class="tab_plant tool">
							<span class="plantName"><?php echo ($v["name"]); ?></span>
							<span class="plantid" style="display: none;"><?php echo ($v["id"]); ?></span>
						</div>
						<ul class="right">
							<li>售价：<span class="plantMoney"><?php echo ($v["price"]); ?></span></li>
							<li><button>购买</button>
							     <input type="hidden" value="<?php echo ($v["id"]); ?>">
							</li>
						</ul>
					</li><?php endforeach; endif; ?>
				<!--<li class="list">-->
					<!--<div class="left">-->
						<!--<img src="/register/Public/Home/images/chucao.png" alt="" class="tab_plant tool">-->
						<!--<span class="plantName">除草剂12</span>-->
					<!--</div>-->
					<!--<ul class="right">-->
						<!--<li>售价：<span class="plantMoney">300</span></li>-->
						<!--<li><button>购买</button></li>-->
					<!--</ul>-->
				<!--</li>-->
			</ul>
		</div>
	</div>
	<div class="buyContent">
		<img src="/register/Public/Home/images/luobu.gif" alt="" class="buy_plant">
		<span class="plant_name">西红柿种子</span>
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg1">
		<form action="" method="post" enctype="multipart/form-data">
			<ul class="info">
				<li>单价：<input type="text"  value="300" id="singleMoney" disabled="disabled"></li>
				<!-- <span id="singleMoney"></span> -->
				<li class="input"><button class="mins" type="button">-</button><input type="number" name="number" value="1" id="number" /><button class="plus"  type="button">+</button></li>
				<li>总计：<span id="totle">300</span></li>
				<input type="hidden" name="shangdian" value="1">
				<input type="hidden" class="productid" name="id" value="1">
			</ul>
			<button type="submit" id="submit"></button>
			<!-- <img src="/register/Public/Home/images/yesbuy.png" alt="" class="yesImg"> -->
		</form>
	</div>
</div>
<div class="warehouse">
	<div class="maskContent maskContent1">
		<img src="/register/Public/Home/images/depott.png" alt="" class="titleImg">
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg2">
		<ul class="tab tab1">
			<li class="selected">种子</li>
			<li>道具</li>
			<li>果实</li>
		</ul>
		<ul class="tabContents">
			<?php if(is_array($zhongzi)): foreach($zhongzi as $k=>$v): ?><li data-seed="<?php echo $k+1; ?>">
				<img src="<?php echo ($v["pic"]); ?>" alt="" class="cangPlant">
				<span><?php echo ($v["name"]); ?>（<?php echo ($v["allnum"]); ?>）</span>
			</li><?php endforeach; endif; ?>
		</ul>
		<ul class="tabContents hidden">
			<?php if(is_array($daoju)): foreach($daoju as $key=>$v): ?><!--<li class="<?php if($v['id']==81){echo 'jiaoshui';}elseif($v['id']==82){echo 'chucao';}elseif($v['id']==83){echo 'shachong';} ?>" tyle='width:35%;'>-->
				<li class="action" tyle='width:35%;' data-id="<?php echo ($v["id"]); ?>" data-name="<?php echo ($v["name"]); ?>" data-num="<?php echo ($v["allnum"]); ?>">
				<img src="<?php echo ($v["pic"]); ?>" alt="" class="cangPlant">
				<span style=""><?php echo ($v["name"]); ?>（<?php echo ($v["allnum"]); ?>）</span>
			</li><?php endforeach; endif; ?>
		</ul>
		<ul class="tabContents hidden" id="guoshi">
			<?php if(is_array($guoshi)): foreach($guoshi as $key=>$v): ?><li>
				<input type="hidden" name="afterprice" value="<?php echo ($v["afterprice"]); ?>">
				<input type="hidden" name="productids" value="<?php echo ($v["id"]); ?>">
				<img src="<?php echo ($v["pic"]); ?>" alt="" class="cangPlant">
				<span><?php echo ($v["name"]); ?>（<?php echo ($v["allnum"]); ?>）</span>
			</li><?php endforeach; endif; ?>
		</ul>


	</div>
</div>
<div class="warehouse1">
	<div class="maskContent maskContent1">
		<img src="/register/Public/Home/images/depott.png" alt="" class="titleImg">
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg2">
		<ul class="tab tab1">
			<li class="selected" style="width: 100%;">种子</li>
		</ul>
		<!--种地显示的种子-->
		<ul class="tabContents">
			<?php if(is_array($zhongzi)): foreach($zhongzi as $k=>$v): ?><li data-seed="<?php echo ($v["id"]); ?>">
				<img src="<?php echo ($v["pic"]); ?>" alt="" class="cangPlant">
				<span><?php echo ($v["name"]); ?>（<?php echo ($v["allnum"]); ?>）</span>
			</li><?php endforeach; endif; ?>
		</ul>
		<!--种地显示的种子-->
	</div>
</div>


<div class="warehouse2">
	<div class="maskContent maskContent1">
		<img src="/register/Public/Home/images/depott.png" alt="" class="titleImg">
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg2">
		<ul class="tab tab1">
			<li class="selected" style="width: 100%;">道具</li>
		</ul>
		<!--种地显示的种子-->
	    <ul class="tabContents">
			<?php if(is_array($caodata)): foreach($caodata as $key=>$v): ?><li data-ju="<?php echo ($v["id"]); ?>">
					<img src="<?php echo ($v["pic"]); ?>" alt="" class="cangPlant">
					<span><?php echo ($v["name"]); ?>（<?php echo ($v["allnum"]); ?>）</span>
				</li><?php endforeach; endif; ?>
		</ul>
		<!--种地显示的种子-->
	</div>
</div>

<div class="saleMask">
	<div class="saleContent">
		<img src="/register/Public/Home/images/pingguo.png" alt="" class="buy_plant1">
		<span class="plant_name1">苹果</span>
		<img src="/register/Public/Home/images/x.png" alt="" class="closeImg1">
		<form action="" method="post">

			<ul class="info">
				<li>单价：<input type="text"  value="300" id="singleMoney1" disabled="disabled"></li>
				<!-- <span id="singleMoney"></span> -->

				<li class="input"><button class="mins1" type="button">-</button><input type="number" name="number" value="1" id="number1" /><button class="plus1"  type="button">+</button></li>
				<li>龙币：<span id="totle1">300</span></li>
				<input type="hidden" name="productguoshi" value="1">
				<input type="hidden" class="productgsid" name="productgsid" value="1">
				<!-- <li style="margin-top: .2rem;">选择售卖数量：</li>
                <li class="input"><button class="mins1" type="button">-</button><input type="number" value="1" id="number1"><button class="plus1" type="button">+</button></li> -->
			</ul>
			<button type="submit" id="submit1"></button>
		</form>

	</div>
</div>
<input type="hidden" id="seeds" value="">
<script type="text/javascript" src="/register/Public/Home/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
	$('body').height($(window).height());
	$(".mask .tab li").click(function() {
		$(this).addClass('selected').siblings().removeClass('selected');
		var index=$(this).index();
		$(".mask .tabContent").addClass('hidden').eq(index).removeClass('hidden');
	});
	$(".warehouse .tab li").click(function() {
		$(this).addClass('selected').siblings().removeClass('selected');
		var index=$(this).index();
		$(".warehouse .tabContents").addClass('hidden').eq(index).removeClass('hidden');
	});

	// 商店购买窗口 ok
	$(".tabContent .right button").click(function() {
		var p=$(this).parents(".list");
		var productid = $(this).next().val();
		var name=p.find('.plantName').html();
		var src=p.find('.tab_plant').attr('src');
		var singleMoney=p.find('.plantMoney').html();
		$(".plant_name").html(name);
		$(".buy_plant").attr('src', src);
		$("#singleMoney").val(singleMoney);
		$(".productid").val(productid);
		$("#totle").html(singleMoney);
		$(".buyContent").show();
	});
	$(".closeImg1").click(function() {
		$(".buyContent").hide();
		$("#number").val(1);
	});
	// 价格弹窗关闭
	$(".closeImg").click(function() {
		if($(".buyContent").css('display')=="block"){
			return false;
		}
		$(".mask").hide();
	});
	// 价格计算
	$(".plus").click(function() {
		var val=Number($("#number").val());
		var singleMoney=Number($("#singleMoney").val());
		$("#number").val(++val);
		$("#totle").html(parseInt(val*singleMoney));
	});
	$(".mins").click(function() {
		var val=Number($("#number").val());
		var singleMoney=Number($("#singleMoney").val());
		if(val<=1){
			return false;
		}
		$("#number").val(--val);
		$("#totle").html(parseInt(val*singleMoney));
	});
	// 价格计算end

	// 售卖数量选择计算
	$(".plus1").click(function() {
		var val=Number($("#number1").val());
		var singleMoney=Number($("#singleMoney1").val());
		$("#number1").val(++val);
		$("#totle1").html(parseInt(val*singleMoney));
	});
	$(".mins1").click(function() {
		var val=Number($("#number1").val());
		var singleMoney=Number($("#singleMoney1").val());
		if(val<=1){
			return false;
		}
		$("#number1").val(--val);
		$("#totle1").html(parseInt(val*singleMoney));
	});
	// 售卖弹窗关闭
	$(".saleMask .closeImg1").click(function() {
		$(".saleMask").hide();
	});

	// 商店显示
	$(".store").click(function() {
		$(".mask").show();
	});
	// 个人仓库显示
	$(".cangku").click(function() {
		$(".warehouse").show();
	});
	// 个人仓库关闭
	$(".warehouse .closeImg2").click(function() {
		$(".warehouse").hide();
	});
	// 种子弹窗关闭
	$(".warehouse1 .closeImg2").click(function() {
		$(".warehouse1").hide();
	});
	// 道具窗关闭
	$(".warehouse2 .closeImg2").click(function() {
		$(".warehouse2").hide();
	});




	// 点击 种子种地
	var seed;
	var uid;
	$(".warehouse1 li").click(function() {
//		debugger;
		seed=$(this).attr('data-seed');
//		land=$(this).attr('data-seed');
		console.log(land);
		//  发送请求
		$.ajax({
			url:"/register/index.php/Home/Index/sowing",
			data:{
				land : land,
				seed:seed,
				uid:<?php echo ($uid); ?>
			},
			cache:false,
			type:'get',
			dataType:"text",
			success:function(result){
				layer.open({
					content: result
					,btn: ['确定', '取消']
					,shadeClose: false
					,yes: function(index){
						window.location.reload(true); // 土地错位 重新刷新
//						layer.close(index);
					}
				});

				$(".land").eq(land).css("background","url(/register/Public/Home/images/land1.png) no-repeat").append('<img src="/register/Public/Home/images/shumiao.png" alt="" class="plant">');
//				location.reload();
			}});
	});

   var logid;
	$(".land .plant").click(function() {
		logid=$(this).parents("li").attr("data-logid");
		var str=$(this).parents(".land").css("background");
		if(str.indexOf("/register/Public/Home/images/land2.png")>-1){
			return false;
		}
		var that=$(this).parents(".land");
		$(".warehouse2").show();
		$(that).find(".application").animate({
			"opacity":1
		},2000,function(){
			$(that).find(".application").animate({
				"opacity":0
			},2000);
		});
	});
	$(".warehouse2 .tabContents .cangPlant").click(function(){
        var attr=$(this).parents("li").attr('data-ju');
        console.log(logid)
        console.log(attr)
		$.ajax({
		   type: "GET",
		   url: "/register/index.php/Home/Index/dealcao",
			dataType:"text",
		   data: {
               logid:logid,
               attr:attr,
			   uid:<?php echo ($uid); ?>
		   },
		   success: function(result){
			   layer.open({
				   content: result
				   ,btn: ['确定', '取消']
				   ,shadeClose: false
				   ,yes: function(index){
					   window.location.reload(true); // 土地错位 重新刷新
//						layer.close(index);
				   }
			   });
		   	}
		});

	});


	$(".dog").click(function() {
		var index=$(this).index();
		console.log(index)
		var that=this;
		$('.dog_production').eq(index).animate({
			"opacity":1
		},2000,function(){
			$('.dog_production').eq(index).animate({
				"opacity":0
			},2000);
		});
	});
	// 点击土地弹出种子窗口
	var land=null;
	$(".land").click(function() {
		var str=$(this).css("background");
		land=$(this).attr("data-land");
//		console.log(land);
//		console.log(str.indexOf("/register/Public/Home/images/land1.png"));
		if(str.indexOf("/register/Public/Home/images/land1.png")>-1){
			return false;
		}
		$(".warehouse1").show();

	});


	// 点击除草剂弹窗
	$(".action").click(function() {
		var id;
		var name;
		var msg;
		var num;
		id=$(this).attr('data-id');
		name=$(this).attr('data-name');
		num=$(this).attr('data-num');
		msg ='请问要使用'+name+'吗';
		if(num==0){
			msg=name+'暂无';
		}
		console.log(id);
		layer.open({
			content: msg
			,btn: ['确定', '取消']
			,shadeClose: false
			,yes: function(index){
				if(num>0){
					$.ajax({
						url:"/register/index.php/Home/Index/userpro",
						data:{
							id :id,
							uid:<?php echo ($uid); ?>
						},
						cache:false,
						type:'get',
						success:function(result){
							alert(result);
							window.location.reload(true); // 土地错位 重新刷新
//							if(result.state==0){
//
//								return false;
//							}
//							alert(id);
						}});
				}
				layer.close(index);
			}
		});
	});
	// 点击杀虫剂弹窗
	$(".cai").click(function() {
		$.ajax({
			url:"/register/index.php/Home/Index/collect",
			data:{
				uid:<?php echo ($uid); ?>
			},
			dataType:"text",
			type:'get',
			success:function(result){
//				alert(result);
//				var obj = JSON.parse(result);
//				console.log(obj);

			   // alert(result);
				console.log(result.state);
//				if(result.state==1){
					layer.open({
						content: result
						,btn: ['确定', '取消']
						,shadeClose: false
						,yes: function(index){
							layer.close(index);
						}
					});
					return false;
//				}

			},
			error:function(results){
//				alert('');
				console.log(results);
//				 if(results.state==1){
				 	layer.open({
				 		content: results
				 		,btn: ['确定', '取消']
				 		,shadeClose: false
				 		,yes: function(index){
				 			layer.close(index);
				 		}
				 	});
				 	return false;
				 }
//			}
		});
			

	});

	// 果实售卖
	$("#guoshi li").click(function() {
		var src=$(this).find("img").attr('src');
		var name=$(this).find("i").html();
		var val=$(this).find("input[name='afterprice']").val();
		var productids=$(this).find("input[name='productids']").val();
		$("#number1").val(1);
		$(".buy_plant1").attr('src', src);
		$(".plant_name1").html(name);
		$("#singleMoney1").val(val);
		$(".productgsid").val(productids);
		$("#totle1").html(val);
		$(".saleMask").show();
	});


</script>
</body>
</html>