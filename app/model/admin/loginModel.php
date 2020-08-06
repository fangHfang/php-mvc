<?php
class loginModel{
    function __construct(){
        $this->db=new db("admin");
    }
    function getAdmin(){
        $arr=$this->db->seleteONE("1");
        return $arr;
    }
    function updatepass($password){
        $r=$this->db->update("password=$password",1);
        return $r;
    }
}