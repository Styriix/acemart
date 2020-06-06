<?php
/* Smarty version 3.1.33, created on 2019-11-17 16:20:50
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\layouts\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd16552234e69_66527625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bfd603db6fbdab9e81d23e92a7c5412761b69008' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\layouts\\page.tpl',
      1 => 1574004043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-page.tpl' => 1,
    'file:inc/head/menu-area.tpl' => 1,
    'file:inc/body/banner-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5dd16552234e69_66527625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Desktop header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/menu-area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Mobile header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/body/banner-sec.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- header section ends here -->

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18717024265dd1655221c3c3_51121365', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_18717024265dd1655221c3c3_51121365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_18717024265dd1655221c3c3_51121365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
