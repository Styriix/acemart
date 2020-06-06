<?php
/* Smarty version 3.1.33, created on 2019-10-07 05:31:11
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\category\sub-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9ab17f277090_75155339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3488982a2e75fe7089e5bd5428e57432f0af89b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\category\\sub-category.tpl',
      1 => 1570418977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9ab17f277090_75155339 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14144544935d9ab17f175940_65292297', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3463755905d9ab17f26a2d9_53403487', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7419413455d9ab17f26fd71_89611862', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_14144544935d9ab17f175940_65292297 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14144544935d9ab17f175940_65292297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4>Main Item Categories</h4>
    </div>
    <div class="grid-body">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['url_5']->value) {?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_sub_category/<?php echo $_smarty_tpl->tpl_vars['edit']->value->sub_cat_id;?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value->sub_cat_slug;?>
" method="post" role="form" class="validate" autocomplete="off">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-5">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->sub_cat_name;?>
" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-8 col-sm-4">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="main_cat" required>
                                <option value="">Select Main Categroy</option>
                                <?php if ($_smarty_tpl->tpl_vars['main_g_cats']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_g_cats']->value, 'smc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['smc']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['smc']->value->main_cat_id;?>
" <?php if ($_smarty_tpl->tpl_vars['edit']->value->sub_main_cat_id == $_smarty_tpl->tpl_vars['smc']->value->main_cat_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['smc']->value->main_cat_name;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4 col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Update Category</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_sub_category" method="post" role="form" class="validate" autocomplete="off">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-5">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-8 col-sm-4">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="main_cat" required>
                                <option value="">Select Main Categroy</option>
                                <?php if ($_smarty_tpl->tpl_vars['main_g_cats']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_g_cats']->value, 'smc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['smc']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['smc']->value->main_cat_id;?>
"><?php echo $_smarty_tpl->tpl_vars['smc']->value->main_cat_name;?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 col-xs-4 col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Category</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php }?>

        <hr>

        <div class="">
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
                        <th>Category Name</th>
                        <th>Main Category Name</th>
                        <th>Created</th>
                        <th>Actions</th>
                        <th>Deleting</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['sub_cats']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_id;?>
"></label>
                        </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_name;?>
</td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['cat']->value->sub_cat_created_at)->format('d, F Y');?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/sub-category/edit-category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_slug;?>
"><span class="badge badge-primary">Edit Category</span></a></td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_sub_category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_id;?>
" method="post" onsubmit="return confirm('Are you sure? If you delte all item and category relate wil be remove.');">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
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
/* {block 'data_table_css'} */
class Block_3463755905d9ab17f26a2d9_53403487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_3463755905d9ab17f26a2d9_53403487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
 <link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
<?php
}
}
/* {/block 'data_table_css'} */
/* {block 'data_table_js'} */
class Block_7419413455d9ab17f26fd71_89611862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_7419413455d9ab17f26fd71_89611862',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/js/datatables.responsive.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/datatables-responsive/js/lodash.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/datatables.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'data_table_js'} */
}
