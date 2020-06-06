<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<title>{$coinName} Pay-Per-Product Cryptocoin Payment Example</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='Expires' content='-1'>
<meta name='robots' content='all'>
<script src='../js/cryptobox.min.js' type='text/javascript'></script>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#666;margin:0'>
<div align='center'>
<div style='width:100%;height:auto;line-height:50px;background-color:#f1f1f1;border-bottom:1px solid #ddd;color:#49abe9;font-size:18px;'>
	1. GoUrl <b>Pay-Per-Product</b> Example ({$coinName} payments). Use it on your website. 
	<div style='float:right;'><a style='font-size:15px;color:#389ad8;margin-right:20px' href='//{$_SERVER["HTTP_HOST"]}{str_replace(".php", "-multi.php", $_SERVER["REQUEST_URI"])}'>Multiple Crypto</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/{strtolower($coinName)}-payment-gateway-api.html#p1'>PHP Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://github.com/cryptoapi/Bitcoin-Payment-Gateway-ASP.NET/tree/master/GoUrl/Views/Examples/PayPerProduct.cshtml'>ASP.NET Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/lib/examples/example_customize_box.php'>NEW - Payment Box 2018 (Mobile Friendly)</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://wordpress.org/plugins/gourl-bitcoin-payment-gateway-paid-downloads-membership/'>Wordpress</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/{strtolower($coinName)}-payment-gateway-api.html'>Other Examples</a></div>
	
</div>

<h1>Example - Customer Invoice</h1>
<br>
<img style='position:absolute;margin-left:auto;margin-right:auto;left:0;right:0;' alt='status' src='https://gourl.io/images/{if $box->is_paid()}paid{else}unpaid{/if}.png'>
<img alt='Invoice' border='0' height='500' src='https://gourl.io/images/invoice.png'>

<br><br>
{if ! $box->is_paid()} <h2>Pay Invoice Now - </h2> {else} <br><br>{/if}
<div style='margin:30px 0 5px 300px'>Language: &#160; {$languages_list}</div>
{$box->display_cryptobox(true, 580, 230)}
<br><br><br>
<h3>Message :</h3>
<h2 style='color:#999'>{$message}</h2>


</div><br><br><br><br><br><br>
<div style='position:absolute;left:0;'><a target="_blank" href="http://validator.w3.org/check?uri={"https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}"><img src="https://gourl.io/images/w3c.png" alt="Valid HTML 4.01 Transitional"></a></div>
</body>
</html>