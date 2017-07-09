<?php
namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
//	public function _initialize(){
//		if($_GET['openid']){
//			$menber =M('menber');
//			$user=$menber->where(array('openid'=>$_GET['openid']))->select();
//			S('name',$user[0]['name']);
//			S('userid',$user[0]['id']);
//			S('nickname',$user[0]['nickname']);
//		}
//	}

   //  订单数量  -  种下种子   生成一条数据  种植中
	//  种植土地  to du

   //主页
	public function index(){
		$product =M('product');
		$orderlog =M('orderlog');
		if($_POST['productguoshi']){
			$productgsid =$_POST['productgsid'];
			$number   =$_POST['number'];
			$pronum= $orderlog->where(array('productid'=>$productgsid,'type'=>3,'states'=>3,'userid'=>session('uid')))->sum('output');
			if($pronum<$number){
				echo "<script>alert('库存不足');";
				echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
				echo "</script>";
				exit;
			}
			$prolog= $orderlog->where(array('productid'=>$productgsid,'type'=>3,'states'=>3,'userid'=>session('uid')))->select();
			$all = 0;
			foreach($prolog as $k=>$v){
				$all =$all+$v['output'];
				if($v['output']>=$number){     // ok
					$productSell = $product->where(array('id'=>$v['productid']))->select();
					$afterprice =$productSell[0]['afterprice'];
					$incomeSell = bcmul($number,$afterprice,2);  // 售卖价格

					//处理收入
					$this->dealbag(session('uid'),$incomeSell);

					// 处理日志
					$datalog['type']= 4;
					$datalog['state']= 1;
					$datalog['reson']= "出售商品";
					$datalog['addymd']= date("Y-m-d",time());
					$datalog['addtime']=date("Y-m-d H:i:s",time());
					$datalog['orderid']= $v['logid'];
					$datalog['userid']= session('uid');
					$datalog['income']= $incomeSell;
					$incomelogobj =M("incomelog");
					$incomelogobj->add($datalog);

					// 更新订单状态
					$left = $v['output']-$number;
					if($left==0) {    // 相等

					}else{			// 大于
						$swool = $orderlog->where(array('logid'=>$v['logid']))->select();
						$swool[0]['logid'] = 0;
						$swool[0]['output']=$left;
						$orderlog->add($swool[0]);
					}
					$orderlog->where(array('logid'=>$v['logid']))->save(array('states'=>4,'output'=>$number));
					break;
				}

				if($v['output']<$number){  // 全部处理
					$productSell = $product->where(array('id'=>$v['productid']))->select();
					$afterprice =$productSell[0]['afterprice'];
					$incomeSell = bcmul($v['output'],$afterprice,2);  // 售卖价格

					//处理收入
					$this->dealbag(session('uid'),$incomeSell);

					// 处理日志
					$datalog['type']= 4;
					$datalog['state']= 1;
					$datalog['reson']= "出售商品";
					$datalog['addymd']= date("Y-m-d",time());
					$datalog['addtime']=date("Y-m-d H:i:s",time());
					$datalog['orderid']= $v['logid'];
					$datalog['userid']= session('uid');
					$datalog['income']= $incomeSell;
					$incomelogobj =M("incomelog");
					$incomelogobj->add($datalog);

					// 更新订单状态
					$orderlog->where(array('logid'=>$v['logid']))->save(array('states'=>4));
					$number =$number-$v['output'];
				}

			}
			echo "<script>alert('出售成功');";
			echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
			echo "</script>";
			exit;
		}

		//商店购买
		if($_POST['shangdian']){
			if(in_array($_POST['id'],array(9,81,82,83,84,92))){
				if($_POST['number']<3000){
					echo "<script>alert('该道具3000起售');";
					echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
					echo "</script>";
					exit;
				}
			}
			if($_POST['id']==8){
				if($_POST['number']!=1){
					echo "<script>alert('狗狗只能购买一对');";
					echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
					echo "</script>";
					exit;
				}
				$dogdata['userid'] =session('uid');
				$dogdata['states'] = 0;
				$dogdata['productid'] = array('in','8,93');
				$isdogs = $orderlog->where($dogdata)->select();
				if($isdogs[0]){
					echo "<script>alert('狗狗已经存在了');";
					echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
					echo "</script>";
					exit;
				}
			}
			$number =$_POST['number'];
			$id     =$_POST['id'];
			if(!$id||!$number){
				echo "<script>alert('订单异常');";
				echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
				echo "</script>";
				exit;
			}
			$pro = $product->where(array('id'=>$id))->select();
			$price =bcmul($pro[0]['price'],$number,2);
			$menber =M('menber');
			$mine = $menber->where(array('uid'=>session('uid')))->select();
			$incomebag =$mine[0]['incomebag'];
			if($incomebag<$price){
				echo "<script>alert('钱包余额不足');";
				echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
				echo "</script>";
				exit;
			}
			// 处理钱包
			$bag = bcsub($incomebag,$price,2);
			$menber->where(array('uid'=>session('uid')))->save(array('incomebag'=>$bag));
			// 添加订单日志
			$orderid =date('YmdHis',time()).rand(1000,9999);
			$dataorder['userid'] =session('uid');
			$dataorder['productid'] =$pro[0]['id'];
			$dataorder['productname'] =$pro[0]['name'];
			$dataorder['productmoney'] =$pro[0]['afterprice'];
			$dataorder['type'] =$pro[0]['type'];
			$dataorder['states'] =0;
			$dataorder['orderid'] =$orderid;
			$dataorder['addtime'] =date("Y-m-d H:i:s",time());
			$dataorder['num'] =$number;
			$dataorder['prices'] =$pro[0]['price'];
			$dataorder['pic'] =$pro[0]['pic'];
			$dataorder['life'] =$pro[0]['life'];
			$result = $orderlog->add($dataorder);

			//处理收入
			$incomelog =M('incomelog');
			$dataincome['type'] =1 ;
			$dataincome['state'] =2 ;
			$dataincome['reson'] =$pro[0]['name'] ;
			$dataincome['addymd'] =date("Y-m-d",time());
			$dataincome['addtime'] =date("Y-m-d H:i:s",time());
			$dataincome['orderid'] =$orderid;
			$dataincome['userid'] =session('uid');
			$dataincome['income'] =$price ;
			$incomelog->add($dataincome);

			echo "<script>alert('购买成功');";
			echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
			echo "</script>";
			exit;
		}

		$map['type']  = array('in','1,2,3');
		$neworder = $product->where($map)->order('id asc')->select();
		$zhongzi=array();
		$daoju =array();
		$guoshi=array();
		foreach($neworder as $k=>$v){
			if($v['type']==1){
				$num = $orderlog->where(array('productid'=>$v['id'],'type'=>1,'states'=>0,'userid'=>session('uid')))->sum('num');
				if(!$num){
					$num=0;
				}
				$neworder[$k]['allnum'] =$num;
				array_push($zhongzi,$neworder[$k]);
			}
			if($v['type']==2){
				$num = $orderlog->where(array('productid'=>$v['id'],'type'=>2,'states'=>0,'userid'=>session('uid')))->sum('num');
				if(!$num){
					$num=0;
				}
				$neworder[$k]['allnum'] =$num;
				array_push($daoju,$neworder[$k]);
			}
			if($v['type']==3){
				$num = $orderlog->where(array('productid'=>$v['id'],'type'=>3,'states'=>3,'userid'=>session('uid')))->sum('num');
				if(!$num){
					$num=0;
				}
				$neworder[$k]['allnum'] =$num;
				array_push($guoshi,$neworder[$k]);
			}
		}

		//处理土地
		$land =array();
		for($i=1;$i<16;$i++){
			$cond['type'] =3;
			$cond[]='states IN (1,2)';
			$cond['land']=$i;
			$cond['num']=1;
			$cond['userid']=session('uid');
			$landata = $orderlog->where($cond)->select();
			$land[$i] =$landata[0];
		}

		//狗
		$dogs_res =array();
//		$dogs= $orderlog->where(array('productid'=>8,'userid'=>session('uid'),'states'=>0))->sum('num');
		$dogs_re = $orderlog->where(array('productid'=>8,'userid'=>session('uid'),'states'=>0))->select();
		if($dogs_re[1]){
			$dogs_re[2] =$dogs_re[1];
			unset($dogs_re[1]);
		}

		// 除草数据
		$map['id']  = array('in','81,82,83');
		$caodate = $product->where($map)->order('id asc')->select();

		$daojus =$daoju;
		foreach($daoju as $key=>$val){
			if(!in_array($val['id'],array(81,82,83))){
				unset($daoju[$key]);
			}
		}

		$this->assign('caodata',$daoju);
		$this->assign('dogs',$dogs_re);
		$this->assign('land',$land);
		$this->assign('uid',session('uid'));
		$this->assign('zhongzi',$zhongzi);
		$this->assign('daoju',$daojus);
		$this->assign('guoshi',$guoshi);
		$this->display();
	}

	// 处理除草剂
	public function dealcao(){
		$datalogid =$_GET['logid'];
		$proid = $_GET['attr'];
		$uid =$_GET['uid'];
		$action =M('action');
		$orderlog =M('orderlog');
		if($proid==81){ //浇水壶
			$type =1;
			$product = $orderlog->where(array('logid'=>$datalogid))->select();
			if($product[0]['iswater']){
				echo  $msg ="已经浇过水了";
				exit();
			}
			$this->dealTools($product[0]['productid'],$uid);
			$orderlog->where(array('logid'=>$datalogid))->save(array('iswater'=>1));
			$datalog['type'] =$type;
			$datalog['logid'] =$datalogid;
			$action->add($datalog);
			$msg ="浇水成功";
		}
		if($proid==82){ //除草剂
			$type =2;
			$product = $orderlog->where(array('logid'=>$datalogid))->select();
			if($product[0]['ischucao']){
				echo  $msg ="已经除过草了";
				exit();
			}
			$this->dealTools($product[0]['productid'],$uid);
			$orderlog->where(array('logid'=>$datalogid))->save(array('ischucao'=>1,'iscao'=>0));
			$datalog['type'] =$type;
			$datalog['logid'] =$datalogid;
			$action->add($datalog);
			$msg ="除草成功";
		}
		if($proid==83){ // 杀虫剂
			$type =3;
			$product = $orderlog->where(array('logid'=>$datalogid))->select();
			if($product[0]['ischuchong']){
				echo  $msg ="已经杀过虫了";
				exit();
			}
			$this->dealTools($product[0]['productid'],$uid);
			$orderlog->where(array('logid'=>$datalogid))->save(array('ischuchong'=>1,'ischong'=>0));
			$datalog['type'] =$type;
			$datalog['logid'] =$datalogid;
			$action->add($datalog);
			$msg ="杀虫成功";
		}
//
//		$data['staus'] =1;
//		$data['msg'] =$msg;   //  tu do
//		$this->ajaxReturn($data);
		echo $msg;
	}

	//播种
	public function  sowing(){
	     $land =$_GET['land'];
		 $seed  = $_GET['seed'];
		 $uid   =$_GET['uid'];
		 $orderlog =M('orderlog');
		 //判断该地是否有种子
		$orders = $orderlog->where(array('userid'=>$uid,'land'=>$land,'type'=>3,'states'=>1))->select();
		$order =$orderlog->where(array('userid'=>$uid,'productid'=>$seed,'type'=>1,'states'=>0))->select();

		if(empty($order)||!empty($orders)){
			echo "数量为空，不能播种";
			exit();
		}
		 foreach($order as $k=>$v){
			 if($v['num']>=1){
				 $left =$v['num']-1;
				 if($left==0){
					 $data[''] ='';
					 $data['output'] = $this->changeoutput($uid,$v['productid']);
					 $data['productid'] = $this->changproductid($v['productid']);
					 $data['type'] = 3;
					 $data['states'] = 1;
					 $data['addtime'] =date("Y-m-d H:i:s",time());
					 $data['num'] =1;
					 $data['land'] = $land;
					 $orderlog->where(array('logid'=>$v['logid']))->save($data);
					 break;
				 }
				 $orderlog->where(array('logid'=>$v['logid']))->save(array('num'=>$left));
				 //处理播下的种子
				 $v['logid'] =0;
				 $v['output'] = $this->changeoutput($uid,$v['productid']);
				 $v['productid'] = $this->changproductid($v['productid']);
				 $v['type'] = 3;
				 $v['states'] = 1;
				 $v['addtime'] =date("Y-m-d H:i:s",time());
				 $v['num'] =1;
				 $v['land'] = $land;

				 $orderlog->add($v);
				 break;
			 }
		 }
		echo "播种成功";
	}

	// 使用工具
	public function userpro(){
		$proid =$_GET['id'];
		$uid =$_GET['uid'];
		$orderlog =M('orderlog');
		$action =M('action');
		$condtion['type']=2;
		$condtion['states']=0;
		$condtion['userid']=$uid;

		$datalog['uid'] =$uid;
		$datalog['addtime'] =date("Y-m-d H:i:s",time());
		$datalog['state'] =1;

		if($proid==81){ //浇水壶

		    $msg ="请点击树苗浇水";
		}
		if($proid==82){ //除草剂
			$msg ="请点击树苗除草";
		}
		if($proid==83){ // 杀虫剂
			$msg ="请点击树苗杀虫";
		}
		if($proid==9){  // 狗粮
			$condtion['productid'] =93;
			$order_res = $orderlog->where($condtion)->select();
			$msg ="您还没有大狗";
			if($order_res[0]){
				$output =$order_res[0]['output']+10;
				$orderlog->where(array($order_res[0]['logid']))->save(array('output'=>$output));
				$this->dealTools($proid,$uid);
				$type =4;
				// 操作日志
				$datalog['type'] =$type;
				$datalog['logid'] =$order_res[0]['logid'];
				$action->add($datalog);
				$msg ="狗狗喂养完成";
			}
		}

		if($proid==92){  // 狗饼
			$type =4;
			$condtion['productid'] =8;
			$order_res = $orderlog->where($condtion)->select();
			$msg ="您还没有小狗";
			if($order_res[0]){
				$output =$order_res[0]['output']+10;
				$orderlog->where(array($order_res[0]['logid']))->save(array('output'=>$output));
				$this->dealTools($proid,$uid);
				// 操作日志
				$datalog['logid'] =$order_res[0]['logid'];
				$datalog['type'] =$type;
				$action->add($datalog);
				$msg ="小狗喂养完成";
			}

		}

		if($proid==84){ // 狗骨头
			$condtion['productid'] =93;
			$order_res = $orderlog->where($condtion)->select();
			$msg ="您还没有大狗";
			if($order_res[0]){
				$output =$order_res[0]['output']+20;
				$orderlog->where(array($order_res[0]['logid']))->save(array('output'=>$output));
				$type =4;
				$this->dealTools($proid,$uid);

				// 操作日志
				$datalog['logid'] =$order_res[0]['logid'];
				$datalog['type'] =$type;
				$action->add($datalog);
				$msg ="狗狗喂养完成";
			}
		}
		if($proid==1){ // vip
			$type =6;
			$menber =M('menber');

			//更新vip
			$this->dealTools($proid,$uid);
			$msg ="VIP卡已使用";
		}
		echo $msg;
//		echo $this->printmsg("播种成功",1);
	}
	// 处理现在工具
	private function dealTools($proid,$uid){
		$orderlog =M('orderlog');
		$order_res = $orderlog->where(array('productid'=>$proid,'userid'=>$uid,'type'=>2,'states'=>0))->select();
		foreach($order_res as $v){
			if($v['num']>=1){
				$left =$v['num']-1;
				if($left==0){
					$orderlog->where(array('logid'=>$v['logid']))->save(array('states'=>4));
					break;
				}else{
					$orderlog->where(array('logid'=>$v['logid']))->save(array('states'=>4));
					$v['logid']=0;
					$v['num'] = $left;
					$orderlog->add($v);
					break;
				}
			}
		}
	}

	public function changproductid(){
		$productid =3;
		if($productid==2){
			return 86;
		}
		if($productid==3){
			return 90;
		}
		if($productid==4){
			return 89;
		}
		if($productid==5){
			return 87;
		}
		if($productid==6){
			return 88;
		}
		if($productid==67){
			return 91;
		}
		return 0;
	}

	// 产量输出
	public function changeoutput($uid,$productid){
		$li =1;
		if($this->isvip($uid)){
			$li = 1.3;
		}
		$pro =M('product');
		$pro_res =$pro->where(array('id'=>$productid))->select();
		$out = bcmul($pro_res[0]['fruits'],$li,2);
		return $out;
	}

	/**
	 * @param $uid
	 * @return int
	 * 是否VIP
	 */
	private function isvip($uid){
		$menber =M('menber');
		$user = $menber->where(array('uid'=>$uid))->select();
		$li =0;
		if($user[0]['type']==2){
			$li = 1;
		}
		return $li;
	}

	// 使用户钱包增加
	private function dealbag($uid,$incomeSell){
		$menberobj =M('menber');
		$person = $menberobj->where(array('uid'=>$uid))->select();
		$bag =bcadd($person[0]['incomebag'],$incomeSell,2);
		$menberobj->where(array('uid'=>$uid))->save(array('incomebag'=>$bag));
	}

	//我的好友列表
	public function friend(){
		$menber =M('menber');
		$result  = $menber->where(array('uid'=>session('uid')))->select();
		if($result[0]['friends']){
			$map['uid']  = array('in',$result[0]['friends']);
			$friends  = $menber->where($map)->select();
		}
		$this->assign('res',$friends);
		$this->display();
	}

	/**
	 * 好友农场
	 */
	public function friend_farm(){
		$userid = I('get.uid');
		$menber =M('menber');
		$result  = $menber->where(array('uid'=>$userid))->select();
		$this->assign('user',$result[0]);
		$this->assign('uid',session('uid'));
		$this->assign('friendid',$_GET['uid']);
		$this->display();
	}



	// 偷取好友果实
	public function friendstouqu(){
		$uid =$_GET['uid'];
		$friendid=$_GET['friendid'];
		// 好友的果实
		$orderlog =M('orderlog');
		$product =M('product');
		$frifndlog = $orderlog->where(array('userid'=>$friendid,'type'=>1,'states'=>2))->select();

		//查询狗
		$dogs= $orderlog->where(array('productid'=>8,'states'=>0))->select();
		if($dogs){
			echo "朋友家有狗狗守护";
			exit();
		}
		$msg ='';
		if($frifndlog){
			$msg ='';
			foreach($frifndlog as $k=>$v){
				//判断该产品24小时 有没有被抽取了
				if($this->isgeted($uid,$v['productid'])){
					continue;
				}

				// 产品详情
				$productResult = $product->where(array('id'=>$v['productid']))->select();
				$all  = $v['output'];
				$stealfruits =$productResult[0]['stealfruits'];
				$name=str_replace("种子","",$productResult[0]['name']);
				if($all>$stealfruits){  // 可以偷取
					// 处理偷取日志 tu do
					$data['userid'] =$uid;
					$data['productid'] = $productResult[0]['id'];
					$data['productname'] =$name;
					$data['productmoney'] =0;
					$data['num'] =0;
					$data['life'] =0;
					$data['type'] =3;     // 3.果实
					$data['states'] =3;  //3已收取
					$data['orderid'] =$friendid;
					$data['addtime'] =date('Y-m-d H:i:s',time());
					$data['prices'] =0;
					$data['pic'] =$productResult[0]['pic'];
					$data['land'] =0;
					$data['output'] =$stealfruits ;
					$orderlog->add($data);

					//处理好友产量
					$fruitless =$all-$stealfruits;
					$fruitless =round($fruitless);
					$orderlog->where(array('logid'=>$v['logid']))->save(array('output'=>$fruitless));

					$msg = $name.$stealfruits.'个,'.$msg;
				}else{                  // 产量不够

				}

			}
			if($msg){
				$msg='恭喜，您成功偷取了好友 '.$msg;
			}else{
				$msg='好友果子不多了，下次再来吧！';
			}
		}else{
			$msg='好友菜园暂无果实';
		}
		echo $msg;
//		echo $this->printmsg($msg,1);
	}

	// 判断今日是否偷取   1已偷取  0未偷取
	private function isgeted($uid,$productid){
		$orderlog =M('orderlog');

		$where['addtime'] = array('like','%'.date('Y-m-d').'%');
		$where['type'] =3;
		$where['states'] =3;
		$where['land'] =0;
		$where['prices'] =0;
		$where['userid'] =$uid;
		$where['productid'] =$productid;
		$result = $orderlog->where($where)->select();
		if($result[0]){
			return 1;
		}else{
			return 0;
		}
	}

	// 播种
	public function dealseed(){
		$land = $_GET['land'];
		$productid = $_GET['seed'];
		$userid    = $_REQUEST['userid'];

		$land =1;
		$productid =4;
		$userid = 6;
		//该地是否有种子
		$orderlog =M('orderlog');
		$product  =M('product');
		$seeds = $orderlog->where(array('userid'=>$userid,'type'=>3,'states'=>0,'land'=>$land))->select();
		if($seeds[0]){
			$msg ="该土地已被种植";
		}else{
			// 需要的种子数
			$needs = $product->where(array('id'=>$productid))->select();
			$landnum =$needs[0]['landnum'];

			// 手中的种子
			$seeds = $orderlog->where(array('userid'=>$userid,'productid'=>$productid,'type'=>1,'states'=>0,'land'=>0))->select();
			foreach($seeds as $k=>$v){
				if($v['num']==$landnum){  // num 相等 更改状态
					print_r($v);die;
					break;
				}

				if($v['num']>$landnum){  // num 多了  更改状态  新增一条log

				}

			}


		}

		echo $this->printmsg(1,1);
	}

	public function printmsg($msg, $state = 1) {
		header('Content-Type:application/json');
		return json_encode ( array (
			"state" => $state,
			"msg" => is_string ( $msg ) ? $msg : null,
			"data" => !is_string ( $msg ) ? $msg : null,
		) );
	}

	public function collect(){
		$uid = $_REQUEST['uid'];
		$orderlog =M('orderlog');
		$res = $orderlog->where(array('type'=>3,'states'=>2,'userid'=>$uid))->save(array('states'=>3));
		if($res){
			$msg = '收取完成';
		}else{
			$msg = '暂无可收取果实';
		}
		$data['state']  = 1;
		$data['msg'] = $msg;
		echo $msg;
//		$this->ajaxReturn($data);
	}
}