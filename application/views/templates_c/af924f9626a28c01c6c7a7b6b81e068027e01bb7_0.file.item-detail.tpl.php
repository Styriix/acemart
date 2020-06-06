<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:27:20
  from 'C:\wamp64\www\application\views\templates\default\public\item-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea359b8affa71_55553083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af924f9626a28c01c6c7a7b6b81e068027e01bb7' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\public\\item-detail.tpl',
      1 => 1582571104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea359b8affa71_55553083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6106714435ea359b85c9765_32338653', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10117014975ea359b8ae1ca7_51049147', 'item_details_js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15956344655ea359b8ae6536_42194265', 'item_deails_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14930291045ea359b8aeac49_99226913', 'stripe_js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21383972195ea359b8aedf54_18366816', 'flip_timer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/item-show.tpl");
}
/* {block 'contents'} */
class Block_6106714435ea359b85c9765_32338653 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_6106714435ea359b85c9765_32338653',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\wamp64\\www\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<!-- Inner Page Banner Area Start Here -->
<div class="pagination-area bg-secondary">
    <div class="container">
        <div class="pagination-wrapper">
            <ul>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a><span> -</span></li>
                <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</a><span> -</span></li>
                <li><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->

<!-- Product Details Page Start Here -->
<div class="product-details-page bg-secondary">                
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
" alt="product" class="img-responsive">
                    </div>                                
                    <h2 class="title-inner-default"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</h2>
                    <p class="para-inner-default"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_description;?>
</p>


                    <div class="product-tag-line">
                        <ul class="product-tag-item">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item-preview/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" target="_blank">Live Preview</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                <?php if ($_smarty_tpl->tpl_vars['is_free']->value) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
getfreebie/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">Free Download</a></li>
                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['is_purchased']->value && $_smarty_tpl->tpl_vars['u_rate']->value) {?>
                                <li><a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter">Leave A Review</a></li>
                            <?php }?>
                        </ul>


                        <ul class="social-default">
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/home?status=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
 " target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
&title=Buy <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
&summary=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
&source=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
&media=&description=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        </ul>
                

                    </div>
                    <div class="product-details-tab-area">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <ul class="product-details-title">
                                    <li><a class="active" href="#comment" data-toggle="tab" aria-expanded="false">Support</a></li>
                                    <li><a href="#review" data-toggle="tab" aria-expanded="false">Reviews</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="comment">
                                        <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                        <section class="comment-list">

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'cmt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->value) {
?>
                                            <!-- First Comment -->
                                            <article class="row">
                                                <div class="col-md-2 col-sm-2 hidden-xs">
                                                <figure class="thumbnail">
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['cmt']->value->user_avater;?>
" />
                                                    <figcaption class="text-center"><?php echo $_smarty_tpl->tpl_vars['cmt']->value->user_username;?>
</figcaption>
                                                </figure>
                                                </div>
                                                <div class="col-md-10 col-sm-10">
                                                <div class="panel panel-default arrow left">
                                                    <div class="panel-body">
                                                    <header class="text-left">
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->user_id == $_smarty_tpl->tpl_vars['cmt']->value->cmt_user_id) {?>
                                                            <div class="comment-user text-danger"><i class="fa fa-user"></i><b> Author</b></div>
                                                        <?php } elseif ($_smarty_tpl->tpl_vars['cmt']->value->u_cmt) {?>
                                                            <div class="comment-user text-primary"><i class="fa fa-user"></i><b> Purchased</b></div>
                                                        <?php }?>
                                                        <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['cmt']->value->cmt_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</time>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                        <?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_body;?>

                                                        </p>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                                    <p class="text-right"><a class="btn btn-default btn-sm" data-toggle="collapse" href="#reply<?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_id;?>
" aria-expanded="false" aria-controls="reply<?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_id;?>
"><i class="fa fa-reply"></i> reply</a></p>
                                                    </div>
                                                    <div class="collapse" id="reply<?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_id;?>
">
                                                        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
reply-cmt/<?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">
                                                            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                            <div class="form-group">
                                                                <textarea id="reply_cmt" class="form-control" name="r_cmt" rows="3" required></textarea>
                                                            </div>
                                                            <button type="submit" name="submit" class="btn btn-success btn-sm btn-block">Reply To Comment</button>
                                                        </form>
                                                    </div>
                                                    <?php }?>
                                                </div>
                                                </div>
                                            </article>
                                            <?php if ($_smarty_tpl->tpl_vars['cmt']->value->replies) {?>
                                            <!-- Second Comment Reply -->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmt']->value->replies, 'c_r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c_r']->value) {
?>
                                            <article class="row">
                                                <div class="col-md-2 col-sm-2 col-md-offset-1 col-sm-offset-0 hidden-xs">
                                                <figure class="thumbnail">
                                                    <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['c_r']->value->user_avater;?>
" />
                                                    <figcaption class="text-center"><?php echo $_smarty_tpl->tpl_vars['c_r']->value->user_username;?>
</figcaption>
                                                </figure>
                                                </div>
                                                <div class="col-md-9 col-sm-9">
                                                <div class="panel panel-default arrow left">
                                                    <div class="panel-heading right">Reply</div>
                                                    <div class="panel-body">
                                                    <header class="text-left">
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->user_id == $_smarty_tpl->tpl_vars['c_r']->value->rp_user_id) {?>
                                                            <div class="comment-user text-danger"><i class="fa fa-user"></i><b> Author</b></div>
                                                        <?php }?>
                                                        <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['c_r']->value->rp_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</time>
                                                    </header>
                                                    <div class="comment-post">
                                                        <p>
                                                        <?php echo $_smarty_tpl->tpl_vars['c_r']->value->rp_body;?>

                                                        </p>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </article>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            
                                            
                                            </section> 
                                            <?php } else { ?>
                                                <h3 class="text-center">No Comment Yet</h3>
                                            <?php }?>     
                                            <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
post-comment/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                <div class="form-group">
                                                    <textarea id="my-textarea" class="form-control" name="cmt_body" rows="6" placeholder="Support questions or Comments" required></textarea>
                                                </div>
                                                <button type="submit" name="submit" class="btn btn-primary btn-block">Post Comment</button>
                                            </form>
                                            <?php }?>                
                                    </div>
                                    <div class="tab-pane fade" id="review">                           
                                        <div class="card">
                                            <div class="card-body">
                                                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                                                <div class="row">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                                                    <div class="col-md-2">
                                                        <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['review']->value->user_avater;?>
" class="img img-rounded img-fluid"/>
                                                        <p class="text-secondary text-center"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['review']->value->rating_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</p>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <p>
                                                            <a class="float-left" href=""><strong><?php echo $_smarty_tpl->tpl_vars['review']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['review']->value->user_lastname;?>
</strong></a>
                                                            <?php if ($_smarty_tpl->tpl_vars['review']->value->rating_value == 1) {?>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 2) {?>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 3) {?>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 4) {?>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="fa fa-star"></i></span>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value >= 5) {?>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                                <span class="float-right"><i class="filled fa fa-star"></i></span>
                                                            <?php }?>

                                                    </p>
                                                    <div class="clearfix"></div>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['review']->value->rating_comment;?>
</p>
                                                        <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] == $_smarty_tpl->tpl_vars['review']->value->user_id) {?>
                                                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
remove-rating" method="post" id="rmv_rate">
                                                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                                <input type="hidden" name="r" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->rating_id;?>
">
                                                                <a href="javascript:{}" onclick="document.getElementById('rmv_rate').submit(); return false;"><p class="text-danger">Delete</p></a>
                                                            </form>
                                                        <?php }?>
                                                    </div>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                </div>
                                                <?php } else { ?>
                                                    <h4 class="text-center">No Review Yet</h4>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>                                          
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['p_authors']->value) {?>
                    <h3 class="title-inner-section">More Product by <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value->user_username);?>
</h3>                               
                    <div class="row more-product-item-wrapper">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_authors']->value, 'p_author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_author']->value) {
?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                            <div class="more-product-item">
                                <div class="more-product-item-img">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['p_author']->value->thumb_name;?>
" alt="product" class="img-responsive">
                                </div>
                                <div class="more-product-item-details">
                                    <h4><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p_author']->value->item_name,25);?>
</a></h4>
                                    <div class="p-title"><?php echo $_smarty_tpl->tpl_vars['p_author']->value->sub_cat_name;?>
</div>
                                    <div class="p-price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['p_author']->value->item_regu_price;?>
</div>
                                </div>
                            </div>
                        </div>  
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                    </div>
                    <?php }?>

                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Product Price</h3>
                            <ul class="sidebar-product-price">
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['is_flash']->value) {?>
                                        <small><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></small> <strong><font color="blue"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['fs_price']->value;?>
</font></strong>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>

                                    <?php }?>
                                </li>
                                <li>
                                    <form id="personal-info-form">
                                        <div class="custom-select">
                                            <select id="categories" class='select2'>
                                                <option value="0">Regular</option>
                                            </select>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                            <ul class="sidebar-product-btn">
                                <li><a href="#" class="add-to-favourites-btn" id="favourites-button"><i class="fa fa-lock" aria-hidden="true"></i> Secure Payment</a></li>
                                <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>
                                    <li><a href="#myModal" class="buy-now-btn" data-toggle="modal" id="buy-button">Buy Now <strong><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
if (!$_smarty_tpl->tpl_vars['is_flash']->value) {
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;
} else {
echo $_smarty_tpl->tpl_vars['fs_price']->value;
}?></strong></a></li>
                                <?php } elseif ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['is_purchased']->value) {?>
                                        <li><div class="text-primary">Your have already purchase this item you can download</div></li>
                                            <li>
                                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
download" method="post" id='download'>
                                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                    <input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                                    <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Download Now</button>
                                                </form>
                                            </li>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['is_author']->value) {?>
                                                <li><div class="text-danger">You are the auhor of this item you can download</div></li>
                                                <li>
                                                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
download" method="post" id='download_a'>
                                                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                        <input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                                        <button type="submit" name="submit" class="btn btn-success btn-block btn-lg">Download Now</button>
                                                    </form>
                                                </li>
                                            <?php } else { ?>
                                                <li><a href="#buyItem" class="buy-now-btn" data-toggle="modal" id="buy-button">Buy Now <strong><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
if (!$_smarty_tpl->tpl_vars['is_flash']->value) {
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;
} else {
echo $_smarty_tpl->tpl_vars['fs_price']->value;
}?></strong></a></li>   
                                        <?php }?>
                                <?php }?>
                            </ul>
                        </div>
                    </div>     
                    <?php if ($_smarty_tpl->tpl_vars['is_flash']->value) {?>
                    <div class="" style="background:red;">
                        <div class="clock" style="top:23px;"></div>
                        <div class="text-center" style="color:#501804;">This item is <b>50%</b> Discount for Limited Time Get it now!</div>
                    </div>
                    <?php }?>                           
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <ul class="sidebar-sale-info">
                                <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                                <li><?php echo $_smarty_tpl->tpl_vars['item_sales']->value;?>
</li>
                                <li>Sales</li>                                           
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Product Information</h3>
                            <ul class="sidebar-product-info">
                                <li>Category:<span><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->main_cat_name;?>
</a> / <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</a> / <a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value->child_cat_name;?>
</a></span></li>
                                <li>Released On:<span> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_created_at)->format('d F, Y');?>
</span></li>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->item_updated_at) {?>
                                    <li>Last Update:<span> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_updated_at)->format('d F, Y');?>
</span></li>
                                <?php }?>
                                <li>Version:<span> <?php echo $_smarty_tpl->tpl_vars['item']->value->item_version;?>
</span></li>
                                <li>Tags<span> <?php echo $_smarty_tpl->tpl_vars['item']->value->item_tags;?>
</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Share & Earn</h3>
                            <div class="sidebar-author-info">
                                <div class="ssk-block" style="width: auto">
                                    <p>You will earn <b><?php echo $_smarty_tpl->tpl_vars['app']->value['affi_rate'];?>
%</b> on each sale when your friends buy via your ref link.</p>
                                    <hr>
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;
if ($_smarty_tpl->tpl_vars['is_login']->value) {?>?ref=<?php echo $_smarty_tpl->tpl_vars['usr']->value['username'];
}?>" target="_blank" class="ssk ssk-text ssk-facebook">Share On Facebook</a>
                                    <a href="https://twitter.com/home?status=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;
if ($_smarty_tpl->tpl_vars['is_login']->value) {?>?ref=<?php echo $_smarty_tpl->tpl_vars['usr']->value['username'];
}?>" target="_blank" class="ssk ssk-text ssk-twitter">Share On Twitter</a>
                                    <a href="#" class="ssk ssk-text ssk-google-plus">Share On Google</a>
                                    <hr>
                                    <input style="width:100%;" onClick="this.select();" value="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;
if ($_smarty_tpl->tpl_vars['is_login']->value) {?>?ref=<?php echo $_smarty_tpl->tpl_vars['usr']->value['username'];
}?>" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title">Item Author</h3>
                            <div class="sidebar-author-info">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" width="80px" alt="product" class="img-responsive">
                                <div class="sidebar-author-content">
                                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</h3>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
" class="view-profile">View Profile</a>
                                </div>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['c_badge']->value) {?>
                            <span><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/badges/collector/<?php echo $_smarty_tpl->tpl_vars['c_badge']->value;?>
" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Buyer Level <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['c_badge']->value,'.png','');?>
: Purchase between <?php echo $_smarty_tpl->tpl_vars['c_min']->value;?>
 to <?php echo $_smarty_tpl->tpl_vars['c_max']->value;?>
 Items"></span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['s_badge']->value) {?>
                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/badges/sell/<?php echo $_smarty_tpl->tpl_vars['s_badge']->value;?>
" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Seller Level <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['s_badge']->value,'.png','');?>
: Sold between <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['s_min']->value;?>
 and <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['s_max']->value;?>
 worth of items"></span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['a_badge']->value) {?>
                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/badges/affiliate/<?php echo $_smarty_tpl->tpl_vars['a_badge']->value;?>
" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Affilate Level <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['a_badge']->value,'.png','');?>
: Refer between <?php echo $_smarty_tpl->tpl_vars['a_min']->value;?>
 and <?php echo $_smarty_tpl->tpl_vars['a_max']->value;?>
 Users"></span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['giftBadge']->value) {?>
                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/badges/oth/7.png" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="Giffter! Has an item on Free File of the Week!"></span>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['flashBadge']->value) {?>
                                <span><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/badges/oth/6.png" alt="" style="width:30px; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="MindSetter! Has an item on Flash Sale of the Week!"></span>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>                        
        </div>
    </div>
</div>
<!-- Product Details Page End Here -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Leave A Review On This Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subnit-review/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <input type="radio" name="r_value" value="1" required> 1. <b>Bad</b>
                <input type="radio" name="r_value" value="2" required> 2. <b>Fair</b>
                <input type="radio" name="r_value" value="3" required> 3. <b>Okay</b>
                <input type="radio" name="r_value" value="4" required> 4. <b>Good</b>
                <input type="radio" name="r_value" value="5" required> 5. <b>Excelent</b>
            </div>

            <div class="form-group">
                <textarea id="my-textarea" class="form-control" name="r_cmt" rows="3" placeholder="Review Comment"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Submit Review</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
<!-- Modal -->
<div class="modal fade" id="buyItem" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="">
            <div class="row">
                <div class="paymentCont">
                    <div class="headingWrap">
                            <h3 class="headingTop text-center">Select Your Payment Method</h3>	
                            <p class="text-center">Purchasing <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</strong> For <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</p>
                    </div>
                    

                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status == 1) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status != 1) {?>col-md-12 col-xs-12 col-sm-12<?php } else { ?>col-md-6 col-xs-6 col-sm-6<?php }?>">
                            <center><div id="paypal-button"></div></center>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status == 1) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status != 1) {?>col-md-12 col-xs-12 col-sm-12<?php } else { ?>col-md-6 col-xs-6 col-sm-6<?php }?>">
                            <div id="buynow">
                                <button class="btn btn-success btn-block btn-rounded stripe-button" id="payButton">Pay With Stripe</button>
                                <input type="hidden" id="payProcess" value="0"/>
                            </div>
                        </div>
                        <?php }?>
                        </div>

                        <div class="row">

                        <?php if ($_smarty_tpl->tpl_vars['btc']->value->btc_status == 1) {?>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-6">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
checkout/bitcoin_gateway" id="payWithBTC" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWithBTC').submit();"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/pay/btc.png" style="height:100px" alt=""></a></center>
                            </form>
                        </div>
                        <?php }?>

                        <div class="<?php if ($_smarty_tpl->tpl_vars['btc']->value->btc_status == 1) {?>col-md-6 col-sm-6 col-xs-6 col-6<?php } else { ?>col-md-12 col-sm-12 col-xs-12 col-12<?php }?>">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
checkout/buy_with_credit" id="payWitCredit" method="post" data-toggle="tooltip" data-placement="top" title="Your Available Bal Is: <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['usr']->value['balance'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWitCredit').submit();"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/pay/credit.png" style="height:100px" alt=""></a></center>
                            </form>
                        </div>
                        </div>

                        <div class="row">

                        <div class="col-md-12 text-center">
                            <div id="paymentDetails" style="display: none;">
                                <p class="aligncenter green bigger">Your payment was successful.</p>
                                <h4 class="text-center">Payment Information</h4>
                                <p>
                                Order ID: <span class="text-center" id="orderID">&#x3C;ORDER_ID&#x3E;</span><br/>
                                Transaction ID: <span class="text-center" id="txnID">&#x3C;TX_ID&#x3E;</span><br/>
                                </p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-download" type="button" class="btn btn-success btn-block">Click Here If Not Redirected</a>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>






<?php echo '<script'; ?>
 src="https://www.paypalobjects.com/api/checkout.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

paypal.Button.render({
    // Configure environment
    env: '<?php echo $_smarty_tpl->tpl_vars['env']->value;?>
',
    client: {
        sandbox: '<?php echo $_smarty_tpl->tpl_vars['sandbox']->value;?>
',
        production: '<?php echo $_smarty_tpl->tpl_vars['production']->value;?>
'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'responsive',
        color: 'gold',
        shape: 'pill',
        label: 'buynow',
        tagline: 'true',
        fundingicons: 'true',
    },
    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
           transactions: [
            {
                amount: { total: '<?php if (!$_smarty_tpl->tpl_vars['is_flash']->value) {
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;
} else {
echo $_smarty_tpl->tpl_vars['fs_price']->value;
}?>', currency: '<?php echo $_smarty_tpl->tpl_vars['app']->value['currency_code'];?>
' },
                item_list: {
                    items: [
                        {
                        name: '<?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
',
                        description: 'Purchase <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
 From <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
',
                        quantity: '1',
                        price: '<?php if (!$_smarty_tpl->tpl_vars['is_flash']->value) {
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;
} else {
echo $_smarty_tpl->tpl_vars['fs_price']->value;
}?>',
                        currency: '<?php echo $_smarty_tpl->tpl_vars['app']->value['currency_code'];?>
' 
                        }
                    ]
                }
            }
        ]
      });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute()
        .then(function () {
            // Show a confirmation message to the buyer
            //window.alert('Thank you for your purchase!');
            
            // Redirect to the payment process page
            window.location = "<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
checkout/process?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&itd=<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
&pay_method=paypal";
        });
    }
}, '#paypal-button');

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

$("#paypal-button").trigger('click');

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

    
var handler = StripeCheckout.configure({
    key: '<?php echo $_smarty_tpl->tpl_vars['publishable_key']->value;?>
',
    image: '<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
',
    locale: 'auto',
    token: function(token) {
        // You can access the token ID with `token.id`.
        // Get the token ID to your server-side code for use.
        
        $('#paymentDetails').hide();
        $('#payProcess').val(1);
        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
checkout/stripe_process',
            type: 'POST',
            data: {_token: '<?php echo $_smarty_tpl->tpl_vars['csrf_value']->value;?>
', item_id: <?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
, stripeToken: token.id, stripeEmail: token.email, itemName: '<?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
', itemPrice: <?php echo $_smarty_tpl->tpl_vars['stripe_item_price']->value;?>
, currency: '<?php echo strtolower($_smarty_tpl->tpl_vars['app']->value['currency_code']);?>
'},
            dataType: "json",
            beforeSend: function(){
                $('#payButton').prop('disabled', true);
                $('#payButton').html('Please wait...');
            },
            success: function(data){
                $('#payProcess').val(0);
                if(data.status == 1){
                    $('#buynow').hide();
                    $('#txnEmail').html(token.email);
                    $('#orderID').html(data.txnData.id);
                    $('#txnID').html(data.txnData.balance_transaction);
                    $('#paymentDetails').show();
                }else {
                    $('#payButton').prop('disabled', false);
                    $('#payButton').html('Buy Now');
                    alert('Some problem occurred, please try again.');
                }
            },
            error: function(data) {
                $('#payProcess').val(0);
                $('#payButton').prop('disabled', false);
                $('#payButton').html('Buy Now');
                alert('Some problem occurred, please try again but paid.');
            }
        });
    }
});

var stripe_closed = function(){
    var processing = $('#payProcess').val();
    if (processing == 0){
        $('#payButton').prop('disabled', false);
        $('#payButton').html('Pay With Stripe');
    }
};

var eventTggr = document.getElementById('payButton');
if(eventTggr){
    eventTggr.addEventListener('click', function(e) {
        $('#payButton').prop('disabled', true);
        $('#payButton').html('Please wait...');
        
        // Open Checkout with further options:
        handler.open({
            name: '<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
',
            description: 'Purchase <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
 From <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
',
            amount: <?php echo $_smarty_tpl->tpl_vars['stripe_item_price']->value;?>
,
            currency: '<?php echo strtolower($_smarty_tpl->tpl_vars['app']->value['currency_code']);?>
',
            closed:	stripe_closed
        });
        e.preventDefault();
    });
}

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});




<?php echo '</script'; ?>
>
<?php }?>

<?php
}
}
/* {/block 'contents'} */
/* {block 'item_details_js'} */
class Block_10117014975ea359b8ae1ca7_51049147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_details_js' => 
  array (
    0 => 'Block_10117014975ea359b8ae1ca7_51049147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'item_details_js'} */
/* {block 'item_deails_css'} */
class Block_15956344655ea359b8ae6536_42194265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_15956344655ea359b8ae6536_42194265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/select2.min.css">
<?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'stripe_js'} */
class Block_14930291045ea359b8aeac49_99226913 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stripe_js' => 
  array (
    0 => 'Block_14930291045ea359b8aeac49_99226913',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="https://checkout.stripe.com/checkout.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'stripe_js'} */
/* {block 'flip_timer'} */
class Block_21383972195ea359b8aedf54_18366816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_21383972195ea359b8aedf54_18366816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['is_flash']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
    
        var clock;
        
        $(document).ready(function() {
            // Set dates.
            var futureDate  = new Date("<?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['last_update_flash']->value)->addDays(7)->format("m d, Y");?>
 00:00:00");
            var currentDate = new Date();

            // Calculate the difference in seconds between the future and current date
            var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

            // Calculate day difference and apply class to .clock for extra digit styling.
            function dayDiff(first, second) {
                return (second-first)/(1000*60*60*24);
            }

            if (dayDiff(currentDate, futureDate) < 100) {
                $('.clock').addClass('twoDayDigits');
            } else {
                $('.clock').addClass('threeDayDigits');
            }

            if(diff < 0) {
                diff = 0;
            }

            // Instantiate a coutdown FlipClock
            clock = $('.clock').FlipClock(diff, {
                clockFace: 'DailyCounter',
                countdown: true
            });
        });
        
    <?php echo '</script'; ?>
>
    <?php }?>
    <?php
}
}
/* {/block 'flip_timer'} */
}
