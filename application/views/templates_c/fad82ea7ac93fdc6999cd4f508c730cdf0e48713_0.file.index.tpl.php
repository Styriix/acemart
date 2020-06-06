<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:23:07
  from 'C:\wamp64\www\application\views\templates\default\profile\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea366cbe4d202_65650554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad82ea7ac93fdc6999cd4f508c730cdf0e48713' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\profile\\index.tpl',
      1 => 1582561779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea366cbe4d202_65650554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11445585375ea366cbca81e0_01895490', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1196440235ea366cbe34cf5_84172865', 'profle_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/profile.tpl");
}
/* {block 'contents'} */
class Block_11445585375ea366cbca81e0_01895490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11445585375ea366cbca81e0_01895490',
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
                <li><?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</li>
            </ul>
        </div>
    </div>  
</div> 
<!-- Inner Page Banner Area End Here -->


<!-- Profile Page Start Here -->
<div class="profile-page-area bg-secondary section-space-bottom">                
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 col-lg-push-3 col-md-push-4 col-sm-push-4">
                <div class="inner-page-main-body">
                    <div class="single-banner">
                        <img src="<?php if ($_smarty_tpl->tpl_vars['up']->value->user_banner) {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['up']->value->user_banner;
} else {
echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/profile/banner.jpg<?php }?>" heigth="250px" alt="product" class="img-responsive">
                    </div>                                
                    <div class="author-summery">
                        <div class="single-item">
                            <div class="item-title">Country:</div>
                            <div class="item-details"><?php echo $_smarty_tpl->tpl_vars['up']->value->user_country;?>
 (<?php echo $_smarty_tpl->tpl_vars['up']->value->user_region;?>
)</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Member Since:</div>
                            <div class="item-details"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['up']->value->user_created_at)->format('d F, Y');?>
</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Last Seen</div>
                            <div class="item-detail"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['up']->value->user_last_seen)->format('d F, Y');?>
</div>                                       
                        </div>
                        <div class="single-item">
                            <div class="item-title">Total Sales:</div>
                            <div class="item-name"><?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
</div>                                       
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 col-lg-pull-9 col-md-pull-8 col-sm-pull-8">
                <div class="fox-sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item-inner">
                            <h3 class="sidebar-item-title"><?php echo $_smarty_tpl->tpl_vars['up']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['up']->value->user_lastname;?>
</h3>
                            <div class="sidebar-author-info">
                                <div class="sidebar-author-img">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['up']->value->user_avater;?>
" alt="userprofile" class="img-responsive">
                                </div>
                                <div class="sidebar-author-content">
                                    <h3><?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</h3>
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
                    <ul class="social-default">
                        <?php if ($_smarty_tpl->tpl_vars['up']->value->user_fb) {?>
                            <li><a href="http://fb.me/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_fb;?>
" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['up']->value->user_tw) {?>
                            <li><a href="http://twitter.com/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_tw;?>
" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['up']->value->user_ln) {?>
                            <li><a href="http://linkedin.com/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_ln;?>
" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['up']->value->user_google) {?>
                            <li><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['up']->value->user_google;?>
" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                        <?php }?>
                    </ul>

                    <ul class="sidebar-product-btn">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
message<?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>/<?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;
}?>" class="buy-now-btn" id="buy-button"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>Send Message<?php } else { ?>Messages<?php }?></a></li>
                    </ul>


                    <?php if ($_smarty_tpl->tpl_vars['is_login']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] != $_smarty_tpl->tpl_vars['up']->value->user_id) {?>
                            <?php if ($_smarty_tpl->tpl_vars['isFollowing']->value) {?>
                                <form method="post" id="let_unfolo" action="#">
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <button type="submit" id="unfolo_user_btn" class="btn btn-warning btn-block">Un-Follow <?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</button>
                                </form>
                            <?php } else { ?>
                                <form method="post" id="let_folo" action="#">
                                    <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                    <button type="submit" id="folo_user_btn" class="btn btn-info btn-block">Follow <?php echo ucfirst($_smarty_tpl->tpl_vars['up']->value->user_username);?>
</button>
                                </form>
                            <?php }?>
                        <?php }?>
                    <?php }?>                                
                    
                </div>
            </div>                                                
        </div>
        <div id="follow"></div>
        <div id="unfollow"></div>
        <div class="row profile-wrapper">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <ul class="profile-title">
                    <li class="active"><a href="#Profile" data-toggle="tab" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> About Me</a></li>
                    <li><a href="#Products" data-toggle="tab" aria-expanded="false"><i class="fa fa-briefcase" aria-hidden="true"></i> Shops</a></li>
                    <li><a href="#Followers" data-toggle="tab" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Followers (<?php echo $_smarty_tpl->tpl_vars['num_folo']->value;?>
)</a></li>
                    <li><a href="#Following" data-toggle="tab" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> Following (<?php echo $_smarty_tpl->tpl_vars['num_following']->value;?>
)</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['usr']->value['myid'] == $_smarty_tpl->tpl_vars['up']->value->user_id) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
my-items"><i class="fa fa-cog" aria-hidden="true"></i> My Items</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
settings"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a></li>
                    <?php }?>
                </ul>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12"> 
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="Profile">
                        <div class="inner-page-details inner-page-content-box">
                            <h3>About Me:</h3>
                            <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['up']->value->user_about)===null||$tmp==='' ? 'Not Specify!' : $tmp);?>
</p>
                        </div> 
                    </div> 
                    <div class="tab-pane fade" id="Products">
                        <h3 class="title-inner-section">Shops</h3>
                        <div class="inner-page-main-body"> 
                            <?php if ($_smarty_tpl->tpl_vars['shops']->value) {?>
                            <div class="row more-product-item-wrapper">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'sh');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sh']->value) {
?>
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['sh']->value->thumb_name;?>
" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['sh']->value->item_name;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['sh']->value->item_name,20);?>
</a></h4>
                                            <div class="p-title"><?php echo $_smarty_tpl->tpl_vars['sh']->value->sub_cat_name;?>
</div>
                                            <div class="p-price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['sh']->value->item_regu_price;?>
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
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    </div>  
                            </div>
                        </div> 
                    </div>
                    <div class="tab-pane fade" id="settings">
                        <h3 class="title-inner-section">Settings</h3>
                        
                    </div>
                    
                    <div class="tab-pane fade" id="Followers">
                        <h3 class="title-inner-section">Followers</h3>
                        <div class="inner-page-main-body"> 
                            <div class="row more-product-item-wrapper">

                                <?php if ($_smarty_tpl->tpl_vars['follo_lists']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['follo_lists']->value, 'f_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['f_list']->value) {
?>
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['f_list']->value->user_avater;?>
" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['f_list']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['f_list']->value->user_username;?>
</a></h4>
                                            <div class="a-item"><?php echo $_smarty_tpl->tpl_vars['f_list']->value->u_item;?>
 Items</div>
                                            <div class="a-followers"><?php echo $_smarty_tpl->tpl_vars['f_list']->value->u_folo;?>
 Followers</div>
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


                        <div class="tab-pane fade" id="Following">
                        <h3 class="title-inner-section">Following</h3>
                        <div class="inner-page-main-body"> 
                            <div class="row more-product-item-wrapper">

                                <?php if ($_smarty_tpl->tpl_vars['following_lists']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['following_lists']->value, 'fo_list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fo_list']->value) {
?>
                                <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6">
                                    <div class="more-product-item">
                                        <div class="more-product-item-img">
                                            <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['fo_list']->value->user_avater;?>
" alt="product" class="img-responsive">
                                        </div>
                                        <div class="more-product-item-details">
                                            <h4><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['fo_list']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['fo_list']->value->user_username;?>
</a></h4>
                                            <div class="a-item"><?php echo $_smarty_tpl->tpl_vars['f0_list']->value->u_item;?>
 Items</div>
                                            <div class="a-followers"><?php echo $_smarty_tpl->tpl_vars['fo_list']->value->u_folo;?>
 Followers</div>
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
    </div>
</div>
<!-- Profile Page End Here -->


<?php
}
}
/* {/block 'contents'} */
/* {block 'profle_script'} */
class Block_1196440235ea366cbe34cf5_84172865 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_1196440235ea366cbe34cf5_84172865',
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
