<?php
include_once 'dbconfig.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Admin list</title>

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
                $('#adminlist').DataTable({

                });
            });

        </script>
        <link rel="stylesheet" href="css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    </head>

<body>
        <div class="container" style="width: 100%;margin:0px;padding:0px;margin-top:30px;">
                <a href="#add" data-toggle="modal"><button type='button' class='btn btn-success btn-sm'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span>Admin</button></a>
                <br>
                <br>


          <style type="text/css">

          </style>
            <table id="adminlist" class="display nowrap" cellspacing="0" style="width: 100%;">
                <thead>
                    <tr>

                        <th>Admin_id</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Branch</th>
                        <th>Type</th>
                        <th>Action</th>


                    </tr>
                </thead>

                <tbody>
                    <?php
                     $sql = "SELECT * FROM clinicadmin  ";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {


                            $admin_id = $row['admin_id'];
                            $name = $row['name'];
                            $contact = $row['contact'];
                            $branch = $row['branch'];
                            $username = $row['username'];
                            $password = $row['password'];
                            $type = $row['type'];



                            echo "<tr>

                                <td>Adm-$admin_id</td>
                                <td>$name</td>
                                <td>$contact</td>
                                <td>$branch</td>

                                <td>$type</td>


                                ";
                    ?>

                          <td>

                        <!-- action button-->
                        <div class='btn-group' role='group' aria-label='...'>
                            <a href="#edit<?php echo $admin_id;?>" data-toggle="modal"><button type='button' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></button></a>

                              <a href="#delete<?php echo $admin_id;?>" data-toggle="modal"><button type='button' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></button></a>

                        </div>
                    </td>







 <!--Edit admin Modal -->
        <div id="edit<?php echo $admin_id; ?>" class="modal fade" role="dialog">


            <form method="post" class="form-horizontal" role="form">
                <div class="modal-dialog modal-lg">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Edit Admin Info </h4>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">

                            <div class="form-group">


                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="admin">Name:</label><br>
                                    <input type="text" name="adminname" maxlength="25"value="<?php echo $name; ?>">

                                    </div>

                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="admin">Contact:</label><br>
                                    <input type="text" name="admincontact" maxlength="11"value="<?php echo $contact; ?>">

                                    </div>



                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="admin">Username:</label><br>
                                    <input type="text" name="adminusername" value="<?php echo $username; ?>" required>

                                    </div>

                                    <div class="col-sm-3" id="cb1">
                                    <label class="control-label col-sm-2" for="admin">Password:</label><br>
                                    <input type="password" name="adminpassword" minlength="6" required>

                                    </div>




                            </div>

                        </div>
                        <br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="edit_admin"><span class="glyphicon glyphicon-edit"></span>update</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> cancel</button>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>




  <!--Delete Modal -->
        <div id="delete<?php echo $admin_id; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <form method="post">
                    <!-- Modal content-->
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>

                        <div class="modal-body">
                            <input type="hidden" name="admin_id" value="<?php echo $admin_id; ?>">
                            <p>
                                <div class="alert alert-danger">Are you Sure you want Delete this Admin?<!-- <strong><?php echo $item_name; ?>?</strong> --></p>
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


 if(isset($_POST['edit_admin'])){


                            $admin_id = $_POST['admin_id'];
                            $adminname = stripslashes($_POST['adminname']);
                            $adminname = mysqli_real_escape_string($conn,$adminname);
                            $admincontact = stripslashes($_POST['admincontact']);
                            $admincontact = mysqli_real_escape_string($conn,$admincontact);
                            $adminusername = stripslashes($_POST['adminusername']);
                            $adminusername = mysqli_real_escape_string($conn,$adminusername);
                            $adminpassword = stripslashes($_POST['adminpassword']);
                            $adminpassword = mysqli_real_escape_string($conn,$adminpassword);
                            $hashadminpassword= hash('sha256', $adminpassword);

            $updatesql = "UPDATE clinicadmin SET
            name='$adminname',contact='$admincontact',username='$adminusername',password='$hashadminpassword'
            WHERE admin_id = '$admin_id'";
                            if ($conn->query($updatesql) === TRUE) {

                                echo '<script>window.location.href="p_adminlist.php"</script>';
                            } else {
                                echo "Error updating record: " . $conn->error;
                            }
                        }


     if(isset($_POST['delete'])){
                            // sql to delete a record

                            $admin_id2 = $_POST['admin_id'];

                                $deletesql = "DELETE FROM clinicadmin WHERE admin_id='$admin_id2' ";
                                if ($conn->query($deletesql) === TRUE) {

                                    echo '<script>window.location.href="p_adminlist.php"</script>';
                                } else {
                                    echo "Error deleting record: " . $conn->error;
                                }

                        }




                        }// while



                    }// if







                        //CREATE ADMIN
                        if(isset($_POST['create_admin']))
                        {




                            $admin_name = stripslashes($_POST['admin_name']);
                            $admin_name = mysqli_real_escape_string($conn,$admin_name);
                            $admin_contact = stripslashes($_POST['admin_contact']);
                            $admin_contact = mysqli_real_escape_string($conn,$admin_contact);
                            $username = stripslashes($_POST['username']);
                            $username = mysqli_real_escape_string($conn,$username);
                            $password = stripslashes($_POST['password']);
                            $password = mysqli_real_escape_string($conn,$password);
                            $hashapassword= hash('sha256', $password);
                            $admin_type = "admin";

                            // $admin_name = $_POST['admin_name'];
                            // $admin_contact = $_POST['admin_contact'];
                            // $branch = $_POST['branch'];
                            // $username = $_POST['username'];
                            // $password = $_POST['password'];



                            $sqladmin = "INSERT INTO clinicadmin (name,contact,branch,username,password,type)
                                        VALUES ('$admin_name','$admin_contact','$branch','$username','$hashapassword','$admin_type')";

                            if ($conn->query($sqladmin) === TRUE) {

                                echo '<script>window.location.href="p_adminlist.php"</script>';
                            }
                            else {
                                echo "Error creating admin account: ". $sqladmin . "<br>"  . $conn->error;
                            }
                        }


?>
            </tbody>
            </table>
            </div>




            <!--Add admin Modal -->
            <div id="add" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Create New Admin Account</h4>
                        </div>
                        <div class="modal-body">
                            <form method="post" class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="admin_name">Admin Name:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="admin_name" name="admin_name" placeholder="Name" autofocus required>
                                    </div>

                                    <label class="control-label col-sm-2" for="contact">Contact:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="admin_contact" name="admin_contact" placeholder="Contact#" >
                                    </div>
                                </div>

                                <div class="form-group">

                                    <label class="control-label col-sm-2" for="username">Username:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                    </div>



                                           <label class="control-label col-sm-2" for="password">Password:</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>



                                           <label class="control-label col-sm-2" for="branch">Branch:</label>
                                            <div class="col-sm-4">
                                            <br>

                                        <select name="branch">
                                        <option disabled selected value>--Select Branch--</option>
                                            <option value="Dasma-Bayan">Dasma-Bayan</option>
                                            <option value="Binakayan">Binakayan</option>
                                            <option value="Langkaan">Langkaan</option>
                                        </select>
                                    </div>



                                </div>


                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="create_admin"><span class="glyphicon glyphicon-plus"></span>Create Admin</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>

         </body>



    </html>
