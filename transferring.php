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
$userrembalance=$rws["Balance"]-$vamount;
if($userrembalance<=100)
    {
        echo '<script>alert("Your account balance will be less than Rs. 100.\n\nYou must maintain a minimum balance of Rs. 100 in order to proceed with the transfer.");';
        echo 'window.location= "transfer.php";</script>';
    }
    else{

		$sql1 ="update persons set Balance = $userrembalance where mobileno=$userm;";
		$result=  mysqli_query($conn,$sql1); 
		$sql2 ="UPDATE persons SET Balance = $rebalance+$vamount WHERE mobileno=$rem";
		$result=  mysqli_query($conn,$sql2); 
		$sql3="insert into transactions(Sender,Receiver,amount,purpose,time)	values($userm,$rem,$vamount,'$vpurpose','$tdate');";
            $result=  mysqli_query($conn,$sql3); 
         
         echo '<script>alert("Transfer Successful.");';
        echo 'window.location= "profile.php";</script>';
         
		
	
		
	}




?>