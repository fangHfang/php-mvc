<?php
class orders extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->ordersModel=new ordersModel();
    }
    function orders(){
        $num=$this->ordersModel->getordersnum();
        $page=new pager($num,5);
        $page->output();
        $data=$this->ordersModel->getorders($page->limit);
        $str=$page->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/orderslist.html");
    }
    function delorders(){
        $id=$_GET["id"];
        $r=$this->ordersModel->delorders($id);
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=orders&a=orders";
        $this->climb($msg,$href);
    }

    function addorders(){
        $data=$this->ordersModel->getalltype();
        $this->smarty->assign("type",$data);
        $this->smarty->display("admin/ordersadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function ordersaddcheck(){
        $r=$this->ordersModel->insertorders();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=orders&a=orders";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=orders&a=addorders";
        }
        $this->climb($msg,$href);
    }
    function ordersupdate(){
        $data=$this->ordersModel->getsomeorders();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/ordersupdate.html");
    }
    function ordersupdatecheck(){
        $r=$this->ordersModel->updateorders();
        $id=$_POST["oid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=orders&a=orders";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=orders&a=ordersupdate&id=$id";
        }
        $this->climb($msg,$href);
    }
}