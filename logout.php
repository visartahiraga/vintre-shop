<?php
$con = new mysqli('htl-projekt.com', 'vistah17sql4', 'S+?M1o9g', 'vistah17sql4');

session_start();



session_destroy();
header("Location:index.php?success=loggedOut");

?>