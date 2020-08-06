<?php
class typeModel{
    function __construct()
    {
        $this->db=new db("type");
    }
    function gettype($limit){
//        $arr=$this->db->seleteALL("*","1 $limit");
        $this->db->table="type,category";
        $arr=$this->db->seleteALL("*","type.cid=category.cid $limit");
        $this->db->close();
        return $arr;
    }
    function gettypenum(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];
    }
    function deltype($id){
        $r=$this->db->delete("tid=$id");
        $this->db->close();
        return $r;
    }

    function inserttype(){
        $tname=$_POST["tname"];
        $thumb=$_POST["thumb"];
        $cid=$_POST["cid"];
        $r=$this->db->insert(["tname"=>$tname,"thumb"=>$thumb,"cid"=>$cid]);
        $this->db->close();
        return $r;
    }
    function getsometype(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("tid=$id");
        $this->db->close();
        return $arr;
    }
    function updatetype(){
        $tid=$_POST["tid"];
        $tname=$_POST["tname"];
        $thumb=$_POST["thumb"];
        $cid=$_POST["cid"];
        $r=$this->db->update("tname='{$tname}',thumb='{$thumb}',cid='{$cid}'","tid=$tid");
        $this->db->close();
        return $r;
    }
}