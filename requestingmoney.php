<?php
session_start();

include 'connection.php';

$vreceivermobile=$_POST['receivermobile'];
$vamount=$_POST['amount'];
$vpurpose=$_POST['purpose'];
$user=$_SESSION["id"];



$sqll="select * from persons where mobileno='$user'";
$result=  mysqli_query($conn,$sqll); 	
$rws=  mysqli_fetch_assoc($result);
$userm=$rws["mobileno"]	;
$userbalance=$rws["Balance"];

$resql="select * from persons where mobileno=$vreceivermobile";
$reresult=  mysqli_query($conn,$resql); 	
$rerws=  mysqli_fetch_assoc($reresult);
$rem=$rerws["mobileno"]	;
$rebalance=$rerws["Balance"];

$tdate=date('Y-m-d h:i:s');

		$sql3="insert into request(Sender,Receiver,amount,purpose,time) 	values($userm,$rem,$vamount,'$vpurpose','$tdate');";
            $result=  mysqli_query($conn,$sql3); 
         
         echo '<script>alert("Request Sent.");';
        echo 'window.location= "profile.php";</script>';
         
		
		
	



//header("Location:profile.php");

?>