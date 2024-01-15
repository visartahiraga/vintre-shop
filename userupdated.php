<?php

session_start();

$con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');


if(isset($_POST['update'])){
    $currentUser = $_SESSION['email'];
    $userNewName=$_POST['updateName'];
    $userNewEmail=$_POST['updateEmail'];
    
    mysqli_query($con,"update `Users` set name='$userNewName',  email='$userNewEmail' where email='$currentUser'");
    header("location:userupdated.php?success=userUpdated");
	
   
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vintre Shop - User Profile</title>
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
        <?php
           include_once("header.php");
        ?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/tshirts-img.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center">

    <h2>User Profile</h2>
    <ol>
      <li><a href="index.php">Home</a></li>
      <li>Profile</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

      
        
                    <?php
                        $currentUser = $_SESSION['email'];
                        $sql = "SELECT * FROM Users WHERE email ='$currentUser'";

                        $gotResuslts = mysqli_query($con,$sql);

                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                  
                                    ?>
                                    <section id="contact" class="contact">
                                <div class="container position-relative" data-aos="fade-up">
                                    <div class="row gy-4 d-flex justify-content-center">
                                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                                        <div class="col-md-6 col-lg-12 d-flex align-items-center">
                                        <div class="card-body p-4 p-lg-5 text-black">
                                    
                                        <form action="/vintre/profile.php" method="post">
                                        

                                        <h3 class="fw-normal mb-3 pb-3" id="formular" style="letter-spacing: 1px;">Update User Info</h3>
                                     
                                        <div class="alert alert-success" role="alert">User has been successfully updated!</div>
                                        <div class="form-outline mb-3">
                                     <label class="form-label" for="email">Username</label>
                                            <input type="text" name="updateName" class="form-control form-control-lg" value="<?php echo $row['name']; ?>">
                                            
                                        </div>
                                        <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Email Address</label>
                                            <input type="email" name="updateEmail"class="form-control form-control-lg" value="<?php echo $row['email']; ?>">
                                            
                                        </div>

                                        <div class="form-outline mb-3">
                                        <label class="form-label" for="email">Role</label>
                                        <fieldset disabled>
                                            <input type="text"  name="updateRole" class="form-control form-control-lg " value="<?php echo $row['rolle']; ?>">
                                            
                                        </div>
                                       

                                        <div class="pt-1 mb-4">
                                <button class="btn btn-dark  btn-block" name="update" type="submit">Update Info</button>
                            </div>
                                </form>
                                </div> 
                                </div>
                                </div>
                                </div>
                                </div>
                                </section>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
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