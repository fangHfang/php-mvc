<?php
class session{
    public function __construct(){
        session_start();
    }
    function set($k,$v){
        $_SESSION[$k]=$v;
    }
    function get($k){
        if(isset($_SESSION[$k])){
            return $_SESSION[$k];
        }else{
            return false;
        }
    }
    function del($k){
        if(isset($_SESSION[$k])){
            unset($_SESSION[$k]);
        }
    }
    function clear(){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
    }
}

//$s=new session();
//$s->set("name","hangsan");
//?>