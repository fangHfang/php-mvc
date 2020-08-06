<?php
class address extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->addressModel=new addressModel();
    }
    function address(){
        $num=$this->addressModel->getnum();
        $pager=new pager($num,5);
        $pager->output();
        $data=$this->addressModel->selectaddress($pager->limit);
        $str=$pager->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/addresslist.html");
    }
    function deladdress(){
        $r=$this->addressModel->deladdress();
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=address&a=address";
        $this->climb($msg,$href);
    }
    function addaddress(){
        $this->smarty->display("admin/addaddress.html");
    }
    function checkaddress(){
        $r=$this->addressModel->insertaddress();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=address&a=address";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=address&a=addaddress";
        }
        $this->climb($msg,$href);
    }
    function updateaddress(){
        $data=$this->addressModel->getsomeaddress();
        $area=$data["area"];
        $arr=explode("-",$area);
        $this->smarty->assign("data",$data);
        $this->smarty->assign("arr",$arr);
        $this->smarty->display("admin/addressupdate.html");
    }
    function checkupdateaddress(){
        $r=$data=$this->addressModel->updateaddress();
        $id=$_POST["uid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=address&a=address";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=address&a=updateupdateaddress&id=$id";
        }
        $this->climb($msg,$href);
    }
}