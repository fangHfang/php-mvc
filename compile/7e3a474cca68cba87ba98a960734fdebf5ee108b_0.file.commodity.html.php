<?php
/* Smarty version 3.1.30, created on 2018-05-02 12:45:33
  from "D:\wamp\www\MVC\app\views\index\commodity.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae996cdcd96f4_94506994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e3a474cca68cba87ba98a960734fdebf5ee108b' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\commodity.html',
      1 => 1525257932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae996cdcd96f4_94506994 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>所有商品</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/commodity.css">
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
<div class="cont">
    <div class="cont_type">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['v']->value['cid']) {?>
        <p style="color: #66a5ec" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><a href="index.php?m=index&c=commodity&a=types&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"></a><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
        <?php } else { ?>
        <p data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</p>
        <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="cont_main">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['type']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <a href="index.php?m=index&c=commodity&a=showlist&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
" class="hot_down_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
&nbsp;（10斤）</p>
            <em>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['tprice'];?>
</em>
            <div class="hot_down_img1">
                <span></span>
            </div>
        </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>


<div class="footer0"></div>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/gettype.js"><?php echo '</script'; ?>
>
<?php }
}
