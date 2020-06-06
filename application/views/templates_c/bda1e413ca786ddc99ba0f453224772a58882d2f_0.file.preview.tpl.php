<?php
/* Smarty version 3.1.33, created on 2019-12-01 15:18:04
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\layouts\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de3cb9c212cf0_63971003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bda1e413ca786ddc99ba0f453224772a58882d2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\layouts\\preview.tpl',
      1 => 1575209874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-preview.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5de3cb9c212cf0_63971003 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1790601665de3cb9c1f3d43_23090659', 'contents');
?>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
preview/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_1790601665de3cb9c1f3d43_23090659 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_1790601665de3cb9c1f3d43_23090659',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
