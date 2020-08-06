<?php
/* Smarty version 3.1.30, created on 2018-05-02 12:21:42
  from "D:\wamp\www\MVC\app\views\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae991367594b2_75437343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16802c32f6adaeefd56f1110593c9ee82cef5b3c' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\index.html',
      1 => 1525256498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae991367594b2_75437343 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport"
          content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>零食铺</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
public.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
rem.js"><?php echo '</script'; ?>
>
    <link rel="icon" href="images/logo.png" type="images/x-icon">
</head>
<body>
<!-- head部分 -->
<div class="head">
    <dic class="head1">
        <span>&#xe655;</span>
    </dic>
    <dic class="head2">
        <img src="<?php echo IMG_PATH;?>
/Screenshot_2018-02-24-14-12-26-95_04.png" alt="">
    </dic>
    <dic class="head3">
        <span>&#xe627;</span>
    </dic>
</div>

<!-- banner部分 -->
<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
banner1.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
banner2.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
banner3.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
banner4.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="<?php echo IMG_PATH;?>
banner5.png" alt="">
            </div>
        </div>
    </div>
    <!-- 如果需要分页器 -->
    <!--<div class="swiper-pagination"></div>-->
</div>

<!-- tit部分 -->
<div class="tit">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <a href="index.php?m=index&c=commodity&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="tit2">
        <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['cthumb'];?>
" alt="">
        <span><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</span>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>

<!-- 内容 -->
<div class="content">
    <div class="content1">
        <div class="content2">
            <p>&#xe668;</p>
        </div>
        <div class="content3">
            <p>店铺头条</p>
        </div>
        <div class="content4">
            <div class="content5"></div>
            <p>爽食莆APP上线了</p>
        </div>
    </div>
    <div class="content_down">
        <img src="<?php echo IMG_PATH;?>
/75-02_02.png" alt="">
    </div>
</div>

<!-- 种类特色 -->
<div class="main">
    <div class="main_up">
        <div class="main_tit">
            <div class="main_tit_box">
                <img src="<?php echo IMG_PATH;?>
/Screenshot_2018-02-24-14-12-51-75_03.png" alt="">
            </div>
            <div class="main_tit_box1">
                <p>海鲜干货</p>
            </div>
            <div class="main_tit_box2">
                <p>更多</p>
            </div>
        </div>
    </div>
    <div class="main_down">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typedata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="main_down1">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="">
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </div>
</div>

<!-- 热卖商品 -->
<div class="hot">
    <div class="main_up">
        <div class="main_tit">
            <div class="main_tit_box">
                <img src="<?php echo IMG_PATH;?>
/Screenshot_2018-02-24-14-12-51-75_03.png" alt="">
            </div>
            <div class="main_tit_box1">
                <p>特色小吃</p>
            </div>
            <div class="main_tit_box2">
                <p>更多</p>
            </div>
        </div>
    </div>
    <div class="hot_down">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goodsdata']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="hot_down_img">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt="">
            <p><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescrip'];?>
&nbsp;（10斤）</p>
            <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</h1>
            <div class="hot_down_img1">
                <span>&#xe618;</span>
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>

<div class="footer0"></div>

<!-- footer部分 -->
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    var mySwiper = new Swiper ('.swiper-container', {
        direction: 'horizontal',
        speed:300,
        autoplay: true,
    });
<?php echo '</script'; ?>
><?php }
}
