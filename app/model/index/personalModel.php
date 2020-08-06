<?php

class personalModel
{
    function __construct()
    {
    }

    function checkperonal()
    {
        $phone = $_GET["phone"];
        $db = new db("user");
        $r = $db->seleteONE("phone=$phone");
        $db->close();
        return $r;
    }

    function adduser($phone,$passwod)
    {
        $phone = $_POST["phone"];
        $password=md5($_POST["password"]);
        $db = new db("user");
        $r = $db->insert(["phone"=>$phone,"password"=>$password]);
        $db->close();
        return $r;
    }

    function checklogin(){
        $phone=$_POST["phone"];
        $db=new db("user");
        $r=$db->seleteONE("phone=$phone");
        return $r;
    }

    function getthumb($phone){
        $db=new db("user");
        $data=$db->seleteONE("phone=$phone","picture");
        $db->close();
        return $data;
    }
    function setting($phone){
        $db=new db("user");
        $arr=$db->seleteONE("phone=$phone");
        $db->close();
        return $arr;
    }
    function updatae(){
        $db=new db("user");
        $picture=$_POST["picture"];
        $username=$_POST["username"];
        $phone=$_POST["phone"];
        $sex=$_POST["sex"];
        $r=$db->update("picture='{$picture}',username='{$username}',sex='{$sex}'","phone=$phone");
        $db->close();
        return $r;
    }
}