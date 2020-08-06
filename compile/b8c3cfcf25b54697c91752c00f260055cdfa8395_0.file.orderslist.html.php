<?php
/* Smarty version 3.1.30, created on 2018-04-24 12:09:05
  from "D:\wamp\www\MVC\app\views\admin\orderslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf0241516b96_48405354',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c3cfcf25b54697c91752c00f260055cdfa8395' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\orderslist.html',
      1 => 1524530158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adf0241516b96_48405354 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<style>
    td>img{
        width: 50px;
        height: auto;
        borders-radius: 50%;
    }
</style>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorders"> 订单列表</strong>
        </div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=orders&a=addorders"> 添加分类</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="50px">ID</th>
                <th width="80px">商品名称</th>
                <th width="80px">商品个数</th>
                <th width="100px">商品总价</th>
                <th width="150px">用户ID</th>
                <th width="100px">用户地址</th>
                <th width="80px">订单状态</th>
                <th width="170px">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['oid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gnumber'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ostate'];?>
</td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="index.php?m=admin&c=orders&a=ordersupdate&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=orders&a=delorders&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
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
