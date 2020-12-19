<?php
/* Verifies registered user email, the link to this page
   is included in the register.php email message
*/
require 'dbconfig.php';
include('class/userClass.php');

$userClass = new userClass();
$errorMsgNewPass = "";

      $email =$_SESSION['email'];
      $ftoken = $_SESSION['ftoken'] ;




       if (isset($_POST['setPassSubmit']))

                  {

      $password=$_POST['newpassword'];

      if($_POST['newpassword'] == $_POST['cnewpassword'])//to check password and confirm password if match.
               {



                $uid=$userClass->userSetNewPassword($email,$password,$ftoken); // userid verification

                 if($uid){


         $_SESSION['resetmessage'] = "your password has been updated! ";

          $db = null;

        //   $url = BASE_URL . 'resetsuccess.php';
        // header("Location: $url");

           header("location: resetsuccess.php");
        // $url=BASE_URL.'resetsuccess.php';
        // header("Location: $url");

                 }



                 else{



             $_SESSION['resetmessage'] = "the URL expired/invalid. password update failed! .";

        // $url = BASE_URL . 'reseterror.php';
        // header("Location: $url");
             header("location: reseterror.php");



                 }



        }



  else
                  {


           $errorMsgNewPass = " new password and confirm new password did not match!";


                  }




}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/notifications.css">
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
    <title>Fontanilla Halili Dental</title>
  </head>
  <body>

    <div class="header">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental</h1>
    </div>
    <div class="container">
     <h2>Set new password</h2>
          <form action="resetnewpass.php" method="post" autocomplete="off">

            <div class="errorMsg"><p style="color:red; font-weight:bold;"><?php echo $errorMsgNewPass; ?></p></div>


            <label style="font-size:30px;margin:30px;">New password:</label>
            <input style="border-bottom:1px solid #000;width:300px;height:40px;font-size:25px;background:inherit;" class = "form-control" type="password" minlength="6" required autocomplete="off" name='newpassword' placeholder="set new password" />
              <br>

            <label style="font-size:30px;margin:30px;">Confirm new password:</label>
            <input style="border-bottom:1px solid #000;width:300px;height:40px;font-size:25px;background:inherit;" class = "form-control" type="password" minlength="6" required autocomplete="off" name='cnewpassword' placeholder="confirm new password" />

            <br>
            <br>




        <button style="width:300px;height:30px;color:white;font-size:20px;background:#147bd6;margin:40px 0 0 30px;cursor:pointer;" class="button button-block" name="setPassSubmit">Confirm</button>

          </form>
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



