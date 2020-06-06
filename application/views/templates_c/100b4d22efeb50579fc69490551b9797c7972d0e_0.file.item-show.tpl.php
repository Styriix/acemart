<?php
/* Smarty version 3.1.33, created on 2019-11-17 15:05:01
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\layouts\item-show.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd1538d3efe02_56877374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '100b4d22efeb50579fc69490551b9797c7972d0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\layouts\\item-show.tpl',
      1 => 1573999496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-single.tpl' => 1,
    'file:inc/head/menu-area.tpl' => 1,
    'file:inc/body/banner-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5dd1538d3efe02_56877374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-single.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Desktop header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/menu-area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/body/banner-sec.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21373497195dd1538d3d6752_91775309', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_21373497195dd1538d3d6752_91775309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_21373497195dd1538d3d6752_91775309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
