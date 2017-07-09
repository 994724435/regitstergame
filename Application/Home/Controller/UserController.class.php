<?php

namespace Home\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class UserController extends CommonController{
    public function my(){
        $menber =M('menber');
        $useinfo = $menber->where(array('uid'=>session('uid')))->select();
        $this->assign('money',$useinfo[0]['incomebag']);
        $this->display();
    }


    public function addMoney(){  //充值
        if($_POST){
            if($_POST['num']<=0){
                echo "<script>alert('请输入正确金额在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/addMoney';";
                echo "</script>";
                exit;
            }
            $menber =M('menber');
            $res_user = $menber->where(array('name'=>$_POST['name']))->select();
            if($res_user[0]){
                $uid =$res_user[0]['uid'];
                $income =M('incomelog');
                $data['type'] =0;
                $data['state'] =0;
                $data['reson'] ='充值';
                $data['addymd'] =date('Y-m-d',time());
                $data['addtime'] =date('Y-m-d H:i:s',time());
                $data['orderid'] =session('uid');
                $data['userid'] =$uid;
                $data['income'] =$_POST['num'];
                $income->add($data);
                $resreson ="充值".$_POST['num']."元";
                echo "<script>alert('".$resreson."待管理员确认');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/addMoney';";
                echo "</script>";
                exit;
            }else{
                echo "<script>alert('用户名不存在');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/addMoney';";
                echo "</script>";
                exit;
            }
        }
        $this->display();
    }

    public function drawCash(){  //提现
        if($_POST){

            if($_REQUEST['num']<=0){
                echo "<script>alert('金额不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/drawCash/num/".$_REQUEST['num']."';";
                echo "</script>";
                exit;
            }

            if(!$_POST['type']){
                echo "<script>alert('请将信息填写完整');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/drawCash/num/".$_REQUEST['num']."';";
                echo "</script>";
                exit;
            }
            $product =M("product");
             $res_pro= $product->where(array('id'=>$_GET['num']))->select();
            $_REQUEST['num'] =$res_pro[0]['price'];
            $menber =M('menber');
            $res_user = $menber->where(array('uid'=>session('uid')))->select();
//            if($res_user[0]['pwd2']!=$_POST['pwd']){
//                echo "<script>alert('密码不正确');";
//                echo "window.location.href='".__ROOT__."/index.php/Home/User/drawCash';";
//                echo "</script>";
//                exit;
//            }
            $allmoney =$res_user[0]['incomebag'];


            if($allmoney<$_REQUEST['num']){
                echo "<script>alert('钱包余额不足');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/drawCash/num/".$_REQUEST['num']."';";
                echo "</script>";
                exit;
            }


            //处理自己
            $datas1['incomebag'] =bcsub($res_user[0]['incomebag'],$_REQUEST['num'],2);
//            $chargebagmy = $res_user[0]['chargebag'] -$_POST['num'];
            $menber->where(array('uid'=>session('uid')))->save($datas1);
            $income =M('incomelog');
            $logdata['type'] =3 ;
            $logdata['state'] =0 ;
            $logdata['reson'] =$_POST['type'].'提现,购买'.$res_pro[0]['name'] ;
            $logdata['addymd'] =date('Y-m-d',time()) ;
            $logdata['addtime'] =date('Y-m-d H:i:s',time()) ;
            $logdata['orderid'] =$_POST['name'].','.$_POST['account'].','.$_POST['carnum'].','.$_POST['carmame'].','.$_POST['carhang'].','.$_POST['caraddr'] ;
            $logdata['userid'] =session('uid');
            $logdata['income'] =$_REQUEST['num'];
            $income->add($logdata);
            echo "<script>alert('等待管理员确认');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/drawCash';";
            echo "</script>";
            exit;
        }
        $this->display();
    }


    private function changetype($num){
        if($num==800){
            return 1;
        }
        if($num==1500){
            return 2;
        }
        if($num==3000){
            return 3;
        }
        if($num==6000){
            return 4;
        }
    }

    private function savelog($data){
        $incomelog =M('incomelog');
        return $incomelog->add($data);
    }

    public function payRecord(){  //充值记录
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']=3;
//        $condtion['state']=2;
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function cancel(){
        $incomelog =M('incomelog');
        $condtion['uid'] =session('uid');
        $condtion['id']  =$_GET['id'];
        $res = $incomelog->where($condtion)->select();
        $income =$res[0]['income'];
        if($income<=0){
            echo "<script>alert('取消失败');";
            echo "window.location.href='".__ROOT__."/index.php/Home/User/cashRecord';";
            echo "</script>";
            exit;
        }
        $menber =M('menber');
        $useinfo = $menber->where(array('uid'=>session('uid')))->select();
//        $res_usermoney = $useinfo[0]['incomebag']+$income;
        $res_usermoney = bcadd($useinfo[0]['incomebag'],$income,2);
        $menber->where(array('uid'=>session('uid')))->save(array('incomebag'=>$res_usermoney));
        $incomelog->where(array('id'=>$_GET['id']))->save(array('state'=>3));
        echo "<script>alert('操作成功');";
        echo "window.location.href='".__ROOT__."/index.php/Home/User/cashRecord';";
        echo "</script>";
        exit;
    }

    public function cashRecord(){  //提现记录
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']=3;
//        $condtion['state']=2;
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }

    //出售记录
    public function cashDetail(){
        $incomelog =M('incomelog');
        $condtion['userid'] =session('uid');
        $condtion['type']=4;
        $condtion['state']=1;
        $res = $incomelog->order('id DESC')->where($condtion)->select();
        $this->assign('res',$res);
        $this->display();
    }


    public function modifyPwd(){  //修改密码
        if($_POST['oldpwd']){
            $menber =M('menber');
            $men_res = $menber->where(array('uid'=>session('uid')))->select();
            if($men_res[0]['pwd']==$_POST['oldpwd']){
                if($_POST['pwd1']){
                    if($_POST['pwd']==$_POST['pwd1']){
                        if($_POST['pwd2']){
                            $data['pwd2'] =$_POST['pwd2'];
                        }
                        $data['pwd'] =$_POST['pwd'];
                        $menber->where(array('uid'=>session('uid')))->save($data);
                        echo "<script>alert('修改成功');";
                        echo "window.location.href='".__ROOT__."/index.php/Home/User/modifyPwd';";
                        echo "</script>";
                        exit;
                    }else{
                        echo "<script>alert('两次密码不一致');";
                        echo "window.location.href='".__ROOT__."/index.php/Home/User/modifyPwd';";
                        echo "</script>";
                        exit;
                    }
                }
                if($_POST['pwd2']){
                    $data['pwd2'] =$_POST['pwd2'];
                    $menber->where(array('uid'=>session('uid')))->save($data);
                    echo "<script>alert('修改成功');";
                    echo "window.location.href='".__ROOT__."/index.php/Home/User/modifyPwd';";
                    echo "</script>";
                    exit;
                }
            }else{
                echo "<script>alert('密码错误');";
                echo "window.location.href='".__ROOT__."/index.php/Home/User/modifyPwd';";
                echo "</script>";
                exit;
            }
        }
        $this->display();
    }

    public function exchange(){
        $product = M("product");
        $pro_res = $product->where(array('type'=>5))->select();
        $this->assign('pro',$pro_res);
        $this->display();

    }

}