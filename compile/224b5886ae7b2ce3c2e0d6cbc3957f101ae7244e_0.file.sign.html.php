<?php
/* Smarty version 3.1.30, created on 2018-04-27 11:38:14
  from "D:\wamp\www\MVC\app\views\index\sign.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2ef86691fd8_96981198',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '224b5886ae7b2ce3c2e0d6cbc3957f101ae7244e' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\sign.html',
      1 => 1524821892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/notice.html' => 1,
  ),
),false)) {
function content_5ae2ef86691fd8_96981198 (Smarty_Internal_Template $_smarty_tpl) {
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
    <span onclick="history.back()"> &lt; </span>
    <p>注册</p>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="index.php?m=index&c=personal&a=checksign" class="login" id="login" method="post">
    <input type="text" class="phone" placeholder="请输入手机号" name="phone">
    <input type="text" class="code" placeholder="请输入验证码" name="code">
    <div class="codes">获取验证码</div>
    <input type="password" class="password" placeholder="请输入密码" name="password">
    <!--<input type="hidden" id="error" value="">-->
    <div id="error" style="padding: 0.2rem;text-align: center;color: red;margin-top: 0.2rem"></div>
    <input type="radio" class="choose">
    <b>同意用户协议</b>
    <input type="submit" value="注册" class="sign" >
    <span>已有账号？去 <a href="index.php?m=index&c=personal">登录</a></span>

</form>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
getcode.js"><?php echo '</script'; ?>
>


</body>
</html><?php }
}
