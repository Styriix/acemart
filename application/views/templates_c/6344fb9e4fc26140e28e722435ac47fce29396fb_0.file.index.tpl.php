<?php
/* Smarty version 3.1.33, created on 2020-01-14 10:23:52
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1d88a8c162b0_50757962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6344fb9e4fc26140e28e722435ac47fce29396fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\index.tpl',
      1 => 1578993754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pack/free-files.tpl' => 1,
    'file:pack/flashsale.tpl' => 1,
    'file:pack/feed.tpl' => 1,
    'file:pack/home-new-items.tpl' => 1,
    'file:pack/pop-item.tpl' => 1,
    'file:pack/blog.tpl' => 1,
    'file:pack/service.tpl' => 1,
    'file:pack/counter.tpl' => 1,
    'file:inc/extra/like_count.tpl' => 1,
  ),
),false)) {
function content_5e1d88a8c162b0_50757962 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1167866275e1d88a8bfa421_61539927', 'contents');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18142084505e1d88a8c13c75_70416424', 'item_liker_script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/main.tpl");
}
/* {block 'contents'} */
class Block_1167866275e1d88a8bfa421_61539927 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_1167866275e1d88a8bfa421_61539927',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="section--padding2 bgcolor">

<?php $_smarty_tpl->_subTemplateRender("file:pack/free-files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/flashsale.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/feed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/home-new-items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/pop-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</section>

<?php $_smarty_tpl->_subTemplateRender("file:pack/blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/service.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:pack/counter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
<?php
}
}
/* {/block 'contents'} */
/* {block 'item_liker_script'} */
class Block_18142084505e1d88a8c13c75_70416424 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_liker_script' => 
  array (
    0 => 'Block_18142084505e1d88a8c13c75_70416424',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:inc/extra/like_count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'item_liker_script'} */
}
