<?php

class userClass
{
      /* User Login */
     public function userLogin($usernameEmail,$password)
     {

          $db = getDB();
          $hash_password= hash('sha256', $password);
          $stmt = $db->prepare("SELECT patient_id FROM patients WHERE  email=:usernameEmail AND  password=:hash_password  ");



          $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;
          $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ); // extract data
          $db = null;
          if($count)
          {
                    $_SESSION['patient_id']=$data->patient_id; // to get user id row and put into session


                return true;


          }
          else
          {
               return false;
          }


     }


 /* User Login and verification */

   public function userVerify($usernameEmail)
     {

          $db = getDB();

          $stmt = $db->prepare("SELECT patient_id FROM patients WHERE  email=:usernameEmail AND active = 1  ");



          $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;

          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ); // extract data
          $db = null;
          if($count)
          {
                $_SESSION['patient_id']=$data->patient_id; // to get user id row and put into session


                return true;


          }
          else
          {
               return false;
          }

        }



  public function userGood($usernameEmail)
     {

          $db = getDB();

          $stmt = $db->prepare("SELECT patient_id FROM patients WHERE  email=:usernameEmail AND active = 1 AND status='good' ");



          $stmt->bindParam("usernameEmail", $usernameEmail,PDO::PARAM_STR) ;

          $stmt->execute();
          $count=$stmt->rowCount();
          $data=$stmt->fetch(PDO::FETCH_OBJ); // extract data
          $db = null;
          if($count)
          {
                $_SESSION['patient_id']=$data->patient_id; // to get user id row and put into session


                return true;


          }
          else
          {
               return false;
          }

        }









     /* User Registration */
  public function userRegistration($email,$password,$firstname,$middlename,$lastname,$gender,$dob,$age,$address,$contact,$token,$status)
     {


          try{
               // to check database if there is already an existing email.
          $db = getDB();
          $st = $db->prepare("SELECT patient_id FROM patients WHERE  email=:email");
          $st->bindParam("email", $email,PDO::PARAM_STR);
          $st->execute();

          $count=$st->rowCount(); //  number of rows affected by the condition
          if($count<1) // if there is none... then proceed with insertion of datas to the database
          {
          // $stmt = $db->prepare("INSERT INTO patients(username,password,email,name) VALUES (:username,:hash_password,:email,:name)");
          $stmt = $db->prepare("INSERT INTO patients(email,password,firstname,middlename,lastname,gender,dob,age,address,contact,token,status)
               VALUES (:email,:hash_password,:firstname,:middlename,:lastname,:gender,:dob,:age,:address,:contact,:token,:status)");
          $stmt->bindParam("email", $email,PDO::PARAM_STR) ;
          $hash_password= hash('sha256', $password);
          $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;

          $stmt->bindParam("firstname", $firstname,PDO::PARAM_STR) ;
          $stmt->bindParam("middlename", $middlename,PDO::PARAM_STR) ;
          $stmt->bindParam("lastname", $lastname,PDO::PARAM_STR) ;

          $stmt->bindParam("gender", $gender,PDO::PARAM_STR) ;
          $stmt->bindParam("dob", $dob,PDO::PARAM_STR) ;
          $stmt->bindParam("age", $age,PDO::PARAM_STR) ;
          $stmt->bindParam("address", $address,PDO::PARAM_STR) ;
          $stmt->bindParam("contact", $contact,PDO::PARAM_STR) ;
          $stmt->bindParam("status", $status,PDO::PARAM_STR) ;

          // $token = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890";
          // $token = str_shuffle($token);
          // $token = substr($token,0,10);

          $stmt->bindParam("token", $token,PDO::PARAM_STR) ;

          $stmt->execute();




          $patient_id=$db->lastInsertId();
          $db = null; // to close connection


          $_SESSION['patient_id']=$patient_id;

          return true;


          }
          else
          {
          $db = null;
          return false;
          }


          }
          catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }
     }



     /* User Details */
     public function userDetails($patient_id)
     {
        try{
          $db = getDB();
          $stmt = $db->prepare("SELECT * FROM patients WHERE patient_id=:patient_id");
          $stmt->bindParam("patient_id", $patient_id,PDO::PARAM_INT);
          $stmt->execute();
          $data = $stmt->fetch(PDO::FETCH_OBJ);

          return $data;
         }
         catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }


     }



     // public function userEmailCheck($email)
     // {
     //    try{
     //      $db = getDB();
     //      $stmt = $db->prepare("SELECT email FROM patients WHERE email=:email");
     //      $stmt->bindParam("email", $email,PDO::PARAM_INT);
     //      $stmt->execute();
     //      $data = $stmt->fetch(PDO::FETCH_OBJ);
     //      return $data;
     //     }
     //     catch(PDOException $e) {
     //      echo '{"error":{"text":'. $e->getMessage() .'}}';
     //      }




     public function userSendFtoken($email,$ftoken)
     {

          try{
               // to check database if there is already an existing email.
          $db = getDB();
          $st = $db->prepare("SELECT patient_id FROM patients WHERE  email=:email AND active = 1");
          $st->bindParam("email", $email,PDO::PARAM_STR);
          $st->execute();
          $count=$st->rowCount(); //  number of rows affected by the condition
          if($count) // if there is none... then proceed with insertion of datas to the database
          {
          // $stmt = $db->prepare("INSERT INTO patients(username,password,email,name) VALUES (:username,:hash_password,:email,:name)");

          $stmt = $db->prepare("UPDATE patients SET ftoken=:ftoken, ftoken_expire= DATE_ADD(NOW(),INTERVAL 60 MINUTE) WHERE  email=:email AND active = 1");

          $stmt->bindParam("ftoken", $ftoken,PDO::PARAM_STR) ;
          $stmt->bindParam("email", $email,PDO::PARAM_STR);
          $stmt->execute();


          $patient_id=$db->lastInsertId();
          $db = null; // to close connection


          $_SESSION['patient_id']=$patient_id;

          return true;


          }
          else
          {
          $db = null;
          return false;
          }


          }
          catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }




}



  public function userSetNewPassword($email,$password,$ftoken)
  {


          try{


          $db = getDB();
          $st = $db->prepare("SELECT patient_id FROM patients WHERE  email=:email AND  ftoken=:ftoken AND ftoken_expire > NOW() AND active = 1 ");
          $st->bindParam("email", $email,PDO::PARAM_STR);
          $st->bindParam("ftoken", $ftoken,PDO::PARAM_STR) ;
          $st->execute();

          $count=$st->rowCount(); //  number of rows affected by the condition
           if($count>0) // if there is none... then proceed with insertion of datas to the database
          {


          $stmt = $db->prepare("UPDATE patients SET password=:hash_password ,ftoken='' WHERE  email=:email ");
          $stmt->bindParam("email", $email,PDO::PARAM_STR) ;

          $hash_password= hash('sha256', $password);
          $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;

          $stmt->execute();
          $count=$stmt->rowCount(); //  number of rows affected by the condition


          return true;


          }

          else
          {
          $db = null;
          return false;
          }


          }


          catch(PDOException $e) {
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }








     }






  // public function userCheckAppoinment($email)
  // {


  //         try{



  //                 $db = getDB();

  //                       $sqljoin = $db->prepare("SELECT patients.email FROM patients INNER JOIN appointments ON patients.patient_id=appointments.patient_id WHERE  email=:email ");
  //                       $sqljoin->bindParam("email", $email,PDO::PARAM_STR);
  //                        // $sqljoin->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
  //                       $sqljoin->execute();
  //                       $count=$sqljoin->rowCount();
  //                       $db = null;

  //                           if ($count>0) {
  //                           // output data of each row

  //                             return true;
  //                           }

  //                           else{
  //                                  $db = null;
  //                                  return false;
  //                           }


  //         }

  //         catch(PDOException $e) {
  //         echo '{"error":{"text":'. $e->getMessage() .'}}';
  //         }








// }
















}
?>