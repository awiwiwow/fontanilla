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
  <link rel="stylesheet" href="css/subaccount.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <title>Dental Clinic</title>
</head>
<body>

  <div class="grid-container">


    <div class="Header-title">

      <img src="image/FontanillaIcon.png">
      <h1>Fontanilla Halili Dental</h1>

      <ul>
        <li><a href="myaccountset.php"><button class="button1 active">Set Appointment</button></a></li>
        <li><a href="myaccountviewcurrent.php"><button class="button1 fill">Current Appointment</button></a></li>
        <li><a href="myaccountviewhistory.php"><button class="button1 fill">Appointment History</button></a></li>
        <li><a href="myupdateinfo.php"><button class="button1 fill">Update Info</button></a></li>
        <li><a href="mychangepass.php"><button class="button1 fill">Change Password</button></a></li>
        <li><a href="reglogout.php"><button class="button1 fill">Logout</button></a></li>
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

        <!--<div class="account-cardb">
          <div class="wrap-con">

            <h2>Select a Process</h2>

                <div class="toggle-wrapper">
                  <a href="#0" id="wrap-toggle">Set an Appointment</a>
                </div>
                <div id="wrap">
                  <ul>
                  <li> <a href="myaccountbranch1.php"> <button class=" tablink" onclick="openPage('Branch1', this)"> <span>Dasma-Bayan</span> </button> </a> </li>
                  <li> <a href="myaccountbranch2.php"> <button class=" tablink" onclick="openPage('Branch2', this)"> <span>Binakayan</span> </button> </a> </li>
                  <li> <a href="myaccountbranch3.php"> <button class=" tablink" onclick="openPage('Branch3', this)"> <span>Langkaan</span> </button> </a> </li>
                  </ul>
                </div>

                <div class="toggle-wrapper-1">
                  <a href="myaccountviewcurrent.php" id="wrap-toggle-1"> <button class="tablink" onclick="openPage('ViewCurrent', this)"> <span> View Current Appointment</span> </button> </a>
                </div>
                <div class="toggle-wrapper-2">
                  <a href="myaccountviewhistory.php" id="wrap-toggle-2"> <button class="tablink" onclick="openPage('ViewAppointment', this)"> <span>View Appointment History</span> </button> </a>
                </div>
               <div class="toggle-wrapper-3">
                  <a href="myaccountviewrecords.php" id="wrap-toggle-3"> <button class="tablink" onclick="openPage('ViewDental', this)"> <span>View Appointment Record</span> </button> </a>
                </div>

              </div>

          </div>-->

        </div>

      <div class="Content-b">

        <div class="account-card2">

          <div class="container">

            <div id="default" class="tabcontent">

              <div class="progress-bar-appoint">
                <div class="step1">
                  <div class="circle1 notactivecircle">
                    <p>1</p>
                  </div>
                  <h4>Pick a Branch <span>▶</span></h4>
                </div>
                <div class="step2">
                  <div class="circle2 notactivecircle">
                    <p>2</p>
                  </div>
                  <h4>Set Date & Time <span>▶</span></h4>
                </div>
                <div class="step3">
                  <div class="circle3 activecircle">
                    <p>3</p>
                  </div>
                  <h4>Almost Done</h4>
                </div>
              </div>

              <h1>Your request is currently in pending status. you will receive an SMS and an Email once your chosen schedule of date and time has been confirmed thank you</h1>
              <a href="myaccountviewcurrent.php" style="text-decoration:none;"> <button type="button" style="margin:30px 0px 0px 30%;" name="button">View Current Appointments</button></a>


            </div>



          </div>


        </div>

      </div>

      <div class="Content-c">
        <h3>Note:</h3>
        <div class="notes1">
            <h2>Open Everyday from Monday until Sunday</h2>
            <h2>Selecting an appointment date should be atleast  2 days ahead of time from the current date.</h2>
        </div>
        <div class="notes2">
              </div>
        <div class="notes3">

        </div>
        <div class="notes4">

        </div>
        <div class="notes5">

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
            <a href="#0"> <img src="image/icons/gmail.svg" class="iconic2"> </a>
          </div>
        </div>
          <div class="footer-2">
        <h3>© Fontanilla Halili Dental Clinic</h3>
      </div>
      </div>

  </div>





  </body>
  </html>
