<?php
/* Smarty version 3.1.33, created on 2020-02-24 21:59:53
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\profile\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e543949522c75_38929980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc12259a6b9b35fe75be76f9bc643e987e679c2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\profile\\index.tpl',
      1 => 1582577990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e543949522c75_38929980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5226966945e54394949aa56_35471673', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1478159575e54394951cb16_42000786', 'profle_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_5226966945e54394949aa56_35471673 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_5226966945e54394949aa56_35471673',
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
                        <li class="active">
                            <a href="#"><?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
 Profile</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title"><?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
's Profile</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>


<section class="author-profile-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar_author">
                    <div class="author-card sidebar-card">
                        <div class="author-infos">
                            <div class="author_avatar">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['up']->value->user_avater;?>
" alt="User Profile">
                            </div>

                            <div class="author">
                                <h4><?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</h4>
                                <p><b>Joined:</b> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['up']->value->user_created_at)->format('d F, Y');?>
</p>
                                <p><b>Last Seen:</b> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['up']->value->user_last_seen)->format('d F, Y');?>
</p>
                            </div>
                            <!-- end /.author -->

                            <div class="social social--color--filled">

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
                                <hr>
                                <ul>
                                    <?php if ($_smarty_tpl->tpl_vars['up']->value->user_fb) {?>
                                    <li>
                                        <a href="http://fb.me/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_fb;?>
" target="_blank">
                                            <span class="fa fa-facebook"></span>
                                        </a>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['up']->value->user_tw) {?>
                                    <li>
                                        <a href="http://linkedin.com/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_ln;?>
" target="_blank">
                                            <span class="fa fa-twitter"></span>
                                        </a>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['up']->value->user_google) {?>
                                    <li>
                                        <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['up']->value->user_google;?>
" target="_blank">
                                            <span class="fa fa-google"></span>
                                        </a>
                                    </li>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['up']->value->user_ln) {?>
                                    <li>
                                        <a href="http://linkedin.com/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_ln;?>
" target="_blank">
                                            <span class="fa fa-linkedin"></span>
                                        </a>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <!-- end /.social -->

                            <div class="author-btn">
                                <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['isFollowing']->value) {?>
                                            <form method="post" id="let_unfolo" action="#">
                                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                <button type="submit" id="unfolo_user_btn" class="btn btn--md btn--round">Un-Follow</button>
                                            </form>
                                        <?php } else { ?>
                                            <form method="post" id="let_folo" action="#">
                                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                                <button type="submit" id="folo_user_btn" class="btn btn--md btn--round">Follow <?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</button>
                                            </form>
                                        <?php }?>
                                    <?php }?>
                                <?php }?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
message<?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;
}?>" class="btn btn--md btn--round"><?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>Send Message<?php } else { ?>Messages<?php }?></a>
                            </div>
                            <!-- end /.author-btn -->
                        </div>
                        <!-- end /.author-infos -->


                    </div>
                    <!-- end /.author-card -->

                    
                    <div class="shortcode_modules">
                        <div class="tab tab4">
                        <div class="item-navigation">
                        <ul class="nav nav-tabs nav--tabs2">
                            <li>
                                <a href="#Profile" aria-controls="Profile" role="tab" data-toggle="tab" aria-expanded="true" class="active">Profile</a>
                            </li>
                            <li>
                                <a href="#Products" aria-controls="#Products" role="tab" data-toggle="tab" aria-expanded="false">Items</a>
                            </li>
                            <li>
                                <a href="#Followers" aria-controls="#Followers" role="tab" data-toggle="tab" aria-expanded="false">Followers</a>
                            </li>
                            <li>
                                <a href="#Following" aria-controls="#Following" role="tab" data-toggle="tab" aria-expanded="false">Following</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] == $_smarty_tpl->tpl_vars['up']->value->user_id) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-items"> My Items</a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
settings"> Settings</a>
                            </li>
                            <?php }?>
                        </ul>
                        </div>
                        </div>
                    </div>
                    <!-- end /.author-menu -->

                    
                </aside>
            </div>
            <!-- end /.sidebar -->

            <div class="col-lg-8 col-md-12">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="author-info pcolorbg">
                            <p>Total sales</p>
                            <h3><?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
</h3>
                        </div>
                    </div>
                    <!-- end /.col-md-4 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="author-info scolorbg">
                            <p>Country</p>
                            <h5 class = "text-warning"><?php echo $_smarty_tpl->tpl_vars['up']->value->user_country;?>
 (<?php echo $_smarty_tpl->tpl_vars['up']->value->user_region;?>
)</h5>
                        </div>
                    </div>
                    <!-- end /.col-md-4 -->

                    <div class="col-md-12 col-sm-12">
                        <div class="author_module">
                            <img src="<?php if ($_smarty_tpl->tpl_vars['up']->value->user_banner) {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['up']->value->user_banner;
} else {
echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/banner.jpg<?php }?>" alt="author image">
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="fade show tab-pane product-tab active" id="Profile">
                                <div class="author_module about_author">
                                    <h2>About
                                        <span><?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;?>
</span>
                                    </h2>
                                    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['up']->value->user_about)===null||$tmp==='' ? 'Not Specify!' : $tmp);?>
</p>
                                </div>
                            </div>

                            <div role="tabpanel" class="fade tab-pane product-tab" id="Products">
                                <div class="author_module shortcode_wrapper">
                                    <?php if ($_smarty_tpl->tpl_vars['shops']->value) {?>
                                        <div class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'sh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sh']->value) {
?>
                                                <div class="col-lg-4 col-md-6">
                                                    <!-- start .single-product -->
                                                    <div class="product product--card product--card-small">

                                                        <div class="product__thumbnail">
                                                            <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['sh']->value->pre_name;?>
" alt="Product Image">
                                                            <div class="prod_btn">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_slug;?>
" class="transparent btn--sm btn--round">More Info</a>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_live_demo;?>
"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                                                            </div>
                                                        </div>
                                                        <!-- end /.product__thumbnail -->

                                                        <div class="product-desc">
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_name;?>
" class="product_title">
                                                                <h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sh']->value->item_name,23);?>
</h4>
                                                            </a>
                                                            <ul class="titlebtm">
                                                                <li>
                                                                    <img class="auth-img" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['sh']->value->user_avater;?>
" data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['sh']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['sh']->value->user_lastname;?>
" alt="author image">
                                                                    <p>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['sh']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['sh']->value->user_username;?>
</a>
                                                                    </p>
                                                                </li>
                                                                <li class="out_of_class_name">
                                                                    
                                                                    <div class="rating product--rating">
                                                                        <ul>
                                                                            <?php if ($_smarty_tpl->tpl_vars['sh']->value->item_rate == 0) {?>
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
                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['sh']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['sh']->value->item_rate < 2) {?>
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
                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['sh']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['sh']->value->item_rate < 3) {?>
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
                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['sh']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['sh']->value->item_rate < 4) {?>
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
                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['sh']->value->item_rate < 5) {?>
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
                                                                            <?php } elseif ($_smarty_tpl->tpl_vars['sh']->value->item_rate >= 5) {?>
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
echo $_smarty_tpl->tpl_vars['sh']->value->item_regu_price;?>
</span>
                                                            </div>
                                                            <a href="#">
                                                                <span class="lnr lnr-book"></span><?php echo $_smarty_tpl->tpl_vars['sh']->value->sub_cat_name;?>
</a>
                                                        </div>
                                                        <!-- end /.product-purchase -->
                                                    </div>
                                                    <!-- end /.single-product -->
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>

                            <div role="tabpanel" class="fade show tab-pane product-tab" id="Followers">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-title-area">
                                            <div class="product__title">
                                                <h2>
                                                    <span class="bold"><?php echo $_smarty_tpl->tpl_vars['num_folo']->value;?>
</span> Followers</h2>
                                            </div>
                                        </div>
                                        <!-- end /.product-title-area -->
                                        <?php if ($_smarty_tpl->tpl_vars['follo_lists']->value) {?>
                                        <div class="user_area">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['follo_lists']->value, 'f_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f_list']->value) {
?>
                                                <li>
                                                    <div class="user_single">
                                                        <div class="user__short_desc">
                                                            <div class="user_avatar">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['f_list']->value->user_avater;?>
" width="35px" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['f_list']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['f_list']->value->user_username;?>
</a>
                                                                <p>Member Since: <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['f_list']->value->user_created_at)->format('d F, Y');?>
</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- end /.user_single -->
                                                </li>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                

                                                
                                            </ul>

                                            
                                        </div>
                                        <?php }?>
                                        <!-- end /.user_area -->
                                    </div>
                                    <!-- end /.col-md-12 -->
                                </div>
                                <!-- end /.row -->
                            </div>

                            <div role="tabpanel" class="fade show tab-pane product-tab" id="Following">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="product-title-area">
                                            <div class="product__title">
                                                <h2>
                                                    <span class="bold"><?php echo $_smarty_tpl->tpl_vars['num_following']->value;?>
</span> Following</h2>
                                            </div>
                                        </div>
                                        <!-- end /.product-title-area -->
                                        <?php if ($_smarty_tpl->tpl_vars['following_lists']->value) {?>
                                        <div class="user_area">
                                            <ul>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['following_lists']->value, 'fo_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fo_list']->value) {
?>
                                                <li>
                                                    <div class="user_single">
                                                        <div class="user__short_desc">
                                                            <div class="user_avatar">
                                                                <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['fo_list']->value->user_avater;?>
" width="35px" alt="">
                                                            </div>
                                                            <div class="user_info">
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['fo_list']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['fo_list']->value->user_username;?>
</a>
                                                                <p>Member Since: <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['fo_list']->value->user_created_at)->format('d F, Y');?>
</p>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- end /.user_single -->
                                                </li>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                                

                                                
                                            </ul>

                                            
                                        </div>
                                        <?php }?>
                                        <!-- end /.user_area -->
                                    </div>
                                    <!-- end /.col-md-12 -->
                                </div>
                                <!-- end /.row -->
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end /.row -->

                
            </div>
            <!-- end /.col-md-8 -->

        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'profle_script'} */
class Block_1478159575e54394951cb16_42000786 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_1478159575e54394951cb16_42000786',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>

    $(document).ready(function(){

        //* Following User
        $('#let_folo').on('submit', function(e) {
            e.preventDefault();
            $('#folo_user_btn').prop('disabled', true);
            $('#folo_user_btn').text('Following...');

            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
follow_user/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;?>
',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#follow').html(data);
                }
            });
        });

         //* Un Following User
        $('#let_unfolo').on('submit', function(e) {
            e.preventDefault();
            $('#unfolo_user_btn').prop('disabled', true);
            $('#unfolo_user_btn').text('Un Following...');

            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
unfollow_user/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_id;?>
/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;?>
',
                method: 'POST',
                data: new FormData(this),
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    $('#unfollow').html(data);
                }
            });
        });
    });

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'profle_script'} */
}
