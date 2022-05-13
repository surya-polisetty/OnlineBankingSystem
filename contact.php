<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

    <link rel="stylesheet" href="newcss.css">
    <style>
        .heading {
            font-weight: bold;
            color: #2E4372;
        }
    </style>

</head>
<?php include 'header.php' ?>
<div class='content_customer'>
    <h3 style="text-align:center;color:#2E4372;"><u>Contact Us</u></h3>

    <div class="contact">
        <!-- <h3 style="color:#2E4372;"><u>CSE Department,Maulana Azad National Institute of Technolgy</u></h3> -->
        <p><span class="heading">Admin : </span>Surya Polisetty</p>


        <form action="contacting.php" method="POST">
            <table align="center">
                <tr>
                    <td><span class="caption">Consult admin</span></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Your Mobile No.</td>
                    <td><input type="text" name="mobile"></td>
                </tr>
                <tr>
                    <td>Subject</td>
                    <td><input type="text" name="subject"></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><input type="text" name="description"></td>
                </tr>
                <td class="button1"><input type="submit" name="Signup" class="button"></td>
                </tr>
            </table>
    </div>
</div>
<?php include 'footer.php' ?>