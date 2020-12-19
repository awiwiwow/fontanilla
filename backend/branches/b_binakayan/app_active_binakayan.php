<?php
include 'dbconfig.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>appointment list</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
<!--         <link rel="stylesheet" href="css/bootstrap.min.css"> -->

      <link rel="stylesheet" href="css/bootstrap.css">
      <style type="text/css">
                      #cb1,.modal-title,label,input,textarea,select,option{
                        color:black;
                      }
                  </style>
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function() {
                $('#appointmentslistactive').DataTable({

                });
            });

        </script>
        <!--  css -->
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
         <!--  js -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
        <div class="container" style="width: 100%;margin:0px;padding:0px;margin-top:30px;">
               <br>


            <table id="appointmentslistactive" class="display nowrap" cellspacing="0">
                <thead>
                    <tr>
                        <th>Appointment#</th>
                        <th>Patient_id</th>

                        <th>Branch</th>
                        <th>Sched_date</th>
                        <th>Sched_time</th>
                        <th>Reason</th>
                        <th>Status</th>
                      <!--   <th>dr</th>
                        <th>notes</th> -->
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                     $sql = "SELECT * FROM appointments WHERE status='confirmed' AND branch ='Binakayan' ";

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
                            $dr = $row['dr_name'];
                            $notes = $row['notes'];



   // to select contact numbers for each patient from patient table
                        $sqljoin2 = "SELECT patients.contact,patients.firstname,patients.email FROM patients INNER JOIN appointments ON patients.patient_id=appointments.patient_id WHERE appointment_id = '$appointment_id'  ";
                        $result3 = $conn->query($sqljoin2);


                              if ($result3->num_rows > 0) {
                            // output data of each row
                                while($row3 = $result3->fetch_assoc())


                                {
                                      $email = $row3['email'];
                                      $contact = $row3['contact'];
                                      $name = $row3['firstname'];

                                      // echo $email;
                                      // echo $contact;
                                      // echo $name;
                                    // $app_details='App#:A-'.$appointment_id.' '.'Date:'.$sched_date.' '.'Time:'.$sched_time.' '.'Branch:'.$branch.' '.'Reason:'.$reason.'';




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
                                    <td>$status</td> ";
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
                            <h4  class="modal-title">Update Appointment Status</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="appointment_id" value="<?php echo $appointment_id; ?>">
                            <div class="form-group">



                                 <label class="control-label col-sm-1" for="dr">Dr:</label>
                                <div class="col-sm-5">


     <select  name="dr_name" id = "dr_name" required>
        <?php



        $sql2 = "SELECT * FROM dentists ";
        $result2 = $conn->query($sql2);// Execute (run) the query
        if ($result2->num_rows > 0) {
                        // output data of each row
            while($row2 = $result2->fetch_assoc()) {

                echo '<option value="'.$row2['dr_name'].'">'.$row2['dr_name'].'</option>';
                //print_r($row);
            }
}

        ?>
         </select>



                                </div>

                                 <label class="control-label col-sm-1" for="status">status:</label>
                                <div class="col-sm-4" id="cb1">
                                 <input  type="checkbox" name="done_status" value="done" required >Done</input>
                                </div>
                                <br><br>





                                <label class="control-label col-sm-1" for="notes">Notes:</label>
                                <div class="col-sm-4">
                                    <textarea cclass="form-control" id="notes" name="notes" placeholder="enter text here" required style="width: 100%; resize: none; height:200px ;" overflow= "hidden" ><?php echo $notes; ?></textarea>
                                </div>

                                    <img src="image/tchart.jpg">

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="update_appointment_status"><span class="glyphicon glyphicon-edit"></span> update</button>
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

                        //Update Items
                        if(isset($_POST['update_appointment_status'])){
                            $appointment_id = $_POST['appointment_id'];
                            $status = $_POST['done_status'];
                            $dr = $_POST['dr_name'];
                            $notes = stripslashes($_POST['notes']);
                            $notes =mysqli_real_escape_string($conn,$notes);

                            $sql = "UPDATE appointments SET
                                status='$status',
                                dr_name='$dr',
                                notes='$notes'
                                WHERE appointment_id = '$appointment_id'  ";
                            if ($conn->query($sql) === TRUE) {



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
                $mail->Subject  = 'Appointment Done( fontanillahalilidental.com )';


                $mail->Body = '<h1 align=center>Fontanilla - Halili Dental</h1><br><h4 align=center>Thank you for Choosing Fontanilla-Halili Dental</h4><br>';



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




                                echo '<script>window.location.href="p_active_binakayan.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }


                    }

?>
            </tbody>
            </table>
            </div>

         </body>



    </html>
