<?php

class controller{
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir(COMPILE_PATH);
        $this->smarty->setTemplateDir(VIEWS_PATH);
        $this->session=new session();
    }
    function climb($msg,$href){
        $this->smarty->assign("msg",$msg);
        $this->smarty->assign("href",$href);
        $this->smarty->display("admin/message.html");
    }
    function check(){
        $user=$this->session->get("user");
        if($user){

        }else{
            $msg="尚未登录。";
            $href="index.html?m=admin&c=login&a=login";
            $this->climb($msg,$href);
            exit();
        }
    }
}