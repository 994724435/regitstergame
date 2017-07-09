<?php
namespace Home\Controller;
use Think\Controller;
use Think\Verify;
header('content-type:text/html;charset=utf-8');
class LoginController extends Controller{
    public function login(){
        session_start();
        $numbers = rand(1000,9999);
        if($_POST){
            if($_POST['number']!=$_POST['numbers']){
                echo "<script>alert('验证码错误');</script>";
                echo "<script>window.location.href='".__ROOT__."/index.php/Home/Login/login';</script>";
            }
            $menber =M('menber');
            $res = $menber->where(array('name'=>$_POST['name'],'pwd'=>$_POST['pwd']))->select();
            if($res[0]){
                session('name',$_POST['name']);
                session('uid',$res[0]['uid']);
                echo "<script>window.location.href='".__ROOT__."/index.php/Home/Index/index';</script>";
            }else{
                echo "<script>alert('用户名或密码错误');</script>";
                echo "<script>window.location.href='".__ROOT__."/index.php/Home/Login/login';</script>";
            }
        }
        $this->assign('numbers',$numbers);
        $this->display();
    }

    public function reg(){
        session_start();
        $numbers = rand(1000,9999);

        if($_POST['name']&&$_POST['pwd']){
            if(preg_match("/^1[34578]{1}\d{9}$/",$_POST['name'])){

            }else{
                echo "<script>alert('请用手机号码注册');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Login/reg';";
                echo "</script>";
                exit;
            }
            if($_POST['pwd']!=$_POST['pwd1']){
                echo "<script>alert('密码不一致');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Login/reg';";
                echo "</script>";
                exit;
            }
            if($_POST['number']!=$_POST['numbers']){
                echo "<script>alert('验证码错误');</script>";
                echo "<script>window.location.href='".__ROOT__."/index.php/Home/Login/reg';</script>";
            }
            $menber =M('menber');
            //  用户名
            $fid =$_POST['fuid'];
            $res_user =$menber->where(array('name'=>$_POST['name']))->select();
            $res_usefid[0] =1;
            if($fid){
                $res_usefid =$menber->where(array('uid'=>$fid))->select();
            }
            if($res_user[0]||!$res_usefid[0]){
                echo "<script>alert('手机号已存在或注册码不正确');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Login/reg';";
                echo "</script>";
                exit;
            }

            if($fid){
                $data['fuid'] =$fid;
                $data['friends'] =$fid;
            }
            $data['name'] =$_POST['name'];
            $data['truename'] =$_POST['truename'];
            $data['carnum'] =$_POST['carnum'];
            $data['pwd'] =$_POST['pwd'];
            $data['type'] =1;
            $data['addtime'] =date('Y-m-d H:i:s',time());
            $data['addymd'] = date('Y-m-d',time());
            $data['incomebag'] =0;
            $res =$menber->add($data);

            //处理上家
            $gift = M('gift');
            $shang = $gift->where(array('type'=>1))->select();
            foreach($shang as $v){
                if($v['num']){
                    $this->dealpro($fid,$res,$v['productid'],$v['num']);
                }

            }

            // 处理下家
            $xia = $gift->where(array('type'=>2))->select();
            foreach($xia as $v){
                if($v['num']){
                    $this->dealpro($res,$fid,$v['productid'],$v['num']);
                }
            }

            if($res){
                if($fid){
                    $fiddata = $menber->where(array('uid'=>$fid))->select();
                    if($fiddata[0]['friends']){
                        $friends =$fiddata[0]['friends'].','.$res;
                        $menber->where(array('uid'=>$fiddata[0]['uid']))->save(array('friends'=>$friends));
                    }
                }
                session('name',$_POST['name']);
                session('uid',$res);
                echo "<script>alert('用户".$_POST['name']."注册成功');";
                echo "window.location.href='".__ROOT__."/index.php/Home/Index/index';";
                echo "</script>";
                exit;
            }
        }
        $this->assign('numbers',$numbers);
        $this->display();
    }

    public function dealpro($uid,$otheruid,$proid,$num){
//        $uid =1;
//        $num =2;
//        $otheruid =6;
//        $proid =3;
        $product =M('product');
        $res = $product->where(array('id'=>$proid))->select();
        $data['userid']=$uid;
        $data['productid']=$res[0]['id'];
        $data['productname']=$res[0]['name'];
        $data['productmoney']=0;
        $data['type']=$res[0]['type'];
        $data['states']=0;
        $data['orderid']=$otheruid;
        $data['addtime']=date('Y-m-d H:i:s',time());
        $data['num']=$res[0]['num'];
        $data['prices']=0;
        $data['pic']=$res[0]['pic'];
        $data['num']=$num;
        $data['life']=$res[0]['life'];
        $orderlog =M('orderlog');
        $id = $orderlog->add($data);
        return  $id;
    }

    /* 生成验证码 */
//    public function verify()
//    {
//        $config = [
//            'fontSize' => 19, // 验证码字体大小
//            'length' => 4, // 验证码位数
//            'imageH' => 34
//        ];
//        $Verify = new Verify($config);
//        $Verify->entry();
//    }

    /* 验证码校验 */
    public function check_verify($code, $id = '')
    {
        $verify = new \Think\Verify();
        $res = $verify->check($code, $id);
        $this->ajaxReturn($res, 'json');
    }
}