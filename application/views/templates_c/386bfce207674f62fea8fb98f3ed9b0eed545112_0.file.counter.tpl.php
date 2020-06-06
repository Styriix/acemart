<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:37:28
  from 'C:\wamp64\www\acemart\application\views\templates\digcool\pack\counter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb560980c2ef0_83823115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '386bfce207674f62fea8fb98f3ed9b0eed545112' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\digcool\\pack\\counter.tpl',
      1 => 1573843382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb560980c2ef0_83823115 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="counter-up-area bgimage">
        <div class="bg_image_holder">
            <img src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
static/website/home-banner/main-banner.jpg" alt="">
        </div>
        <!-- start .container -->
        <div class="container content_above">
            <!-- start .col-md-12 -->
            <div class="col-md-12">
                <div class="counter-up">
                    <div class="counter mcolor2">
                        <span class="lnr lnr-briefcase"></span>
                        <span class="count"><?php echo number_format($_smarty_tpl->tpl_vars['cal_item']->value);?>
</span>
                        <p>Items for sale</p>
                    </div>
                    <div class="counter mcolor3">
                        <span class="lnr lnr-cloud-download"></span>
                        <span class="count"><?php echo number_format($_smarty_tpl->tpl_vars['cal_sales']->value);?>
</span>
                        <p>Total Sales</p>
                    </div>
                    <div class="counter mcolor1">
                        <span class="lnr lnr-gift"></span>
                        <span class="count"><?php echo number_format($_smarty_tpl->tpl_vars['cal_free']->value);?>
</span>
                        <p>Free Files</p>
                    </div>
                    <div class="counter mcolor4">
                        <span class="lnr lnr-users"></span>
                        <span class="count"><?php echo number_format($_smarty_tpl->tpl_vars['cal_users']->value);?>
</span>
                        <p>Members</p>
                    </div>
                </div>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.container -->
    </section><?php }
}
