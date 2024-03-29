<!DOCTYPE html>
<html lang="en">
<head>
    <title>RiyaPola.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="xxxxxxxxxx">
    <meta name="robots" content="noindex">
    <meta name="title" content="xxxxxxxx">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
 
    <title>Riyapola Login</title>
</head>
<body>
    <div class="container mt-5" style="max-width: 500px;">
      <div class="card px-4 py-3">
        <form id="form" class="form-signin" accept="#">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Login</h1>
           
          
<div id="message" class="alert alert-success" hidden>
  <strong>Success!</strong> Please wait until you redirect.
</div>
           
            <input type="text" id="inputPhone" class="form-control mb-2" placeholder="Phone Number" required="" autofocus="">
            <div id="recaptcha-container"></div>
            <button class="btn btn-success btn-block mb-2" type="button" id="phoneloginbtn"><i class="fas fa-sign-in-alt"></i> SEND OTP SMS</button>
            <input type="otp" id="inputOtp" class="form-control mb-2" placeholder="OTP" required="">
            <button class="btn btn-success btn-block mb-2" type="button" id="verifyotp"><i class="fas fa-sign-in-alt"></i> VERIFY OTP</button>        
         
</form>
     
           <div class="alert alert-warning">
             <strong>Refresh the page if you get any errors. </strong> 
           </div>
          </div>
    </div>

  
    
    
    
    
 
   
 <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script>
<script defer src="https://www.gstatic.com/firebasejs/7.19.0/firebase-auth.js"></script>



<script>

window.addEventListener("load", (event) => {
  
 // var form = document.getElementById("form");

// Reset the form
form.reset();


//recaptcha code

window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
        'size': 'invisible',
        'callback': function(response) {
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            // ...
        },
        'expired-callback': function() {
            // Response expired. Ask user to solve reCAPTCHA again.
            // ...
        }
    });

    //end recaptcha code

});

  // Your web app's Firebase configuration
  var firebaseConfig = {
apiKey: "AIzaSyCCifumMfBcy8ugxcED55JZdDcuSh35HgM",
authDomain: "riyalanka-8f838.firebaseapp.com",
projectId: "riyalanka-8f838",
storageBucket: "riyalanka-8f838.appspot.com",
messagingSenderId: "695771719778",
appId: "1:695771719778:web:86b7b68a6500bf218ec93b",
measurementId: "G-Q2XHKV8882"


  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

 
 
  
  
   //=========================Login With Phone==========================
   var loginphone = document.getElementById("phoneloginbtn");
var phoneinput = document.getElementById("inputPhone");
var otpinput = document.getElementById("inputOtp");
var verifyotp = document.getElementById("verifyotp");
var phonenumber;



loginphone.onclick = function() {

 
    // Remove any non-digit characters from the phone number
    var number = phoneinput.value.replace(/\D/g, '');
    // Check if the number starts with "0" and remove it
    if (number.startsWith('0')) {
        number = number.substring(1);
    }
    // Check if the number has 9 digits and add the country code "+94"
    if (number.length == 9) {
        phonenumber = "+94" + number;
    } else if (number.length == 11 && number.startsWith('94')) {
        // Check if the number starts with "94" and add the "+" sign
        phonenumber = "+" + number;
    } else {
        // Invalid phone number
        message.innerHTML = `Invalid phone number. Please enter a valid Sri Lankan phone number.`;
        message.classList.remove("alert", "alert-success");
        message.classList.add("alert", "alert-danger");
        message.hidden = false;
        return;
    }

    
    message.hidden = true;

    //old recaptcha code location


   

    var cverify=window.recaptchaVerifier;

    // Disable input fields and buttons until OTP is sent
    phoneinput.disabled = true;
    otpinput.disabled = true;
    loginphone.disabled = true;
    verifyotp.disabled = true;

    // Show loading message
    message.innerHTML = `Sending OTP to ${phonenumber}. Please wait...`;
    message.hidden = false;

    firebase.auth().signInWithPhoneNumber(phonenumber,cverify).then(function(response){
        // Enable input fields and buttons
        phoneinput.disabled = false;
        otpinput.disabled = false;
        loginphone.disabled = false;
        verifyotp.disabled = false;

        // Show message to enter OTP code
        message.innerHTML = `SMS Sent to ${phonenumber}. Please enter the OTP to verify your phone number.`;
        message.hidden = false;

        window.confirmationResult=response;
    }).catch(function(error){
        //console.log(error);

        // Enable input fields and buttons
        phoneinput.disabled = false;
        otpinput.disabled = false;
        loginphone.disabled = false;
        verifyotp.disabled = false;

        message.innerHTML = `Something wrong with your phone number or captcha. Please refresh the page and try again.`;
        message.classList.remove("alert", "alert-success");
        message.classList.add("alert", "alert-danger");
        message.hidden = false;

        //reset the captcha
        var newContainer = document.createElement("div");
    newContainer.setAttribute("id", "recaptcha-container");
    document.body.appendChild(newContainer);

    // Reset and render reCAPTCHA widget
    window.recaptchaVerifier.render().then((widgetId) => {
    window.recaptchaVerifier.reset(widgetId);
});

        //location.reload();
    })
}


//============== Verify OTP ===========================//

   verifyotp.onclick=function(){
    message.hidden = true;
       confirmationResult.confirm(otpinput.value).then(function(response){
           //console.log(response);
            var userobj=response.user;
            var token=userobj.xa;

            if(token!=null && token!=undefined && token!=""){
            sendDatatoServerPhp(phonenumber,token);
            }
       })
       .catch(function(error){
          // console.log(error);
           message.innerHTML = `OTP Code error. Please enter again`;
             message.classList.remove("alert", "alert-success");
             message.classList.add("alert", "alert-danger");
			 message.hidden = false;

       })
   }
   //=================End Login With Phone=========================


     //===================POST================
     function sendDatatoServerPhp(phone, token) {
    // create a form element
    var form = document.createElement("form");

    // set the form attributes
    form.setAttribute("method", "POST");
    form.setAttribute("action", "/login");

    // create a hidden input field for the phone number
    var phoneField = document.createElement("input");
    phoneField.setAttribute("type", "hidden");
    phoneField.setAttribute("name", "phone");
    phoneField.setAttribute("value", phone);

    // create a hidden input field for the token
    var tokenField = document.createElement("input");
    tokenField.setAttribute("type", "hidden");
    tokenField.setAttribute("name", "token");
    tokenField.setAttribute("value", token);

    // create a hidden input field for the CSRF token
    var csrfField = document.createElement("input");
    csrfField.setAttribute("type", "hidden");
    csrfField.setAttribute("name", "_token");
    csrfField.setAttribute("value", "{{ csrf_token() }}");

    // append the phone and CSRF fields to the form
    form.appendChild(phoneField);
    form.appendChild(csrfField);
    form.appendChild(tokenField);

    // append the form to the document body
    document.body.appendChild(form);

    // submit the form
    form.submit();
}
  //===========================END=======================


</script>
</body>
</html>