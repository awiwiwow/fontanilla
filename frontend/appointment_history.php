<?php
include_once("dbconfig.php");
include_once('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Appointment History</title>
  <link rel="stylesheet" type="text/css" href="css/manualtbl.css">
</head>
<body>

<table class="restbl" width="100%" border="1" cellpadding="15" align="center">



                                    <tr class="tablehead">
                                     <th>Reference#</th>
                                     <th>Date</th>
                                     <th>Time</th>
                                     <th>Branch</th>
                                     <th>Reason</th>
                                     <th>Status</th>
                                     <th>Dentist</th>


                                     </tr>

<?php
// include_once 'app_cancel.php';
// This first query is just to get the total count of rows
$userDetails=$userClass->userDetails($session_patient_id);

$db = getDB();

$patient_id =  $userDetails->patient_id;


 $stmt = $db->prepare("SELECT COUNT(appointment_id) FROM appointments  WHERE  patient_id =:patient_id AND status='cancelled' OR patient_id =:patient_id AND status='done' OR patient_id =:patient_id AND status='declined'");
  $stmt->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
   $stmt->execute();
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row = $stmt->fetchColumn();
    // $row = $stmt->rowCount();

       // $count=$stmt->rowCount()
// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// foreach ($rows as $row) {
//     echo $row['username'];
// }

// Here we have the total row count

$rows = $row;

// This is the number of results we want displayed per page
$page_rows = 8;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
    $last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) {
    $pagenum = 1;
} else if ($pagenum > $last) {
    $pagenum = $last;
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit


 $stmt2 = $db->prepare("SELECT * FROM appointments WHERE  patient_id =:patient_id ORDER BY patient_id DESC $limit");
  $stmt2->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
   $stmt2->execute();


// This shows the user what page they are on, and the total number of pages
$textline1 = " Appointment History (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
    /* First we check if we are on page one. If we are then we don't need a link to
       the previous page or the first page so we do nothing. If we aren't then we
       generate links to the first page, and to the previous page. */
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
        // Render clickable number links that should appear on the left of the target page number
        for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
            }
        }
    }
    // Render the target page number, but without it being a link
    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
    // Render clickable number links that should appear on the right of the target page number
    for($i = $pagenum+1; $i <= $last; $i++){
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
        if($i >= $pagenum+4){
            break;
        }
    }
    // This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}



                                     $patient_id =  $userDetails->patient_id;


$stmt3 = $db->prepare("SELECT * FROM appointments WHERE  patient_id =:patient_id AND status='cancelled' OR patient_id =:patient_id AND status='done' OR patient_id =:patient_id AND status='declined' ORDER BY appointment_id DESC $limit");
$stmt3->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
$stmt3->execute();


while($row =$stmt3->fetch(PDO::FETCH_ASSOC))
  // foreach ($rows as $row)

{

 ?>

    <tr>


                                        <td >A-<?php  echo $row['appointment_id'];  ?></td>
                                        <td ><?php  echo $row['sched_date'];  ?></td>
                                        <td><?php  echo $row['sched_time'];  ?></td>
                                        <td><?php  echo $row['branch'];  ?></td>
                                        <td><?php  echo $row['reason'];  ?></td>
                                        <td><?php  echo $row['status'];  ?></td>
                                        <td><?php  echo $row['dr_name'];  ?></td>


    </tr>
    <?php
}
     $db = null;
?>


<div>
  <h2><?php echo $textline1; ?></h2>
  <p style="font-family:'didact gothic',sans-serif"><?php echo $textline2; ?></p>

  <div id="pagination_controls" style="font-family:'didact gothic',sans-serif";><?php echo $paginationCtrls; ?></div>
</div>


</table>


</body>
</html>


