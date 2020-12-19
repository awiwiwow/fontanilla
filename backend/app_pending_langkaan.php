<?php
include 'dbconfig.php';
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Appointment list-Pending</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
<!--         <link rel="stylesheet" href="css/bootstrap.min.css"> -->
              <link rel="stylesheet" href="css/bootstrap.css">
                  <style type="text/css">
                      #cb1,.modal-title,label,input,textarea{
                        color:black;
                      }

                  </style>
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function() {
                $('#appointmentslistpending').DataTable({


                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
        <div class="container" style="width: 100%;margin:0px;padding:0;margin-top:30px;">
          <br>


          <style type="text/css">

          </style>
            <table id="appointmentslistpending" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Appointment#</th>
                        <th>Patient_id</th>
                        <th>Branch</th>
                        <th>Sched_date</th>
                        <th>Sched_time</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php



                     $sql = "SELECT * FROM appointments WHERE status = 'pending' AND branch='Langkaan' ";

                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {


                        // output data of each row
                        while($row = $result->fetch_assoc()) {



                            $appointment_id = $row['appointment_id'];
                            $patient_id = $row['patient_id'];
                            $branch = $row['branch'];
                            $sched_date = $row['sched_date'];
                            $sched_time = $row['sched_time'];
                            $reason = $row['reason'];
                            $status = $row['status'];


                        // to select contact numbers for each patient from patient table
                        $sqljoin = "SELECT patients.contact,patients.firstname,patients.email FROM patients INNER JOIN appointments ON patients.patient_id=appointments.patient_id WHERE appointment_id = '$appointment_id'  ";
                        $result2 = $conn->query($sqljoin);




                            if ($result2->num_rows > 0) {
                            // output data of each row
                                while($row2 = $result2->fetch_assoc())


                                {
                                      $email = $row2['email'];
                                      $contact = $row2['contact'];
                                      $name = $row2['firstname'];

                                      // echo $email;
                                      // echo $contact;
                                      // echo $name;
                                  $app_details='Hi '.$name.' This is a reminder that you have an appointment on '.
   'App#:A-'.$appointment_id.' '.'Date: '.$sched_date.' '.'Time: '.$sched_time.' '.'Branch: '.$branch.' '.'Reason: '.$reason.' Thankyou. From: Fontanilla-Halili Dental';




                            //            echo '<script type="text/javascript">',
                            //      'countChar();',
                            //      '</script>'
                            // ;




                                }

                            }





                            echo "<tr>
                                    <td>A-$appointment_id</td>
                                    <td>P-$patient_id</td>
                                    <td>$branch</td>
                                    <td>$sched_date</td>
                                    <td>$sched_time</td>
                                    <td>$reason</td>
                                    <td>$status</td>
                                    ";





                    ?>

                    <td>
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#edit<?php echo $appointment_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                        </div>
                    </td>




        <!--Edit Item Modal -->
        <div id="edit<?php echo $appointment_id; ?>" class="modal fade" role="dialog">


            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Accept Pending Appointments </h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="appointment_id" value="<?php echo $appointment_id; ?>">

                            <div class="form-group">


                            <div class="col-sm-3" id="cb1">
                                <label >Appointment Details:</label><br>
                                            <?php echo $app_details;?>
                            </div>

                                    <div class="col-sm-3" id="cb1">
                                    <label >Action:</label>

                                        <select name="app_status">
                                            <option value="confirmed">Confirm</option>
                                            <option value="declined">Decline</option>
                                        </select>

                                    </div>



                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="status">Name:</label>
                                    <input type="text" name="name" readonly value="<?php echo $name; ?>">
                                    <label class="control-label col-sm-2" for="status">Contact#:</label>
                                     <input type="text " name="number" value="<?php echo $contact; ?>" readonly >
                                     <label class="control-label col-sm-2" for="status">Message:</label>
                                    <textarea name ="msg" readonly "><?php echo$app_details;?></textarea>
                                      <!--   <label >characters left:</label><p id="charNum">85</p> -->



                                        </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="send"><span class="glyphicon glyphicon-edit"></span>OK</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> cancel</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>

        </div>
        </tr>
<?php
                        }



                        //##########################################################################
// ITEXMO SEND SMS API - PHP - CURL METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
            $ch = curl_init();
            $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
            curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
            curl_setopt($ch, CURLOPT_POST, 1);
             curl_setopt($ch, CURLOPT_POSTFIELDS,
                      http_build_query($itexmo));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            return curl_exec ($ch);
            curl_close ($ch);
}
//##########################################################################



// //localhost
// //##########################################################################
// // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// // Visit www.itexmo.com/developers.php for more info about this API
// //##########################################################################
// function itexmo($number,$message,$apicode){
// $url = 'https://www.itexmo.com/php_api/api.php';
// $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
// $param = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($itexmo),
//     ),
// );
// $context  = stream_context_create($param);
// return file_get_contents($url, false, $context);}
// //##########################################################################



                         // echo $app_details;

                        //Update Items
                        if(isset($_POST['send'])){




                                if($_POST['app_status'] == 'confirmed'){

                                    $appointment_id = $_POST['appointment_id'];
                                    $status = $_POST['app_status'];

                                    // $name= $_POST['name'];

                                    $sql = "UPDATE appointments SET status='$status' WHERE appointment_id = '$appointment_id'  ";

                                        if ($conn->query($sql) === TRUE) {

////////////////////////////////////////// SMS ///////////////////////////////////////
                                         $number = $_POST['number'];
                                          $name = $_POST['name'];
                                          $message = $_POST['msg'];
                                        //   $text=$name.":".$app_details."  ".$message;

                                          $api="ST-FONTA455497_ZH5M5 ";



                                          if(!empty($_POST['name'])&&($_POST['number'])&&($_POST['msg'])){
                                             $result = itexmo($number,$message,$api);
                                                if ($result == ""){

                                                echo "<script>alert(iTexMo: No response from server!!!
                                                Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
                                                Please CONTACT US for help.)</script>";
                                                }else if ($result == 0){
                                                 echo "<script>alert('message sent')</script>";
                                                }
                                                else{
                                                echo "<script>alert(Error Num ". $result . " was encountered!)</script>";
                                                }

                                                }




////////////////////////////////////////// EMAIL ///////////////////////////////////////


                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';
                 $mail->isHTML(true);
                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment Confirmed( fontanillahalilidental.com )';


                $mail->Body = '<h1 align=center>Fontanilla - Halili Dental</h1><br><h4 align=center>Thank you! your appointment has been confirmed</h4><br>'. $app_details .'';



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



                                      // echo "<script>alert('Thank you for contacting us, all information received will always remain confidential. we will contact you as soon as we review your message')</script>";
                                          // header("Location: regverifynotif.php");
                                    // $url = BASE_URL . 'regverifynotif.php';
                                    // header("Location: $url");
                                }


                                            //send sms notif
                                            echo '<script>window.location.href="p_pending_langkaan.php"</script>';
                                        }

                                        else {
                                            echo "<script>alert(Error updating record: " . $conn->error.")</script>";
                                        }
                                }// confirmed status




                                        else if($_POST['app_status']=='declined'){

                                            $appointment_id = $_POST['appointment_id'];
                                            $status = $_POST['app_status'];




                                            $sql = "UPDATE appointments SET status='$status' WHERE appointment_id = '$appointment_id'  ";
                                            if ($conn->query($sql) === TRUE) {



                require_once 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';
                 $mail->isHTML(true);
                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';
                $mail->addReplyTo('fontanilla.halili@gmail.com');
                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment Declined( fontanillahalilidental.com )';


                $mail->Body = '<h1 align=center>Fontanilla - Halili Dental</h1><br><h4 align=center>We are very sorry but your appointment request has been declined. We would love to accomodate everyone as much as possible but the date of your chosen schedule is not available. for more information regarding the declined request you may reach us on our email. Thank you for understanding.  </h4><br>';



                                if (!$mail->send()) {

                                          // echo   'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                      echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";



                                }
                                else {
                                    // echo 'Message sent!';



                                }



                                                //send sms notif
                                                echo '<script>window.location.href="p_pending_langkaan.php"</script>';
                                            }

                                            else {
                                                echo "Error updating record: " . $conn->error;
                                            }

                                }// cancelled



                }//while

            }//if
?>
            </tbody>
            </table>
            </div>







            <?php




            ?>



         </body>



    </html>
