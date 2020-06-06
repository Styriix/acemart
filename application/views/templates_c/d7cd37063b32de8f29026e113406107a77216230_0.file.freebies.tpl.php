<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:24
  from 'C:\wamp64\www\acemart\application\views\templates\default\pack\freebies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc4a8d296_87659298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7cd37063b32de8f29026e113406107a77216230' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\pack\\freebies.tpl',
      1 => 1578894008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55dc4a8d296_87659298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['freebies']->value) {?>
<div class="trending-products-area bg-secondary section-space-default">                
    <div class="container">
        <h2 class="title-default pro-title"> Weekly Free Files </h2>  
    </div>
    <div class="container-fluid" id="isotope-container">
        <div class="row featuredContainer">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freebies']->value, 'new_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->value) {
?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 joomla plugins component">
                <div class="single-item-grid">
                    <div class="item-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['new_item']->value->pre_name;?>
" alt="product" class="img-responsive">
                        <div class="trending-sign-free" data-tips="New Released"><i class="fa fa-gift" aria-hidden="true"></i></div>
                    </div>
                    <div class="item-content">
                        <div class="item-info">
                            <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['new_item']->value->item_name,23);?>
</a></h3>
                            <span><?php echo $_smarty_tpl->tpl_vars['new_item']->value->sub_cat_name;?>
</span>
                            <div class="row" style="botton:5px;">
                                <div class="col-sm-8">
                                    <div class="price-set">
                                        <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;
if ($_smarty_tpl->tpl_vars['new_item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['new_item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['new_item']->value->item_likes);?>
)</small>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="price"><small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['new_item']->value->item_regu_price;?>
</del></small><em class="frees">Free</em></div>
                                </div>
                            </div>
                        </div>
                        <div class="item-profile">
                            <div class="profile-title">
                                <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_lastname;?>
" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['new_item']->value->user_avater;?>
" alt="profile" class="img-responsive img-circle"></div>
                                <span><?php echo $_smarty_tpl->tpl_vars['new_item']->value->user_username;?>
</span>
                            </div>
                            <div class="profile-rating">
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['new_item']->value->item_rate == 0) {?>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 2) {?>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 3) {?>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['new_item']->value->item_rate < 4) {?>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate < 5) {?>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['new_item']->value->item_rate >= 5) {?>
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
            </div>
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
