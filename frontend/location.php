<?php
require_once("dbconfig.php");
require('class/userClass.php');

$userClass = new userClass();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/sub.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Fontanilla-Halili Dental Clinic</title>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
</head>
<body>
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
        <li><a href="location.php" id="activetitle">Branches</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>

   

    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

      <div class="Sidebar">
        <img src="image/location1.jpg">
      </div>

      <div class="Content-a">
          <h2>Location</h2>
          <h3><a href="location.php" id="loc-link-active">#45 Governor's Drive</a></h3>
          <h3><a href="location2.php" id="loc-link-deactive">Tirona Road, Binakayan</a></h3>
          <h3><a href="location3.php" id="loc-link-deactive">2nd Floor CM Plaza Building</a></h3>
      </div>

      <div class="Content-b">
          <h2>Welcome to our Clinic</h2>

          <div class="loc-slide">

              <img class="mySlides img-loc-slid" src="image/langkaan/1.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/2.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/3.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/4.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/5.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/6.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/7.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/8.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/9.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/10.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/11.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/12.png" style="width:100%">
              <img class="mySlides img-loc-slid" src="image/langkaan/13.png" style="width:100%">

            <div class="row-pad loc-sec">
              <div class="select-slide">
              <div class="loc-col s4">
                <img class="demo img-opacity img-opacity-off" src="image/langkaan/1.png" style="width:100%" onclick="currentDiv(1)">
              </div>
              <div class="loc-col s4">
                <img class="demo img-opacity img-opacity-off" src="image/langkaan/2.png" style="width:100%" onclick="currentDiv(2)">
              </div>  <div class="loc-col s4">
                  <img class="demo img-opacity img-opacity-off" src="image/langkaan/3.png" style="width:100%" onclick="currentDiv(3)">
                </div>  <div class="loc-col s4">
                    <img class="demo img-opacity img-opacity-off" src="image/langkaan/4.png" style="width:100%" onclick="currentDiv(4)">
                  </div>  <div class="loc-col s4">
                      <img class="demo img-opacity img-opacity-off" src="image/langkaan/5.png" style="width:100%" onclick="currentDiv(5)">
                    </div>  <div class="loc-col s4">
                        <img class="demo img-opacity img-opacity-off" src="image/langkaan/6.png" style="width:100%" onclick="currentDiv(6)">
                      </div>  <div class="loc-col s4">
                          <img class="demo img-opacity img-opacity-off" src="image/langkaan/7.png" style="width:100%" onclick="currentDiv(7)">
                        </div>  <div class="loc-col s4">
                            <img class="demo img-opacity img-opacity-off" src="image/langkaan/8.png" style="width:100%" onclick="currentDiv(8)">
                          </div>  <div class="loc-col s4">
                              <img class="demo img-opacity img-opacity-off" src="image/langkaan/9.png" style="width:100%" onclick="currentDiv(9)">
                            </div>  <div class="loc-col s4">
                                <img class="demo img-opacity img-opacity-off" src="image/langkaan/10.png" style="width:100%" onclick="currentDiv(10)">
                              </div>  <div class="loc-col s4">
                                  <img class="demo img-opacity img-opacity-off" src="image/langkaan/11.png" style="width:100%" onclick="currentDiv(11)">
                                </div>  <div class="loc-col s4">
                                    <img class="demo img-opacity img-opacity-off" src="image/langkaan/12.png" style="width:100%" onclick="currentDiv(12)">
                                  </div>  <div class="loc-col s4">
                                      <img class="demo img-opacity img-opacity-off" src="image/langkaan/13.png" style="width:100%" onclick="currentDiv(13)">
                                    </div>

            </div>
          </div>
          </div>

          <hr id="style-hr">

          <h3>address: #45 Governor's Drive Langkaan 1, Dasmarinas, Cavite</h3>
          <h1>Doctors on duty:</h1>
          <h4>Dr. Rishelle Anne Fontanilla-Halili</h4>
          <p>COSMETIC & GENERAL DENTIST</p>
          <p>Monday - Saturday : 9AM - 1PM</p>
          <h4>Dr. Claudette Bacayon</h4>
          <p>COSMETIC & GENERAL DENTIST</p>
          <p>Monday - Saturday : 1PM - 5PM</p>
          <hr id="style-hr">
          <div id="map"></div>
            <script>
              // Initialize and add the map
              function initMap() {
                // The location of Uluru
                var uluru = {lat: 14.2938631, lng: 120.9383363};
                // The map, centered at Uluru
                var map = new google.maps.Map(
                  document.getElementById('map'), {zoom: 19, center: uluru});
                  // The marker, positioned at Uluru
                  var marker = new google.maps.Marker({position: uluru, map: map});
                }
          </script>
          <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALxQM48TTVVN6qnqC-0ktt7g2lnmSoUSA&callback=initMap">
          </script>


      </div>



      <div class="Footer">
        <div class="upper-footer">
          <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" alt="" class="iconic"> </a>
          <a href=""> <img src="image/icons/gmail.svg" alt="" class="iconics"> </a>
        </div>
        <div class="footer-1">
          <div class="left-footer">
          <h2>Visit Our Three Location:</h2>
          <a href="location.php"> <p>Binakayan Branch: TIRONA ROAD, BINAKAYAN </p> </a>
          <a href="location2.php"> <p>Langkaan Branch: #45 GOVERNOR'S DRIVE </p> </a>
          <a href="location3.php"> <p>Dasma-Bayan Branch: 2ND FLOOR CM PLAZA BUILDING </p> </a>
        </div>
        <div class="middle-footer">
           <h2>Business Hours</h2>
          <p>Monday</p><p>9:00 AM - 5:00 PM</p>
          <p>Tuesday</p><p>9:00 AM - 5:00 PM</p>
          <p>Wednesday</p><p>9:00 AM - 5:00 PM</p>
          <p>Thursday</p><p>9:00 AM - 5:00 PM</p>
          <p>Friday</p><p>9:00 AM - 5:00 PM</p>
          <p>Saturday</p><p>9:00 AM - 5:00 PM</p>
          <p>Sunday</p><p>9:00 AM - 5:00 PM</p>
          <p>Note: (Only Dasma-Bayan branch is open until Sunday)</p>
        </div>
          <div class="right-footer">
            <h2>Stay Connected</h2>
            <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" class="iconic"> </a>
            <a href="#"> <img src="image/icons/gmail.svg" class="iconic2"> </a>
          </div>
        </div>
          <div class="footer-2">
        <h3>© Fontanilla Halili Dental Clinic</h3>
      </div>
      </div>

  </div>
  <script src="js/locscripts.js">
  </script>
  <script src="js/subscript.js">
  </script>
  <script src="js/myjavascript.js">
  </script>
</body>
</html>
