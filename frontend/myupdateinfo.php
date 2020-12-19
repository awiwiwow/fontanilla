<?php
// ob_start();
include_once('dbconfig.php');
include('session.php');

$session_patient_id=$_SESSION['patient_id'];

$userDetails=$userClass->userDetails($session_patient_id);
// print_r($userDetails);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/subaccountnonotes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Fontanilla-Halili Dental Clinic</title>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
</head>
<body>

  <div class="grid-container">


    <div class="Header-title">

      <img src="image/FontanillaIcon.png">
      <h1>Fontanilla Halili Dental</h1>

      <ul>
        <li><a href="myaccountset.php"><button class="button1 fill">Set Appointment</button></a></li>
        <li><a href="myaccountviewcurrent.php"><button class="button1 fill">Current Appointment</button></a></li>
        <li><a href="myaccountviewhistory.php"><button class="button1 fill">Appointment History</button></a></li>
        <li><a href="#0"><button class="button1 active">Update Info</button></a></li>
        <li><a href="mychangepass.php"><button class="button1 fill">Change Password</button></a></li>
        <li><a href="logout.php"><button class="button1 fill">Logout</button></a></li>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>

      <div class="Content-a">

        <div class="account-carda">

          <h2>Welcome <?php echo $userDetails->firstname .' '. $userDetails->lastname; ?></h2>
          <h3>Email :<br> <?php echo $userDetails->email; ?></h3>
          <h3>Sex:<br> <?php echo $userDetails->gender; ?></h3>
          <h3>Age:<br><?php echo $userDetails->age; ?></h3>
          <h3>Contact:<br><?php echo $userDetails->contact; ?></h3>
        </div>

       

        </div>

      <div class="Content-b">

        <div class="account-card2">

          <div class="container">

            <div id="default" class="tabcontent">
               

<?php require'update_info.php';?>



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
            <a href="#"> <p>Binakayan branch : TIRONA ROAD, BINAKAYAN  </p> </a>
            <a href="#"> <p>Langkaan branch: #45 GOVERNOR'S DRIVE </p> </a>
            <a href="#"> <p>Dasma-Bayan branch: 2ND FLOOR CM PLAZA BUILDING </p> </a>
          </div>
          <div class="middle-footer">
            <h2>Our Hours</h2>
            <p>Monday</p><p>9:00 AM - 5:00 PM</p>
            <p>Tuesday</p><p>9:00 AM - 5:00 PM</p>
            <p>Wednesday</p><p>9:00 AM - 5:00 PM</p>
            <p>Thursday</p><p>9:00 AM - 5:00 PM</p>
            <p>Friday</p><p>9:00 AM - 5:00 PM</p>
            <p>Saturday</p><p>9:00 AM - 5:00 PM</p>
            <p>Sunday</p><p>9:00 AM - 5:00 PM</p>
            <p>Note: (Only Dasma-Bayan branch is Open until Sunday)</p>
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



<script src="js/myaccountscript.js">

</script>

</body>
</html>
