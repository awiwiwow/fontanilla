<?php
include 'dbconfig.php';

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>patients list</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">
          <style type="text/css">
                      .modal-title,label,input,textarea,select{
                        color:black;
                      }
                  </style>
        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function() {
                $('#patientslist').DataTable({

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
        <div class="container" style="width: 100%;margin:0;padding:0;margin-top:30px;">
          <br>


          <style type="text/css">

          </style>
            <table id="patientslist" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>

                        <th>patient_id</th>
                        <th>email</th>
                        <th>first_name</th>
                        <th>middle_name</th>
                        <th>last_name</th>
                        <th>gender</th>
                        <th>dob</th>
                        <th>age</th>
                        <th>address</th>
                        <th>contact</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                     $sql = "SELECT * FROM patients WHERE status='blacklist' ";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {


                            $patient_id = $row['patient_id'];

                            $email = $row['email'];
                            $first_name = $row['firstname'];
                            $middle_name = $row['middlename'];
                            $last_name = $row['lastname'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $age = $row['age'];
                            $address = $row['address'];
                            $contact = $row['contact'];
                            $status = $row['status'];


                            echo "<tr>

            <td>$patient_id</td>
            <td>$email</td>
            <td>$first_name</td>
            <td>$middle_name</td>
            <td>$last_name</td>
            <td>$gender</td>
            <td>$dob</td>
            <td>$age</td>
            <td>$address</td>
            <td>$contact</td>
            <td>$status</td>

            ";
                    ?>
                    <td>
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#accountstatus<?php echo $patient_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                        </div>
                    </td>




        <!--Edit Item Modal -->
        <div id="accountstatus<?php echo $patient_id; ?>" class="modal fade" role="dialog">
            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Patient Status</h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="patient_id" value="<?php echo $patient_id; ?>">
                            <div class="form-group">

                                   <label class="control-label col-sm-2" for="accountstatus">account status:</label>
                                <div class="col-sm-4">
                                <select name="accountstatus" required>
                                <option disabled selected value> -- select status -- </option>
                                <option>blacklist</option>
                                <option>good</option>
                                </select>
                                </div>



                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="accountstatusUpdate"><span class="glyphicon glyphicon-edit"></span> update</button>
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
                        if(isset($_POST['accountstatusUpdate'])){
                            $patient_id = $_POST['patient_id'];
                            $accountstatus = $_POST['accountstatus'];


                            $sql = "UPDATE patients SET
                                status='$accountstatus'
                                WHERE patient_id = '$patient_id'  ";
                            if ($conn->query($sql) === TRUE) {

                                echo '<script>window.location.href="p_patient_blacklist.php"</script>';
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
