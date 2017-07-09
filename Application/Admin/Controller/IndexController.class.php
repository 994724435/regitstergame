<?php

namespace Admin\Controller;
use Think\Controller;
header('content-type:text/html;charset=utf-8');
class IndexController extends CommonController {
	
    public function main(){
        $user = M('user');
//        if($_SESSION['manager']==2){
            $user_res= $user->select();
//        }
        $this->assign('re',$user_res);
        $this->display();
    }

    // 密码修改
    public function userpwd(){
        $user = M('user');
        if($_POST){
            $data['password'] =$_POST['psd1'];
            $data['manager'] =$_POST['manager'];
            $result = $user->where(array('id'=>$_GET['id']))->save($data);
            if($result){
                echo "<script>alert('修改成功');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
            }
        }
        $res= $user->where(array('id'=>$_GET['id']))->select();
        $this->assign('re',$res[0]);
        $this->display();
    }

    public function addproduct(){
        if($_POST){
            $pic='';
            if($_FILES['thumb']['name']){   // 上传文件
                $thumb = imgFile();
                $info = $thumb['info'];
                if(!$info) {// 上传错误提示错误信息

                }else{// 上传成功
                    $path = $info['thumb']['savepath'];
                    $p = ltrim($path,'.');
                    $img = $info['thumb']['savename'];
                    $pic=$p.$img;
                }
            }
            $data['name'] =$_POST['name'];
            $data['cont'] =$_POST['cont'];
            $data['pic'] =__ROOT__.$pic;
            $data['price'] =$_POST['price'];
            $data['type'] =$_POST['type'];
            $data['afterprice'] =$_POST['afterprice'];
            $data['attribute'] =$_POST['attribute'];
            $data['life']  = $_POST['life'];
            $data['landnum']  = $_POST['landnum'];
            $data['fruits']  = $_POST['fruits'];
            $data['stealfruits']  = $_POST['stealfruits'];
            $data['addtime'] =date('Y-m-d H:i:s',time());
            $product =M('product');
            $result = $product->add($data);
            if($result){
                echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
            }else{
                echo "<script>alert('添加失败');window.location.href = '".__ROOT__."/index.php/Admin/Index/addproduct';</script>";
            }

        }
        $this->display();
    }

    public function productlist(){
        $product =M('product');
        $p = empty($_GET['p'])?0:$_GET['p'];
        if($_GET['type']){
            $condtion['type']=$_GET['type'];
        }
//        $result = $product->order('id desc')->page($p,3)->select();
        $result = $product->where($condtion)->order('id asc')->select();
        $this->assign('res',$result);
        //数据分页
//        $count      = $product->count();// 查询满足要求的总记录数
//        $Page       = new \Think\Page($count,3);// 实例化分页类
//        $Page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
//        $Page->setConfig('prev', '上一页');
//        $Page->setConfig('next', '下一页');
//        $Page->setConfig('last', '末页');
//        $Page->setConfig('first', '首页');
//        $Page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
//        $Page->lastSuffix = false;//最后一页不显示为总页数
//
//        $show       = $Page->show();// 分页显示输出
//
//        $this->assign('fenye',$show);// 赋值分页输出

        $this->display();
    }

    public function dogconfig(){
        $product =M('product');
        $result = $product->where(array('id'=>8))->select();
        $this->assign('res',$result[0]);
        $this->display();
    }

    public function editeproduct(){
        if($_GET['id']==8){
            echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Index/dogconfig/id/".$_GET['id']."';</script>";
        }
        $product =M('product');
        if($_POST){
            $pic='';
            if($_FILES['thumb']['name']){   // 上传文件
                $thumb = imgFile();
                $info = $thumb['info'];
                if(!$info) {// 上传错误提示错误信息

                }else{// 上传成功
                    $path = $info['thumb']['savepath'];
                    $p = ltrim($path,'.');
                    $img = $info['thumb']['savename'];
                    $pic=$p.$img;
                    $pic=__ROOT__.$pic;
                }
            }
            $data['name'] =$_POST['name'];
            $data['cont'] =$_POST['cont'];
            if($pic){
                $data['pic'] =$pic;
            }
            $data['price'] =$_POST['price'];
            $data['afterprice'] =$_POST['afterprice'];
            $data['type'] =$_POST['type'];
            $data['attribute'] =$_POST['attribute'];
            $data['life']  = $_POST['life'];
            $data['landnum']  = $_POST['landnum'];
            $data['fruits']  = $_POST['fruits'];
            $data['stealfruits']  = $_POST['stealfruits'];
            $data['addtime'] =date('Y-m-d H:i:s',time());
            $result = $product->where(array('id'=>$_GET['id']))->save($data);
            if($result){
                echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
            }else{
                echo "<script>alert('修改失败');window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
            }

        }
        $result = $product->where(array('id'=>$_GET['id']))->select();
        $this->assign('res',$result[0]);

        $this->display();
    }

    public function deleteproduct(){
        $product =M('product');
        $result = $product->where(array('id'=>$_GET['id']))->select();
        if($result[0]){
            $state =$result[0]['state'];
        }else{
            echo "<script>alert('产品不存在');window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
        }
        if($state==1){
            $state=2;
        }else{
            $state=1;
        }
        $res= $product->where(array('id'=>$_GET['id']))->save(array('state'=>$state));
        if($res){
            echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
        }else{
            echo "<script>alert('修改失败');window.location.href = '".__ROOT__."/index.php/Admin/Index/productlist';</script>";
        }
    }

    public function select(){
        $orderlog = M('orderlog');
        if($_GET['type']){
//            $map['name']=array('like','%'.$_GET['name'].'%');
            $map['type'] =$_GET['type'];
        }
        if($_GET['uid']){
            $map['userid'] =$_GET['uid'];
        }
        if($_GET['orderid']){
            $map['orderid'] =$_GET['orderid'];
        }
        $users= $orderlog->where($map)->select();

        $this->assign('users',$users);
        $this->display();
    }

    // 添加管理员
    public function useradd(){
        if ($_POST) {
            $user = M('user');
            $data['password'] =$_POST['psd1'];
            $data['name']   = $_POST['name'];
            $data['manager']   = $_POST['manager'];
            $data['addtime']  = date('Y-m-d H:i:s',time());
            $user_res= $user->where(array('name'=>$data['name']))->select();
            if($user_res[0]['id']){
                echo "<script>alert('用户名已存在');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";exit();
            }
            $res= $user->add($data);
            if ($res) {
                echo "<script>alert('添加成功');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
            }else{
                echo "<script>alert('添加失败');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
            }

        }
        $this->display();
    }

    public function userdelete(){
        $user = M('user');
        $res = $user->where(array('id'=>$_GET['id']))->delete();
        if ($res) {
            echo "<script>alert('删除成功');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
        }else{
            echo "<script>alert('删除失败');window.location.href = '".__ROOT__."/index.php/Admin/Index/main';</script>";
        }
    }
}