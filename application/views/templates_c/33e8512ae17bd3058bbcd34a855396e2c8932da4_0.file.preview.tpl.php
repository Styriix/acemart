<?php
/* Smarty version 3.1.33, created on 2020-05-08 14:01:26
  from 'C:\wamp64\www\acemart\application\views\templates\digcool\layouts\preview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eb56636cdb200_19057907',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33e8512ae17bd3058bbcd34a855396e2c8932da4' => 
    array (
      0 => 'C:\\wamp64\\www\\acemart\\application\\views\\templates\\digcool\\layouts\\preview.tpl',
      1 => 1575209874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:inc/head/main-header-preview.tpl' => 1,
    'file:inc/foot/main-footer.tpl' => 1,
  ),
),false)) {
function content_5eb56636cdb200_19057907 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:inc/head/main-header-preview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2051601895eb56636cd31c4_12602975', 'contents');
?>



<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
preview/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:inc/foot/main-footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'contents'} */
class Block_2051601895eb56636cd31c4_12602975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contents' => 
  array (
    0 => 'Block_2051601895eb56636cd31c4_12602975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contents'} */
}
