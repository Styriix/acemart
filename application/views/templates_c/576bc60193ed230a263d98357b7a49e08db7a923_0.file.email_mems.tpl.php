<?php
/* Smarty version 3.1.33, created on 2019-10-26 08:53:54
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\public\email_mems.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db3ed8247f5b3_98484468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '576bc60193ed230a263d98357b7a49e08db7a923' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\public\\email_mems.tpl',
      1 => 1572072324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db3ed8247f5b3_98484468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19202854965db3ed8244f329_72239091', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4342126695db3ed8246d0b0_10731951', 'code_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9921364465db3ed8247bdb4_39448458', 'code_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_19202854965db3ed8244f329_72239091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_19202854965db3ed8244f329_72239091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title"><h3 class="text-center">Send General Email To All Members.</h3>
    </div>
    <div class="grid-bocy">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/email_all_members" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="form-group">
                <label for="subject">Subject:</label>
                <input id="subject" class="form-control" type="text" name="subject" maxlength="100" required>
            </div>
            <div class="form-group">
                <textarea id="code" class="form-control" name="email_body" rows="10"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-info btn-block">Send Message</button>
        </form>
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'code_head'} */
class Block_4342126695db3ed8246d0b0_10731951 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_head' => 
  array (
    0 => 'Block_4342126695db3ed8246d0b0_10731951',
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
class Block_9921364465db3ed8247bdb4_39448458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_foot' => 
  array (
    0 => 'Block_9921364465db3ed8247bdb4_39448458',
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
