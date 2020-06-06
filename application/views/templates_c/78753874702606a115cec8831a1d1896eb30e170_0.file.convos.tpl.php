<?php
/* Smarty version 3.1.33, created on 2019-11-19 03:07:34
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\message\convos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd34e666b3230_49000779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78753874702606a115cec8831a1d1896eb30e170' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\message\\convos.tpl',
      1 => 1573761768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd34e666b3230_49000779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['convers']->value) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['convers']->value, 'convo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['convo']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
message/<?php if ($_smarty_tpl->tpl_vars['convo']->value->msg_to_id != $_smarty_tpl->tpl_vars['uid']->value) {
echo $_smarty_tpl->tpl_vars['convo']->value->user_username;
} else {
echo $_smarty_tpl->tpl_vars['convo']->value->alt_user->user_username;
}?>" style="cursor:pointer">
    <?php if ($_smarty_tpl->tpl_vars['convo']->value->msg_to_id != $_smarty_tpl->tpl_vars['uid']->value) {?>
    <div class="chat_list<?php if ($_smarty_tpl->tpl_vars['url_3']->value == $_smarty_tpl->tpl_vars['convo']->value->user_username) {?> active_chat<?php }?>">
    <?php } else { ?>
    <div class="chat_list<?php if ($_smarty_tpl->tpl_vars['url_3']->value == $_smarty_tpl->tpl_vars['convo']->value->alt_user->user_username) {?> active_chat<?php }?>">
    <?php }?>
        <div class="chat_people">
        <?php if ($_smarty_tpl->tpl_vars['convo']->value->msg_to_id != $_smarty_tpl->tpl_vars['uid']->value) {?>
            <div class="chat_img"> <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['convo']->value->user_avater;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['convo']->value->user_username;?>
"> </div>
        <?php } else { ?>
            <div class="chat_img"> <img src="<?php echo $_smarty_tpl->tpl_vars['u_photo']->value;
echo $_smarty_tpl->tpl_vars['convo']->value->alt_user->user_avater;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['convo']->value->user_username;?>
"> </div>
        <?php }?>
        <div class="chat_ib">
            <h5><?php if ($_smarty_tpl->tpl_vars['convo']->value->msg_to_id != $_smarty_tpl->tpl_vars['uid']->value) {
echo $_smarty_tpl->tpl_vars['convo']->value->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['convo']->value->user_lastname;
} else {
echo $_smarty_tpl->tpl_vars['convo']->value->alt_user->user_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['convo']->value->alt_user->user_lastname;
}?> <?php if ($_smarty_tpl->tpl_vars['convo']->value->msg_unread) {?><b class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['convo']->value->msg_unread;?>
</b><?php }?> <span class="chat_date"><?php echo Carbon\Carbon::parse($_smarty_tpl->tpl_vars['convo']->value->msg_created_at)->diffForHumans(array('options'=>Carbon\Carbon::ONE_DAY_WORDS));?>
</span></h5>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['convo']->value->msg_body,50);?>
</p>
        </div>
        </div>
    </div>
    </a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
