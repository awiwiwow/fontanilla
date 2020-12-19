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
  </head>
<body>
<div class="grid-container">


    <div class="sidebar">
      <div class="sidebar-title">
        <img src="image/FontanillaLogo.png" alt="" class="sidebarlogo1">
          <img src="image/FontanillaIcon.png" alt="" class="sidebarlogo2">
      </div>
      <ul>
        <li> <a href="index2.php" class="tablink fas fa-desktop"><span>Dashboard</span> </a> </li>

        <li id="actee"> <a href="#" class="fas fa-calendar-check tablink"> <span>Appointment</span> </a> </li>


        <li> <a href="menulist5_bayan.php" class="fas fa-file-export tablink"> <span>Reports</span> </a> </li>


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
          <button> <i class="fas fa-sign-out-alt"></i> </button>
        </div>

      </nav>
    </header>

  <div class="tabcontent-based">


    <div id="menulist1" class="tabcontent">

      <div class="home-basedd">
            <div class="Namez">
        <h1><?php echo $admin_name;?></h1>
      <h2><?php echo $admin_type;?></h2>
      </div>

  <!--     <a href="appointmentlist.html">
      <div class="home-left-content-menu">
        <div class="icun">
          <i class="fas fa-user"></i>
        </div>
        <div class="txxt">
          <h3>Appointment List</h3>
        </div>
      </div>
      </a>
 -->
      <a href="p_pending_bayan.php">
      <div class="home-middle-content-menu">
        <div class="icun2">
          <i class="far fa-comment-dots"></i>
        </div>
        <div class="txxt">
          <h3>Pending Appointments</h3>
        </div>
      </div>
      </a>

      <a href="p_active_bayan.php">
      <div class="home-left-content2-menu">
        <div class="icun3">
          <i class="fas fa-chart-line"></i>
        </div>
        <div class="txxt">
          <h3>Active Appointments</h3>
        </div>
      </div>
      </a>

      <a href="p_done_bayan.php">
      <div class="home-middle-content2-menu">
        <div class="icun4">
        <i class="far fa-calendar-check"></i>
        </div>
        <div class="txxt">
          <h3>Done Appointments</h3>
        </div>
      </div>
      </a>

      <a href="p_cancelled_bayan.php">
      <div class="home-middle-content2-menu">
        <div class="icun4">
          <i class="fas fa-ban"></i>
        </div>
        <div class="txxt">
          <h3>Cancelled Appointments</h3>
        </div>
      </div>
      </a>

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
