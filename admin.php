<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
</head>

<body class="page-team">

  <!-- ======= Header ======= -->
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="admin.php" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center">Vintre</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
          
        <ul>
          <li><a href="admin.php" class="active">Dashboard</a></li>
            </ul>
            
            <ul>
          <li><a href="admin_users.php" class="active">Users</a></li>
            </ul>

            <ul>
          <li><a href="admin_products.php" class="active">Products</a></li>
            </ul>

            <ul>
          <li><a href="admin_orders.php" class="active">Orders</a></li>
            </ul>

            <ul>
          <li><a href="admin_reviews.php" class="active">Feedback</a></li>
            </ul>
            <li>
                <a href="logout.php"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>
                </a>
              </li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/home-img.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Admin Dashboard</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2> Control your Website </h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/users-img.png" class="img-fluid" alt="">
                <div class="social">
                <a href="admin_users.php" style="font-family: var(--font-secondary); 
                font-weight: 500;font-size: 15px;letter-spacing: 1px;display: inline-block;padding: 12px 30px;border-radius: 50px;transition:
                 0.5s;color: black;background: white;" role="button"> See Users</a>
                </div>
              </div>
              <div class="member-info">
                <h4> Users </h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/products-img.png" class="img-fluid" alt="">
                <div class="social">
                <a href="admin_products.php" style="font-family: var(--font-secondary); font-weight: 500;font-size: 15px;letter-spacing: 1px;display: 
                inline-block;padding: 12px 30px;border-radius: 50px;transition:0.5s;
                color: black;background: white;" role="button"> See Products</a>
                </div>
              </div>
              <div class="member-info">
                <h4> Products </h4>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/reviews-img.png" class="img-fluid" alt="">
                <div class="social">
                <a href="admin_reviews.php" style="font-family: var(--font-secondary); font-weight: 500;font-size: 15px;letter-spacing: 1px;
                display: inline-block;padding: 12px 30px;border-radius: 50px;transition: 0.5s;color: black;
                background: white;" role="button"> See Reviews</a>
                </div>
              </div>
              <div class="member-info">
                <h4> Reviews </h4>
              </div>
            </div>
          </div>
          

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/orders-img.png" class="img-fluid" alt="">
                <div class="social">
                <a href="admin_orders.php" style="font-family: var(--font-secondary); font-weight: 500;
                font-size: 15px;letter-spacing: 1px;display: inline-block;padding: 12px 30px;border-radius: 50px;
                transition: 0.5s;color: black;background: white;" role="button"> See Orders</a>
                </div>
              </div>
              <div class="member-info">
                <h4> Orders </h4>
              </div>
            </div>
          </div>
         
        </div>

      </div>
    </section>

  </main><!-- End #main -->

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