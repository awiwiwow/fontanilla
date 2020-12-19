<?php
include "cdb.php";
include "connupdate.php";
?>


<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>

      <script type="text/javascript">
            function charcounts(startfrom,charend){
                  var len = document.getElementById(startfrom).value.length;
            document.getElementById(charend).innerHTML=len;
            }
      </script>


    
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dental Clinic</title>
      <link rel="stylesheet" href="master.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
      </script>
         <style>
          h1,h2,h3{
          color:black;
          }
      </style>
  </head>
<body>
<div class="grid-container">


    <div class="sidebar">
      <div class="sidebar-title">
        <img src="image/FontanillaLogo.png" alt="" class="sidebarlogo1">
          <img src="image/FontanillaIcon.png" alt="" class="sidebarlogo2">
      </div>
      <ul>
        <li> <a href="index.php" class="tablink fas fa-desktop"><span>Dashboard</span> </a> </li>

        <li> <a href="menulist1.php" class="fas fa-calendar-check tablink"> <span>Appointment</span> </a> </li>

        <li> <a href="menulist2.php" class="fas fa-info-circle tablink"> <span>Inquiries</span> </a> </li>

        <li> <a href="menulist3.php" class="fas fa-users-cog tablink"> <span>Settings</span> </a> </li>

        <li id="actee"> <a href="#" class="fas fa-laptop tablink"> <span>CMS</span> </a> </li>

        <li> <a href="menulist5.php" class="fas fa-file-export tablink"> <span>Reports</span> </a> </li>


      </ul>
    </div>


  <div class="main-container">
    <header>
      <nav class="nav">

        <ul class="nav-left">

          <li> <a href="#" id="menu_icon"> <span></span> </a> </li>

        </ul>

        <div class="menus">
          <button> <i class="far fa-bell"></i> </button>
          <button> <i class="fas fa-sliders-h"></i> </button>
         <a href="logout.php"><button> <i class="fas fa-sign-out-alt"></i> </button></a>
        </div>

      </nav>
    </header>

  <div class="tabcontent-based">

    <div id="menulist1" class="tabcontent">
          <div class="Namez">
        <h1><?php echo $admin_name;?></h1>
      <h2><?php echo $admin_type;?></h2>
      </div>

      <div class="home-basedd">
    
   <a href ="menulist4.php"> <button type="submit"  name="uwi">back</button></a><br>
      <form id="cms2" action="connupdate.php" style="width:100%;height:220px;" method="POST">
         

<textarea id="up" name="up" rows="5" cols="15"  style="font-size: 20px;"
onkeyup="charcounts('up','countchar');"
onkeydown="charcounts('up','countchar');" 
onmouseout="charcounts('up','countchar');" 
> <?php 
            $una = "SELECT dc_name from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar">0</span>characters</h2>
<button type="submit"  name="home">submit</button><br>




<textarea id="up2" name="up2" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up2','countchar2');"
onkeydown="charcounts('up2','countchar2');" 
onmouseout="charcounts('up2','countchar2');" 
> <?php 
            $una = "SELECT info from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar2">0</span>characters</h2>
<button type="submit"  name="home2">submit</button><br>


<textarea id="up3" name="up3" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up3','countchar3');"
onkeydown="charcounts('up3','countchar3');" 
onmouseout="charcounts('up3','countchar3');" 
> <?php 
            $una = "SELECT dc_name2 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name2"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar3">0</span>characters</h2>
<button type="submit"  name="home3">submit</button><br>

<textarea id="up4" name="up4" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up4','countchar4');"
onkeydown="charcounts('up4','countchar4');" 
onmouseout="charcounts('up4','countchar4');" 
> <?php 
            $una = "SELECT info2 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info2"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar4">0</span>characters</h2>
<button type="submit"  name="home4">submit</button><br>


<textarea id="up5" name="up5" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up5','countchar5');"
onkeydown="charcounts('up5','countchar5');" 
onmouseout="charcounts('up5','countchar5');" 
> <?php 
            $una = "SELECT dc_name3 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name3"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar5">0</span>characters</h2>
<button type="submit"  name="home5">submit</button><br>

<textarea id="up6" name="up6" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up6','countchar6');"
onkeydown="charcounts('up6','countchar6');" 
onmouseout="charcounts('up6','countchar6');" 
> <?php 
            $una = "SELECT info3 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info3"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar6">0</span>characters</h2>
<button type="submit"  name="home6">submit</button><br>

<textarea id="up7" name="up7" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up7','countchar7');"
onkeydown="charcounts('up7','countchar7');" 
onmouseout="charcounts('up7','countchar7');" 
> <?php 
            $una = "SELECT dc_name4 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name4"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar7">0</span>characters</h2>
<button type="submit"  name="home7">submit</button><br>

<textarea id="up8" name="up6" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up8','countchar8');"
onkeydown="charcounts('up8','countchar8');" 
onmouseout="charcounts('up8','countchar8');" 
> <?php 
            $una = "SELECT info4 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info4"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar8">0</span>characters</h2>
<button type="submit"  name="home8">submit</button><br>

<textarea id="up9" name="up9" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up7','countchar7');"
onkeydown="charcounts('up7','countchar7');" 
onmouseout="charcounts('up7','countchar7');" 
> <?php 
            $una = "SELECT dc_name5 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name5"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar9">0</span>characters</h2>
<button type="submit"  name="home9">submit</button><br>

<textarea id="up10" name="up10" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up10','countchar10');"
onkeydown="charcounts('up10','countchar10');" 
onmouseout="charcounts('up10','countchar10');" 
> <?php 
            $una = "SELECT info5 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info5"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar10">0</span>characters</h2>
<button type="submit"  name="home10">submit</button><br>

<textarea id="up11" name="up11" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up11','countchar11');"
onkeydown="charcounts('up11','countchar11');" 
onmouseout="charcounts('up11','countchar11');" 
> <?php 
            $una = "SELECT dc_name6 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["dc_name6"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar11">0</span>characters</h2>
<button type="submit"  name="home11">submit</button><br>


<textarea id="up12" name="up12" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up12','countchar12');"
onkeydown="charcounts('up12','countchar12');" 
onmouseout="charcounts('up12','countchar12');" 
> <?php 
            $una = "SELECT info6 from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["info6"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar12">0</span>characters</h2>
<button type="submit"  name="home12">submit</button><br>

<textarea id="up13" name="up13" rows="5" cols="15" style="font-size: 20px;"
onkeyup="charcounts('up13','countchar13');"
onkeydown="charcounts('up13','countchar13');" 
onmouseout="charcounts('up13','countchar13');" 
> <?php 
            $una = "SELECT header from docs_info";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["header"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar13">0</span>characters</h2>
<button type="submit"  name="home13">submit</button><br>


</form>
</div>



  </div>



</div>
</body>
</html>