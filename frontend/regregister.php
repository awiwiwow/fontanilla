<?php
require_once("dbconfig.php");
require('class/userClass.php');
$userClass = new userClass();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/notifications.css">
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
    <title>Fontanilla Halili Dental</title>
  </head>
  <body>

    <div class="header">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental Log-in</h1>
      <?php require_once'login.php'; ?>
    </div>
    
    <div class="container">
     <?php require_once'login.php'; ?>
    </div>
    
    <div class="footer">
      <div class="left">
        <p>Dont have an account?<a style="color:#3b8beb;" href="regregister.php"> Create now!</a></p>
      </div>
      <div class="right">
        <ul>
         <li> <a href="index.php">Home</a> </li>
          <li> <a href="about.php">About Us</a> </li>
          <li> <a href="services.php">Services</a> </li>
          <li> <a href="location.php">Branches</a</li>
          <li> <a href="smilegallery.php">Smile Gallery</a> </li>
          <li> <a href="contactus.php">Contact Us</a> </li>
        </ul>
      </div>
    </div>
  </body>
</html>


