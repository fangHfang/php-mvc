<?php
/* Smarty version 3.1.30, created on 2018-04-25 10:40:16
  from "D:\wamp\www\MVC\app\views\index\member.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae03ef0bb3363_51737309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bed930c993aa625dff24bd1c436baa12acc316e9' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\member.html',
      1 => 1524645608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae03ef0bb3363_51737309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>会员</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/member.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="head">
    <img src="<?php echo IMG_PATH;?>
/4_02.png" alt="">
</div>
<div class="login">
    <div class="login1">
        <p><a href="index.php?m=index&c=member&a=login">马上登录</a></p>
    </div>
    <div class="login2">
        <p><a href="zhuce.html">立即注册</a></p>
    </div>
</div>
<!-- footer部分 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
