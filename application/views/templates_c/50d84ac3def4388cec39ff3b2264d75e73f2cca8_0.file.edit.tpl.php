<?php
/* Smarty version 3.1.33, created on 2019-10-09 22:40:43
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\account\users\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9e45cb5d4285_92475712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50d84ac3def4388cec39ff3b2264d75e73f2cca8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\account\\users\\edit.tpl',
      1 => 1570652175,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9e45cb5d4285_92475712 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15087941905d9e45cb56ae18_96941595', 'contents');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5696735555d9e45cb5cd607_82785789', 'contf_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17315767595d9e45cb5d18f8_29106978', 'contf_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_15087941905d9e45cb56ae18_96941595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15087941905d9e45cb56ae18_96941595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Update <b><?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_username;?>
)<b> Accounts</h4>
    </div>
    <div class="grid-body">
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/user_account/<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_username;?>
" class="validate" enctype="multipart/form-data"enc>
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">FirstName</label>
                        <input id="firstname" class="form-control" type="text" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_firstname;?>
" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">LastName</label>
                        <input id="lastname" class="form-control" type="text" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_lastname;?>
" minlength="3" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input id="username" class="form-control" type="text" name="username"value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_username;?>
" minlength='4' maxlength="50" disabled>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input id="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_email;?>
" type="email" name="email" disabled>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="avater">Avater</label>
                        <input id="avater" class="form-control" type="file" name="avater">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="status">Account Status</label>
                        <select id="status" class="form-control" name="status" required>
                            <option value="">Select Status</option>
                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['u_edit']->value->user_status == 1) {?>selected<?php }?>>Active</option>
                            <option value="2" <?php if ($_smarty_tpl->tpl_vars['u_edit']->value->user_status == 2) {?>selected<?php }?>>Blocked</option>
                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['u_edit']->value->user_status == 0) {?>selected<?php }?>>Not Verified</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country"  country-data-default-value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_country;?>
" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="region">Region</label>
                        <select id="gds-cr-one" class="form-control" name="region" region-data-default-value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->user_region;?>
" required>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" minlength="8" name="password" placeholder="Leave empty to make no changes">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="con_pass">Confirm Password</label>
                        <input id="con_pass" class="form-control" type="password" name="con_pass">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Update User Account</button>
                </div>

            </div>
        </form>
    </div>
</div>

<?php
}
}
/* {/block 'contents'} */
/* {block 'contf_head'} */
class Block_5696735555d9e45cb5cd607_82785789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_head' => 
  array (
    0 => 'Block_5696735555d9e45cb5cd607_82785789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/css/geodatasource-countryflag.css">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/Gettext.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'contf_head'} */
/* {block 'contf_foot'} */
class Block_17315767595d9e45cb5d18f8_29106978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_foot' => 
  array (
    0 => 'Block_17315767595d9e45cb5d18f8_29106978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/geodatasource-cr.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'contf_foot'} */
}
