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
    <title>Fontanilla-Halili Dental Clinic</title>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
  </head>
  <body style="background:#edf0f5;">

    <div class="header">
      <div class="head1">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental</h1>
      </div>
      <div class="head2">
      <?php require'login.php'; ?>
      </div>
    </div>
    
    <div class="container">
        <div class="div-cont-1">
            <h3>Sign Up</h3>
            <?php require'register.php'; ?>
        </div>
        <div class="div-cont-2">
            
            <div style="margin-top:50px;widht:100%;height:100px;">
            <img src="image/serviceicon/available.svg" style="width:70px;height:70px;float:left"> <h3 style="float:left;font-size:25px;"><Strong>Always available</Strong> You can make an appointment 24/7</h3>
            </div>
            
            <div style="padding-top:50px;widht:100%;height:100px;">
            <img src="image/serviceicon/reliability.svg" style="width:70px;height:70px;float:left"> <h3 style="float:left;font-size:25px;"><Strong>Easy to Appoint</Strong> Nothing to worry about</h3>
            </div>
        </div>
     
    </div>
    
    <div class="footer">
      <div class="left">
        
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
