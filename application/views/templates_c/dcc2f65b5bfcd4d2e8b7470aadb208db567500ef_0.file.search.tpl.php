<?php
/* Smarty version 3.1.33, created on 2019-10-17 15:07:06
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\public\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8677a4fded0_14664591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcc2f65b5bfcd4d2e8b7470aadb208db567500ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\public\\search.tpl',
      1 => 1571317576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da8677a4fded0_14664591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9752876535da8677a456bc5_24085955', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/category.tpl");
}
/* {block 'contents'} */
class Block_9752876535da8677a456bc5_24085955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_9752876535da8677a456bc5_24085955',
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
                    <li>Search</li>
                </ul>
            </div>
        </div>  
    </div>
<!-- Product Page Grid Start Here -->
            <div class="category-product-grid bg-secondary section-space-bottom">                
                <div class="container">
                    <div class="inner-page-main-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active clear products-container" id="gried-view">
                                <div class="product-grid-view padding-narrow">
                                <?php if ($_smarty_tpl->tpl_vars['keys']->value) {?>
                                    <div class="row">  


                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['keys']->value, 'item');
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
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value->item_name,25);?>
</a></h3>
                                                    <span><?php echo $_smarty_tpl->tpl_vars['item']->value->sub_cat_name;?>
</span>
                                                    <div class="price"><?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo $_smarty_tpl->tpl_vars['item']->value->item_regu_price;?>
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
                                    <?php }?>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            
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
}
