<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:51:15
  from 'C:\wamp64\www\application\views\templates\admin\account\admin\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35f53a81b90_63015705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ae7bce62078bcf20e7a7f8d87ee01f867d0ec1' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\account\\admin\\create.tpl',
      1 => 1570229049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35f53a81b90_63015705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3894562715ea35f53a6ecb1_48398404', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_3894562715ea35f53a6ecb1_48398404 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_3894562715ea35f53a6ecb1_48398404',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="row">
    <div class="col-md-12">
        <div class="grid simple">
            <div class="grid-title no-border">
                <h4>Create New Admin Access Account</h4>
                <hr>
            </div>
            <div class="grid-body no-border">
                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_new_admin" role="form" enctype="multipart/form-data" class="validate">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input id="first_name" class="form-control" type="text" name="first_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" class="form-control" type="text" name="last_name"minlength="3" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input id="username" class="form-control" type="text" maxlength="50" name="username" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input id="email" class="form-control" type="email" name="email" required>
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
                                <input id="password" class="form-control" type="password" minlength="8" name="password" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input id="confirm_password" class="form-control" type="password" minlength="8" name="con_password" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-success btn-block">Create New Account</button>
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
