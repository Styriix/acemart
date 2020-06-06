<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:37:28
  from 'C:\wamp64\www\acemart\application\views\templates\digcool\inc\foot\main-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb560983a2099_86501713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0b5d53f1e00d363bf7b1e40e34f5e33a8ecbe02' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\digcool\\inc\\foot\\main-footer.tpl',
      1 => 1578993828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb560983a2099_86501713 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9599164385eb56098319bb6_28114545', 'flip_timer');
?>

    
    <!-- endinject -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16118400195eb560983240a1_94784887', 'count'-'down'-'timer');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15596075485eb5609832a719_88040717', 'profle_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17201083275eb56098330847_69684963', 'message_script');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15752680565eb560983385f7_07186957', 'timer_js');
?>

        

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14786777215eb56098342880_86943804', 'p_s_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15472174955eb56098349418_19124415', 'item_details_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18689143035eb56098350855_65517351', 'cat_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15587553805eb560983555a6_54747878', 'ckeditor_foot');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1747285635eb56098358c34_45391672', 'upl_foot');
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9230344565eb5609835c1c1_12848814', 'datatable_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11550142735eb5609835f7c4_02283934', 'w_js');
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4911771245eb56098362c57_50254831', 'item_liker_script');
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
class Block_9599164385eb56098319bb6_28114545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'flip_timer' => 
  array (
    0 => 'Block_9599164385eb56098319bb6_28114545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'flip_timer'} */
/* {block 'count'-'down'-'timer'} */
class Block_16118400195eb560983240a1_94784887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'count\'-\'down\'-\'timer' => 
  array (
    0 => 'Block_16118400195eb560983240a1_94784887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'count'-'down'-'timer'} */
/* {block 'profle_script'} */
class Block_15596075485eb5609832a719_88040717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'profle_script' => 
  array (
    0 => 'Block_15596075485eb5609832a719_88040717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'profle_script'} */
/* {block 'message_script'} */
class Block_17201083275eb56098330847_69684963 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message_script' => 
  array (
    0 => 'Block_17201083275eb56098330847_69684963',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'message_script'} */
/* {block 'timer_js'} */
class Block_15752680565eb560983385f7_07186957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'timer_js' => 
  array (
    0 => 'Block_15752680565eb560983385f7_07186957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'timer_js'} */
/* {block 'p_s_foot'} */
class Block_14786777215eb56098342880_86943804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_foot' => 
  array (
    0 => 'Block_14786777215eb56098342880_86943804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_foot'} */
/* {block 'item_details_js'} */
class Block_15472174955eb56098349418_19124415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_details_js' => 
  array (
    0 => 'Block_15472174955eb56098349418_19124415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_details_js'} */
/* {block 'cat_foot'} */
class Block_18689143035eb56098350855_65517351 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_foot' => 
  array (
    0 => 'Block_18689143035eb56098350855_65517351',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_foot'} */
/* {block 'ckeditor_foot'} */
class Block_15587553805eb560983555a6_54747878 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_foot' => 
  array (
    0 => 'Block_15587553805eb560983555a6_54747878',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_foot'} */
/* {block 'upl_foot'} */
class Block_1747285635eb56098358c34_45391672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_foot' => 
  array (
    0 => 'Block_1747285635eb56098358c34_45391672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_foot'} */
/* {block 'datatable_js'} */
class Block_9230344565eb5609835c1c1_12848814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_js' => 
  array (
    0 => 'Block_9230344565eb5609835c1c1_12848814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'datatable_js'} */
/* {block 'w_js'} */
class Block_11550142735eb5609835f7c4_02283934 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_js' => 
  array (
    0 => 'Block_11550142735eb5609835f7c4_02283934',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'w_js'} */
/* {block 'item_liker_script'} */
class Block_4911771245eb56098362c57_50254831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_4911771245eb56098362c57_50254831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_liker_script'} */
}
