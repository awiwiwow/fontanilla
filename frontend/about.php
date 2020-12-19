<?php
require_once("dbconfig.php");
require('class/userClass.php');

$userClass = new userClass();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
    <link rel="stylesheet" href="css/subabout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Fontanilla-Halili Dental Clinic</title>
  </head>
  <body>

    <div class="grid-container">

      <div class="Header-title">

        <div class="nav-second" style="background:#3b8beb;">

          <div class="nav-second-left">
            <h3>Call Us (0922 802 2712)</h3>
          </div>

          <div class="nav-second-right">
          <h3>Make an Appointment Online</h3>
<a href="register-login.php"><button>Register/Login</button></a>
          </div>

        </div>


        <h1><a href="index.php">
          <span style="padding-right:10px; padding-top: 3px; display:inline-block;">
        <img style="width:30px;height:30px;" src="image/FontanillaIcon.png"></img></span>Fontanilla Halili Dental</a></h1>
        <img src="image/FontanillaIcon2.png" alt="" class="header-logo">

        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" style="color: #4db1e2;">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="location.php">Branches</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>

        <div class="progress-container">
          <div class="progress-bar" id="myBar"></div>
        </div>

      </div>

      <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

        <div class="Sidebar">
            <img src="image/aboutbanner.jpg">
        </div>

        <div class="Content-a">
            <div id="aboutz1">
            <h3 id="aboutz3"><span class="underline">Our Mission</span></h3>
            <h2 id="aboutz2">TO PROVIDE HIGH QUALITY DENTAL CARE, TO MAKE OUR PATIENTS COMFORTABLE, AND TO BUILD LONG LASTING HEALTHY RELATIONSHIPS WITH OUR PATIENTS.</h2>
            </div>
            <h1><span class="underline">Our Team</span></h1>

            <div class="nested-grid">

              <div class="nes-a">
                <img src="image/D.jpg" alt="doctorhelen">
              </div>

              <div class="nes-b">
                <h4>Dr. Rishelle Anne Fontanilla-Halili</h4>
                <p>is a licensed general dentist who wants to help her patients achieve their best oral health and feel good about their smiles.At Fontanilla Halili Dental Clinic, Dr. Fontanilla offers all types of general dentistry care, including comprehensive dental exams and cosmetic, prosthetic, restorative, and periodontal dentistry.</p>
                <p>GENERAL & COSMETIC DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on March 2012</p>
                <p>Passed the board on November 2013</p>
              </div>


              <div class="ws">

              </div>

              
              <div class="nes-c">
                <h4>Dr. Claudette Bacayon</h4>
                <p>COSMETIC DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on October 2015</p>
                <p>Passed the board on 2017</p>
              </div>


              <div class="nes-d">
                <img src="image/D2.jpg">
              </div>

              <div class="ws1">

              </div>

              <div class="nes-e">
                <img src="image/D3.jpg">
              </div>

              <div class="nes-f">
                <h4>Dr. Gilyn Rueda</h4>
                <p>GENERAL DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on March 2007</p>
                <p>Passed the board on 2008</p>
              </div>

            

              <div class="ws2">

              </div>

             

              <div class="nes-g">
                <h4>Dr. Patrisha Kamile B. Aguilar</h4>
                <p>COSMETIC DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on March 2015</p>
                <p>Passed the board on 2017</p>
              </div>

              <div class="nes-h">
                <img src="image/D4.jpg">
              </div>

              <div class="ws3">

              </div>

              <div class="nes-i">
                <img src="image/D5.jpg">
              </div>

              <div class="nes-j">
                <h4>Dr. Rochelle De Los Reyes</h4>
                <p>GENERAL DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on March 2016</p>
                <p>Passed the board on January 2017</p>
              </div>

            

              <div class="ws4">

              </div>

              

              <div class="nes-k">
                <h4>Dr. Janette Mendez</h4>
                <p>GENERAL & COSMETIC DENTIST</p>
                <p>Centro Escolar University Makati</p>
                <p>Graduated on October 2005</p>
                <p>Passed the board on June 2006</p>
              </div>

              <div class="nes-l">
                <img src="image/D6.jpg">
              </div>

            </div>
        </div>



        <div class="Footer">
          <div class="upper-footer">
            <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" alt="" class="iconicz"> </a>
            
          </div>
          <div class="footer-1">
            <div class="left-footer">
              <h2>Visit Our Three Location:</h2>
              <a href="location.php"> <p>TIRONA ROAD, BINAKAYAN </p> </a>
              <a href="location2.php"> <p>#45 GOVERNOR'S DRIVE </p> </a>
              <a href="location3.php"> <p>2ND FLOOR CM PLAZA BUILDING </p> </a>
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
    <script src="js/subscript.js">
    </script>
     <script src="js/upscroll.js">
    </script>
    <script src="js/mybar.js">
    </script>
  </body>
</html>
