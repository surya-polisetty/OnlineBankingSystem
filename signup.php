<?php
session_start();

include 'connection.php';

$vfirstname = $_POST['rfirstname'];
$vlastname = $_POST['rlastname'];
$vmobileno = $_POST['rmobileno'];
$vpassword = $_POST['rpassword'];
$vbalance = 0;
$vlastlogin=date("Y-M-d");
$vnotificationtime=date('Y-m-d');

if ($vmobileno > 10000000000 && $vmobileno < 1000000000) {
        echo '<script>alert("mobile no must be 10 digits");';
        echo 'window.location= "index.php";</script>';
}

$sql = "insert into persons
values('$vfirstname','$vlastname',$vmobileno,'$vpassword',$vbalance,'$vlastlogin','$vnotificationtime')";
$result = mysqli_query($conn, $sql);
echo $result;
//header("Location:index.php");
