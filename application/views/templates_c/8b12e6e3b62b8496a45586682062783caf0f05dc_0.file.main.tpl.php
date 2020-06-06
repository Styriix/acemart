<?php
/* Smarty version 3.1.33, created on 2020-01-13 05:54:24
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\category\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1bf8006f40c2_46729684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b12e6e3b62b8496a45586682062783caf0f05dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\category\\main.tpl',
      1 => 1578891257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/extra/like_main_cat.tpl' => 1,
  ),
),false)) {
function content_5e1bf8006f40c2_46729684 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18427617195e1bf8005433c2_22989125', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8395425595e1bf8006d7516_44321611', 'cat_foot');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_770172485e1bf8006da1b6_16254001', 'cat_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2593770415e1bf8006e6ef1_33887650', 'item_liker_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/category.tpl");
}
/* {block 'contents'} */
class Block_18427617195e1bf8005433c2_22989125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_18427617195e1bf8005433c2_22989125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li><?php echo $_smarty_tpl->tpl_vars['main_cats']->value->main_cat_name;?>
</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->


<!-- Product Page Grid Start Here -->
<div class="product-page-grid bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="page-controls">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                                <div class="page-controls-sorting">
                                    <div class="dropdown">
                                        <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<i class="fa fa-sort" aria-hidden="true"></i></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Date</a></li>
                                            <li><a href="#">Best Sale</a></li>
                                            <li><a href="#">Rating</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                <div class="layout-switcher">
                                    <ul>
                                        <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>    
                                        <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                            <div class="product-grid-view padding-narrow">
                                <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                                <div class="row">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?> 
                                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                        <div class="single-item-grid">
                                            <div class="item-img">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
" alt="product" class="img-responsive">
                                            </div>
                                            <div class="item-content">
                                                <div class="item-info">
                                                    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->item_name,25);?>
</a></h3>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</span>
                                                    <div class="row" style="botton:5px;">
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->isFree) {?>
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;
if ($_smarty_tpl->tpl_vars['item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->item_likes);?>
)</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price"><small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></small><em class="frees">Free</em></div>
                                                            </div>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->isFlash) {?>
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;
if ($_smarty_tpl->tpl_vars['item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->item_likes);?>
)</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price"><small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></small><em class="flashs"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->fs_price;?>
</em></div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <div class="col-sm-8">
                                                                <div class="price-set">
                                                                    <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;
if ($_smarty_tpl->tpl_vars['item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->item_likes);?>
)</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <div class="price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</div>
                                                            </div>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="item-profile">
                                                    <div class="profile-title">
                                                        <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_lastname;?>
" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" alt="profile" class="img-responsive img-circle"></div>
                                                        <span><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</span>
                                                    </div>
                                                    <div class="profile-rating">
                                                        <ul>
                                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->item_rate == 0) {?>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 2) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 3) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 4) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate < 5) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 5) {?>
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
                                <?php } else { ?>
                                    <h3 class="text-center">No Product Available Yet!</h3>
                                <?php }?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                                    </div>  
                                </div>
                            </div> 
                        </div>
                        <div role="tabpanel" class="tab-pane fade clear products-container" id="list-view">
                            <div class="product-list-view">
                                <?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                <div class="single-item-list">
                                    <div class="item-img">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
" alt="product" class="img-responsive">
                                    </div>
                                    <div class="item-content">
                                        <div class="item-info">
                                            <div class="item-title">
                                                <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</a></h3>
                                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</span>
                                                <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),60);?>
 </p>
                                            </div>
                                            <div class="item-sale-info">
                                                <div class="price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</div>
                                            </div>
                                        </div>
                                        <div class="item-profile">
                                            <div class="profile-title">
                                                <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_lastname;?>
" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" alt="profile" class="img-responsive img-circle"></div>
                                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</span>
                                            </div>
                                            <div class="profile-rating-info">
                                                <ul>
                                                    <li>
                                                        <ul class="profile-rating">
                                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->item_rate == 0) {?>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 2) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 3) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 4) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate < 5) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 5) {?>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                                <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                            <?php }?>
                                                            <li>(<span> <?php echo $_smarty_tpl->tpl_vars['item']->value->item_rate;?>
</span> )</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <h3 class="text-center">No Product Available Yet</h3>
                                <?php }?>
                                



                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                                    </div>  
                                </div>
                            </div>
                        </div>                               
                    </div>                               
                </div>
            </div>





            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Categories</h3>
                            <ul class="sidebar-categories-list">
                                <?php if ($_smarty_tpl->tpl_vars['sub_cats']->value) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub_cats']->value, 'sub_cat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sub_cat']->value) {
?>
                                        <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['sub_cat']->value->sub_cat_name;?>
<span>(<?php echo $_smarty_tpl->tpl_vars['sub_cat']->value->chi_total;?>
)</span></a></li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </ul>
                        </div>
                    </div>


                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Top 10 Sellers</h3>

                            <?php if ($_smarty_tpl->tpl_vars['top_sales']->value) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_sales']->value, 'top');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
?>
                            <div class="sidebar-single-item-grid">
                                <div class="item-img">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['top']->value->pre_name;?>
" alt="product" class="img-responsive">
                                </div>
                                <div class="item-content">
                                    <div class="item-info">
                                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['top']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['top']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['top']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['top']->value->item_name,25);?>
</a></h3>
                                        <span><?php echo $_smarty_tpl->tpl_vars['top']->value->sub_cat_name;?>
</span>
                                        <div class="price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['top']->value->item_regu_price;?>
</div>
                                    </div>
                                    <div class="item-profile">
                                        <div class="profile-title">
                                            <div class="img-wrapper"><img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['top']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['top']->value->user_lastname;?>
" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['top']->value->user_avater;?>
" alt="profile" class="img-responsive img-circle" width="35px"></div>
                                            <span><?php echo $_smarty_tpl->tpl_vars['top']->value->user_username;?>
</span>
                                        </div>
                                        <div class="profile-rating">
                                            <ul>
                                                <?php if ($_smarty_tpl->tpl_vars['top']->value->item_rate == 0) {?>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['top']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['top']->value->item_rate < 2) {?>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['top']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['top']->value->item_rate < 3) {?>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['top']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['top']->value->item_rate < 4) {?>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['top']->value->item_rate < 5) {?>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star filled" aria-hidden="true"></i></li>
                                                    <li><i class="fa fa-star no-filled" aria-hidden="true"></i></li>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['top']->value->item_rate >= 5) {?>
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
            </div>                        
        </div>
    </div>
</div>
<!-- Product Page Grid End Here -->

    
<?php
}
}
/* {/block 'contents'} */
/* {block 'cat_foot'} */
class Block_8395425595e1bf8006d7516_44321611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_foot' => 
  array (
    0 => 'Block_8395425595e1bf8006d7516_44321611',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/vendor/noUiSlider/nouislider.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/wNumb.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'cat_foot'} */
/* {block 'cat_head'} */
class Block_770172485e1bf8006da1b6_16254001 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_770172485e1bf8006da1b6_16254001',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/vendor/noUiSlider/nouislider.min.css">
<?php
}
}
/* {/block 'cat_head'} */
/* {block 'item_liker_script'} */
class Block_2593770415e1bf8006e6ef1_33887650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_2593770415e1bf8006e6ef1_33887650',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_main_cat.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
