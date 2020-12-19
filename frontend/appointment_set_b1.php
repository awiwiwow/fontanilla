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
     // $contact=      $userDetails->contact;
     // $fname =  $userDetails->firstname;
     // $lname =  $userDetails->lastname;
     // $patient_name = $fname . ' ' . $lname;

     $branch = 'Dasma-Bayan';
     $sched_date = $_POST['date'];
     $sched_time = $_POST['schedtime'];
     $reason = $_POST['reason'];
     $status = 'pending';





// $setsuccess=$setAppointment->userSetAppointment($patient_id,$branch,$sched_date,$sched_time,$reason,$status,$contact);

$setsuccess=$setAppointment->userSetAppointment($patient_id,$branch,$sched_date,$sched_time,$reason,$status);

            if ($setsuccess )
            {



                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';
                $mail->isHTML(true);
                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';
               
                // $mail->AddEmbeddedImage('image/FontanillaLogo.png','logo_2u');
                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'Appointment:Pending - Dasma-Bayan Branch( fontanillahalilidental.com )';
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



            }

            else
            {
              // echo "<script>alert('you already have an appointment on this date!')</script>";
               echo "<script>alert('sorry but you cannot set another appointment because you already have an active appointment! ')</script>";
                           // $url = BASE_URL . 'home.php';
                           //           header("Location: $url");
            }

          }

          else{

                 echo "<script>alert('please select a date with available time slot!')</script>";

          }


}



            /* datepicker limit checker */

            $db = getDB();

            $stmt = $db->prepare("SELECT sched_date FROM appointments WHERE branch = 'Dasma-Bayan' AND status='pending' OR branch = 'Dasma-Bayan' AND status = 'confirmed' OR branch = 'Dasma-Bayan' AND status = 'holiday' GROUP BY sched_date
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

  <title>Set Appointment - Dasma-Bayan Branch</title>
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
<body style="font-family: 'Montserrat', sans-serif;" >

<div>



    <!--      Left Part             -->
    <div class="account-info-con2">

    <div class="new-accs">

       <!--    <div class="welcome"> <h2>Welcome <?php echo $userDetails->firstname;  ?></h2>
 -->
          <!--  echo $patient_id =  $userDetails->patient_id;

                $fname =  $userDetails->firstname;
                 $lname =  $userDetails->lastname;
               echo $patient_name = $fname . ' ' . $lname;
 -->
        </div>

       <!--?php include('options/dtclock.php');  ?-->




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


        <input style="margin:10px 10px 50px 90px;" type='text' id="datepicker" name="date" class='dp' readonly='true'  placeholder="date-month-year"  required >

<style type="text/css">#datepicker{
background-image:url(icons/calendar.gif);
background-repeat: no-repeat;
background-position: 150px 1px;
}


.event a {
    background-color: red !important;
    background-image :none !important;
    color: #ffffff !important;
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


                    // var highlight = unavailableDates[date];

                    // ymd = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + date.getDate();

                    // +1  because array starts at 0
                    // dmy = date.getDate() + "-" + (month[date.getMonth() + 1]) + "-" + date.getFullYear();

                   dmy = ('0' +date.getDate()).slice(-2) + "-" + (month[date.getMonth() + 1]) + "-" + date.getFullYear();



                    if ($.inArray(dmy, unavailableDates) == -1 )
                    {                                              // returns -1 if match not found.
                                                                  // meaning there is no match in array.
                                                                  // hence available
                       return [true, ""];

                    }



                    // if ($.inArray(dmy, unavailableDates) != -1 )
                    // {

                    //   return [true, "event", highlight ]; // if array has a value
                    // }



                    else{

                         return [false, "ud", "unavailable"];
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


            $.post("timelist_b1.php",
            { // URL TO THE PAGE YOU WANT THE DATA TO BE PASSED ON
            datepicked:date // now you will get the selected date to `date` in your post // VALUE TO BE PASSED  post variable name and value from PARAMETER DATETEXT
            },

            function(data)
            {
            // $('.timecontainer').html('');$('#timelist').html(date); //call back to display in a div with an id timelist
             $('#timelist1').html(data); //call back to display in a div with an id timelist
            });

        //    $.ajax({
        //     type: "POST",
        //     async: true,
        //     url: "timelist_b1.php",
        //     data: {
        //         datepicked:date

        //     },
        //     cache: false,
        //     dataType: "",
        //     success: function(data){
        //        $('#timelist1').html(data);
        //         //[snip]
        //     }
        // });







            enableDisableBtn();




// $.ajax({
//   type: "POST",
//   url: "/ajax",
//   data: {"data": json}
// })



            },










                    });








var enableDisableBtn = function(){
    var dateVal = $('#datepicker').val().trim();
    var disableBtn =  dateVal.length == 0 ;
    $('#sub').prop('disabled',disableBtn);
}


// Call initially
enableDisableBtn();




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

<div id="timelist1">



</div>

<!--
<!-- <input name="schedtime" id="timepicker" type="text" data-time-format="h:i A" required="" /> -->
<!-- <select name="schedtime" required>
<option disabled selected value> -- select hour -- </option>
<option>10: am</option>
<option>11 am</option>
<option>12 pm</option>
<option>1 pm</option>
<option>2 pm</option>
<option>3 pm</option>
<option>4 pm</option>
<option>5 pm</option>
<option>6 pm</option>
<option>7 pm</option>
<option>8 pm</option>
</select>  -->


   <!--
  <tr><td>
<h4>Reason for visit</h4>
<select name="reason" required>
<option disabled selected value> -- select service -- </option>
<option>Consultation</option>
<option>Extraction(bunot)</option>
<option>Restoration(pasta)</option>
<option>Cleaning</option>
<option>Braces</option>
<option>Dental Implants</option>
<option>Fixed Bridge</option>
</select>

</td></tr>

 -->




<!--
<h4>Reason for visit</h4>

<select name="reason" id = "reason">  -->

<!--
// $db = getDB();

//   $query1 = $db->prepare("SELECT * FROM appointments WHERE patient_id=:patient_id AND status='pending' OR
//     patient_id=:patient_id AND status='accepted' OR patient_id=:patient_id AND status='done' ");
//   $query1->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
//   $query1->execute();

//           $data=$query1->fetch(PDO::FETCH_OBJ); // extract data
//           $db = null;
//           if($data==0)
//           {

// $db = getDB();
// $query2 = $db->prepare("SELECT * FROM procedures where procedure_name = 'Consultation'");
// $query2->execute();// Execute (run) the query

//     while($row=$query2->fetch(PDO::FETCH_ASSOC)){
//         echo '<option value="'.$row['procedure_name'].'">'.$row['procedure_name'].'</option>';
//         //print_r($row);
//     }

//   }

//   else{
//     $db = getDB();
// $query2 = $db->prepare("SELECT * FROM procedures  ");
// $query2->execute();// Execute (run) the query

//     while($row=$query2->fetch(PDO::FETCH_ASSOC)){
//         echo '<option value="'.$row['procedure_name'].'">'.$row['procedure_name'].'</option>';
//         //print_r($row);
//     }

//   }
 -->


 <!-- </select> -->




</div>





<!--

// $db = getDB();

//   $query1 = $db->prepare("SELECT * FROM appointments WHERE patient_id=:patient_id AND status='pending' OR
//     patient_id=:patient_id AND status='accepted' OR patient_id=:patient_id AND status='done' ");
//   $query1->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
//   $query1->execute();

//           $data=$query1->fetch(PDO::FETCH_OBJ); // extract data
//           $db = null;
//           if($data)
//           {


// $db = getDB();
// $query2 = $db->prepare("SELECT * FROM procedures ");
// $query2->execute();// Execute (run) the query


//     echo "<select name='reason'>";

//     while($row=$query2->fetch(PDO::FETCH_ASSOC)){
//         echo '<option value="'.$row['procedure_name'].'">'.$row['procedure_name'].'</option>';

//         //print_r($row);
//     }
//         echo "</select>";

//   }

//   else{

// $db = getDB();
// $query2 = $db->prepare("SELECT * FROM procedures WHERE procedure_name = 'Consultation'  ");
// $query2->execute();// Execute (run) the query




//       echo "<select name='reason'>";
//       while($row=$query2->fetch(PDO::FETCH_ASSOC)){
//         echo '<option value="'.$row['procedure_name'].'">'.$row['procedure_name'].'</option>';
//       //     echo "</select>n";
//         //print_r($row);
//     }


//   }
 -->

















  <input style="float:left;margin:5% 0 0 25%;" type="checkbox" name="terms" value="Yes" required /><h4 style="margin:5% 0 0 10px;float:left;">I agree with the <i>Terms and Condition</i></h4>
<!--p>by using our book an appointment feature, kindly note that the details and preferences you provided
do not guarantee your appointment. you will receive an SMS confirmation regarding your slot on your chosen date of schedule. cancellation or rescheduling of appointment must be done atleast a day ahead of time from your confirmed appointment. please avoid cancelling your chosen appointment.
    frequent cancellation of appointment will get your account blocked. your chosen time slot is allocated specially for you. please be on time.
failure to comply in the given time and date you have chosen will consider
your appointment cancelled, but if you ever encounter a delay due to heavy traffic or other personal reasons.
please give us an update via call or text message. we will do our best to accomodate you in the best way possible. thank you!</p>
<p>i agree with the terms and conditions!</p-->


<button style="margin:30px 0 0 27%;" class="submit-button" type="submit" name="sub" id="sub" value="Submit" >Set an Appointment</button>




</form>
</div>
<!--
      <br>
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


// Call initially
enableDisableBtn();



</script>


 <script type="text/javascript">

 </script>

</body>
</html>
