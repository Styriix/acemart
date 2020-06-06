<?php
/* Smarty version 3.1.33, created on 2019-11-19 01:13:44
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\my-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd333b8b36cc4_04176786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdc43c7623156f32fff57956c34fac4499d571e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\my-item.tpl',
      1 => 1574116217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd333b8b36cc4_04176786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13602548425dd333b8aa4f91_34980645', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8792602665dd333b8b2b896_57790200', 'datatable_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12839098365dd333b8b30ab9_70944674', 'datatable_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_13602548425dd333b8aa4f91_34980645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_13602548425dd333b8aa4f91_34980645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<section class="dashboard-area">
<div class="dashboard_contents">
<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="dashboard_title_area clearfix">
            <div class="dashboard__title pull-left">
                <h3>Available Items</h3>
            </div>
        </div>
        <!-- end /.dashboard_title_area -->
    </div>
    <!-- end /.col-md-12 -->
</div>



<div class="withdraw_module withdraw_history">
<div class="table-responsive">
<table id="example" class="table withdraw__table table-striped table-bordered">
    <thead>
        <tr>
            <th>Icon</th>
            <th>Item name</th>
            <th>Status</th>
            <th>Sale</th>
            <th>Release date</th>
            <th>Action</th>
        </tr>
    </thead>



    <tbody>
        <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <tr>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->thumb_name;?>
" width="35px" alt=""></td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</a></td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['item']->value->item_status == 0) {?>
                    <span class="btn btn-info btn--rounded">In Review</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 1) {?>
                    <span class="btn btn-success btn--rounded">Active</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 2) {?>
                    <span class="btn btn-warning btn--rounded">Pause</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 3) {?>
                    <span class="btn btn-danger btn--rounded">Deleted</span>
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sales;?>
</td>
            <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_created_at)->format('d F, Y');?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
edit-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
"><span class="btn btn-primary">Edit Item</span></a></td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>



    </tbody>
    <tfoot>
        <tr>
            <th>Icon</th>
            <th>Item name</th>
            <th>Status</th>
            <th>Sale</th>
            <th>Release date</th>
            <th>Action</th>
        </tr>
    </tfoot>
</table>
</div>
</div>
</div>
</div>
</div>

</section>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'datatable_css'} */
class Block_8792602665dd333b8b2b896_57790200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_css' => 
  array (
    0 => 'Block_8792602665dd333b8b2b896_57790200',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/dataTables.bootstrap.min.css">
<?php
}
}
/* {/block 'datatable_css'} */
/* {block 'datatable_js'} */
class Block_12839098365dd333b8b30ab9_70944674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_12839098365dd333b8b30ab9_70944674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>

    $(document).ready(function() {
    $('#example').DataTable();
} );

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'datatable_js'} */
}
