<?php
/* Smarty version 3.1.33, created on 2020-01-14 10:52:25
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\category\child.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1d8f594eb797_48025540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd345e0769fe736e148c7aa096bec21e3edb9df61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\category\\child.tpl',
      1 => 1578995525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/extra/like_count.tpl' => 1,
  ),
),false)) {
function content_5e1d8f594eb797_48025540 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6206873015e1d8f5939e991_85333543', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11626980445e1d8f594b8c25_41442585', 'item_liker_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/category.tpl");
}
/* {block 'contents'} */
class Block_6206873015e1d8f5939e991_85333543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_6206873015e1d8f5939e991_85333543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

    
<div class="filter-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar">
                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                            <span class="lnr lnr-chevron-down"></span>
                        </a>
                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                            <?php if ($_smarty_tpl->tpl_vars['childs']->value) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childs']->value, 'chi');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chi']->value) {
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
/childcat/<?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_slug;?>
"><?php echo $_smarty_tpl->tpl_vars['chi']->value->child_cat_name;?>

                                        <span><?php echo $_smarty_tpl->tpl_vars['chi']->value->item_tot;?>
</span>
                                    </a>
                                </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                            
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                   
                </div>
                <!-- end /.filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>


<section class="products">
    <!-- start container -->
    <div class="container">

        <?php if ($_smarty_tpl->tpl_vars['a_items']->value) {?>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['a_items']->value, 'item');
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
" target="_blank" class="transparent btn--sm btn--round">Live Demo</a>
                        </div>
                        <!-- end /.prod_btn -->
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
                                <img data-toggle="tooltip" data-placement="top" title="By: <?php echo $_smarty_tpl->tpl_vars['item']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value->user_lastname;?>
" class="auth-img" src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['item']->value->user_avater;?>
" alt="author image">
                                <p>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->user_username;?>
</a>
                                </p>
                            </li>
                            <li class="out_of_class_name">
                                <div class="sell">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value->isFree) {?>
                                        <p>
                                            <strong><font color="red">Free</font></strong>
                                        </p>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->isFlash) {?>
                                        <p>
                                            <strong><font color="red"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->fs_price;?>
</font></strong>
                                        </p>
                                    <?php }?>
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
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->isFree) {?>
                                <span><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->isFlash) {?>
                                <span><del><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</del></span>
                            <?php } else { ?>
                                <span><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
</span>
                            <?php }?>
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
        <?php } else { ?>
            <h3 class="text-center">No Product Available Yet!</h3>
        <?php }?>

        <div class="row">
            <div class="col-md-12">
                <div class="pagination-area categorised_item_pagination">
                    <nav class="navigation pagination" role="navigation">
                        <div class="nav-links">
                            <?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</section>


<?php
}
}
/* {/block 'contents'} */
/* {block 'item_liker_script'} */
class Block_11626980445e1d8f594b8c25_41442585 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_11626980445e1d8f594b8c25_41442585',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
