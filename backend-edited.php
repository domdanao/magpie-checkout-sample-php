<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.7.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/magpie-logo-round-big-128x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>PHP Sample App</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,600,600i">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <script src="assets/tingle/tingle.js"></script>
  <link rel="stylesheet" href="assets/tingle/tingle.css">

  <script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.12.0/build/highlight.min.js"></script>
  <!-- <link rel="stylesheet" href="assets/css/obsidian.css"> -->
  <link rel="stylesheet" href="assets/css/atom-one-dark.css">
  <link rel="stylesheet" href="assets/css/extra.css">
  <script>hljs.initHighlightingOnLoad();</script>
  <link rel="stylesheet" href="assets/css/github-markdown.css">

  
</head>
<body>
    <section class="menu1" id="menu1-g" data-rv-view="47">

        <nav class="navbar navbar-dropdown transparent navbar-fixed-top bg-color">
            <div class="container-fluid">
    
                <div class="mbr-table">
                    <div class="mbr-table-cell logo">
    
                        <div class="navbar-brand">
                            <a href="https://magpie.im" class="navbar-logo"><img src="assets/images/magpie-logo-round-big-128x128.png" alt="Magpie Icon" style="height: 5rem;"></a>
                            
                        </div>
    
                    </div>
                    <div class="mbr-table-cell text">
    
                        <button class="navbar-toggler pull-xs-right" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
    
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-xl" id="exCollapsingNavbar">
                            <li class="nav-item"><a class="nav-link link" href="index.php">OVERVIEW</a></li>
                            <li class="nav-item"><a class="nav-link link getting-started markdown_modal" href="#">GETTING STARTED</a></li>
                            <li class="nav-item"><a class="nav-link link" href="simple-edited.php">SIMPLE INTEGRATION</a></li>
                            <li class="nav-item"><a class="nav-link link" href="custom-edited.php">CUSTOM INTEGRATION</a></li>
                            <li class="nav-item"><a class="nav-link link" href="backend.php">PHP BACKEND</a></li>
                        </ul>
    
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>
    
                    </div>
    
                </div>
    
            </div>
        </nav>
    
    </section>

<section class="mbr-section mbr-section-hero mbr-section-full header5 mbr-after-navbar" id="header5-p" data-rv-view="73" style="background: linear-gradient(to right top, rgb(8, 74, 110), rgb(36, 163, 131)) rgb(8, 74, 110);">

    
        
    <div class="mbr-table-cell">
        <div class="container">
            <div class="row heading">
                <div class="col-md-10 text-xs-center col-md-offset-1">

                    <h1 class="mbr-section-title display-1 heading-title">Coming Soon!</h1>
                    <p class="mbr-section-subtitle sub-2 heading-text">Give me a few days to make the end-to-end payment experience via Magpie Checkout v2.</p>
                    <div class="mbr-section-btn"><a class="btn btn-lg btn-primary" href="/index.html"><span class="fa fa-home mbr-iconfont mbr-iconfont-btn"></span>Go Back Home</a></div>
                </div>
            </div>
        </div>
    </div>    

</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  <div class="tingle-demo tingle-demo-markdown-modal markdown-body">
    <article class="markdown-body">
        <h1 id="magpie-checkout-v2">Magpie Checkout v2</h1>
        <br>
        <h2 id="integration">Integration Guide</h3>
          <br>
        <h4 id="simple">Simple integration</h4>
        <p>A simple way to integrate checkout is to include the <code>script</code> tag, that points to the <code>checkout.js</code> file, inside your form tags.</p>
        <p>If you provide a class of <code>magpie-button</code> in the script tag, it will automatically add a button in the form that controls the display of the <code>Checkout</code> form. Upon the completion of the <code>Checkout</code> process, we will automatically submit the form passing the <code>_token</code> parameter that contains the generated <code>Magpie</code> token along with the values inside your form.</p>
        <pre><code class="lang-html">&lt;form method=&quot;POST&quot; action=&quot;/your/serverside/code/&quot;&gt;
&lt;!-- other input elements --&gt;
    
&lt;script src=&quot;https://checkout.magpie.im/v2/checkout.js&quot;
  class=&quot;magpie-button&quot;
  data-name=&quot;The Rest is Noise&quot;
  data-key=&quot;pk_test_HCZZXNHxaTLMg3aL2kWg3w&quot;
  data-amount=&quot;300000&quot;
  data-currency=&quot;USD&quot;
  data-icon=&quot;https://s3-us-west-2.amazonaws.com/client-objects/abis/images/asean_bis_logo_black_stripe.png&quot;
  data-description=&quot;30 + 1 ticket&quot;&gt; 
&lt;/script&gt;
&lt;/form&gt;
        </code></pre>
        <h4 id="custom">Custom</h4>
        <p>The custom integration allows you to use any HTML element or JavaScript event to trigger Checkout. This requires you to know intermediate to advance JavaScript knowledge. You need to instantiate the <code>MagpieCheckout</code> class by passing the necessary parameters like key and token. You can use the <code>MagpieCheckout</code> object to <code>open()</code> or <code>close()</code> the <code>Checkout</code> form programatically.</p>
        <pre><code class="lang-javascript">&lt;!--include the checkout.js file --&gt;
&lt;script src=&quot;https://checkout.magpie.im/v2/checkout.js&quot;&gt;&lt;/script&gt;
    
&lt;!-- define your own button --&gt;
&lt;button class=&quot;my-button&quot;&gt;Pay&lt;/button&gt;

&lt;script&gt;
// instantiate a new MagpieCheckout objects
var checkout = MagpieCheckout({
  // This is your public key
  key: &#39;pk_test_HCZZXNHxaTLMg3aL2kWg3w&#39;,
  // Make sure this image can be retrieved
  image: &#39;https://s3-us-west-2.amazonaws.com/client-objects/abis/images/asean_bis_logo_black_stripe.png&#39;,
  token: function(result) {
    // You can access the token ID with `result.id`.
    // Get the token ID to your server-side code for use.
  }
});
    
// attach an onClick listener to your button
// that will call the open function to display
// the checkout form.
document.getElementById(&#39;my-button&#39;).addEventListener(&#39;click&#39;, function(e) {
  checkout.open({
    amount: 40000,
    name: &quot;The Rest is Noise&quot;,
    description: &quot;30 + 1 ticket&quot;,
  });
});
&lt;/script&gt;
    
        </code></pre>
        <h3 id="received-parameters">Received Parameters</h3>
        <table>
        <thead>
        <tr>
        <th>Parameter</th>
        <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>magpie_token</td>
        <td>The ID of the token representing the payment details.</td>
        </tr>
        <tr>
        <td>magpie_email</td>
        <td>The email address provided by the user during the Checkout process.</td>
        </tr>
        <tr>
        <td>magpie_billing_name</td>
        <td>If billing address is true</td>
        </tr>
        <tr>
        <td>magpie_billing_address</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_billing_postcode</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_billing_city</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_billing_country</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_shipping_name</td>
        <td>If shipping address is true</td>
        </tr>
        <tr>
        <td>magpie_shipping_address</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_shipping_postcode</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_shipping_city</td>
        <td></td>
        </tr>
        <tr>
        <td>magpie_shipping_country</td>
        <td></td>
        </tr>
        </tbody>
        </table>
        <h3 id="configuration-options">Configuration Options</h3>
        <h4 id="required">Required</h4>
        <table>
        <thead>
        <tr>
        <th>Parameter</th>
        <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>data-key</td>
        <td>Your publishable key (test or live)</td>
        </tr>
        <tr>
        <td>token (if custom integration)</td>
        <td>A callback function that will receive the result object and args: <code>function(result, args)</code>   The <code>result</code> object contains the <code>token</code> and <code>email</code> values.</td>
        </tr>
        </tbody>
        </table>
        <h4 id="highly-recommended">Highly recommended</h4>
        <table>
        <thead>
        <tr>
        <th>Parameter</th>
        <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>data-icon</td>
        <td>A relative or absolute URL pointing to a square image of your brand or product. The recommended minimum size is 128x128px. The supported image types are: .gif, .jpeg, and .png.</td>
        </tr>
        <tr>
        <td>data-name</td>
        <td>The name of your company or website</td>
        </tr>
        <tr>
        <td>data-description</td>
        <td>A description of the product or service being purchased</td>
        </tr>
        <tr>
        <td>data-amount</td>
        <td>The amount (in cents) that&#39;s shown to the user. Note that you will still have to explicitly include the amount when you create a charge using the API.</td>
        </tr>
        <tr>
        <td>data-billing</td>
        <td>Specify whether Checkout should collect the user&#39;s billing address (true or false). The default is false.</td>
        </tr>
        </tbody>
        </table>
        <h4 id="optional">Optional</h4>
        <table>
        <thead>
        <tr>
        <th>Parameter</th>
        <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>data-currency</td>
        <td>The currency of the amount (3-letter ISO code). The default is PHP.</td>
        </tr>
        <tr>
        <td>data-pay-label</td>
        <td>The label of the payment button in the Checkout form</td>
        </tr>
        <tr>
        <td>data-shipping</td>
        <td>Specify whether Checkout should collect the user&#39;s shipping address (true or false). The default is false.</td>
        </tr>
        <tr>
        <td>data-email</td>
        <td>If you already know the email address of your user, you can provide it to Checkout to be prefilled.</td>
        </tr>
        <tr>
        <td>data-button-label</td>
        <td>The text to be shown on the blue button. Default is Pay with Card. Checkout does not currently translate this label.</td>
        </tr>
        <tr>
        <td>data-allow-remember-me</td>
        <td>Specify whether to include the option to &quot;Remember Me&quot; for future purchases (true or false). The default is true.</td>
        </tr>
        </tbody>
        </table>
        </article>
</div>

<script>
    var markdownModal = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.markdown_modal');
    btn.addEventListener('click', function(){
      markdownModal.open();
    });

    markdownModal.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
      markdownModal.close();
    });

    markdownModal.setContent(document.querySelector('.tingle-demo-markdown-modal').innerHTML);
    // markdownModal.setContent('<iframe width="100%" height="400" src="/checkout-v2-guide.html" frameborder="0" allowfullscreen></iframe>');
  </script>
</body>
</html>