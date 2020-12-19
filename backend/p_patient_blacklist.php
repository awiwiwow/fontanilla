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
        <li > <a href="index.php" class="tablink fas fa-desktop"><span>Dashboard</span> </a> </li>

        <li > <a href="menulist1.php" class="fas fa-calendar-check tablink"> <span>Appointment</span> </a> </li>

        <li> <a href="menulist2.php" class="fas fa-info-circle tablink"> <span>Inquiries</span> </a> </li>

        <li id="actee"> <a href="menulist3.php" class="fas fa-users-cog tablink"> <span>Settings</span> </a> </li>

        <li> <a href="menulist4.php" class="fas fa-laptop tablink"> <span>CMS</span> </a> </li>

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

    <a href="menulist3.php"><button style="position:absolute;right:30px;width:100px;height:40px;font-size:20px;">Back</button></a>
    <div id="ManagePatient" class="tabcontent">
     <?php require'patients_blacklist.php';?>
    </div>

  </div>

  </div>

  <script>
      function openPage(pageName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

    }
    // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
  </script>

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
