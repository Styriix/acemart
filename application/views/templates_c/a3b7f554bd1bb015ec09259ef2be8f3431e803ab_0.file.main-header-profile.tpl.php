<?php
/* Smarty version 3.1.33, created on 2020-02-06 00:46:22
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\main-header-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e3b53ce02f152_52838773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b7f554bd1bb015ec09259ef2be8f3431e803ab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\main-header-profile.tpl',
      1 => 1575081275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3b53ce02f152_52838773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['up']->value->user_username;?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18513415775e3b53ce022533_31675568', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5322103975e3b53ce0252d8_38596880', 'cat_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16903989555e3b53ce027192_98913413', 'p_s_head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115424195e3b53ce028ec6_65119518', 'w_css');
?>



    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13855724145e3b53ce02ab91_99353773', 'datatable_css');
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
class Block_18513415775e3b53ce022533_31675568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_18513415775e3b53ce022533_31675568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_5322103975e3b53ce0252d8_38596880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_5322103975e3b53ce0252d8_38596880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'p_s_head'} */
class Block_16903989555e3b53ce027192_98913413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'p_s_head' => 
  array (
    0 => 'Block_16903989555e3b53ce027192_98913413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'p_s_head'} */
/* {block 'w_css'} */
class Block_115424195e3b53ce028ec6_65119518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'w_css' => 
  array (
    0 => 'Block_115424195e3b53ce028ec6_65119518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'w_css'} */
/* {block 'datatable_css'} */
class Block_13855724145e3b53ce02ab91_99353773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'datatable_css' => 
  array (
    0 => 'Block_13855724145e3b53ce02ab91_99353773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'datatable_css'} */
}
