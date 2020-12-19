<?php

class appointmentClass
{



// set appointment
     // public function userSetAppointment($patient_id,$branch,$sched_date,$sched_time,$reason,$status,$contact)
     public function userSetAppointment($patient_id,$branch,$sched_date,$sched_time,$reason,$status)
      {

          try{

               // to check database if there is already an existing email.
          $db = getDB();
          // can be able to set appointment on selected date but only on 1 branch.
          // $st = $db->prepare("SELECT patient_id FROM appointments WHERE  patient_id=:patient_id AND sched_date =:sched_date AND branch =:branch");
          // $st = $db->prepare("SELECT patient_id FROM appointments WHERE  patient_id=:patient_id AND sched_date =:sched_date ");
          $st = $db->prepare("SELECT patient_id FROM appointments WHERE  patient_id=:patient_id AND status='pending' OR  patient_id=:patient_id AND status='confirmed'  ");
          $st->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
          // $st->bindParam("sched_date", $sched_date,PDO::PARAM_STR);
          // $st->bindParam("branch", $branch,PDO::PARAM_STR);
          $st->execute();

          $count=$st->rowCount(); //  number of rows affected by the condition
          if($count<1) // if there is none... then proceed with insertion of datas to the database
          {




          $db = getDB();
          // $stmt = $db->prepare("INSERT INTO appointments(patient_id,branch,sched_date,sched_time,reason,status,contact)
          // VALUES (:patient_id,:branch,:sched_date,:sched_time,:reason,:status,:contact)");
          $stmt = $db->prepare("INSERT INTO appointments(patient_id,branch,sched_date,sched_time,reason,status)
          VALUES (:patient_id,:branch,:sched_date,:sched_time,:reason,:status)");


          $stmt->bindParam("patient_id", $patient_id,PDO::PARAM_STR) ;
          $stmt->bindParam("branch", $branch,PDO::PARAM_STR) ;
          $stmt->bindParam("sched_date", $sched_date,PDO::PARAM_STR) ;
          $stmt->bindParam("sched_time", $sched_time,PDO::PARAM_STR) ;
          $stmt->bindParam("reason", $reason,PDO::PARAM_STR) ;
          $stmt->bindParam("status", $status,PDO::PARAM_STR) ;
          // $stmt->bindParam("contact", $contact,PDO::PARAM_STR) ;
          $stmt->execute();

          $db = null;

          return true;

          }

          else
          {
          $db = null;
          return false;
          }

        }


        catch(PDOException $e) {
          // return false;
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }




     }








// inquiry contact form


public function inquirySubmit($contact_name,$contact_email,$contact_number,$subject,$message,$status)
     {
        try{
          $db = getDB();
          $stmt = $db->prepare("INSERT INTO inquiry(name,email,cp,subject,message,status)
          VALUES (:name,:email,:cp,:subject,:message,:status)");


          $stmt->bindParam("name", $contact_name,PDO::PARAM_INT);
          $stmt->bindParam("email", $contact_email,PDO::PARAM_INT);
          $stmt->bindParam("cp", $contact_number,PDO::PARAM_INT);
          $stmt->bindParam("subject", $subject,PDO::PARAM_INT);
          $stmt->bindParam("message", $message,PDO::PARAM_INT);
          $stmt->bindParam("status", $status,PDO::PARAM_INT);
          $stmt->execute();

          $db = null; // to close connection
          return true;


         }
         catch(PDOException $e) {
          // return false;
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          }


     }





































}


?>
