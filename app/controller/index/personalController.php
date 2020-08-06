<?php

class personal extends indexcontroller
{
    function __construct()
    {
        parent::__construct();
        $this->smarty->assign("t", "5");
        $this->personalModel = new personalModel();
    }

    function init()
    {
        $this->check();
        $phone = $this->session->get("phone");
        $pic = $this->personalModel->getthumb($phone);
        $this->smarty->assign("picture", $pic);
        $this->smarty->assign("phone", "$phone");
        $this->smarty->display("index/personal.html");
    }

    function sign()
    {
        $this->smarty->display("index/sign.html");
    }

    function checkphone()
    {
        $uphone = $_GET["phone"];
        $yanZhengnum = $this->GetRandStr(4);
        //初始化必填
        $options['accountsid'] = '442c51c4d2a95aededa6f12a23b26fe4';
        $options['token'] = '887b72f88fc33eacb1b3ad92daa2fd4f';
        $ucpass = new Ucpaas($options);
        $ucpass->getDevinfo('json');
        $to = $uphone;
        $templateId = "191761";
        $param = $yanZhengnum;
        $this->session->set("yzm", $yanZhengnum);
        $appId = "e771411626af47b381a704c419e23b16";
        $ucpass->templateSMS($appId, $to, $templateId, $param);
    }

    function GetRandStr($len)
    {
        $chars = array(
            "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9"
        );
        $charsLen = count($chars) - 1;
        shuffle($chars);
        $output = "";
        for ($i = 0; $i < $len; $i++) {
            $output .= $chars[mt_rand(0, $charsLen)];
        }
        return $output;
    }

    function checksign()
    {
        $phone = $_POST["phone"];
        $password = md5($_POST["password"]);
        $code = $_POST["code"];
//        $this->session->get('yzm')
        if ($code == "1234") {
            $r = $this->personalModel->adduser($phone, $password);
            if ($r == 1) {
                $this->session->set("phone", $phone);
                $this->session->set("password", $password);
                $this->smarty->display("index/login.html");
            } else {
                $this->smarty->assign("notice", "注册失败");
                $this->smarty->display("index/sign.html");
            }
        } else {
            $this->smarty->assign("notice", "验证码不正确");
            $this->smarty->display("index/sign.html");
        }
    }

    function checkrepeat()
    {
        $r = $this->personalModel->checkperonal();
        if (empty($r)) {
            echo "ture";
        } else {
            echo "false";
        }
    }

    function login()
    {
        $r = $this->personalModel->checklogin();
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        if (empty($r)) {
            $this->smarty->assign("notice", "用户名不存在");
            $this->smarty->display("index/login.html");
        } else {
            if (md5($password) == $r['password']) {
                $this->session->set("phone", $phone);
                $this->smarty->assign("phone", $phone);
                $pic = $this->personalModel->getthumb($phone);
                $this->smarty->assign("picture", $pic);
                $this->smarty->display("index/personal.html");
            } else {
                $this->smarty->assign("notice", "密码错误");
                $this->smarty->display("index/login.html");
            }
        }
    }

    function autologin()
    {
        $phone = $_GET["phone"];
        $this->session->set("phone", $phone);
        $this->smarty->assign("phone", "$phone");
        $pic = $this->personalModel->getthumb($phone);
        $this->smarty->assign("picture", $pic);
        $this->smarty->display("index/personal.html");
    }

    function logout()
    {
        $this->session->del("phone");
        $this->smarty->display("index/login.html");
    }

    function setting()
    {
        $phone = $this->session->get("phone");
        $data = $this->personalModel->setting($phone);
        $this->smarty->assign("data", $data);
        $this->smarty->display("index/user.html");
    }

    function update()
    {
        $phone = $this->session->get("phone");
        $data = $this->personalModel->setting($phone);
        $this->smarty->assign("data", $data);
        $this->smarty->display("index/update.html");
    }

    function checkupdate()
    {
        $r = $this->personalModel->update();
        if ($r == 1) {
            $this->setting();
        } else {
            $this->update();
        }
    }
}