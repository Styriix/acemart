<?php
/* Smarty version 3.1.33, created on 2019-12-06 23:54:11
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\inc\head\main-header-blog-single.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5deadc13089ff3_60494095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbd12e48606571f9e0ddb7829d7433c467cb7f3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\inc\\head\\main-header-blog-single.tpl',
      1 => 1575672842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5deadc13089ff3_60494095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Open graphics meta tags -->

    <!-- Acebook open graphics -->
    <meta property="og:title" content="<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
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
    <meta name="twitter:title" content="<?php echo $_smarty_tpl->tpl_vars['blog']->value->blog_title;?>
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

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/plugins.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/style.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/dist/css/social-share-kit.css" type="text/css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/modal-login.csss">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3263739415deadc13079571_40330665', 'item_deails_css');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20718170505deadc1307be16_34330319', 'cat_head');
?>


    <!-- Modernizr Js -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/css/login-register.css" rel="stylesheet" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['ast']->value;?>
/js/login-register.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21068989215deadc1307f833_75123713', 'stripe_js');
?>

    <?php echo $_smarty_tpl->tpl_vars['head']->value['inn'];?>

    </head>
    <body><?php }
/* {block 'item_deails_css'} */
class Block_3263739415deadc13079571_40330665 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'item_deails_css' => 
  array (
    0 => 'Block_3263739415deadc13079571_40330665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'item_deails_css'} */
/* {block 'cat_head'} */
class Block_20718170505deadc1307be16_34330319 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cat_head' => 
  array (
    0 => 'Block_20718170505deadc1307be16_34330319',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'cat_head'} */
/* {block 'stripe_js'} */
class Block_21068989215deadc1307f833_75123713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stripe_js' => 
  array (
    0 => 'Block_21068989215deadc1307f833_75123713',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'stripe_js'} */
}
