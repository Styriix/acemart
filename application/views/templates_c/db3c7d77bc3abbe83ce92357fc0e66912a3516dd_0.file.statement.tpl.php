<?php
/* Smarty version 3.1.33, created on 2019-12-04 00:21:08
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\layouts\statement.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de6ede41e93b0_09849103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3c7d77bc3abbe83ce92357fc0e66912a3516dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\layouts\\statement.tpl',
      1 => 1575415263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-statement.tpl' => 1,
    'file:inc/head/menu-area.tpl' => 1,
    'file:inc/body/banner-sec.tpl' => 1,
    'file:inc/foot/footer.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5de6ede41e93b0_09849103 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-statement.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Desktop header goes here -->
<?php $_smarty_tpl->_subTemplateRender("file:inc/head/menu-area.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- header section ends here -->

<?php $_smarty_tpl->_subTemplateRender("file:inc/body/banner-sec.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062664945de6ede41e1b93_24716346', 'contents');
?>



<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_2062664945de6ede41e1b93_24716346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_2062664945de6ede41e1b93_24716346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
