<?php
class userModel{
    function __construct()
    {
        $this->db=new db("user");
    }
    function getuser($limit){
        $arr=$this->db->seleteALL("*","1 $limit");
        $this->db->close();
        return $arr;
    }
    function getusernum(){
        $num=$this->db->seleteONE("1","count(*) as num");
        return $num["num"];

    }
    function deluser($id){
        $r=$this->db->delete("uid=$id");
        $this->db->close();
        return $r;
    }
    function insertuser(){
        $username=$_POST["username"];
        $password=md5($_POST["password"]);
        $picture=$_POST["picture"];
        $phone=$_POST["phone"];
        $sex=$_POST["sex"];
        $r=$this->db->insert(["username"=>$username,"password"=>$password,"picture"=>$picture,"phone"=>$phone,"sex"=>$sex]);
        $this->db->close();
        return $r;
    }
    function getsomeuser(){
        $id=$_GET["id"];
        $arr=$this->db->seleteONE("uid=$id");
        $this->db->close();
        return $arr;
    }
    function updateuser(){
        $uid=$_POST["uid"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $picture=$_POST["picture"];
        $phone=$_POST["phone"];
        $sex=$_POST["sex"];
        $r=$this->db->update("username='{$username}',password='{$password}',picture='{$picture}',phone='{$phone}',sex='{$sex}'","uid=$uid");
        $this->db->close();
        return $r;
    }
}