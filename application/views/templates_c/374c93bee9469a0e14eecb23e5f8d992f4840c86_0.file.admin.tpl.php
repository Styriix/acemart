<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:47:52
  from 'C:\wamp64\www\application\views\templates\admin\layouts\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35e880fc8e8_47980919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '374c93bee9469a0e14eecb23e5f8d992f4840c86' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\layouts\\admin.tpl',
      1 => 1570044210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header.tpl' => 1,
    'file:inc/head/top-menu.tpl' => 1,
    'file:inc/body/left-sidebar.tpl' => 1,
    'file:inc/body/title-bar.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5ea35e880fc8e8_47980919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/head/top-menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Page started -->
<div class="page-container row-fluid">

<?php $_smarty_tpl->_subTemplateRender("file:inc/body/left-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Page contents start here-->
<div class="page-content">
<div class="clearfix"></div>

<!-- Page start -->
<div class="content">
<?php $_smarty_tpl->_subTemplateRender("file:inc/body/title-bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3109882425ea35e880f7822_76907203', 'contents');
?>


</div>

</div>
<!-- Page contents ends here-->



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_3109882425ea35e880f7822_76907203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_3109882425ea35e880f7822_76907203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
