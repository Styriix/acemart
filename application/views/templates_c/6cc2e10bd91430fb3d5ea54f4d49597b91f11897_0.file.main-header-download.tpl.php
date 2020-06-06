<?php
/* Smarty version 3.1.33, created on 2019-12-01 06:23:36
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\main-header-download.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de34e582eeae1_26856308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cc2e10bd91430fb3d5ea54f4d49597b91f11897' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\main-header-download.tpl',
      1 => 1575081245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de34e582eeae1_26856308 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['usr']->value['username'];?>
's Profile |<?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4699388145de34e582e05a7_73079569', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7648439935de34e582e5650_12370974', 'cat_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7889856165de34e582e8564_27062464', 'p_s_head');
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
class Block_4699388145de34e582e05a7_73079569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_4699388145de34e582e05a7_73079569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_7648439935de34e582e5650_12370974 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_7648439935de34e582e5650_12370974',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'p_s_head'} */
class Block_7889856165de34e582e8564_27062464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_head' => 
  array (
    0 => 'Block_7889856165de34e582e8564_27062464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_head'} */
}
