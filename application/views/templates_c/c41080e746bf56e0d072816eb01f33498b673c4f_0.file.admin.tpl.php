<?php
/* Smarty version 3.1.33, created on 2019-10-02 21:23:57
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\layouts\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d94f94d14b278_68144296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c41080e746bf56e0d072816eb01f33498b673c4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\layouts\\admin.tpl',
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
function content_5d94f94d14b278_68144296 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17415873505d94f94d146343_55925288', 'contents');
?>


</div>

</div>
<!-- Page contents ends here-->



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_17415873505d94f94d146343_55925288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_17415873505d94f94d146343_55925288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
