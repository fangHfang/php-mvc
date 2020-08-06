<?php
/* Smarty version 3.1.30, created on 2018-04-25 16:39:50
  from "D:\wamp\www\MVC\app\views\index\showlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae093369a4799_85671915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0973011cfb209c8bc0cccf574994d8736a8f558e' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\showlist.html',
      1 => 1524667008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae093369a4799_85671915 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>所有商品</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/showlist.css">
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
    <div class="head0" onclick="history.back();">
        <p> < </p>
    </div>
    <div class="head1">
        <p>所有商品</p>
    </div>
    <div class="head2">
        <p>&#xe627;</p>
    </div>
</div>
<div class="tit" id="<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
">
    <div class="tit1">
        <p class="tit2">&#xe6e2;</p>
        <div class="tit3">
            <span>分类</span>
        </div>
    </div>

    <div class="tit1">
        <div class="tit2">
            <p class="tit21">&#xe730;</p>
            <p class="tit21">&#xe649;</p>
        </div>
        <span class="tit3">新品</span>
    </div>
    <div class="tit1 price">
        <div class="tit2">
            <p class="tit21">&#xe730;</p>
            <p class="tit21">&#xe649;</p>
        </div>
        <span class="tit3">价格</span>
    </div>
    <div class="tit1">
        <div class="tit2">
            <p class="tit21">&#xe730;</p>
            <p class="tit21">&#xe649;</p>
        </div>
        <span class="tit3">销量</span>
    </div>
    <div class="tit1 tit0">
        <span>&#xe630;</span>
    </div>
</div>

<div class="hot_down">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="index.php?m=index&c=product&a=product&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
" class="hot_down_img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
        <p><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescrip'];?>
&nbsp;（10斤）</p>
        <h1>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</h1>
        <div class="hot_down_img1">
            <span>&#xe618;</span>
        </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<div class="footer0"></div>

<!-- footer部分 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/getgoods.js"><?php echo '</script'; ?>
><?php }
}
