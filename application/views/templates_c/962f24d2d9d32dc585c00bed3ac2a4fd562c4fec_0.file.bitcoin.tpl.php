<?php
/* Smarty version 3.1.33, created on 2020-05-08 14:11:16
  from 'C:\wamp64\www\acemart\application\views\templates\admin\transactions\bitcoin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb568842a1634_31884160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '962f24d2d9d32dc585c00bed3ac2a4fd562c4fec' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\transactions\\bitcoin.tpl',
      1 => 1574657933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb568842a1634_31884160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18795029165eb56884219d05_66829957', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19585338125eb56884292fb9_43437980', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6881074855eb56884299398_03063046', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_18795029165eb56884219d05_66829957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_18795029165eb56884219d05_66829957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-primary">Bitcoin Transaction</h4>
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
                        <th>Order No</th>
                        <th>Coin Label</th>
                        <th>Wallet Addr</th>
                        <th>Amount</th>
                        <th>Amount In USD</th>
                        <th>Status</th>
                        <th>Payment Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['btc_trans']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['btc_trans']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->paymentID;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->paymentID;?>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->txID;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->zd_btc_order_no;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->coinLabel;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->addr;?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->amount,2);?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['item']->value->amountUSD,2);?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->processed == 1) {?>
                                <span class="text-success">Confirmed</span>
                            <?php } else { ?>
                                <span class="tex-danger">Pending</span>
                            <?php }?>
                        </td>
                        <td><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->recordCreated)->format('d, F Y');?>
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
class Block_19585338125eb56884292fb9_43437980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_19585338125eb56884292fb9_43437980',
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
class Block_6881074855eb56884299398_03063046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_6881074855eb56884299398_03063046',
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
