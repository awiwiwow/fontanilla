<?php
include 'dbconfig.php';

if (isset($_POST['datepicked']))
{
    $datepicked = $_POST['datepicked'];
    // echo $datepicked;
    try
    {

        $db = getDB();
        $stmt = $db->prepare("SELECT sched_time FROM appointments  WHERE sched_date=:datepicked AND branch='Dasma-Bayan' AND status ='pending' OR sched_date=:datepicked AND branch='Dasma-Bayan' AND status ='confirmed' ");
        $stmt->bindParam("datepicked", $datepicked, PDO::PARAM_STR);
        $stmt->execute();

        $count = $stmt->rowCount();

        if ($count > 0)
        {
            $result = $stmt->fetchAll(PDO::FETCH_COLUMN);
            // $result['sched_time'];
            // echo  $existingtime = $result['sched_time'];
            $existingtime = $result;

            // echo $JSONStringexistingtime = json_encode(array_values($existingtime));
            $JSONStringexistingtime = json_encode($existingtime);

            // echo sizeof($existingtime);
            // echo count($existingtime);


            // echo  $JSONStringexistingtime = json_encode($existingtime);

        }

    }

    catch(PDOException $e)
    {
        echo '{"error":{"text":' . $e->getMessage() . '}}';
    }

}

?>
<script type="text/javascript">

$(document).ready(function(){



        var et = <?php echo $JSONStringexistingtime; ?>;

        // console.log(et)

        var arrayObjectcount = Object.keys(et).length;
        console.log(et);

        console.log(arrayObjectcount); // count of objects inside the array




        var t1 = "9am-10am";
        var t2 = "10am-11am";
        var t3 = "11am-12pm";
        var t4 = "12pm-1pm";
        var t5 = "1pm-2pm";
        var t6 = "2pm-3pm";
        var t7 = "3pm-4pm";
        var t8 = "4pm-5pm";


        // if (jQuery.inArray(t1, et) != -1)

          if(jQuery.inArray("9am-10am", et) != -1 )
        {
          $("input[type=radio][value="+ t1 +"]").prop("disabled",true);
          $('#status1').html('unavailable!');
        }



          if(jQuery.inArray("10am-11am", et)!= -1 )
        {
          $("input[type=radio][value="+ t2 +"]").prop("disabled",true);
          $('#status2').html('unavailable!');
        }




          if(jQuery.inArray("11am-12pm", et)!= -1 )
        {
          $("input[type=radio][value="+ t3 +"]").prop("disabled",true);
          $('#status3').html('unavailable!');
        }




          if(jQuery.inArray("12pm-1pm", et)!= -1)
        {
          $("input[type=radio][value="+ t4 +"]").prop("disabled",true);
          $('#status4').html('unavailable!');
        }



          if(jQuery.inArray("1pm-2pm", et)!= -1 )
        {
          $("input[type=radio][value="+ t5 +"]").prop("disabled",true);
          $('#status5').html('unavailable!');
        }



         if(jQuery.inArray("2pm-3pm", et)!= -1)
        {
          $("input[type=radio][value="+ t6 +"]").prop("disabled",true);
          $('#status6').html('unavailable!');
        }


         if(jQuery.inArray("3pm-4pm", et)!= -1 )
        {
          $("input[type=radio][value="+ t7 +"]").prop("disabled",true);
          $('#status7').html('unavailable!');
        }

         if(jQuery.inArray("4pm-5pm", et)!= -1 )
        {
          $("input[type=radio][value="+ t8 +"]").prop("disabled",true);
          $('#status8').html('unavailable!');
        }




        // $('.schedtime').on('change', function() {
        //   $('#timeselected').val( this.value );
        // });






               });


</script>


<link rel="stylesheet" type="text/css" href="css/timeslot.css">

<div class="timecontainer">
  <label>Select Time :</label><br/>

  <span> <input type="radio" name="schedtime" id="schedtime" value="9am-10am" class="schedtime" required  >
  <span>9:00am-10:00am</span>  <span id='status1'><span id='astatus1'>available!</span> </span>  <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="10am-11am" class="schedtime" >
  <span>10:00am-11:00am</span>  <span id='status2'><span id='astatus2'>available!</span> </span>  <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="11am-12pm" class="schedtime" >
  <span>11:00am-12:00pm</span>  <span id='status3' ><span id='astatus3'>available!</span> </span>  <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="12pm-1pm" class="schedtime" >
  <span>12:00pm-1:00pm</span>  <span id='status4'><span id='astatus4'>available!</span></span>   <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="1pm-2pm" class="schedtime" >
  <span>1:00pm-2:00pm</span>  <span id='status5'><span id='astatus5'>available!</span> </span>  <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="2pm-3pm" class="schedtime" >
  <span>2:00pm-3:00pm</span>  <span id='status6'><span id='astatus6'>available!</span> </span>   <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="3pm-4pm" class="schedtime" >
  <span>3:00pm-4:00pm</span> <span id='status7'><span id='astatus7'>available!</span> </span>   <br/>

  </span>

  <span><input type="radio" name="schedtime" id="schedtime" value="4pm-5pm" class="schedtime" >
  <span>4:00pm-5:00pm</span> <span id='status8'><span id='astatus8'>available!</span> </span>   <br/>

  </span>
<!-- <input type="text" name="timeselected" id="timeselected" /> -->


</div>
