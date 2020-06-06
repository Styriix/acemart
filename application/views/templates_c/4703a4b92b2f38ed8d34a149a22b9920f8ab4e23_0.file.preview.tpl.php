<?php
/* Smarty version 3.1.33, created on 2019-12-01 21:32:49
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de42371032610_18852338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4703a4b92b2f38ed8d34a149a22b9920f8ab4e23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\preview.tpl',
      1 => 1575219986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de42371032610_18852338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21385380355de42370f355d7_76621895', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/preview.tpl");
}
/* {block 'contents'} */
class Block_21385380355de42370f355d7_76621895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_21385380355de42370f355d7_76621895',
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

  



<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_live_demo;?>
" allowfullscreen frameborder="0" noresize="noresize"></iframe>
</div>

<?php
}
}
/* {/block 'contents'} */
}
