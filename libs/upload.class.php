<?php
class upload{
    function __construct()
    {

    }
    function upload($file){
        $uploadfile=$_FILES[$file];
        if(!is_dir(UPLOAD_PATH.date('Y-m-d'))){
            mkdir(UPLOAD_PATH.date('Y-m-d'));
        }
        $arr=explode(".",$uploadfile["name"]);
        $ext=array_pop($arr);
        $filename=md5(time()+mt_rand(0,1000)).".".$ext;
        if(is_uploaded_file($uploadfile["tmp_name"])){
            move_uploaded_file($uploadfile["tmp_name"],UPLOAD_PATH.date('Y-m-d').DS.$filename);
        }
        $path=WEB_PATH."upload/".date('Y-m-d')."/".$filename;
        echo $path;
    }
}