<?php
/* Smarty version 3.1.30, created on 2018-04-24 10:42:25
  from "D:\wamp\www\MVC\app\views\admin\goodsadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adeedf1e834b4_16475641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e3340039946ba6b46ef4bf2da3274e5eb93552' => 
    array (
      0 => 'D:\\wamp\\www\\MVC\\app\\views\\admin\\goodsadd.html',
      1 => 1524537953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/header.html' => 1,
  ),
),false)) {
function content_5adeedf1e834b4_16475641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加类型</strong></div>
    <div class="body-content">

        <form method="post" class="form-x" action="index.php?m=admin&c=goods&a=goodsaddcheck">

            <div class="form-group">
                <div class="label">
                    <label>名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="gname" data-validate="required:请输入商品名"/>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>价格：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="" name="gprice" data-validate="required:请输入价格"/>
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
                           style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="gthumb" id="hidden">
                </div>
            </div>


            <div class="form-group">
                <div class="label">
                    <label>多图：</label>
                </div>
                <div class="field">
                    <input type="file" id="url2"  class="input tips" style="width:25%; float:left;" value="" data-toggle="hover" data-place="right" data-image="" multiple/>
                    <input type="button" class="button bg-blue margin-left" id="image2" value="+ 浏览上传" style="float:left;" data-url="index.php?m=admin&c=goods&a=upload">
                    <div class="tipss">图片尺寸：500*500</div>
                    <input type="hidden" name="gpicture" id="hidden2">
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>描述：</label>
                </div>
                <div class="field">
                    <textarea class="input w50" name="gdescrip" data-validate="required:请输入描述"></textarea>
                    <div class="tips"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label>所属分类：</label>
                </div>
                <div class="field">
                    <select name="tid" id="" class="input w50">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['tid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['tname'];?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </select>
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
