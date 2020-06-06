<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:47:31
  from 'C:\wamp64\www\application\views\templates\admin\blog\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea36c83e5b3a0_42854736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f44266736db79d334366274461361b5f203e0c4' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\blog\\create.tpl',
      1 => 1575574502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea36c83e5b3a0_42854736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3112540125ea36c83e126e6_32380562', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5718339625ea36c83e54218_06424009', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1944770915ea36c83e58734_41856530', 'ckeditor_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_3112540125ea36c83e126e6_32380562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_3112540125ea36c83e126e6_32380562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-warning">Create New Blog Post</h4>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_blog_post" method="post" enctype="multipart/form-data" role="form" class="validate" autocomplete="off">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="blog_title">Blog Title</label>
                        <input id="blog_title" class="form-control" type="text" name="blog_title" value="<?php echo $_smarty_tpl->tpl_vars['old_title']->value;?>
" minlength="3" maxlength="100" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="blog_category">Blog Category</label>
                        <select id="blog_category" class="form-control" name="blog_cat" required>
                            <option value="">Select Blog Category</option>
                            <?php if ($_smarty_tpl->tpl_vars['cats']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->bc_id;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->bc_name;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_status">Blog Status</label>
                        <select id="blog_status" class="form-control" name="blog_status" required>
                        <option value="">Select Status</option>
                            <option value="1">Active</option>
                            <option value="0">Draft</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="blog_preview">Blog Preview</label>
                        <input id="blog_preview" class="form-control" type="file" name="blog_preview">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="blog_contents">Blog Contents</label>
                        <textarea id="editor" class="form-control" name="blog_contents" rows="3" required><?php echo $_smarty_tpl->tpl_vars['old_contents']->value;?>
</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-success btn-block">Create New Blog</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'ckeditor_head'} */
class Block_5718339625ea36c83e54218_06424009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_5718339625ea36c83e54218_06424009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ck']->value;?>
/ckeditor.js"><?php echo '</script'; ?>
>    
<?php
}
}
/* {/block 'ckeditor_head'} */
/* {block 'ckeditor_foot'} */
class Block_1944770915ea36c83e58734_41856530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_1944770915ea36c83e58734_41856530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
CKEDITOR.replace( 'editor' );
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'ckeditor_foot'} */
}
