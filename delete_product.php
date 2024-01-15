<?php
	$id=$_GET['id'];
    $con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');
	mysqli_query($con,"delete from `products` where id='$id'");
	header('location:admin_products.php');
?>