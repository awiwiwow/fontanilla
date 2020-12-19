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
<!--      <div class="modal-content">

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
          <h3><a href="#" id="loc-link-active">Oral Prophylaxis</a></h3>
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
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Oral Prophylaxis</h2>
        <p>Oral Prophylaxis is a procedure done for teeth cleaning. It removes tartar and plaque build-up from the surfaces of the teeth as well as those hidden in between and under the gums. The dentist uses a scaler, a type of hand instrument, to remove the plaque and tartar.</p>
        <h3>Why should you undergo oral prophylaxis?</h3>
        <p>Sometimes, even after brushing our teeth, we can still feel rough areas that cannot be removed even with another rigorous round of brushing or even after fiddling with a toothpick. These rough areas on the tooth surfaces can be plaque or tartar. If plaque or tartar is left on the teeth, it can provide an environment for bacteria to thrive due to its resilient nature. The bacteria in the plaque can cause serious inflammation and irritation to the gums, therefore making the gums more reddish than normal and bleeding can also be observed.  These signs point to the early stage of gum disease called <em>gingivitis</em>. If you notice signs of gingivitis, you should visit your dentist for an oral prophylaxis.</p>
        <h3>What are the benefits of having an Oral Prophylaxis?</h3>
          <ul>
            <li>Prevents Tooth Decay. Plaque is the leading cause of tooth decay. It is an acidic substance that eats away the enamel of the tooth.  If plaque is left to build up on your teeth, it can lead to cavities.</li>
            <li>Prevents Gum Disease. Build up of plaque on your teeth also may lead to gum disease.  Periodontal or Gum Disease is the major cause of tooth loss in adults. As gum disease progresses in your mouth, plaque invades the supporting jaw bone which causes your teeth to loosen and eventually fall out.</li>
            <li>Prevents Bad Breath. Oral prophylaxis and good oral hygiene work hand in hand to prevent persistent bad breath.  An Oral Prophylaxis, in addition to brushing and flossing, keeps your mouth healthy and odor-free.</li>
            <li>Removes Extrinsic Stains. An Oral Prophylaxis also removes stains caused by drinking coffee, tea, wine or smoking tobacco.  This is the reason why your teeth looks whiter after having your dental cleaning with your dentist.</li>
            <li>Lowers Risk for Diseases. Keeping your teeth clean and healthy with good oral hygiene and regular dental cleaning can help lower your risk for some diseases. As established in medical studies, there is a strong link between oral health and the development of systemic diseases which can develop from the accumulation of bacteria in your mouth.</li>
            <li>Early detection of Diseases. It has also been established in studies that your mouth is a window of your overall health.  Hence, your dentist may actually be the first healthcare provider that will be able to detect signs and symptoms of medical conditions that are manifested in your oral cavity during a routine oral exam.</li>
            <li>Financial Savings. Keeping your teeth healthy through good oral hygiene and regular Oral Prophylaxis is, in the long run, cheaper to maintain compared to the cost of treating serious dental problems brought about by poor oral hygiene.</li>
          </ul>
        <h3>How often do I need to have an Oral Prophylaxis?</h3>
        <p>Oral prophylaxis is recommended to be done twice a year as a preventive measure, but should be performed every 3-4 months for patients with more severe periodontal disease. For patients who have braces or other orthodontic appliances, oral prophylaxis is recommended to be done more frequently.  Oral prophylaxis is applicable for all ages to help fight tooth decay and gum disease. It is important to keep the oral cavity healthy thus daily oral hygiene practices, like tooth brushing and flossing, should still be done. Regular visits to your dentist can also help you maintain a good oral health.</p>
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
