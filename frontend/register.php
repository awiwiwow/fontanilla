<?php
// require("dbconfig.php");
// require('class/userClass.php');

// $userClass = new userClass();

$errorMsgReg   = '';


// signup


if (isset($_POST['signupSubmit'])) {

    if ($_POST['passwordReg'] == $_POST['cpasswordReg']) //to check password and confirm password if match.
        {
        if(strcmp($_SESSION['code'], $_POST['code']) == 0 && $_POST['passwordReg'] == $_POST['cpasswordReg'])
        {


        $email    = $_POST['emailReg'];
        $password = $_POST['passwordReg'];

        $firstname  = $_POST['first_name'];
        $middlename = $_POST['middle_name'];
        $lastname   = $_POST['last_name'];

        $name = $firstname . ' ' . $middlename . ' ' . $lastname;


        $gender = $_POST['gender'];

        $byear  = $_POST['byear'];
        $bmonth = $_POST['bmonth'];
        $bday   = $_POST['bday'];

        // $dob = $bmonth . '-' . $bday . '-' . $byear ;

        $dob = $bday . '-' . $bmonth . '-' . $byear;

        $time    = strtotime($dob);
        $dob     = date('d-M-Y', $time);
        $agecalc = ((time() - strtotime($dob)) / (3600 * 24 * 365));
        $age     = floor($agecalc);


        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $status = 'good';


        $token = md5(rand(0, 1000));

        // initialize class using $uid object.

        $uid = $userClass->userRegistration($email, $password, $firstname, $middlename, $lastname, $gender, $dob, $age, $address, $contact, $token,$status);



        if ($uid) {


                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');


                // $mail->isHTML(true);

                $mail->addAddress($email);
                $mail->Subject  = 'Account Verification ( fontanillahalilidental.com )';
                $mail->Body = ' Hello ' . $firstname . ',



                              Thank you for signing up!

                              Please click this link to activate your account:

                              http://fontanillahalilidental.com/frontend/regverify.php?email=' . $email . '&token=' . $token;





                                if (!$mail->send()) {

                                          $_SESSION['message'] =  'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                          header("Location: regerror.php");
                                        //   $url = BASE_URL . 'regerror.php';
                                        //   header("Location: $url");

                                }
                                else {
                                    // echo 'Message sent!';


                                     $_SESSION['active']  = 0; //0 until user activates their account with verify.php


                                     $_SESSION['regmessage'] =

                                       "user registration successful! Confirmation link has been sent to $email, please check and verify
                                       your account by clicking on the link in the message!";

                                          header("Location: regverifynotif.php");
                                    // $url = BASE_URL . 'regverifynotif.php';
                                    // header("Location: $url");
                                }


        } // if success reg

        else {
            $errorMsgReg = 'Registration failed! , Email address! already exists.';
               // $url = BASE_URL . 'reglogin.php';
               //                       header("Location: $url");

        } // else reg failed


        }// if code


        else{

              $errorMsgReg = "captcha code did not match!";


      }// else ng code



      }// if ng confirm pass


    else {

        $errorMsgReg = "password and confirm password did not match!";
           // $url = BASE_URL . 'reglogin.php';
           //                           header("Location: $url");


    }// else confirm


}// if submit


?>


<!DOCTYPE html>
<html>
<head>
<title>signup</title>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

<style>
  input{
      width:150px;
      height:25px;
      border-color: #bdc7d8;
      border-radius: 5px;
      font-size: 14px;
      padding: 2px 4px;
  }
</style>

</head>
<body style="width:100%;height:100%;">



          <form action="" method="post" autocomplete="off">

          <div class="errorMsg" style="color: red; font-weight: bold;"><?php echo $errorMsgReg;?></div>


              <input style="margin:0 15px 10px 30px;" class="form-control" type="text" required autocomplete="off" name='first_name' placeholder="first name" />

              <input style="margin:0 15px 10px 0;" class="form-control" type="text" required autocomplete="off" name='middle_name' placeholder="middle name" />

              <input style="margin:0 15px 10px 0;" class="form-control" type="text" required autocomplete="off" name='last_name' placeholder="last name" />




          <select style="margin:0 0 10px 30px;font-size:14px;padding: 2px 4px;"  class= "form-control" name='gender' required>
                <option disabled selected value>Select Sex</option>
                <option>Male</option>
                <option>Female</option>
           </select>

<!--    date of birth      -->
<?php
// lowest year wanted
          $cutoff = 1940;

          // current year
          $now = date('Y')-18;

          // build years menu
          echo '<select style="margin:0 0 10px 30px;font-size:14px;padding: 2px 4px;" class= "form-control" name="byear" required>' . PHP_EOL;
          echo '<option disabled selected value>Birth year</option>' . PHP_EOL;
          for ($y = $now; $y >= $cutoff; $y--) {

              echo '  <option value="' . $y . '">' . $y . '</option>' . PHP_EOL;
          }
          echo '</select>' . PHP_EOL;

          // build months menu
          echo '<select style="margin:0 0 10px 15px;font-size:14px;padding: 2px 4px;" class= "form-control" name="bmonth" required>' . PHP_EOL;
          echo '<option disabled selected value>Birth month</option>' . PHP_EOL;
          for ($m = 1; $m <= 12; $m++) {
              echo '  <option value="' . $m . '">' . date('M', mktime(0, 0, 0, $m)) . '</option>' . PHP_EOL;
          }
          echo '</select>' . PHP_EOL;

          // build days menu
          echo '<select style="margin:0 0 10px 15px;font-size:14px;padding: 2px 4px;" class= "form-control" name="bday" required>' . PHP_EOL;
          echo '<option disabled selected value>Birth date</option>' . PHP_EOL;
          for ($d = 1; $d <= 31; $d++) {
              echo '  <option value="' . $d . '">' . $d . '</option>' . PHP_EOL;
          }
          echo '</select>' . PHP_EOL;



?>





            <input style="margin:0 0 10px 30px;width:270px;" class = "form-control" type="text" required autocomplete="off" name='address' placeholder="address" />
             <input style="margin:0 0px 10px 30px;" class = "form-control" type="integer" required autocomplete="off"  name='contact' id ="contact"  maxlength="11" onkeypress="return isNumber(event)" placeholder="contact number" />
            <input style="margin:0 0 10px 30px;width:270px;" class = "form-control" type="email" required autocomplete="off" name='emailReg' placeholder="email address" />





        <div>
            <input style="margin:0 15px 10px 30px;" class = "form-control" type="password" minlength="6" required autocomplete="off" name='passwordReg' placeholder="password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' "/>
            <input style="margin:0 15px 10px 0;" class = "form-control" type="password" minlength="6" required autocomplete="off" name='cpasswordReg' placeholder="confirm password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' "/>
        </div>


  <div class="imgcaptcha" style="margin:0 50px;">
  <style type="text/css" href="css/font-awesome.css"></style>

  <style type="text/css">

    #refreshicon{
      width: 30px;
      height: 30px;
      }
      </style>

        <img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' >

        <a href='javascript: refreshCaptcha();'><i data-placement="right" id="refresh"  title="Click to Refresh Code" class="" >
          <img id="refreshicon" src="icons/refresh.png">
        </i></a>

        <script language='JavaScript' type='text/javascript'>
      function refreshCaptcha()
      {
        var img = document.images['captchaimg'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
      }
      </script>

        </div>

    <input style="width:300px;margin-left:25%;" id="code" name="code" type="text" placeholder="Enter the Code Above" required></td>
        <p style="font-size:17px;width:60%;margin:10px 0 10px 20%;">note: captcha code is case-sensitive*</p>
         <button style="width: 200px;padding: 7px 20px;text-align: center;background:#3b8beb;margin-left:30px;color:white;font-size:18px;"  type="submit" class="button button-block" name="signupSubmit" >Sign-up</button>
          </form>



<script type="text/javascript">
   $('#contact').keyup(function(){
        if (
            ($(this).val().length > 0) && ($(this).val().substr(0,2) != '09')
            || ($(this).val() == '')
            ){
            $(this).val('09');
        }
    });


   function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>





</body>
</html>





