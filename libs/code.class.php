<?php
class code{
    public $width=100;
    public $height=32;
    public $image="";
    function __construct()
    {
        $this->image=imagecreatetruecolor($this->width,$this->height);
    }
    function getcolor($type="l"){
        if($type==="l"){
            return imagecolorallocate($this->image,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
        }else{
            return imagecolorallocate($this->image,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
        }
    }
    function fill(){
        imagefill($this->image,0,0,$this->getcolor());
    }
    function line(){
        for($i=0;$i<10;$i++){
            imageline($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }
    function pixel(){
        for($i=0;$i<100;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor());
        }
    }
    function word(){
        $str="qwertyupasdfghjklmnbvcxzQWERTYUPASDFGHJKLMNBVCXZ23456789";
        $code="";
        $len=strlen($str);
        for($i=0;$i<4;$i++){
            $pos=mt_rand(0,$len-1);
            $charcter=substr($str,$pos,1);
            $code.=strtoupper($charcter);
            imagettftext($this->image,mt_rand(20,25),mt_rand(-15,15),$i*25+mt_rand(0,10),mt_rand(25,32),$this->getcolor("d"),FONT_PATH."fontfile.TTF",$charcter);
        }
        $_SESSION["code"]=$code;
    }
    function output(){
        $this->fill();
        $this->line();
        $this->pixel();
        $this->word();
        header("Content-type:image/png");
        imagepng($this->image);
        imagedestroy($this->image);
    }
}