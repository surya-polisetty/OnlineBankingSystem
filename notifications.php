<?php 
session_start();
        ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Notifications</title>
        
        <link rel="stylesheet" href="newcss.css">
        <style>
            .content_customer table,th,td {
    padding:6px;
    border: 1px solid #2E4372;
   border-collapse: collapse;
   text-align: center;
}

        </style>
    </head>

    <?php include 'header.php' ?>

<?php    include 'connection.php';
$user=$_SESSION["id"];

$sql="SELECT * FROM transactions where Receiver=$user UNION SELECT * FROM request where Receiver=$user order by time DESC";
$result=   mysqli_query($conn,$sql)  or die(mysql_error()); ?>

    <br><br><br>
    <h3 style="text-align:center;color:#2E4372;"><u>Notifications</u></h3>
    <table align="center">
                        
                        <th></th>
                        <th>Date</th>
                        <th>Description</th>
						<th>Purpose</th>
                        
                        <?php
                        while($rws=  mysqli_fetch_assoc($result)){
                            
                            echo "<tr>";
							echo "<td>"."</td>";
                            echo "<td>".$rws["time"]."</td>";
							     $other=$rws["Sender"];
							     $sql1="SELECT * FROM persons where mobileno=$other";
								$result1=   mysqli_query($conn,$sql1)  or die(mysql_error()); 
								$rws1=  mysqli_fetch_assoc($result1);
                            if($rws["notificationtype"]=="t") {echo "<td>".$rws1["firstname"]." ".$rws1["lastname"]."  Credited you"." Rs.".$rws["amount"]."</td>"; }
                            else  {echo "<td>".$rws1["firstname"]." ".$rws1["lastname"]." Requested you"." Rs.".$rws["amount"]."</td>"; }      
                             echo "<td>".$rws["purpose"]."</td>";							
                            echo "</tr>";
                        } ?>
</table>
  
  
  
  	
<!DOCTYPE html>
<html>
<div class="navigateprofileb">
	<form action="profile.php" method="POST">
           <button type="submit"  class="navigateprofileb">Profile</button>  
</form>
          	 </div>				 
        


<div class="profilelogoutb">
	<form action="logout.php" method="POST">
           <button type="submit"  class="profilelogoutb">Log_out</button>  
</form>
          	 </div>		
</html>
	