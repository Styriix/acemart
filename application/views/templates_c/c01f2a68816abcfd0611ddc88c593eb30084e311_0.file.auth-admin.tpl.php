<?php
/* Smarty version 3.1.33, created on 2019-10-05 23:54:45
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\layouts\auth-admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d99112515d573_20113722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c01f2a68816abcfd0611ddc88c593eb30084e311' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\layouts\\auth-admin.tpl',
      1 => 1570297717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d99112515d573_20113722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
 - Login to Admin panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/animate.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />


<link href="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/css/webarch.css" rel="stylesheet" type="text/css" />

</head>


<body class="error-body no-top">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12723705365d9911251578c3_82437741', 'login_contents');
?>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/pace/pace.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/plugins/bootstrap-select2/select2.min.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/webarch.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['asset']->value;?>
/js/chat.js" type="text/javascript"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'login_contents'} */
class Block_12723705365d9911251578c3_82437741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_contents' => 
  array (
    0 => 'Block_12723705365d9911251578c3_82437741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'login_contents'} */
}
