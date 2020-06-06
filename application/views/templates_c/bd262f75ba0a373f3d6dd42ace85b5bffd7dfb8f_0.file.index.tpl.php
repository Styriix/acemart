<?php
/* Smarty version 3.1.33, created on 2019-11-19 02:51:47
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\message\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd34ab37d8404_47264738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd262f75ba0a373f3d6dd42ace85b5bffd7dfb8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\message\\index.tpl',
      1 => 1574128303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd34ab37d8404_47264738 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15861076715dd34ab37595c5_80764841', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11066692555dd34ab37cd726_67432757', 'message_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/message.tpl");
}
/* {block 'contents'} */
class Block_15861076715dd34ab37595c5_80764841 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15861076715dd34ab37595c5_80764841',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Inner Page Banner Area Start Here -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
">Home</a>
                        </li>
                        <li class="active">
                            <a href="#">Connect</a>
                        </li>
                    </ul>
                </div>
                <h1 class="page-title">Messaging Section</h1>
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end /.row -->
    </div>
    <!-- end /.container -->
</section>
<!-- Inner Page Banner Area End Here -->


<div class="container">
<div class="row">
      <div class="col-md-12">
          <div class="shortcode_module_title">
              <div class="dashboard__title">
                  <h3>Messaging</h3>
              </div>
          </div>
      </div>
  </div>

<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            
          </div>
          <div class="inbox_chat">

            <span id="get_convos"></span>
            
            
            
            
            
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="chatHistory">

            <?php if ($_smarty_tpl->tpl_vars['msg_to']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['messages']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['msg']->value->msg_from_id != $_smarty_tpl->tpl_vars['sender']->value->user_id) {?>
            <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="<?php if ($_smarty_tpl->tpl_vars['msg']->value->msg_from_id == $_smarty_tpl->tpl_vars['uid']->value) {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['msg']->value->user_avater;
} else {
echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['msg']->value->alt_user->user_avater;
}?>" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p style="min-height:60px"><?php echo auto_link($_smarty_tpl->tpl_vars['msg']->value->msg_body);?>
</p>
                  <span class="time_date"> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['msg']->value->msg_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span></div>
              </div>
            </div>
            <?php } else { ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p style="min-height:60px"><?php echo auto_link($_smarty_tpl->tpl_vars['msg']->value->msg_body);?>
</p>
                <span class="time_date"> <?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['msg']->value->msg_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span> </div>
            </div>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php }?>

            
          </div>
          <?php if ($_smarty_tpl->tpl_vars['msg_to']->value) {?>
          <div class="type_msg">
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
send_msg/<?php echo $_smarty_tpl->tpl_vars['msg_to']->value->user_id;?>
" autocomplete="off">
              <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

              <div class="input_msg_write">
                <input type="text" class="write_msg" name="message" placeholder="Type a message" required/>
                <button class="msg_send_btn" type="submit" name="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>
            </form>
          </div>
          <?php }?>


        </div>
      </div>
      
      
    </div></div>

<?php
}
}
/* {/block 'contents'} */
/* {block 'message_script'} */
class Block_11066692555dd34ab37cd726_67432757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'message_script' => 
  array (
    0 => 'Block_11066692555dd34ab37cd726_67432757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>

  var msgBody = document.getElementById("chatHistory");
  msgBody.scrollTop = msgBody.scrollHeight;

  $(document).ready(function() {

    function loadConvos() {
        $.get("<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
/profile/load_convos<?php if ($_smarty_tpl->tpl_vars['url_2']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['url_2']->value;
}?>", function(data) {
            $('#get_convos').html(data);
            });
    }
    setInterval(function(){
        loadConvos();
    },500);

  });

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'message_script'} */
}
