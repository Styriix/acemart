<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:28:52
  from 'C:\wamp64\www\acemart\application\views\templates\admin\settings\live-chat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55e94a48256_71933836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c69277992744c670fd13b468a6ca5e8a8b0a69e' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\admin\\settings\\live-chat.tpl',
      1 => 1571468201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb55e94a48256_71933836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14502854155eb55e94a188b2_67172315', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_14502854155eb55e94a188b2_67172315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14502854155eb55e94a188b2_67172315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-body">
        <h4 class="text-center card-title">How to Set Up?</h4>
        <ol>
            <li>Vist <a href="http://tawk.to">WWW.TAWK.TO</a></li>
            <li>Create an account</li>
            <li>Select your language</li>
            <li>Provide your website linke and name</li>
            <li>Add addition admin if any</li>
            <li>Copy your wiget code and paste it in the box below</li>
        </ol>
        <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/set_live_chat" method="post">
        <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

        <div class="form-group">
          <label for="wiget">Wiget Code</label>
          <textarea class="form-control" name="code" rows="13"><?php echo $_smarty_tpl->tpl_vars['app']->value['lc'];?>
</textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Save Settings</button>
        </div>
        </form>
    </div>
</div>


<?php
}
}
/* {/block 'contents'} */
}
