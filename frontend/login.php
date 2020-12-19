<?php
// require("dbconfig.php");
// require('class/userClass.php');
// $userClass = new userClass();
$errorMsgLogin = '';

//login


if (isset($_POST['loginSubmit']))
{

    $usernameEmail = $_POST['usernameEmail'];
    $password = $_POST['password'];

    if (strlen(trim($usernameEmail)) > 1 && strlen(trim($password)) > 1)
    { // to check string input lengths


        $uid = $userClass->userLogin($usernameEmail, $password); //  to check if inputs are correct
        if ($uid)
        {

            $uidv = $userClass->userVerify($usernameEmail); // to check if email used to login is verified.
            if ($uidv) // if verified proceed to home.php

            {

                $uidvg = $userClass->userGood($usernameEmail); // to check if email used to login is not blocked.
                if ($uidvg)
                {

                    $patient_id = $_SESSION['patient_id'];
                    //  $_SESSION['firstname'];
                    //  $_SESSION['lastname'];
                    //  $_SESSION['email'];
                    // $uidcheckapp = $userClass->userCheckAppoinment($usernameEmail); // to check if email used to login is verified.
                    //  if ($uidcheckapp){
                    header("Location: myaccountviewcurrent.php");

                    // }
                    //  else{
                    // header("Location: myaccount.php");


                    //  }



                }

                else
                {

                    $errorMsgLogin = "account has been blocked! please contact us for reactivation of account. thank you! ";

                }

                // header("Location: home.php");



            }

            else
            {

                // $url = BASE_URL . 'reglogin.php';
                //      header("Location: $url");
                $errorMsgLogin = "email is not yet verified! ";

            }

        }

        else
        {

            // $url = BASE_URL . 'reglogin.php';
            //                   header("Location: $url");
            $errorMsgLogin = "Please check login details.";

        }

    }

}

?>





<!DOCTYPE html>
<html>
<head>
<title>login</title>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->

<style>
    *:focus {
  outline: 0;
    }
    input{
        width:150px;
        height:20px;
        font-size:20px;
    }
    h3{

        font-size: 20px;
        font-weight:500;
    }
</style>
</head>


<body>



          <form action="" method="post" autocomplete="off">

            <div class="errorMsg" style="color:red; font-weight: bold;"><?php echo $errorMsgLogin; ?></div>

            <h3 style="position:absolute;right:450px;font-size:16px;">Email</h3>

            <input style="padding:3px 5px;width:178;height:20px;position:absolute;right:330px;top:30px;" class = "form-control" type="email" required autocomplete="off" name="usernameEmail"  placeholder="email" />

            <h3 style="position:absolute;right:250px;font-size:16px;">Password</h3>
            <input style="padding:3px 5px;width:178;height:20px;position:absolute;right:150px;top:30px;"  class = "form-control" name="password" minlength="6" type="password" placeholder="password" autocomplete="off" required onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' ">

          <!--   <input  class = "form-control" minlength="6" type="password" required autocomplete="off" name="password" placeholder="password"/> -->




          <!--forgot password link  -->
          <p style="font-size:15px;position:absolute;right:200px;top:70px;" class="forgot"><a style="color:white;" href="resetpass.php">Forgot Password?</a></p>

            <button style="width:130px;height:20px;position:absolute;right:10px;top:35px;" class="button button-block" name="loginSubmit" />Log In</button>




          </form>


</body>
</html>
