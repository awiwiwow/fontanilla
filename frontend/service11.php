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
     <!--  <div class="modal-content">

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
          <h3><a href="service7.php" id="loc-link-deactive">Veneers (Direct/Indirect)</a></h3>
          <h3><a href="service8.php" id="loc-link-deactive">Crowns /Bridges (Fixed Bridge)</a></h3>
          <h3><a href="service9.php" id="loc-link-deactive">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="#" id="loc-link-active">Flexible Dentures</a></h3>
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Flexible Dentures</h2>
        <p>Losing your teeth to disease or injury doesn't mean you have to say goodbye to an attractive smile. Dentures and dental implants are two options for replacing lost teeth, or your dentist may also recommend flexible dentures. Made of softer material than regular dentures, these specialized dentures could be the best option for you.</p>
        <h3>What Are Dentures Made Of?</h3>
        <p>Combinations of porcelain, acrylic resin, nylon and chrome cobalt metal are used to make dentures. Porcelain used to be the preferred material for making denture teeth, but resin has taken over in popularity because it's lighter and cheaper, and the material sticks better to the denture base.</p>
        <p>Most denture bases are made of acrylic resin or chrome cobalt metal. An advantage of using acrylic resin is that it can be dyed to match the patient's gums, but metal is less likely to break if the dentures are dropped. A third option is a flexible denture base made of nylon.</p>
        <h3>Problems With Regular Dentures</h3>
        <p>Flexible dentures help prevent many of the problems that regular dentures cause. Dentures that have a rigid resin or metal base can take some getting used to. As well as growing accustomed to the feel of the dentures, the patient has to learn how to hold them in place with the cheeks and tongue. New dentures often cause soreness and irritation in the early days, and patients must learn how to clean them carefully to avoid breakages.</p>
        <h3>Benefits of Flexible Dentures</h3>
        <p>Flexible dentures provide a solution for patients who can't or don't want to use regular dentures. The most obvious advantage is that they aren't brittle, so they're less likely to shatter if they're dropped. The British Association of Clinical Dental Technology lists some more benefits:</p>
        <ul>
          <li>They cling to the gums and don't require denture adhesive or metal clasps to hold them in place.</li>
          <li>The material is clear and allows the natural gum color to show through.</li>
          <li>They don't take as long to manufacture as regular dentures.</li>
        </ul>
        <p>A review published in the IOSR Journal of Dental and Medical Sciences mentions more advantages of these specialized dentures. Comfort is a major benefit, and patients often find chewing easier than when wearing regular dentures. Some patients are allergic to acrylic resin, nickel or other materials in traditional dentures, and some have difficulty opening their mouths wide. For these patients, the flexible variety may be the only type they can wear. Dentists may also recommend them to patients who have had missing teeth for a long time.</p>
        <h3>Disadvantages of Flexible Denture</h3>
        <p>Though dentures with soft bases aren't likely to break when dropped, patients should clean them carefully. The flexible base is more prone to bacteria buildup than a rigid base. Remove the dentures every day and brush them all over with a toothbrush and warm water to keep them fresh, and swish a mouthwash, like Colgate Total Advanced Pro-Shield, that helps prevent gingivitis. Brush any remaining teeth twice a day and floss between them once a day.</p>
        <p>Flexible dentures are one of the many options available to replace natural teeth effectively. If you think they might be the right choice for you, talk to your dentist.</p>
        <a href="register-login.php"><button class="serv-but">Make an Appointment Now</button></a>
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
  <script src="js/subscript.js">
  </script>
  <script src="js/myjavascript.js">
  </script>
</body>
</html>
