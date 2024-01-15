<?php
	$con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');
	$id=$_GET['id'];
 
	$name=$_POST['name'];
	$price=$_POST['price'];
    $image=$_POST['image'];
    $category=$_POST['category'];
 
	mysqli_query($con,"update `products` set name='$name', price='$price', image='$image', category='$category' where id='$id'");
	header('location:edit_success.php');
?>