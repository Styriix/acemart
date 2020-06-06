<?php
/* Smarty version 3.1.33, created on 2019-12-06 06:09:02
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\blog\comment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9e26e111da8_42116038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '001762e025446895b59cf534c4deae101f3afd91' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\blog\\comment.tpl',
      1 => 1575608714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9e26e111da8_42116038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20587742465de9e26e089047_30215066', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_20587742465de9e26e089047_30215066 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_20587742465de9e26e089047_30215066',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h4 class="text-danger">Set up blog comments Configuration</h4>
    </div>
    <div class="grid-body">
        <p><strong><h4>How To Set</h4></strong></p>
        <p>
            <ol>
                <li>Visit http://disqus.com</li>
                <li>Create a new wiget/property</li>
                <li>Select "i can not find my platfom"</li>
                <li>In the next screen you will be given a script codes</li>
                <li>Copy the code and paste in box bellow</li>
                <li>Done!</li>
            </ol>
        </p>
        <hr>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_blog_comment_code" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="codes">Disqus code here</label>
                <textarea id="codes" class="form-control" name="code" rows="10"><?php echo $_smarty_tpl->tpl_vars['cmt']->value->blog_cmt_code;?>
</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Configure Comment</button>
        </form>

    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
}
