<?php
/* Smarty version 3.1.30, created on 2018-04-24 08:57:31
  from "D:\wamp\www\MVC\app\views\admin\typelist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aded55b3eba38_77943564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dfeff32f73e6c98161864919f7cf80f1b76051d' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\typelist.html',
      1 => 1524296845,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5aded55b3eba38_77943564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    td>img{
        width: 50px;
        height: auto;
        border-radius: 50%;
    }
</style>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 类型列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=type&a=addtype"> 添加分类</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th>ID</th>
                <th>名称</th>
                <th>图片</th>
                <th>所属分类</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt=""></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="index.php?m=admin&c=type&a=typeupdate&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=type&a=deltype&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a></div>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <tr>
                <td colspan="7">
                    <div class="pagelist">
                        <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

                    </div>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html><?php }
}
