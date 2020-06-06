<?php
/* Smarty version 3.1.33, created on 2020-01-06 08:05:31
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\main-header-flash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e12dc3b06a8d8_29722144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '075e2ffae798847c0cfb6afc7d58d9650bc7cfa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\main-header-flash.tpl',
      1 => 1578292260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e12dc3b06a8d8_29722144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flash Sale & Discounts | <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
</title>
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['descrip'];?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keyword' content="<?php echo $_smarty_tpl->tpl_vars['app']->value['meta_keys'];?>
">
    <meta name="theme-color" content="<?php echo $_smarty_tpl->tpl_vars['app']->value['site_color'];?>
">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['favicon'];?>
">

    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/style.css">
    <!-- endinject -->

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3599140715e12dc3b060526_56523371', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2472415385e12dc3b062d35_53466006', 'cat_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18507007435e12dc3b0656c3_29992725', 'timer_css');
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
    <body class="preload home1 mutlti-vendor"><?php }
/* {block 'item_deails_css'} */
class Block_3599140715e12dc3b060526_56523371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_3599140715e12dc3b060526_56523371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_2472415385e12dc3b062d35_53466006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_2472415385e12dc3b062d35_53466006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'timer_css'} */
class Block_18507007435e12dc3b0656c3_29992725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'timer_css' => 
  array (
    0 => 'Block_18507007435e12dc3b0656c3_29992725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'timer_css'} */
}
