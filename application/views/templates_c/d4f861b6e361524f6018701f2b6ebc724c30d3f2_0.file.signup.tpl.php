<?php
/* Smarty version 3.1.33, created on 2019-11-17 00:11:51
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\auth\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd0823745fb35_16641212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f861b6e361524f6018701f2b6ebc724c30d3f2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\auth\\signup.tpl',
      1 => 1573945907,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd0823745fb35_16641212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8436959455dd0823742bc22_16748096', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/auth.tpl");
}
/* {block 'contents'} */
class Block_8436959455dd0823742bc22_16748096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_8436959455dd0823742bc22_16748096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Registration</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Create An Account</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
    
<section class="signup_area section--padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <form id="personal-info-form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
registration" method="POST">
                    <div class="cardify signup_form">
                        <div class="login--header">
                            <h3>Create Your Account</h3>
                        </div>
                        <!-- end .login_header -->
                        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>


                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                        <div class="login--form">

                            <div class="form-group">
                                <label class="control-label" for="first-name">First Name *</label>
                                <input type="text" id="first-name" name="firstname" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="last-name">Last Name *</label>
                                <input type="text" id="last-name" name="lastname" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">UserName</label>
                                <input type="text" id="username" name="username" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">E-mail Address *</label>
                                <input type="email" id="email" name="email" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">Country</label>
                                <select id="country" class="text_field gds-cr" country-data-region-id="gds-cr-one" name="country" required></select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Region *</label>
                                <select name="region" id="gds-cr-one" class="text_field" required></select>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="company-name">Password</label>
                                <input type="password" id="password" name="password" class="text_field" required>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="email">Confirm Password *</label>
                                <input type="password" id="con_pass" name="con_pass" class="text_field" required>
                            </div>

                            <button class="btn btn--md btn--round register_btn" type="submit" name="submit">Register Now</button>
                        </div>
                        <!-- end .login--form -->
                    </div>
                    <!-- end .cardify -->
                </form>
            </div>
            <!-- end .col-md-6 -->
        </div>
        <!-- end .row -->
    </div>
    <!-- end .container -->
</section>


<?php
}
}
/* {/block 'contents'} */
}
