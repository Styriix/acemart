<?php
/* Smarty version 3.1.33, created on 2020-01-14 10:20:33
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\pack\flashsale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1d87e1e1eee1_79580416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94e9d1838c6aa727b0ba2ff3433c5922c36d7025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\pack\\flashsale.tpl',
      1 => 1578993628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1d87e1e1eee1_79580416 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['flashes']->value) {?>


    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Flash Sale & Disounts</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashes']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>
                <div class="col-lg-3 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card-small">

                        <div class="product__thumbnail">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['new_item']->value->pre_name;?>
" alt="Product Image">
                            <div class="prod_btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_slug;?>
" class="transparent btn--sm btn--round">More Info</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item-preview/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_slug;?>
"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_name;?>
" class="product_title">
                                <h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['new_item']->value->item_name,23);?>
</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['new_item']->value->user_avater;?>
" data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_lastname;?>
" alt="author image">
                                    <p>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['new_item']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_username;?>
</a>
                                        <span style="padding-left:65px;">
                                            <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;
if ($_smarty_tpl->tpl_vars['new_item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['new_item']->value->item_likes);?>
)</small>
                                        </span>
                                    </<small>
                                </li>
                                <li class="out_of_class_name">
                                    <div class="sell">
                                        <p>
                                            <strong><font color="red"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['new_item']->value->fs_price;?>
</font></strong>
                                        </p>
                                    </div>
                                    <div class="rating product--rating">
                                        <ul>
                                            <?php if ($_smarty_tpl->tpl_vars['new_item']->value->item_rate == 0) {?>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 2) {?>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 3) {?>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 4) {?>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate < 5) {?>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star-o"></span>
                                                </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 5) {?>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                                <li>
                                                    <span class="fa fa-star"></span>
                                                </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['new_item']->value->item_regu_price;?>
</del></span>
                            </div>
                            <a href="#">
                                <span class="lnr lnr-book"></span><?php echo $_smarty_tpl->tpl_vars['new_item']->value->sub_cat_name;?>
</a>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


            </div>
        </div>
    </div>


<?php }
}
}
