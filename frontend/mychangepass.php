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
        <li><a href="myupdateinfo.php"><button class="button1 fill">Update Info</button></a></li>
        <li><a href="#0"><button class="button1 active">Change Password</button></a></li>
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

              <!-- <form class="form-contact" autocomplete="off" >
	<div class="ctn-inputs">
		<label for="contact_name_user_grupoamsi" class="support-text-form-contact">
			Current Password
		</label>

		<input type="password" name="contact_name_user_grupoamsi" id="contact_name_user_grupoamsi" pattern="[a-zA-Z]{2,100}" class=" effect-input" minlength="2" maxlength="100" autocomplete="off" required="required">
		<span class="bar-input-effect">
			<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
		</span>
		<p id="field-names" class="error-input-form-contact"></p>
	</div>

	<div class="ctn-inputs">
		<label for="contact_email_user_grupoamsi" class="support-text-form-contact">
			New Password
		</label>

		<input type="password" name="contact_email_user_grupoamsi" id="contact_email_user_grupoamsi" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class=" effect-input" minlength="6" maxlength="92" autocomplete="off" required="required">
		<span class="bar-input-effect">
			<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
		</span>
		<p id="field-email" class="error-input-form-contact"></p>
	</div>

  <div class="ctn-inputs">
		<label for="contact_email_user_grupoamsi" class="support-text-form-contact">
			Confirm Password
		</label>

		<input type="password" name="contact_email_user_grupoamsi" id="contact_email_user_grupoamsi" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class=" effect-input" minlength="6" maxlength="92" autocomplete="off" required="required">
		<span class="bar-input-effect">
			<i class="fa fa-times clear-input-icon" aria-hidden="true"></i>
		</span>
		<p id="field-email" class="error-input-form-contact"></p>
	</div>


	<div class="ctn-btns-form-contact">
		<input type="reset" id="clear_contact_user_grupoamsi" name="clear_contact_user_grupoamsi" class="btn-form-contact" value="Clear">

		<input type="submit" id="send_contact_user_grupoamsi" name="send_contact_user_grupoamsi" class="btn-form-contact" value="Change Pass">
	</div>
</form> -->
<?php require'update_password.php';?>


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
            <p>9:00 AM - 5:00 PM</p><p>Sunday</p>
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
