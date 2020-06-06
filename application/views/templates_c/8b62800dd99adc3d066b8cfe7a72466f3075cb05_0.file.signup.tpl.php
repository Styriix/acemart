<?php
/* Smarty version 3.1.33, created on 2019-10-13 00:52:08
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\auth\signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da259183e7cf2_39964896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b62800dd99adc3d066b8cfe7a72466f3075cb05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\auth\\signup.tpl',
      1 => 1570920723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da259183e7cf2_39964896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11794019095da259183c1be1_55610602', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/auth.tpl");
}
/* {block 'contents'} */
class Block_11794019095da259183c1be1_55610602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11794019095da259183c1be1_55610602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li>Create Account</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->

<!-- Registration Page Area Start Here -->
<div class="registration-page-area bg-secondary section-space-bottom">
    <div class="container">
        <h2 class="title-section">Registration</h2>
        <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

        <div class="registration-details-area inner-page-padding">
            <form id="personal-info-form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
registration" method="POST">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="firstname" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="lastname" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">UserName</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">Country</label>
                            <select id="country" class="form-control gds-cr" country-data-region-id="gds-cr-one" name="country" required></select>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">Region *</label>
                            <select name="region" id="gds-cr-one" class="form-control" required></select>
                        </div>
                    </div>

                </div>

                 <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                           
                        <div class="form-group">
                            <label class="control-label" for="company-name">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">                                          
                        <div class="form-group">
                            <label class="control-label" for="email">Confirm Password *</label>
                            <input type="password" id="con_pass" name="con_pass" class="form-control" required>
                        </div>
                    </div>

                </div>
                                       
                
                
                <div class="row">
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                                           
                        <div class="pLace-order">
                            <button class="update-btn disabled" type="submit" name="submit" value="Login">Create Account</button>
                        </div>
                    </div>
                </div> 
            </form>                      
        </div> 
    </div>
</div>
<!-- Registration Page Area End Here -->
    
<?php
}
}
/* {/block 'contents'} */
}
