<?php
class login extends controller {
    function __construct()
    {
        parent::__construct();
        $this->loginModel=new loginModel();
    }
    function login(){
        $this->smarty->assign("title","登录");
        $this->smarty->display("admin/login.html");
    }
    function code(){
        $code=new code;
        $code->output();
    }
    function checklogin(){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $code=$_POST["code"];
        $sessioncode=$this->session->get("code");
        if(strtoupper($code)!==$sessioncode){
            $msg="验证码错误。";
            $href="index.php?m=admin&c=login&a=login";
            $this->climb($msg,$href);
        }
        $arr=$this->loginModel->getAdmin();
        if($arr["username"]===$username){
            if($arr["password"]===$password){
                $this->session->set("user",$password);
                $msg="登录成功。";
                $href="index.php?m=admin";
                $this->climb($msg,$href);
            }else{
                $msg="密码错误。";
                $href="index.php?m=admin&c=login&a=login";
                $this->climb($msg,$href);
            }
        }else{
            $msg="用户名错误。";
            $href="index.php?m=admin&c=login&a=login";
            $this->climb($msg,$href);
        }
    }
    function logout(){
        $this->session->del("user");
        if($this->session->get("user")){
            $msg="退出失败。";
            $href="index.php?m=admin";
            $this->climb($msg,$href);
        }else{
            $msg="退出成功。";
            $href="index.php?m=admin&c=login&a=login";
        }
        $this->climb($msg,$href);
    }
    function changepass(){
        $name=$this->loginModel->getAdmin()["username"];
        $this->smarty->assign("username",$name);
        $this->smarty->display("admin/pass.html");

    }
    function checkpass(){
        $mpass=$_POST["mpass"];
        $pass=$this->loginModel->getAdmin()["password"];
        if($pass!==$mpass){
            $msg="密码错误。";
            $href="index.php?m=admin&c=login&a=changepass";
            $this->climb($msg,$href);
            exit();
        }
        $newpass=$_POST["newpass"];
        $r=$this->loginModel->updatepass($newpass);
        if($r){
            $msg="修改成功。";
            $href="index.php?m=admin&c=login&a=changepass";
        }else{
            $msg="修改失败。";
            $href="index.php?m=admin&c=login&a=changepass";
        }
        $this->climb($msg,$href);
    }
}