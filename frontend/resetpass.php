<?php
include("dbconfig.php");
include('class/userClass.php');


$userClass = new userClass();

$errorMsgForgot= "";



if (isset($_POST['usernameEmailForgot']))

{

  $email = $_POST['usernameEmailForgot'];


         $ftoken =  md5( rand(0,1000) ) ;
    // initialize class using $uid object.

      $uid = $userClass->userSendFtoken($email,$ftoken);

             if($uid)

              {


              // require 'phpmailer/PHPMailerAutoload.php';
              // $mail = new PHPMailer;

              //   $mail->From = 'no-reply@fontanillahalilidental.com';
              //   $mail->FromName = 'Fontanilla-Halili Dental Clinic';
              //   $mail->setFrom('http://fontanillahalilidental.com', 'Fontanilla-Halili Dental Clinic');
              //   $mail->addAddress($email);

              //   $mail->Subject  = 'Reset Password ( fontanillahalilidental.com )';
              //   $mail->Body     =
              //                     '  Please click this link to assign new password to your account. this link is only valid for   30 minutes from the time of request.:

              //                        http://fontanillahalilidental.com/Frontend2/resetverify.php?email='.$email.'&ftoken='.$ftoken;



                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username='fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';
                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com', 'Fontanilla-Halili Dental Clinic');

                $mail->addAddress($email);
                // $mail->addReplyTo('fontanilla.halili@gmail.com');
                // $mail->isHTML(true);
                $mail->Subject  = 'Reset Password ( fontanillahalilidental.com )';
                $mail->Body     =
                                  '  Please click this link to assign new password to your account. this link is only valid for 1 hour from the time of request.

                                     http://fontanillahalilidental.com/frontend/resetverify.php?email='.$email.'&ftoken='.$ftoken;






              if($mail->send()){

                  $_SESSION['active']  = 0; //0 until user activates their account with verify.php
                  $_SESSION['resetmessage'] =

                       "Password Reset Request Successful! Confirmation link has been sent to $email, please check and verify
                       your account by clicking on the link in the message!";

                                header("location: resetverifynotif.php");
                                    // $url = BASE_URL . 'resetverifynotif.php';
                                    // header("Location: $url");


                               }

                            else {

                                          $_SESSION['resetmessage'] =  'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                          header("location: reseterror.php");
                                          // $url = BASE_URL . 'reseterror.php';
                                          // header("Location: $url");

                                  }





             }




            else
            {
              $errorMsgForgot= "record not found or email is inactive ";
             }








}






?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/notifications.css">
    <title>Forgot password</title>
  </head>
  <body>

    <div class="header">
      <img src="image/FontanillaIcon.png" alt="">
      <h1>Fontanilla Halili Dental</h1>
    </div>
    <div class="container">
      <h2> Fontanilla-Halili Dental Password Reset</h2>
          <form action="resetpass.php" method="post" autocomplete="off">

            <div class="errorMsg" style="font-size:20px;margin:0 0 0 40px;">
                <p style="color:red;"><?php echo $errorMsgForgot; ?></p></div>



            <input style="border-bottom:1px solid #000;width:300px;height:40px;font-size:25px;background:inherit;margin:40px;" class = "form-control" type="email" required autocomplete="off" name="usernameEmailForgot"  placeholder="enter email address" />

            <br>




          <button style="width:300px;height:30px;color:white;font-size:20px;background:#147bd6;margin:0px 0 0 30px;cursor:pointer;" class="button button-block"/>Confirm</button>

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



