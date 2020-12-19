<?php
include 'dbconfig.php';
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Appointment List-Cancelled</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
     <!--    <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Loader -->
        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>
            $(document).ready(function() {
                $('#appointmentslistcancelled').DataTable({

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
            <table id="appointmentslistcancelled" class="display nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>appointment_id</th>
                        <th>patient_id</th>
                        <th>branch</th>
                        <th>sched_date</th>
                        <th>sched_time</th>
                        <th>reason</th>
                        <th>status</th>

                    </tr>
                </thead>

                <tbody>
<?php

                     $sql = "SELECT * FROM appointments WHERE status='cancelled' or status='declined' ";

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



                            echo "<tr>
                                    <td>A-$appointment_id</td>
                                    <td>P-$patient_id</td>

                                    <td>$branch</td>
                                    <td>$sched_date</td>
                                    <td>$sched_time</td>
                                    <td>$reason</td>
                                    <td>$status</td>
                                    </tr>";

                        }

                    }

?>
            </tbody>
            </table>
            </div>

         </body>




    </html>
