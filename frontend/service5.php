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
          <h3><a href="#" id="loc-link-active">Periapical Xray</a></h3>
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
        <h2>Overview of Periapical Xray</h2>
        <p>Dental X-rays (radiographs) are images of your teeth that your dentist uses to evaluate your oral health. These X-rays are used with low levels of radiation to capture images of the interior of your teeth and gums. This can help your dentist to identify problems, like cavities, tooth decay, and impacted teeth.</p>
        <p>Dental X-rays may seem complex, but they’re actually very common tools that are just as important as your teeth cleanings.</p>
        <h3>Why dental X-rays are performed</h3>
        <p>Dental X-rays are typically performed yearly. They can happen more often if your dentist is tracking the progress of a dental problem or treatment</p>
        <p>Factors affecting how often you get dental X-rays may include:</p>
        <ul>
          <li>Your age</li>
          <li>Your current oral health</li>
          <li>Any symptoms of oral disease</li>
          <li>A history of gum disease (gingivitis) or tooth decay</li>
        </ul>
        <p>If you’re a new patient, you’ll probably undergo dental X-rays so that your new dentist can get a clear picture of your dental health. This is especially important if you don’t have any X-rays from your previous dentist.</p>
        <p>Children may need to have dental X-rays more often than adults because their dentists might need to monitor the growth of their adult teeth. This is important because it can help the dentist determine if baby teeth need to be pulled to prevent complications, such as adult teeth growing in behind baby teeth.</p>
        <h3>Risks of dental X-rays</h3>
        <p>While dental X-rays do involve radiation, the exposed levels are so low that they’re considered safe for children and adults. If your dentist uses digital X-rays instead of developing them on film, your risks from radiation exposure are even lower.</p>
        <p>Your dentist will also place a lead “bib” over your chest, abdomen, and pelvic region to prevent any unnecessary radiation exposure to your vital organs. A thyroid collar may be used in the case of thyroid conditions. Children and women of childbearing age may also wear them along with the lead bib.</p>
        <p>Pregnancy is an exception to the rule. Women who are pregnant or believe they may be pregnant should avoid all types of X-rays. Tell your dentist if you believe you are pregnant, because radiation is not considered safe for developing fetuses</p>
        <h3>Preparing for dental X-rays</h3>
        <p>Dental X-rays require no special preparation. The only thing you’ll want to do is brush your teeth before your appointment. That creates a more hygienic environment for those working inside your mouth. X-rays are usually done before cleanings.</p>
        <p>At the dentist’s office, you’ll sit in a chair with a lead vest across your chest and lap. The X-ray machine is positioned alongside your head to record images of your mouth. Some dental practices have a separate room for X-rays, while others perform them in the same room as cleanings and other procedures.</p>
        <h3>Types of X-rays</h3>
        <ul>
            <li> <strong> Bitewing </strong> This technique involves biting down on a special piece of paper so that your dentist can see how well the crowns of your teeth match up. This is commonly used to check for cavities between teeth (interdental).</li>
            <li> <strong> Occlusal </strong> This X-ray is done when your jaw is closed to see how your upper and bottom teeth line up. It can also detect anatomical abnormalities with the floor of the mouth or the palate.</li>
            <li> <strong> Panoramic </strong> For this type of X-ray, the machine rotates around the head. Your dentist may use this technique to check your wisdom teeth, plan for implanted dental devices, or investigate jaw problems.</li>
            <li> <strong> Periapical </strong> This technique focuses on two complete teeth from root to crown.</li>
        </ul>
        <p>Extraoral X-rays may be used when your dentist suspects there might be problems in areas outside of the gums and teeth, such as the jaw.</p>
        <p>A dental hygienist will guide you through each step of the X-ray process. They might step outside of the room briefly while the images are being taken. You’ll be instructed to hold still while the pictures are recorded. Spacers (film holders), if they’re used, will be moved and adjusted in your mouth to obtain the proper images.</p>
        <h3>After dental X-rays</h3>
        <p>When the images are ready — instantly in the case of digital X-rays — your dentist will review them and check for abnormalities. If a dental hygienist is cleaning your teeth, the dentist may go over the results of the X-rays with you after your cleaning is done. The exception is if the hygienist discovers any significant problems during the X-rays.</p>
        <p>If your dentist finds problems, such as cavities or tooth decay, they’ll discuss your treatment options. If your dentist finds no problems, keep up the good work!</p>
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
