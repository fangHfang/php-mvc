<?php
class addressModel{
    function __construct()
    {
        $this->db=new db("address");
    }
    function getnum(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];
    }
    function selectaddress($limit){
        $arr=$this->db->seleteALL("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function deladdress(){
        $id=$_GET["id"];
        $r=$this->db->delete("aid=$id");
        $this->db->close();
        return $r;
    }
    function insertaddress(){
        $username=$_POST["username"];
        $uid=$_POST["uid"];
        $province=$_POST["province"];
        $city=$_POST["city"];
        $area=$_POST["area"];
        $area=$province."-".$city."-".$area;
        $localtion=$_POST["localtion"];
        $phone=$_POST["phone"];
        $postcode=$_POST["postcode"];
        $r=$this->db->insert(["name"=>$username,"uid"=>$uid,"area"=>$area,"localtion"=>$localtion,"phone"=>$phone,"postcode"=>$postcode]);
        $this->db->close();
        return $r;
    }
    function getsomeaddress(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("aid=$id");
        $this->db->close();
        return $arr;
    }
    function updateaddress(){
        $username=$_POST["username"];
        $uid=$_POST["uid"];
        $aid=$_POST["aid"];
        $province=$_POST["province"];
        $city=$_POST["city"];
        $area=$_POST["area"];
        $area=$province."-".$city."-".$area;
        $localtion=$_POST["localtion"];
        $phone=$_POST["phone"];
        $postcode=$_POST["postcode"];
        $r=$this->db->update(["aid"=>$aid,"uid"=>$uid, "name"=>$username,"uid"=>$uid,"area"=>$area,"localtion"=>$localtion,"phone"=>$phone,"postcode"=>$postcode]);
        $this->db->close();
        return $r;
    }
}