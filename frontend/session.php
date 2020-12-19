 <?php
if(!empty($_SESSION['patient_id']))
{
$session_patient_id=$_SESSION['patient_id'];



include('class/userClass.php');
$userClass = new userClass();
}

if(empty($session_patient_id))
{

           // header("Location: index.php");


$url=BASE_URL.'index.php';
header("Location: $url");
}


?>