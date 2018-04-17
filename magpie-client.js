var amount = 0;
var description = "My Product";
var name = "My E-Commerce Store";

var icon_store = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/red-store.jpg";
var icon_cloud = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/cloud-icon.png";
var icon_church = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/church.png";
var icon_condo = "https://s3-us-west-2.amazonaws.com/client-objects/sample-app/condo-icon.png";

var app = MagpieCheckout({
    // The publishable key from the Magpie dashboard
    // key: "pk_test_Q6EVrrKQbiA2fOsM2qXstw",
    key: "pk_test_97jCFUDY81vkqsQCLLFXQQ",   // for new
    // The name of the store -- appears on the checkout page
    // name: "E-Commerce Store",
    // The description of the product or service being purchased
    // description: description,
    // An amount, usually default value, to charge
    amount: 0,
    // The currency
    // currency: 'usd',
    // The URL where Checkout will fetch your logo
    icon: icon_store,
    // payLabel: "Pay",
    token: function (result) {
        // $("#overlay").show();
        // AJAX stuff, check out jQuery AJAX doc
        alert(result.token);
    }
});
    

//     $.ajax({
//         // How data is sent
//         type: "POST",
//         // Program that will send process charge
//         url: "/process.php",
//         // Fields
//         data: {
//             'token': token_to_pass, // CHANGE HERE
//             'amount': amount,
//             'description': description,
//             'email': token.email,    // ADDITION FOR WHEN YOU WANT TO EMAIL THE DONOR
//             'token_all': token
//         },
//         dataType: "json",
//         // What to do next after making the AJAX call
//         // Payment was processed
//         success: function (data) {
//             console.log(data);
//             // We load a page if this event is fired.
//             // You can also do other cool notification stuff here
//             // 1. Trigger a modal
//             // 2. Send an email notification.
//             // 3. Send an SMS, if you know the mobile number of the customer.
//             // 4. Etcetera.
//             // window.location.href = "/thanks.html";
//             // window.alert(JSON.stringify(data));
//         },
//         // Something went wrong
//         error: function(e) {
//             console.log(e);
//             window.alert("Error: " + e);
//         },
//         complete: function() {
//             $("#overlay").hide();
//         }
//     });
// });

// Must correspond to the id of the link in index.php
$("#not_all").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'PHP',
        amount: 49900,
        description: 'Basic plan',
        name: name,
        icon: icon_store
    });
})

$("#not_button").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'USD',
        amount: 99900,
        description: 'Standard Plan',
        payLabel: 'Subscribe',
        name: 'Some Cloud Service',
        icon: icon_cloud
    });
})

$("#start_pkg").on("click", function(e) {
    e.preventDefault();
    app.open({
        name: 'My Cloud Service',
        currency: 'USD',
        amount: 1900,
        description: 'Start Package (8GB/4U/15GB)',
        payLabel: 'Subscribe',
        icon: icon_cloud
    });
})
  
  $("#business_pkg").on("click", function(e) {
    e.preventDefault();
    app.open({
        name: 'My Cloud Service',
        currency: 'USD',
        amount: 2900,
        description: 'Business Package (16GB/10U/20GB)',
        payLabel: 'Subscribe',
        icon: icon_cloud
    });
})
  
  $("#premium_pkg").on("click", function(e) {
    e.preventDefault();
    app.open({
        name: 'My Cloud Service',
        currency: 'USD',
        amount: 3900,
        description: 'Premium Package (32GB/20U/25GB)',
        payLabel: 'Subscribe',
        icon: icon_cloud
    });
})
  
$("#ultimate_pkg").on("click", function(e) {
    e.preventDefault();
    app.open({
        name: 'My Cloud Service',
        currency: 'USD',
        amount: 4900,
        description: 'Ultimate Package (64GB/Unlimited/35GB)',
        payLabel: 'Subscribe',
        icon: icon_cloud
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
        billing: true,
        name: name,
        icon: icon_store
    });
})
  
$("#ex_billing").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'PHP',
        amount: 1250000,
        description: 'One Month Rent (Flair Unit N2602)',
        payLabel: 'Pay',
        billing: true,
        name: 'Condo Corp.',
        icon: icon_condo
    });
})
  
$("#ex_donate").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'PHP',
        amount: 500000,
        description: 'Give to Children\'s Crusade',
        payLabel: 'Donate',
        allowRememberMe: false,
        name: 'Charity Foundation',
        icon: icon_church
    });
})

$("#red_button").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'USD',
        amount: 9900,
        description: '99 Red Balloons',
        payLabel: 'Pay',
        allowRememberMe: false,
        billng: true,
        shipping: true,
        name: 'Balloon Man'
    });
})

$("#shop_cart").on("click", function(e) {
    e.preventDefault();
    app.open({
        currency: 'PHP',
        amount: 534525,
        description: 'Your Grocery This Week',
        payLabel: 'Pay',
        billng: true,
        shipping: true,
        name: 'The Marketplace'
    });
})

$("#target").submit(function(e){
    e.preventDefault();
    var email = $("input:first").val();
    app.open({
        email: email,
        currency: 'PHP',
        amount: 534525,
        description: 'Your Grocery This Week',
        payLabel: 'Pay',
        billng: true,
        shipping: true,
        name: 'The Marketplace'
    });
})


$("#custom_form").submit(function(e){
    e.preventDefault();
    var data = $("#custom_form").serializeArray();
    console.log(data);
    // Email
    var email = data[0]["value"];
    // Amount: We need to convert float to integer
    var amount = data[1]["value"] * 100;
    amount = parseInt(amount);
    // Currency
    var currency = data[2]["value"];
    // Name of "store"
    var recipient = data[3]["value"];

    app.open({
        email: email,
        currency: currency,
        amount: amount,
        description: 'Your Donation',
        payLabel: 'Pay',
        // billng: true,
        // shipping: true,
        name: recipient,
        payLabel: 'Donate'
    });
})