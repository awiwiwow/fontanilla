<?php
include_once ('dbconfig.php');
include_once ('session.php');

$userDetails = $userClass->userDetails($session_patient_id);
$patient_id = $userDetails->patient_id;

$db = getDB();
$st = $db->prepare("SELECT * FROM patients WHERE  patient_id=:patient_id");
$st->bindParam("patient_id", $patient_id, PDO::PARAM_STR);
$st->execute();
$rows = $st->fetchAll(PDO::FETCH_ASSOC);
foreach ($rows as $row)
{
    // echo $row['contact'];

}
?>

<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
<form method="post" class="fotm" style="font-family: 'Didact Gothic', sans-serif;">


        <h2 style="font-size:30px;padding:20px 0 0 20px;">Update Info</h2>

  <label style="font-size:20px;margin:30px 0 0px 20px" >Firstname: </label>
  <input style="width:300px;border-bottom:1px solid #000;margin:30px 0 20px 30px;" type="text" name="firstname" value="<?php echo $row['firstname']; ?>" maxlength="20" required/>
   <br>
  <label style="font-size:20px;margin:30px 0 0px 20px;">Middlename: </label>
  <input style="width:300px;border-bottom:1px solid #000;margin:30px 0 0px 30px" type="text" name="middlename" value="<?php echo $row['middlename']; ?>" maxlength="20" required/>
<br>
  <label style="font-size:20px;margin:30px 0 0px 20px">Lastname: </label>
  <input style="width:300px;border-bottom:1px solid #000;margin:30px 0 20px 30px" type="text" name="lastname" value="<?php echo $row['lastname']; ?>" maxlength="20" required/>
<br>
  <label style="font-size:20px;margin:30px 0 0px 20px">Address: </label>
  <input style="width:300px;border-bottom:1px solid #000;margin:30px 0 20px 30px" type="text" name="address" value="<?php echo $row['address']; ?>" maxlength="60" required/>
<br>
  <label style="font-size:20px;margin:30px 0 0px 20px">Contact no: </label>
<!--   <td><input type="integer" name="contact" value="<?php echo $row['contact']; ?>" maxlength="11" required/></td></tr> -->

<input style="width:300px;border-bottom:1px solid #000;;margin:30px 0 0px 20px;" type="integer" required autocomplete="off"  name='contact' id ="contact"  maxlength="11" value="<?php echo $row['contact']; ?>" onkeypress="return isNumber(event)" />
   <button style="margin:50px 0 0 30px;" type="submit" name="update" >&nbsp;Update</button>

</form>







<?php
if (isset($_POST['update']))
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $stmt = $db->prepare("UPDATE patients SET firstname=:firstname, middlename=:middlename, lastname=:lastname, address=:address, contact=:contact WHERE  patient_id=:patient_id ");
    $stmt->bindParam("patient_id", $patient_id, PDO::PARAM_STR);
    $stmt->bindParam("firstname", $firstname, PDO::PARAM_STR);
    $stmt->bindParam("middlename", $middlename, PDO::PARAM_STR);
    $stmt->bindParam("lastname", $lastname, PDO::PARAM_STR);
    $stmt->bindParam("address", $address, PDO::PARAM_STR);
    $stmt->bindParam("contact", $contact, PDO::PARAM_STR);

    $stmt->execute();

    echo "<script>alert('information updated!');
        window.location.href=' myupdateinfo.php'</script>";

    // echo "<script>alert('information updated!')</script>";
    //   header("Location: myupdateinfo.php");
    // $_SESSION['firstname'] = $firstname;// new  name session on profile
    // $_SESSION['lastname'] = $lastname;// new  name session on profile
    // header("Location: home.php");


    // $_SESSION['first_name'] = $firstname;// new  name session on profile

}

?>

  <script type="text/javascript">
   $('#contact').keyup(function(){
        if (
            ($(this).val().length > 0) && ($(this).val().substr(0,2) != '09')
            || ($(this).val() == '')
            ){
            $(this).val('09');
        }
    });


   function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>
