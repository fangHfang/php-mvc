<?php
/* Smarty version 3.1.30, created on 2018-04-24 08:25:00
  from "D:\wamp\www\MVC\app\views\index\culture.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adecdbcb99b87_19014158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ff6d22f0278bcd44f8d59dbfdd9462df38df3b' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\culture.html',
      1 => 1524542110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_5adecdbcb99b87_19014158 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文化</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/culture.css">
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
		<b>莆仙文化</b>
	</div>
	<div class="tit">
		<div class="tit1 tit2">
			<span>莆田妈祖</span>
		</div>
		<div class="tit1 ">
			<span>历史文化</span>
		</div>
		<div class="tit1 ">
			<span>风俗特产</span>
		</div>
		<div class="tit1 ">
			<span>视频介绍</span>
		</div>
	</div>
	<div class="content">
		<img src="<?php echo IMG_PATH;?>
/Screenshot_2018-02-24-17-49-43-51_02.png" alt="">
	</div>
	<div class="content_tit">
		<p>莆田妈祖娘娘是历代船工、海员、旅客、商人和渔民共同信奉的神邸。古代在海上航行经常受到风浪的袭击而船沉人亡，船员的安全成航海者的主要问题，她们把希望寄托于神灵的保佑。在起航前要先祭天，祈求包邮顺丰和安全，在船只上立天妃神位供奉。</p>
	</div>
	<div class="content_img">
		<div class="content_img1">
			<img src="<?php echo IMG_PATH;?>
/2_03.png" alt="">
		</div>
		<div class="content_img1">
			<img src="<?php echo IMG_PATH;?>
/2_05.png" alt="">
		</div>
	</div>
	<div class="content_tit content_tit1">
		<p>莆田妈祖娘娘是历代船工、海员、旅客、商人和渔民共同信奉的神邸。古代在海上航行经常受到风浪的袭击而船沉人亡，船员的安全成航海者的主要问题，她们把希望寄托于神灵的保佑。在起航前要先祭天，祈求包邮顺丰和安全，在船只上立天妃神位供奉。</p>
	</div>

	<div class="footer0"></div>

	<!-- footer部分 -->
	<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
