<?php
/* Smarty version 3.1.33, created on 2020-01-06 08:05:30
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\layouts\flash-sale.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e12dc3ad6cdc7_64587363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'effc82ba6d1d36ec55443c7ec57a17911dca2e54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\layouts\\flash-sale.tpl',
      1 => 1578292396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-flash.tpl' => 1,
    'file:inc/head/menu-area.tpl' => 1,
    'file:inc/body/banner-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5e12dc3ad6cdc7_64587363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-flash.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Header area goeas here -->
<!-- Desktop header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/menu-area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Mobile header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/body/banner-sec.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15564542125e12dc3ad65e88_35090202', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_15564542125e12dc3ad65e88_35090202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_15564542125e12dc3ad65e88_35090202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
