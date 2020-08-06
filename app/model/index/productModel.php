<?php
class productModel{
    function __construct()
    {
    }
    function getproduct(){
        $catdb=new db("goods");
        $data=$catdb->seleteALL("*","1");
        $catdb->close();
        return $data;
    }
}