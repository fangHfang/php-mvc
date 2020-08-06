<?php
class type extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->typeModel=new typeModel();
    }
    function type(){
        $num=$this->typeModel->gettypenum();
        $page=new pager($num,5);
        $page->output();
        $data=$this->typeModel->gettype($page->limit);
        $str=$page->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/typelist.html");
    }
    function deltype(){
        $id=$_GET["id"];
        $r=$this->typeModel->deltype($id);
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=type&a=type";
        $this->climb($msg,$href);
    }

    function addtype(){
        $this->smarty->display("admin/typeadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function typeaddcheck(){
        $r=$this->typeModel->inserttype();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=type&a=type";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=type&a=addtype";
        }
        $this->climb($msg,$href);
    }
    function typeupdate(){
        $data=$this->typeModel->getsometype();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/typeupdate.html");
    }
    function typeupdatecheck(){
        $r=$this->typeModel->updatetype();
        $id=$_POST["tid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=type&a=type";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=type&a=typeupdate&id=$id";
        }
        $this->climb($msg,$href);
    }
}