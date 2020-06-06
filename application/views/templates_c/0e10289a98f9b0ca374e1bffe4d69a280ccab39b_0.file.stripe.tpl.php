<?php
/* Smarty version 3.1.33, created on 2019-11-28 16:19:54
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\gateways\stripe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddfe59a23b3a2_31570031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e10289a98f9b0ca374e1bffe4d69a280ccab39b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\gateways\\stripe.tpl',
      1 => 1574954390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddfe59a23b3a2_31570031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15187419255ddfe59a1e69b2_48780364', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_15187419255ddfe59a1e69b2_48780364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15187419255ddfe59a1e69b2_48780364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Stripe Payment Gateway Infomations</h3>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_stripe_gateway" method="post" class="validate">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="api_key">Stripe API Public Key</label>
                <input id="api_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['stripe']->value->sg_public_key;?>
" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Stripe API Secret key</label>
                <input id="api_secret_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['stripe']->value->sg_secret_key;?>
" name="secret_key" required>
            </div>

            <div class="form-group">
                <label for="mode">Stripe Payment Status</label>
                <select id="mode" class="form-control" name="sg_status" required>
                    <option value="">Select Option</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status == 1) {?>selected<?php }?>>Enable</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status != 1) {?>selected<?php }?>>Disabled</option>
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
