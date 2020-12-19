<?php
require_once("dbconfig.php");
require('class/userClass.php');

$userClass = new userClass();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />      
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/subcontact.css">
    <script src="js/scrolled.js"></script>
    <script src="js/mybar.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

   <title>Fontanilla-Halili Dental Clinic</title>
   <link rel="shortcut icon" href="image/FontanillaIcon.png" />
  </head>
  <body onload="initialize()">
    <div class="grid-container">


      <div class="Header-title">

        <div class="nav-second">

          <div class="nav-second-left">
            <h3>Call Us (0922 802 2712)</h3>
          </div>

          <div class="nav-second-right">
          <h3>Make an Appointment Online</h3>
                 <a href="register-login.php"><button >Register/Login</button></a>
          </div>

        </div>


        <h1><a href="index.php">
          <span style="padding-right:10px; padding-top: 3px; display:inline-block;">
        <img style="width:30px;height:30px;" src="image/FontanillaIcon.png"></img></span>Fontanilla Halili Dental</a></h1>
        <img src="image/FontanillaIcon2.png" alt="" class="header-logo">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="location.php">Branches</a></li>
          <li><a href="Contactus.php" id="activetitle" >Contact Us</a></li>
        </ul>

        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>

      </div>


        <div class="Sidebar">
            <img src="image/contactbanner.jpg">
        </div>

        <div class="Content-a">
                
          <h2>MAKE AN APPOINTMENT TODAY</h2>
          <p>We try our best to offer the best comprehensive dental care in Cavite by putting
             state-of-the-art technology into the hands of some of the city's most talented dentists.
              We opened our doors to the public with the aim of offering the most convenient, highest-
              quality care possible. To that end, we're open weekends, to make booking easy you can make an Appointment online.</p>
               <div class="contact-cont">
                    <?php require'inquiry.php';?>
                
               </div>
               <div class="contact-cont2">
                 <h1>For Appointment Online</h1>
                 <a href="login-register.php"><button type="button" name="button">Register Now</button></a>
                 <h1>Call Us</h1>
                 <h2>0922 802 2712</h2>
                 <h1>Email Us</h1>
                 <h2>fontanilla.halili@gmail.com</h2>
             </div>
        </div>

        <div class="Content-b">
          <h3>#45 GOVERNOR'S DRIVE LANGKAAN 1, DASMARINAS, CAVITE</h3>
          <ul>
            <li>Monday 9am – 5pm</li>
            <li>Tuesday 9am – 5pm</li>
            <li>Wednesday 9am – 5pm</li>
            <li>Thursday 9am – 5pm</li>
            <li>Friday 9am – 5pm</li>
            <li>Saturday 9am – 5pm</li>
          </ul>
          <div id="map_canvas"></div>



        </div>

        <div class="Content-c">
            <h3>TIRONA ROAD,BINAKAYAN Kawit, Cavite</h3>
            <ul>
              <li>Monday 9am – 5pm</li>
              <li>Tuesday 9am – 5pm</li>
              <li>Wednesday 9am – 5pm</li>
              <li>Thursday 9am – 5pm</li>
              <li>Friday 9am – 5pm</li>
              <li>Saturday 9am – 5pm</li>
            </ul>
            <div id="map_canvas_2"></div>



        </div>

        <div class="Content-d">
            <h3>2ND FLOOR CM PLAZA BUILDING, DASMARINAS, CAVITE</h3>
            <ul>
              <li>Monday 9am – 5pm</li>
              <li>Tuesday 9am – 5pm</li>
              <li>Wednesday 9am – 5pm</li>
              <li>Thursday 9am – 5pm</li>
              <li>Friday 9am – 5pm</li>
              <li>Saturday 9am – 5pm</li>
              <li>Sunday 9am – 5pm</li>
            </ul>
            <div id="map_canvas_3"></div>

        </div>



        <script async defer
          src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALxQM48TTVVN6qnqC-0ktt7g2lnmSoUSA&callback=initMap">
          </script>

          <div class="Footer">
            <div class="upper-footer">
              <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" alt="" class="iconic"> </a>
            
            </div>
            <div class="footer-1">
              <div class="left-footer">
                <h2>Visit Our Three Location:</h2>
                <a href="location.php"> <p>TIRONA ROAD, BINAKAYAN</p> </a>
                <a href="location2.php"> <p>#45 GOVERNOR'S DRIVE</p> </a>
                <a href="location3.php"> <p>2ND FLOOR CM PLAZA BUILDING</p> </a>
              </div>
              <div class="middle-footer">
                 <h2>Business Hours</h2>
                  <p>Monday</p><p>9:00 AM -5:00 PM</p>
                  <p>Tuesday</p><p>9:00 AM -5:00 PM</p>
                  <p>Wednesday</p><p>9:00 AM -5:00 PM</p>
                  <p>Thursday</p><p>9:00 AM -5:00 PM</p>
                  <p>Friday</p><p>9:00 AM -5:00 PM</p>
                  <p>Saturday</p><p>9:00 AM -5:00 PM</p>
                  <p>Sunday</p><p>9:00 AM -5:00 PM</p>
                  <p>Note: (Only Dasma-Bayan branch is open until Sunday)</p>
              </div>
              <div class="right-footer">
                <h2>Stay Connected</h2>
                <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" class="iconic"> </a>
              </div>
            </div>
              <div class="footer-2">
            <h3>© Fontanilla Halili Dental Clinic</h3>
          </div>
          </div>
    </div>
    <script src="js/contactscript.js"></script>
  </body>
</html>
