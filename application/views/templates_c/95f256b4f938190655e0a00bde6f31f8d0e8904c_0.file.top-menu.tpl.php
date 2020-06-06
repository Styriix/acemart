<?php
/* Smarty version 3.1.33, created on 2019-10-17 11:41:35
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\inc\head\top-menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8374fc63553_96114695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95f256b4f938190655e0a00bde6f31f8d0e8904c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\inc\\head\\top-menu.tpl',
      1 => 1571305292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da8374fc63553_96114695 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header navbar navbar-inverse ">

<div class="navbar-inner">
<div class="header-seperation">
<ul class="nav pull-left notifcation-center visible-xs visible-sm">
<li class="dropdown">
<a href="#main-menu" data-webarch="toggle-left-side">
<i class="material-icons">menu</i>
</a>
</li>
</ul>

<a href="index.html">
<img src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" class="logo" alt="" data-src="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" data-src-retina="<?php echo $_smarty_tpl->tpl_vars['app']->value['logo'];?>
" width="106" height="21" />
</a>

<ul class="nav pull-right notifcation-center">
<li class="dropdown hidden-xs hidden-sm">
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
" class="dropdown-toggle active" data-toggle="">
<i class="material-icons">home</i>
</a>
</li>


</ul>
</div>

<div class="header-quick-nav">

<div class="pull-left">
<ul class="nav quick-section">
<li class="quicklinks">
<a href="#" class="" id="layout-condensed-toggle">
<i class="material-icons">menu</i>
</a>
</li>
</ul>
</div>


<div class="pull-right">
<div class="chat-toggler sm">
<div class="profile-pic">
<img src="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default' : $tmp);?>
" alt="" data-src="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default' : $tmp);?>
" data-src-retina="<?php echo $_smarty_tpl->tpl_vars['a_photo']->value;
echo (($tmp = @$_smarty_tpl->tpl_vars['usr']->value['avater'])===null||$tmp==='' ? 'default' : $tmp);?>
" width="35" height="35" />
</div>
</div>
<ul class="nav quick-section ">
<li class="quicklinks">
<a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
<i class="material-icons">tune</i>
</a>
<ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">

<li class="divider"></li>
<li>
<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value['main'];?>
admin-logout"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a>
</li>
</ul>
</li>

</ul>
</div>

</div>

</div>

</div><?php }
}
