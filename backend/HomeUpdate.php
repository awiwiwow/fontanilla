<?php
include "cdb.php";
include "connupdate.php";
?>

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
       
    
    <a style="background:#03A9F4;padding:8px 10px;color:white;" href = "menulist4.php">Back</a>
    <a style="background:#03A9F4;padding:8px 10px;color:white;" href ="updateimage.php">Update Images</a>
      <form id="cms" action="connupdate.php" style="width:100%;height:220px;" method="POST">
         
<div style="float:left;width:50%;">
<textarea id="value" name="value" rows="5" cols="15" maxlength="11"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value','countchar');"
onkeydown="charcounts('value','countchar');" 
onmouseout="charcounts('value','countchar');" 
> <?php 
            $una = "SELECT cont_num from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["cont_num"];}}?></textarea><br>
<h2 >cannot exceed on<span id="countchar">0</span>characters</h2>
<button type="submit"  name="clck">submit</button><br>
    </div>
<div style="float:left;width:50%;height:220px;">
    
    <div style="width: 100%;height: 50px;background:#3b8beb;margin-top:80px;" class="nav-second-left">
          <h3 style="font-size:30px;color:white;text-align:center;padding-top:10px;">Call Us (
            <?php 
            $una = "SELECT cont_num from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["cont_num"];}}?>)</h3>
        </div>
        
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value1" name="value1" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value1','countchar1');"
onkeydown="charcounts('value1','countchar1');" 
onmouseout="charcounts('value1','countchar1');" 
> 
<?php 
            $unan = "SELECT header from update_char";
            $results = mysqli_query($conn, $unan);
            if (mysqli_num_rows($results) > 0) {
            while($row = mysqli_fetch_assoc($results)) {
            echo  $row["header"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar1" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck1">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">

    <div style="width: 100%;height: 50px;background:#3b8beb;margin-top:80px;" class="nav-second-left">
          <h3 style="font-size:30px;color:white;text-align:center;padding-top:10px;">
            <?php 
            $unan = "SELECT header from update_char";
            $results = mysqli_query($conn, $unan);
            if (mysqli_num_rows($results) > 0) {
            while($row = mysqli_fetch_assoc($results)) {
            echo  $row["header"];}}?></h3>
        </div>
        
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value2" name="value2" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value2','countchar2');"
onkeydown="charcounts('value2','countchar2');" 
onmouseout="charcounts('value2','countchar2');" 
> 
<?php 
            $una = "SELECT slider_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar2" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck2">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT slider_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value3" name="value3" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value3','countchar3');"
onkeydown="charcounts('value3','countchar3');" 
onmouseout="charcounts('value3','countchar3');" 
> 
<?php 
            $una = "SELECT slider_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_firstcont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar3" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck3">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
       <p style="margin-left:100px;font-size:25px;">
        <?php 
            $una = "SELECT slider_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_firstcont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;;">
<textarea  id="value4" name="value4" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value4','countchar4');"
onkeydown="charcounts('value4','countchar4');" 
onmouseout="charcounts('value4','countchar4');" 
> 
<?php 
            $una = "SELECT slider_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_secondcont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar4" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck4">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT slider_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider_secondcont"];}}?>
</p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value5" name="value5" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value5','countchar5');"
onkeydown="charcounts('value5','countchar5');" 
onmouseout="charcounts('value5','countchar5');" 
> 
<?php 
            $una = "SELECT slider2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar5" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck5">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT slider2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_title"];}}?>
</h1>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value6" name="value6" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value6','countchar6');"
onkeydown="charcounts('value6','countchar6');" 
onmouseout="charcounts('value6','countchar6');" 
> 
<?php 
            $una = "SELECT slider2_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_firstcont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar6" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck6">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;">
            <?php 
            $una = "SELECT slider2_firstcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_firstcont"];}}?></p>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value7" name="value7" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value7','countchar7');"
onkeydown="charcounts('value7','countchar7');" 
onmouseout="charcounts('value7','countchar7');" 
> 
<?php 
            $una = "SELECT slider2_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_secondcont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar7" style="color: red;">0</span>characters</h2>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;"><?php 
            $una = "SELECT slider2_secondcont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider2_secondcont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value8" name="value8" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value8','countchar8');"
onkeydown="charcounts('value8','countchar8');" 
onmouseout="charcounts('value8','countchar8');" 
> 
<?php 
            $una = "SELECT slider3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar8" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck8">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
     <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT slider3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value9" name="value9" rows="5" cols="15" maxlength="45"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value9','countchar9');"
onkeydown="charcounts('value9','countchar9');" 
onmouseout="charcounts('value9','countchar9');" 
> 
            <?php 
            $una = "SELECT slider3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar9" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck9">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT slider3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["slider3_cont"];}}?></p>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value10" name="value10" rows="5" cols="15" maxlength="20"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value10','countchar10');"
onkeydown="charcounts('value10','countchar10');" 
onmouseout="charcounts('value10','countchar10');" 
> 
            <?php 
            $una = "SELECT infobox from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar10" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck10">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT infobox from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox"];}}?></h1>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value11" name="value11" rows="5" cols="15" maxlength="215" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value11','countchar11');"
onkeydown="charcounts('value11','countchar11');" 
onmouseout="charcounts('value11','countchar11');" 
> 
            <?php 
            $una = "SELECT infobox_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar11" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck11">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;">
            <?php 
            $una = "SELECT infobox_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value12" name="value12" rows="5" cols="15" maxlength="20"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value12','countchar12');"
onkeydown="charcounts('value12','countchar12');" 
onmouseout="charcounts('value12','countchar12');" 
> 
            <?php 
            $una = "SELECT infobox2 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar12" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck12">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT infobox2 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value13" name="value13" rows="5" cols="15" maxlength="215" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value13','countchar13');"
onkeydown="charcounts('value13','countchar13');" 
onmouseout="charcounts('value13','countchar13');" 
> 
            <?php 
            $una = "SELECT infobox2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar13" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck13">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;">
            <?php 
            $una = "SELECT infobox2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox2_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value14" name="value14" rows="5" cols="15" maxlength="20"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value14','countchar14');"
onkeydown="charcounts('value14','countchar14');" 
onmouseout="charcounts('value14','countchar14');" 
> 
            <?php 
            $una = "SELECT infobox3 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar14" style="color: red;">0</span>characters</h2>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT infobox3 from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value15" name="value15" rows="5" cols="15" maxlength="215" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value15','countchar15');"
onkeydown="charcounts('value15','countchar15');" 
onmouseout="charcounts('value15','countchar15');" 
> 
            <?php 
            $una = "SELECT infobox3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar15" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck15">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT infobox3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["infobox3_cont"];}}?></p>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value16" name="value16" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value16','countchar16');"
onkeydown="charcounts('value16','countchar16');" 
onmouseout="charcounts('value16','countchar16');" 
> 
            <?php 
            $una = "SELECT serve_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar16" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck16">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT serve_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value17" name="value17" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value17','countchar17');"
onkeydown="charcounts('value17','countchar17');" 
onmouseout="charcounts('value17','countchar17');" 
> 
            <?php 
            $una = "SELECT serve_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar17" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck17">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
        <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT serve_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value18" name="value18" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value18','countchar18');"
onkeydown="charcounts('value18','countchar18');" 
onmouseout="charcounts('value18','countchar18');" 
> 
            <?php 
            $una = "SELECT serve2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar18" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck18">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
     <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT serve2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value19" name="value19" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value19','countchar19');"
onkeydown="charcounts('value19','countchar19');" 
onmouseout="charcounts('value19','countchar19');" 
> 
            <?php 
            $una = "SELECT serve2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar19" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck19">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
     <p style="margin-left:100px;font-size:25px;">
            <?php 
            $una = "SELECT serve2_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve2_cont"];}}?></p>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value20" name="value20" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value20','countchar20');"
onkeydown="charcounts('value20','countchar20');" 
onmouseout="charcounts('value20','countchar20');" 
> 
            <?php 
            $una = "SELECT serve3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar20" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck20">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT serve3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value21" name="value21" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value21','countchar21');"
onkeydown="charcounts('value21','countchar21');" 
onmouseout="charcounts('value21','countchar21');" 
> 
            <?php 
            $una = "SELECT serve3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar21" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck21">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
        <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT serve3_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve3_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value22" name="value22" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value22','countchar22');"
onkeydown="charcounts('value22','countchar22');" 
onmouseout="charcounts('value22','countchar22');" 
> 
            <?php 
            $una = "SELECT serve4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar22" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck22">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT serve4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_title"];}}?></h1>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value23" name="value23" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value23','countchar23');"
onkeydown="charcounts('value23','countchar23');" 
onmouseout="charcounts('value23','countchar23');" 
> 
            <?php 
            $una = "SELECT serve4_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar23" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck23">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
            <p style="margin-left:100px;font-size:25px;">
            <?php 
            $una = "SELECT serve4_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve4_cont"];}}?></p>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value24" name="value24" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value24','countchar24');"
onkeydown="charcounts('value24','countchar24');" 
onmouseout="charcounts('value24','countchar24');" 
> 
            <?php 
            $una = "SELECT serve5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar24" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck24">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT serve5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_title"];}}?></h1>
</div>


<div style="float:left;width:50%;height:220px;">
<textarea  id="value25" name="value25" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value25','countchar25');"
onkeydown="charcounts('value25','countchar25');" 
onmouseout="charcounts('value25','countchar25');" 
> 
            <?php 
            $una = "SELECT serve5_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar25" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck25">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
       <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT serve5_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve5_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value26" name="value26" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value26','countchar26');"
onkeydown="charcounts('value26','countchar26');" 
onmouseout="charcounts('value26','countchar26');" 
> 
            <?php 
            $una = "SELECT serve6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar26" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck26">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT serve6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value27" name="value27" rows="5" cols="15" maxlength="250" required ='"'  style="font-size: 20px;"
onkeyup="charcounts('value27','countchar27');"
onkeydown="charcounts('value27','countchar27');" 
onmouseout="charcounts('value27','countchar27');" 
> 
            <?php 
            $una = "SELECT serve6_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_cont"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar27" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck27">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
          <p style="margin-left:100px;font-size:25px;"> 
            <?php 
            $una = "SELECT serve6_cont from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["serve6_cont"];}}?></p>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value28" name="value28" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value28','countchar28');"
onkeydown="charcounts('value28','countchar28');" 
onmouseout="charcounts('value28','countchar28');" 
> 
            <?php 
            $una = "SELECT doc_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar28" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck28">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT doc_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_name"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value29" name="value29" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value29','countchar29');"
onkeydown="charcounts('value29','countchar29');" 
onmouseout="charcounts('value29','countchar29');" 
> 
            <?php 
            $una = "SELECT doc_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar29" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck29">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT doc_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value30" name="value30" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value30','countchar30');"
onkeydown="charcounts('value30','countchar30');" 
onmouseout="charcounts('value30','countchar30');" 
> 
            <?php 
            $una = "SELECT doc2_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar30" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck30">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"><?php 
            $una = "SELECT doc2_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_name"];}}?>
</h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value31" name="value31" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value31','countchar31');"
onkeydown="charcounts('value31','countchar31');" 
onmouseout="charcounts('value31','countchar31');" 
> 
            <?php 
            $una = "SELECT doc2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar31" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck31">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT doc2_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc2_title"];}}?>
</h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value32" name="value32" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value32','countchar32');"
onkeydown="charcounts('value32','countchar32');" 
onmouseout="charcounts('value32','countchar32');" 
> 
            <?php 
            $una = "SELECT doc3_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar32" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck32">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT doc3_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_name"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value33" name="value33" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value33','countchar33');"
onkeydown="charcounts('value33','countchar33');" 
onmouseout="charcounts('value33','countchar33');" 
> 
            <?php 
            $una = "SELECT doc3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar33" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck33">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT doc3_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc3_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value34" name="value34" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value34','countchar34');"
onkeydown="charcounts('value34','countchar34');" 
onmouseout="charcounts('value34','countchar34');" 
> 
            <?php 
            $una = "SELECT doc4_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar34" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck34">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"
    ><?php 
            $una = "SELECT doc4_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_name"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value35" name="value35" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value35','countchar35');"
onkeydown="charcounts('value35','countchar35');" 
onmouseout="charcounts('value35','countchar35');" 
> 
            <?php 
            $una = "SELECT doc4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar35" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck35">submit</button>
<br></div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
             <?php 
            $una = "SELECT doc4_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc4_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value36" name="value36" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value36','countchar36');"
onkeydown="charcounts('value36','countchar36');" 
onmouseout="charcounts('value36','countchar36');" 
> 
            <?php 
            $una = "SELECT doc5_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar36" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck36">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;"> 
            <?php 
            $una = "SELECT doc5_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_name"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value37" name="value37" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value37','countchar37');"
onkeydown="charcounts('value37','countchar37');" 
onmouseout="charcounts('value37','countchar37');" 
> 
            <?php 
            $una = "SELECT doc5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar37" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck37">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT doc5_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc5_title"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value38" name="value38" rows="5" cols="15" maxlength="35"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value38','countchar38');"
onkeydown="charcounts('value38','countchar38');" 
onmouseout="charcounts('value38','countchar38');" 
> 
            <?php 
            $una = "SELECT doc6_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_name"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar38" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck38">submit</button>
</div>
<div style="float:left;width:50%;height:220px;;">
    <h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT doc6_name from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_name"];}}?></h1>
</div>

<div style="float:left;width:50%;height:220px;">
<textarea  id="value39" name="value39" rows="5" cols="15" maxlength="30"  required ='"' style="font-size: 20px;"
onkeyup="charcounts('value39','countchar39');"
onkeydown="charcounts('value39','countchar39');" 
onmouseout="charcounts('value39','countchar39');" 
> 
            <?php 
            $una = "SELECT doc6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_title"];}}?>


</textarea><br>
<h2>cannot exceed on<span id="countchar39" style="color: red;">0</span>characters</h2>
<button type="submit"  name="clck39">submit</button>
</div>
<div style="float:left;width:50%;height:220px;">
<h1 style="margin-left:100px;font-size:40px;">
            <?php 
            $una = "SELECT doc6_title from update_char";
            $result = mysqli_query($conn, $una);
            if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
            echo  $row["doc6_title"];}}?></h1>
</div>

</form>

    </div>



  </div>



</div>
    <script>
      $(document).ready(function (){
        if ($('#menu_icon').on('click',function (){

          if ($('.grid-container').hasClass('cont'))
          {
              $('.grid-container').removeClass('cont')
              $('.sidebar').find('span').show(50);
          }
          else {
            $('.grid-container').addClass('cont')
            $('.sidebar').find('span').hide(50);
          }

        }));

      });
    </script>
    <script>
      $(document).ready(function (){
      if ($('a').on('click',function (){

        if ($('.grid-container').haveClass('cont'))
        {
          $('.grid-container').removeClass('cont')
          $('.sidebar').find('span').hide(50);
        }
        else {
        }

      }));

    });
    </script>

</body>
</html>




<?php
session_start();
if(!isset($_SESSION["admin_id"])){
header("Location: login.php");
exit(); }
           $admin_id = $_SESSION['admin_id'];
           $admin_name = $_SESSION['admin_name'];
           $admin_type = $_SESSION['type'];

?>


 



