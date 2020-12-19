<?php
include"dbconfig.php";
  // Initialize message variable
  $msg = "";

 
    if (isset($_POST['upload1'])) 
  {
    $id =$_POST['id'];
    // Get image name
    $image = $_FILES['images']['name'];
    // Get text
   // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    $target = "home".basename($image);

    $sql = "UPDATE img_home SET image = '$image' WHERE id=$id";

    // execute query
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    
    echo  "<script>alert('Record ypdateded successfully!');
    window.location.href='UpdateImages.php';</script>";
      
    }else{
      $msg = "Failed to upload image";
    }
   echo  "<script>alert('Record ypdateded successfully!');
    window.location.href='UpdateImages.php';</script>";
  }
 
  $result = mysqli_query($conn, "SELECT * FROM img_home");

 ?>

<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dental Clinic</title>
      <link rel="stylesheet" href="master.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
      </script>
<title>Image Upload</title>
<style type="text/css">
h1,h2,h3{
          color:black;
          }
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
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
    <a style="background:#03A9F4;padding:8px 10px;color:white;"  href= "menulist4.php"> Back</a>
<div id="content">
   <!-- update -->
  <?php

    while ($row = mysqli_fetch_array($result)) 
    {
echo '<form method="POST" action="updateimage.php" enctype="multipart/form-data">';
      echo "<div id='img_div'>";
      
echo '<button type="submit" name="upload1" style = color:blue;>update image</button>';

      echo "</div>";
      echo '</form>';
    }
  ?>
 



<!-- adding -->
 

</div>


  </div>



</div>
</body>
</html>