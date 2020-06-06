<?php
/* Smarty version 3.1.33, created on 2019-10-05 23:19:17
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9908d545ce43_19831311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b25416b4e2ac685ce0aa3bc270caae3e3541a974' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\auth\\login.tpl',
      1 => 1570310354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d9908d545ce43_19831311 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4561724345d9908d544c3c6_09103896', 'login_contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/auth.tpl");
}
/* {block 'login_contents'} */
class Block_4561724345d9908d544c3c6_09103896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_contents' => 
  array (
    0 => 'Block_4561724345d9908d544c3c6_09103896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
    <div class="row login-container column-seperation">
        <div class="col-md-5 col-md-offset-1">
            <h2>
            Sign in to webarch
            </h2>
            <p>
            Use Facebook, Twitter or your email to sign in.
            <br>
            <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..
            </p>
            <br>
            <button class="btn btn-block btn-info col-md-8" type="button"><span class="pull-left icon-facebook" style="font-style: italic"></span> <span class="bold">Login with Facebook</span></button>
            <button class="btn btn-block btn-success col-md-8" type="button"><span class="pull-left icon-twitter" style="font-style: italic"></span>
            <span class="bold">Login with Twitter</span></button>
        </div>
        <div class="col-md-5">
            <br>
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
/admin-login" class="login-form validate" id="login-form" method="post" name="login-form">
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
