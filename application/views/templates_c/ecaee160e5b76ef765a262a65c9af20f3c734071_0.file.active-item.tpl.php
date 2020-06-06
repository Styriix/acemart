<?php
/* Smarty version 3.1.33, created on 2020-02-27 18:27:15
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\product\active-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e57fbf3dba0a3_64478426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecaee160e5b76ef765a262a65c9af20f3c734071' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\product\\active-item.tpl',
      1 => 1582824428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e57fbf3dba0a3_64478426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2241490035e57fbf3d80310_53535715', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17204324955e57fbf3db6143_18321344', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40142905e57fbf3db7dc0_93809156', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_2241490035e57fbf3d80310_53535715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_2241490035e57fbf3d80310_53535715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Active Items</h4>
    </div>
    <div class="grid-body">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

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
                        <th>Author</th>
                        <th>Item Name</th>
                        <th>Item Category</th>
                        <th>Item Status</th>
                        <th>Regular Price</th>
                        <th>Extended Price</th>
                        <th>Sales</th>
                        <th>Zip File</th>
                        <th>Released Date</th>
                        <th>Actions</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
"></label>
                        </div>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
</td>
                        <td><img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" width="35px" alt="Profile Pic" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
)"></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->item_status == 1) {?>
                                <span class="badge badge-success">Active</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 2) {?>
                                <span class="badge badge-warning">Paused</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 3) {?>
                                <span class="badge badge-danger">Deleted</span>
                            <?php } else { ?>
                                <span class="badge badge-info">Not Approve</span>
                            <?php }?>
                        </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_exte_price;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sales;?>
</td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/get_item_zip_file" method="post" id='download<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
'>
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="hidden" name="download" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                <a href="javascript:{}" onclick="document.getElementById('download<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
').submit(); return false;"><span class="badge badge-info">Download</span></a>
                            </form>
                        </td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_created_at)->format('d, F Y');?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/product/edit-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
"><span class="badge badge-primary">Edit</span></a></td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/remove_item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
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
class Block_17204324955e57fbf3db6143_18321344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_17204324955e57fbf3db6143_18321344',
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
class Block_40142905e57fbf3db7dc0_93809156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_40142905e57fbf3db7dc0_93809156',
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
