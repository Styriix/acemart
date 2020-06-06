<?php
/* Smarty version 3.1.33, created on 2019-12-06 03:24:54
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\inc\head\main-header-blog-single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de9bbf6add579_58040590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f53d683dbe63e60825b4b79537667641130ba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\inc\\head\\main-header-blog-single.tpl',
      1 => 1575599089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de9bbf6add579_58040590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Open graphics meta tags -->

    <!-- Acebook open graphics -->
    <meta property="og:title" content="Buy <?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
 - <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
">
    <meta property="og:description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
">
    <meta property="og:image" content="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['no']-'img';
}?>">
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
">

    <!-- Twitter open graphics -->
    <meta name="twitter:title" content="Buy <?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
 - <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
">
    <meta name="twitter:description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['blog']->value->blog_contents),'"',''),"'",''),300);?>
">
    <meta name="twitter:image" content="<?php if ($_smarty_tpl->tpl_vars['blog']->value->blog_preview) {
echo $_smarty_tpl->tpl_vars['blogg']->value['blog_img'];
echo $_smarty_tpl->tpl_vars['blog']->value->blog_preview;
} else {
echo $_smarty_tpl->tpl_vars['blogg']->value['no']-'img';
}?>">
    <meta name="twitter:card" content="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
blog/<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_slug;?>
">

    <!-- Meta Tags -->
    <title><?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
 | <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
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

    <!-- Main CSS -->         
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/main.css">

    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/bootstrap.min.css">

    <!-- Animate CSS --> 
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/dist/css/social-share-kit.css" type="text/css">

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

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/modal-login.css">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12166027885de9bbf6ad3051_91328716', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6382721505de9bbf6ad5710_61819565', 'cat_head');
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
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8033235995de9bbf6ad9232_69076235', 'stripe_js');
?>

    <?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>

    </head>
    <body><?php }
/* {block 'item_deails_css'} */
class Block_12166027885de9bbf6ad3051_91328716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_12166027885de9bbf6ad3051_91328716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_6382721505de9bbf6ad5710_61819565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_6382721505de9bbf6ad5710_61819565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'stripe_js'} */
class Block_8033235995de9bbf6ad9232_69076235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stripe_js' => 
  array (
    0 => 'Block_8033235995de9bbf6ad9232_69076235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stripe_js'} */
}
