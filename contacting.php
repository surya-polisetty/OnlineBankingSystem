<?php
session_start();

include 'connection.php';

$vmobile=$_POST['mobile'];
$vsubject=$_POST['subject'];
$vdescription=$_POST['description'];




$tdate=date('Y-m-d h:i:s');
		$sql3="insert into contact values($vmobile,'$tdate','$vsubject','$vdescription');";
            $result=  mysqli_query($conn,$sql3); 
         
         echo '<script>alert("Feed sent");';
        echo 'window.location= "profile.php";</script>';
         
		
	
		
	}




?>