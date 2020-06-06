<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:27:07
  from 'C:\wamp64\www\acemart\application\views\templates\default\auth\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55e2bbef2a1_53998904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2d95fae522c46411c5bdfbba2b013c1b692aba7' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\auth\\admin.tpl',
      1 => 1571465102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55e2bbef2a1_53998904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12469291685eb55e2bbb7428_15344040', 'login_contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/auth-admin.tpl");
}
/* {block 'login_contents'} */
class Block_12469291685eb55e2bbb7428_15344040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_contents' => 
  array (
    0 => 'Block_12469291685eb55e2bbb7428_15344040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="row login-container column-seperation">
        <div class="col-md-5 col-md-offset-1">
            <h2>
            Sign in to <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>

            </h2>
            <br>
            
        </div>
        <div class="col-md-5">
            <br>
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
admin-login" class="login-form validate" id="login-form" method="post" name="login-form">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Email Address</label>
                        <input class="form-control" id="txtusername" name="txtemail" type="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label class="form-label">Password</label> <span class="help"></span>
                        <input class="form-control" id="txtpassword" name="txtpassword" type="password" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button name="submit" class="btn btn-primary btn-cons pull-right" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
    
<?php
}
}
/* {/block 'login_contents'} */
}
