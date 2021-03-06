<?php
/* Smarty version 3.1.30, created on 2018-04-24 12:01:39
  from "D:\wamp\www\MVC\app\views\admin\typeadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf008353a9c1_14206077',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fc95980a78726a07fb331ceb208e6c10edcc0e8' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\typeadd.html',
      1 => 1524296143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adf008353a9c1_14206077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加类型</strong></div>
    <div class="body-content">

        <form method="post" class="form-x" action="index.php?m=admin&c=type&a=typeaddcheck">

            <div class="form-group">
                <div class="label">
                    <label>名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="tname" data-validate="required:请输入类型名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>照片：</label>
                </div>
                <div class="field">
                    <input type="file" id="url1"  class="input tips" style="width:25%; float:left;" value=""
                           data-toggle="hover" data-place="right" data-image=""/>
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
                    <input type="text" class="input w50" value="" name="cid" data-validate="required:请输入分类ID"/>
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
