<?php
class indexModel {
    function __construct()
    {
    }
    function getcats(){
        $catdb=new db("category");
        $data=$catdb->seleteALL("*","1 order by corder limit 0,8");
        $catdb->close();
        return $data;
    }
    function gettype(){
        $typedb=new db("type");
        $arr=$typedb->seleteALL("*","1 limit 0,6");
        $typedb->close();
        return $arr;
    }
    function getgoods(){
        $goodsdb=new db("goods");
        $arr=$goodsdb->seleteALL("*","1");
        $goodsdb->close();
        return $arr;
    }

}