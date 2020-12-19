<?php
session_start();
/* Verifies registered user email, the link to this page
   is included in the register.php email message
*/
// include("dbconfig.php");


// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['ftoken']) && !empty($_GET['ftoken']))
{


    $email = $_GET['email'];
    $ftoken = $_GET['ftoken'];

    $_SESSION['email'] = $email;
    $_SESSION['ftoken'] = $ftoken;


        // $url=BASE_URL.'resetnewpass.php';
        // header("Location: $url");

         header("location: resetnewpass.php");

        }



else {
    $_SESSION['resetmessage'] = "Invalid parameters provided for password reset authentication!";
    header("location: reseterror.php");
}
?>



