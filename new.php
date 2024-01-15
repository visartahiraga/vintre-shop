<?php

$con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4'); 


	if (isset($_POST['submit'])) {

            if (!empty($_POST['name']) && !empty($_POST['category']) && !empty($_POST['image']) && !empty($_POST['price'])) {
                
                $name = $_POST['name'];
                $category = $_POST['category'];
                $image = $_POST['image'];
                $price = $_POST['price'];

                $query = "insert into products(name,category,image,price) values('$name' , '$category' , '$image' , '$price')";

                $run = mysqli_query ($con, $query);

                if($run) {
                    echo "Form submitted successfully" ;
                    header("location:new_success.php");
                } else {
                    echo "Form not submitted";
                }
            } else {
                echo "all fields required";
            }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - New Product</title>
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
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
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
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/cart-img.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Add Product</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li style="color: white;"> Add Product </li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <section class="vh-100" style="background-color: white;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem; dispay: flex; justfiy-content: center;">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <form action="/vintre/new.php" method="post">
      
      
                        <h5 class="fw-normal mb-3 pb-3 " id="formular" style="letter-spacing: 1px;">Add a new product</h5>
      
                        <div class="form-outline mb-4">
                          <input type="text" id="name" name="name" class="form-control form-control-lg" required/>
                          <label class="form-label" for="name">Product Name</label>
                        </div>
      
                        <div class="form-outline mb-4">
                            <select id="category" name="category" class="form-control form-control-lg">
                                <option value="tshirts">T-Shirts</option>
                                <option value="hoodies">Hoodies</option>
                                <option value="pants">Pants</option>
                                <option value="acc">Accesories</option>
                                <option value="jackets">Jackets</option>
                                <option value="sweaters">Sweaters</option>
                                <option value="shorts">Shorts</option>
                                <option value="leggings">Leggings</option>
                                <option value="croptops">Croptops</option>
                                <option value="jeans">Jeans</option>
                            </select>
                          <label class="form-label" for="category">Product Category</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="file" id="image" name="image" class="form-control form-control-lg" required/>
                          <label class="form-label" for="image">Image</label>
                        </div>

                        <div class="form-outline mb-4">
                          <input type="text" id="price"  pattern="[0-9]*" name="price" class="form-control form-control-lg" required/>
                          <label class="form-label" for="price">Product Price</label>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" name="submit" type="submit">Add new product</button>
                        </div>
      
                        
                        <a href="#!" class="small text-muted">Terms of use.</a>
                        <a href="#!" class="small text-muted">Privacy policy</a>
                      </form>
      
                    </div>
                  </div>
            </div>
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