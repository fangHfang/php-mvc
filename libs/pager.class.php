<?php

class pager
{
    public $total = "";//总的条数
    public $num = "";//每一页的条数
    public $pagenum = "";//总的页数
    public $page = "";// 当前是第几页
    public $limit = "";//最终得到的一个条件
    public $str = "";// 最终得到的一个布局

    function __construct($total, $num)
    {
        $this->pagenum = ceil($total / $num);
        $this->num = $num;
        $this->total = $total;
    }

    function output()
    {

        $page = isset($_GET["p"]) ? $_GET["p"] : 0;
        $start = $page * ($this->num);
        $this->limit = "limit $start,$this->num";


        $str = '';
        if (isset($_GET["p"])) {
            $url = "//" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
            $url = substr($url, 0, strrpos($url, "=") + 1);
        } else {
            $url = "//" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"] . "&p=";
        }

        $prev=$page==0?0:$page-1;
        $str.="<a href='{$url}{$prev}'>上一页</a>";
        $start=$page-2<0?0:$page-2;
        $end=$page+2>$this->pagenum-1?$this->pagenum-1:$page+2;
        for ($i = $start; $i <=$end; $i++) {
            $n = $i + 1;
            if ($i == $page) {
                $str .= "<span class='current'>{$n}</span>";
            } else {
                $str .= "<a href='{$url}{$i}'>{$n}</a>";
            }
        }
        $next=$page==$this->pagenum-1?$page:$page+1;
        $str.="<a href='{$url}{$next}'>下一页</a>";
        $last=$this->pagenum-1;
        $str.="<a href='{$url}{$last}'>尾页</a>";
        $this->str = $str;
    }
}