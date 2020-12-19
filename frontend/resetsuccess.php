<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/notifications.css">
    <title>Success</title>
  </head>
  <body>

    <div class="header">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental</h1>
    </div>
    <div class="container">
      <div class="form">
    <h2><?= 'Success'; ?></h12>
    <p>
    <?php
    if( isset($_SESSION['resetmessage']) AND !empty($_SESSION['resetmessage']) ):
        echo $_SESSION['resetmessage'] .'You may now <a href="reglogin.php">Log in</a>';


    else:
        // header( "location: reglog.php" );
    endif;
    ?>
    </p>
    <a href="register-login.php"><button style="width:300px;height:30px;color:white;font-size:20px;background:#147bd6;margin:0px 0 0 30px;cursor:pointer;" class="button button-block"/>Log-in</button></a>
</div>
    </div>
    <div class="footer">
      <div class="left">
        <p>© Fontanilla Halili Dental Clinic</p>
      </div>
      <div class="right">
        <ul>
          <li> <a href="index.php">Home</a> </li>
          <li> <a href="about.php">About Us</a> </li>
          <li> <a href="services.php">Services</a> </li>
          <li> <a href="location.php">Branches</a</li>
          <li> <a href="smilegallery.php">Smile Gallery</a> </li>
          <li> <a href="contactus.php">Contact Us</a> </li>
        </ul>
      </div>
    </div>
  </body>
</html>

