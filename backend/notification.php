<?php
ob_start();
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>notification</title>
</head>
<body>

<?php

                     	$sql = "SELECT * FROM appointments WHERE status='active' ";

                    	$conn->query($sql);
                    	$active=mysqli_affected_rows($conn);



                    	$sql2 = "SELECT * FROM appointments WHERE status='pending' ";

                    	$conn->query($sql2);
                    	$pending=mysqli_affected_rows($conn);


                     	$sql3 = "SELECT * FROM appointments WHERE status='done' ";

                    	$conn->query($sql3);
                    	$done=mysqli_affected_rows($conn);




                     	$sql4 = "SELECT * FROM appointments WHERE status='cancelled' ";

                    	$conn->query($sql4);
                    	$cancelled=mysqli_affected_rows($conn);


                     	$sql5 = "SELECT * FROM inquiry WHERE status= 'unread*' ";

                    	$conn->query($sql5);
                    	$inquiries=mysqli_affected_rows($conn);



				// 		echo date("d-F-Y");
						$datetoday=date("d-F-Y");


                    	$sql6 = "SELECT * FROM appointments WHERE sched_date = '$datetoday' AND status='active' ";

                    	$conn->query($sql6);
                    	$todayapp=mysqli_affected_rows($conn);




                    ?>

                  <!--   <h2>Pending Appointments: <?php echo $pending;?></h2>
                    <h2>Active Appointments: <?php echo $active;?></h2>

                    <h2>Done Appointments: <?php echo $done;?></h2>
                    <h2>Cancelled Appointments: <?php echo $cancelled?></h2>

                    <h2>New Inquiries: <?php echo $inquiries?></h2>

                    <h2>Appointments Today: <?php echo $todayapp?></h2>
 -->


</body>
</html>