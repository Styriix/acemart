<?php
/* Smarty version 3.1.33, created on 2019-10-12 02:17:46
  from 'C:\xampp\htdocs\projects\acemart\application\views\templates\default\payment\checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da11baa9e3ae8_64239858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0a876a0f27aeee5af26c9af75b65c78fea7668d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projects\\acemart\\application\\views\\templates\\default\\payment\\checkout.tpl',
      1 => 1570839461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5da11baa9e3ae8_64239858 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="paypal-button"></div>

<?php echo '<script'; ?>
 src="https://www.paypalobjects.com/api/checkout.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>

paypal.Button.render({
    // Configure environment
    env: '<?php echo $_smarty_tpl->tpl_vars['env']->value;?>
',
    client: {
        sandbox: '<?php echo $_smarty_tpl->tpl_vars['sandbox']->value;?>
',
        production: '<?php echo $_smarty_tpl->tpl_vars['production']->value;?>
'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'small',
        color: 'gold',
        shape: 'pill',
        label: 'buynow',
        tagline: 'true'
    },
    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
           transactions: [
            {
                amount: { total: '30', currency: 'USD' },
                item_list: {
                    items: [
                        {
                        name: 'Zubdev Item',
                        description: 'Purchasing From Zubdev',
                        quantity: '1',
                        price: '30',
                        currency: 'USD'
                        }
                    ]
                }
            }
        ]
      });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute()
        .then(function () {
            // Show a confirmation message to the buyer
            //window.alert('Thank you for your purchase!');
            
            // Redirect to the payment process page
            window.location = "process.php?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&pid=<?php echo '<?php'; ?>
 echo $productData['id']; <?php echo '?>'; ?>
";
        });
    }
}, '#paypal-button');

<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

$("#paypal-button").trigger('click');

<?php echo '</script'; ?>
><?php }
}
