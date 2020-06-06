<?php
/* Smarty version 3.1.33, created on 2020-04-24 22:14:24
  from 'C:\wamp64\www\application\views\templates\default\layouts\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea364c0452e58_77126986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d94c7347538c7c137ff58f4d47327edf41cfc43' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\layouts\\category.tpl',
      1 => 1570804522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-category.tpl' => 1,
    'file:inc/head/pc-header.tpl' => 1,
    'file:inc/head/mobile-header.tpl' => 1,
    'file:inc/body/banner-area-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5ea364c0452e58_77126986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12439636055ea364c0449f93_28403193', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_12439636055ea364c0449f93_28403193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_12439636055ea364c0449f93_28403193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
