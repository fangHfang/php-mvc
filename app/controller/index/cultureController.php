<?php
class culture extends indexcontroller {
    public function __construct()
    {
        parent::__construct();
        $this->smarty->assign("t","2");
    }
    function init(){
        $this->smarty->display("index/culture.html");
    }
}