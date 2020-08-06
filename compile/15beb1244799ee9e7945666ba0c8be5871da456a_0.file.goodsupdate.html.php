<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:39:06
  from "D:\wamp\www\MVC\app\views\admin\goodsupdate.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeed2a20af99_15785034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15beb1244799ee9e7945666ba0c8be5871da456a' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\goodsupdate.html',
      1 => 1524536803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adeed2a20af99_15785034 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改商品</strong></div>
    <div class="body-content">

        <form method="post" class="form-x" action="index.php?m=admin&c=goods&a=goodsupdatecheck">
            <input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gid'];?>
">
            <div class="form-group">
                <div class="label">
                    <label>商品名：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gname'];?>
" name="gname" data-validate="required:请输入用户名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>商品价格：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gprice'];?>
" name="gprice" data-validate="required:请输入密码"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>图片</label>
                </div>
                <div class="field">
                    <input type="file" id="url1"  class="input tips" style="width:25%; float:left;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gthumb'];?>
"
                           data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['gthumb'];?>
"/>
                    <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"
                           style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="gthumb" id="hidden">
                </div>
            </div>

            <div class="form-group">
            <div class="label">
                <label>图片</label>
            </div>
            <div class="field">
                <input type="file" id="url2"  class="input tips" style="width:25%; float:left;" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gpicture'];?>
" data-toggle="hover" data-place="right" data-image="<?php echo $_smarty_tpl->tpl_vars['data']->value['gpicture'];?>
" multiple/>
                <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传"
                       style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                <div class="tipss">图片尺寸：500*500</div>
                <input type="hidden" name="gpicture" id="hidden2">
            </div>
        </div>

            <div class="form-group">
                <div class="label">
                    <label>描述：</label>
                </div>
                <div class="field">
                    <textarea id="" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gdescrip'];?>
" name="gdescrip" ></textarea>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>所属分类：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['tid'];?>
" name="tid" data-validate="required:请输入分类"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>推荐：</label>
                </div>
                <div class="field">
                    推荐<input type="radio" value="1" name="grecommend"/>
                    不推荐<input type="radio" value="0" name="grecommend" checked/>
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
