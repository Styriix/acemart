<?php
/* Smarty version 3.1.33, created on 2020-05-08 14:05:17
  from 'C:\wamp64\www\acemart\application\views\templates\admin\social-login\facebook.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb5671d139fd4_37962073',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20b426443525d0a246a4617d8395825833049714' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\social-login\\facebook.tpl',
      1 => 1579459344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb5671d139fd4_37962073 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19107552915eb5671d1048b6_06030186', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19107552915eb5671d1048b6_06030186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19107552915eb5671d1048b6_06030186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">FAcebook Social Login API Credentials</h3>
        <h5 class="text-center text-danger"><strong>How To Set Up?</strong></h5>
    </div>
    <div class="grid-body">
    <p>
        <ol class="text-primary">
            <li>Create an App key from: http://developers.facebook.com</li>
            <li>Make sure your Redirect url is set to: <?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/fb_auth</li>
            <li>Copy out your App id and App Secret key</li>
        </ol>
    </p>
    <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_fb_login_key" method="post" class="validate">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="api_key">Facebook Application Key</label>
                <input id="api_key" class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['fb_key']->value->fb_app_key;?>
" name="fb_app_key">
            </div>
            <div class="form-group">
                <label for="api_secret_key">Facebook Application Secret Key</label>
                <input id="api_secret_key" class="form-control" type="password" value="<?php echo $_smarty_tpl->tpl_vars['fb_key']->value->fb_app_secret;?>
" name="fb_app_secret_key">
            </div>
            <div class="form-group">
                <label for="allow">Allow Facebook Login</label>
                <select id="allow" class="form-control" name="fb_app_status">
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['fb_key']->value->fb_status == 1) {?>selected<?php }?>>Accept</option>
                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['fb_key']->value->fb_status == 0) {?>selected<?php }?>>Disabled</option>
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
