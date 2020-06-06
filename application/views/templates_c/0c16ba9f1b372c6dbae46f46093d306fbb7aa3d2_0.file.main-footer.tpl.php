<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:25:26
  from 'C:\wamp64\www\acemart\application\views\templates\default\inc\foot\main-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55dc6361515_01493919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c16ba9f1b372c6dbae46f46093d306fbb7aa3d2' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\inc\\foot\\main-footer.tpl',
      1 => 1578845248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55dc6361515_01493919 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14157521475eb55dc62e9ab4_25993976', 'flip_timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11732522775eb55dc62efe30_75820955', 'count'-'down'-'timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3580757715eb55dc62f36a9_01745570', 'profle_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10593045385eb55dc62f7513_99533188', 'message_script');
?>

        

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13549257535eb55dc62fb310_53898630', 'p_s_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19793507495eb55dc6302412_85007029', 'item_details_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17163089215eb55dc63069e2_61336678', 'cat_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10248732065eb55dc630a9c0_74536589', 'ckeditor_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1138175945eb55dc6314c10_63261832', 'upl_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5965266685eb55dc6318ae5_47301145', 'datatable_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5608038545eb55dc631c0f8_50972013', 'w_js');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9143840525eb55dc6320117_07154710', 'date_picker');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5434245445eb55dc6323b50_37915547', 'item_liker_script');
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
class Block_14157521475eb55dc62e9ab4_25993976 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_14157521475eb55dc62e9ab4_25993976',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'flip_timer'} */
/* {block 'count'-'down'-'timer'} */
class Block_11732522775eb55dc62efe30_75820955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'count\'-\'down\'-\'timer' => 
  array (
    0 => 'Block_11732522775eb55dc62efe30_75820955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'count'-'down'-'timer'} */
/* {block 'profle_script'} */
class Block_3580757715eb55dc62f36a9_01745570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_3580757715eb55dc62f36a9_01745570',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'profle_script'} */
/* {block 'message_script'} */
class Block_10593045385eb55dc62f7513_99533188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message_script' => 
  array (
    0 => 'Block_10593045385eb55dc62f7513_99533188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'message_script'} */
/* {block 'p_s_foot'} */
class Block_13549257535eb55dc62fb310_53898630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_13549257535eb55dc62fb310_53898630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_foot'} */
/* {block 'item_details_js'} */
class Block_19793507495eb55dc6302412_85007029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_details_js' => 
  array (
    0 => 'Block_19793507495eb55dc6302412_85007029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_details_js'} */
/* {block 'cat_foot'} */
class Block_17163089215eb55dc63069e2_61336678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_foot' => 
  array (
    0 => 'Block_17163089215eb55dc63069e2_61336678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_foot'} */
/* {block 'ckeditor_foot'} */
class Block_10248732065eb55dc630a9c0_74536589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_10248732065eb55dc630a9c0_74536589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_foot'} */
/* {block 'upl_foot'} */
class Block_1138175945eb55dc6314c10_63261832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_1138175945eb55dc6314c10_63261832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_foot'} */
/* {block 'datatable_js'} */
class Block_5965266685eb55dc6318ae5_47301145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_5965266685eb55dc6318ae5_47301145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'datatable_js'} */
/* {block 'w_js'} */
class Block_5608038545eb55dc631c0f8_50972013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_5608038545eb55dc631c0f8_50972013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'w_js'} */
/* {block 'date_picker'} */
class Block_9143840525eb55dc6320117_07154710 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'date_picker' => 
  array (
    0 => 'Block_9143840525eb55dc6320117_07154710',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'date_picker'} */
/* {block 'item_liker_script'} */
class Block_5434245445eb55dc6323b50_37915547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_5434245445eb55dc6323b50_37915547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_liker_script'} */
}
