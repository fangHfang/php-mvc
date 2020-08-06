<?php
class category extends controller{
    function __construct()
    {
        parent::__construct();
        $this->check();
        $this->categoryModel=new categoryModel();
    }
    //显示页面
    function category(){
        $num=$this->categoryModel->getcategory();
        $pager=new pager($num,5);
        $pager->output();
        $data=$this->categoryModel->getnum($pager->limit);
        $str=$pager->str;
        $this->smarty->assign("str",$str);
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/categorylist.html");
    }
    //删除
    function delcategory(){
        $id=$_GET["id"];
        $r=$this->categoryModel->delcategory($id);
        if($r==1){
            $msg="成功";
        }else{
            $msg="失败";
        }
        $href="index.php?m=admin&c=category&a=category";
        $this->climb($msg,$href);
    }
    //增加页面
    function categoryadd(){
        $this->smarty->display("admin/categoryadd.html");
    }
    //图片上传
    function upload(){
        $upload=new upload();
        $path=$upload->upload("file");
        echo $path;
    }
    //检查上传
    function checkaddcategory(){
        $r=$this->categoryModel->insertcategory();
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=category&a=category";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=category&a=categoryadd";
        }
        $this->climb($msg,$href);
    }
    //修改
    function updatecategory(){
        $data=$this->categoryModel->getsomecategory();
        $this->smarty->assign("data",$data);
        $this->smarty->display("admin/categoryupdate.html");
    }

    function checkcategoryupdate(){
        $r=$this->categoryModel->updatecategory();
        $id=$_POST["cid"];
        if($r==1){
            $msg="成功";
            $href="index.php?m=admin&c=category&a=category";
        }else{
            $msg="失败";
            $href="index.php?m=admin&c=category&a=updatecategory&id=$id";
        }
        $this->climb($msg,$href);
    }

}