<?php
/* Smarty version 3.1.33, created on 2019-11-09 23:47:09
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\admin\inc\body\title-bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dc741edd809f7_49964080',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb41767456a54e952316f20d91c4e361f13a005' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\admin\\inc\\body\\title-bar.tpl',
      1 => 1573339592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dc741edd809f7_49964080 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\projects\\acemart\\application\\third_party\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<ul class="breadcrumb">
    <li>
        <p><h4><?php echo smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['url_2']->value),'-',' ');?>
</h4></p>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['url_3']->value) {?>
        <li><a class="<?php if (!$_smarty_tpl->tpl_vars['url_4']->value) {?>active<?php }?>" href="javascript:void(0);"><?php echo smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['url_3']->value),'-',' ');?>
</a></li>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['url_4']->value) {?>
        <li><a class="<?php if (!$_smarty_tpl->tpl_vars['url_5']->value) {?>active<?php }?>" href="javascript:void(0);"><?php echo smarty_modifier_replace(ucfirst($_smarty_tpl->tpl_vars['url_4']->value),'-',' ');?>
</a></li>
    <?php }?>
</ul>
<?php if ($_smarty_tpl->tpl_vars['v']->value['check']) {?>
    <div class="alert alert-info" align="center">
        New AceMart version <strong><?php echo $_smarty_tpl->tpl_vars['v']->value['version'];?>
</strong> is now Available.
    </div>
<?php }?>
<br><?php }
}
