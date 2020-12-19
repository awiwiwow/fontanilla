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

  <title>Dental Clinic</title>
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
        <li><a href="index.php" id="">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="location.php">Location</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

      <div class="progress-container">
        <div class="progress-bar" id="myBar"></div>
      </div>

    </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
 <!--     <div class="modal-content">

            <div class="register">

            </div>

            <div class="login">
              <span class="close">&times;</span>

            </div>

      </div> -->

    </div>

    <a href="#" id="back-to-top" title="Back to top">&uarr;</a>

      <div class="Sidebar">
<img src="image/servicebanner.jpg">
      </div>

      <div class="Content-a">
          <h2>Services</h2>
          <h3><a href="services.php" id="loc-link-deactive">Tooth Filling /Tooth Restoration</a></h3>
          <h3><a href="service2.php" id="loc-link-deactive">Oral Prophylaxis</a></h3>
          <h3><a href="#" id="loc-link-active">Tooth Extraction</a></h3>
          <h3><a href="service4.php" id="loc-link-deactive">Root Canal Treatment</a></h3>
          <h3><a href="service5.php" id="loc-link-deactive">Periapical Xray</a></h3>
          <h3><a href="service6.php" id="loc-link-deactive">Tooth Whitening /Bleaching</a></h3>
          <h3><a href="service7.php" id="loc-link-deactive">Veneers (Direct/Indirect)</a></h3>
          <h3><a href="service8.php" id="loc-link-deactive">Crowns /Bridges (Fixed Bridge)</a></h3>
          <h3><a href="service9.php" id="loc-link-deactive">Removable Partial Dentures</a></h3>
          <h3><a href="service10.php" id="loc-link-deactive">Complete Dentures</a></h3>
          <h3><a href="service11.php" id="loc-link-deactive">Flexible Dentures</a></h3>
          <h3><a href="service12.php" id="loc-link-deactive">Odontectomy /Oral Surgery</a></h3>
          <h3><a href="service13.php" id="loc-link-deactive">Orthodontic Treatment /Braces</a></h3>
          <h3><a href="service14.php" id="loc-link-deactive">Oral Appliance</a></h3>
          <h3><a href="service15.php" id="loc-link-deactive">Pediatric Dentistry</a></h3>
    </div>

      <div class="Content-b">
        <h2>Overview of Tooth Extraction</h2>
        <p>Tooth extraction is the removal of a tooth from its socket in the bone.</p>
        <h3>What It's Used For?</h3>
        <p>If a tooth has been broken or damaged by decay, your dentist will try to fix it with a filling, crown or other treatment. Sometimes, though, there's too much damage for the tooth to be repaired. In this case, the tooth needs to be extracted. A very loose tooth also will require extraction if it can't be saved, even with bone replacement surgery (bone graft).</p>
        <h3>Here are other reasons:</h3>
          <ul>
            <li>Some people have extra teeth that block other teeth from coming in.</li>
            <li>Sometimes baby teeth don't fall out in time to allow the permanent teeth to come in.</li>
            <li>People getting braces may need teeth extracted to create room for the teeth that are being moved into place.</li>
            <li>People receiving radiation to the head and neck may need to have teeth in the field of radiation extracted.</li>
            <li>People receiving cancer drugs may develop infected teeth because these drugs weaken the immune system. Infected teeth may need to be extracted.</li>
            <li>Some teeth may need to be extracted if they could become a source of infection after an organ transplant. People with organ transplants have a high risk of infection because they must take drugs that decrease or suppress the immune system.</li>
          </ul>
        <h3>How It's Done</h3>
        <p>There are two types of extractions:</p>
        <ul>
          <li>A simple extraction is performed on a tooth that can be seen in the mouth. General dentists commonly do simple extractions. In a simple extraction, the dentist loosens the tooth with an instrument called an elevator. Then the dentist uses an instrument called a forceps to remove the tooth.</li>
          <li>A surgical extraction is a more complex procedure. It is used if a tooth may have broken off at the gum line or has not come into the mouth yet. Surgical extractions commonly are done by oral surgeons. However, they are also done by general dentists. The doctor makes a small incision (cut) into your gum. Sometimes it's necessary to remove some of the bone around the tooth or to cut the tooth in half in order to extract it.</li>
        </ul>
        <h3>Follow-Up</h3>
        <p>Your doctor will give you detailed instructions on what to do and what to expect after your surgery. If you have any questions, make sure to ask them before you leave the office.</p>
        <p>Having a tooth taken out is surgery. You can expect some discomfort after even simple extractions. Usually it is mild. Research has shown that taking nonsteroidal anti-inflammatory drugs (NSAIDs) can greatly decrease pain after a tooth extraction. These drugs include ibuprofen, such as Advil, Motrin and others. Take the dose your doctor recommends, 3 to 4 times a day. Take the first pills before the local anesthesia wears off. Continue taking them for 3 days. Ask your doctor for complete instructions.</p>
        <p>Surgical extractions generally cause more pain after the procedure than simple extractions. The level of discomfort and how long it lasts will depend on how difficult it was to remove the tooth. Your dentist may prescribe pain medicine for a few days and then suggest an NSAID. Most pain disappears after a couple of days.</p>
        <p>A cut in the mouth tends to bleed more than a cut on the skin because it cannot dry out and form a scab. After an extraction, you'll be asked to bite on a piece of gauze for 20 to 30 minutes. This pressure will allow the blood to clot. You will still have a small amount of bleeding for the next 24 hours or so. It should taper off after that. Don't disturb the clot that forms on the wound.</p>
        <p>You can put ice packs on your face to reduce swelling. Typically, they are left on for 20 minutes at a time and removed for 20 minutes. If your jaw is sore and stiff after the swelling goes away, try warm compresses.</p>
        <p>Eat soft and cool foods for a few days. Then try other food as you feel comfortable.</p>
        <p>A gentle rinse with warm salt water, started 24 hours after the surgery, can help to keep the area clean. Use one-half teaspoon of salt in a cup of water. Most swelling and bleeding end within a day or two after the surgery. Initial healing takes at least two weeks.</p>
        <p>If you need stitches, your doctor may use the kind that dissolve on their own. This usually takes one to two weeks. Rinsing with warm salt water will help the stitches to dissolve. Some stitches need to be removed by the dentist or surgeon.</p>
        <p>You should not smoke, use a straw or spit after surgery. These actions can pull the blood clot out of the hole where the tooth was. Do not smoke on the day of surgery. Do not smoke for 24 to 72 hours after having a tooth extracted.</p>
        <a href="register-login.php"><button class="serv-but">Make an Appointment Now</button></a>
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
          <p>Sunday</p><p>9:00 AM - 5:00 PM</p>
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
