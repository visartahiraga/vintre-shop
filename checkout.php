<?php
session_start();

$msg = "";


if (isset($_POST['submit'])) {

  $con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');

  $name = $con->real_escape_string($_POST['name']);
  $email = $con->real_escape_string($_POST['email']);
  $address = $con->real_escape_string($_POST['address']);
  $city = $con->real_escape_string($_POST['city']);
  $state = $con->real_escape_string($_POST['state']);
  $zip = $con->real_escape_string($_POST['zip']);
  

  $con->query("INSERT INTO orders (name,email,address,city,state,zip) VALUES ('$name', '$email', '$address', '$city', '$state', '$zip')");
  $msg = "Your order has been sent! Thank you";
  header("location:ordered.php"); //sucesss
                exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - Checkout</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/973726cc65.js" crossorigin="anonymous"></script>


  <!-- Favicons -->
  <link href="assets/img/favicon-vintre.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.3.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
body {
  font-family: Arial;
  font-size: 17px;
  
  
}
.btn.block{
    display:block;
    width:100%;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;

}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
 
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}


input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=email] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=tel] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
  margin-left:0px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}





a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>

<body class="page-about">

  <!-- ======= Header ======= -->
  <?php
    include_once("header.php");
  ?>
  <!-- End Header -->
  <main id="main">

  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/tshirts-img.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Checkout</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Checkout</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    <br><br>
    <div class="row">
  <div class="col-75">
    <div class="container">

    <?php if ($msg != "") echo "<font color = green>" . $msg . "<br><br></font>"; ?>
    
    <form action="/vintre/checkout.php" method="post">
      
      
      <div class="row">
        <div class="col-50">
          <h3>Billing Address</h3>
          <label for="fname"><i class="fa fa-user"></i> Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required/>
          <label for="email"> <i class="fa fa-envelope"></i> Email</label>
          <input type="email" id="email" name="email" placeholder="name@example.com" required/>
          <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
          <input type="text" id="address" name="address" placeholder="Enter your street" required/>
          <label for="city"><i class="fa fa-institution"></i> City</label>
          <input type="text" id="city" name="city" placeholder="Shkoder" required/>

          <div class="row">
            <div class="col-50">
              <label for="state">State</label>
              <input type="text" id="state" name="state" placeholder="AL" required/>
            </div>
            <div class="col-50">
              <label for="zip">Zip</label>
              <input id="zip" name="zip" type="text" pattern="[0-9]*"  maxlength="4" placeholder="4001">
            </div>
          </div>
        </div>

        <div class="col-50">
          <h3>Payment</h3>
          <label for="fname">Accepted Cards</label>
          <div class="icon-container">
            <i class="fa fa-cc-visa" style="color:navy;"></i>
            <i class="fa fa-cc-amex" style="color:blue;"></i>
            <i class="fa fa-cc-mastercard" style="color:red;"></i>
            <i class="fa fa-cc-discover" style="color:orange;"></i>
          </div>
          <label for="cname">Name on Card</label>
          <input type="text" id="cname" name="cardname" placeholder="First Last" required/>
          <label for="ccnum">Credit card number</label>
          <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
          <label for="expmonth">Exp Month</label>
          <div class="form-outline mb-4">
                    <select id="category"   name="category" class="form-control form-control-lg">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                    
                </div>
          <div class="row">
            <div class="col-50">
              <label for="expyear">Exp Year</label>
              <input type="text" id="expyear" name="expyear" pattern="[0-9]*"  maxlength="4"  placeholder="2018" required/>
            </div>
            <div class="col-50">
              <label for="cvv">CVV</label>
              <input type="text" id="cvv" name="cvv" pattern="[0-9]*"  maxlength="3" placeholder="352" required/>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="pt-1 pl-4 mb-4">
      <button type="submit" class="btn btn-dark btn-lg btn-block" name="submit">Continue with your purchase</button>
      </div>
    </form>
  </div>
</div>
</div>

  <!-- ======= Footer ======= -->
  <?php
    include_once("footer.html");
  ?>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>