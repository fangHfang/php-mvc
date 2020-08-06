<?php
/* Smarty version 3.1.30, created on 2018-04-27 10:18:00
  from "D:\wamp\www\MVC\app\views\index\user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2dcb8942133_20288630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48537f9b20d52d3f2669b803943783e130e2158b' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\user.html',
      1 => 1524817077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2dcb8942133_20288630 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
user.css">
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
<div class="back">
    <a onclick="history.back()"> ←</a>
    <a>个人资料</a>
    <a href="index.php?m=index&c=personal&a=update">编辑</a>
</div>
<form action="index.php?m=index&c=personal&a=logout">
    <div class="thumb">
        <img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture'];?>
" alt="" class="timg">
    </div>
    <div class="member">
        <label for="name">会员名</label>
        <input type="text" id="name" class="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['username'];?>
">
    </div>
    <div class="member">
        <label for="sex">性别</label>
        <input type="text" id="sex" class="sex" name="sex" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['sex'];?>
">
    </div>

    <div class="member">
        <label for="phone">手机号</label>
        <input type="text" id="phone" class="tname" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
">
    </div>
    <input type="button" class="achieve" value="退出登录">
</form>
<?php echo '<script'; ?>
>
    let logout=document.querySelector(".achieve");
    logout.onclick=function(){
        localStorage.removeItem("phone");
        location.href="index.php?m=index&c=personal&a=logout";
    }

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
