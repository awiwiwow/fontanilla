<?php
require_once("dbconfig.php");
require('class/userClass.php');
include"cdb.php";
$userClass = new userClass();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>


    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/icon.css">
    <meta charset="utf-8">
    <title>Fontanilla-Halili Dental Clinic</title>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    </script>
  </head>
  <body>

<div class="grid-container">

    <div class="Header-title">

      <div class="nav-second">

        <div class="nav-second-left">
          <h3>Call Us
          (<?php
            $una = "SELECT cont_num from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["cont_num"];}}?>)

          </h3>
        </div>

        <div class="nav-second-right">
        <h3>
        <?php
            $una = "SELECT header from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["header"];}}?></h3>
        <a href="register-login.php"><button>Register/Login</button></a>
        </div>

      </div>


      <h1><a href="index.php">
        <span style="padding-right:10px; padding-top: 3px; display:inline-block;">
      <img style="width:30px;height:30px;" src="image/FontanillaIcon.png"></img></span>Fontanilla Halili Dental</a></h1>
      <img src="image/FontanillaIcon2.png" alt="" class="header-logo">

      <ul>
        <li><a href="index.php" id="activetitle">Home</a></l>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="location.php">Branches</a></li>
        <li><a href="contactus.php">Contact Us</a></l>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>


    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

    <div class="Sidebar">

      <div class="slide-1 mySlides">

       <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 8");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>

            <div id="slidingintro1">
            <h1>
            <?php
            $una = "SELECT slider_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_title"];}}?>
            </h1>
            <p>
            <?php
            $una = "SELECT slider_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_firstcont"];}}?>
            </p>
            <p>
            <?php
            $una = "SELECT slider_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_secondcont"];}}?>
            </p>
            <a href="register-login.php"><button class="button1">Sign Up</button></a>
            </div>
      </div>

      <div class="slide-1 mySlides">

        <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 9");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
        <div id="slidingintro2">
          <h1>
          <?php
            $una = "SELECT slider2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_title"];}}?>
            </h1>
          <p>
          <?php
            $una = "SELECT slider2_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_firstcont"];}}?>
            </p>
          <p>
          <?php
            $una = "SELECT slider2_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_secondcont"];}}?>
            </p>
          <a href="services.php" class="button1">View More</a>
        </div>
      </div>

      <div class="slide-1 mySlides">
       <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 10");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
        <div id="slidingintro3">
          <h1>
          <?php
            $una = "SELECT slider3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_title"];}}?>
            </h1>
          <p>
          <?php
            $una = "SELECT slider3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_cont"];}}?>
            </p>
        <a href="smilegallery.php" class="button1">View More</a>
        </div>
      </div>

      <button class="slide-button-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="slide-button-right" onclick="plusDivs(1)">&#10095;</button>

    </div>

    <div class="ws1">

      <div class="left-content-box hideme">
        <img src="image/icons/question.svg" alt="question">
        <h3>
        <?php
            $una = "SELECT infobox from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox"];}}?>
            </h3>
        <p>
        <?php
            $una = "SELECT infobox_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox_cont"];}}?>
            </p>
      </div>
      <div class="middle-content-box hideme">
        <img src="image/icons/meeting.svg" alt="meeting">
        <h3>
        <?php
            $una = "SELECT infobox2 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2"];}}?>
            </h3>
        <p>
        <?php
            $una = "SELECT infobox2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2_cont"];}}?>
            </p>
      </div>
      <div class="right-content-box hideme">
        <img src="image/icons/handshake.svg" alt="handshake">
        <h3>
        <?php
            $una = "SELECT infobox3 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3"];}}?>
            </h3>
        <p>
        <?php
            $una = "SELECT infobox3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3_cont"];}}?>
            </p>
      </div>
    </div>


    <div class="Content-a">

      <div class="left-content-a">
        <div class="left-content-head">
        <h2>Services</h2>
        <a href="services.html"><button>Read more ...</button></a>
              </div>

        <div class="services-a hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p1.png" alt="">
          </div>
          <h3 class="services-a-1">
          <?php
            $una = "SELECT serve_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_title"];}}?>
            </h3>
          <p>
              <?php
            $una = "SELECT serve_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_cont"];}}?>
          </p>
        </div>

        <div class="services-a hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p5.png" alt="">
          </div>
          <h3 class="services-a-2">
          <?php
            $una = "SELECT serve2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_title"];}}?>
            </h3>
          <p>
          <?php
            $una = "SELECT serve2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_cont"];}}?>
            </p>
        </div>

        <div class="services-a hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p4.png" alt="">
          </div>
          <h3 class="services-a-3">
          <?php
            $una = "SELECT serve3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_title"];}}?>
            </h3>
          <p>
          <?php
            $una = "SELECT serve3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_cont"];}}?>
            </p>
        </div>

        <div class="services-b hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p3.png" alt="">
          </div>
          <h3 class="services-b-1">
          <?php
            $una = "SELECT serve4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_title"];}}?>
            </h3>
          <p>
          <?php
            $una = "SELECT serve4_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_cont"];}}?>
            </p>
        </div>

        <div class="services-b hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p2.png" alt="">
          </div>
          <h3 class="services-b-2">
          <?php
            $una = "SELECT serve5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_title"];}}?>
            </h3>
          <p>
          <?php
            $una = "SELECT serve5_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_cont"];}}?>
            </p>
        </div>

        <div class="services-b hidemesec">
          <div class="services-a-a">
            <img src="image/icons/p6.png" alt="">
          </div>
          <h3 class="services-b-3">
          <?php
            $una = "SELECT serve6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_title"];}}?>
            </h3>
          <p><?php
            $una = "SELECT serve6_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_cont"];}}?></p>
        </div>


      </div>

      <div class="right-content-a">


    </div>

    </div>

    <div class="ws">

    </div>

    <div class="Content-b">
      <div class="Content-b-ads">
       <h2>Dentists</h2>
       <div class="card hidemethir">
  <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 1");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
        <div class="middle">
            <div class="text"> <a href="about.php">More</a></div>
        </div>
        <div class="dent-name">

           <h4>
            <?php
            $una = "SELECT doc_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_name"];}}?>
            </h4>
          <p>
            <?php
            $una = "SELECT doc_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_title"];}}?>
            </p>
        </div>
        </div>

        <div class="card hidemethir">
           <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 3");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
         <div class="middle">
             <div class="text"><a href="about.php">More</a></div>
         </div>
         <div class="dent-name">
           <h4>
            <?php
            $una = "SELECT doc2_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_name"];}}?>
            </h4>
           <p>
            <?php
            $una = "SELECT doc2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_title"];}}?>
            </p>
         </div>
         </div>
         <div class="card hidemethir">
           <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 4");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
          <div class="middle">
              <div class="text"><a href="about.php">More</a></div>
          </div>
          <div class="dent-name">
            <h4>
              <?php
            $una = "SELECT doc3_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_name"];}}?>
            </h4>
            <p>
              <?php
            $una = "SELECT doc3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_title"];}}?>
            </p>
          </div>
          </div>
          <div class="card hidemethir">
       <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 5");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
           <div class="middle">
               <div class="text"><a href="about.php">More</a></div>
           </div>
           <div class="dent-name">
             <h4>
              <?php
            $una = "SELECT doc4_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_name"];}}?></h4>
             <p>
              <?php
            $una = "SELECT doc4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_title"];}}?>
            </p>
           </div>
           </div>
           <div class="card hidemethir">
         <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 6");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
            <div class="middle">
                <div class="text"><a href="about.php">More</a></div>
            </div>
            <div class="dent-name">
               <h4><?php
            $una = "SELECT doc5_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_name"];}}?></h4>
              <p>
                <?php
            $una = "SELECT doc5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_title"];}}?>
            </p>
            </div>
            </div>
            <div class="card hidemethir">
              <?php
$result = mysqli_query($conn, "SELECT * FROM img_home
WHERE id = 7");


    while ($row = mysqli_fetch_array($result))
    {

      	echo "<img src='home/".$row['image']."' >";


    }?>
             <div class="middle">
                 <div class="text"><a href="about.php">More</a></div>
             </div>
             <div class="dent-name">
               <h4>
                <?php
            $una = "SELECT doc6_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_name"];}}?>
            </h4>
               <p>
                <?php
            $una = "SELECT doc6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_title"];}}?>
            </p>
             </div>
             </div>


     </div>

    </div>

    <div class="ws2">

    </div>


    <div class="Content-c">
      <div class="Content-c-top">
        <h2>Branches</h2>
      </div>

      <div class="Loc-1">
        <h3>Location 1</h3>
        <div class="Loc-1-left">
          <p>Our main branch is located in 45 Governors Drive Langkaan,Dasmarinas Cavite(2nd Floor of Sustamina Meatshop)  </p>
        <a href="https://www.google.com/maps/dir//Fontanilla+-+Halili,+Gov.+Drive,+Langkaan+1,+Dasmari%C3%B1as,+4114+Cavite/@14.2940578,120.936066,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d579a979f277:0x11d15c88f9f91169!2m2!1d120.938469!2d14.293872"><button>Get Directions</button></a>
          <img src="image/location11.jpg" alt="">
        </div>
        <div class="Loc-1-right">
          <img src="image/location1.jpg" alt="">
        </div>
      </div>

      <div class="Loc-2">
        <h3>Location 2</h3>
        <div class="Loc-2-left">
          <p>Our second branch is located in Tirona Road Binakayan Kawit (Infront of Alfamart)Near RCBC </p>
        <a href="https://www.google.com/maps/dir//Fontanilla-Halili+Dental+Clinic,+655+Congbalay+Road,+Kawit,+Cavite/@14.4490886,120.9209076,19.58z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d29f2f729487:0x6bf5f4651902ae70!2m2!1d120.921154!2d14.4492216"><button>Get Directions</button></a>
          <img src="image/location22.jpg" alt="">

        </div>
        <div class="Loc-2-right">
          <img src="image/location2.jpg" alt="">
        </div>
      </div>

      <div class="Loc-3">
        <h3>Location 3</h3>
        <div class="Loc-3-left">
          <p>Our third branch is located in 2nd Floor of CM Plaza Building.Don Placido Campus Avenue,Dasmarinas Bayan </p>
        <a href="https://www.google.com/maps/dir//Fontanilla-Halili+Dental+Clinic,+Dasmari%C3%B1as,+Cavite/@14.3259859,120.935851,19z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d502202ba261:0xd5ed985939dded99!2m2!1d120.9358326!2d14.3263397"><button>Get Directions</button></a>
          <img src="image/location33.jpg" alt="">

        </div>
        <div class="Loc-3-right">
          <img src="image/location3.jpg" alt="">
        </div>
      </div>


      <!--div class="Content-c-left">
        <p>phone:(111) 222 333</p>
        <br>
        <p>email:Dhemie.Seguerra@gmail.com</p>
        <br>
        <p>address:Dasmarinas, Cavite</p>
        <br>
        <p>HOURS: MONDAY-THURSDAY 9AM-6PM, FRIDAY 8AM-5PM</p>
      </div>
      <div class="Content-c-right">

      <div id="map"></div-->
      <script>
          // Initialize and add the map
          function initMap() {
            // The location of Uluru
            var uluru = {lat: 14.2938631, lng: 120.9383363};
            // The map, centered at Uluru
            var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 19, center: uluru});
              // The marker, positioned at Uluru
              var marker = new google.maps.Marker({position: uluru, map: map});
            }
      </script>

          </div>


    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALxQM48TTVVN6qnqC-0ktt7g2lnmSoUSA&callback=initMap">
      </script>


      <div class="ws3">
      </div>

    <div class="Footer">
      <div class="upper-footer">
        <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" alt="" class="iconic"> </a>
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
          <p>Monday</p><p>9:00 AM -5:00 PM</p>
          <p>Tuesday</p><p>9:00 AM -5:00 PM</p>
          <p>Wednesday</p><p>9:00 AM -5:00 PM</p>
          <p>Thursday</p><p>9:00 AM -5:00 PM</p>
          <p>Friday</p><p>9:00 AM -5:00 PM</p>
          <p>Saturday</p><p>9:00 AM -5:00 PM</p>
          <p>Sunday</p><p>9:00 AM -5:00 PM</p>
          <p>Note: (Only Dasma-Bayan branch is open until Sunday)</p>
        </div>
        <div class="right-footer">

        </div>
      </div>
        <div class="footer-2">
      <h3>© Fontanilla Halili Dental Clinic</h3>
    </div>
    </div>

    </div>

  <script src="js/myjavascript.js">
  </script>
  </body>
</html>
