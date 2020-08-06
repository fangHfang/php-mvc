<?php
/* Smarty version 3.1.30, created on 2018-04-27 11:51:06
  from "D:\wamp\www\MVC\app\views\index\update.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae2f28a32f4a4_58335482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c221ebe8b63c826eee976129d18a2c033d92a9b0' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\update.html',
      1 => 1524822665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae2f28a32f4a4_58335482 (Smarty_Internal_Template $_smarty_tpl) {
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
    <a>编辑个人资料</a>
</div>
<form action="index.php?m=index&c=personal&a=update">
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
    <input type="submit" class="achieve" value="完成">
</form>
</body>
</html><?php }
}
