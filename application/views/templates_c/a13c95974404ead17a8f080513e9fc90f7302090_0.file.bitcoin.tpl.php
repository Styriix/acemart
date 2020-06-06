<?php
/* Smarty version 3.1.33, created on 2019-11-24 19:22:54
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\digcool\payment\bitcoin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddaca7ec53923_25889733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a13c95974404ead17a8f080513e9fc90f7302090' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\digcool\\payment\\bitcoin.tpl',
      1 => 1574619768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ddaca7ec53923_25889733 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title><?php echo $_smarty_tpl->tpl_vars['coinName']->value;?>
 Pay-Per-Product Cryptocoin Payment Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='Expires' content='-1'>
<meta name='robots' content='all'>
<?php echo '<script'; ?>
 src='../js/cryptobox.min.js' type='text/javascript'><?php echo '</script'; ?>
>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#666;margin:0'>
<div align='center'>
<div style='width:100%;height:auto;line-height:50px;background-color:#f1f1f1;border-bottom:1px solid #ddd;color:#49abe9;font-size:18px;'>
	1. GoUrl <b>Pay-Per-Product</b> Example (<?php echo $_smarty_tpl->tpl_vars['coinName']->value;?>
 payments). Use it on your website. 
	<div style='float:right;'><a style='font-size:15px;color:#389ad8;margin-right:20px' href='//<?php echo $_smarty_tpl->tpl_vars['_SERVER']->value["HTTP_HOST"];
echo str_replace(".php","-multi.php",$_smarty_tpl->tpl_vars['_SERVER']->value["REQUEST_URI"]);?>
'>Multiple Crypto</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?php echo strtolower($_smarty_tpl->tpl_vars['coinName']->value);?>
-payment-gateway-api.html#p1'>PHP Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://github.com/cryptoapi/Bitcoin-Payment-Gateway-ASP.NET/tree/master/GoUrl/Views/Examples/PayPerProduct.cshtml'>ASP.NET Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/lib/examples/example_customize_box.php'>NEW - Payment Box 2018 (Mobile Friendly)</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://wordpress.org/plugins/gourl-bitcoin-payment-gateway-paid-downloads-membership/'>Wordpress</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<?php echo strtolower($_smarty_tpl->tpl_vars['coinName']->value);?>
-payment-gateway-api.html'>Other Examples</a></div>
	
</div>

<h1>Example - Customer Invoice</h1>
<br>
<img style='position:absolute;margin-left:auto;margin-right:auto;left:0;right:0;' alt='status' src='https://gourl.io/images/<?php if ($_smarty_tpl->tpl_vars['box']->value->is_paid()) {?>paid<?php } else { ?>unpaid<?php }?>.png'>
<img alt='Invoice' border='0' height='500' src='https://gourl.io/images/invoice.png'>

<br><br>
<?php if (!$_smarty_tpl->tpl_vars['box']->value->is_paid()) {?> <h2>Pay Invoice Now - </h2> <?php } else { ?> <br><br><?php }?>
<div style='margin:30px 0 5px 300px'>Language: &#160; <?php echo $_smarty_tpl->tpl_vars['languages_list']->value;?>
</div>
<?php echo $_smarty_tpl->tpl_vars['box']->value->display_cryptobox(true,580,230);?>

<br><br><br>
<h3>Message :</h3>
<h2 style='color:#999'><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h2>


</div><br><br><br><br><br><br>
<div style='position:absolute;left:0;'><a target="_blank" href="http://validator.w3.org/check?uri=<?php echo "https://".((string)$_smarty_tpl->tpl_vars['_SERVER']->value)."[HTTP_HOST]".((string)$_smarty_tpl->tpl_vars['_SERVER']->value)."[REQUEST_URI]";?>
"><img src="https://gourl.io/images/w3c.png" alt="Valid HTML 4.01 Transitional"></a></div>
</body>
</html><?php }
}
