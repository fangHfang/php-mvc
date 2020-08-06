<?php
class goods extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->goodsModel=new goodsModel();
    }
    function goods(){
        $num=$this->goodsModel->getgoodsnum();
        $page=new pager($num,5);
        $page->output();
        $arr=$this->goodsModel->getgoods($page->limit);
        $str=$page->str;
        foreach ($arr as $k=>$v){
            $imgstr=$v['gpicture'];
            $imgarray=explode(";",$imgstr);
            $imgarray=array_slice($imgarray,0,3);
            $arr[$k]["gpicture"]=$imgarray;
        }
        $this->smarty->assign("data",$arr);
        $this->smarty->assign("str",$str);
        $this->smarty->display("admin/goodslist.html");
    }
    function delgoods(){
        $id=$_GET["id"];
        $r=$this->goodsModel->delgoods($id);
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=goods&a=goods";
        $this->climb($msg,$href);
    }

    function addgoods(){
        $data=$this->goodsModel->getalltype();
        $this->smarty->assign("types",$data);
        $this->smarty->display("admin/goodsadd.html");
    }
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    function goodsaddcheck(){
        $r=$this->goodsModel->insertgoods();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=goods&a=goods";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=goods&a=addgoods";
        }
        $this->climb($msg,$href);
    }
    function goodsupdate(){
        $data=$this->goodsModel->getsomegoods();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/goodsupdate.html");
    }
    function goodsupdatecheck(){
        $r=$this->goodsModel->updategoods();
        $id=$_POST["tid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=goods&a=goods";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=goods&a=goodsupdate&id=$id";
        }
        $this->climb($msg,$href);
    }
}