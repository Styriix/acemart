<?php
/* Smarty version 3.1.33, created on 2020-02-24 22:01:18
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\item-detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e54399e0c8991_20952316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81ef7b0085c1e6c07439d76c9d579a227d2d191b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\item-detail.tpl',
      1 => 1582578074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e54399e0c8991_20952316 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14650721965e54399df1cca2_22661986', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_287954635e54399e0c37f2_63524815', 'stripe_js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21192176805e54399e0c4925_93417080', 'flip_timer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/item-show.tpl");
}
/* {block 'contents'} */
class Block_14650721965e54399df1cca2_22661986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14650721965e54399df1cca2_22661986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>


<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
category/<?php echo $_smarty_tpl->tpl_vars['item']->value->main_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->main_cat_name;?>
</a>
                        </li>

                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subcategory/<?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</a>
                        </li>

                        <li class="active">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
childcat/<?php echo $_smarty_tpl->tpl_vars['item']->value->child_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->child_cat_name;?>
</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>




<section class="single-product-desc">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

                <div class="item-preview item-preview2">
                    <div class="prev-slide">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
" width="730px" class="img-responsive">
                    </div>

                    <div class="item__preview-thumb">
                        <div class="item-action">
                            <div class="action-btns">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item-preview/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" target="_blank" class="btn btn--round btn--lg">Live Preview</a>
                                <?php if ($_smarty_tpl->tpl_vars['is_purchased']->value && $_smarty_tpl->tpl_vars['u_rate']->value) {?>
                                <a href="#exampleModalCenter" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn--round btn--lg btn--icon">
                                    <span class="lnr lnr-star"></span>Review</a>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['is_free']->value) {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
getfreebie/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
" class="btn btn--round btn--lg btn--icon">Free Download</a>
                                    .<?php }?>
                                <?php }?>
                            </div>
                        </div>
                        <!-- end /.item__action -->

                        <div class="item_social_share">
                            

                            <div class="social social--color--filled">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" target="_blank">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/home?status=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
 " target="_blank">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
&media=&description=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
" target="_blank">
                                            <span class="fa fa-pinterest"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
&title=Buy <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
&summary=<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
&source=<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
" target="_blank">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.social-->

                        </div>
                        <!-- end /.item__preview-thumb-->
                    </div>
                    <!-- end /.item__preview-thumb-->


                </div>
                <!-- end /.item-preview-->

                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#product-details" class="active" aria-controls="product-details" role="tab" data-toggle="tab">Item Details</a>
                            </li>
                            <li>
                                <a href="#product-comment" aria-controls="product-comment" role="tab" data-toggle="tab">Comments </a>
                            </li>
                            <li>
                                <a href="#product-review" aria-controls="product-review" role="tab" data-toggle="tab">Reviews
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.item-navigation -->

                    <div class="tab-content">
                        <div class="tab-pane fade show product-tab active" id="product-details">
                            <div class="tab-content-wrapper">
                                <?php echo $_smarty_tpl->tpl_vars['item']->value->item_description;?>

                            </div>
                        </div>
                        <!-- end /.tab-content -->

                        <div class="tab-pane fade product-tab" id="product-comment">
                            <div class="thread">
                                <?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
                                <ul class="media-list thread-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'cmt');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cmt']->value) {
?>
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['cmt']->value->user_username;?>
">
                                                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['cmt']->value->user_avater;?>
" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['cmt']->value->user_username;?>
">
                                                            <h4><?php echo $_smarty_tpl->tpl_vars['cmt']->value->user_username;?>
</h4>
                                                        </a>
                                                        <span><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['cmt']->value->cmt_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span>
                                                    </div>
                                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->user_id == $_smarty_tpl->tpl_vars['cmt']->value->cmt_user_id) {?>
                                                        <span class="comment-tag author">Author</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['cmt']->value->u_cmt) {?>
                                                        <span class="comment-tag buyer">Purchased</span>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                                    <a href="javascript.void(0);" class="reply-link">Reply</a>
                                                    <?php }?>
                                                </div>
                                                <p><?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_body;?>
</p>
                                            </div>
                                        </div>

                                        <?php if ($_smarty_tpl->tpl_vars['cmt']->value->replies) {?>
                                        <!-- nested comment markup -->
                                        <ul class="children">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cmt']->value->replies, 'c_r');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['c_r']->value) {
?>
                                            <li class="single-thread depth-2">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['c_r']->value->user_username;?>
">
                                                            <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['c_r']->value->user_avater;?>
" alt="Commentator Avatar">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="media-heading">
                                                            <h4><?php echo $_smarty_tpl->tpl_vars['c_r']->value->user_username;?>
</h4>
                                                            <span><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['c_r']->value->rp_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span>
                                                        </div>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->user_id == $_smarty_tpl->tpl_vars['c_r']->value->rp_user_id) {?>
                                                            <span class="comment-tag author">Author</span>
                                                        <?php }?>
                                                        <p><?php echo $_smarty_tpl->tpl_vars['c_r']->value->rp_body;?>
</p>
                                                    </div>
                                                </div>

                                            </li>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                        <?php }?>

                                        <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                        <!-- comment reply -->
                                        <div class="media depth-2 reply-comment">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['usr']->value['avater'];?>
" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
reply-cmt/<?php echo $_smarty_tpl->tpl_vars['cmt']->value->cmt_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">
                                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                    <textarea id="reply_cmt" name="r_cmt" class="bla" name="reply-comment" placeholder="Write your comment..." required></textarea>
                                                    <button class="btn btn--md btn--round" type="submit" name="submit">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                        <?php }?>
                                    </li>
                                    <!-- end single comment thread /.comment-->
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </ul>
                                <?php } else { ?>
                                    <h3 class="text-center">No Comment Yet</h3>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                <div class="comment-form-area">
                                    <h4>Leave a comment</h4>
                                    <!-- comment reply -->
                                    <div class="media comment-form">
                                        <div class="media-left">
                                            <a href="#">
                                                <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['usr']->value['avater'];?>
" width="40px" alt="Commentator Avatar">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
post-comment/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">
                                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                <textarea id="my-textarea" name="cmt_body" placeholder="Support questions or Comments" required></textarea>
                                                <button type="submit" name="submit" class="btn btn--sm btn--round">Post Comment</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- comment reply -->
                                </div>
                                <!-- end /.comment-form-area -->
                                <?php }?>
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        <div class="tab-pane fade product-tab" id="product-review">
                            <div class="thread thread_review">
                                <?php if ($_smarty_tpl->tpl_vars['reviews']->value) {?>
                                <ul class="media-list thread-list">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#\<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['review']->value->user_username;?>
">
                                                    <img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['review']->value->user_avater;?>
" alt="Loading">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="clearfix">
                                                    <div class="pull-left">
                                                        <div class="media-heading">
                                                            <a href="author.html">
                                                                <h4><?php echo $_smarty_tpl->tpl_vars['review']->value->user_username;?>
</h4>
                                                            </a>
                                                            <span><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['review']->value->rating_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span>
                                                        </div>
                                                        <div class="rating product--rating">
                                                            <ul>
                                                            <?php if ($_smarty_tpl->tpl_vars['review']->value->rating_value == 1) {?>
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
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 2) {?>
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
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 3) {?>
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
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value == 4) {?>
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
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['review']->value->rating_value >= 5) {?>
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
                                                        <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] == $_smarty_tpl->tpl_vars['review']->value->user_id) {?>
                                                        <span class="review_tag"><form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
remove-rating" method="post" id="rmv_rate">
                                                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                        <input type="hidden" name="r" value="<?php echo $_smarty_tpl->tpl_vars['review']->value->rating_id;?>
">
                                                        <a href="javascript:{}" onclick="document.getElementById('rmv_rate').submit(); return false;"><p class="text-danger">Delete</p></a>
                                                    </form></span>
                                                    <?php }?>
                                                    </div>
                                                    
                                                </div>
                                                <p><?php echo $_smarty_tpl->tpl_vars['review']->value->rating_comment;?>
</p>
                                            </div>
                                        </div>

                                        <!-- comment reply -->
                                        
                                        <!-- comment reply -->
                                    </li>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <!-- end single comment thread /.comment-->
                                </ul>
                                <?php } else { ?>
                                    <h4 class="text-center">No Review Yet</h4>
                                <?php }?>

                                    

                                    
                            </div>
                            <!-- end /.comments -->
                        </div>
                        <!-- end /.product-comment -->

                        

                        
                    </div>
                    <!-- end /.tab-content -->
                </div>
                <!-- end /.item-info -->
            </div>
            <!-- end /.col-md-8 -->

            <div class="col-lg-4">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing card--pricing2">
                        <div class="price">
                            <h1>
                                <sup><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];?>
</sup>
                                <?php if ($_smarty_tpl->tpl_vars['is_flash']->value) {?>
                                <span><small><del class="text-warning"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></small></span>
                                <span><?php echo $_smarty_tpl->tpl_vars['fs_price']->value;?>
</span>
                                <?php } else { ?>
                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</span>
                                <?php }?>
                            </h1>
                        </div>
                        <ul class="pricing-options">
                            <li>
                                <div class="custom-radio">
                                    <input type="radio" id="opt1" class="" name="filter_opt" checked>
                                    <label for="opt1" data-price="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
">
                                        <span class="circle"></span>Regular License </label>
                                </div>

                                <p>Regular Liecene use on only one Application</p>
                            </li>

                                                    </ul>
                        <!-- end /.pricing-options -->

                        <div class="purchase-button">
                            <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>
                                <a href="javascript:void(0)" onclick="openLoginModal();" class="btn btn--lg btn--round">Purchase Now</a>
                            <?php } elseif ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                
                            <?php if ($_smarty_tpl->tpl_vars['is_purchased']->value) {?>
                                <li><div class="text-primary">Your have already purchase this item you can download</div></li>
                                <li>
                                    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
download" method="post" id='download'>
                                        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                        <input type="hidden" name="item" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                        <button type="submit" name="submit" class="btn btn--lg btn--round">Download Now</button>
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
                                        <button type="submit" name="submit" class="btn btn--lg btn--round">Download Now</button>
                                    </form>
                                </li>
                            <?php } else { ?>
                                <a href="#buyItem" class="btn btn--lg btn--round" data-toggle="modal" id="buy-button">Purchase Now</a>
                                <a href="javascript:void(0);" class="btn btn--lg btn--round cart-btn">
                                <span class="lnr lnr-cart"></span> Secured Payment</a>
                            <?php }?>
                            <?php }?>
                        </div>
                        <!-- end /.purchase-button -->
                    </div>
                    <!-- end /.sidebar--card -->
                    <?php if ($_smarty_tpl->tpl_vars['is_flash']->value) {?>
                    <div class="" style="background:red;">
                        <div class="clock" style="top:23px;"></div>
                        <div class="text-center" style="color:#501804;">This item is <b>50%</b> Discount for Limited Time Get it now!</div>
                    </div>
                    <?php }?>

                    <div class="sidebar-card card--metadata">
                        <ul class="data">
                            <li>
                                <p>
                                    <span class="lnr lnr-cart pcolor"></span>Total Sales</p>
                                <span><?php echo $_smarty_tpl->tpl_vars['item_sales']->value;?>
</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.sidebar-card -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Product Information</h4>
                        </div>

                        <ul class="infos">
                            <li>
                                <p class="data-label">Released</p>
                                <p class="info"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_created_at)->format('d F, Y');?>
</p>
                            </li>
                            <li>
                                <p class="data-label">Updated</p>
                                <p class="info"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['item']->value->item_updated_at)->format('d F, Y');?>
 </p>
                            </li>
                            <li>
                                <p class="data-label">Version</p>
                                <p class="info"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_version;?>
</p>
                            </li>
                            <li>
                                <p class="data-label">Category</p>
                                <p class="info"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
category/<?php echo $_smarty_tpl->tpl_vars['item']->value->main_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->main_cat_name;?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
subcategory/<?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
/childcat/<?php echo $_smarty_tpl->tpl_vars['item']->value->child_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->child_cat_name;?>
</a></p>
                            </li>
                            
                            <li>
                                <p class="data-label">Tags</p>
                                <p class="info"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_tags;?>
</p>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Share & Earn</h4>
                        </div>
                        <ul class="infos">
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
                        </ul>
                    </div>
                    <!-- end /.aside -->

                    <div class="author-card sidebar-card ">
                        <div class="card-title">
                            <h4>Author</h4>
                        </div>

                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" alt="Loading">
                            </div>

                            <div class="author">
                                <h4><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</h4>
                                <br>
                            </div>
                            <!-- end /.author -->
                            <!-- end /.social -->
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

                            <div class="author-btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
" class="btn btn--sm btn--round">View Profile</a>
                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
message/<?php ob_start();
echo $_smarty_tpl->tpl_vars['item']->value->user_username;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
" class="btn btn--sm btn--round">Message</a>
                                <?php }?>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->
                </aside>
                <!-- end /.aside -->
            </div>
            <!-- end /.col-md-4 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<?php if ($_smarty_tpl->tpl_vars['p_authors']->value) {?>
<section class="more_product_area section--padding">
        <div class="container">
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>More By
                            <span class="highlighted"> <?php echo ucfirst($_smarty_tpl->tpl_vars['item']->value->user_username);?>
</span>
                        </h1>
                    </div>
                </div>
                <!-- end /.col-md-12 -->

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p_authors']->value, 'p_author');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p_author']->value) {
?>
                <div class="col-lg-3 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card-small">

                        <div class="product__thumbnail">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['p_author']->value->pre_name;?>
" alt="Product Image">
                            <div class="prod_btn">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_slug;?>
" class="transparent btn--sm btn--round">More Info</a>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_live_demo;?>
"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                            </div>
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['p_author']->value->item_name;?>
" class="product_title">
                                <h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['p_author']->value->item_name,23);?>
</h4>
                            </a>
                            <ul class="titlebtm">
                                <li class="out_of_class_name">
                                    <div class="sell">
                                       
                                    </div>
                                    <div class="rating product--rating">
                                        <ul>
                                            <?php if ($_smarty_tpl->tpl_vars['p_author']->value->item_rate == 0) {?>
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_author']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['p_author']->value->item_rate < 2) {?>
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_author']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['p_author']->value->item_rate < 3) {?>
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_author']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['p_author']->value->item_rate < 4) {?>
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_author']->value->item_rate < 5) {?>
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
                                            <?php } elseif ($_smarty_tpl->tpl_vars['p_author']->value->item_rate >= 5) {?>
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
                                <span><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['p_author']->value->item_regu_price;?>
</span>
                            </div>
                            <a href="#">
                                <span class="lnr lnr-book"></span><?php echo $_smarty_tpl->tpl_vars['p_author']->value->sub_cat_name;?>
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
            <!-- end /.container -->
        </div>
        <!-- end /.container -->
    </section>
    <?php }?>

<!-- Item Rating Form Goes here -->
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
            <button type="submit" name="submit" class="btn btn-info btn-block btn-lg">Submit Review</button>
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

<div class="modal fade rating_modal" id="buyItem" tabindex="-1" role="dialog" aria-labelledby="rating_modal">
        <div class="modal-dialog modalg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="modal-title" id="rating_modal">Payment Methods</h3>
                    <h5 class="text-center text-info">Select Prefered Payment Method</h5>
                </div>
                <!-- end /.modal-header -->

                <div class="modal-body">
                        
                    <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status == 1) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status != 1) {?>col-md-12 col-xs-12 col-sm-12<?php } else { ?>col-md-6 col-xs-6 col-sm-6<?php }?>">
                            <center><div id="paypal-button"></div></center>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['stripe']->value->sg_status == 1) {?>
                        <div class="<?php if ($_smarty_tpl->tpl_vars['paypal']->value->pg_status != 1) {?>col-md-12 col-xs-12 col-sm-12<?php } else { ?>col-md-6 col-xs-6 col-sm-6<?php }?>">
                            <div id="buynow">
                                <button class="btn btn-primary btn-block btn--round btn-lg stripe-button" id="payButton">Pay With Stripe</button>
                                <input type="hidden" id="payProcess" value="0"/>
                            </div>
                        </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['btc']->value->btc_status == 1) {?>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-6">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
checkout/bitcoin_gateway" id="payWithBTC" method="post">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <input type="hidden" name="item_id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">
                                <center><a href="javascript:void();" onclick="document.getElementById('payWithBTC').submit();"><img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/pay/btc.png" height="100px" alt=""></a></center>
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
static/pay/credit.png" height="100px" alt=""></a></center>
                            </form>
                        </div>

                        <div class="col-md-12 text-center">
                            <div id="paymentDetails" style="display: none;">
                                <p class="aligncenter green bigger" text-center>Your payment was successful.</p>
                                <h4 class="text-center">Payment Information</h4>
                                <p>
                                Order ID: <span class="text-center" id="orderID">&#x3C;ORDER_ID&#x3E;</span><br/>
                                Transaction ID: <span class="text-center" id="txnID">&#x3C;TX_ID&#x3E;</span><br/>
                                </p>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-download" type="button" class="btn btn-Primary btn-block btn-lg">Click Here If Not Redirected</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end /.modal-body -->
                <div class="modal-footer">
                    <button type="button" class="btn btn--round modal_close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



<?php echo '<script'; ?>
>

    $('#btcPayment').on('click', function() {
        $('#payWithBTC').submit();
    });

<?php echo '</script'; ?>
>


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
                amount: { total: '<?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
', currency: '<?php echo $_smarty_tpl->tpl_vars['app']->value['currency_code'];?>
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
                        price: '<?php echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
',
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
/* {block 'stripe_js'} */
class Block_287954635e54399e0c37f2_63524815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stripe_js' => 
  array (
    0 => 'Block_287954635e54399e0c37f2_63524815',
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
class Block_21192176805e54399e0c4925_93417080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_21192176805e54399e0c4925_93417080',
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
