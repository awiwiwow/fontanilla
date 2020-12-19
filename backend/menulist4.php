<?php
session_start();
if(!isset($_SESSION["admin_id"])){
header("Location: login.php");
exit(); }
           $admin_id = $_SESSION['admin_id'];
           $admin_name = $_SESSION['admin_name'];
           $admin_type = $_SESSION['type'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        
        
        <a href="HomeUpdate.php">
      <div class="home-middle-content-menu">
        <div class="icun2">
          <i class="far fa-comment-dots"></i>
        </div>
        <div class="txxt">
          <h3>Headers/Paragraph</h3>
        </div>
      </div>
      </a>
      
       <a href="updateimage.php">
      <div class="home-middle-content-menu">
        <div class="icun3">
          <i class="fas fa-images"></i>
        </div>
        <div class="txxt">
          <h3>Images</h3>
        </div>
      </div>
      </a>

     



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
