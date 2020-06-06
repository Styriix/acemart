<?php
/* Smarty version 3.1.33, created on 2020-01-14 11:04:57
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\free_files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1d9249e3a9b6_85115177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a45952ae6f8cc5d70b9fb1c4d1bd837f8bd7f4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\free_files.tpl',
      1 => 1578996191,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/extra/like_free_files.tpl' => 1,
  ),
),false)) {
function content_5e1d9249e3a9b6_85115177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16848754845e1d9249d9f8f5_70876503', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13301183635e1d9249e21446_11768476', 'timer_css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18912313535e1d9249e23370_71295033', 'timer_js');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1582079935e1d9249e291d0_40992398', 'item_liker_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/free-files.tpl");
}
/* {block 'contents'} */
class Block_16848754845e1d9249d9f8f5_70876503 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_16848754845e1d9249d9f8f5_70876503',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

  <section class="call-to-action bgimage">
    <div class="bg_image_holder">
        <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/webiste.home-banner/main-banner.jpg" alt="">
    </div>
    <div class="container content_above">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-wrap">
                    <h1 class="text--white">Free Files Ends In</h1>
                    
                        <div id="timer">
                            <div id='days' class="board">
                            <div class="number"></div>
                            <div class="labels">Days</div>
                            </div>

                            <div id='hours' class="board">
                            <div class="number"></div>
                            <div class="labels">Hours</div>
                            </div>

                            <div id='minutes' class="board">
                            <div class="number"></div>
                            <div class="labels">Minutes</div>
                            </div>

                            <div id='seconds' class="board">
                            <div class="number"></div>
                            <div class="labels">Seconds</div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="section--padding2 bgcolor">

    <div class="shortcode_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_module_title">
                        <div class="dashboard__title">
                            <h3>Free Files</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['freebies']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
    <div class="col-lg-3 col-md-6">
        <!-- start .single-product -->
        <div class="product product--card product--card-small">

            <div class="product__thumbnail">
                <img src="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
" alt="Product Image">
                <div class="prod_btn">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" class="transparent btn--sm btn--round">More Info</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item-preview/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
"  target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                </div>
            </div>
            <!-- end /.product__thumbnail -->

            <div class="product-desc">
                <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
" class="product_title">
                    <h4><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->item_name,23);?>
</h4>
                </a>
                <ul class="titlebtm">
                    <li>
                        <img class="auth-img" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_lastname;?>
" alt="author image">
                        <p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</a>
                            <span style="padding-left:65px;">
                                <i class="fa fa-thumbs-up like<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;
if ($_smarty_tpl->tpl_vars['item']->value->isLiked) {?> text-primary<?php }?>"<?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?> data-toggle="tooltip" data-placement="top" title="Please Login"<?php }?>></i> <small class="item_id_<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
">(<?php echo number_format($_smarty_tpl->tpl_vars['item']->value->item_likes);?>
)</small>
                            </span>
                        </p>
                    </li>
                    <li class="out_of_class_name">
                        <div class="sell">
                            <p>
                                <strong><font color="red">Free</font></strong>
                            </p>
                        </div>
                        <div class="rating product--rating">
                            <ul>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value->item_rate == 0) {?>
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
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 1 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 2) {?>
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
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 2 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 3) {?>
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
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 3 && $_smarty_tpl->tpl_vars['item']->value->item_rate < 4) {?>
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
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate < 5) {?>
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
                                <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->item_rate >= 5) {?>
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
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></span>
                </div>
                <a href="#">
                    <span class="lnr lnr-book"></span><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
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

</section>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'timer_css'} */
class Block_13301183635e1d9249e21446_11768476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'timer_css' => 
  array (
    0 => 'Block_13301183635e1d9249e21446_11768476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/timer.css">
 <?php
}
}
/* {/block 'timer_css'} */
/* {block 'timer_js'} */
class Block_18912313535e1d9249e23370_71295033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'timer_js' => 
  array (
    0 => 'Block_18912313535e1d9249e23370_71295033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>

    // Set the date we're counting down to
    var countDownDate = new Date('<?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['last_update_free']->value)->addDays(7)->format("m d, Y");?>
 00:00:00').getTime();  // CHANGE DATE AND TIME HERE

    // Update the count down every 1 second
    var countdown = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the difference between now and the count down date
    var difference = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

    // If the difference is less than 0, stop countdown
    if (difference < 0) {
        clearInterval(countdown);
        days = 0, hours = 0, minutes = 0, seconds = 0;
    }

    // Output the result
    document.getElementById("days").children[0].innerText = days;
    document.getElementById("hours").children[0].innerText = hours;
    document.getElementById("minutes").children[0].innerText = minutes;
    document.getElementById("seconds").children[0].innerText = seconds;
    }, 1000);

<?php echo '</script'; ?>
>
 <?php
}
}
/* {/block 'timer_js'} */
/* {block 'item_liker_script'} */
class Block_1582079935e1d9249e291d0_40992398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_1582079935e1d9249e291d0_40992398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_free_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
