<?php
/* Smarty version 3.1.33, created on 2020-01-13 06:41:38
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\pack\pop-item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1c031201cfe3_41717212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fb257fd6f8e938a3df02c3c06433d83b88b165' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\pack\\pop-item.tpl',
      1 => 1578894092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1c031201cfe3_41717212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!-- Trending Products Area Start Here -->
<div class="trending-products-area section-space-default">                
    <div class="container">
        <h2 class="title-default pro-title">Popular Products</h2>  
    </div>
    <div class="container=fluid">
        <div class="fox-carousel dot-control-textPrimary"
            data-loop="true"
            data-items="4"
            data-margin="30"
            data-autoplay="true"
            data-autoplay-timeout="10000"
            data-smart-speed="2000"
            data-dots="false"
            data-nav="true"
            data-nav-speed="false"
            data-r-x-small="1"
            data-r-x-small-nav="false"
            data-r-x-small-dots="true"
            data-r-x-medium="2"
            data-r-x-medium-nav="false"
            data-r-x-medium-dots="true"
            data-r-small="2"
            data-r-small-nav="false"
            data-r-small-dots="true"
            data-r-medium="3"
            data-r-medium-nav="false"
            data-r-medium-dots="true"
            data-r-large="4"
            data-r-large-nav="false"
            data-r-large-dots="true">
            <?php if ($_smarty_tpl->tpl_vars['pops']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pops']->value, 'pop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pop']->value) {
?>
            <div class="single-item-grid">
                <div class="item-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['pop']->value->pre_name;?>
" alt="product" class="img-responsive">
                </div>
                <div class="item-content">
                    <div class="item-info">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['pop']->value->item_name,25);?>
</a></h3>
                        <span><?php echo $_smarty_tpl->tpl_vars['pop']->value->sub_cat_name;?>
</span>
                        <div class="row" style="botton:5px;">
                            <?php if ($_smarty_tpl->tpl_vars['pop']->value->isFree) {?>
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;
if ($_smarty_tpl->tpl_vars['pop']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['pop']->value->item_likes);?>
)</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['pop']->value->item_regu_price;?>
</del></small><em class="frees">Free</em></div>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->isFlash) {?>
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;
if ($_smarty_tpl->tpl_vars['pop']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['pop']->value->item_likes);?>
)</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['pop']->value->item_regu_price;?>
</del></small><em class="flashs"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['pop']->value->fs_price;?>
</em></div>
                                </div>
                            <?php } else { ?>
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;
if ($_smarty_tpl->tpl_vars['pop']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['pop']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['pop']->value->item_likes);?>
)</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['pop']->value->item_regu_price;?>
</div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="item-profile">
                        <div class="profile-title">
                            <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['pop']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['pop']->value->user_lastname;?>
" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['pop']->value->user_avater;?>
" alt="profile" class="img-responsive img-circle"></div>
                            <span><?php echo $_smarty_tpl->tpl_vars['pop']->value->user_username;?>
</span>
                        </div>
                        <div class="profile-rating">
                            <ul>
                                <?php if ($_smarty_tpl->tpl_vars['pop']->value->item_rate == 0) {?>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['pop']->value->item_rate < 2) {?>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['pop']->value->item_rate < 3) {?>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['pop']->value->item_rate < 4) {?>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->item_rate < 5) {?>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['pop']->value->item_rate >= 5) {?>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                <?php }?>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            

        </div>
    </div>
</div>
<!-- Trending Products Area End Here --><?php }
}
