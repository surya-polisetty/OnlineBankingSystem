<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title> Online Banking System </title>
  <link rel="stylesheet" href="newcss.css">

</head>

<?php include 'header.php' ?>
<!-- <div class='content_customer'> -->
  <div class="user_login">


    <form action="login.php" method="POST">
      <table align="left">
        <tr>
          <td><span class="caption">Login</span></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td>Mobile no:</td>
        </tr>
        <tr>
          <td><input type="text" name="lmobileno"></td>
        </tr>
        <tr>
          <td>Password:</td>
        </tr>
        <tr>
          <td><input type="password" name="lpassword"></td>
        </tr>
        <tr>
          <td class="button1"><input type="submit" name="Login" class="button"></td>
        </tr>
      </table>
    </form>

  </div>


  <div class="sign_up">

    <form action="signup.php" method="POST">
      <table align="left">
        <tr>
          <td><span class="caption">Sign Up</span></td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
          </td>
        </tr>
        <tr>
          <td>First Name:</td>
        </tr>
        <tr>
          <td><input type="text" name="rfirstname"></td>
        </tr>
        <tr>
          <td>Last Name:</td>
        </tr>
        <tr>
          <td><input type="text" name="rlastname"></td>
        </tr>
        <tr>
          <td>Mobile no:</td>
        </tr>
        <tr>
          <td><input type="text" name="rmobileno"></td>
        </tr>
        <tr>
          <td>Password:</td>
        </tr>
        <tr>
          <td><input type="password" name="rpassword"></td>
        </tr>
        <tr>
          <td class="button1"><input type="submit" name="Signup" class="button"></td>
        </tr>
      </table>

    </form>



  </div>
<!-- </div> -->
<?php

if (isset($_SESSION["id"])) {
  header("Location:profile.php");
}
?>


<?php include 'footer.php' ?>