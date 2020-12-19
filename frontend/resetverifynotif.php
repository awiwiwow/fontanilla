<?php
/* Displays all successful messages */
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/notifications.css">
    <title>Pending Password Reset</title>
  </head>
  <body>

    <div class="header">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental</h1>
    </div>
    <div class="container">
     <div class="form">
    <h3><?= 'Password Reset Verification Needed!'; ?></h3>
    <p>
    <?php
    if( isset($_SESSION['resetmessage']) AND !empty($_SESSION['resetmessage']) ):
        echo $_SESSION['resetmessage'] ;


    else:
               // $url = BASE_URL . 'index.php"';
               //      header("Location: $url");
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="index.php"><button style="width:300px;height:30px;color:white;font-size:20px;background:#147bd6;margin:30px 0 0 30px;cursor:pointer;" class="button button-block"/>Return to Home</button></a>
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