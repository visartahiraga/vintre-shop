<?php
session_start();
$connect = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');

if (isset($_POST['clear_cart'])) {
    unset($_SESSION['cart']);
}

ini_set('display_errors', 0 );
if ($_GET['action'] == "remove") {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['id'] == $_GET['id']) {
            unset($_SESSION['cart'][$key]);
        }
    }
}
if (isset($_POST['add_to_cart'])) {
    
    if (isset($_SESSION['cart'])) {

        $session_array_id = array_column($_SESSION['cart'], "id");

        if (!in_array($_GET['id'], $session_array_id)) {
            $session_array = array (
                'id' => $_GET['id'],
                "image" => $_POST['image'],
                "name" => $_POST['name'],
                "price" => $_POST['price'],
            );
            $_SESSION['cart'][] = $session_array;

        }
    } else {
        $session_array = array (
            'id' => $_GET['id'],
            "image" => $_POST['image'],
            "name" => $_POST['name'],
            "price" => $_POST['price'],
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

  <title>Vintre Shop - Shopping Cart</title>
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
  <style>
    
  </style>
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

        <h2>Shopping Cart</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li style="color: white;">Shopping Cart</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container position-relative" data-aos="fade-up">
        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <table class="table table-hover bg-light table-bordered">
                <?php
                    if (empty($_SESSION['cart'])) {
                        echo "<center><h1> Your Shoping Cart is Empty </h1></center>";
                    }else{
                        ?>
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">PRICE</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <?php
                    }
                ?>
                    
                    <tbody>
                        <?php
                            $total = 0;
                            $output = "";
                                if (!empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $value) {                                               
                                        ?>   
                                            <tr>
                                                <td> <?php echo $value['id']; ?> </td>
                                                <td> <img class="img-fluid" style="height: 100px; width: 100px;" src="assets/img/<?= $value['image'];?>"> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['price']; ?> <?php echo "$" ?></td>
                                                <td> 
                                                    <?php
                                                        echo "
                                                            <a href='cart.php?action=remove&id=".$value['id']."'>
                                                                <button class='btn btn-dark'> Remove </button>
                                                            </a>
                                                        ";
                                                    ?>
                                                </td>
                                            </tr>                                                       
                                                    <?php                                                 
                                                    $total = $total + $value['price'];
                                                ?>                                                            
                                                <?php
                                                    }
                                                ?>                                                                                                                                                                        
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td> <?php echo $total; ?> <?php echo "$" ?> </td>
                                                <td> 
                                                <form method="post">
                                                <input type="submit" class="btn btn-danger "name="clear_cart" value="Clear All">
                                                
                                            </form>
                                                </td>
                                            </tr>
                            <?php
                                echo $output;                                        
                            ?>
                            <?php 
                                } 
                            ?> 
                    </tbody>                           
                </table>
                <?php
                    if (empty($_SESSION['cart'])) {
                        echo "<p>  </p>";
                        
                    }else {

                        ?>
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-right:67px;">
                        
                        <a class="btn btn-dark btn-lg btn-block" name="checkout" href="shop_all.php" >Continiue shopping </a>
                        <a class="btn btn-dark btn-lg btn-block" name="send" href="checkout.php" >Checkout </a>
                        </div>
                        <?php
                    }  
                ?>
                     
                    
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



</body>

</html>