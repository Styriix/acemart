<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:47:28
  from 'C:\wamp64\www\application\views\templates\admin\blog\posts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea36c804195e5_73576780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1568b869705cfc1eb54ecd9fb388792ee1a27c' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\blog\\posts.tpl',
      1 => 1575583934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea36c804195e5_73576780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14988413015ea36c8039b7d1_10078468', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_14988413015ea36c8039b7d1_10078468 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14988413015ea36c8039b7d1_10078468',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/blog/create-new-blog"><button type="button" class="btn btn-success">Create New Post</button></a>
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Blog Posts Section</h4>
    </div>
    <div class="grid-body">

        <div class="table-responsive">
            <table class="table table-bordered table-condensed" id="example">
                <thead>
                    <tr>
                        <th style="width:1%">
                        <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                        <input type="checkbox" value="1" id="checkbox0">
                        <label for="checkbox0"></label>
                        </div>
                        </th>
                        <th>#</th>
                        <th>Blog Preview</th>
                        <th>Blog Title</th>
                        <th>Blog Cateogry</th>
                        <th>Author</th>
                        <th>Blog Status</th>
                        <th>view(s)</th>
                        <th>Date Created</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['blogs']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_id;?>
"></label>
                        </div>
                        </td>

                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><img src="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_no_img'];
}?>" width="50px" alt="Blog Preview"></td>
                        <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
</a></td>
                        <td class="text-danger"><?php echo $_smarty_tpl->tpl_vars['blog']->value->bc_name;?>
</td>
                        <td class="text-primary"><b><?php echo $_smarty_tpl->tpl_vars['blog']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['blog']->value->user_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['blog']->value->user_username;?>
)</b></td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_status_id == 1) {?>
                                <span class="badge badge-success">Active</span>
                            <?php } else { ?>
                                <span class="badge badge-warning">Draft</span>
                            <?php }?>
                        </td>
                        <td><span class="badge badge-info"><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_view;?>
</span></td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['blog']->value->blog_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</td>
                        <td>
                        <div class="row">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_blog_post/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_id;?>
" method="post" id="del">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                            <input type="hidden" name="del" value="<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_id;?>
">
                            <div class="col-md-6">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/blog/edit-blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_id;?>
/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="col-md-6">
                                <a href="" onclick="document.getElementById('del').submit(); return false;" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash text-danger"></i></a>
                            </div>
                            </form>
                        </td>
                        
                    </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
}
