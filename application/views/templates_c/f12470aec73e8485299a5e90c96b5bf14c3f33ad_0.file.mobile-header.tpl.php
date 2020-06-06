<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:24
  from 'C:\wamp64\www\acemart\application\views\templates\default\inc\head\mobile-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc4787595_03885193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f12470aec73e8485299a5e90c96b5bf14c3f33ad' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\inc\\head\\mobile-header.tpl',
      1 => 1578223902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55dc4787595_03885193 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li <?php if (!$_smarty_tpl->tpl_vars['url_1']->value) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'free-files') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
free-files">Free Files</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['url_1']->value == 'flash-sale') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
flash-sale">Flash Sale</a></li>
                            
                            <!-- List of category section -->
                            <?php if ($_smarty_tpl->tpl_vars['main_g_cats']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['main_g_cats']->value, 'h_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['h_cat']->value) {
?>

                                    <li <?php if ($_smarty_tpl->tpl_vars['url_2']->value == $_smarty_tpl->tpl_vars['h_cat']->value->main_cat_slug) {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
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
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
pages/<?php echo $_smarty_tpl->tpl_vars['pg']->value->page_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['pg']->value->page_name;?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>           
            </div>
        </div>
    </div>
</div><?php }
}
