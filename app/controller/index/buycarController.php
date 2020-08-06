<?php
class buycar extends indexcontroller {
    public function __construct()
    {
        parent::__construct();
        $this->buycarModel=new buycarModel();
        $this->smarty->assign("t","4");
    }
    function init(){
//        $data=$this->indexModel->getcats();
//        $goodsdata=$this->indexModel->getgoods();
//        $this->smarty->assign("data",$data);
//        $this->smarty->assign("goodsdata",$goodsdata);
        $this->smarty->display("index/buy_car.html");
    }

}