<?php

include_once 'dbconfig.php';
include_once('session.php');


$userDetails=$userClass->userDetails($session_patient_id);
$patient_id =  $userDetails->patient_id;
$patient_name =  $userDetails->firstname;
$patient_email =  $userDetails->email;
	// $stmt->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;


if (count($_POST) > 0) {

$cpassword =$_POST['currentPassword'];
$hash_passwordc= hash('sha256', $cpassword);

$npassword =$_POST['newPassword'];

  $db = getDB();
  $st = $db->prepare("SELECT * FROM patients WHERE  patient_id=:patient_id");
  $st->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
  $st->execute();
  $rows =$st->fetchAll(PDO::FETCH_ASSOC);
  foreach ($rows as $row){
  // echo $row['contact'];
  }

    if ($hash_passwordc == $row["password"]) {
  $db = getDB();
  $st2 = $db->prepare("UPDATE patients SET password=:hash_password WHERE  patient_id=:patient_id");
  $st2->bindParam("patient_id", $patient_id,PDO::PARAM_STR);
  $hash_password= hash('sha256', $npassword);
  $st2->bindParam("hash_password", $hash_password,PDO::PARAM_STR) ;
  $st2success=$st2->execute();

  if($st2success){



                require_once 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';

                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');


                // $mail->isHTML(true);

                $mail->addAddress($patient_email);
                $mail->Subject  = 'Password Changed ( fontanillahalilidental.com )';
                $mail->Body = ' Hello ' . $patient_name . ', Your password was recently changed.';


                                if (!$mail->send()) {

                                          $_SESSION['message'] =  'Message was not sent.  Mailer error:' . $mail->ErrorInfo;


                                }
                                else {

                                }




    $message = "Password Changed";

echo "<script>alert('password updated!')</script>";

    }
    }
    else{
        $message = "Current Password is not correct";
    }
}
?>

<html>
<head>

<link rel="stylesheet" type="text/css" href="myaccountform.css" />
<script src="js/myaccountscript.js"></script>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
}
return output;
}
</script>

</head>

<body>

    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div style="width: 60%;">

            <div class="message"><?php if(isset($message)) { echo $message; } ?></div>

                    <h2 style="font-size:30px;padding:20px 0 0 20px;">Change Password</h2>
                
                
                    <label style="font-size:20px;margin:30px 0 0px 20px;float:left;">Current Password:</label>
                    <input style="width:270px;border-bottom:1px solid #000;margin:30px 30px 30px;float:left;" type="password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' "
                        name="currentPassword" class="txtField" /><br><span style="float:left;"
                        id="currentPassword" class="required" required></span><br>
                
                
                    <label style="font-size:20px;margin:30px 0 0px 20px;float:left">New Password:</label>
                    <input style="width:270px;border-bottom:1px solid #000;margin:30px 0 0px 55px;float:left;" type="password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' "
                    	name="newPassword"
                        class="txtField" /><span id="newPassword"
                        class="required" required></span>
                
                <label style="font-size:20px;margin:30px 0px 0px 0px;padding:0px;float:left;position:relative;left:-128px;">Confirm Password:</label>
                <input style="width:270px;border-bottom:1px solid #000;margin:30px 0 0px 0px;padding-right:0px;float:left;position:relative;left:-100px;" type="password" onmousedown="this.type='text'" onmouseup="this.type='password'" onmousemove="this.type='password' "
                 name="confirmPassword"
                    class="txtField" /><span id="confirmPassword" style="float:left;"
                    class="required" required></span>

      <input style="margin:50px 0 0 30px;width:300px;height: 35px;
      margin-left: 31%;
      margin-top: 10%;
      cursor: pointer;
      font-size: 20px;
      background: #4db1e2;
      color: white;" type="submit" name="update" type="submit" name="submit"
                        value="Submit" class="btnSubmit">
                




        </div>

    </form>




</body>
</html>
