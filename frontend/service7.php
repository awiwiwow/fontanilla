<?php
require_once("dbconfig.php");
require('class/userClass.php');

$userClass = new userClass();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/subservice.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Dental Clinic</title>
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
        <li><a href="index.php" id="">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="location.php">Location</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
   <!--   <div class="modal-content">

            <div class="register">

            </div>

            <div class="login">
              <span class="close">&times;</span>

            </div>

      </div> -->
    </div>

    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

      <div class="Sidebar">
<img src="image/servicebanner.jpg">
      </div>

      <div class="Content-a">
          <h2>Services</h2>
          <h3><a href="services.php" id="loc-link-deactive">Tooth Filling /Tooth Restoration</a></h3>
          <h3><a href="service2.php" id="loc-link-deactive">Oral Prophylaxis</a></h3>
          <h3><a href="service3.php" id="loc-link-deactive">Tooth Extraction</a></h3>
          <h3><a href="service4.php" id="loc-link-deactive">Root Canal Treatment</a></h3>
          <h3><a href="service5.php" id="loc-link-deactive">Periapical Xray</a></h3>
          <h3><a href="service6.php" id="loc-link-deactive">Tooth Whitening /Bleaching</a></h3>
          <h3><a href="#" id="loc-link-active">Veneers (Direct/Indirect)</a></h3>
          <h3><a href="service8.php" id="loc-link-deactive">Crowns /Bridges (Fixed Bridge)</a></h3>
          <h3><a href="service9.php" id="loc-link-deactive">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="service11.php" id="loc-link-deactive">Flexible Dentures</a></h3>
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Veneers (Direct/Indirect)</h2>
        <p>Direct or Indirect Veneers are made from thin sheets of composite or ceramic tooth colored resin. The veneers are custom made to fit the fronts of your teeth and will improve the color, size and shape</p>
        <h3>What’s the Difference between Indirect or Direct Veneers?</h3>
        <p>Direct Veneers-Composite resin veneers are applied using resin that is matched to the rest of your teeth. Additional layers of resin may be needed to correct the length and shape. The material will be shaped before being hardened with a laser or light. Once hardened, the composite material will be checked for bite and positioning before being polished to perfection.</p>
        <p>Indirect Veneers-Indirect or porcelain veneers require a more invasive treatment as some of the enamel on your teeth needs to be removed to make way for the thin sheets of dental porcelain. Once the enamel has been removed, a mold or impression will be made for your new custom porcelain veneers. If your teeth are too unsightly after enamel removal, I may recommend temporary veneers.</p>
        <p>If you are concerned about some of the removal of your tooth’s structure, direct veneers may be the best solution for your unhappy smile, however, direct veneers are not as strong as indirect veneers and may have to be touched up from time to time.</p>
        <p>Indirect veneers provide a permanent solution for your crooked smile and can last for years if you practice good oral hygiene including brushing twice and flossing once each day. Don’t forget to eat a healthy diet and schedule regular dental appointments with my dental practice in Portland.</p>
        
        <div class="ten">
    
          <div class="white10">
              <div class="color">
                  <img src="image/Gallery/beforenafter/Veneers1After.jpg" width="300" height="200" alt="" />
                  <div class="bottomright">After</div>
              </div>
              <div class="black_white10">
                  <img src="image/Gallery/beforenafter/Veneers1Before.jpg" width="300" height="200" />
                  <div class="bottomleft">Before</div>
              </div>
          </div>


          </div>
          
          <div class="eleven">

          <div class="white11">
              <div class="color">
                  <img src="image/Gallery/beforenafter/Veneers2After.jpg" width="300" height="200" alt="" />
                  <div class="bottomright">After</div>
              </div>
              <div class="black_white11">
                  <img src="image/Gallery/beforenafter/Veneers2Before.jpg" width="300" height="200" />
                  <div class="bottomleft">Before</div>
              </div>
          </div>


          </div>
          
          <div class="twelve">

          <div class="white12">
              <div class="color">
                  <img src="image/Gallery/beforenafter/Veneers3After.jpg" width="300" height="200" alt="" />
                  <div class="bottomright">After</div>
              </div>
              <div class="black_white12">
                  <img src="image/Gallery/beforenafter/Veneers3Before.jpg" width="300" height="200" />
                  <div class="bottomleft">Before</div>
              </div>
          </div>


          </div>
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
     <script src="js/galscript.js">
</script>
<script src="js/subscript.js">
</script>
  <script src="js/myjavascript.js">
  </script>
</body>
</html>
