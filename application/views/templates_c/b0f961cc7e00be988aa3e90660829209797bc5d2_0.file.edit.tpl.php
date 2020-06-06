<?php
/* Smarty version 3.1.33, created on 2019-12-05 20:38:43
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\blog\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de95cc327bf10_52562609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0f961cc7e00be988aa3e90660829209797bc5d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\blog\\edit.tpl',
      1 => 1575574515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de95cc327bf10_52562609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19732523275de95cc3212693_40360609', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21240780595de95cc3275497_70730026', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6085561725de95cc327a052_21098210', 'ckeditor_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19732523275de95cc3212693_40360609 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19732523275de95cc3212693_40360609',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['from_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-info">Update Blog Post</h4>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_blog_post/<?php echo $_smarty_tpl->tpl_vars['e_blog']->value->blog_id;?>
/<?php echo $_smarty_tpl->tpl_vars['e_blog']->value->blog_slug;?>
" method="post" enctype="multipart/form-data" role="form" class="validate" autocomplete="off">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="blog_title">Blog Title</label>
                        <input id="blog_title" class="form-control" type="text" name="blog_title" value="<?php echo $_smarty_tpl->tpl_vars['e_blog']->value->blog_title;?>
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
" <?php if ($_smarty_tpl->tpl_vars['e_blog']->value->bc_id == $_smarty_tpl->tpl_vars['cat']->value->bc_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cat']->value->bc_name;?>
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
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['e_blog']->value->blog_status_id == 1) {?>selected<?php }?>>Active</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['e_blog']->value->blog_status_id == 0) {?>selected<?php }?>>Draft</option>
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
                        <textarea id="editor" class="form-control" name="blog_contents" rows="3" required><?php echo $_smarty_tpl->tpl_vars['e_blog']->value->blog_contents;?>
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
class Block_21240780595de95cc3275497_70730026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_21240780595de95cc3275497_70730026',
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
class Block_6085561725de95cc327a052_21098210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_6085561725de95cc327a052_21098210',
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
