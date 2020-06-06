<?php
/* Smarty version 3.1.33, created on 2019-10-06 21:25:55
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\category\main-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9a3fc3a52418_45334931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd951c15fb1f5f6e3eedf6d0daa2b6a429cee022a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\category\\main-category.tpl',
      1 => 1570389908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9a3fc3a52418_45334931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4977549545d9a3fc3985e45_01186596', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8806651875d9a3fc3a44115_87061049', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20853653975d9a3fc3a4b2b6_39573978', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_4977549545d9a3fc3985e45_01186596 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4977549545d9a3fc3985e45_01186596',
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
/update_main_category/<?php echo $_smarty_tpl->tpl_vars['edit']->value->main_cat_id;?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value->main_cat_slug;?>
" method="post" role="form" class="validate" autocomplete="off">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-md-6 col-xs-8 col-sm-6">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="cat_name" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->main_cat_name;?>
" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-4 col-sm-3">
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-block">Update Category</button>
                        </div>
                    </div>
                </div>
            </form>
        <?php } else { ?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_main_category" method="post" role="form" class="validate" autocomplete="off">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-md-6 col-xs-8 col-sm-6">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-4 col-sm-3">
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
                        <th>CategoryName</th>
                        <th>Created</th>
                        <th>Actions</th>
                        <th>Deleting</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['main_cats']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_id;?>
"></label>
                        </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_name;?>
</td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['cat']->value->main_cat_created_at)->format('d, F Y');?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/main-category/edit-category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_slug;?>
"><span class="badge badge-primary">Edit Category</span></a></td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_main_category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->main_cat_id;?>
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
class Block_8806651875d9a3fc3a44115_87061049 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_8806651875d9a3fc3a44115_87061049',
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
class Block_20853653975d9a3fc3a4b2b6_39573978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_20853653975d9a3fc3a4b2b6_39573978',
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
