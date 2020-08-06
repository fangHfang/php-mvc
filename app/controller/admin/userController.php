<?php
class user extends controller{
    function  __construct()
    {
        parent ::__construct();
        $this->check();
        $this->userModel=new userModel();
    }
    function showuser(){
        $num=$this->userModel->getusernum();
        $page=new pager($num,5);
        $page->output();
        $data=$this->userModel->getuser($page->limit);
        $str=$page->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/userlist.html");
    }
    function deluser(){
        $id=$_GET["id"];
        $r=$this->userModel->deluser($id);
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=user&a=showuser";
        $this->climb($msg,$href);
    }
    function adduser(){
        $this->smarty->display("admin/useradd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function checkadduser(){
        $r=$this->userModel->insertuser();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=user&a=showuser";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=user&a=adduser";
        }
        $this->climb($msg,$href);
    }
    function updateuser(){
        $data=$this->userModel->getsomeuser();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/updateuser.html");
    }
    function checkuserupdate(){
        $r=$this->userModel->updateuser();
        $id=$_POST["uid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=user&a=showuser";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=user&a=updateuser&id=$id";
        }
        $this->climb($msg,$href);
    }
}