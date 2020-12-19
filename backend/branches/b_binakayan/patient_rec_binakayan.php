<?php
include 'dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Fontanilla-Halili Dental Patients' Records</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
<!--         <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css/bootstrap.css">


        <!-- Loader -->

        <link rel="stylesheet" href="css/loader.css">
        <script src="js/jquery-1.12.4.js"></script>

        <script>

            $(document).ready(function() {
                $('#appointmentrecords').DataTable({
              dom: 'Bfrtip',
             buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
                        ]

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css
">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
    <h1 align="center" style="color:black;">Fontanilla-Halili Dental Patients' Information Record</h1>
        <div class="container" style="width:100% ">
            <br>
            <table id="appointmentrecords" class="display nowrap" cellspacing="0" width="100%">

                <thead>
                    <tr>

                        <th>Patient_id</th>
                        <th>FirstName</th>
                        <th>MiddleName</th>
                        <th>LastName</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Age</th>
                        <th>Address</th>
                        <th>Contact</th>

                    </tr>
                </thead>

                <tbody>
<?php

                    $sql = "SELECT * FROM patients";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0)
                    {
                        // output data of each row
                        while($row = $result->fetch_assoc())
                        {


                            $patient_id = $row['patient_id'];
                            $firstname = $row['firstname'];
                            $middlename = $row['middlename'];
                            $lastname = $row['lastname'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $age = $row['age'];
                            $address = $row['address'];
                            $contact = $row['contact'];




                            echo    "<tr>

                                    <td>P-$patient_id</td>
                                    <td>$firstname</td>
                                    <td>$middlename</td>
                                    <td>$lastname</td>
                                    <td>$gender</td>
                                    <td>$dob</td>
                                    <td>$age</td>
                                    <td>$address</td>
                                    <td>$contact</td>

                                    </tr>";
                        }

                    }

?>
                </tbody>

            </table>
            </div>

<!--cdns for datatable buttons -->
            <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
         </body>



    </html>
