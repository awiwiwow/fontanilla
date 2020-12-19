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
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="#" id="loc-link-active">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Orthodontic Treatment /Braces</h2>
        <p>Orthodontic treatment is a way of straightening or moving teeth, to improve the appearance of the teeth and how they work. It can also help to look after the long-term health of your teeth, gums and jaw joints, by spreading the biting pressure over all your teeth.</p>
        <h3>Why should I have orthodontic treatment?</h3>
        <p>Many people have crowded or crooked teeth. Orthodontic treatment will straighten the teeth or move them into a better position. This can improve their appearance and the way the teeth bite together, while also making them easier to clean.</p>
        <p>Some people have upper front teeth that stick out and look unsightly. These 'prominent' teeth are more likely to be damaged, but orthodontic treatment can move them back into line. Or the way the upper and lower jaws meet can cause teeth to look unsightly and lead to an incorrect bite. Orthodontic treatment may be able to correct both of these problems.</p>
        <p>When the teeth don't meet correctly, this can put strain on the muscles of the jaw, causing jaw and joint problems and sometimes headaches. Orthodontic treatment can help you to bite more evenly and reduce the strain.</p>
        <h3>At what age should I have orthodontic treatment?</h3>
        <p>The best time is generally during childhood, but adults can have orthodontic treatment too - and more and more are doing so. Age is less important than having the right number of teeth. In children it may be necessary to wait for enough teeth to come through before starting treatment.</p>
        <h3>Who carries out orthodontics?</h3>
        <p>Your dentist may carry out orthodontic treatment. Or they may send you to a specialist who has extra qualifications. The specialist may be in a practice or in a hospital department, and is called an orthodontist.</p>
        <h3>What does it involve?</h3>
        <p>The most important thing is to have a full examination. This will usually involve looking at your teeth, taking dental x-rays and making plaster models of your teeth.</p>
        <p>Your dental team or orthodontist will then discuss what treatment is possible. Once you are sure you want to go ahead, the treatment can start as soon as you have enough permanent teeth.</p>
        <h3>Will I need to have teeth taken out to make room?</h3>
        <p>You may not have enough room for all your permanent teeth. If so, you may need to have some permanent teeth taken out to make space. Your dental team will tell you whether this is the case. Sometimes space can be made using other forms of treatment.</p>
        <h3>How is treatment carried out?</h3>
        <p>Orthodontic treatment can be done by many sorts of appliances, which most people call a 'brace'.</p>
        <h3>What is a removable brace?</h3>
        <p>Simple treatment may be carried out with a removable brace (a plate that can be taken out to be cleaned). It has delicate wires and springs attached, which move the teeth using gentle pressure</p>
        <h3>What is a fixed brace?</h3>
        <p>Often, teeth need to be guided more accurately than they can be using a removable brace. So a fixed brace is used. This has brackets and bands which are temporarily stuck to the teeth. A flexible wire joins all the brackets and allows the teeth to be moved. You can't take the appliance out yourself, so it is called a fixed appliance.</p>
        <h3>What is a functional brace?</h3>
        <p>It is sometimes possible to change the way the jaws grow, using a functional brace. This works by using the power of your jaw muscles and can help with certain types of problem.</p>
        <h3>How do I care for my brace and teeth?</h3>
        <p>It is important to keep having your teeth checked by your dental team while you are having orthodontic treatment. You also need to take extra care of your teeth and mouth:</p>
        <ul>
          <li>Clean your teeth carefully every day, including between your teeth where you can. Braces are delicate and you need to make sure you clean them carefully so that they do not break. Your dental team will be able to show you the special techniques to use depending on the appliance you are wearing.</li>
          <li>Cut down on how often you have sugary foods and drinks. Avoid snacks and drinks containing sugars, and fizzy drinks. Also, sticky and hard foods may damage your brace.</li>
          <li>Brush your teeth last thing at night and at least one other time during the day. Use a mouthwash if you need to. Your dental team may recommend a stronger fluoride toothpaste, or perhaps a fluoride gel or mouth rinse, for you to use.</li>
        </ul>



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
