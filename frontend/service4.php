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
  <!--    <div class="modal-content">

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
          <h3><a href="#" id="loc-link-active">Root Canal Treatment</a></h3>
          <h3><a href="service5.php" id="loc-link-deactive">Periapical Xray</a></h3>
          <h3><a href="service6.php" id="loc-link-deactive">Tooth Whitening /Bleaching</a></h3>
          <h3><a href="service7.php" id="loc-link-deactive">Veneers (Direct/Indirect)</a></h3>
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
        <h2>Overview of Root Canal Treatment</h2>
        <p>Root canal treatment (endodontics) is a dental procedure used to treat infection at the centre of a tooth (the root canal system).</p>
        <p>The infection is caused by bacteria that live in the mouth and invade the tooth. This can happen after:</p>
        <ul>
          <li>Tooth decay</li>
          <li>Leaky fillings</li>
          <li>Damage to teeth as a result of trauma, such as a fall</li>
        </ul>
        <h3>When root canal treatment is needed</h3>
        <p>Root canal treatment is only required when dental X-rays show that the pulp has been damaged by a bacterial infection. The pulp will begin to die if it's infected by bacteria, allowing the bacteria to then multiply and spread.</p>
        <p>The symptoms of a pulp infection include:</p>
          <ul>
            <li>Pain when eating or drinking hot or cold food and drink</li>
            <li>Pain when biting or chewing</li>
            <li>A loose tooth</li>
          </ul>
        <p>Further symptoms eventually occur, such as:</p>
        <ul>
          <li>Pain when biting or chewing returning</li>
          <li>Swelling of the gum near the affected tooth</li>
          <li>Pus oozing from the affected tooth</li>
          <li>Facial swelling</li>
          <li>The tooth becoming a darker colour</li>
        </ul>
        <p>It's important to see your dentist if you develop toothache. If your tooth is infected, the pulp can't heal by itself.</p>
        <p>Leaving the infected tooth in your mouth may make it worse. There may also be less chance of the root canal treatment working if the infection within your tooth becomes established.</p>
        <p>Antibiotics – medication to treat bacterial infections – aren't effective in treating root canal infections.</p>
        <h3>How root canal treatment is performed</h3>
        <p>TTo treat the infection in the root canal, the bacteria need to be removed. This can be done by either:</p>
        <ul>
          <li>Removing the bacteria from the root canal system (root canal treatment)</li>
          <li>Removing the tooth (extraction)</li>
        </ul>
      <p>However, removing the tooth isn't usually recommended as it's better to keep as many of your natural teeth as possible.</p>
      <p>After the bacteria have been removed, the root canal will be filled and the tooth sealed with a filling or crown. In most cases the inflamed tissue near the tooth will heal naturally.</p>
      <p>Before having root canal treatment, you'll usually be given a local anaesthetic. This means the procedure shouldn't be painful and should be no more unpleasant than having a filling.</p>
      <p>Root canal treatment is usually successful. In about 9 out of 10 cases a tooth can survive for up to 10 years after root canal treatment.</p>
      <h3>Recovering from root canal treatment</h3>
      <p>It's important to look after your teeth when recovering from root canal treatment. You should avoid biting on hard foods until all of your treatment is complete.</p>
      <p>After your final treatment, your restored tooth shouldn't be painful, although it may feel sensitive for a few days.</p>
      <p>Over-the-counter painkillers, such as paracetamol or ibuprofen, can be used to relieve any discomfort. Return to your dentist if you continue to experience pain or swelling after using painkillers.</p>
      <p>In most cases it's possible to prevent the need for further root canal treatment by:</p>
      <ul>
        <li>Maintaining good oral hygiene</li>
        <li>Not consuming too much sugary food</li>
        <li>Giving up smoking if you smoke</li>
      </ul>
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
