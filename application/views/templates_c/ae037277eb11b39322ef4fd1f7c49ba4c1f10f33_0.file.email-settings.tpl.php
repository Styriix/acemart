<?php
/* Smarty version 3.1.33, created on 2019-10-13 04:42:29
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\settings\email-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da28f15159fa0_65819155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae037277eb11b39322ef4fd1f7c49ba4c1f10f33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\settings\\email-settings.tpl',
      1 => 1570934543,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da28f15159fa0_65819155 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5711662955da28f15120d73_40666962', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_5711662955da28f15120d73_40666962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_5711662955da28f15120d73_40666962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Email Configuration</h3>
        <p class="text-info text-center">This configuration allows your application to send email to your users. If the settings not correctly set email will no be sending.</p>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_email_settings" id="basic-form" method="post" novalidate>
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="default_email">Sender Email</label>
                        <input id="default_email" class="form-control" type="email" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_default_email;?>
" name="sender_email" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sender_name">Sender Name</label>
                        <input id="sender_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_display_name;?>
" name="sender_name" minlength="4" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_username">SMTP username</label>
                        <input id="smtp_username" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_username;?>
" name="smtp_user" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_password">SMTP Password</label>
                        <input id="smtp_password" class="form-control" type="password" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_password;?>
" name="smtp_pass" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="smtp_port">SMTP Port</label>
                        <input id="smtp_port" class="form-control" type="number" name="smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_port;?>
" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="smtp_host">SMTP Host</label>
                        <input id="smtp_host" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['smtp']->value->smtp_host;?>
" name="smtp_host" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="smtp_type">SMTP Type</label>
                        <select id="smtp_type" class="form-control" name="smtp_type" required>
                            <option value="">Select Type</option>
                            <option value="tls" <?php if ($_smarty_tpl->tpl_vars['smtp']->value->smtp_type == 'tls') {?>selected<?php }?>>TLS</option>
                            <option value="ssl" <?php if ($_smarty_tpl->tpl_vars['smtp']->value->smtp_type == 'ssl') {?>selected<?php }?>>SSL</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
                </div>
            </div>
        </form>
    </div>
</div>    


<?php
}
}
/* {/block 'contents'} */
}
