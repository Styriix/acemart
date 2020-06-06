<?php
/* Smarty version 3.1.33, created on 2020-01-06 07:32:09
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\foot\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e12d469a7f897_85103114',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef0c834d2c91c1cdee2fecbe1a115421aebc2558' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\foot\\footer.tpl',
      1 => 1578292320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pack/auth.tpl' => 1,
  ),
),false)) {
function content_5e12d469a7f897_85103114 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['foot']->value['foot'];?>

<footer class="footer-area">

        <div class="footer-big section--padding">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="info-footer">
                            <div class="info__logo">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" alt="footer logo">
                            </div>
                            <p class="info--text"><?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</p>
                            <ul class="info-contact">
                                <li>
                                    <span class="lnr lnr-briefcase info-icon"></span>
                                    <span class="info"><?php echo $_smarty_tpl->tpl_vars['cal_item']->value;?>
 items for Sale.</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-cart info-icon"></span>
                                    <span class="info"><?php echo $_smarty_tpl->tpl_vars['cal_sales']->value;?>
 item sold.</span>
                                </li>
                                <li>
                                    <span class="lnr lnr-users info-icon"></span>
                                    <span class="info"><?php echo $_smarty_tpl->tpl_vars['cal_users']->value;?>
 Registerd Users.</span>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.info-footer -->
                    </div>
                    <!-- end /.col-md-3 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-menu">
                            <h4 class="footer-widget-title text--white">Quick Link</h4>
                            <ul>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['main'];?>
">Home</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['main'];?>
free-files">Free Files</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['app']->value['main'];?>
flash-sale">Flash Sale</a></li>
                                <?php if ($_smarty_tpl->tpl_vars['c_pages']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['c_pages']->value, 'pg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pg']->value) {
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
pages/<?php echo $_smarty_tpl->tpl_vars['pg']->value->page_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['pg']->value->page_name;?>
</a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['is_blog']->value) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog"> Blog</a></li>
                                <?php }?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
contact"> Contact Us</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- end /.col-md-5 -->

                    <div class="col-lg-4 col-md-12">
                        <div class="newsletter">
                            <h4 class="footer-widget-title text--white">Follow Us</h4>

                            <!-- start .social -->
                            <div class="social social--color--filled">
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['m_social']->value) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_social']->value, 'social');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social']->value) {
?>
                                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['social']->value->sl_link;?>
" target="_blank"><span class="fa fa-<?php echo $_smarty_tpl->tpl_vars['social']->value->sl_icon;?>
" aria-hidden="true"></s></a></li>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                </ul>
                            </div>
                            <!-- end /.social -->
                        </div>
                        <!-- end /.newsletter -->
                    </div>
                    <!-- end /.col-md-4 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
 market place. All Rigth Reserve.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <?php $_smarty_tpl->_subTemplateRender("file:pack/auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
