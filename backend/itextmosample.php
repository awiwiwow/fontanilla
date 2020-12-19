<?php
//localhost
//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode){
$url = 'https://www.itexmo.com/php_api/api.php';
$itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
$param = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($itexmo),
    ),
);
$context  = stream_context_create($param);
return file_get_contents($url, false, $context);}
//##########################################################################



//hosted
// //##########################################################################
// // ITEXMO SEND SMS API - PHP - CURL METHOD
// // Visit www.itexmo.com/developers.php for more info about this API
// //##########################################################################
// function itexmo($number,$message,$apicode){
//             $ch = curl_init();
//             $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
//             curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
//             curl_setopt($ch, CURLOPT_POST, 1);
//              curl_setopt($ch, CURLOPT_POSTFIELDS,
//                       http_build_query($itexmo));
//             curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//             return curl_exec ($ch);
//             curl_close ($ch);
// }
// //##########################################################################






                                    if($_POST){

                                        // $number = $_POST['contact_no'];

                                          $number = $_POST['number'];
                                          $name = $_POST['name'];
                                          $message = $_POST['message'];
                                          $text=$name.":".$message;
                                          $api="TR-FONTA455497_PMWN1";
                                          echo $text;


                                    if(!empty($_POST['name'])&&($_POST['number'])&&($_POST['message'])){
                                    $result = itexmo($number,$message,$api);
                                                if ($result == ""){
                                                echo "iTexMo: No response from server!!!
                                                Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
                                                Please CONTACT US for help. ";
                                                }else if ($result == 0){
                                                echo "Message Sent!";
                                                }
                                                else{
                                                echo "Error Num ". $result . " was encountered!";
                                                }




                                    }
                                    }


?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>



<form method="post" >
<table>

      <tr><td>
            <input type="text" name="name" maxlength="10" required placeholder="name"></td></tr>


             <tr><td> <input type="text" name="number" maxlength="11" required placeholder="enter number"></td></tr>

              <tr><td><textarea name="message" placeholder="enter message here" onkeyup="countChar(this)" required></textarea> <!-- <p id="charNum">85</p> -->
      </td></tr>
        <tr><td><button type="submit">send</button></td></tr>




</table>


</form>

<!--
            <textarea placeholder="enter message here" onkeyup="countChar(this)"></textarea>
            <p id="charNum">85</p>

            <script type="text/javascript">

                function countChar(val){
                    var len = val.value.length
                    if(len>=85){

                        val.value = val.value.substring(0,85);
                    }
                    else{
                        $('#charNum').text(85-len);
                    };
                }
            </script> -->

</body>
</html>