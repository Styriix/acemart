<?php
/* Smarty version 3.1.33, created on 2019-11-17 16:26:39
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\public\pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dd166afb52742_64566132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37646c9e6c9a4ff278ea813b0f68808fafa587e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\public\\pages.tpl',
      1 => 1574004396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dd166afb52742_64566132 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14226618565dd166afb2ff21_36262683', 'contents');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/page.tpl");
}
/* {block 'contents'} */
class Block_14226618565dd166afb2ff21_36262683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_14226618565dd166afb2ff21_36262683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="section--padding2 bgcolor">
    
    <?php echo $_smarty_tpl->tpl_vars['page']->value->page_contents;?>

</section>
<?php
}
}
/* {/block 'contents'} */
}
