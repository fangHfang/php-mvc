<?php
class product extends indexcontroller{
    function __construct()
    {
        parent::check();
        $this->productModel=new productModel();
    }
    function product(){
        $this->productModel->getproduct();
        $this->smarty->display("index/product.html");
    }
}