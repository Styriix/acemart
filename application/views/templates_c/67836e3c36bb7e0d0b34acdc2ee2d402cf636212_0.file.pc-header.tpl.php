<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:12:37
  from 'C:\wamp64\www\application\views\templates\default\inc\head\pc-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea356453a4c26_85148134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67836e3c36bb7e0d0b34acdc2ee2d402cf636212' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\inc\\head\\pc-header.tpl',
      1 => 1579320782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea356453a4c26_85148134 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="header2" class="header2-area right-nav-mobile">
    <div class="header-top-bar">
        <div class="container">
            <div class="row">                         
                <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
                    <div class="logo-area">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
"><img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" alt="logo"></a>
                    </div>
                </div> 
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                    <ul class="profile-notification">                                            
                        <li>
                            <div class="notify-contact"></div>
                        </li>                                        
                        <li>
                            <div class="cart-area">
                                <a href="#"><i class="" aria-hidden="true"></i></a>
                                
                            </div>
                        </li>
                        <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>                                        
                            <li>
                                    <div class="apply-btn-area">
                                    <a class="apply-now-btn" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login</a>
                                </div>
                            </li>
                            <li><a class="apply-now-btn-color" data-toggle="modal" href="javascript:void(0)" onclick="openRegisterModal();">Register</a></li>
                        <?php } else { ?>

                            <li>
                                <div class="user-account-info">
                                    <div class="user-account-info-controler">
                                        <div class="user-account-img">
                                            <img class="img-responsive img-circle" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['usr']->value['avater'];?>
" width="40px" alt="profile">
                                        </div>
                                        <div class="user-account-title">
                                            <div class="user-account-name"><?php echo ucfirst($_smarty_tpl->tpl_vars['usr']->value['username']);?>
</div>
                                            <div class="user-account-balance"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['usr']->value['balance'];?>
</div>
                                        </div>
                                        <div class="user-account-dropdown">
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['usr']->value['username'];?>
">My Profile</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
settings">Account Setting</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-download">Downloads</a></li>
                                        <?php if ($_smarty_tpl->tpl_vars['is_author']->value) {?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item">Upload Item</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-items">My Items</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
withdraw">Withdraws</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
sale-statement">Sale Statement</a></li>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['is_login']->value && !$_smarty_tpl->tpl_vars['is_author']->value) {?>
                                        <div><a class="apply-now-btn btn-block" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item" id="logout-button">Became An Author</a></div>
                                        <?php }?>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="apply-now-btn" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
signout" id="logout-button">Logout</a></li>


                        <?php }?>
                    </ul>
                </div>                          
            </div>                          
        </div>
    </div>
    <div class="main-menu-area bg-primaryText" id="sticker">
        <div class="container">
            <nav id="desktop-nav">
                <ul>
                    <li <?php if (!$_smarty_tpl->tpl_vars['url_1']->value) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'free-files') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
free-files">Free Files</a></li>
                    <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'flash-sale') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
flash-sale">Flash Sale</a></li>

                    <!-- Main category listing section -->
                    <?php if ($_smarty_tpl->tpl_vars['main_g_cats']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_g_cats']->value, 'h_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h_cat']->value) {
?>

                            <li <?php if ($_smarty_tpl->tpl_vars['url_2']->value == $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_slug || $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_id == $_smarty_tpl->tpl_vars['main_cat']->value->main_cat_id) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
category/<?php echo $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_name;?>
</a>
                                <?php if (!empty($_smarty_tpl->tpl_vars['h_cat']->value->sub_cats)) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['h_cat']->value->sub_cats, 'subs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subs']->value) {
?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subcategory/<?php echo $_smarty_tpl->tpl_vars['subs']->value->sub_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['subs']->value->sub_cat_name;?>
</a></li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </ul>
                                <?php }?>   
                            </li>

                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                    
                    <?php if ($_smarty_tpl->tpl_vars['c_pages']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c_pages']->value, 'pg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['url_2']->value == $_smarty_tpl->tpl_vars['pg']->value->page_slug) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
pages/<?php echo $_smarty_tpl->tpl_vars['pg']->value->page_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['pg']->value->page_name;?>
</a></li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['is_blog']->value) {?>
                        <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'blog') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog">Blog</a></li>
                    <?php }?>

                    <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'contact') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php echo $_smarty_tpl->tpl_vars['head']->value['a_nav'];
}
}
