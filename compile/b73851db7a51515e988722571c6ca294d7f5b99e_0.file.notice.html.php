<?php
/* Smarty version 3.1.30, created on 2018-04-26 08:22:11
  from "D:\wamp\www\MVC\app\views\index\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae17013232854_56275268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73851db7a51515e988722571c6ca294d7f5b99e' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\index\\notice.html',
      1 => 1524723730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae17013232854_56275268 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['notice']->value)) {?>
<style>
    .notice{
        width: 100vw;
        height: 94vh;
        position: absolute;
        top:6vh;
        left:0;
    }
    .notice span{
        display: block;
        width: 8rem;
        border: 0.01rem solid #999999;
        padding:1rem 0;
        margin:0 auto;
        background: #fff;
        font-size: 0.5rem;
        text-align: center;
        font-weight:600;
        color: red;
    }
</style>
<div class="notice"> <span><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</span></div>
<?php echo '<script'; ?>
>
    let close=document.querySelector(".notice");
    close.onclick=function(){
        this.style.display="none";
    }
<?php echo '</script'; ?>
>
<?php }
}
}
