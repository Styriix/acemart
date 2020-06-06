<?php
/* Smarty version 3.1.33, created on 2019-11-25 03:15:50
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\gateways\bitcoin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddb39569d9622_70897472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29910277a3718e5cb9573cd4b7c710e429fcd7d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\gateways\\bitcoin.tpl',
      1 => 1574648145,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddb39569d9622_70897472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14956102465ddb395699e231_31851792', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_14956102465ddb395699e231_31851792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14956102465ddb395699e231_31851792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Bitcoin Gateway Infomations</h3>
        <h5 class="text-center text-danger"><strong>How To Set Up?</strong></h5>
    </div>
    <div class="grid-body">
    <p>
        <ol class="text-primary">
            <li>Create an account at: http://gourl.lo</li>
            <li>Create a bitcoin payment box credential on the same website</li>
            <li>Copy out your Private and Public key</li>
            <li>Go to you server root where this script was install</li>
            <li>Open: lib >> crtypto>config.php</li>
            <li>Please fill in the space that requires your database infomations</li>
            <li>Fill in the space that require your private. <b>Note:</b> This step are to be done in the crypto.config.php in the lib folder</li>
            <li>Finally fill in the bellow field with you credentials and all is done.</li>
            <li>Please if you need help or confuse please use the support section where you purchase this script i will be glad to help you out.</li>
        </ol>
    </p>
    <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_bitcoin_gateway" method="post" class="validate">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="api_key">Bitcoin Public Key</label>
                <input id="api_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['btc']->value->btc_public_key;?>
" name="public_key" required>
            </div>
            <div class="form-group">
                <label for="api_secret_key">Bitcoin Private/Secrete key</label>
                <input id="api_secret_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['btc']->value->btc_private_key;?>
" name="secret_key" required>
            </div>
            <div class="form-group">
                <label for="allow">Accept Bitcoin</label>
                <select id="allow" class="form-control" name="btc_status">
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['btc']->value->btc_status == 1) {?>selected<?php }?>>Accept</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['btc']->value->btc_status == 0) {?>selected<?php }?>>Disabled</option>
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
