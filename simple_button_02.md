## Simple button, with billing information
```html
<form method="POST" action="/process.php">
  <script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Online Store"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="250000"
    data-currency="PHP"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/online-store.png"
    data-description="1-Month subscription; Up to 5 users"
    data-billing="true"
    data-pay-label="Pay"
    data-button-label="Subscribe P2,500.00">
  </script>
</form>
```