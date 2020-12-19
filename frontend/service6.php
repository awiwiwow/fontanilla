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
<!--       <div class="modal-content">

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
          <h3><a href="#" id="loc-link-active">Tooth Whitening /Bleaching</a></h3>
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
        <h2>Overview of Tooth Whitening /Bleaching</h2>
        <p>Want a brighter smile? When it comes to tooth-whitening, you've got two options: in-office-based teeth bleaching, or at-home care.</p>
        <p>Both tooth-whitening options use peroxide-based bleaching agents. At-home systems contain from 3% to 20% peroxide (carbamide or hydrogen peroxides). In-office systems contain from 15% to 43% peroxide.</p>
        <p>Generally, the longer you keep a stronger solution on your teeth, the whiter your teeth become. However, the higher the percentage of peroxide in the whitening solution, the shorter it should be applied to the teeth. Keeping the gel on longer will dehydrate the tooth and increase tooth sensitivity.</p>
        <p>There are pros and cons to each option, but before you try at-home tooth-bleaching kits, be sure to talk to your dentist. Not everyone will see good results. Bleaching will not whiten porcelain crowns or composite tooth-colored bondings.</p>
        <h3>In - Office Tooth Whitening</h3>
        <p>Teeth whitening done by your dentist can get teeth brighter faster. The bleaching solution is usually much stronger than at-home kits. Also, heat, light, or a combination of the two may be used to speed and intensify the whitening process.</p>
        <p>The most dramatic results -- teeth generally get three to eight shades brighter -- usually take several 30- to 60-minute in-office visits. Some dentists use techniques that can be done in a single 2-hour appointment (e.g. the Zoom system). The cost of in-office tooth whitening varies, but can range from $500 to $1,000</p>
        <h3>At - Home Teeth Bleaching Options</h3>
        <p>There are many choices for bleaching teeth at home, the most common include:</p>
          <ul>
          <li>Tooth whitening strips and gels. Applied directly to the teeth with a brush or a thin strip, these peroxide-based tooth bleaching products usually need to be applied once or twice a day for 10 to 14 days. Results last four or more months and may cost from $10 to $55.</li>
          <li>ray-based tooth bleaching systems. With this teeth whitening option, a mouth guard-like tray is filled with a peroxide-based bleaching gel or paste and placed over the teeth for one to several hours a day for up to four weeks. You can buy tray-based tooth whitening systems over-the-counter or have one custom-fitted by your dentist. The cost can range from $150 to $600.</li>
          <li>Tooth whitening toothpastes. Because they're mildly abrasive, every toothpaste helps remove stains from teeth. Whitening toothpastes, however, also contain chemicals or polishing agents that help scrub stains from teeth without the aid of a bleaching agent. Tooth-whitening toothpastes are relatively inexpensive and brighten teeth by about one shade. Some whitening toothpastes contain peroxides, but they aren't left on the teeth long enough to have a whitening benefit.</li>
        </ul>
        <h3>Tooth Bleaching: Keeping Teeth White</h3>
        <p>Whether you use an at-home tooth-whitening system, or have your teeth bleached by a dentist, you can help maintain the results by brushing, flossing, and rinsing daily. Also, avoid acidic and tannin-rich foods and beverages such as:</p>
        <ul>
          <li>Black teas and coffee</li>
          <li>White and red wine</li>
          <li>Sports drinks</li>
          <li>Carbonated beverages (dark and light-colored sodas)</li>
          <li>Berries and other strongly-colored foods</li>
          <li>Sauces (soy, tomato, curries)</li>
        </ul>
        <h3>Teeth Whitening: Why You Should Talk to Your Dentist</h3>
        <p>Tooth bleaching can make teeth temporarily sensitive -- or be uncomfortable for people who already have sensitive teeth. When used incorrectly, home kits can also lead to burned -- even temporarily bleached -- gums.</p>
        <p>Tooth-whitening works best for people with yellow teeth and is less effective for people with brown teeth. If your teeth are gray or purple, tooth bleaching probably won't work at all.</p>
        <p>To be sure tooth-whitening is worth your time and money, talk to your dentist before you use an over-the-counter tooth whitening kit.</p>
        
        
       
        <div class="first">
        <div class="white1">
            <div class="color">
                <img src="image/Gallery/beforenafter/whitening1_after.jpg" width="300" height="200" alt="" />
                <div class="bottomright">After</div>
            </div>
            <div class="black_white1">
                <img src="image/Gallery/beforenafter/whitening1_before.jpg" width="300" height="200" />
                <div class="bottomleft">Before</div>
            </div>
        </div>

      </div>

      <div class="second">


        <div class="white2">
            <div class="color">
                <img src="image/Gallery/beforenafter/whitening2_after.jpg" width="300" height="200" alt="" />
                <div class="bottomright">After</div>
            </div>
            <div class="black_white2">
                <img src="image/Gallery/beforenafter/whitening2_before.jpg" width="300" height="200" />
                <div class="bottomleft">Before</div>
            </div>
        </div>

        </div>

        <div class="third">


          <div class="white3">
              <div class="color">
                  <img src="image/Gallery/beforenafter/whitening3_after.jpg" width="300" height="200" alt="" />
                  <div class="bottomright">After</div>
              </div>
              <div class="black_white3">
                  <img src="image/Gallery/beforenafter/whitening3_before.jpg" width="300" height="200" />
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
