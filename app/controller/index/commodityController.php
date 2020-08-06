<?php
class commodity extends indexcontroller {
    public function __construct()
    {
        parent::__construct();
        $this->commodityModel=new commodityModel();
        $this->smarty->assign("t","3");
    }
    function init(){
        $data=$this->commodityModel->getallcommodity();
        $type=$this->commodityModel->type();
        $this->smarty->assign("cid",1);
        $this->smarty->assign("data",$data);
        $this->smarty->assign("type",$type);
        $this->smarty->display("index/commodity.html");
    }
    function showcommodity(){
        $data=$this->commodityModel->getallcommodity();
        $this->smarty->assign("cid",1);
        $this->smarty->assign("data",$data);
        $this->smarty->display("index/commodity.html");
    }
    function showcategory(){
        $cid=$_GET["cid"];
        $cats = $this->categoryModel->getallcommodity();
        $types = $this->categoryModel->types($cid);
        $this->smarty->assign("cid",$cid);
        $this->smarty->assign("types", $types);
        $this->smarty->assign("cats", $cats);
        $this->smarty->display("index/category.html");
    }
    function getcommodity(){
        $id=$_GET["id"];
        $type=$this->commodityModel->type($id);
        echo json_encode($type);
    }
    function showlist(){
        $data=$this->commodityModel->getgoods();
        $this->smarty->assign("data",$data);
        $this->smarty->assign("tid",$_GET["tid"]);
        $this->smarty->display("index/showlist.html");
    }
    function getgoodprice(){
        echo 1;
        $data=$this->commodityModel->getgoods("order by gprice");
        echo json_encode($data);
    }

    function getorderlist()
    {
        $data = $this->commodityModel->getgoods();
        echo json_encode($data);
    }

    function getnewlist()
    {
        $data = $this->commodityModel->getgoods("order by gid desc");
        echo json_encode($data);
    }

    function showcontent()
    {
        $data = $this->commodityModel->getcontent();
        $imgstr = $data['gpicture'];
        $imgarray = explode(";", $imgstr);
        $data["gpicture"] = $imgarray;
        $this->smarty->assign("data", $data);
        $this->smarty->display("index/content.html");
    }
}