<?php
/* Smarty version 3.1.30, created on 2018-04-25 17:05:40
  from "D:\wamp\www\MVC\app\views\index\sign.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae09944540925_97538938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4db318b6f29afe98ade37bb2fb7f99e7d0e08a3' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\sign.html',
      1 => 1524668526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae09944540925_97538938 (Smarty_Internal_Template $_smarty_tpl) {
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
zhuce.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
public.css">
    <link rel="icon" href="<?php echo IMG_PATH;?>
logo.png" type="images/x-icon">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="head">
    <span><a href="member.html">&lt;</a></span>
    <p>注册</p>
</div>
<div class="login">
    <input type="text" class="phone" placeholder="请输入手机号">
    <input type="text" class="code" placeholder="请输入验证码">
    <input type="text" class="codes" value="获取验证码">
    <input type="text" class="password" placeholder="请输入密码">
    <em>√ </em>
    <b>同意用户协议</b>
    <p>注册</p>
    <span>已有账号？去 <a href="index.php?m=index&c=login">登录</a></span>

</div>
</body>
</html><?php }
}
