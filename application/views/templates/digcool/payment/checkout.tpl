<div id="paypal-button"></div>

<script src="https://www.paypalobjects.com/api/checkout.js"></script>

<script>
{literal}
paypal.Button.render({
    // Configure environment
    env: '{/literal}{$env}{literal}',
    client: {
        sandbox: '{/literal}{$sandbox}{literal}',
        production: '{/literal}{$production}{literal}'
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
            window.location = "process.php?paymentID="+data.paymentID+"&token="+data.paymentToken+"&payerID="+data.payerID+"&pid=<?php echo $productData['id']; ?>";
        });
    }
}, '#paypal-button');
{/literal}
</script>

<script type="text/javascript">

$("#paypal-button").trigger('click');

</script>