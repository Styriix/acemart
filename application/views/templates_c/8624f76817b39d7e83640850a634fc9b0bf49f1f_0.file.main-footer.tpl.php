<?php
/* Smarty version 3.1.33, created on 2020-01-14 10:23:52
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\foot\main-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1d88a8e1c652_31535254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8624f76817b39d7e83640850a634fc9b0bf49f1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\foot\\main-footer.tpl',
      1 => 1578993828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1d88a8e1c652_31535254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <!-- inject:js -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/plugins.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/script.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['timer']->value;?>
/flipclock.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17940241535e1d88a8debec2_42975176', 'flip_timer');
?>

    
    <!-- endinject -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5363321535e1d88a8dee673_52739518', 'count'-'down'-'timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13473498145e1d88a8defe83_72702619', 'profle_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10799064445e1d88a8df1603_90117860', 'message_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18134766245e1d88a8df2d17_45410219', 'timer_js');
?>

        

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8412791865e1d88a8df4450_47787732', 'p_s_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10106366225e1d88a8df5be3_05988619', 'item_details_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8290430525e1d88a8df7233_17782538', 'cat_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9630625285e1d88a8df8871_81914346', 'ckeditor_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20709722315e1d88a8df9f52_03289081', 'upl_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9911532935e1d88a8dfb551_65549074', 'datatable_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16252006565e1d88a8dfcb40_20909676', 'w_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14556113745e1d88a8dfe1e2_60715490', 'item_liker_script');
?>




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
class Block_17940241535e1d88a8debec2_42975176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_17940241535e1d88a8debec2_42975176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'flip_timer'} */
/* {block 'count'-'down'-'timer'} */
class Block_5363321535e1d88a8dee673_52739518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'count\'-\'down\'-\'timer' => 
  array (
    0 => 'Block_5363321535e1d88a8dee673_52739518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'count'-'down'-'timer'} */
/* {block 'profle_script'} */
class Block_13473498145e1d88a8defe83_72702619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_13473498145e1d88a8defe83_72702619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'profle_script'} */
/* {block 'message_script'} */
class Block_10799064445e1d88a8df1603_90117860 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message_script' => 
  array (
    0 => 'Block_10799064445e1d88a8df1603_90117860',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'message_script'} */
/* {block 'timer_js'} */
class Block_18134766245e1d88a8df2d17_45410219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'timer_js' => 
  array (
    0 => 'Block_18134766245e1d88a8df2d17_45410219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'timer_js'} */
/* {block 'p_s_foot'} */
class Block_8412791865e1d88a8df4450_47787732 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_8412791865e1d88a8df4450_47787732',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_foot'} */
/* {block 'item_details_js'} */
class Block_10106366225e1d88a8df5be3_05988619 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_details_js' => 
  array (
    0 => 'Block_10106366225e1d88a8df5be3_05988619',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_details_js'} */
/* {block 'cat_foot'} */
class Block_8290430525e1d88a8df7233_17782538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_foot' => 
  array (
    0 => 'Block_8290430525e1d88a8df7233_17782538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_foot'} */
/* {block 'ckeditor_foot'} */
class Block_9630625285e1d88a8df8871_81914346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_9630625285e1d88a8df8871_81914346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_foot'} */
/* {block 'upl_foot'} */
class Block_20709722315e1d88a8df9f52_03289081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_20709722315e1d88a8df9f52_03289081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_foot'} */
/* {block 'datatable_js'} */
class Block_9911532935e1d88a8dfb551_65549074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_9911532935e1d88a8dfb551_65549074',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'datatable_js'} */
/* {block 'w_js'} */
class Block_16252006565e1d88a8dfcb40_20909676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_16252006565e1d88a8dfcb40_20909676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'w_js'} */
/* {block 'item_liker_script'} */
class Block_14556113745e1d88a8dfe1e2_60715490 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_14556113745e1d88a8dfe1e2_60715490',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_liker_script'} */
}
