<?php
/* Smarty version 3.1.33, created on 2020-01-05 12:34:31
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\inc\head\main-header-flash.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e11c9c7039730_53321764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '038f01844b1de095183958135231cea18e4c851a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\inc\\head\\main-header-flash.tpl',
      1 => 1578224046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e11c9c7039730_53321764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Flash Sale & Discount | <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
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

    <!-- Normalize CSS --> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/normalize.css">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4661453745e11c9c7024801_03819089', 'css');
?>


    <!-- Main CSS -->         
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">

    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/font-awesome.min.css">
    
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/vendor/OwlCarousel/owl.theme.default.min.css">
    
    <!-- Main Menu CSS -->      
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/meanmenu.min.css">

    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/jquery.datetimepicker.css">

        <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/reImageGrid.css">

    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/hover-min.css">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15925044475e11c9c702b098_50430317', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5424821655e11c9c702d0e1_74869206', 'cat_head');
?>


    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/style.css">

    <!-- Modernizr Js -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/login-register.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/modernizr-2.8.3.min.js"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>

    </head>
    <body><?php }
/* {block 'css'} */
class Block_4661453745e11c9c7024801_03819089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_4661453745e11c9c7024801_03819089',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'css'} */
/* {block 'item_deails_css'} */
class Block_15925044475e11c9c702b098_50430317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_15925044475e11c9c702b098_50430317',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_5424821655e11c9c702d0e1_74869206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_5424821655e11c9c702d0e1_74869206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
}
