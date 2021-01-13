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

    <link rel="shortcut icon" href="image/icon/FontanillaIcon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="css/icon.css">
    <link href="css/main.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALxQM48TTVVN6qnqC-0ktt7g2lnmSoUSA&callback=initMap">
    </script>

  </head>
  <body>

<!-- <nav class="navbar notif-nav">
  <p class="ml-auto"><i class="fas fa-phone-alt mr-2"></i>
    <?php
      $una = "SELECT cont_num from update_char";
      $result = mysqli_query($conn, $una);
      if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
      echo  $row["cont_num"];}}
    ?>
  </p>
</nav> -->
<div class="container-fluid main-section">
  <div class="row">
    <div class="left-nav shadow col-2 px-1 position-fixed" id="sticky-sidebar">
      <div id="banner">
        <a href="">
          <img class="img-fluid" src="image/icon/FontanillaLogo.png" alt="">
        </a>
      </div>
      <ul>
        <li>
          <a href="">Home</a>
        </li>
        <li>
          <a href="">Services</a>
        </li>
        <li>
          <a href="">Locations</a>
        </li>
        <li>
          <a href="">About Us</a>
        </li>
      </ul>
    </div>
    <div class="col offset-2 p-0" id="main">
            <div class="moving-mouse-holder">
          <div class="mouse">
            <div class="mouse-button">&nbsp;</div>
          </div>
        </div>
          <div class="vNav">
            <ul class="vNav">
                  <li>
                      <a href="#section01">
                          <div class="label">Section01</div>
                      </a>
                  </li>
                  <li>
                      <a href="#section02">
                          <div class="label">Section02</div>
                      </a>
                  </li>
                  <li>
                      <a href="#section03">
                          <div class="label">Section03</div>
                      </a>
                  </li>
                  <li>
                      <a href="#section04">
                          <div class="label">Section04</div>
                      </a>
                  </li>
            </ul>
          </div>
          <section id="section01" class="section sidebar d-flex flex-column par">
            <div class="container-fluid sidebar-con d-flex">
              <div class="left-sidebar d-flex">
                <div>
                  <h1>Look forward to the dentist</h1>
                  <h2>Dental done differently.</h2>
                </div>
              </div>
              <div id="carouselExampleIndicators" class="carousel slide right-sidebar" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 8");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img class='d-block w-100' src='home/".$row['image']."' >";
                      }
                    ?>
                  </div>
                  <div class="carousel-item">
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 9");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img class='d-block w-100'src='home/".$row['image']."' >";
                      }
                    ?>
                  </div>
                  <div class="carousel-item">
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 10");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img class='d-block w-100' src='home/".$row['image']."' >";
                      }
                    ?>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>             
          </section>
          <div>
          <!-- <section class="section first-content d-flex flex-column">
            <div class="container">
              <ul class="grid d-flex justify-content-center appearOnScroll">
                  <li class="content-box">
                  <img src="image/icon/question.svg" alt="question">
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
                  <img src="image/icon/meeting.svg" alt="meeting">
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
                  <img src="image/icon/handshake.svg" alt="handshake">
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
          </section> -->
          
          <section id="section02" class="section services d-flex flex-column par">
            <div class="container">
              <div class="service-con">
                <div class="service-con-title">
                  <h2>Services</h2>
                  <h3>Everything You Need for Happy, Healthy Teeth</h3>
                </div>
                <ul>
                  <li class="service-container row">
                    <div class="left-services-cont col-4">
                      <h1  class="parallaxScroll">Health</h1>
                      <button>Learn More</button>
                    </div>
                    <div class="right-services-cont col-8">
                       <div id="first-service">
                          <h1>General Dentistry</h1>
                          <ul>
                            <li>Routine Cleanings</li>
                            <li>Cavity Fillings</li>
                            <li>Root Canals for Severe Decay</li>
                          </ul>
                       </div>
                    </div>
                  </li>
                  <li class="service-container row">
                    <div class="right-services-cont col-8">
                       <div id="first-service">
                          <h1>Cosmetic Dentistry</h1>
                          <ul>
                            <li>Cosmetic Veneers</li>
                            <li>Professional Teeth Whitening</li>
                            <li>Invasalign for Adult and Teens</li>
                          </ul>
                       </div>
                    </div>
                    <div class="left-services-cont col-4">
                      <h1  class="parallaxScroll">Beauty</h1>
                      <button>Learn More</button>
                    </div>
                  </li>
                  <li class="service-container row">
                    <div class="left-services-cont col-4">
                      <h1  class="parallaxScroll">Restoration</h1>
                      <button>Learn More</button>
                    </div>
                    <div class="right-services-cont col-8">
                       <div id="first-service">
                          <h1>Restorative Dentistry</h1>
                          <ul>
                            <li>Crowns to Protect Weak Teeth</li>
                            <li>Dental Implants for Missing Teeth</li>
                            <li>Modern Dental Bridges</li>
                          </ul>
                       </div>
                    </div>
                  </li>
                </ul>
                <!-- <ul class="grid d-flex justify-content-between">
                  <li class="content appearOnScroll">
                    <img src="image/icon/p1.png" alt="">
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
                  <li class="content appearOnScroll">
                    <img src="image/icon/p5.png" alt="">
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
                  <li class="content appearOnScroll">
                    <img src="image/icon/p4.png" alt="">
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
                  <li class="content appearOnScroll">
                    <img src="image/icon/p3.png" alt="">
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
                  <li class="content appearOnScroll">
                    <img src="image/icon/p2.png" alt="">
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
                  <li class="content appearOnScroll">
                    <img src="image/icon/p6.png" alt="">
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
                </ul> -->
            </div>
          </section>
          
          <section id="section03" class="section dentist d-flex flex-column par">
            <div class="container-fluid">
              <h2>Dentists</h2>
              <!-- <div class="grid-container">
                <div class="grid-content">
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer centerPiece">
                    <div class="gridBlock centerBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"><a href="https://greensock.com" target="_blank"></a></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                  <div class="gridLayer">
                    <div class="gridBlock"></div>
                  </div>
                </div>
              </div> -->
                <div class="d-flex img-grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
                  <div class="col-lg-4 col-md-12 img-cont">
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 3");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img id='second-img' class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 4");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img id='second-img' class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 1");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img id='first-img' class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>
                    
                  </div>
                  <div class="col-lg-4 col-md-6 img-cont">
                  <img id="fifth-img" class='img-fluid grid-item' src="image/img-con-1.JPG" alt="">
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 5");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img id='third-img' class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 6");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img id='fourth-img' class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>
                  </div>
                  <div class="col-lg-4 col-md-6 img-cont">
                  
                    <?php
                      $result = mysqli_query($conn, "SELECT * FROM img_home
                      WHERE id = 7");
                      while ($row = mysqli_fetch_array($result))
                      {
                        echo "<img class='img-fluid grid-item' src='home/".$row['image']."' >";
                      }
                    ?>

                    
                  </div>
                </div>
            </div>
          </section>
          
          <section id="section04" class="section location d-flex flex-column par">
            <div class="container-fluid">
              <ul class="grid d-flex">
                <li id="map" class="map">
                </li>
                    <script type="text/javascript">
                        var locations = [
                          ['Dasmarinas Branch', 14.3259859, 120.935851],
                          ['Binakayan Branch', 14.4490886, 120.9209076],
                          ['Langkaan Branch', 14.2938631, 120.9383363]
                        ];

                        var map = new google.maps.Map(document.getElementById('map'), {
                          zoom: 12,
                          center: new google.maps.LatLng(14.375699,120.935791,12),
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                        });

                        var infowindow = new google.maps.InfoWindow();

                        var marker, i;

                        for (i = 0; i < locations.length; i++) {  
                          marker = new google.maps.Marker({
                            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                            map: map
                          });

                          google.maps.event.addListener(marker, 'click', (function(marker, i) {
                            return function() {
                              infowindow.setContent(locations[i][0]);
                              infowindow.open(map, marker);
                            }
                          })(marker, i));
                        }
                  </script>

                <li class="city">
                      <ul class="p-5">
                      <h2>Branches</h2>
                        <li class="appearOnScroll">
                          <a href="">
                            <div>
                              <h3>Dasmarinas</h3>
                              <p>2nd floor cm plaza building</p>
                            </div>
                          </a>
                        </li>
                        <li class="appearOnScroll">
                          <a href="">
                            <div>
                              <h3>Langkaan</h3>
                              <p>#45 governor's drive</p>
                            </div>
                          </a>
                        </li>
                        <li class="appearOnScroll">
                          <a href="">
                            <div>
                              <h3>Binakayan</h3>
                              <p>tirona road, binakayan</p>
                            </div>
                          </a>
                        </li>
                      </ul>
                </li>
              </ul>
            </div>
          </section>
    </div>
  </div>
</div>

<!-- 
<a href="#" id="back-to-top" title="Back to top">&uarr;</a> -->



<!-- <footer class="d-flex flex-column">
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
</footer> -->

<script src="js/gsap.min.js"></script>
<script src="js/myjavascript.js"></script>
<!-- <script src="js/img-grid.js"></script> -->
<script src="js/scrolled.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f5b85ab0cc.js" crossorigin="anonymous"></script>
  </body>
</html>
