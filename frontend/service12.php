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
          <h3><a href="service7.php" id="loc-link-deactive">Veneers (Direct/Indirect)</a></h3>
          <h3><a href="service8.php" id="loc-link-deactive">Crowns /Bridges (Fixed Bridge)</a></h3>
          <h3><a href="service9.php" id="loc-link-deactive">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="service11.php" id="loc-link-deactive">Flexible Dentures</a></h3>
          <h3><a href="#" id="loc-link-active">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Odontectomy /Oral Surgery</h2>
        <p>Wisdom teeth are the third and last molars on each side of the upper and lower jaws. They are also the final teeth to erupt; they usually appear when a person is in their late teens or early twenties.</p>
        <p>Impaction is a common dental issue. An impaction happens when an adult tooth fails to erupt and instead remains surrounded by bone and gum. In some instances, the tooth is located below another, or it grows in the wrong direction and presses against another tooth. Your dentist may recommend an odontectomy to remove an impacted tooth. Here's all you need to know about the procedure.</p>
        <h3>Which Teeth Are Affected?</h3>
        <p>Any tooth can become impacted, but the third molars (i.e. the wisdom teeth) have the highest frequency of impaction. Canines are also susceptible to impaction, says Cambridge University Hospitals. Almost any tooth can be impacted, however, and this is a risk faced by patients with overcrowding that can prevent certain teeth from emerging correctly.</p>
        <h3>What Is an Odontectomy?</h3>
        <p>An odontectomy is the surgical extraction of a tooth that is partially or completely encompassed by bone. It differs from a regular surgical extraction because the bone is removed that surrounds the tooth and then the extraction of the tooth takes place. The dentist typically cuts open a section of the gum to reach the bone, and if necessary, drills a hole in the bone to access the tooth. The dentist then loosens the tooth from the surrounding socket using elevators, and may cut the tooth into sections for easy removal. Forceps are used to hold the socket open while the sections are taken out piece by piece. The procedure is completed under local anesthesia, but more serious cases may require general anesthesia. If the dentist decides to leave the root behind, the procedure is known as partial odontectomy or coronectomy, meaning only the crown of the tooth is removed, according to the Journal of Oral Hygiene & Health.</p>
        <h3>Is This Procedure Right for You?</h3>
        <p>Deciding whether to remove an impacted wisdom or any other tooth is a choice you should only make after consulting with your dentist. Impactions are classified in various ways based on the nature of enclosing gum tissue, the angle of the tooth or the tooth's root surfaces that may be near the nerve in the lower jaw.</p>
        <p>Some questions to answer while you evaluate whether this process could work for you include:</p>
        <ul>
          <li>Does the impacted tooth cause you pain resulting from pressure against other teeth?</li>
          <li>Have you noticed any sensation of loosening of the teeth? An impacted tooth touching another can cause it to become loose because of the forces pressing against it.</li>
          <li>Painful, swollen, red and sensitive gums could indicate an infection, a common problem with impacted teeth. If this clears with the use of antibiotics, you may not need an odontectomy.</li>
        </ul>
        <h3>Care After Surgery</h3>
        <p>If you do opt for an impacted tooth removal, be aware that there is a risk of infection when the wound is raw. Special care is needed to ensure your healing. It's possible you will have swelling of the face and jaw, and it could be difficult to eat certain types of food. Rest for the first 24 hours and avoid talking or eating more than absolutely necessary. After 12 hours have passed, rinse your mouth gently with a warm salt water solution or Colgate Total Advanced Health mouthwash, which kills 99 percent of germs on contact.</p>
        <p>Having a procedure to remove impacted teeth may require you to have an anesthetic depending on the location, severity and the number of teeth that need to be removed. Your dental professional will advise you of the best course of action.</p>
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
