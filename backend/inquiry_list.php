<?php
include 'dbconfig.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>inquiry list (unread messages)</title>

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
                $('#inquirylistunread').DataTable({

                });
            });

        </script>

        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
    </head>

<body>
        <div class="container" style="width: 100%;margin:0px;padding:0px;">
          <br>


          <style type="text/css">

          </style>
            <table id="inquirylistunread" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Inquiry#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact#</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                     $sql = "SELECT * FROM inquiry   ";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            $inquiry_id = $row['inquiry_id'];
                            $name = $row['name'];
                            $email = $row['email'];
                            $cp = $row['cp'];
                            $contactsubject = $row['subject'];
                            $message = $row['message'];
                            $status = $row['status'];

                            echo "<tr>
            <td>Inq-$inquiry_id</td>
            <td>$name</td>
            <td>$email</td>
            <td>$cp</td>
            <td>$contactsubject</td>

            <td>$status</td>



            ";
                    ?>
                    <td>
                        <div class='btn-group' role='group' aria-label='...'>
                             <a href="#view<?php echo $inquiry_id;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></button></a>
                            <a href="#edit<?php echo $inquiry_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>
                               <a href="#delete<?php echo $inquiry_id;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a>


                        </div>
                    </td>




 <!--View Modal -->
        <div id="view<?php echo $inquiry_id; ?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Read Message</h4>
                    </div>
                    <div class="modal-body">

                         <input type="hidden" name="inquiry_id" value="<?php echo $inquiry_id; ?>">
                          <input type="hidden" name="status" value="read">

                                    <label class="control-label col-sm-1" for="message">Message:</label>
                                    <div class="col-sm-4"><br>
                                    <textarea class="form-control" id="contactmessage" name="contactmessage" readonly required style="width: 100%; height: 200px" ><?php echo $message; ?></textarea>
                                    </div>

                                <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="inquiry_read"><span class="glyphicon glyphicon-edit"></span>mark as read</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Close</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        <!--Edit Item Modal -->
        <div id="edit<?php echo $inquiry_id; ?>" class="modal fade" role="dialog">

            <form method="post" class="form-horizontal" role="form">

                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Inquiry eReply</h4>
                        </div>

                         <div class="modal-body">

                            <input type="hidden" name="inquiry_id" value="<?php echo $inquiry_id; ?>">



                            <div class="form-group">

                                    <label class="control-label col-sm-1" for="emailto">To:</label>
                                    <div class="col-sm-3">
                                    <input type="text" class="form-control" id="emailto" name="emailto"  required readonly value="<?php echo $email; ?>"></input>
                                    </div>




                                    <label class="control-label col-sm-1" for="notes">Message:</label>
                                    <div class="col-sm-5">
                                    <textarea cclass="form-control" id="message" name="message" placeholder="message here" required style="width: 100%; height: 80px"  ></textarea>
                                    </div>



                            </div><!-- form group-->

                        </div><!-- modal body-->


                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="inquiry_reply"><span class="glyphicon glyphicon-edit"></span> reply</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span>close</button>
                            </div>


                        </form>
                    </div> <!-- modal content-->

                </div><!-- modal dialog modal-->



        </div>





        <!--Delete Modal -->
        <div id="delete<?php echo $inquiry_id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form method="post">
                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="delete_id" value="<?php echo $inquiry_id; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want Delete this message?<!-- <strong><?php echo $item_name; ?>?</strong> --></p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>



        </div> <!-- container-->


        </tr>

<?php
                        }

  if(isset($_POST['inquiry_read'])) // view
                        {

                                $inquiry_id = $_POST['inquiry_id'];

                                $sql = "UPDATE inquiry SET
                                status= 'read'
                                WHERE inquiry_id = '$inquiry_id'  ";
                                    if ($conn->query($sql) === TRUE) {
                                        echo '<script>window.location.href="p_inquirylist.php"</script>';

                                    }
                                     else {
                                      echo "Error updating record: " . $conn->error;
                                          }
                        }
////////////////////////////////////////////////////////////////////////////////////


                        // reply
                        if(isset($_POST['inquiry_reply']))
                        {
                            $inquiry_id = $_POST['inquiry_id'];

                            // $message = $_POST['message'];


                            $message = stripslashes($_POST['message']);
                            $message = mysqli_real_escape_string($conn,$message);
                            $message= str_replace('\r\n', "\r\n", $message);
                            $emailto=$_POST['emailto'];

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
                                $mail->addAddress($emailto);
                            $mail->addReplyTo('fontanilla.halili@gmail.com');
                            $mail->isHTML(true);
                            $mail->Subject  = 'Dental Services Inquiry ( fontanillahalilidental.com )';
                            $mail->Body = '<h1 align=center>Fontanilla - Halili Dental</h1><br><h4 align=center>Thank you for your interest regarding our services</h4><br>'. $message .'';


                                if (!$mail->send()) {

                                          echo   'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                          // header("Location: regerror.php");
                                        //   $url = BASE_URL . 'regerror.php';
                                        //   header("Location: $url");

                                }
                                else{


                                echo '<script>window.location.href="p_inquirylist.php"</script>';

                                }


                            }// if ng reply

///////////////////////////////////////////////////////////////////////////////////////////////////////

                        if(isset($_POST['delete'])){
                            // sql to delete a record
                            $delete_id = $_POST['delete_id'];

                                $sql = "DELETE FROM inquiry WHERE inquiry_id='$delete_id' ";
                                if ($conn->query($sql) === TRUE) {
                                    echo '<script>window.location.href="p_inquirylist.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }

                        }


                        }// while



?>
            </tbody>
            </table>
            </div>

         </body>



    </html>
