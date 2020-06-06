<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:12:37
  from 'C:\wamp64\www\application\views\templates\default\inc\foot\main-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35645e9c3b2_19020516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d8adb0089bec8b1483708c16226dba5dbf53171' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\inc\\foot\\main-footer.tpl',
      1 => 1578845248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35645e9c3b2_19020516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- jquery-->  
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery-2.2.4.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Plugins js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/plugins.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!-- Bootstrap js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- WOW JS -->     
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/wow.min.js"><?php echo '</script'; ?>
>

        <!-- Owl Cauosel JS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        <!-- Meanmenu Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.meanmenu.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Srollup js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.scrollUp.min.js" type="text/javascript"><?php echo '</script'; ?>
>

         <!-- jquery.counterup js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.counterup.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/waypoints.min.js"><?php echo '</script'; ?>
>

        <!-- Isotope js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/isotope.pkgd.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- Gridrotator js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/jquery.gridrotator.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['timer']->value;?>
/flipclock.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2758669525ea35645e3f712_89044136', 'flip_timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6992366825ea35645e45626_12479050', 'count'-'down'-'timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4658826895ea35645e4c886_54471805', 'profle_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17929584405ea35645e4fe42_99102957', 'message_script');
?>

        

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16188915375ea35645e53309_27130208', 'p_s_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_691977585ea35645e56677_62672151', 'item_details_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3520834225ea35645e59903_76844456', 'cat_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6453219095ea35645e5cb98_34021962', 'ckeditor_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5624980465ea35645e61b95_37581646', 'upl_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16077193835ea35645e64e64_00312522', 'datatable_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13746614425ea35645e68080_39175926', 'w_js');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17039882005ea35645e6b420_44177721', 'date_picker');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10977465325ea35645e6e634_76656530', 'item_liker_script');
?>

        
        <!-- Custom Js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/main.js" type="text/javascript"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        
        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(document).ready(function() {
                $('#user-login').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#signin-btn').prop('disabled', true);
                    $('#signin-btn').text('Please Wait');

                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/user_login',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#password').val("");
                            $('#sign_info').html(data).fadeIn();
                        }
                    });

                    $(document).ajaxComplete(function() {
                        $('#signin-btn').prop('disabled', false);
                        $('#signin-btn').text('Login');
                    });
                });
            });
        
        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(document).ready(function() {
                $('#reg_user').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#reg_btn').prop('disabled', true);
                    $('#reg_btn').text('Please Wait');

                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
registration',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#password').val("");
                            $('#sign_info').html(data).fadeIn();
                        }
                    });

                    $(document).ajaxComplete(function() {
                        $('#reg_btn').prop('disabled', false);
                        $('#reg_btn').text('Register');
                    });
                });
            });
        
        <?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
        
            $(document).ready(function() {
                $('#reset-pass').on('submit', function(e) {
                    e.preventDefault();
                    $('#sign_info').hide();
                    $('#findpass').prop('disabled', true);
                    $('#findpass').text('Please Wait');

                    $.ajax({
                        url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/reset_password',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            $('#password').val("");
                            $('#sign_info').html(data).fadeIn();
                        }
                    });

                    $(document).ajaxComplete(function() {
                        $('#findpass').prop('disabled', false);
                        $('#findpass').text('Reset');
                    });
                });
            });
        
        <?php echo '</script'; ?>
>

        <?php if (!$_smarty_tpl->tpl_vars['is_login']->value) {?>
            <!-- Modal HTML -->
            <div id="myModal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-login" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="avatar">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/img/avatar.png" alt="Avatar">
                            </div>				
                            <h4 class="modal-title">Member Login</h4>	
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div id="quick_info"></div>
                            <form action="#" method="post" id="quick-login">
                                <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">		
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">	
                                </div>        
                                <div class="form-group">
                                    <button type="submit" id="btn-log" class="btn btn-primary btn-lg btn-block login-btn">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php echo '<script'; ?>
>
                
                    $(document).ready(function() {
                        $('#quick-login').on('submit', function(e) {
                            e.preventDefault();
                            $('#quick_info').hide();
                            $('#btn-log').prop('disabled', true);
                            $('#btn-log').text('Please Wait');

                            $.ajax({
                                url: '<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
auth/user_login',
                                method: 'POST',
                                data: new FormData(this),
                                contentType: false,
                                cache: false,
                                processData: false,
                                success: function(data) {
                                    $('#password').val("");
                                    $('#quick_info').html(data).fadeIn();
                                }
                            });

                            $(document).ajaxComplete(function() {
                                $('#btn-log').prop('disabled', false);
                                $('#btn-log').text('Login');
                            });
                        });
                    });
                
                <?php echo '</script'; ?>
>


        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['app']->value['lc']) {?>
            <?php echo $_smarty_tpl->tpl_vars['app']->value['lc'];?>

        <?php }?>

        <?php echo $_smarty_tpl->tpl_vars['foot']->value['inn_foot'];?>

    </body>
</html><?php }
/* {block 'flip_timer'} */
class Block_2758669525ea35645e3f712_89044136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_2758669525ea35645e3f712_89044136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'flip_timer'} */
/* {block 'count'-'down'-'timer'} */
class Block_6992366825ea35645e45626_12479050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'count\'-\'down\'-\'timer' => 
  array (
    0 => 'Block_6992366825ea35645e45626_12479050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'count'-'down'-'timer'} */
/* {block 'profle_script'} */
class Block_4658826895ea35645e4c886_54471805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_4658826895ea35645e4c886_54471805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'profle_script'} */
/* {block 'message_script'} */
class Block_17929584405ea35645e4fe42_99102957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message_script' => 
  array (
    0 => 'Block_17929584405ea35645e4fe42_99102957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'message_script'} */
/* {block 'p_s_foot'} */
class Block_16188915375ea35645e53309_27130208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_16188915375ea35645e53309_27130208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_foot'} */
/* {block 'item_details_js'} */
class Block_691977585ea35645e56677_62672151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_details_js' => 
  array (
    0 => 'Block_691977585ea35645e56677_62672151',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_details_js'} */
/* {block 'cat_foot'} */
class Block_3520834225ea35645e59903_76844456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_foot' => 
  array (
    0 => 'Block_3520834225ea35645e59903_76844456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_foot'} */
/* {block 'ckeditor_foot'} */
class Block_6453219095ea35645e5cb98_34021962 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_6453219095ea35645e5cb98_34021962',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_foot'} */
/* {block 'upl_foot'} */
class Block_5624980465ea35645e61b95_37581646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_5624980465ea35645e61b95_37581646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_foot'} */
/* {block 'datatable_js'} */
class Block_16077193835ea35645e64e64_00312522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_16077193835ea35645e64e64_00312522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'datatable_js'} */
/* {block 'w_js'} */
class Block_13746614425ea35645e68080_39175926 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_13746614425ea35645e68080_39175926',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'w_js'} */
/* {block 'date_picker'} */
class Block_17039882005ea35645e6b420_44177721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'date_picker' => 
  array (
    0 => 'Block_17039882005ea35645e6b420_44177721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'date_picker'} */
/* {block 'item_liker_script'} */
class Block_10977465325ea35645e6e634_76656530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_10977465325ea35645e6e634_76656530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_liker_script'} */
}
