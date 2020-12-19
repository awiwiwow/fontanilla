<?php
session_start();
include 'dbconfig.php';
include 'notification.php';


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
  </head>
<body>
<div class="grid-container">


    <div class="sidebar">
      <div class="sidebar-title">
        <img src="image/FontanillaLogo.png" alt="" class="sidebarlogo1">
          <img src="image/FontanillaIcon.png" alt="" class="sidebarlogo2">
      </div>
      <ul>
        <li id="actee"> <a href="#" class="fas fa-desktop"><span>Dashboard</span> </a> </li>

        <li > <a href="menulist1_langkaan.php" class="fas fa-calendar-check"> <span>Appointment</span> </a> </li>

        <li> <a href="menulist5_langkaan.php" class="fas fa-file-export"> <span>Reports</span> </a> </li>


      </ul>
    </div>


  <div class="main-container">
    <header>
      <nav class="nav">

        <ul class="nav-left">

          <li> <a href="#" id="menu_icon"> <span></span> </a> </li>

        </ul>

        <div class="menus">
            <a href="logout.php"><button> <i class="fas fa-sign-out-alt"></i> </button></a>
        </div>

      </nav>
    </header>

  <div class="tabcontent-based">

    <div id="Home" class="tabcontent">

      <div class="home-based">

      <div class="Namez">
        <h1><?php echo $admin_name;?></h1>
      <h2><?php echo $admin_type;?></h2>
      </div>
      <a href="p_active_langkaan.php">
      <div class="home-left-content">
        <div class="icun">
          <i class="fas fa-user"></i>
        </div>
        <div class="tixt">
           <h1><?php echo $active;?></h1>
            <h3>Active Appointments</h3>
        </div>
      </div>
      </a>

      <a href="#">
      <div class="home-middle-content">
        <div class="icun2">
          <i class="fas far fa-calendar-check"></i>
        </div>
        <div class="tixt">
          <h1><?php echo $todayapp?></h1>
          <h3>Appointments Today</h3>
        </div>
      </div>
      </a>

      <a href="p_pending_langkaan.php">
      <div class="home-left-content2">
        <div class="icun3">
          <i class="far fa-list-alt"></i>
        </div>
        <div class="tixt">
          <h1><?php echo $pending;?></h1>
          <h3>Pending Appointments</h3>
        </div>
      </div>
      </a>



      </div>

      <div class="home-right-content">
        <div class="upright">

        </div>
        <div class="downright">
          <i class="far fa-edit"></i>
          <i class="far fa-save"></i>
          <i class="far fa-trash-alt"></i>
        </div>
      </div>

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

</body>
</html>
