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
          <h3><a href="#" id="loc-link-active">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="service11.php" id="loc-link-deactive">Flexible Dentures</a></h3>
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Removable Partial Dentures</h2>
        <p>Removable partial dentures usually consist of replacement teeth attached to pink or gum-colored plastic bases. Depending on your needs, your dentist will design a partial denture for you. A partial denture may have a metal framework and clasps that connect to your teeth, or they can have other connectors that are more natural looking. In some cases, a removable partial denture is made to attach to your natural teeth with devices called precision attachments. Precision attachments are generally more esthetic than clasps. </p>
        <p>Crowns on your natural teeth are sometimes needed to improve the fit of a removable partial denture and they are usually required with attachments. Partial dentures with precision attachments generally cost more than those with clasps. Consult with your dentist to find out which type is right for you.</p>
        <h3>What to expect:</h3>
        <ul>
          <li>In the beginning, your new partial denture may feel awkward or bulky. This is normal, and you will eventually become accustomed to wearing it. </li>
          <li>Inserting and removing the partial denture will require some practice.</li>
          <li>Follow all instructions given by your dentist. Your denture should fit into place with relative ease. Never force the partial denture into position by biting down. This could bend or break the clasps. </li>
          <li>Your dentist will give you specific instruction about how long the denture should be worn and when it should be removed.</li>
          <li>Initially, you may be asked to wear your partial denture all the time. Although this may be uncomfortable at first, it's the quickest way to identify areas that may need adjustment.</li>
          <li>If the denture puts too much pressure on a particular area, that spot will become sore. Your dentist will adjust the partial denture to fit more comfortably. After making adjustments, your dentist will probably recommend that you take the partial denture out of your mouth before going to bed and replace it in the morning.</li>
          <li>Eating should become a more pleasant experience with dentures. Start out by eating soft foods that are cut into small pieces. Chew on both sides of the mouth to keep even pressure on both sides. Avoid foods that are extremely sticky or hard. You may want to avoid chewing gum during the adjustment period.</li>
          <li>Partial denture can also help improve your speech. If you find it difficult to pronounce certain words, practice reading out loud. Repeat the words that give you trouble. With time, you will become accustomed to speaking properly with your partial denture.</li>
        </ul>
        <h3>Caring for your dentures</h3>
        <ul>
          <li>Your dentist can recommend a denture cleaner. Look for denture cleansers with the American Dental Association Seal of Acceptance.</li>
          <li>When cleaning a partial denture, it’s a good idea to stand over a folded towel or a sink of water just in case you accidentally drop the denture.</li>
          <li>Do not use toothpaste since it can be too harsh for cleaning dentures.</li>
          <li>Some people use hand soap or mild dishwashing liquid to clean their dentures, which are both acceptable. However, most household cleaners are too abrasive and should not be used for cleaning dentures.</li>
          <li>Brush the denture each day to remove food deposits and plaque. The helps the denture from becoming permanently stained. </li>
          <li>It's best to use a brush that is designed for cleaning dentures because it has bristles that are arranged to fit the shape of the denture. A regular, soft-bristled toothbrush is also acceptable. </li>
          <li>Avoid using a brush with hard bristles, which can damage the denture.</li>
          <li>Clean your dentures by thoroughly rinsing off loose food particles. Moisten the brush and apply the denture cleaner. Brush all denture surfaces gently to avoid damaging the plastic or bending the attachments.</li>
          <li>A denture could lose its proper shape if it is not kept moist. At night, the denture should be placed in soaking solution or water. Your dentist can recommend the proper method for keeping your dentures in good shape.</li>
          <li>Don’t chew, swallow, or gargle with denture cleansers.</li>
          <li>Always thoroughly rinse the denture before placing it in your mouth.</li>
        </ul>
        <h3>Adjustments</h3>
        <p>Over time, adjusting the denture may be necessary. As you age, your mouth naturally changes, which can affect the fit of the denture. Your bone and gum ridges can recede or shrink, resulting in a poorly fitting denture.</p>
        <p>Dentures that do not fit properly should be adjusted by your dentist. Poorly fitting dentures can cause various problems, including sores or infections. See your dentist promptly if your denture becomes loose, and maintain your regular visits, too.</p>
        <p> <strong>Remember:</strong> You can do serious harm to your denture and to your health by trying to adjust or repair your denture. Using a do-it-yourself kit can damage the appliance beyond repair. Glues sold over-the-counter often contain harmful chemicals and should not be used on a denture. If your denture breaks, cracks or chips, or if one of the teeth becomes loose, call your dentist immediately. In many cases, dentists can make necessary adjustments or repairs, often on the same day. Complicated repairs may require that the denture be sent to a special dental laboratory.</p>

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
