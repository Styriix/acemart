<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:27:55
  from 'C:\wamp64\www\acemart\application\views\templates\admin\inc\body\left-sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55e5bbe1817_01237286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b085f63627758f14baec93f36dae522cbbdc9d50' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\inc\\body\\left-sidebar.tpl',
      1 => 1582831709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55e5bbe1817_01237286 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-sidebar " id="main-menu">

    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
        <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
                <img src="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default.png' : $tmp);?>
" alt="" data-src="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default.png' : $tmp);?>
" data-src-retina="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default.png' : $tmp);?>
" width="69" height="69" />
            </div>
            <div class="user-info sm">
                <div class="username"><?php echo $_smarty_tpl->tpl_vars['usr']->value['firstname'];?>
 <span class="semi-bold"><?php echo $_smarty_tpl->tpl_vars['usr']->value['lastname'];?>
</span></div>
                <div class="status">Administrative</div>
            </div>
        </div>


        <p class="menu-title sm">NAVIGATE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
        <ul>
            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'dashboard') {?>active <?php }?>start">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
"> <i class="material-icons">home</i> <span class="title">Dashboard</span></a>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'accounts') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">group</i> <span class="title">Accounts</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/admin"> Admin </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/users"> Users </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/accounts/users-balance"> Users Balance </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'category') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">folder</i> <span class="title">Item Categories</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/main-category"> Main Category </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/sub-category"> Sub Category </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/category/child-category"> Child Category </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'product') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">store</i> <span class="title">Products</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/product/add-new"> Add Product </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/product/active-item"> Active Items </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/product/pause-item"> Pause Items </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/product/in-review"> In Review </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'email_templates') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">mail</i> <span class="title">Email Templates</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/activate-email"> Activate Email </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/welcome-email"> Welcome Email </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/user-transaction-email"> User Transaction </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/item-rating-email"> Item Rating </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/item-like-email"> Item Like </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/item-comment-email"> Item Comment </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/item-approve-email"> Item Approve </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/item-reject-email"> Item Reject </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_templates/withdraw-approve-email"> Withdraw Approve </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'transaction') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">screen_share</i> <span class="title">Transactions</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/transaction/paypal"> Paypal </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/transaction/stripe"> Stripe </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/transaction/bitcoin"> Bitcoin </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'payment_gateway') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">spa</i> <span class="title">Payment Gateways</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/payment_gateway/paypal"> Paypal </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/payment_gateway/stripe"> Stripe </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/payment_gateway/bitcoin"> Bitcoin </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'blog') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">web</i> <span class="title">Blog Section</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/blog/categories"> Categories </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/blog/blog-post"> Blog Post </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/blog/comment-setup"> Comment Setup </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'pages') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">spa</i> <span class="title">Pages</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/pages/create-page"> Create New </a> </li>
                    <?php if ($_smarty_tpl->tpl_vars['c_pages']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c_pages']->value, 'pg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
?>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/pages/edit/<?php echo $_smarty_tpl->tpl_vars['pg']->value->page_slug;?>
"> <?php echo $_smarty_tpl->tpl_vars['pg']->value->page_name;?>
 </a> </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php }?>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'withdrawal') {?>active <?php }?>start">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/withdrawal"> <i class="material-icons">money</i> <span class="title">Withdrawals</span></a>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'email_all_members') {?>active <?php }?>start">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_all_members"> <i class="material-icons">mail</i> <span class="title">Email All Users</span></a>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'themes') {?>active <?php }?>start">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/themes"> <i class="material-icons">dashboard</i> <span class="title">Themes</span></a>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'social_login') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">dashboard</i> <span class="title">Social Login</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/social_login/facebook"> Facebook </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/social_login/google"> Google </a> </li>
                </ul>
            </li>

            <li class="<?php if ($_smarty_tpl->tpl_vars['url_2']->value == 'settings') {?>open active <?php }?>"> <a href="javascript:void(0)"><i class="material-icons">settings</i> <span class="title">Settings</span> <span class="selected"></span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/site-settings"> Site Settings </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/email-settings"> Email Settings </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/live-chat"> Live Chat Settings </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/affinate-program"> Affinate Program </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/header-contents"> Header Contents </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/footer-contents"> Footer Contents </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/social-connect"> Social Connect </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/google-recaptcha"> Google Recaptcha </a> </li>
                    <li> <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/settings/amazon-s3-storage"> Amazone S3 Storage </a> </li>
                </ul>
            </li>

        </ul>

        <div class="clearfix"></div>

    </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
</div>
<div class="pull-right">
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
admin-logout"><i class="material-icons">power_settings_new</i></a></div>
</div><?php }
}
