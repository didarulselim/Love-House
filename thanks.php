<?php

if (isset($_POST['name']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['date'])  && isset($_POST['selection']) && isset($_POST['usd'])) {
    # code...
        if (!empty($_POST['name']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['date']) && !empty($_POST['selection']) && !empty($_POST['usd'])) {
            # code...
            $name = $_POST['name'];
            $number = $_POST['number'];
            $email = $_POST['email'];
            $date = $_POST['date'];
            $selection = $_POST['selection'];
            $usd = $_POST['usd'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                # code...
                echo 'Kindly Provide Valid Email';
            }
                else {
                 $body = $name." ".$number."\n".$email."\n".$date." ".$selection."\n".$usd."\n".$btc;
                    if (mail('didarulselim@tashinsteel.com' , 'House Reant', $body ,'From: didarulselim@gmail.com')) {
                    echo " ";
                 }
                 else {
                    echo 'There is a problem in sending mail.';
                 }
                }
            
            }
       
        else {
            echo 'All Fields Are Required.';
        }
     }
        else {
            echo '';
        }
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
  <link rel="shortcut icon" type="image/png" href="assets/images/fevicon1.png">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">

    <title>House Reant ! Find Your Dreem House Rent</title>
  </head>
  <body onload="myFunction()" style="margin:0;">
    <div id="loader">
      <!-- <img border="0" src="assets/images/loder.gif" alt="Preloder" width="200" height="200"> -->
      <svg viewBox="0 0 100 100">
  
  <g class="big">
    <circle cx="50" cy="50" r="40" />
    <path d="M 50.00 50.00 L 14.64 14.64 A 50.00 50.00 0 0 0 14.64 85.36 L 50.00 50.00" />
    <path d="M 50.00 50.00 L 85.36 85.36 A 50.00 50.00 0 0 0 85.36 14.64 L 50.00 50.00" />
  </g>
  
  <g class="small">
    <circle cx="50" cy="50" xr="22.5" r="40"  />
    <path d="M 50.00 50.00 L 25.25 74.75 A 35.00 35.00 0 0 0 74.75 74.75 L 50.00 50.00" />
    <path d="M 50.00 50.00 L 74.75 25.25 A 35.00 35.00 0 0 0 25.25 25.25 L 50.00 50.00" />
  </g>
  
  <circle class="pkt" cx="50" cy="50" r="5" />
  
</svg>
    </div>

   <Section class="thanks col-12 col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 " style="display:none;" id="myDiv">
    <div class="container">
      <div class="row">
        <div class="thanks-content text-center p-2">
          <div class="logo">
         <img src="assets/images/logo1.png" alt="" class="">
            </div>
            <div class="thank-you-page-content">              
              <h1 class="t-heading">Thank You !</h1>
              <div class="icon text-center">
                <i class="far fa-check-square"></i>
              </div>
                <h1>Your payment is received and we will contact you soon </h1>
                <a href="index.html" class="btn btn-color text-white btn-big s-btn"> Go back to Homepage </a>
             </div>

        </div>
    </div>
    </div>          
   </Section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.js" ></script>
    <script src="assets/js/bootstrap.js" ></script>
    <script src="assets/js/jquery.min.js" ></script>
    <script>
    var myVar;

    function myFunction() {
      myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
      document.getElementById("loader").style.display = "none";
      document.getElementById("myDiv").style.display = "block";
    }
    </script>

    
  



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>