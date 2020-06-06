<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:12:36
  from 'C:\wamp64\www\application\views\templates\default\public\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35644ecf408_38824750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17ecb803fb69ff73731667c3fd201e054dbce433' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\public\\index.tpl',
      1 => 1578845443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pack/freebies.tpl' => 1,
    'file:pack/flashsale.tpl' => 1,
    'file:pack/feed.tpl' => 1,
    'file:pack/home-new-items.tpl' => 1,
    'file:pack/pop-item.tpl' => 1,
    'file:pack/blog.tpl' => 1,
    'file:pack/service.tpl' => 1,
    'file:inc/extra/like_count.tpl' => 1,
  ),
),false)) {
function content_5ea35644ecf408_38824750 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4583851205ea35644e98379_22552827', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21098176955ea35644ec7d33_00288474', 'item_liker_script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block 'contents'} */
class Block_4583851205ea35644e98379_22552827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_4583851205ea35644e98379_22552827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender("file:pack/freebies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/flashsale.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/home-new-items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/pop-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/service.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'contents'} */
/* {block 'item_liker_script'} */
class Block_21098176955ea35644ec7d33_00288474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_21098176955ea35644ec7d33_00288474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
