<?php
/* Smarty version 3.1.33, created on 2019-10-17 19:10:11
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\transactions\paypal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8a0733e5063_45757475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a2a507c76926f21738544920378d7adfb1fe5e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\transactions\\paypal.tpl',
      1 => 1571219449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da8a0733e5063_45757475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20157553535da8a073376f45_08958128', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14731265605da8a0733db6e8_01093187', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12740423425da8a0733e0979_95850283', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_20157553535da8a073376f45_08958128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_20157553535da8a073376f45_08958128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Paypal Transactions</h4>
    </div>
    <div class="grid-body">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

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
                        <th>Customer</th>
                        <th>Item Name</th>
                        <th>Transaction Id</th>
                        <th>Gross</th>
                        <th>Paypal Payer Id</th>
                        <th>Paypal Payer Email</th>
                        <th>Payer Country</th>
                        <th>Status</th>
                        <th>Payment Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['p_trans']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_trans']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->pp_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->pp_id;?>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pp_txn_id;?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->pp_payment_gross,2);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pp_payer_id;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pp_payer_email;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->pp_payer_country;?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->pp_payment_status == 'approved') {?>
                                <span class="text-success">Approved</span>
                            <?php } else { ?>
                                <span class="tex-danger"><?php echo $_smarty_tpl->tpl_vars['item']->value->pp_payment_status;?>
</span>
                            <?php }?>
                        </td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->pp_created_at)->format('d, F Y');?>
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
class Block_14731265605da8a0733db6e8_01093187 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_14731265605da8a0733db6e8_01093187',
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
class Block_12740423425da8a0733e0979_95850283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_12740423425da8a0733e0979_95850283',
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
