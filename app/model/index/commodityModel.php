<?php
class commodityModel{
    function __construct()
    {
    }
    function getallcommodity(){
        $goodsdb=new db("category");
        $data=$goodsdb->seleteALL("*","1");
        $goodsdb->close();
        return $data;
    }
    function type($id=1){
        $goodsdb=new db("type");
        $arr=$goodsdb->seleteALL("*","cid=$id");
        $goodsdb->close();
        return $arr;
    }
    function getgoods($order="order by gorder"){
        $tid=$_GET["id"];
        $goodsdb=new db("goods");
        $arr=$goodsdb->seleteALL("*","tid=$tid $order");
        $goodsdb->close();
        return $arr;
    }
    function getcontent(){
        $gid=$_GET["gid"];
        $db=new db("goods");
        $data=$db->selectONE("gid=$gid");
        $db->close();
        return $data;
    }
}