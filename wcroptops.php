<?php

session_start();

$connect = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');

if (isset($_POST['add_to_cart'])) {
    
    if (isset($_SESSION['cart'])) {

        $session_array_id = array_column($_SESSION['cart'], "id");

        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array (
                'id' => $_GET['id'],
                "image" => $_POST['image'],
                "name" => $_POST['name'],
                "price" => $_POST['price']
            );

            $_SESSION['cart'][] = $session_array;

        }
    } else {
        $session_array = array (
            'id' => $_GET['id'],
                "image" => $_POST['image'],
                "name" => $_POST['name'],
                "price" => $_POST['price']
        );

        $_SESSION['cart'][] = $session_array;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - T-Shirts</title>
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
  <?php
    include_once("header.php");
  ?>
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/tshirts-img.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Shorts</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Shorts</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    $query = "SELECT * FROM products WHERE category = 'croptops' ";
                    $result = mysqli_query($connect,$query);
                            
                        while ($row = mysqli_fetch_array($result)) {?>
                            <div class="col mb-5"> 
                                <form method="post" action="cart.php?id=<?=$row['id'] ?>">        
                                    <div class="card h-100">
                                        <!-- product image -->
                                        <img class="card-img-top" src="assets/img/<?= $row['image'] ?>">
                                        <input type="hidden" name="image" value="<?= $row['image'] ?>">
                                        <!-- product details -->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <h5 class="fw-bolder"><?= $row['name']; ?></h5> 
                                                <!-- product price -->
                                                <span class="text-muted ">
                                                    $<?= number_format($row['price'],2); ?>
                                                </span>
                                            </div>
                                        </div>
                                        <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                        <!-- add to cart button -->
                                        <?php
                                        if(isset($_SESSION['email'])){
                                            ?>
                                             <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center">
                                                <input type="submit" name="add_to_cart" class="btn btn-outline-dark mt-auto" value="Add to Cart">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                                        }else{
                                            ?>
                                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center">
                
                                            <a href="login.php" class="btn btn-outline-dark mt-auto">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                                        <?php
                                        }
                                 ?>      
                            
                            <?php }

                            ?>
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