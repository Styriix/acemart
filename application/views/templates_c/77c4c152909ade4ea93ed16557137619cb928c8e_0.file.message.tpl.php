<?php
/* Smarty version 3.1.33, created on 2019-11-12 19:12:06
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\layouts\message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcaf5f61a5295_94190024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77c4c152909ade4ea93ed16557137619cb928c8e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\layouts\\message.tpl',
      1 => 1573582001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-message.tpl' => 1,
    'file:inc/head/pc-header.tpl' => 1,
    'file:inc/head/mobile-header.tpl' => 1,
    'file:inc/body/banner-area-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5dcaf5f61a5295_94190024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Header area goeas here -->
<header>
<!-- Desktop header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/pc-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Mobile header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/mobile-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header>
<!-- header section ends here -->

<?php $_smarty_tpl->_subTemplateRender("file:inc/body/banner-area-sec.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4817364825dcaf5f619cef1_00509321', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_4817364825dcaf5f619cef1_00509321 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4817364825dcaf5f619cef1_00509321',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
