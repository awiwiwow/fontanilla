<?php
include_once 'dbconfig.php';
include('class/appointmentClass.php');
$appointmentClass = new appointmentClass();

if(isset($_POST['contactSubmit']))

{
	if(strcmp($_SESSION['code'], $_POST['code']) == 0 ){

			$contact_name = $_POST['contactname'];
			$contact_email = $_POST['contactemail'];
			$contact_number = $_POST['contactno'];

      $subject = $_POST['contactsubject'];
			$message = $_POST['message'];
      $status = 'unread*';


            $inquiry = $appointmentClass->inquirySubmit($contact_name,$contact_email,$contact_number,$subject,$message,$status);

            if($inquiry){




                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($contact_email);
                $mail->Subject  = 'Inquiry ( fontanillahalilidental.com )';
                $mail->Body = ' Hello ' . $contact_name . ', we are still reviewing your inquiry. we will get back to you as soon as we have read it. thank you';





                                if (!$mail->send()) {

                                          // echo   'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                      echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";

                                          // $_SESSION['message'] =  'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                          // header("Location: regerror.php");
                                        //   $url = BASE_URL . 'regerror.php';
                                        //   header("Location: $url");

                                }
                                else {
                                    // echo 'Message sent!';



                                      echo "<script>alert('Thank you for contacting us, all information received will always remain confidential. we will contact you as soon as we review your message')</script>";
                                          // header("Location: regverifynotif.php");
                                    // $url = BASE_URL . 'regverifynotif.php';
                                    // header("Location: $url");
                                }


            }

            else
            {
            		echo "<script>alert('an error has occured!')</script>";
            		    // $url = BASE_URL . 'index.php';
                  //                    header("Location: $url");

            }
        }
          else
            {
            		echo "<script>alert('captcha code did not match!')</script>";
            		    // $url = BASE_URL . 'index.php';
                  //                    header("Location: $url");

            }



}

?>







<!DOCTYPE html>
<html>
<head>
	<title>contact form</title>
	<style>
    *:focus {
	outline: 0;
}

body{
    background:#fff;
}
    
    .inquiryform{
    width: 100%;
    height: 100%;
    float: left;
  }

  .inquiryform form{
    margin-left: 30px;
    margin-top: 30px;
  }

  .inquiryform h4{
    font-size: 20px;
    margin-left: 30px;
    margin-top: 30px;
  }
  
  .inquiryform h2{
  text-align:center;
  padding-top: 0px;
  padding-right:50px;
  letter-spacing: 1px;
}

  .inquiryform form label{
    margin-left: 5px;
    display: block;
    margin-top: 30px;
  }

  .inquiryform input{
    border-bottom:2px solid #BEBEBE;
    width: 300px;
    height: 30px;
    background-color: #Fafafa;
    margin-top: 30px;
    margin-left: 30px;
  }

  .inquiryform input:focus{
    border-bottom: 1px solid #88D5E9;
  }

  .inquiryform button{
    margin:30px 70px;
    width: 300px;
    height: 30px;
    border-radius: 20px;
    background: #4db1e2;
    color: white;
  }
	</style>
</head>
<body>

        <div class="inquiryform">

			<form  method ='POST' action='' class="">
 
       <h2>Got questions? Contact us today!</h2>


             	<input type="text" name="contactname" placeholder="Name" required>
					  <input type="email" name="contactemail" placeholder="Email" required>

					   <input type="text" name="contactno" placeholder="Phone" maxlength="11" required>
               <input type="text" name="contactsubject" placeholder="Subject" maxlength="30"required>
					   
					   
					   <textarea name='message' style="resize: none; width: 600px;height:100px;margin:30px 0 20px 30px;border:1px solid #4db1e2;" placeholder="Message" required></textarea>



   
   <div class="imgcaptcha">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--       <script src="js/jquery-1.7.2.min.js"></script> -->
   <!--  <script src="js/bootstrap.js"></script> -->
<!--     <script src="js/jquery.hoverdir.js"></script> -->



    <!--   <script type="text/javascript">

         $(document).ready(function() {

          $('#refresh').tooltip('show');
          $('#refresh').tooltip('hide');

        });
      </script> -->

        <style type="text/css">#refreshicon{


        width: 30px;
        height: 30px;
        }
        </style>

          <img style="margin:0 0 0 35px;" src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' >

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

          <input style="float:left" id="code" name="code" type="text" placeholder="Enter the code above here" required>

          <p style="float:left;margin:40px 0 30px 30px;padding:0;">note: captcha code is case-sensitive*</p>

					<button style="margin:0 0 0 200px;cursor:pointer" name="contactSubmit" type="submit" id="apsub">Send</button>
		  
					</form>

			<!-- inquiry function -->
    <!--   <a href="index.php"><button>
        Back
      </button></a> -->


</div>
</body>
</html>