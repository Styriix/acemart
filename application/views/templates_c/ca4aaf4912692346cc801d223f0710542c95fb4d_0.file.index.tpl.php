<?php
/* Smarty version 3.1.33, created on 2019-10-17 11:33:40
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\withdraw\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da83574668649_43442784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4aaf4912692346cc801d223f0710542c95fb4d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\withdraw\\index.tpl',
      1 => 1571304570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da83574668649_43442784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211130475da835745f63c8_15729919', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5069303585da83574661195_71259835', 'data_table_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20938933235da835746644e4_96267977', 'data_table_js');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_211130475da835745f63c8_15729919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_211130475da835745f63c8_15729919',
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
                        <th>User</th>
                        <th>User Balance</th>
                        <th>Amount Request</th>
                        <th>Method</th>
                        <th>Account</th>
                        <th>Approve</th>
                        <th>Decline</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php if ($_smarty_tpl->tpl_vars['mws']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('i', "1");?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mws']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td class="v-align-middle">
                        <div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_id;?>
">
                        <label for="checkbox<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_id;?>
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
                        <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo number_format($_smarty_tpl->tpl_vars['item']->value->bal_value,2);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo number_format($_smarty_tpl->tpl_vars['item']->value->wd_amount,2);?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->wd_method;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->wd_account;?>
</td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/approve_withdrawal/<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_id;?>
" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="hidden" name="amt" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_amount;?>
">
                                <button type="submit" name="submit" class="btn btn-info">Approve</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/reject_withdrawal/<?php echo $_smarty_tpl->tpl_vars['item']->value->wd_id;?>
" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <button type="submit" name="submit" class="btn btn-danger">Decline</button>
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
class Block_5069303585da83574661195_71259835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_5069303585da83574661195_71259835',
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
class Block_20938933235da835746644e4_96267977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_js' => 
  array (
    0 => 'Block_20938933235da835746644e4_96267977',
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
