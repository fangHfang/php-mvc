<?php
/* Smarty version 3.1.30, created on 2018-04-27 03:29:12
  from "D:\wamp\www\MVC\app\views\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae27ce899d6b3_81390209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4235cbb66419c57d197b4961eb7e401f1bca2c4f' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\footer.html',
      1 => 1524790099,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae27ce899d6b3_81390209 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="footer">
    <a href="index.php?m=index" class="footer1 <?php if ($_smarty_tpl->tpl_vars['t']->value == 1) {?>footer2<?php }?>">
        <h2>&#xe699;</h2>
        <h3>首页</h3>
    </a>
    <a href="index.php?m=index&c=culture" class="footer1 <?php if ($_smarty_tpl->tpl_vars['t']->value == 2) {?>footer2<?php }?>">
        <h2>&#xe768;</h2>
        <h3>文化</h3>
    </a>
    <a href="index.php?m=index&c=commodity" class="footer1 <?php if ($_smarty_tpl->tpl_vars['t']->value == 3) {?>footer2<?php }?>" >
        <h2>&#xe768;</h2>
        <h3>所有商品</h3>
    </a>
    <a href="index.php?m=index&c=buycar" class="footer1 <?php if ($_smarty_tpl->tpl_vars['t']->value == 4) {?>footer2<?php }?>">
        <h2>&#xe768;</h2>
        <h3>购物车</h3>
    </a>
    <a href="index.php?m=index&c=personal" class="footer1 <?php if ($_smarty_tpl->tpl_vars['t']->value == 5) {?>footer2<?php }?>">
        <h2>&#xe768;</h2>
        <h3>会员中心</h3>
    </a>
</div>
</body>
</html>
<?php }
}
