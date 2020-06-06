<?php
/* Smarty version 3.1.33, created on 2019-12-27 07:22:31
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\google_recaptcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e05a327dd5fc6_11389887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a0e54f8701c931db0c64e2a55f050569973b6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\google_recaptcha.tpl',
      1 => 1577427745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e05a327dd5fc6_11389887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10897064885e05a327d96e06_55507583', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_10897064885e05a327d96e06_55507583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_10897064885e05a327d96e06_55507583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="grid simple">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_google_recaptcha" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="card grid-body">
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="public_key">Public key</label>
                            <input id="public_key" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['robot']->value['p_key'];?>
" type="text" name="pb_key">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="sceret_key">Secret Key</label>
                            <input id="sceret_key" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['robot']->value['s_key'];?>
" type="text" name="sc_key">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="enable">Activation</label>
                            <select id="enable" class="form-control" name="enable">
                                <option value="1" <?php if ($_smarty_tpl->tpl_vars['robot']->value['enable'] == 1) {?>selected<?php }?>>Activate</option>
                                <option value="0" <?php if ($_smarty_tpl->tpl_vars['robot']->value['enable'] != 1) {?>selected<?php }?>>DeActivate</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php
}
}
/* {/block 'contents'} */
}
