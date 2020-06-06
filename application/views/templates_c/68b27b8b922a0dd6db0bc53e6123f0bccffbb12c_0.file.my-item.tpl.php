<?php
/* Smarty version 3.1.33, created on 2019-10-16 19:22:11
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\profile\my-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da751c3abde58_24724028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b27b8b922a0dd6db0bc53e6123f0bccffbb12c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\profile\\my-item.tpl',
      1 => 1571246528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da751c3abde58_24724028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18441824855da751c3a0be71_49825836', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6427271335da751c3aa91c8_95583536', 'datatable_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_391713995da751c3ab7403_70669811', 'datatable_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_18441824855da751c3a0be71_49825836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_18441824855da751c3a0be71_49825836',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li>My Items</li>
            </ul>
        </div>
    </div>  
</div>

<div class="sales-statement-page-area bg-secondary section-space-bottom">
<div class="container">

<table id="example" class="table table-striped table-responsive table-bordered" style="width:100%">
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
                    <span class="badge badge-info">In Review</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 1) {?>
                    <span class="badge badge-success">Active</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 2) {?>
                    <span class="badge badge-warning">Pause</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_status == 3) {?>
                    <span class="badge badge-danger">Deleted</span>
                <?php }?>
            </td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->sales;?>
</td>
            <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_created_at)->format('d F, Y');?>
</td>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
edit-item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
"><span class="badge badge-primary">Edit Item</span></a></td>
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


    
<?php
}
}
/* {/block 'contents'} */
/* {block 'datatable_css'} */
class Block_6427271335da751c3aa91c8_95583536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_css' => 
  array (
    0 => 'Block_6427271335da751c3aa91c8_95583536',
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
class Block_391713995da751c3ab7403_70669811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_391713995da751c3ab7403_70669811',
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
