<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:12:37
  from 'C:\wamp64\www\application\views\templates\default\pack\auth.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35645e07fa8_82154150',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc34d9504dca1b72b1afcbb6d8ffc7b936512791' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\pack\\auth.tpl',
      1 => 1582560975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35645e07fa8_82154150 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade login" id="loginModal">
    <div class="modal-dialog login animated">
        <div class="modal-content modal-dialog-centered">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login Area</h4>
        </div>
        <div class="modal-body">
            <div class="box">
                    <div class="content">
                                        <div class="social" style="width:100%; margin:auto">
                        <a id="google_login" class="circle google" href="<?php echo $_smarty_tpl->tpl_vars['google_login']->value;?>
">
                            <i class="fa fa-google-plus fa-fw"></i>
                        </a>
                        <a id="facebook_login" class="circle facebook" href="<?php echo $_smarty_tpl->tpl_vars['fb_login']->value;?>
">
                            <i class="fa fa-facebook fa-fw"></i>
                        </a>
                    </div>
                    <div class="division">
                        <div class="line l"></div>
                            <span>Authentication</span>
                        <div class="line r"></div>
                    </div>
                    <div id="sign_info"></div>
                    <div class="form loginBox">
                         <form action="#" method="POST" id="user-login">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input class="form-control" type="text" name="username" placeholder="UserName" required>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Password" required>
                                <button class="btn-default btn-login" id="signin-btn" type="submit" value="Login">Login</button>
                        </form>
                    </div>
                    </div>
            </div>
            <div class="box">
                <div class="content registerBox" style="display:none;">
                    <div class="form">
                    <form method="POST" id="reg_user" data-remote="true" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
registration" accept-charset="UTF-8">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['myRef']->value) {?>
                        <input type="hidden" name="ref" value="<?php echo $_smarty_tpl->tpl_vars['myRef']->value;?>
">
                    <?php }?>
                    <div class="row">
                        <div class="col-xs-6">
                            <input type="text" id="first-name" name="firstname" class="form-control"placeholder="FirstName" required>
                        </div>

                        <div class="col-xs-6">
                            <input type="text" id="last-name" name="lastname" class="form-control"placeholder="Lastname" required>
                        </div>

                        <div class="col-xs-12">
                            <input type="text" id="user-name" name="username" class="form-control"placeholder="Username" required>
                        </div>

                        <div class="col-xs-12">
                            <input type="text" id="last-name" name="email" class="form-control"placeholder="Email" required>
                        </div>

                        <div class="col-xs-6">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="col-xs-6">
                            <input type="password" id="con_pass" name="con_pass" class="form-control" placeholder="Confirm Password" required>
                        </div>
                        <div class="col-xs-12">
                            <?php if ($_smarty_tpl->tpl_vars['robot']->value['isRobotCheck']) {?>
                            <div class="">
                                <div class="g-recaptcha form-field"></div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <input class="btn btn-default btn-register" id="reg_btn" type="submit" value="Create account" name="commit" <?php if ($_smarty_tpl->tpl_vars['robot']->value['isRobotCheck']) {?>disabled<?php }?>>
                    </form>
                    </div>
                </div>

                    <div class="form passBox" style="display:none;">
                         <form action="#" method="POST" id="reset-pass">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input class="form-control" type="text" name="pass_user" placeholder="UserName" required>
                                <input class="form-control" type="text" name="pass_email" id="email" placeholder="email" required>
                                <button class="btn-default btn-login" id="findpass" type="submit" value="Login">Reset Password</button>
                        </form>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="forgot login-footer">
                <span>Looking to
                        <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
                <span>Or <a href="javascript: showPassForm();">Recover Password</a></span>
            </div>
            <div class="forgot register-footer" style="display:none">
                    <span>Already have an account?</span>
                    <a href="javascript: showLoginForm();">Login</a>
            </div>
        </div>
        </div>
    </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['robot']->value['isRobotCheck']) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
    
    var onloadCallback = function() {
        var captchaContainer = document.querySelector('.g-recaptcha');
        grecaptcha.render(captchaContainer, {
          'sitekey' : '<?php echo $_smarty_tpl->tpl_vars['robot']->value['p_key'];?>
'
        });
        document.querySelector('.reg-btn[type="submit"]').disabled = false;
    };
    
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en&onload=onloadCallback&render=explicit" async defer><?php echo '</script'; ?>
>
    <?php }
}
}
