<?php
session_start();

include 'connection.php';

if (!isset($_SESSION['id']))
    header('location:index.html');
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Transfer Funds</title>

    <link rel="stylesheet" href="newcss.css">
</head>


<?php include 'header.php' ?>

<div class="navigateprofileb">
    <form action="profile.php" method="POST">
        <button type="submit" class="navigateprofileb">Profile</button>
    </form>
</div>

<h3 style="text-align:center;color:#2E4372;"><u>Add money</u></h3>


<div class="user_login">

    <form action="addmoneynull.php" method="POST">
        <table align="left">
            <tr>
                <td><span class="caption">Card details</span></td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Card no.</td>
                <td><input type="text" name="receivermobile"></td>
            </tr>
            <tr>
                <td>Expiry date</td>
                <td><input type="text" name="amount"></td>
            </tr>
            <tr>
                <td>Enter Name on Card</td>
                <td><input type="text" name="purpose"></td>
            </tr>
            <tr>
                <td>CVV</td>
                <td><input type="text" name="purpose"></td>
            </tr>
            <td class="button1"><input type="submit" name="Signup" class="button"></td>
            </tr>
        </table>

    </form>



</html>