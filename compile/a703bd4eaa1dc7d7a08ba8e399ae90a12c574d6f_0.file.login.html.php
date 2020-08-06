<?php
/* Smarty version 3.1.30, created on 2018-04-27 11:06:34
  from "D:\wamp\www\MVC\app\views\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2e81a763983_78115736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a703bd4eaa1dc7d7a08ba8e399ae90a12c574d6f' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\login.html',
      1 => 1524819992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae2e81a763983_78115736 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/login.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <link rel="icon" href="<?php echo IMG_PATH;?>
/logo.png" type="images/x-icon">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="head">
    <span onclick="history.back()">&lt;</a></span>
    <p>登录</p>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php?m=index&c=personal&a=login" class="login" method="post" id="login">
    <span>手机</span><input type="text" class="phone" name="phone" placeholder="请输入手机号">
    <span><br></br>密码</span><input type="password" class="password" name="password" placeholder="请输入密码">
    <style>
        #error{
            color: red;
            padding:0.5rem;
            text-align: center;
        }
    </style>
    <div id="error"></div>
    <input type="submit" class="denglu" value="登录">
    <em><a href="index.php?m=index&c=personal&a=sign">快速注册</a> </em>
    <em><a href="">找回密码</a> </em>
</form>
<?php echo '<script'; ?>
>
    let phone = localStorage.phone ? localStorage.phone : "";
    if (phone !== "") {
        location.href = "index.php?m=index&c=personal&a=autologin&phone=" + phone;
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $("#login").validate({
        rules:{
            phone:{
                required:true
            },
            password:{
                required:true
            }
        },
        messages:{
            phone:{
                required:"手机号不能为空"
            },
            password:{
                required:"密码不能为空"
            }
        },
        errorPlacement:function(error,input){
            $("#error").append(error);
        }
    });

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
