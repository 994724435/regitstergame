<?php
namespace Admin\Controller;
use Think\Controller;
class GifeController extends CommonController {
    public function top(){
        $gift = M('gift');
        $cond =array();
        if($_GET['type']){
            $cond['type'] =$_GET['type'];
        }
        $res = $gift->where($cond)->select();
        $this->assign('res',$res);
        $this->display();
    }

    public function add(){
        $pro = M('product');
        if($_POST['num']>0){
            $gift = M('gift');
            $product= $pro->where(array('id'=>$_POST['productid']))->select();
            $data['productid'] =$_POST['productid'];
            $data['type'] =$_POST['type'];
            $data['num'] =$_POST['num'];
            $data['productname'] =$product[0]['name'];
            $gift->add($data);
            echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Gife/top';</script>";
            exit();
        }


        $map['type']=array('in','1,2');
        $res =$pro->where($map)->select();
        $this->assign('res',$res);
        $this->display();

    }

    public function delete(){
        $gift = M('gift');
        $gift->where(array('id'=>$_GET['id']))->delete();
        echo "<script>window.location.href = '".__ROOT__."/index.php/Admin/Gife/top';</script>";
        exit();
    }
}



 ?>