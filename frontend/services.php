<?php
require_once("dbconfig.php");
require('class/userClass.php');

$userClass = new userClass();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/subservice.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <title>Fontanilla-Halili Dental Clinic</title>
    <link rel="shortcut icon" href="image/FontanillaIcon.png" />
</head>
<body>
  <div class="grid-container">


    <div class="Header-title">

      <div class="nav-second">

        <div class="nav-second-left">
          <h3>Call Us (0922 802 2712)</h3>
        </div>

     <div class="nav-second-right">
        <h3>Make an Appointment Online</h3>
                    <a href="register-login.php"><button >Register/Login</button></a>
        </div>

      </div>


      <h1><a href="index.php">
        <span style="padding-right:10px; padding-top: 3px; display:inline-block;">
      <img style="width:30px;height:30px;" src="image/FontanillaIcon.png"></img></span>Fontanilla Halili Dental</a></h1>
      <img src="image/FontanillaIcon2.png" alt="" class="header-logo">

      <ul>
        <li><a href="index.php" >Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php" id="activetitle">Services</a></li>
        <li><a href="location.php">Branches</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>


    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

      <div class="Sidebar">
        <img src="image/servicebanner.jpg">
      </div>

      <div class="Content-a">
         <h1>Services</h1>
         
         <div class="div1">
        <div class="containerrr">
        <img src="image/serviceicon/service1.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">A filling is a way to restore a tooth damaged by decay back to its normal function and shape. When a dentist gives you a filling, he or she first removes the decayed tooth material, cleans the affected area, and then fills the cleaned out cavity with a filling material.</div>
         </div>
        </div>
            
        <div class="containerrr">
            <img src="image/serviceicon/service2.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">is a procedure done for teeth cleaning. It removes tartar and plaque build-up from the surfaces of the teeth as well as those hidden in between and under the gums. The dentist uses a scaler, a type of hand instrument, to remove the plaque and tartar</div>
         </div>
        </div>
            
        <div class="containerrr">
        <img src="image/serviceicon/service3.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">is the removal of teeth from the dental alveolus (socket) in the alveolar bone. Extractions are performed for a wide variety of reasons, but most commonly to remove teeth which have become unrestorable through tooth decay,especially when they are associated with toothache.</div>
         </div>
            </div>
         </div>
         
         <div class="div2">
        <div class="containerrr">
        <img src="image/serviceicon/service4.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">is a treatment used to repair and save a tooth that is badly decayed or becomes infected.</div>
         </div>
        </div>
            
        <div class="containerrr">
            <img src="image/serviceicon/service5.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">Bite-wing x-rays detect decay between teeth and changes in the thickness of bone caused by gum disease</div>
         </div>
        </div>
            
        <div class="containerrr">
        <img src="image/serviceicon/service6.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext"> is either the restoration of a natural tooth shade or whitening beyond the natural shade. Restoration of the underlying natural tooth shade is possible by simply removing surface stains caused by extrinsic factors,</div>
         </div>
            </div>
         </div>
      
      
       <div class="div3">
        <div class="containerrr">
        <img src="image/serviceicon/service7.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext"> are wafer-thin, custom-made shells of tooth-colored materials designed to cover the front surface of teeth to improve your appearance.</div>
         </div>
        </div>
            
        <div class="containerrr">
            <img src="image/serviceicon/service8.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">Bridges and crowns are fixed prosthetic devices that are cemented onto existing teeth or implants, by a dentist or prosthodontist. Crowns are used most commonly to entirely cover or "cap" a damaged tooth or cover an implant.</div>
         </div>
        </div>
            
        <div class="containerrr">
        <img src="image/serviceicon/service9.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">is a denture for a partially edentulous patient who desires to have replacement teeth for functional or aesthetic reasons and who cannot have a bridge (a fixed partial denture) for any reason,</div>
         </div>
            </div>
         </div>
         
        <div class="div4">
        <div class="containerrr">
            <h3>Tooth Filling</h3>
        <img src="image/serviceicon/service10.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">are a removable device that can be used to replace missing teeth.</div>
         </div>
        </div>
            
        <div class="containerrr">
            <img src="image/serviceicon/service11.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">are a kind of partial denture, but these ones are made of different materials than ordinary partial dentures.</div>
         </div>
        </div>
            
        <div class="containerrr">
        <img src="image/serviceicon/service12.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">is the removal of teeth by the bending back of a mucoperiosteal flap and excision of bone from around the root before the application of force to remove the tooth.</div>
         </div>
            </div>
         </div>
         
         <div class="div5">
        <div class="containerrr">
        <img src="image/serviceicon/service13.jpg" class="imageee">
             <div class="overlay">
          <div class="texttext">is a way of straightening or moving teeth, to improve the appearance of the teeth and how they work.</div>
         </div>
        </div>
            
        <div class="containerrr">
            <img src="image/serviceicon/service14.jpg" alt="Avatar" class="imageee">
             <div class="overlay">
          <div class="texttext">A mandibular splint or mandibular advancement splint is a device worn in the mouth that is used to treat orofacial disorders including: obstructive sleep apnea, snoring, and TMJ disorders</div>
         </div>
        </div>
            
        <div class="containerrr">
        <img src="image/serviceicon/service15.jpg" class="imageee">
             <div class="overlay">
          <div class="texttext"> is the branch of dentistry dealing with children from birth through adolescence.</div>
         </div>
            </div>
         </div>
         
         <a href="noticereg.php"><button id="bot">Make an Appointment Today</button></a>

        </div>

      <div class="Footer">
        <div class="upper-footer">
          <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" alt="" class="iconic"> </a>
          <a href=""> <img src="image/icons/gmail.svg" alt="" class="iconics"> </a>
        </div>
        <div class="footer-1">
          <div class="left-footer">
          <h2>Visit Our Three Location:</h2>
          <a href="location.php"> <p>Binakayan Branch: TIRONA ROAD, BINAKAYAN </p> </a>
          <a href="location2.php"> <p>Langkaan Branch: #45 GOVERNOR'S DRIVE </p> </a>
          <a href="location3.php"> <p>Dasma-Bayan Branch: 2ND FLOOR CM PLAZA BUILDING </p> </a>
        </div>
        <div class="middle-footer">
          <h2>Business Hours</h2>
          <p>Monday</p><p>9:00 AM - 5:00 PM</p>
          <p>Tuesday</p><p>9:00 AM - 5:00 PM</p>
          <p>Wednesday</p><p>9:00 AM - 5:00 PM</p>
          <p>Thursday</p><p>9:00 AM - 5:00 PM</p>
          <p>Friday</p><p>9:00 AM - 5:00 PM</p>
          <p>Saturday</p><p>9:00 AM - 5:00 PM</p>
          <p>9:00 AM - 5:00 PM</p><p>Sunday</p>
          <p>Note: (Only Dasma-Bayan branch is open until Sunday)</p>
        </div>
          <div class="right-footer">
            <h2>Stay Connected</h2>
            <a href="https://www.facebook.com/Fontanilla-Halili-Dental-Clinic-538600286516604/"> <img src="image/facebook.svg" class="iconic"> </a>
            <a href="#"> <img src="image/icons/gmail.svg" class="iconic2"> </a>
          </div>
        </div>
          <div class="footer-2">
        <h3>© Fontanilla Halili Dental Clinic</h3>
      </div>
      </div>

  </div>
  <script src="js/subscript.js">
  </script>
  <script src="js/myjavascript.js">
  </script>
</body>
</html>
