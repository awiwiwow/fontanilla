<?php
include_once('dbconfig.php');
include_once('session.php');
include('class/appointmentClass.php');

$setAppointment = new appointmentClass();
$userDetails=$userClass->userDetails($session_patient_id);


/* code for data insert */
if(isset($_POST['sub']))
{                           //getting the name in the forms and making it into variable

     if(isset($_POST['schedtime'])){


      $patient_id =  $userDetails->patient_id;
      $email =  $userDetails->email;
       // $contact= $userDetails->contact;
     // $fname =  $userDetails->firstname;
     // $lname =  $userDetails->lastname;
     // $patient_name = $fname . ' ' . $lname;


     $branch = 'Binakayan';
     $sched_date = $_POST['date'];
     $sched_time = $_POST['schedtime'];
     $reason = $_POST['reason'];
     $status = 'pending';





$setsuccess=$setAppointment->userSetAppointment($patient_id,$branch,$sched_date,$sched_time,$reason,$status);


            if ($setsuccess )
            {


                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';
                $mail->isHTML(true);
                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment: Pending - Binakayan Branch( fontanillahalilidental.com )';
                $mail->Body = '
  <html lang="en" dir="ltr">
  <body>

    <div class="card">
      
      <h1>Fontanilla Halili Dental</h1>
      <h4> We have received your request. you will receive an SMS and an Email once your chosen schedule of date and time has been confirmed thank you</h4>
    </div>


  </body>
</html>';



                                if (!$mail->send()) {

                                          echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";


                                }
                                else {
                                    // echo 'Message sent!';


                                         echo "<script>alert('appointment has been set! please check your email for further updates regarding your chosen schedule thank you');
                                             window.location.href='myaccountstep3.php'</script>";
                               // $url = BASE_URL . 'home.php';
                               //       header("Location: $url");
                                }


                  //   echo "<script>alert('appointment has been set');
                  // window.location.href='myaccountviewcurrent.php'</script>";
                               // $url = BASE_URL . 'home.php';
                               //       header("Location: $url");
            }

            else
            {
              // echo "<script>alert('you already have an appointment on this date!')</script>";
              //              // $url = BASE_URL . 'home.php';
                           //           header("Location: $url");
               echo "<script>alert('sorry but you cannot set another appointment because you already have an active appointment! ')</script>";
            }

          }

          else{

                 echo "<script>alert('please select a date with available time slot!')</script>";

          }


}



            /* datepicker limit checker */

            $db = getDB();

            $stmt = $db->prepare("SELECT sched_date FROM appointments WHERE branch = 'Binakayan' AND status='pending' OR branch = 'Binakayan' AND status = 'confirmed' OR branch = 'Binakayan' AND status = 'holiday' GROUP BY sched_date
            HAVING ( COUNT(sched_date) = 8 )  ");

            // $stmt = $db->prepare("SELECT scheddate FROM appointment GROUP BY scheddate
            // HAVING ( COUNT(scheddate) >=5 )  ");

            $stmt->execute();
            $count=$stmt->rowCount();
//
          if($count=7)
          {

           $data= $stmt->fetchAll(PDO::FETCH_COLUMN);

            $db = null;
           // if($count>0)
          if($data>0)
          {
               $json_array=$data; // to get user id row and put into session
               // $jarray = array( array('' => , ););

            //   echo '<pre>';
            // print_r($json_array);
            // echo '<pre>';


            // $jarray = $json_array;


              $jsonencode= json_encode(array_values($json_array));  // array of dates that already existed in the db for 5 times

              // $jsonencode= json_encode($jarray);  // array of dates that already existed in the db for 5 times

              // echo $jsonencode;

          }



        }






?>




<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


  <title >Set Appointment - Binakayan Branch</title>
  <style>
    .datez{
      width: 50%;
      height: 200px;
      float: left;
    }
    .timez{
      width: 50%;
      height: 200px;
      float: left;
    }
    h4 i{
      text-decoration: underline;
      color:blue;
    }

  </style>

</head>
<body style="font-family: 'Montserrat', sans-serif;">

<div>

    <!--      Left Part             -->
    <div class="account-info-con2">

    <div class="new-accs">

       <!--    <div class="welcome"> <h2>Welcome <?php echo $userDetails->firstname;?></h2> </div> -->

  <!--          // echo $patient_id =  $userDetails->patient_id;

           //        $fname =  $userDetails->firstname;
           //        $lname =  $userDetails->lastname;
           //        echo $patient_name = $fname . ' ' . $lname;

 -->





    </div>
    </div>
    <!--      Left Part             -->

<div class="account-action-con2">

<form method="post" action=" "   class="fotm" name="appointmentForm" onsubmit="return validateForm()" >


<div class="datez">


                <h4 style="margin:0 0 30px 70px;">Select Date of Appointment </h4>

    <!-- date picker js-->

    <link rel="stylesheet" type="text/css" href="datejs/jquery-ui.css">
     <link rel="stylesheet" type="text/css" href="theme/theme.css">

    <script src="datejs/jquery.js"></script>
    <script src="datejs/jquery-ui.js"></script>


        <input style="margin:10px 10px 50px 90px;" id="datepicker" name="date" class='dp' readonly='true'  placeholder="date-month-year" required>

<style type="text/css">#datepicker{
background-image:url(icons/calendar.gif);
background-repeat: no-repeat;
background-position: 150px 1px;
}
</style>



        <script type='text/javascript'>

//to load the j query when the whole page is already done loading.
            $(document).ready(function(){




                // var unavailableDates = ["18-9-2018","19-9-2018","20-9-2018","21-9-2018"];
                 var unavailableDates = <?php echo $jsonencode; ?>; // array of unavailable dates from datelimit checker conditon above

                console.log(unavailableDates);






                     var month = new Array();
                      month[1] = "January";
                      month[2] = "February";
                      month[3] = "March";
                      month[4] = "April";
                      month[5] = "May";
                      month[6] = "June";
                      month[7] = "July";
                      month[8] = "August";
                      month[9] = "September";
                      month[10] = "October";
                      month[11] = "November";
                      month[12] = "December";


                    function unavailable(date)
                    {



                    // ymd = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();

                    // +1  because array starts at 0
                    // dmy = date.getDate() + "-" + (month[date.getMonth() + 1]) + "-" + date.getFullYear();
                     dmy = ('0' +date.getDate()).slice(-2) + "-" + (month[date.getMonth() + 1]) + "-" + date.getFullYear();
                    // console.log(dmy);





                    if ($.inArray(dmy, unavailableDates) != -1) {
                        return [false, "" , "unAvailable"];
                    }

                    else
                    {
                        return disabledays(date); //
                    }



                  //  function to disable sundays
                        function disabledays(date) {

                        var day = date.getDay();
                        return [(day != 0), ''];


                        }


                    }





                    $('#datepicker').datepicker({

                        dateFormat: 'dd-MM-yy',
                        //mindate = start of date  from current
                        minDate: 2, //
                        // to disable specific date unavailable function is called
                        beforeShowDay: unavailable, // calls the function unavailable dates



            onSelect:function(date,instance)
            {

            // alert ('you have selected ' + date + ' as the Date of your Appointment! '); //Latest selected date will give the alert.

            $.post("timelist_b2.php",
            { // URL TO THE PAGE YOU WANT THE DATA TO BE PASSED ON
            datepicked:date // now you will get the selected date to `date` in your post // VALUE TO BE PASSED  post variable name and value from PARAMETER DATETEXT
            },



            function(data)
            {
            // $('.timecontainer').html('');$('#timelist').html(date); //call back to display in a div with an id timelist
             $('#timelist2').html(data); //call back to display in a div with an id timelist
            });




           enableDisableBtn();

            },


                    });






               });







        </script>


        <h4 style="margin:0 0 10px 70px;">Reason for visit</h4>

        <select style="margin:10px 10px 50px 90px;" name="reason" id = "reason">
        <?php


        $db = getDB();
        $query2 = $db->prepare("SELECT * FROM procedures ");
        $query2->execute();// Execute (run) the query

            while($row=$query2->fetch(PDO::FETCH_ASSOC)){
                echo '<option value="'.$row['procedure_name'].'">'.$row['procedure_name'].'</option>';
                //print_r($row);
            }


        ?>
         </select>
    </div>

<div class="timez">




<!--this is where the result or call back function will display.inside the div caleld timelist-->
<div id="timelist2">




</div>


</div>












  <input style="float:left;margin:5% 0 0 25%;" type="checkbox" name="terms" value="Yes" required /><h4 style="margin:5% 0 0 10px;float:left;">I agree with the <i>Terms and Condition</i></h4>



<button style="margin:30px 0 0 27%;" class="submit-button" type="submit" name="sub" id="sub" value="Submit" >Set an Appointment</button>

    </div>




</form>
</div>

  <!--     <br>
      <br>
      <a href="home.php"><button>
        Back
      </button></a>
 -->


<script>




var enableDisableBtn = function(){
    var dateVal = $('#datepicker').val().trim();
    var disableBtn =  dateVal.length == 0 ;
    $('#sub').prop('disabled',disableBtn);
}


//Call initially
enableDisableBtn();




</script>

</body>
</html>
