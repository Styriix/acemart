<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:20:50
  from 'C:\wamp64\www\application\views\templates\default\profile\my-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea3664244d0d9_07728239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056dce118de7c8225119f35d0e565e82c4e6be60' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\profile\\my-item.tpl',
      1 => 1571246528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea3664244d0d9_07728239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15534498995ea366423d8ba7_42198178', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18593490455ea366424434a4_25591325', 'datatable_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7145129455ea366424478e2_99320811', 'datatable_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_15534498995ea366423d8ba7_42198178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15534498995ea366423d8ba7_42198178',
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
class Block_18593490455ea366424434a4_25591325 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_css' => 
  array (
    0 => 'Block_18593490455ea366424434a4_25591325',
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
class Block_7145129455ea366424478e2_99320811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_7145129455ea366424478e2_99320811',
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
