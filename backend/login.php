<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Romano Dental Clinic</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>



	<div class="loginBox">
		<img src="image/sample.jpg" class="user">
		<h2>Fontanilla-Halili Admin Panel  </h2>
		<form method='post' action =''>
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="Password" name="password"  placeholder="password" autocomplete="off" required onmousedown="this.type='text'"
      onmouseup="this.type='password'" onmousemove="this.type='password' ">
			<input type="submit" name="login" value="Sign In">
		</form>
	</div>

</body>
</html>


<?php
require('dbconfig.php');

    // If form submitted, insert values into the database.
    if (isset($_POST['login'])){

        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);


       $hash_password = hash('sha256',$password);



$querystring="SELECT * FROM clinicadmin WHERE username='$username' AND password='$hash_password'";
  $query=mysqli_query($conn,$querystring);

  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);

  if ($num_rows){

              $adminid=$row['admin_id'];
              $adminname=$row['name'];
              $branch=$row['branch'];
              $type=$row['type'];

            $_SESSION['admin_id'] = $row['admin_id'];
            $_SESSION['admin_name'] = $row['name'];
            $_SESSION['type'] = $row['type'];
            $_SESSION['branch']=$row['branch'];

            if($type=='superadmin')
            {


            header("Location: index.php"); // Redirect user to index.php
            }

            if ($type=='admin')
            {


          if($branch == 'Dasma-Bayan')
            {

            header("Location: index2.php"); // Redirect user to index.php

            }


            if($branch == 'Binakayan')
            {


            header("Location: index3.php"); // Redirect user to index.php

            }

             if($branch == 'Langkaan')
             {


            header("Location: index4.php"); // Redirect user to index.php

              }


            } //else if
    }// if user exists

             else{

                    echo "<script>alert('please check inputs, try again!')</script>";

                }
              }// login post





?>
