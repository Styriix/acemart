<?php
/* Smarty version 3.1.33, created on 2019-10-15 19:49:59
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\profile\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da606c7c514d5_60531844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ba08b6a6cc7146c0e67f8aa97772898bfeb68d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\profile\\settings.tpl',
      1 => 1571161795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da606c7c514d5_60531844 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4557111975da606c7c2c0c8_62911358', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_816335545da606c7c4bf07_19454202', 'p_s_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5889763145da606c7c4f337_89299406', 'p_s_head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_4557111975da606c7c2c0c8_62911358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4557111975da606c7c2c0c8_62911358',
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
                <li>Settings</li>
            </ul>
        </div>
    </div>  
</div> 

<!-- Settings Page Start Here -->
<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="settings-page-area bg-secondary section-space-bottom">
    <div class="container">
        <div class="row settings-wrapper">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <ul class="settings-title">
                    <li class="active"><a href="#Personal" data-toggle="tab" aria-expanded="false">Personal Information</a></li>
                    <li><a href="#Profile" data-toggle="tab" aria-expanded="false">Profile</a></li>
                    <li><a href="#Social" data-toggle="tab" aria-expanded="false">Social Network</a></li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12"> 
            
                
                    <div class="settings-details tab-content">
                        <div class="tab-pane fade active in" id="Personal">
                            <h2 class="title-section">Personal Information</h2>

                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-base-info" method="post" class="form-horizontal">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="personal-info inner-page-padding"> 
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="first-name" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_firstname;?>
" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" id="last-name" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastname;?>
" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Country / Region</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="custom-select">
                                                        <select id="country" class='select2 form-control gds-cr' country-data-region-id="gds-cr-one" name="country" country-data-default-value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_country;?>
" required>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="custom-select">
                                                        <select class='select2 form-control' name="region" id="gds-cr-one" region-data-default-value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_region;?>
" required>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Old Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="oldpass" name="oldpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">New Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="newpass" name="newpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Confirm Passowrd</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="conpass" name="conpass" placeholder="Leave empty to make no password changes" type="password">
                                            </div>
                                        </div>
                                    
                                   
                                    <button type="submit" name="submit" class="btn btn-success btn-block">Update</button>                                        
                                </div>
                            </form> 
                        </div> 
                        <div class="tab-pane fade" id="Profile">
                            <h3 class="title-section">Public Profile</h3>
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-profile-avater" enctype="multipart/form-data">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="public-profile inner-page-padding"> 
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Avatar</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['user']->value->user_avater;?>
" width="100px" alt="Avatar">
                                            <div class="file-title">Upload a new avatar:</div>
                                            <input type="file" name="avater" id="avater" class="form-control">
                                            <div class="file-size">JPEG 80x80px</div>
                                        </div>
                                    </div> 
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Banner Image</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <img class="img-responsive" src="<?php if ($_smarty_tpl->tpl_vars['user']->value->user_banner) {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['user']->value->user_banner;
} else {
echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/banner.jpg<?php }?>" alt="Avatar">
                                            <div class="file-title">Upload a new homepage image:</div>
                                            <input type="file" name="banner" id="banner" class="form-control">
                                            <div class="file-size">JPEG 590x242</div>
                                        </div>
                                    </div> 
                                    
                                    
                                    <div class="public-profile-item"> 
                                        <div class="public-profile-title"> 
                                            <h4>Profile Text</h4>
                                        </div>
                                        <div class="public-profile-content"> 
                                            <textarea class="profile-heading" rows="5" name="about"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_about;?>
</textarea>
                                            
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form> 
                        </div> 
                        
                        <div class="tab-pane fade" id="Social">
                            <h2 class="title-section">Your Social Networks</h2> 
                            <div class="profile-social inner-page-padding">
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-social" method="post">
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <ul class="social-item"> 
                                        <li>
                                        <div class="social-item-img"><img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/social2.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="fb" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_fb;?>
" type="text">
                                    </li>
                                        <li>
                                        <div class="social-item-img"><img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/social3.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="tw" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_tw;?>
" type="text">
                                    </li>                                      
                                        <li>
                                        <div class="social-item-img"><img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/social6.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="google" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_google;?>
" type="text">
                                    </li>
                                        <li>
                                        <div class="social-item-img"><img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/social7.jpg" alt="badges" class="img-responsive"></div> 
                                        <input class="profile-heading" placeholder="User Name" name="ln" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_ln;?>
" type="text">
                                    </li>                                                                                    
                                </ul>                                       
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Save</button>
                                </form>
                            </div> 
                        </div>                                       
                    </div> 

                
            </div>  
        </div>  
    </div>  
</div> 
<!-- Settings Page End Here -->
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'p_s_foot'} */
class Block_816335545da606c7c4bf07_19454202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_816335545da606c7c4bf07_19454202',
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
/* {/block 'p_s_foot'} */
/* {block 'p_s_head'} */
class Block_5889763145da606c7c4f337_89299406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_head' => 
  array (
    0 => 'Block_5889763145da606c7c4f337_89299406',
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
/* {/block 'p_s_head'} */
}
