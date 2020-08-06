<?php
/* Smarty version 3.1.30, created on 2018-04-24 12:26:21
  from "D:\wamp\www\MVC\app\views\admin\typeupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf064dd21897_95831169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31b8822e14f52aed32230348598d5c218136c69' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\typeupdate.html',
      1 => 1524565562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adf064dd21897_95831169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加类型</strong></div>
    <div class="body-content">

        <form method="post" class="form-x" action="index.php?m=admin&c=type&a=typeupdatecheck">
            <input type="hidden" name="tid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
">
            <div class="form-group">
                <div class="label">
                    <label>ID：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
" name="tid" data-validate="required:请输入类型名" readonly/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tname'];?>
" name="tname" data-validate="required:请输入类型名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>照片：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1"  class="input tips" style="width:25%; float:left;" value=""
                           data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['thumb'];?>
"/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"
                           style="float:left;" data-url="index.php?m=admin&c=type&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="thumb" id="hidden">
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>所属分类：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['cid'];?>
" name="cid" data-validate="required:请输入分类"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
                </div>
            </div>

        </form>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/upload.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
