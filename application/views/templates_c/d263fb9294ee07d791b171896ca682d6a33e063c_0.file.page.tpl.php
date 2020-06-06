<?php
/* Smarty version 3.1.33, created on 2020-05-08 13:29:59
  from 'C:\wamp64\www\acemart\application\views\templates\default\layouts\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb55ed73cee19_70378059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd263fb9294ee07d791b171896ca682d6a33e063c' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\default\\layouts\\page.tpl',
      1 => 1571315564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-page.tpl' => 1,
    'file:inc/head/pc-header.tpl' => 1,
    'file:inc/head/mobile-header.tpl' => 1,
    'file:inc/body/banner-area-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5eb55ed73cee19_70378059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_242702015eb55ed73c5dd3_35050185', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_242702015eb55ed73c5dd3_35050185 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_242702015eb55ed73c5dd3_35050185',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
