<?php
/* Smarty version 3.1.33, created on 2019-10-05 17:54:30
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\account\admin\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d98bcb6356db5_91341585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71f855875e0341a3271ffa2931e8c4365b9d3021' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\account\\admin\\edit.tpl',
      1 => 1570290865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d98bcb6356db5_91341585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17007880535d98bcb631b6d7_30337537', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_17007880535d98bcb631b6d7_30337537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17007880535d98bcb631b6d7_30337537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-title no-border">
                <h4>Edit <?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_lastname;?>
 (<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_username;?>
) Account</h4>
                <hr>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_account/<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_id;?>
/<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_username;?>
" role="form" enctype="multipart/form-data" class="validate">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_firstname;?>
" name="first_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_lastname;?>
" name="last_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_username;?>
" maxlength="50" name="username" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" class="form-control" type="email" value="<?php echo $_smarty_tpl->tpl_vars['u_edit']->value->admin_email;?>
" name="email" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="profile_pic">Profile Picture</label>
                                <input id="profile_pic" class="form-control" type="file" name="profile_pic">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control" type="password" placeholder="Leave empty to make no changes" minlength="8" name="password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" class="form-control" type="password" minlength="8" name="con_password">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-success btn-block">Update Account</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'contents'} */
}
