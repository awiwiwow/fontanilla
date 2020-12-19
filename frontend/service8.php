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
   <!--     <div class="modal-content">

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
          <h3><a href="#" id="loc-link-active">Crowns /Bridges (Fixed Bridge)</a></h3>
          <h3><a href="service9.php" id="loc-link-deactive">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="service11.php" id="loc-link-deactive">Flexible Dentures</a></h3>
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Crowns /Bridges (Fixed Bridge)</h2>
        <p>Bridges and crowns are fixed prosthetic devices that are cemented onto existing teeth or implants by a dentist or prosthodontist. Crowns are used most commonly to entirely cover or "cap" a damaged tooth or cover an implant. Bridges are commonly used to cover a space if you’re missing one or more teeth. They are cemented to natural teeth or implants surrounding the space where the tooth once stood.</p>
        <h3>Benefits of BRIDGES & CROWNS</h3>
        <p>In addition to strengthening a damaged tooth, bridges and crowns can be used to improve a tooth’s appearance, shape, alignment and dental occlusion (bite). Gaps left by missing teeth can cause the remaining teeth to shift, which can result in a bad bite. Bridges and crowns help prevent this from happening</p>
        <h3>Top Oral Care Tips for BRIDGES & CROWNS</h3>
        <p>While crowns and bridges can last a lifetime, they do sometimes come loose or fall out. The most important step you can take to ensure the longevity of your crown is to practice good oral hygiene.</p>
        <ul>
          <li>Keep your gums and teeth healthy by brushing with fluoride toothpaste twice a day and flossing daily</li>
          <li>See your dentist or hygienist regularly for checkups and professional cleanings</li>
          <li>To prevent damage to your new crown or bridge, avoid chewing hard foods, ice or other hard objects</li>
        </ul>
        <h3>Four Types Of Dental Bridges</h3>
        <h3>1. Traditional Dental Bridges</h3>
        <p>Traditional bridges are the most popular kind of bridge. These bridges consist of one or more pontics (fake teeth) and are held in place by dental crowns. These dental crowns are also called abutments, and they are cemented onto the teeth adjacent to your missing tooth.</p>
        <p>Traditional bridges can be used when you have natural teeth on both sides of the gap created by your missing tooth. Bridges are even strong enough to replace molars. The downside of traditional bridges is that your dentist will need to prepare the adjacent teeth by removing their enamel to make room for the crowns that will be cemented on top. Since enamel doesn't grow back, these teeth will always need to be protected with crowns, even if you later choose a different type of bridge.</p>
        <h3>2. Cantilever Bridges</h3>
        <p>Cantilever bridges are another option for replacing missing teeth. They are very similar to traditional bridges, but the pontic is supported by an abutment on only one side, rather than on both sides. So if there's only one natural tooth next to the gap, a bridge can still be secured.</p>
        <p>Like traditional bridges, your dentist will need to prepare the adjacent tooth to support the bridge by removing its enamel. Because these restorations are only supported on one side, they may act as a lever in some cases, explains the National Institutes of Health (NIH). This may lead to complications like fractured teeth or loosened crowns.</p>
        <h3>3. Maryland Bridges</h3>
        <p>Maryland bridges are considered a conservative alternative to traditional bridges. These bridges consist of a pontic that is held in place by a metal or porcelain framework. This framework is bonded onto the backs of the two teeth adjacent to the missing tooth. Since this type of bridge isn't held in place by crowns, the adjacent teeth don't need to be filed.</p>
        <p>While Maryland bridges are more conservative than traditional bridges, they do have their downsides. The strength of the bridge is limited by the strength of the resin that holds it in place, so it may not stay in place in areas of the mouth where the teeth are subjected to a lot of biting force, like the molars. The framework may also get in the way of your gums or your bite.</p>
        <h3>4. Implant-Supported Bridges</h3>
        <p>Implant-supported bridges are another option for replacing missing teeth. They can be used when you have more than one tooth missing. Instead of being supported by crowns or frameworks, these bridges are supported by dental implants. Usually, one implant is placed for every missing tooth, and this series of implants holds the bridge in place. However, the bridge may consist of a pontic suspended between two implant-supported crowns if placing one implant for every lost tooth isn't possible.</p>
        <p>Because these bridges are secured by implants, they feel very secure and comfortable, just like the natural teeth they replace. And just like your natural teeth, a quality toothbrush, like a Colgate® 360°® toothbrush, is needed to keep your mouth healthy. One downside is that two surgeries are required to place the implants – the first to place the implants and the second to place the bridge – so expect to wait at least five months to get your finished bridge</p>
        <p>Your dentist can close the gaps in your smile with dental bridges. With so many types of dental bridges available, you can feel confident that your dentist has an appropriate solution for your missing teeth.</p>


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
