<?php
/* Smarty version 3.1.30, created on 2018-05-02 06:12:18
  from "D:\wamp\www\MVC\app\views\index\personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae93aa2031b43_88272207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c1335cad6cf066482b4a765d59820672fa7f8b7' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\personal.html',
      1 => 1525234336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5ae93aa2031b43_88272207 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>个人中心</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
person.css">
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
    <div class="head0">
        <span class="head1">&#xe600;</span>
        <span class="head2">&#xe635;</span>
    </div>
    <div class="head3">
        <a href="index.php?m=index&c=personal&a=setting">
            <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value['picture'];?>
" alt="">
        </a>
        <span><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span>
        <em>海草海草</em>
    </div>
    <div class="tit">
        <div class="">
            <em>&#xe609;</em>
            <span><br>待付款</span>
        </div>
        <div class="">
            <em>&#xe604;</em>
            <span><br>待收货</span>
        </div>
        <div class="">
            <em>&#xe63d;</em>
            <span><br>待评价</span>
        </div>
        <div class="">
            <em>&#xe64c;</em>
            <span><br>售后</span>
        </div>
        <div class="">
            <em>&#xe6dd;</em>
            <span><br>全部订单</span>
        </div>
    </div>
</div>

<!-- 热卖商品 -->
<div class="hot">
    <div class="main_up">
        <div class="main_tit">
            <div class="main_tit_box">
                <img src="images/Screenshot_2018-02-24-14-12-51-75_03.png" alt="">
            </div>
            <div class="main_tit_box1">
                <p>猜你喜欢</p>
            </div>
            <div class="main_tit_box2">
                <p>更多</p>
            </div>
        </div>
    </div>
    <div class="hot_down">
        <div class="hot_down_img">
            <img src="images/Screenshot_2018-02-24-14-12-51-75_07.png" alt="">
            <p>爽食莆仙斋—芡实&nbsp;（10斤）</p>
            <h1>700.00元</h1>
            <div class="hot_down_img1">
                <span>&#xe618;</span>
            </div>
        </div>
        <div class="hot_down_img">
            <img src="images/7_20.png" alt="">
            <p>爽食莆仙斋—芡实&nbsp;（10斤）</p>
            <h1>700.00元</h1>
            <div class="hot_down_img1">
                <span>&#xe618;</span>
            </div>
        </div>
    </div>
</div>

<!-- 加盟推荐 -->
<div class="tuijian">
    <div class="main_up">
        <div class="main_tit">
            <div class="main_tit_box">
                <img src="images/9_03.png" alt="">
            </div>
            <div class="main_tit_box1">
                <p>喜欢更多</p>
            </div>
            <div class="main_tit_box2">
                <p>更多</p>
            </div>
        </div>
    </div>
    <div class="hot_down">
        <div class="hot_down_img">
            <img src="images/8_03.png" alt="">
            <p>爽食莆仙斋—芡实&nbsp;（10斤）</p>
            <h1>700.00元</h1>
            <div class="hot_down_img1">
                <span>&#xe618;</span>
            </div>
        </div>
        <div class="hot_down_img">
            <img src="images/7_06.png" alt="">
            <p>爽食莆仙斋—芡实&nbsp;（10斤）</p>
            <h1>700.00元</h1>
            <div class="hot_down_img1">
                <span>&#xe618;</span>
            </div>
        </div>
    </div>
</div>

<div class="footer0"></div>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    let phone=document.querySelector(".head3 span");
    localStorage.phone=phone.innerHTML;
<?php echo '</script'; ?>
><?php }
}
