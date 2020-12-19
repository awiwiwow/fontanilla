<?php
include 'dbconfig.php';
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Appointment List-Done</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
<!--         <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
                    <style type="text/css">
                      .modal-title,label,input,textarea,select,option{
                        color:black;
                      }
                  </style>
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function() {
                $('#appointmentslistdone').DataTable({

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
        <div class="container" style="width: 100%;margin:0px;padding:0p;margin-top:30px;">
          <br>


            <table id="appointmentslistdone" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Appointment#</th>
                        <th>Patient_id</th>

                        <th>Branch</th>
                        <th>Sched_date</th>
                        <th>Sched_time</th>
                        <th>Reason</th>
                        <th>Status</th>
                        <th>Dentist</th>

                        <th>Actions</th>
                       <!--  <th>notes</th>
 -->
                    </tr>
                </thead>

                <tbody>
                    <?php

                     $sql = "SELECT * FROM appointments WHERE branch='Binakayan' AND status = 'done' ";

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



                            echo "<tr>
                                    <td>A-$appointment_id</td>
                                    <td>P-$patient_id</td>
                                    <td>$branch</td>
                                    <td>$sched_date</td>
                                    <td>$sched_time</td>
                                    <td>$reason</td>
                                    <td>$status</td>
                                    <td>$dr</td>
                                    ";
                    ?>


                           <td>
                        <div class='btn-group' role='group' aria-label='...'>
                          <!--    <a href="#view<?php echo $appointment_id;?>" data-toggle="modal"><button type='button' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span></button></a> -->
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
                            <h4 class="modal-title">Update Doctor's Notes</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="appointment_id" value="<?php echo $appointment_id; ?>">
                            <div class="form-group">
<!--
                                   <label class="control-label col-sm-2" for="status">status:</label>
                                <div class="col-sm-4">
                                 <input type="checkbox" name="done_status" value="done" required >done</input>
                                </div> -->
                                 <label class="control-label col-sm-1" for="dr">Dr:</label>
                                <div class="col-sm-4">
                                 <input type="text" name="dr_name" value="<?php echo $dr; ?>" readonly ></input>
                                </div>
                               <!--  <label class="control-label col-sm-2" for="dr">Change Dr:</label>
                                <div class="col-sm-3">
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
                                </div> -->


                                <br>
                                <br>
                                <label class="control-label col-sm-2" for="notes">Dentist's Notes:</label>
                                <div class="col-sm-5">
                                    <textarea cclass="form-control" id="notes" name="notes" placeholder="enter text here" required style="width: 100%; resize: none;  height: 200px;" overflow= "hidden"  ><?php echo $notes; ?></textarea>
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
                            // $status = $_POST['done_status'];
                            $dr = $_POST['dr_name'];
                            $notes = stripslashes($_POST['notes']);
                            $notes =mysqli_real_escape_string($conn,$notes);

                            $sql = "UPDATE appointments SET
                                dr_name='$dr',
                                notes='$notes'

                                WHERE appointment_id = '$appointment_id'  ";
                            if ($conn->query($sql) === TRUE) {
                                echo '<script>window.location.href="p_done_binakayan.php"</script>';
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
