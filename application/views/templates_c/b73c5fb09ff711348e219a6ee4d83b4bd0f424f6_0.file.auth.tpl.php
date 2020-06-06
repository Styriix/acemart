<?php
/* Smarty version 3.1.33, created on 2019-11-17 00:10:41
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\layouts\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd081f1427500_09180654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73c5fb09ff711348e219a6ee4d83b4bd0f424f6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\layouts\\auth.tpl',
      1 => 1573945837,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/menu-area.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
  ),
),false)) {
function content_5dd081f1427500_09180654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['descrip'];?>
">
    <meta name='keyword' content="<?php echo $_smarty_tpl->tpl_vars['app']->value['meta_keys'];?>
">


    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
 | Create Account</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/style.css">
    <!-- endinject -->

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['favicon'];?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10353652425dd081f13a79d3_29187294', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2107942795dd081f13ab798_82333675', 'cat_head');
?>


    <link href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/login-register.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/css/geodatasource-countryflag.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/Gettext.js"><?php echo '</script'; ?>
>

</head>

<body class="preload signup-page">

<?php $_smarty_tpl->_subTemplateRender("file:inc/head/menu-area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4785457005dd081f13f0098_46613504', 'contents');
?>


<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>}

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/plugins.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/script.min.js"><?php echo '</script'; ?>
>
    <!-- endinject -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['contf']->value;?>
/js/geodatasource-cr.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        
        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(document).ready(function() {
                $('#user-login').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#signin-btn').prop('disabled', true);
                    $('#signin-btn').text('Please Wait');

                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/user_login',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#password').val("");
                            $('#sign_info').html(data).fadeIn();
                        }
                    });

                    $(document).ajaxComplete(function() {
                        $('#signin-btn').prop('disabled', false);
                        $('#signin-btn').text('Login');
                    });
                });
            });
        
        <?php echo '</script'; ?>
>

        <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-login" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="avatar">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/avatar.png" alt="Avatar">
                            </div>				
                            <h4 class="modal-title">Member Login</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div id="quick_info"></div>
                            <form action="#" method="post" id="quick-login">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">	
                                </div>        
                                <div class="form-group">
                                    <button type="submit" id="btn-log" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo '<script'; ?>
>
                
                    $(document).ready(function() {
                        $('#quick-login').on('submit', function(e) {
                            e.preventDefault();
                            $('#quick_info').hide();
                            $('#btn-log').prop('disabled', true);
                            $('#btn-log').text('Please Wait');

                            $.ajax({
                                url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/user_login',
                                method: 'POST',
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(data) {
                                    $('#password').val("");
                                    $('#quick_info').html(data).fadeIn();
                                }
                            });

                            $(document).ajaxComplete(function() {
                                $('#btn-log').prop('disabled', false);
                                $('#btn-log').text('Login');
                            });
                        });
                    });
                
                <?php echo '</script'; ?>
>


        <?php }?>


        
</body>
</html><?php }
/* {block 'item_deails_css'} */
class Block_10353652425dd081f13a79d3_29187294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_10353652425dd081f13a79d3_29187294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_2107942795dd081f13ab798_82333675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_2107942795dd081f13ab798_82333675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'contents'} */
class Block_4785457005dd081f13f0098_46613504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4785457005dd081f13f0098_46613504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
