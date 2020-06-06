<?php
/* Smarty version 3.1.33, created on 2020-05-08 14:01:26
  from 'C:\wamp64\www\acemart\application\views\templates\digcool\public\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb56636c91462_26489230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d197feb99bd8fa88add31fe3ff1064d836538bd' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\digcool\\public\\preview.tpl',
      1 => 1575252128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb56636c91462_26489230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11772912125eb56636c57e23_42998661', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/preview.tpl");
}
/* {block 'contents'} */
class Block_11772912125eb56636c57e23_42998661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_11772912125eb56636c57e23_42998661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<nav class="navbar fixed-top navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" alt=""></a>
  <span class="navbar-toggler">
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
item/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
" class="btn btn-md w-sm btn-info m-r-sm m-t-xxs"><strong>Purchase - <?php echo $_smarty_tpl->tpl_vars['app']->value['currency'];
echo number_format($_smarty_tpl->tpl_vars['item']->value->item_regu_price,2);?>
</strong></a>
    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_live_demo;?>
" class="btn btn-warning btn-md">Remove frame</a>
  </span>
 </nav>

  




  <iframe src="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_live_demo;?>
" frameborder="0" allowfullscreen></iframe>


<?php
}
}
/* {/block 'contents'} */
}
