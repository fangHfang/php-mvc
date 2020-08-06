<?php
//header("Content-type:text/html;charst")
//定义常量    路径分隔符
define("DS",DIRECTORY_SEPARATOR);
//定义文件根目录
define("ROOT",__DIR__.DS);
//定义核心类的根目录
define("LIBS_PATH",ROOT."libs".DS);
//编译文件放置目录
define("COMPILE_PATH",ROOT."compile".DS);
//应用文件根目录
define("APP_PATH",ROOT."app".DS);

define("MODEL_PATH",APP_PATH."model".DS);
define("VIEWS_PATH",APP_PATH."views".DS);
define("CONTROLLER_PATH",APP_PATH."controller".DS);

//定义当前的网站根目录   //表示遵从浏览器规则
define("WEB_PATH","//".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")+1));
//定义上传目录
define("UPLOAD_PATH",ROOT."upload".DS);
//定义当前的静态文件根目录
define("CSS_PATH",WEB_PATH."static/css/");
define("JS_PATH",WEB_PATH."static/js/");
define("IMG_PATH",WEB_PATH."static/images/");
define("FONT_PATH",ROOT.DS."static".DS."font".DS);

//引入核心类
include LIBS_PATH."db.class.php";
include LIBS_PATH."session.class.php";
include LIBS_PATH."router.class.php";
include LIBS_PATH."code.class.php";
include LIBS_PATH."controller.class.php";
include LIBS_PATH."pager.class.php";
include LIBS_PATH."upload.class.php";
include LIBS_PATH . "indexcontroller.class.php";
include LIBS_PATH."smarty".DS."libs".DS."Smarty.class.php";

$router=new router();
$router->jump();

