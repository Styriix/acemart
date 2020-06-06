<?php
/* Smarty version 3.1.33, created on 2019-10-17 13:38:54
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\pages\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da852ce323ea4_47057960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b39e1561d096ad1c909c64babbf2b6920bf1744' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\pages\\create.tpl',
      1 => 1571311842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da852ce323ea4_47057960 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21245669875da852ce314298_22544439', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15842545735da852ce31cd52_82058158', 'code_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11460520755da852ce322239_30276433', 'code_foot');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/admin.tpl");
}
/* {block 'contents'} */
class Block_21245669875da852ce314298_22544439 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_21245669875da852ce314298_22544439',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php echo $_smarty_tpl->tpl_vars['form_alert']->value;?>

<div class="grid simple">
    <div class="grid-title">
        <h3 class="text-center">Create New Page</h3>
    </div>
    <div class="grid-body">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value['admin'];?>
/create_new_page" method="post" class="validate">
            <?php echo $_smarty_tpl->tpl_vars['csrf_token']->value;?>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_name">Page Name</label>
                        <input id="page_name" class="form-control" type="text" name="page_name" maxlength="20" required>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page_contents">Page Contents (Only Html tags)</label>
                        <textarea id="code" class="form-control" name="page_contents" rows="3" required></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-info btn-block">Create New Page</button>
                </div>
            </div>
        </form>
    </div>
</div>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'code_head'} */
class Block_15842545735da852ce31cd52_82058158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_head' => 
  array (
    0 => 'Block_15842545735da852ce31cd52_82058158',
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
class Block_11460520755da852ce322239_30276433 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_foot' => 
  array (
    0 => 'Block_11460520755da852ce322239_30276433',
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
