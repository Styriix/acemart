<?php
/* Smarty version 3.1.33, created on 2020-04-24 21:27:20
  from 'C:\wamp64\www\application\views\templates\default\inc\head\main-header-single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ea359b8c351c3_42437858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598ec7fd2edf8a41482972e54b548160f2448194' => 
    array (
      0 => 'C:\\wamp64\\www\\application\\views\\templates\\default\\inc\\head\\main-header-single.tpl',
      1 => 1578312751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ea359b8c351c3_42437858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\wamp64\\www\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
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
    <meta property="og:title" content="Buy <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
">
    <meta property="og:description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
">
    <meta property="og:image" content="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
">
    <meta property="og:url" content="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];
echo $_smarty_tpl->tpl_vars['item']->value->item_id;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->item_slug;?>
">

    <!-- Twitter open graphics -->
    <meta name="twitter:title" content="Buy <?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
 - <?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
">
    <meta name="twitter:description" content="<?php echo smarty_modifier_truncate(smarty_modifier_replace(smarty_modifier_replace(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['item']->value->item_description),'"',''),"'",''),300);?>
">
    <meta name="twitter:image" content="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
">
    <meta name="twitter:card" content="<?php echo $_smarty_tpl->tpl_vars['prd_img']->value;
echo $_smarty_tpl->tpl_vars['item']->value->pre_name;?>
">

    <!-- Meta Tags -->
    <title><?php echo $_smarty_tpl->tpl_vars['item']->value->item_name;?>
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
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['timer']->value;?>
/flipclock.css">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2426616375ea359b8c16882_37062105', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7128447935ea359b8c1b187_15243553', 'cat_head');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14778931625ea359b8c2a8c2_13518081', 'stripe_js');
?>

    <?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>

    </head>
    <body><?php }
/* {block 'item_deails_css'} */
class Block_2426616375ea359b8c16882_37062105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_2426616375ea359b8c16882_37062105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_7128447935ea359b8c1b187_15243553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_7128447935ea359b8c1b187_15243553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'stripe_js'} */
class Block_14778931625ea359b8c2a8c2_13518081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stripe_js' => 
  array (
    0 => 'Block_14778931625ea359b8c2a8c2_13518081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stripe_js'} */
}
