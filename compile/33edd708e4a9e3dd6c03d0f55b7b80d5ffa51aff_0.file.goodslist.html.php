<?php
/* Smarty version 3.1.30, created on 2018-04-24 08:58:00
  from "D:\wamp\www\MVC\app\views\admin\goodslist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aded578d32dd6_49628548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33edd708e4a9e3dd6c03d0f55b7b80d5ffa51aff' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\goodslist.html',
      1 => 1524541389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5aded578d32dd6_49628548 (Smarty_Internal_Template $_smarty_tpl) {
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
                <li><a class="button border-main icon-plus-square-o" href="index.php?m=admin&c=goods&a=addgoods"> +添加分类</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="50px">ID</th>
                <th width="80px">名称</th>
                <th width="80px">价格</th>
                <th width="100px">图片</th>
                <th width="150px">多图</th>
                <th width="100px">描述</th>
                <th width="80px">所属分类</th>
                <th width="130px">商品推荐</th>
                <th width="170px">操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gprice'];?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['gthumb'];?>
" alt=""></td>
                <td>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['gpicture'], 'src');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['src']->value) {
?>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
" alt="">
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['gdescrip'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['grecommend'];?>
</td>
                <td>
                    <div class="button-group">
                        <a class="button border-main" href="index.php?m=admin&c=goods&a=goodsupdate&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
"><span class="icon-edit"></span> 修改</a>
                        <a class="button border-red" href="index.php?m=admin&c=goods&a=delgoods&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['gid'];?>
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
