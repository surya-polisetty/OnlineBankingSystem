
<?php 
session_start();

include 'connection.php';

$date=date('Y-m-d h:i:s');
$id=$_SESSION['id'];
$sql="UPDATE persons SET lastlogin='$date' WHERE mobileno=$id";
mysqli_query($conn,$sql);

session_destroy();
header('location:index.php');
?>