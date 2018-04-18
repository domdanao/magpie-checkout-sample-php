# Magpie Checkout v2

### Integration

#### Simple 

A simple way to integrate checkout is to include the `script` tag, that points to the `checkout.js` file, inside your form tags.

If you provide a class of `magpie-button` in the script tag, it will automatically add a button in the form that controls the display of the `Checkout` form. Upon the completion of the `Checkout` process, we will automatically submit the form passing the `_token` parameter that contains the generated `Magpie` token along with the values inside your form.

```html
<form method="POST" action="/your/serverside/code/">
    <!-- other input elements -->

    <script src="https://checkout.magpie.im/v2/checkout.js"
        class="magpie-button"
        data-name="The Rest is Noise"
        data-key="pk_test_HCZZXNHxaTLMg3aL2kWg3w"
        data-amount="300000"
        data-currency="USD"
        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/abis/images/asean_bis_logo_black_stripe.png"
        data-description="30 + 1 ticket"> 
    </script>
</form>
```

#### Custom

The custom integration allows you to use any HTML element or JavaScript event to trigger Checkout. This requires you to know intermediate to advance JavaScript knowledge. You need to instantiate the `MagpieCheckout` class by passing the necessary parameters like key and token. You can use the `MagpieCheckout` object to `open()` or `close()` the `Checkout` form programatically.

```javascript
<!--include the checkout.js file -->
<script src="https://checkout.magpie.im/v2/checkout.js"></script>

<!-- define your own button -->
<button class="my-button">Pay</button>

<script>
    // instantiate a new MagpieCheckout objects
    var checkout = MagpieCheckout({
        // This is your public key
        key: 'pk_test_HCZZXNHxaTLMg3aL2kWg3w',
        // Make sure this image can be retrieved
        image: 'https://s3-us-west-2.amazonaws.com/client-objects/abis/images/asean_bis_logo_black_stripe.png',
        token: function(result) {
            // You can access the token ID with `result.token`.
            // Get the token ID to your server-side code for use.
        }
    });

    // attach an onClick listener to your button
    // that will call the open function to display
    // the checkout form.
    document.getElementById('my-button').addEventListener('click', function(e) {
        checkout.open({
            amount: 40000,
            name: "The Rest is Noise",
            description: "30 + 1 ticket",
        });
    });
</script>

```
### Received Parameters

| Parameter | Description|
| --------  | ------ |
| magpie_token | The ID of the token representing the payment details. |
| magpie_email    | The email address provided by the user during the Checkout process. |
| magpie_billing_name | If billing address is true |
| magpie_billing_address | |
| magpie_billing_postcode | |
| magpie_billing_city | |
| magpie_billing_country | |
| magpie_shipping_name | If shipping address is true |
| magpie_shipping_address | |
| magpie_shipping_postcode | |
| magpie_shipping_city | |
| magpie_shipping_country | |

### Configuration Options

#### Required

| Parameter | Description|
| --------  | ------ |
| data-key                          | Your publishable key (test or live) |
| token (if custom integration)     | A callback function that will receive the result object and args: `function(result, args)`   The `result` object contains the `token` and `email` values. |

#### Highly recommended

| Parameter | Description|
| --------  | ------ |
| data-icon | A relative or absolute URL pointing to a square image of your brand or product. The recommended minimum size is 128x128px. The supported image types are: .gif, .jpeg, and .png. |
| data-name | The name of your company or website |
| data-description | A description of the product or service being purchased |
| data-amount | The amount (in cents) that's shown to the user. Note that you will still have to explicitly include the amount when you create a charge using the API. |
| data-billing | Specify whether Checkout should collect the user's billing address (true or false). The default is false. |

#### Optional

| Parameter | Description|
| --------  | ------ |
| data-currency | The currency of the amount (3-letter ISO code). The default is PHP. |
| data-pay-label | The label of the payment button in the Checkout form |
| data-shipping | Specify whether Checkout should collect the user's shipping address (true or false). The default is false. |
| data-email | If you already know the email address of your user, you can provide it to Checkout to be prefilled. |
| data-button-label | The text to be shown on the blue button. Default is Pay with Card. Checkout does not currently translate this label. |
| data-allow-remember-me | Specify whether to include the option to "Remember Me" for future purchases (true or false). The default is true.  |