<?php
class index extends indexcontroller {
    public function __construct()
    {
        parent::__construct();
        $this->indexModel=new indexModel();
        $this->smarty->assign("t","1");
    }
    function init(){
        $data=$this->indexModel->getcats();
        $typedata=$this->indexModel->gettype();
        $goodsdata=$this->indexModel->getgoods();
        foreach ($goodsdata as $k=>$v){
            $imgstr=$v['gpicture'];
            $imgarray=explode(";",$imgstr);
            $imgarray=array_slice($imgarray,0,3);
            $goodsdata[$k]["gpicture"]=$imgarray;
        }
        $this->smarty->assign("data",$data);
        $this->smarty->assign("typedata",$typedata);
        $this->smarty->assign("goodsdata",$goodsdata);
        $this->smarty->display("index/index.html");
    }

}