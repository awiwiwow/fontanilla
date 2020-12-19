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
        <li > <a href="index4.php" class="tablink fas fa-desktop"><span>Dashboard</span> </a> </li>

        <li id="actee"> <a href="menulist1_langkaan.php" class="fas fa-calendar-check tablink"> <span>Appointment</span> </a> </li>

        <li> <a href="menulist5_langkaan.php" class="fas fa-file-export tablink"> <span>Reports</span> </a> </li>

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
       <a href="menulist1_langkaan.php"><button style="position:absolute;right:30px;width:100px;height:40px;font-size:20px;margin-bottom:30px;">Back</button></a>
    <div id="Pending" class="tabcontent">
     <?php require'app_pending_langkaan.php';?>
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
