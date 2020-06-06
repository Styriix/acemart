<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:47:52
  from 'C:\wamp64\www\application\views\templates\admin\inc\head\main-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea35e8814bd15_09440331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '807bbf591479fbce9931f549f9f686f08521353d' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\admin\\inc\\head\\main-header.tpl',
      1 => 1575336499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea35e8814bd15_09440331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>AceMart - Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['favicon'];?>
">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9245514645ea35e8812cee6_03658446', 'form_css');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8037223585ea35e88130625_59721345', 'data_table_css');
?>


<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/animate.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
assets/default/css/font-awesome.min.css">
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />


<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/webarch.css" rel="stylesheet" type="text/css" />

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13124458675ea35e8813e8e1_18594427', 'ckeditor_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7851765395ea35e88142158_11328211', 'upl_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16912552785ea35e88145754_49795163', 'contf_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20851372835ea35e88148e68_01727465', 'code_head');
?>


</head>


<body class=""><?php }
/* {block 'form_css'} */
class Block_9245514645ea35e8812cee6_03658446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_css' => 
  array (
    0 => 'Block_9245514645ea35e8812cee6_03658446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'form_css'} */
/* {block 'data_table_css'} */
class Block_8037223585ea35e88130625_59721345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'data_table_css' => 
  array (
    0 => 'Block_8037223585ea35e88130625_59721345',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'data_table_css'} */
/* {block 'ckeditor_head'} */
class Block_13124458675ea35e8813e8e1_18594427 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'ckeditor_head' => 
  array (
    0 => 'Block_13124458675ea35e8813e8e1_18594427',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'ckeditor_head'} */
/* {block 'upl_head'} */
class Block_7851765395ea35e88142158_11328211 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'upl_head' => 
  array (
    0 => 'Block_7851765395ea35e88142158_11328211',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'upl_head'} */
/* {block 'contf_head'} */
class Block_16912552785ea35e88145754_49795163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contf_head' => 
  array (
    0 => 'Block_16912552785ea35e88145754_49795163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'contf_head'} */
/* {block 'code_head'} */
class Block_20851372835ea35e88148e68_01727465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'code_head' => 
  array (
    0 => 'Block_20851372835ea35e88148e68_01727465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'code_head'} */
}
