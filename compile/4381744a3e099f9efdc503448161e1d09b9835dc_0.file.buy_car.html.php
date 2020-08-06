<?php
/* Smarty version 3.1.30, created on 2018-04-25 02:47:55
  from "D:\wamp\www\MVC\app\views\index\buy_car.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adfd03b49b049_36099157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4381744a3e099f9efdc503448161e1d09b9835dc' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\buy_car.html',
      1 => 1524617260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adfd03b49b049_36099157 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/buy_car.css">
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
    <b>购物车</b>
</div>
<div class="content">
    <div class="cont_name">
        <input type="radio" class="choose">
        <span>食不厌小店&nbsp;></span>
        <em>领券</em>
    </div>
    <div class="cont_main">
        <input type="radio" class="choose">
        <img src="<?php echo IMG_PATH;?>
/case1.jpg" alt="">
        <div class="img_decs">
            <div class="desc_span">
                <p>是的方法和热一个方法和我IE阿UR恶化股份女方家</p>
            </div>
            <div class="desc_em">
                <p>就是这款很繁荣路if爱哦服务</p>
            </div>
            <i>￥198</i>
        </div>
    </div>
</div>


<!-- footer部分 -->
<div class="footer0"></div>

<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
