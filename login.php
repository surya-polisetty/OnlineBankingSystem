<?php
session_start();

include 'connection.php';

$vmobileno=$_POST['lmobileno'];
$vpassword=$_POST['lpassword'];


$sql ="select * from persons where mobileno=$vmobileno and password='$vpassword'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);




if(!$row) {
	 echo '<script>alert("Mobile no. are password is incorrect");';
        echo 'window.location= "index.php";</script>';
  }
else {
	$_SESSION["id"]=$row["mobileno"];	
}


 if (isset($_SESSION["id"]))    
header("Location:profile.php");


?>