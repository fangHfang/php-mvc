<?php
class router{
    public $m = "";//前台还是后台
    public $c = "";//当前要引入那个文件以及实例化哪个类
    public $a = "";//调用这个类当中的什么方法

    function __construct()
    {
    }

    function jump()
    {
        $this->m = isset($_GET["m"]) ? $_GET["m"] : "index";
        $this->c = isset($_GET["c"]) ? $_GET["c"] : "index";
        $this->a = isset($_GET["a"]) ? $_GET["a"] : "init";

        $filename = CONTROLLER_PATH . $this->m . DS . $this->c . "Controller.php";
        $modelepath = MODEL_PATH . $this->m . DS . $this->c . "Model.php";

        if(is_file($modelepath)){
            include $modelepath;
        }

        if (is_file($filename)) {
            include $filename;
            if (class_exists($this->c)) {
                $classname = $this->c;
                $obj = new $classname();
                if (method_exists($obj,$this->a)) {
                    $method = $this->a;
                    $obj->$method();
                } else {
                    echo "方法不存在";
                    include ROOT."404.html";
                }
            } else {
                echo "类不存在";
                include ROOT."404.html";
            }
        } else {
            echo "文件不存在";
            include ROOT."404.html";
        }
    }
}
