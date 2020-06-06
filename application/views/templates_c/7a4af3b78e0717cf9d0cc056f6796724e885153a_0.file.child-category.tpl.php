<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:54:06
  from 'C:\wamp64\www\application\views\templates\admin\category\child-category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35ffec9f329_86063461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a4af3b78e0717cf9d0cc056f6796724e885153a' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\category\\child-category.tpl',
      1 => 1570418954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35ffec9f329_86063461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11128652295ea35ffebf4b83_94858745', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6332243115ea35ffec8abc9_65126391', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9427544435ea35ffec94cb6_09957335', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_11128652295ea35ffebf4b83_94858745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11128652295ea35ffebf4b83_94858745',
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
/update_child_category/<?php echo $_smarty_tpl->tpl_vars['edit']->value->child_cat_id;?>
/<?php echo $_smarty_tpl->tpl_vars['edit']->value->child_cat_slug;?>
" method="post" role="form" class="validate" autocomplete="off">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-5">
                        <div class="form-group">
                            <input id="my-input" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['edit']->value->child_cat_name;?>
" name="cat_name" placeholder="Create New Main Category" minlength="3" maxlength="20" required>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-8 col-sm-4">
                        <div class="form-group">
                            <select id="my-select" class="form-control" name="main_cat" required>
                                <option value="">Select Sub Categroy</option>
                                <?php if ($_smarty_tpl->tpl_vars['list_subs']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_subs']->value, 'smc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['smc']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['smc']->value->sub_cat_id;?>
" <?php if ($_smarty_tpl->tpl_vars['edit']->value->child_sub_cat_id == $_smarty_tpl->tpl_vars['smc']->value->sub_cat_id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['smc']->value->sub_cat_name;?>
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
/create_child_category" method="post" role="form" class="validate" autocomplete="off">
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
                                <option value="">Select Sub Categroy</option>
                                <?php if ($_smarty_tpl->tpl_vars['list_subs']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_subs']->value, 'smc');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['smc']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['smc']->value->sub_cat_id;?>
"><?php echo $_smarty_tpl->tpl_vars['smc']->value->sub_cat_name;?>
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
                        <th>Sub Category Name</th>
                        <th>Created</th>
                        <th>Actions</th>
                        <th>Deleting</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['child_cats']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['child_cats']->value, 'cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->child_cat_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['cat']->value->child_cat_id;?>
"></label>
                        </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->child_cat_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['cat']->value->sub_cat_name;?>
</td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['cat']->value->child_cat_created_at)->format('d, F Y');?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/child-category/edit-category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->child_cat_slug;?>
"><span class="badge badge-primary">Edit Category</span></a></td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/delete_child_category/<?php echo $_smarty_tpl->tpl_vars['cat']->value->child_cat_id;?>
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
class Block_6332243115ea35ffec8abc9_65126391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_6332243115ea35ffec8abc9_65126391',
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
class Block_9427544435ea35ffec94cb6_09957335 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_9427544435ea35ffec94cb6_09957335',
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
