<?php
session_start();
if (empty($_SESSION['token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.7.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/magpie-logo-round-big-128x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Simple Integration</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,400i,600,600i">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
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

<section class="mbr-section mbr-section-hero mbr-section-full header1 header2 mbr-after-navbar" id="header2-0" data-rv-view="0" style="background: linear-gradient(to right top, rgb(99, 28, 112), rgb(60, 168, 199)) rgb(99, 28, 112);">

    

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row heading">
                <div class="col-md-10">

                    <h1 class="mbr-section-title display-1 heading-title"><br>Simple integration</h1>
                    <p class="mbr-section-subtitle sub-2 heading-text"><br>This panel shows the simple integration for creating a PayButton via Magpie's Checkout v2 product. With simple integration, you include the script tag that loads the checkout.js file. Provide a class magpie-button in the tag to automatically create the button that triggers Checkout.</p>
                        <table>
                          <tr>
                            <td>
                              <!--Simple form to create PayButton-->
                              <form method="POST" action="/process.php">
                                <script src="https://checkout.magpie.im/v2/checkout.js"
                                  class="magpie-button"
                                  data-name="Rock & Roll Concert"
                                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                  data-amount="225000"
                                  data-currency="PHP"
                                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/conert-icon.png"
                                  data-description="1 Box ticket"> 
                                </script>
                                <!-- Put the data-amount as hidden input-->
                                <input type="hidden" name="amount" value="225000">
                                <!-- These are optional, but recommended. -->
                                <input type="hidden" name="currency" value="PHP">
                                <input type="hidden" name="description" value="1 Box ticket">
                                <input type="hidden" name="name" value="Rock & Roll Concert">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                            </form>
                            </td>
                            <td style="padding:2px;"></td>
                            <td>
                                <form><input type="button" value="View Code" class="button1 modal1"></form>
                            </td>
                          </tr>
                        </table>
                        
                        <br>
                        <p class="mbr-section-subtitle sub-2 heading-text">This is one of the simplest buttons you can create.</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="col-xs-12 col-lg-10 col-lg-offset-1">
                
            </div>
        </div>

    </div>

    

</section>

<section class="mbr-section msg-box1" id="msg-box1-b" data-rv-view="29" style="background-color: rgb(255, 255, 255); padding-top: 40px; padding-bottom: 40px;">

    
    <div class="container">
        <div class="row">
          <h1 class="mbr-section-title display-2 text-center">You can sell one item</h1> 
        </div>
        <div class="row">
            <div class="mbr-table-md-up">

              <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-6">
                  <div class="round-block">
                    <div class="wraper">
                      <p class="round-text text-1 text-center">For<br> <strong>500000</strong><br> users</p>
                    </div>
                  </div>
                  <div class="mbr-figure"><img src="assets/images/mac1.png"></div>
              </div>

              

              <!-- Inverse -->
              
              <div class="mbr-table-cell col-md-6 text-xs-center text-md-left">
                  <div class="span-title text-md-left text-xs-center">
                                   
                  </div>             
                  <div class="list">
                    <ul class="text-left"><li>Let's say this panel is about selling that product on the left. Your provide a picture, and then some text on this side of the layout to let the customer know what it is your are selling.</li><br><li>Via simple integration, you create the PayButton with easy-to-understand configuration settings. See options here.&nbsp;</li><br><li>Let's create a button that let's you sell this product for P2,500. For good measure, let us also collect the customer's billing information.</li></ul>
                  </div>

                  <div class="left-button text-lg-left text-sm-center">
                    <table>
                      <tr>
                        <td>
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
                            <input type="hidden" name="amount" value="250000">
                            <input type="hidden" name="description" value="1-Month subscription; Up to 5 users">
                            <input type="hidden" name="name" value="My Online Store">
                          </form>
                        </td>
                        <td style="padding:5px;"></td>
                        <td>
                            <form><input type="button" value="View Code" class="button1 modal2"></form>
                        </td>
                      </tr>
                    </table>
                        
                    </div>
              </div>
            </div>
        </div>
    </div>

</section>

<section class="mbr-section pricingtable2" id="pricing-table2-c" data-rv-view="32" style="background-color: rgb(255, 252, 246); padding-top: 40px; padding-bottom: 20px;">

    

      <div class="container heading">
          <div class="row">
              <div class="col-xs-12 text-xs-center">
                  <h3 class="heading-title mbr-section-title display-3">Or sell several</h3>
                  
              </div>
          </div>
      </div>

    <div class="container">
      <div class="row plan">
        <div class="plan-wrap col-xs-12 default col-lg-3" style="display: block;">
          <h3 class="plan-title mbr-section-title sub-2 firstType">Start</h3>
          <p class="plan-price">
            <span class="plan-text mbr-section-text text-1 normal price"><span class="price">19</span></span>
            <span class="plan-text mbr-section-text text-1 normal currency">$</span>
            <span class="plan-text mbr-section-text text-1 normal"><br>per Month</span>
          </p>
          <p class="plan-text mbr-section-text text-1">8GB Storage</p>
          <p class="plan-text mbr-section-text text-1">4 Users</p>
          <p class="plan-text mbr-section-text text-1">15 GB bandwidth</p>
          
          <div class="plan-btn text-xs-center">

            <!-- PayButton for Start Package -->
            <form method="POST" action="/process.php">
              <script src="https://checkout.magpie.im/v2/checkout.js"
                  class="magpie-button"
                  data-name="My Cloud Service"
                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                  data-amount="1900"
                  data-currency="USD"
                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
                  data-description="Start (8GB / 4 / 15GB)"
                  data-pay-label="Pay"
                  data-button-label="Subscribe">
              </script>
            </form>
          <br>
          <form><input type="button" value="View Code" class="button1 start_modal"></form><br>
          </div>
          <div class="tingle-demo tingle-demo-start-modal">
            <h2>PayButton 1</h2>
            <p>Copy and paste it on an HTML page</p>          
            <pre>
              <code class="html">
&lt;!-- PayButton for Start Package --&gt;
&lt;form method="POST" action="/process.php"&gt;
&lt;script src="https://checkout.magpie.im/v2/checkout.js"
  class="magpie-button"
  data-name="My Cloud Service"
  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
  data-amount="1900"
  data-currency="USD"
  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
  data-description="Start (8GB / 4 / 15GB)"
  data-pay-label="Pay"
  data-button-label="Subscribe"&gt;
&lt;/script&gt;
&lt;/form&gt;
  </code>
            </pre>
          </div>
        </div>

        <div class="plan-wrap col-xs-12 favorite col-lg-3" style="display: block;">
          <h3 class="plan-title mbr-section-title sub-2 secondType">Business</h3>
          <p class="plan-price">
            <span class="plan-text mbr-section-text text-1 normal price"><span class="price">29</span></span>
            <span class="plan-text mbr-section-text text-1 normal currency">$</span>
            <span class="plan-text mbr-section-text text-1 normal"><br>per Month</span>
          </p>
          <p class="plan-text mbr-section-text text-1">16GB Storage</p>
          <p class="plan-text mbr-section-text text-1">10 Users</p>
          <p class="plan-text mbr-section-text text-1">20 GB bandwidth</p>
          
          
          
          
          <div class="plan-btn text-xs-center">

            <!--Buy button 2-->
            <form method="POST" action="/process.php">
              <script src="https://checkout.magpie.im/v2/checkout.js"
                  class="magpie-button"
                  data-name="My Cloud Service"
                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                  data-amount="2900"
                  data-currency="USD"
                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
                  data-description="Business (16GB / 10 / 20GB)"
                  data-pay-label="Pay"
                  data-button-label="Subscribe">
              </script>
          </form>
          <br>
          <form><input type="button" value="View Code" class="button1 business_modal"></form><br>
          </div>
          <div class="tingle-demo tingle-demo-business-modal">
              <h2>PayButton 2</h2>
              <p>Copy and paste it on an HTML page</p>          
              <pre>
                <code class="html">
&lt;!-- PayButton for Business Package --&gt;
&lt;form method="POST" action="/process.php"&gt;
&lt;script src="https://checkout.magpie.im/v2/checkout.js"
  class="magpie-button"
  data-name="My Cloud Service"
  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
  data-amount="2900"
  data-currency="USD"
  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
  data-description="Business (16GB / 10 / 20GB)"
  data-pay-label="Pay"
  data-button-label="Subscribe"&gt;
&lt;/script&gt;
&lt;/form&gt;
                </code>
              </pre>
            </div>
        </div>

        <div class="plan-wrap col-xs-12 default col-lg-3" style="display: block;">
          <h3 class="plan-title mbr-section-title sub-2 thirdType">Premium</h3>
          <p class="plan-price">
            <span class="plan-text mbr-section-text text-1 normal price"><span class="price">39</span></span>
            <span class="plan-text mbr-section-text text-1 normal currency">$</span>
            <span class="plan-text mbr-section-text text-1 normal"><br>per Month</span>
          </p>
          <p class="plan-text mbr-section-text text-1">32GB Storage</p>
          <p class="plan-text mbr-section-text text-1">20 Users</p>
          <p class="plan-text mbr-section-text text-1">40 GB bandwidth</p>
          
          
          
          
          <div class="plan-btn text-xs-center">
            <!--Buy button 3-->
            <form method="POST" action="/process.php">
              <script src="https://checkout.magpie.im/v2/checkout.js"
                  class="magpie-button"
                  data-name="My Cloud Service"
                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                  data-amount="3900"
                  data-currency="USD"
                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
                  data-description="Premium (32GB / 20 / 40GB)"
                  data-pay-label="Pay"
                  data-button-label="Subscribe">
              </script>
          </form>
          <br>
          <form><input type="button" value="View Code" class="button1 premium_modal"></form><br>
          </div>
          <div class="tingle-demo tingle-demo-premium-modal">
              <h2>PayButton 3</h2>
              <p>Copy and paste it on an HTML page</p>          
              <pre>
                <code class="html">
&lt;!-- PayButton for Premium Package --&gt;
&lt;form method="POST" action="/process.php"&gt;
&lt;script src="https://checkout.magpie.im/v2/checkout.js"
  class="magpie-button"
  data-name="My Cloud Service"
  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
  data-amount="3900"
  data-currency="USD"
  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
  data-description="Premium (32GB / 20 / 40GB)"
  data-pay-label="Pay"
  data-button-label="Subscribe"&gt;
&lt;/script&gt;
&lt;/form&gt;
                </code>
              </pre>
            </div>
        </div>

        <div class="plan-wrap col-xs-12 default col-lg-3" style="display: block;">
          <h3 class="plan-title mbr-section-title sub-2 fourthType">Ultimate</h3>
          <p class="plan-price">
            <span class="plan-text mbr-section-text text-1 normal price"><span class="price">49</span></span>
            <span class="plan-text mbr-section-text text-1 normal currency">$</span>
            <span class="plan-text mbr-section-text text-1 normal"><br>per Month</span>
          </p>
          <p class="plan-text mbr-section-text text-1">64GB Storage</p>
          <p class="plan-text mbr-section-text text-1">50 users</p>
          <p class="plan-text mbr-section-text text-1">60 GB bandwidth</p>
          
          
          
          
          <div class="plan-btn text-xs-center">
            <!--Buy button 4-->
            <form method="POST" action="/process.php">
              <script src="https://checkout.magpie.im/v2/checkout.js"
                  class="magpie-button"
                  data-name="My Cloud Service"
                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                  data-amount="3900"
                  data-currency="USD"
                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
                  data-description="Ultimate (64GB / 50 / 60GB )"
                  data-pay-label="Pay"
                  data-button-label="Subscribe">
              </script>
          </form>
          <br>
          <form><input type="button" value="View Code" class="button1 ultimate_modal"></form><br>
          </div>
          <div class="tingle-demo tingle-demo-ultimate-modal">
              <h2>PayButton 4</h2>
              <p>Copy and paste it on an HTML page</p>          
              <pre>
                <code class="html">
&lt;!-- PayButton for Ultimate Package --&gt;
&lt;form method="POST" action="/process.php"&gt;
&lt;script src="https://checkout.magpie.im/v2/checkout.js"
  class="magpie-button"
  data-name="My Cloud Service"
  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
  data-amount="3900"
  data-currency="USD"
  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png"
  data-description="Ultimate (64GB / 50 / 60GB )"
  data-pay-label="Pay"
  data-button-label="Subscribe"&gt;
&lt;/script&gt;
&lt;/form&gt;
                </code>
              </pre>
            </div>
        </div>
      </div>
    </div>   
</section>

<section class="mbr-section accordion toggle1" id="toggle1-f" data-rv-view="43" style="background-color: rgb(255, 255, 255); padding-top: 50px; padding-bottom: 50px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="section-head text-center space30">
                    <h1 class="mbr-section-title display-4">More examples</h1>
                    
                </div>
                <div class="clearfix"></div>
                <div id="accordion" class="panel-group accordionStyles toggleStyles accordion" role="tablist" aria-multiselectable="true">
                  <div class="accordion-group">
                    <div class="toggle-panel panel-default colorBG" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingOne">
                            <span class="signSpan pseudoMinus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseOnetoggle1-f" aria-expanded="false" aria-controls="collapseOne"><span class="sign"></span>Button with shipping info</a></h4>
                        </div>
                        <div id="collapseOnetoggle1-f" class="panel-collapse noScroll collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body"><p>You can also create a button that requires your customer to enter shipping information. You will need to record the shipping data in your system.</p>
                              <!--Shipping button-->
                              <form method="POST" action="/process.php">
                                <script src="https://checkout.magpie.im/v2/checkout.js"
                                  class="magpie-button"
                                  data-name="My Online Store"
                                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                  data-amount="450000"
                                  data-currency="php"
                                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg"
                                  data-description="Nike Jordans, Size 10, Male"
                                  data-billing="true"
                                  data-shipping="true">
                                </script>
                              </form>
                              <br>
                                <!-- <p>Copy and paste it on an HTML page</p>           -->
                                <pre>
                                  <code class="html">
&lt;!-- PayButton with Shipping Info --&gt;
&lt;form method="POST" action="/process.php"&gt;
&lt;script src="https://checkout.magpie.im/v2/checkout.js"
  class="magpie-button"
  data-name="My Online Store"
  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
  data-amount="450000"
  data-currency="php"
  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg"
  data-description="Nike Jordans, Size 10, Male"
  data-billing="true"
  data-shipping="true"&gt;
&lt;/script&gt;
&lt;/form&gt;
                                  </code>
                                </pre>
                              </div>
                        </div>
                    </div>
                    <div class="toggle-panel panel-default" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingTwo">
                            <span class="signSpan pseudoPlus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseTwotoggle1-f" aria-expanded="true" aria-controls="collapseTwo">Currencies</a></h4>
                        </div>
                        <div id="collapseTwotoggle1-f" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body"><p>You can present the button in different currencies. Make sure to indicate the desired currency in the three-letter format. Ex: USD for US Dollar, EUR for Euro, or PHP for Philippine peso. Check out the guide here: <a href="https://www.xe.com/currency/" target="_blank">https://www.xe.com/currency/</a>.</p>
                              <!--Currencies buttons-->
                              <table>
                                <tr>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="99"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-button-label="Pay in USD">
                                      </script>
                                    </form>
                                  </td>
                                  <td style="padding:10px;"></td>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="87"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-button-label="Pay in EUR">
                                      </script>
                                    </form>
                                  </td>
                                  <td style="padding:10px;"></td>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="5000"
                                        data-currency="PHP"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-button-label="Pay in PHP">
                                      </script>
                                    </form>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              Replace with appropriate 3-letter currency code.
                              <pre>
                                <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Music Library"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="5000"
    data-currency="PHP"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
    data-description="Song of Love (3:55)"
    data-button-label="Pay in PHP"&gt;
  &lt;/script&gt;
&lt;/form&gt;
                                </code>
                              </pre>

                          </div>
                        </div>
                    </div>
                    <div class="toggle-panel panel-default" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingThree">
                            <span class="signSpan pseudoPlus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseThreetoggle1-f" aria-expanded="true" aria-controls="collapseThree">Pre-fill the email address</a></h4>
                        </div>
                        <div id="collapseThreetoggle1-f" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                              <form method="POST" action="/process.php">
                                <script src="https://checkout.magpie.im/v2/checkout.js"
                                  class="magpie-button"
                                  data-name="My Music Library"
                                  data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                  data-amount="99"
                                  data-currency="USD"
                                  data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                  data-description="Song of Love (3:55)"
                                  data-button-label="Buy Now"
                                  data-email="juan@delacruz.com">
                                </script>
                              </form>
                              <br>
                              Here's the code:
                              <pre>
                                <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Music Library"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="99"
    data-currency="USD"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
    data-description="Song of Love (3:55)"
    data-button-label="Buy Now"
    data-email="juan@delacruz.com"&gt;
  &lt;/script&gt;
&lt;/form&gt;
                                </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="toggle-panel panel-default" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingThree">
                            <span class="signSpan pseudoPlus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseFourtoggle1-f" aria-expanded="true" aria-controls="collapseFour">Remember-me</a></h4>
                        </div>
                        <div id="collapseFourtoggle1-f" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body"><p>"Remember-me" is a nifty feature that gives your customers a quick way to pay the next time they visit your site and purchase an item. Customers register and validate a mobile phone, and will be prompted with a one-time password (OTP) when they pay in the future. By default the feature is enabled, but you may also disable it.</p>
                            <!-- Remember me buttons-->
                            <table>
                              <tr>
                                <td>
                                  ON (default)
                                  <form method="POST" action="/process.php">
                                    <script src="https://checkout.magpie.im/v2/checkout.js"
                                      class="magpie-button"
                                      data-name="My Music Library"
                                      data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                      data-amount="99"
                                      data-currency="USD"
                                      data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                      data-description="Song of Love (3:55)"
                                      data-button-label="Buy Now">
                                    </script>
                                  </form>
                                </td>
                                <td style="padding:10px;"></td>
                                <td>
                                  OFF
                                  <form method="POST" action="/process.php">
                                    <script src="https://checkout.magpie.im/v2/checkout.js"
                                      class="magpie-button"
                                      data-name="My Music Library"
                                      data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                      data-amount="99"
                                      data-currency="USD"
                                      data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                      data-description="Song of Love (3:55)"
                                      data-allow-remember-me="false"
                                      data-button-label="Buy Now">
                                    </script>
                                  </form>
                                </td>
                              </tr>
                            </table>
                            <br>
                            Following is the code for turning off "remember-me" feature:
                            <pre>
                              <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Music Library"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="99"
    data-currency="USD"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
    data-description="Song of Love (3:55)"
    data-allow-remember-me="false"
    data-button-label="Buy Now"
  &lt;/script&gt;
&lt;/form&gt;
                              </code>
                            </pre>
                          </div>
                        </div>
                    </div>
                    <div class="toggle-panel panel-default" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingThree">
                            <span class="signSpan pseudoPlus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseFivetoggle1-f" aria-expanded="true" aria-controls="collapseFive">Customizing button labels</a></h4>
                        </div>
                        <div id="collapseFivetoggle1-f" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body"><p>You can set the text appearing in the buttons, too.</p>
                            <!-- Button label buttons-->
                            <table>
                                <tr>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="99"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-button-label="Buy Now">
                                      </script>
                                    </form>
                                  </td>
                                  <td style="padding:10px;"></td>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="99"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-allow-remember-me="false"
                                        data-button-label="Download This Song">
                                      </script>
                                    </form>
                                  </td>
                                  <td style="padding:10px;"></td>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="99"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-allow-remember-me="false"
                                        data-button-label="I Want This!">
                                      </script>
                                    </form>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <pre>
                                <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Music Library"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="99"
    data-currency="USD"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
    data-description="Song of Love (3:55)"
    data-allow-remember-me="false"
    data-button-label="I Want This!"&gt;
  &lt;/script&gt;
&lt;/form&gt;
                                </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                    <div class="toggle-panel panel-default" style="display: block;">
                        <div class="toggle-heading" role="tab" id="headingThree">
                            <span class="signSpan pseudoPlus"></span>
                            <h4 class="panel-title display-6"><a role="button" class="collapsed" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapseSixtoggle1-f" aria-expanded="false" aria-controls="collapseSix">Customizing Checkout button</a></h4>
                        </div>
                        <div id="collapseSixtoggle1-f" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body"><p>By default, Checkout uses "PAY {amount}" in its button. &nbsp;But you can set it to a more appropriate verb.</p>
                            <!--Pay label buttons-->
                            <table>
                                <tr>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="My Music Library"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="99"
                                        data-currency="USD"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/music_icon.png"
                                        data-description="Song of Love (3:55)"
                                        data-pay-label="Pay"
                                        data-button-label="Buy Now">
                                      </script>
                                    </form>
                                  </td>
                                  <td style="padding:10px;"></td>
                                  <td>
                                    <form method="POST" action="/process.php">
                                      <script src="https://checkout.magpie.im/v2/checkout.js"
                                        class="magpie-button"
                                        data-name="Manila Church"
                                        data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
                                        data-amount="5000"
                                        data-currency="PHP"
                                        data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/church.png"
                                        data-description="P50 donation"
                                        data-allow-remember-me="false"
                                        data-button-label="Donate"
                                        data-pay-label="Donate">
                                      </script>
                                    </form>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <pre>
                                <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="Manila Church"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="5000"
    data-currency="PHP"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/church.png"
    data-description="P50 donation"
    data-allow-remember-me="false"
    data-button-label="Donate"
    data-pay-label="Donate"&gt;
  &lt;/script&gt;
&lt;/form&gt;
                                </code>
                              </pre>
                            </div>
                        </div>
                    </div>
                  </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding footer4" id="footer4-9" data-rv-view="39" style="background-color: rgb(255, 255, 255); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    <div class="container">
        <p class="text-xs-center">Copyright (c) 2018 Magpie.IM Pte. Ltd.</p>
    </div>
</footer>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>

  <div class="tingle-demo tingle-demo-sticky1">
    <h2>Simple button</h2>
    <p>Copy and paste it on an HTML page</p>
    <pre>
    <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="Rock &amp; Roll Concert"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="225000"
    data-currency="PHP"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/conert-icon.png"
    data-description="1 Box ticket"&gt; 
  &lt;/script&gt;
&lt;/form&gt;
&lt;!-- Put the data-amount as hidden input--&gt;
&lt;input type="hidden" name="amount" value="225000"&gt;
&lt;!-- These are optional, but recommended. --&gt;
&lt;input type="hidden" name="currency" value="PHP"&gt;
&lt;input type="hidden" name="description" value="1 Box ticket"&gt;
&lt;input type="hidden" name="name" value="Rock &amp; Roll Concert"&gt;
    </code>
  </pre>
  </div>

  <script>
    var modalStickyFooter = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.modal1');
    btn.addEventListener('click', function(){
        modalStickyFooter.open();
    });

    modalStickyFooter.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
        modalStickyFooter.close();
    });

    modalStickyFooter.setContent(document.querySelector('.tingle-demo-sticky1').innerHTML);
  </script>

  <div class="tingle-demo tingle-demo-sticky2">
  <h2>Button with shipping &amp; billing</h2>
  <p>Copy and paste it on an HTML page</p>
  <pre>
  <code class="html">
&lt;form method="POST" action="/process.php"&gt;
  &lt;script src="https://checkout.magpie.im/v2/checkout.js"
    class="magpie-button"
    data-name="My Online Store"
    data-key="pk_test_97jCFUDY81vkqsQCLLFXQQ"
    data-amount="250000"
    data-currency="PHP"
    data-icon="https://s3-us-west-2.amazonaws.com/client-objects/sample-app/online-store.png"
    data-description="1-Month subscription; Up to 5 users"
    data-billing="true"
    data-pay-label="Pay"
    data-button-label="Subscribe P2,500.00"&gt;
  &lt;/script&gt;
&lt;/form&gt;
  </code>
  </pre>
  </div>

  <script>
      var modalStickyFooter2 = new tingle.modal({
          footer: true,
          stickyFooter: true,
          closeMethods: []
      });
      var btn = document.querySelector('.modal2');
      btn.addEventListener('click', function(){
          modalStickyFooter2.open();
      });
  
      modalStickyFooter2.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
          modalStickyFooter2.close();
      });
  
      modalStickyFooter2.setContent(document.querySelector('.tingle-demo-sticky2').innerHTML);
    </script>


  <script>
    var startModal = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.start_modal');
    btn.addEventListener('click', function(){
      startModal.open();
    });

    startModal.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
      startModal.close();
    });

    startModal.setContent(document.querySelector('.tingle-demo-start-modal').innerHTML);
  </script>

<script>
    var businessModal = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.business_modal');
    btn.addEventListener('click', function(){
      businessModal.open();
    });

    businessModal.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
      businessModal.close();
    });

    businessModal.setContent(document.querySelector('.tingle-demo-business-modal').innerHTML);
  </script>

<script>
    var premiumModal = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.premium_modal');
    btn.addEventListener('click', function(){
      premiumModal.open();
    });

    premiumModal.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
      premiumModal.close();
    });

    premiumModal.setContent(document.querySelector('.tingle-demo-premium-modal').innerHTML);
  </script>

<script>
    var ultimateModal = new tingle.modal({
        footer: true,
        stickyFooter: true,
        closeMethods: []
    });
    var btn = document.querySelector('.ultimate_modal');
    btn.addEventListener('click', function(){
      ultimateModal.open();
    });

    ultimateModal.addFooterBtn('Close', 'tingle-btn tingle-btn--danger tingle-btn--pull-right', function(){
      ultimateModal.close();
    });

    ultimateModal.setContent(document.querySelector('.tingle-demo-ultimate-modal').innerHTML);
  </script>

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