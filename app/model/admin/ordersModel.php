<?php
class ordersModel{
    function __construct()
    {
        $this->db=new db("orders");
    }
    function getordersnum(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];
    }
    function getorders($limit){
    $this->db->table="orders";
    $arr=$this->db->seleteALL("*","1 $limit");
    $this->db->close();
    return $arr;
}
    function delorders($id){
        $r=$this->db->delete("oid=$id");
        $this->db->close();
        return $r;
    }
    function getalltype(){
        $this->db->table="type";
        $arr=$this->db->seleteALL("*");
        $this->db->close();
        return $arr;
    }

    function insertorders(){
        $gname=$_POST["gname"];
        $gprice=$_POST["gprice"];
        $gthumb=$_POST["gthumb"];
        $gpicture=$_POST["gpicture"];
        $gdescrip=$_POST["gdescrip"];
        $tid=$_POST["tid"];
        $grecommend=$_POST["grecommend"];
        $r=$this->db->insert(["gname"=>$gname,"gprice"=>$gprice,"gthumb"=>$gthumb,"gpicture"=>$gpicture,"gdescrip"=>$gdescrip,"grecommend"=>$grecommend,"tid"=>$tid]);
        $this->db->close();
        return $r;
    }
    function getsomeorders(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("oid=$id");
        $this->db->close();
        return $arr;
    }
    function updateorders(){
        $gid=$_POST["gid"];
        $gname=$_POST["gname"];
        $gprice=$_POST["gprice"];
        $gthumb=$_POST["gthumb"];
        $gpicture=$_POST["gpicture"];
        $gdescrip=$_POST["gdescrip"];
        $tid=$_POST["tid"];
        $grecommend=$_POST["grecommend"];
        $r=$this->db->update("gname='{$gname}',gprice='{$gprice}',gthumb='{$gthumb}',gpicture='{$gpicture}',gdescrip='{$gdescrip}',grecommend='{$grecommend}',tid='{$tid}'","gid=$gid");

        $this->db->close();
        return $r;
    }
}