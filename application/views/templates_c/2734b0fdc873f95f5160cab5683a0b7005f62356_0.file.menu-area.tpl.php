<?php
/* Smarty version 3.1.33, created on 2020-01-17 21:41:12
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\menu-area.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e221be837e775_34096915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2734b0fdc873f95f5160cab5683a0b7005f62356' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\menu-area.tpl',
      1 => 1579293667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e221be837e775_34096915 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-3 col-md-3 col-6 v_middle">
                        <div class="logo">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" alt="logo image" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->

                    <!-- start .col-md-5 -->
                    <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                        <!-- start .author-area -->
                        <div class="author-area">

                            <!-- Became a seller navigate -->
                            <?php if ($_smarty_tpl->tpl_vars['is_login']->value && !$_smarty_tpl->tpl_vars['is_author']->value) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item" class="author-area__seller-btn inline" style="margin-top: 25px;">Become a Seller</a>
                            <?php }?>

                            

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">

                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                <div class="author__avatar">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['usr']->value['avater'];?>
" width="35px" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        <?php echo ucfirst($_smarty_tpl->tpl_vars['usr']->value['username']);?>

                                    </p>
                                    <p class="ammount"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['usr']->value['balance'];?>
</p>
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['usr']->value['username'];?>
">
                                                <span class="lnr lnr-user"></span>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
settings">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-download">
                                                <span class="lnr lnr-cart"></span>Downloads</a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['is_author']->value) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-items">
                                                <span class="lnr lnr-briefcase"></span>My Items</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
withdraw">
                                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
sale-statement">
                                                <span class="lnr lnr-chart-bars"></span>Sale Statements</a>
                                        </li>
                                        <?php }?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
signout">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php } else { ?>
                                <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();" class="author-area__seller-btn inline apply-now-btn">Login / Register</a>
                                <?php }?>


                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">

                            <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">

                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['usr']->value['avater'];?>
" width="35px" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            <?php echo ucfirst($_smarty_tpl->tpl_vars['usr']->value['username']);?>

                                        </p>
                                        <p class="ammount"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['usr']->value['balance'];?>
</p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <!--start .author__notification_area -->

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['usr']->value['username'];?>
">
                                                <span class="lnr lnr-user"></span>My Profile</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
settings">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-download">
                                                <span class="lnr lnr-cart"></span>Downloads</a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['is_author']->value) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-items">
                                                <span class="lnr lnr-briefcase"></span>My Items</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
withdraw">
                                                <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
sale-statement">
                                                <span class="lnr lnr-chart-bars"></span>Sale Statements</a>
                                        </li>
                                        <?php }?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
signout">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value && !$_smarty_tpl->tpl_vars['is_author']->value) {?>
                                <div class="text-center">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
upload-item" class="author-area__seller-btn inline">Become a Seller</a>
                                </div>
                                <?php }?>
                            </div>
                            <?php } else { ?>
                            <a data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();"><span class="lnr lnr-user menu_icon"></span></a>
                            <?php }?>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->





        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12">
                        



                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">HOME</a>
                                       
                                    </li>

                                    <li>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
free-files">Free Files</a>
                                       
                                    </li>

                                    <li>

                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
flash-sale">Flash Sale</a>
                                       
                                    </li>

                                    <?php if ($_smarty_tpl->tpl_vars['main_g_cats']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_g_cats']->value, 'h_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h_cat']->value) {
?>
                                        <li <?php if (!empty($_smarty_tpl->tpl_vars['h_cat']->value->sub_cats)) {?>class="has_dropdown"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
category/<?php echo $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_name;?>
</a>
                                            <?php if (!empty($_smarty_tpl->tpl_vars['h_cat']->value->sub_cats)) {?>
                                            <div class="dropdowns dropdown--menu">
                                                <ul>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['h_cat']->value->sub_cats, 'subs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subs']->value) {
?>
                                                    <li>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subcategory/<?php echo $_smarty_tpl->tpl_vars['subs']->value->sub_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['subs']->value->sub_cat_name;?>
</a>
                                                    </li>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            </div>
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
                                     <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
pages/<?php echo $_smarty_tpl->tpl_vars['pg']->value->page_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['pg']->value->page_name;?>
</a>
                                    </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['is_blog']->value) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog">Blog</a>
                                        </li>
                                    <?php }?>

                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
contact">contact</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row-->
            </div>
            <!-- start .container -->
        </div>
        <!-- end /.mainmenu-->
    </div>
    <!-- end /.menu-area -->
    <?php echo $_smarty_tpl->tpl_vars['head']->value['a_nav'];
}
}
