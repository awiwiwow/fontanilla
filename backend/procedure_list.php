<?php
include 'dbconfig.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Services</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Latest compiled and minified CSS -->
 <!--        <link rel="stylesheet" href="css/bootstrap.min.css"> -->
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
                $('#procedurelist').DataTable({

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
                <a href="#add" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span>Add Service</button></a>
                <br>
                <br>


          <style type="text/css">

          </style>
            <table id="procedurelist" class="display nowrap" cellspacing="0" style="width: 100%;">
                <thead>
                    <tr>

                        <th>Service_id</th>
                        <th>Services</th>

                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <?php
                     $sql = "SELECT * FROM procedures  ";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {


                            $procedure_code = $row['procedure_id'];
                            $procedure_name = $row['procedure_name'];




                            echo "<tr>

                                <td>Svc-$procedure_code</td>
                                <td>$procedure_name</td>





                                ";
                    ?>

                        <td>

                        <!-- action button-->
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#edit<?php echo $procedure_code;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                              <a href="#delete<?php echo $procedure_code;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a>

                        </div>
                    </td>



<?php






?>










 <!--Edit Item Modal -->
        <div id="edit<?php echo $procedure_code; ?>" class="modal fade" role="dialog">


            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Service </h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="procedure_code" value="<?php echo $procedure_code; ?>">

                            <div class="form-group">


                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="status">Service:</label>
                                    <input type="text" name="procedure" value="<?php echo $procedure_name; ?>">

                                    </div>


                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="edit_procedure"><span class="glyphicon glyphicon-edit"></span>update</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> cancel</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>




  <!--Delete Modal -->
        <div id="delete<?php echo $procedure_code; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form method="post">
                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="procedure_code" value="<?php echo $procedure_code; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want to Delete this Service?<strong><?php echo $procedure_name; ?>?</strong></p>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                            </div>
                        </div>
                </form>
                </div>
            </div>






        </div>
        </tr>


        <?php
                        }// while



             if(isset($_POST['edit_procedure'])){


                            $procedure_code = $_POST['procedure_code'];
                            $procedure_name = stripslashes($_POST['procedure']);
                            $procedure_name = mysqli_real_escape_string($conn,$procedure_name);

                            $updatesql = "UPDATE procedures SET
                                procedure_name='$procedure_name'
                                WHERE procedure_id = '$procedure_code'  ";
                            if ($conn->query($updatesql) === TRUE) {

                                echo '<script>window.location.href="p_procedurelist.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }


     if(isset($_POST['delete'])){
                            // sql to delete a record

                            $procedure_code2 = $_POST['procedure_code'];

                                $deletesql = "DELETE FROM procedures WHERE procedure_id='$procedure_code2' ";
                                if ($conn->query($deletesql) === TRUE) {

                                    echo '<script>window.location.href="p_procedurelist.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }

                        }





                    }// if


                        //add procedure
                        if(isset($_POST['add_procedure']))
                        {
                            $procedure_namenew = stripslashes($_POST['newprocedure']);
                            $procedure_namenew = mysqli_real_escape_string($conn,$procedure_namenew);
                            $sqlprocedure = "INSERT INTO procedures (procedure_name)
                                        VALUES ('$procedure_namenew')";

                            if ($conn->query($sqlprocedure) === TRUE) {

                                echo '<script>window.location.href="p_procedurelist.php"</script>';
                            }
                            else {
                                echo "Error creating admin account: ". $sqlprocedure . "<br>"  . $conn->error;
                            }
                        }







    ?>




            <!--Add admin Modal -->
            <div id="add" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Procedure</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" class="form-horizontal" role="form">

                                <div class="form-group">


                                    <label class="control-label col-sm-2" for="newprocedure">Procedure</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="newprocedure" name="newprocedure" placeholder="newprocedure" required>
                                    </div>

                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="add_procedure"><span class="glyphicon glyphicon-plus"></span>Add Procedure</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>

            </tbody>
            </table>
            </div>




         </body>



    </html>
