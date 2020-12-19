  <div class="side_dental">
                         <?php
                         //date
                        date_default_timezone_set('Asia/Manila');
                          $date = date('Y-m-d H:i:s');
                          $today= date('l, F d, Y ', strtotime($date));
                           echo " Today is " . $today;
                        ?>





    <script language="javascript" type="text/javascript">
    //time
      /* Visit http://www.yaldex.com/ for full source code
      and get more free JavaScript, CSS and DHTML scripts! */
      <!-- Begin
      var timerID = null;
      var timerRunning = false;
      function stopclock (){
      if(timerRunning)
      clearTimeout(timerID);
      timerRunning = false;
      }
      function showtime () {
      var now = new Date();
      var hours = now.getHours();
      var minutes = now.getMinutes();
      var seconds = now.getSeconds()
      var timeValue = "" + ((hours >12) ? hours -12 :hours)
      if (timeValue == "0") timeValue = 12;
      timeValue += ((minutes < 10) ? ":0" : ":") + minutes
      timeValue += ((seconds < 10) ? ":0" : ":") + seconds
      timeValue += (hours >= 12) ? " P.M." : " A.M."
      document.clock.face.value = timeValue;
      timerID = setTimeout("showtime()",1000);
      timerRunning = true;
      }
      function startclock() {
      stopclock();
      showtime();
      }
      window.onload=startclock;
      // End -->
    </script>                     
<p>
    <form name="clock">
    Time is:&nbsp;<input type="button" class="trans" name="face" value="" disabled="">
      </form>
</p>  
          </div>