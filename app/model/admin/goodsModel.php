<?php
class goodsModel{
    function __construct()
    {
        $this->db=new db("goods");
    }
    function getgoods($limit){
        $this->db->table="goods,type";
        $arr=$this->db->seleteALL("*","goods.tid=type.tid $limit");
        $this->db->close();
        return $arr;
    }
    function getgoodsnum(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];
    }
    function delgoods($id){
        $r=$this->db->delete("gid=$id");
        $this->db->close();
        return $r;
    }

    function getalltype(){
        $this->db->table="type";
        $arr=$this->db->seleteALL("*");
        $this->db->close();
        return $arr;
    }

    function insertgoods(){
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
    function getsomegoods(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("gid=$id");
        $this->db->close();
        return $arr;
    }
    function updategoods(){
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