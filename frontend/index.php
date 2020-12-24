<?php
require_once("dbconfig.php");
require('class/userClass.php');
include"cdb.php";
$userClass = new userClass();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fontanilla-Halili Dental Clinic</title>

    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/icon.css">
    <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

  </head>
  <body>

<nav class="container-fluid">
  <div class="Header-title">
    <div class="nav-second">
      <div class="nav-second-left">
        <h3>Call Us
         (<?php
            $una = "SELECT cont_num from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["cont_num"];}}
          ?>)
        </h3>
      </div>
      <div class="nav-second-right">
        <h3>
          <?php
            $una = "SELECT header from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["header"];}}
          ?>
        </h3>
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
</nav>
    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
<div class="Sidebar">
  <div class="slide-1 mySlides">
    <?php
      $result = mysqli_query($conn, "SELECT * FROM img_home
      WHERE id = 8");
      while ($row = mysqli_fetch_array($result))
      {
        echo "<img src='home/".$row['image']."' >";
      }
    ?>
    <div id="slidingintro1">
      <h1>
        <?php
          $una = "SELECT slider_title from update_char";
          $result = mysqli_query($conn, $una);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          echo  $row["slider_title"];}}
        ?>
      </h1>
      <p>
        <?php
          $una = "SELECT slider_firstcont from update_char";
          $result = mysqli_query($conn, $una);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          echo  $row["slider_firstcont"];}}
        ?>
      </p>
      <p>
        <?php
          $una = "SELECT slider_secondcont from update_char";
          $result = mysqli_query($conn, $una);
          if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
          echo  $row["slider_secondcont"];}}
        ?>
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

<section class="first-content d-flex flex-column">
  <div class="container">
    <ul class="grid d-flex justify-content-center">
        <li class="content-box">
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
        </li>
        <li class="content-box">
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
        </li>
        <li class="content-box">
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
        </li>
    </ul>
  </div>
</section>

<section class="services d-flex flex-column">
 <div class="container">
    <div class="service-con">
      <div class="service-con-title">
        <h2>Services</h2>
        <a href="services.html"><button>Read more ...</button></a>
      </div>

      <ul class="grid d-flex justify-content-between">
        <li class="content">
          <img src="image/icons/p1.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve_title"];}}
              ?>
          </h3>
          <p>
              <?php
                $una = "SELECT serve_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve_cont"];}}
              ?>
          </p>
        </li>
        <li class="content">
          <img src="image/icons/p5.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve2_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve2_title"];}}
              ?>
          </h3>
          <p>
            <?php
                $una = "SELECT serve2_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve2_cont"];}}
            ?>
          </p>
        </li>
        <li class="content">
          <img src="image/icons/p4.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve3_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve3_title"];}}
              ?>
          </h3>
          <p>
              <?php
                $una = "SELECT serve3_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve3_cont"];}}
              ?>
          </p>
        </li>
        <li class="content">
          <img src="image/icons/p3.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve4_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve4_title"];}}
              ?>
          </h3>
          <p>
              <?php
                $una = "SELECT serve4_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve4_cont"];}}
              ?>
          </p>
        </li>
        <li class="content">
          <img src="image/icons/p2.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve5_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve5_title"];}}
              ?>
          </h3>
          <p>
              <?php
                $una = "SELECT serve5_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve5_cont"];}}
              ?>
          </p>
        </li>
        <li class="content">
          <img src="image/icons/p6.png" alt="">
          <h3>
              <?php
                $una = "SELECT serve6_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve6_title"];}}
              ?>
          </h3>
          <p>
              <?php
                $una = "SELECT serve6_cont from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["serve6_cont"];}}
              ?>
          </p>
        </li>
      </ul>
  </div>
</section>

<section class="dentist d-flex flex-column">
  <div class="container">
      <h2>Dentists</h2>
      <div class="grid d-flex justify-content-between">
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 1");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc_title"];}}
              ?>
            </p>
          </div>
        </div>
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 3");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc2_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc2_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc2_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc2_title"];}}
              ?>
            </p>
          </div>
        </div>
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 4");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc3_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc3_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc3_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc3_title"];}}
              ?>
            </p>
          </div>
        </div>
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 5");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc4_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc4_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc4_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc4_title"];}}
              ?>
            </p>
          </div>
        </div>
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 6");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc5_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc5_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc5_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc5_title"];}}
              ?>
            </p>
          </div>
        </div>
        <div class="card">
          <?php
            $result = mysqli_query($conn, "SELECT * FROM img_home
            WHERE id = 7");
            while ($row = mysqli_fetch_array($result))
            {
              echo "<img class='card-img-top' src='home/".$row['image']."' >";
            }
          ?>
          <div class="card-body">
            <h4>
              <?php
                $una = "SELECT doc6_name from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc6_name"];}}
              ?>
            </h4>
            <p>
              <?php
                $una = "SELECT doc6_title from update_char";
                $result = mysqli_query($conn, $una);
                if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                echo  $row["doc6_title"];}}
              ?>
            </p>
          </div>
        </div>
      </div>
  </div>
</section>

<section class="location d-flex flex-column">
  <div class="container">
    <h2>Branches</h2>
    <ul class="grid d-flex justify-content-between">
      <li class="row row-cols-2 mt-5">
          <div class="col">
            <h3>Location 1</h3>
            <p>Our main branch is located in 45 Governors Drive Langkaan,Dasmarinas Cavite(2nd Floor of Sustamina Meatshop)  </p>
              <!-- <a href="https://www.google.com/maps/dir//Fontanilla+-+Halili,+Gov.+Drive,+Langkaan+1,+Dasmari%C3%B1as,+4114+Cavite/@14.2940578,120.936066,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d579a979f277:0x11d15c88f9f91169!2m2!1d120.938469!2d14.293872"><button>Get Directions</button></a> -->
            <img src="image/location11.jpg" alt="">
          </div>
          <div class="col">
            <img src="image/location1.jpg" alt="">
          </div>
      </li>
      <li class="row row-cols-2 mt-5">
        <div class="col">
          <h3>Location 2</h3>
            <p>Our main branch is located in 45 Governors Drive Langkaan,Dasmarinas Cavite(2nd Floor of Sustamina Meatshop)  </p>
              <!-- <a href="https://www.google.com/maps/dir//Fontanilla+-+Halili,+Gov.+Drive,+Langkaan+1,+Dasmari%C3%B1as,+4114+Cavite/@14.2940578,120.936066,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d579a979f277:0x11d15c88f9f91169!2m2!1d120.938469!2d14.293872"><button>Get Directions</button></a> -->
            <img src="image/location11.jpg" alt="">
          </div>
          <div class="col">
            <img src="image/location1.jpg" alt="">
          </div>
      </li>
      <li class="row row-cols-2 mt-5">
        <div class="col">
            <h3>Location 3</h3>
            <p>Our main branch is located in 45 Governors Drive Langkaan,Dasmarinas Cavite(2nd Floor of Sustamina Meatshop)  </p>
              <!-- <a href="https://www.google.com/maps/dir//Fontanilla+-+Halili,+Gov.+Drive,+Langkaan+1,+Dasmari%C3%B1as,+4114+Cavite/@14.2940578,120.936066,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3397d579a979f277:0x11d15c88f9f91169!2m2!1d120.938469!2d14.293872"><button>Get Directions</button></a> -->
            <img src="image/location11.jpg" alt="">
        </div>
        <div class="col">
            <img src="image/location1.jpg" alt="">
        </div>
      </li>
    </ul>
  </div>
</section>

<footer class="d-flex flex-column">
  <div class="container-fluid">
    <ul class="grid">
      <li class="footer-top d-flex flex-row">
        <div class="footer-left">
          <h2>Visit Our Location</h2>
          <ul>
            <li><a href="location.php">Binakayan Branch: TIRONA ROAD, BINAKAYAN</a></li>
            <li><a href="location2.php">Langkaan Branch: #45 GOVERNOR'S DRIVE</a></li>
            <li><a href="location3.php">Dasma-Bayan Branch: 2ND FLOOR CM PLAZA BUILDING</a></li>
          </ul>
          <ul>
            <li id="footer-caps"><p>We’re open Monday to Saturday, come rain or shine, from 09:00 to 17:00.</p></li>
            <li id="footer-caps">Drop us an email:</li>
            <li>fontanilla@gmail.com</li>
          </ul>
        </div>
        <div class="footer-right">
          <ul>
            <li><a href="">about us</a></li>
            <li><a href="">our services</a></li>
            <li> <a href="">contact us</a></li>
          </ul>  
        </div>
      </li>
    </ul>
  </div>
</footer>
<script src="js/myjavascript.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  </body>
</html>
