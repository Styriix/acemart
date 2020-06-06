<?php
/* Smarty version 3.1.33, created on 2019-11-28 16:14:05
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\gateways\paypal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddfe43d3c4165_49729242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05800e58f32c435d78b580a675659ac712cc8d15' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\gateways\\paypal.tpl',
      1 => 1574954024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddfe43d3c4165_49729242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17668985025ddfe43d359040_09634146', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_17668985025ddfe43d359040_09634146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17668985025ddfe43d359040_09634146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Paypal Payment Gateway Infomations</h3>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_papal_gateway" method="post" class="validate">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="api_key">Paypal API Public Key</label>
                <input id="api_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['paypal']->value->pg_api_public_key;?>
" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Paypal API Secret key</label>
                <input id="api_secret_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['paypal']->value->pg_api_secret_key;?>
" name="secret_key" required>
            </div>
            <div class="form-group">
                <label for="mode">Payment Mode</label>
                <select id="mode" class="form-control" name="mode" required>
                    <option value="">Select Option</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_mode == 1) {?>selected<?php }?>>Live Mode</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_mode != 1) {?>selected<?php }?>>Test Mode</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mode">PayPal Payment Status</label>
                <select id="mode" class="form-control" name="pg_status" required>
                    <option value="">Select Option</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status == 1) {?>selected<?php }?>>Enable</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status != 1) {?>selected<?php }?>>Disabled</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-info btn-block">Save</button>
        </form>
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
}
