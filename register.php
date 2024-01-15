<?php
	$msg = "";

	if (isset($_POST['submit'])) {
		$con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');

		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);

    
    $result = mysqli_query($con, "SELECT * FROM Users WHERE email='$email'");
     if (mysqli_num_rows($result) > 0) {
      $msg = "This email is already in use!";
    }
    else if ($password != $cPassword)
			$msg  = "Please Check Your Passwords!";

		else {
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$con->query("INSERT INTO Users (name,email,password) VALUES ('$name', '$email', '$hash')");
			$msg = "You have been registered!";
            header("location:logged.php"); //sucesss
                exit();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon-vintre.png" rel="icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">

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
</head>

<body class="page-contact">

  <!-- ======= Header ======= -->
  <?php
    include_once("header.php");
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/cart-img.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Register</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li style="color: white;">Register</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-6 col-lg-12 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black"> 
                <?php if ($msg != "") echo "<font color = red>" . $msg . "<br><br></font>"; ?>
                <!-- ***** Formular ***** -->
                    <form action="/vintre/register.php#formular" method="post">                    
                    <h2 class="fw-normal mb-3 pb-3" id="formular" style="letter-spacing: 1px;">Register</h2>
                    <div class="form-outline mb-4">
                        <input type="text" id="name" name="name" class="form-control form-control-lg" required/>
                        <label class="form-label" for="name" >Name</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="email" id="email"   name="email" class="form-control form-control-lg" required/>
                        <label class="form-label" for="email"  > Email address</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password" name="password" minlength="8" class="form-control form-control-lg" required/>
                        <label class="form-label" for="password" >Password</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="cPassword" name="cPassword" class="form-control form-control-lg"required />
                        <label class="form-label" for="cPassword" >Confirm Password</label>
                    </div>
                    <div class="pt-1 mb-4">
                        <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Register</button>
                    </div>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="login.php#formular"
                        style="color: #393f81;">Login </a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
              </div>
            </div>
          </div>
          <!-- End Contact Form -->
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

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

  <?php
if (isset($_GET['action'])) {
    if ($_GET['action'] == "clearall") {
        unset($_SESSION['cart']);
    }

    if ($_GET['action'] == "remove") {
        foreach ($_SESSION['cart'] as $key => $value) {
            if ($value['id'] == $_GET['id']) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }
}

?>

</body>

</html>