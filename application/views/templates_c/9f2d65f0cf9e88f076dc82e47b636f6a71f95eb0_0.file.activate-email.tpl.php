<?php
/* Smarty version 3.1.33, created on 2019-10-13 04:18:01
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\email\activate-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da28959326503_80914831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f2d65f0cf9e88f076dc82e47b636f6a71f95eb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\email\\activate-email.tpl',
      1 => 1570933076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da28959326503_80914831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8741851055da289592ed174_30596628', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8393640645da28959311374_51439996', 'code_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9994384035da28959322c70_13451755', 'code_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_8741851055da289592ed174_30596628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_8741851055da289592ed174_30596628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title"><h3 class="text-center">Customize Your Email Activation Message</h3>
    <p class="text-center">This field require a basic html knowledge to design you preferd email template. You can also get free email templates from external resources. <br>
    <b>Note:</b> Do no broken the Specific tags written with { and } form example {user_firstname} carries the username of the custormer <b> <a href="<?php echo $_smarty_tpl->tpl_vars['url_sample_tags']->value;?>
"> Click here </a></b> to acess more of the the availabe user tags. <br>
    <strong><font color="red">Only HTML tags is allowed!</font></strong></p></div>
    <div class="grid-bocy">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/update_email_templates/2/<?php echo $_smarty_tpl->tpl_vars['url_3']->value;?>
" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <textarea id="code" class="form-control" name="email_body" rows="10" required><?php echo $_smarty_tpl->tpl_vars['email']->value->mail_body;?>
</textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Save Active Email Template</button>
        </form>
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'code_head'} */
class Block_8393640645da28959311374_51439996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_head' => 
  array (
    0 => 'Block_8393640645da28959311374_51439996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/codemirror.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/fold/foldgutter.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/dialog/dialog.css">
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/theme/monokai.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/lib/codemirror.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/search/searchcursor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/search/search.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/dialog/dialog.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/edit/matchbrackets.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/edit/closebrackets.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/comment/comment.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/wrap/hardwrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/fold/foldcode.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/addon/fold/brace-fold.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/codes/keymap/sublime.js"><?php echo '</script'; ?>
> 
<?php
}
}
/* {/block 'code_head'} */
/* {block 'code_foot'} */
class Block_9994384035da28959322c70_13451755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_foot' => 
  array (
    0 => 'Block_9994384035da28959322c70_13451755',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
<?php echo '<script'; ?>
>

var value = "// The bindings defined specifically in the Sublime Text mode\nvar bindings = {\n";
var map = CodeMirror.keyMap.sublime;
for (var key in map) {
    var val = map[key];
    if (key != "fallthrough" && val != "..." && (!/find/.test(val) || /findUnder/.test(val)))
    value += "  \"" + key + "\": \"" + val + "\",\n";
}
value += "}\n\n// The implementation of joinLines\n";
value += CodeMirror.commands.joinLines.toString().replace(/^function\s*\(/, "function joinLines(").replace(/\n  /g, "\n") + "\n";
var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
    value: value,
    lineNumbers: true,
    mode: "javascript",
    keyMap: "sublime",
    autoCloseBrackets: true,
    matchBrackets: true,
    showCursorWhenSelecting: true,
    theme: "monokai",
    tabSize: 2
});

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'code_foot'} */
}
