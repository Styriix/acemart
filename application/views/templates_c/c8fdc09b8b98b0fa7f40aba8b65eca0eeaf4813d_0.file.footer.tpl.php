<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:26
  from 'C:\wamp64\www\acemart\application\views\templates\default\inc\foot\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc625c9d4_07024768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8fdc09b8b98b0fa7f40aba8b65eca0eeaf4813d' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\inc\\foot\\footer.tpl',
      1 => 1578224245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pack/auth.tpl' => 1,
  ),
),false)) {
function content_5eb55dc625c9d4_07024768 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['foot']->value['foot'];?>

<!-- Footer Area Start Here -->
<footer>

    <div class="footer-area-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer"><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</h3>
                        <ul class="corporate-address">
                            <li><i class="fa fa-comment" aria-hidden="true"></i><a href="Phone(01)800433633.html"><?php echo $_smarty_tpl->tpl_vars['app']->value['short_descrip'];?>
</a></li>
                            <li><i class="fa fa-file" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['cal_item']->value;?>
 items for Sale.</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['cal_sales']->value;?>
 item sold.</li>
                            <li><i class="fa fa-users" aria-hidden="true"></i><?php echo $_smarty_tpl->tpl_vars['cal_users']->value;?>
 Registerd Users.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Quick Link </h3>
                        <ul class="featured-links">
                            <li>
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
blog">Blog</a></li>
                                    <?php }?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
contact"> Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>                             
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-box">
                        <h3 class="title-bar-left title-bar-footer">Follow Us On</h3>
                        <ul class="footer-social">
                            <?php if ($_smarty_tpl->tpl_vars['m_social']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_social']->value, 'social');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['social']->value) {
?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['social']->value->sl_link;?>
" target="_blank"><i class="fa fa-<?php echo $_smarty_tpl->tpl_vars['social']->value->sl_icon;?>
" aria-hidden="true"></i></a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-area-bottom">
        <div class="container">
            <p>@ <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
 market place. All Rigth Reserve.</p>
        </div>
    </div>
</footer>
<!-- Footer Area End Here -->
<?php $_smarty_tpl->_subTemplateRender("file:pack/auth.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<!-- Main Body Area End Here -->
<?php }
}
