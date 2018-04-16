var icon = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg";
var name = "My E-Commerce Store";

// Instantiate
var app = MagpieCheckout({
  // The publishable key from the Magpie dashboard
  key: "pk_test_97jCFUDY81vkqsQCLLFXQQ",
  token: function (result) {
    // Log to console
    console.log(result);
    // Pop up an alert
    alert('Result: ' + result);
  }
});
    

// $.ajax({
//   // How data is sent
//   type: "POST",
//   // Program that will send process charge
//   url: "/process.php",
//   // Fields
//   data: {
//       'token': token_to_pass, // CHANGE HERE
//       'amount': amount,
//       'description': description,
//       'email': token.email,    // ADDITION FOR WHEN YOU WANT TO EMAIL THE DONOR
//       'token_all': token
//   },
//   dataType: "json",
//   // What to do next after making the AJAX call
//   // Payment was processed
//   success: function (data) {
//       console.log(data);
//       // We load a page if this event is fired.
//       // You can also do other cool notification stuff here
//       // 1. Trigger a modal
//       // 2. Send an email notification.
//       // 3. Send an SMS, if you know the mobile number of the customer.
//       // 4. Etcetera.
//       // window.location.href = "/thanks.html";
//       // window.alert(JSON.stringify(data));
//   },
//   // Something went wrong
//   error: function(e) {
//       console.log(e);
//       window.alert("Error: " + e);
//   },
//   complete: function() {
//       $("#overlay").hide();
//   }
// });

// Must correspond to the id of the link in index.php
$("#not_all").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg',
    name: 'My E-Commerce Store',
    currency: 'PHP',
    amount: 49900,
    description: 'Basic plan'
  });
})

$("#not_button").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg',
    name: 'My E-Commerce Store',
    currency: 'USD',
    amount: 99900,
    description: 'Standard Plan',
    payLabel: 'Subscribe'
  });
})

$("#start_pkg").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png',
    name: 'My Cloud Service',
    currency: 'USD',
    amount: 1900,
    description: 'Start Package (8GB/4U/15GB)',
    payLabel: 'Subscribe'
  });
})

$("#business_pkg").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png',
    name: 'My Cloud Service',
    currency: 'USD',
    amount: 2900,
    description: 'Business Package (16GB/10U/20GB)',
    payLabel: 'Subscribe'
  });
})

$("#premium_pkg").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png',
    name: 'My Cloud Service',
    currency: 'USD',
    amount: 3900,
    description: 'Premium Package (32GB/20U/25GB)',
    payLabel: 'Subscribe'
  });
})

$("#ultimate_pkg").on("click", function(e) {
  e.preventDefault();
  app.open({
    icon: 'https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png',
    name: 'My Cloud Service',
    currency: 'USD',
    amount: 4900,
    description: 'Ultimate Package (64GB/Unlimited/35GB)',
    payLabel: 'Subscribe'
  });
})

$("#ex_shipping").on("click", function(e) {
  e.preventDefault();
  app.open({
    currency: 'PHP',
    amount: 235000,
    description: 'A Beautiful Birthday Gift',
    payLabel: 'Pay',
    shipping: true,
    billing: true
  });
})

$("#ex_billing").on("click", function(e) {
  e.preventDefault();
  var icon2 = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/condo-icon.jpg";
  app.open({
    currency: 'PHP',
    amount: 1250000,
    description: 'One Month Rent (Flair Unit N2602)',
    icon: icon,
    payLabel: 'Pay',
    billing: true
  });
})

$("#ex_donate").on("click", function(e) {
  e.preventDefault();
  app.open({
    currency: 'PHP',
    amount: 500000,
    description: 'Give to Childre\'s Crusade',
    payLabel: 'Donate',
    allowRememberMe: false
  });
})

