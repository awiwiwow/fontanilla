<?php
include_once 'dbconfig.php';
include_once('session.php');
$userDetails=$userClass->userDetails($session_patient_id);
$db = getDB();
// $patient_id =  $userDetails->patient_id;
$email =  $userDetails->email;


/* code for cancel */
if(isset($_GET['cancel']))
{
$status_cancel = 'cancelled';
$stmt = $db->prepare("UPDATE appointments SET status=:status_cancel WHERE appointment_id=".$_GET['cancel']);
$stmt->bindParam("status_cancel", $status_cancel,PDO::PARAM_STR);
$stmt->execute();

$status_query1 = $stmt->execute();

// $stmt = $db->prepare("INSERT INTO cance SET status=:status_cancel WHERE patient_id=".$_GET['cancel']);
// $stmt->bindParam("status_cancel", $status_cancel,PDO::PARAM_STR);
// $stmt->execute();

if ($status_query1)
{
  // success

			    require_once 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment: Cancelled( fontanillahalilidental.com )';
                $mail->Body = ' Your Appointment has been cancelled. Please avoid cancellation of your chosen schedule. Thank you! ';



                                if (!$mail->send()) {

                                          echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";


                                }
                                else {
                                    // echo 'Message sent!';


                                         echo "<script>alert('appointment has been cancelled! ');
                                             window.location.href='myaccountviewhistory.php'</script>";
                               // $url = BASE_URL . 'home.php';
                               //       header("Location: $url");
                                }

  // echo "<script>alert('appointment has been cancelled');
  //       window.location.href='myaccountviewhistory.php'</script>";
 // header("Location: appointment_current.php");
}


else
{

  echo "<script>alert('something went wrong please try again later.')</script>";
  // failure
}

}



/* code for cancel */
if(isset($_GET['resched']))
{
$status_resched = 'cancelled';
$stmt = $db->prepare("UPDATE appointments SET status=:status_resched WHERE appointment_id=".$_GET['resched']);
$stmt->bindParam("status_resched", $status_resched,PDO::PARAM_STR);
$stmt->execute();

$status_query2 = $stmt->execute();


if ($status_query2)
{
				require_once 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment: Cancelled and Rescheduled ( fontanillahalilidental.com )';
                $mail->Body = ' Your Previous Appointment has been cancelled.  ';



                                if (!$mail->send()) {

                                          echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";


                                }
                                else {
                                    // echo 'Message sent!';



										   echo "<script>alert('your previous appointment has been cancelled. Please select branch and schedule to set your new appointment. thank you!');
										       window.location.href='myaccountset.php'</script>";
                               // $url = BASE_URL . 'home.php';
                               //       header("Location: $url");
                                }


   // echo "<script>alert('previous appointment has been cancelled');
   //     window.location.href='myaccount.php'</script>";
// header("Location: myaccount-resched.php");
}
else
{

  echo "<script>alert('something went wrong please try again later.')</script>";
  // failure
}

}




?>