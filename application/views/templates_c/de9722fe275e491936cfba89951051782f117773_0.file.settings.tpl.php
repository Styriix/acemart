<?php
/* Smarty version 3.1.33, created on 2019-11-18 15:52:08
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd2b018262692_55925982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9722fe275e491936cfba89951051782f117773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\settings.tpl',
      1 => 1574088724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd2b018262692_55925982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17561338255dd2b0181bdb95_73351661', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8069951535dd2b01825b327_81926457', 'p_s_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6267668375dd2b01825f065_37054415', 'p_s_head');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_17561338255dd2b0181bdb95_73351661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17561338255dd2b0181bdb95_73351661',
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
                            <a href="index-2.html">Home</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li class="active">
                            <a href="#">Settings</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Author's Settings</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="dashboard-area">

    <div class="dashboard_contents">
        <div class="container">
            <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard_title_area">
                        <div class="dashboard__title">
                            <h3>Account Settings</h3>
                        </div>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <form class="setting_form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-base-info" method="post" class="form-horizontal">
                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse2" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Basic Information
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse show" id="collapse2">
                                <div class="information_wrapper form--fields">
                                    <div class="form-group">
                                        <label for="acname">First Name
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="first-name" name="firstname" class="text_field" placeholder="First Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_firstname;?>
" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="acname">Last Name
                                            <sup>*</sup>
                                        </label>
                                        <input type="text" id="last-name" name="lastname" class="text_field" placeholder="Last Name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_lastname;?>
" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select id="country" class='text_field gds-cr' country-data-region-id="gds-cr-one" name="country" country-data-default-value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_country;?>
" required></select>
                                    </div>

                                    <div class="form-group">
                                        <label for="region">Region</label>
                                        <select class='text_field' name="region" id="gds-cr-one" region-data-default-value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_region;?>
" required></select>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="password">Old Password
                                                    <sup>*</sup>
                                                </label>
                                                <input type="password" id="oldpass" class="text_field" name="oldpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="newpass">New Password
                                                </label>
                                                <input type="password" id="newpass" name="newpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="conpass">Confirm Password
                                                </label>
                                                <input type="password" id="conpass" name="conpass" placeholder="Leave empty to make no password changes">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                    <div class="dashboard_setting_btn">
                                            <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Brief Information
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set toggle_module collapse" id="collapse1">
                                <form class="setting_form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-profile-avater" method="post" class="form-horizontal">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="information_wrapper form--fields">
                                    <div class="">
                                         <div class="form-group">
                                            <label for="authbio">About You</label>
                                            <textarea name="about" id="authbio" class="text_field" placeholder="Short brief about yourself or your account..."><?php echo $_smarty_tpl->tpl_vars['user']->value->user_about;?>
</textarea>
                                        </div>
                                    </div>
                                    <div class="">
                                    <div class="dashboard_setting_btn">
                                            <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                    </div>
                    <!-- end /.col-md-6 -->

                    <div class="col-lg-6">
                        <div class="information_module">
                            <a class="toggle_title" href="#collapse3" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Profile Image & Cover
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <div class="information__set profile_images toggle_module collapse" id="collapse3">
                                <form class="setting_form" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-profile-avater-digcool" enctype="multipart/form-data" method="post" class="form-horizontal">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="information_wrapper">
                                    <div class="profile_image_area">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['user']->value->user_avater;?>
" width=35px alt="Author profile area">
                                        <div class="img_info">
                                            <p class="bold">Profile Image</p>
                                            <p class="subtitle">JPG or PNG 200x200 px</p>
                                        </div>

                                        <label for="cover_photo" class="upload_btn">
                                            <input type="file" id="cover_photo" name="avater">
                                            <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                        </label>
                                    </div>

                                    <div class="prof_img_upload">
                                        <p class="bold">Cover Image</p>
                                        <img src="<?php if ($_smarty_tpl->tpl_vars['user']->value->user_banner) {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['user']->value->user_banner;
} else {
echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/banner.jpg<?php }?>" height="190px" alt="Cover Image">

                                        <div class="upload_title">
                                            <p>JPG, GIF or PNG 750x370 px</p>
                                            <label for="dp" class="upload_btn">
                                                <input type="file" name="banner" id="dp">
                                                <span class="btn btn--sm btn--round" aria-hidden="true">Upload Image</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="dashboard_setting_btn">
                                        <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- end /.information_module -->

                        <div class="information_module">
                            <a class="toggle_title" href="#collapse5" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse1">
                                <h4>Social Profiles
                                    <span class="lnr lnr-chevron-down"></span>
                                </h4>
                            </a>

                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
update-social" method="post">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                            <div class="information__set social_profile toggle_module collapse " id="collapse5">
                                <div class="information_wrapper">
                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-facebook"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: www.facebook.com/name" name="fb" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_fb;?>
">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: www.twitter.com/name" name="tw" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_tw;?>
">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-google-plus"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: name@zubdev.net" name="google" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_google;?>
">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->

                                    <div class="social__single">
                                        <div class="social_icon">
                                            <span class="fa fa-behance"></span>
                                        </div>

                                        <div class="link_field">
                                            <input type="text" class="text_field" placeholder="ex: LinkedIn profile url" name="ln" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_ln;?>
">
                                        </div>
                                    </div>
                                    <!-- end /.social__single -->
                                    <div class="dashboard_setting_btn">
                                        <button type="submit" name="submit" class="btn btn--round btn--md">Save Change</button>
                                    </div>
                                   
                                    <!-- end /.social__single -->
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.social_profile -->
                            </form>
                        </div>
                        <!-- end /.information_module -->

                        
                </div>
                <!-- end /.row -->
            
            <!-- end /form -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.dashboard_menu_area -->
</section>


    
<?php
}
}
/* {/block 'contents'} */
/* {block 'p_s_foot'} */
class Block_8069951535dd2b01825b327_81926457 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_8069951535dd2b01825b327_81926457',
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
class Block_6267668375dd2b01825f065_37054415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_head' => 
  array (
    0 => 'Block_6267668375dd2b01825f065_37054415',
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
