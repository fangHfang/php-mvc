<?php

class indexcontroller{
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir(COMPILE_PATH);
        $this->smarty->setTemplateDir(VIEWS_PATH);
        $this->session=new session();
    }
    function check(){
        if(!$this->session->get("phone")){
            $this->smarty->display("index/login.html");
            exit();
        }
    }
}