<?php
/* Smarty version 3.1.33, created on 2020-01-17 21:59:35
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\main-header-upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e222037c50b67_12098492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f6e9082246196aaee1548f562de77220a49f10' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\main-header-upload.tpl',
      1 => 1575081288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e222037c50b67_12098492 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Upload New Item |<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['descrip'];?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="<?php echo $_smarty_tpl->tpl_vars['app']->value['meta_keys'];?>
">
    <meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['site_color'];?>
">

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/style.css">
    <!-- endinject -->



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285302605e222037c484e0_36436780', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9315521085e222037c4a487_49560215', 'cat_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_439949025e222037c4b864_07129709', 'p_s_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9311307265e222037c4cbb9_62442517', 'ckeditor_head');
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19265645405e222037c4dea1_31310939', 'upl_head');
?>


    <!-- Modernizr Js -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/login-register.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>

    </head>
    <body><?php }
/* {block 'item_deails_css'} */
class Block_285302605e222037c484e0_36436780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_285302605e222037c484e0_36436780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_9315521085e222037c4a487_49560215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_9315521085e222037c4a487_49560215',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'p_s_head'} */
class Block_439949025e222037c4b864_07129709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_head' => 
  array (
    0 => 'Block_439949025e222037c4b864_07129709',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_head'} */
/* {block 'ckeditor_head'} */
class Block_9311307265e222037c4cbb9_62442517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_9311307265e222037c4cbb9_62442517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_head'} */
/* {block 'upl_head'} */
class Block_19265645405e222037c4dea1_31310939 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_19265645405e222037c4dea1_31310939',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_head'} */
}
