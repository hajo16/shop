<?php
include('confec.php');
 $ID = $_GET['id'];
 mysqli_query($con, "DELETE FROM pro WHERE id=$ID");
 header('location:protacts.php');

?>