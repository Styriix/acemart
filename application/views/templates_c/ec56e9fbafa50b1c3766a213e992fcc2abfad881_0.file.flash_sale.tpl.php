<?php
/* Smarty version 3.1.33, created on 2020-01-13 06:37:09
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\public\flash_sale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1c0205bb72b1_68895276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec56e9fbafa50b1c3766a213e992fcc2abfad881' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\public\\flash_sale.tpl',
      1 => 1578893814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/extra/like_flash_files.tpl' => 1,
  ),
),false)) {
function content_5e1c0205bb72b1_68895276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17769995235e1c02059c4909_74525465', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17750024375e1c0205ae1b23_71350189', 'count'-'down'-'timer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5715522625e1c0205b921d3_94696247', 'css');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15348884755e1c0205b95a63_89047022', 'item_liker_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/flash-sale.tpl");
}
/* {block 'contents'} */
class Block_17769995235e1c02059c4909_74525465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17769995235e1c02059c4909_74525465',
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
                <li>Flash Sale</li>
            </ul>
        </div>
    </div>  
</div>

<div class="bg-primaryText section-space-default" style="text-align:center;">
<h2 class="text-center" style="color:white;">Falsh Sale Ends In</h2>
<div id="clockdiv">
  <div>
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext">Hours</div>
  </div>
  <div>
    <span class="minutes"></span>
    <div class="smalltext">Minutes</div>
  </div>
  <div>
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>

</div>
<hr>


<div class="category-product-grid bg-secondary section-space-bottom">                
    <div class="container">
        <div class="inner-page-main-body">
            
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                    <div class="product-grid-view padding-narrow">
                        <?php if ($_smarty_tpl->tpl_vars['flashes']->value) {?>
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['flashes']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>                                        
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->item_name,20);?>
</a></h3>
                                            <span><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</span>
                                            <div class="row" style="botton:5px;">
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
                            <h3 class="text-center">No Item Available Yet</h3>
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
</div>
<!-- Product Page Grid End Here -->

<?php
}
}
/* {/block 'contents'} */
/* {block 'count'-'down'-'timer'} */
class Block_17750024375e1c0205ae1b23_71350189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'count\'-\'down\'-\'timer' => 
  array (
    0 => 'Block_17750024375e1c0205ae1b23_71350189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<?php echo '<script'; ?>
 type="text/javascript">


  function getTimeRemaining(endtime) {
  var t = Date.parse('<?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['last_update_flash']->value)->addDays(7)->format("Y/m/d");?>
') - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);

  
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'count'-'down'-'timer'} */
/* {block 'css'} */
class Block_5715522625e1c0205b921d3_94696247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_5715522625e1c0205b921d3_94696247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/pure-min.css">
<?php
}
}
/* {/block 'css'} */
/* {block 'item_liker_script'} */
class Block_15348884755e1c0205b95a63_89047022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_15348884755e1c0205b95a63_89047022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_flash_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
