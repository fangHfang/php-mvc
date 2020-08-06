<?php
class categoryModel{
    function __construct()
    {
        $this->db=new db("category");
    }
    function getnum($limit){
        $arr=$this->db->seleteALL("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function getcategory(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];

    }
    function delcategory($id){
        $r=$this->db->delete("cid=$id");
        $this->db->close();
        return $r;
    }
    function insertcategory(){
        $cname=$_POST["cname"];
        $cthumb=$_POST["cthumb"];
        $r=$this->db->insert(["cname"=>$cname,"cthumb"=>$cthumb]);
        $this->db->close();
        return $r;
    }
    function getsomecategory(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("cid=$id");
        $this->db->close();
        return $arr;
    }
    function updatecategory(){
        $cid=$_POST["cid"];
        $cname=$_POST["cname"];
        $cthumb=$_POST["cthumb"];
        $r=$this->db->update("cname='{$cname}',cthumb='{$cthumb}'","cid=$cid");
        $this->db->close();
        return $r;
    }
}