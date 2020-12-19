<?php
ob_start();
/* Verifies registered user email, the link to this page
   is included in the register.php email message
*/
require 'dbconfig.php';
include('class/userClass.php');

session_start();

// Make sure email and hash variables aren't empty
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['token']) && !empty($_GET['token']))
{


    $email = $_GET['email'];
    $token = $_GET['token'];


        $db = getDB();
          $stmt = $db->prepare("SELECT patient_id FROM patients WHERE   email=:email AND  token=:token AND active =0 ");
          $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
          $stmt->bindParam("token", $token,PDO::PARAM_STR) ;
          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ); // extract data

          if($count > 0)
          {

          $stmt = $db->prepare("UPDATE patients SET active='1' WHERE  email=:email ");
          $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
          $stmt->execute();

         $_SESSION['active'] = 1;
         $_SESSION['regmessage'] = "Your account has been activated! ";
        // Set the user status to active (active = 1)
           $db = null;



        // $url=BASE_URL.'regsuccess.php';
        // header("Location: $url");

                   header("Location: regsuccess.php");



          }
          else
          {


             $_SESSION['regmessage'] = "Account has already been activated or the URL is invalid!";
                      //  $url = BASE_URL . 'regerror.php';
                      // header("Location: $url");

             header("location: regerror.php");

          }


        }



else {
    $_SESSION['regmessage'] = "Invalid parameters provided for account verification!";

    //  $url = BASE_URL . 'regerror.php';
    // header("Location: $url");
    header("location: regerror.php");
}
?>


