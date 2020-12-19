 <form method="post" action="" enctype="multipart/form-data">


                <!--<input type="text" name="name" placeholder="Your Name *"><br>-->
                   
                    <!--<textarea name="msg" placeholder="Your Message"></textarea><br> -->
            <input type="email" name="email" placeholder="Email *" required>

                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                    <input type="file" name="userfile"  /><br>


                <input name="sendcopy" type="submit" value="Submit" />
   </form>


    <?php




        if(isset($_POST["sendcopy"]))
        {
                $email=$_POST["email"];

            /////File Upload

            // In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
            // of $_FILES.

            $uploaddir = 'uploads/';
            $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

            echo '<pre>';
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } else {
                echo "Possible invalid file upload !\n";
            }

            // echo 'Here is some more debugging info:';
            // print_r($_FILES);

            // print "</pre>";




                require 'phpmailer/PHPMailerAutoload.php';

                $mail = new PHPMailer;

                $mail->Host='mail.fontanillahalilidental.com';
                $mail->Port=587;
                $mail->SMTPAuth=true;
                //->SMTPSecure='tls';
                 $mail->isHTML(true);
                $mail->Username=' fontanilla.halili@fontanillahalilidental.com';
                $mail->Password='annehalili88';

                $mail->setFrom('fontanilla.halili@fontanillahalilidental.com','Fontanilla-Halili Dental');
                $mail->addAddress($email);
                $mail->Subject  = 'List of Appointments
                ( fontanillahalilidental.com )';
                $mail->AddAttachment($uploadfile);

                $mail->Body = '<h1 align=center>Fontanilla - Halili Dental</h1><br><h4 align=center>Hi Doc! Here is a copy of list of  appointments. please download it. thanks</h4><br>'. $app_details .'';



                                if (!$mail->send()) {

                                          // echo   'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                      echo  "<script>alert('Message was not sent.  Mailer error:' ". $mail->ErrorInfo.")</script>";

                                          // $_SESSION['message'] =  'Message was not sent.  Mailer error:' . $mail->ErrorInfo;
                                          // header("Location: regerror.php");
                                        //   $url = BASE_URL . 'regerror.php';
                                        //   header("Location: $url");

                                }
                                else {
                                     echo "<script>alert('file sent successfully!')</script>";

                                }


    // echo "<script>alert('attachment sent successfully!');
    //                                      window.location.href='p_export.php'</script>";

}


            ////// Email


        //     require_once("class.phpmailer.php");
        //     require_once("class.smtp.php");



        //     $mail_body = array($_POST['name'], $_POST['email'] , $_POST['msg']);
        //     $new_body = "Name: " . $mail_body[0] . ", Email " . $mail_body[1] . " Description: " . $mail_body[2];



        //     $d=strtotime("today");

        //     $subj = 'New inquiry '. date("Y-m-d h:i:sa", $d);

        //     $mail = new PHPMailer(); // create a new object


        //     //$mail->IsSMTP(); // enable SMTP
        //     $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only ,false = Disable
        //     $mail->Host = "mail.yourhost.com";
        //     $mail->Port = '465';
        //     $mail->SMTPAuth = true; // enable
        //     $mail->SMTPSecure = true;
        //     $mail->IsHTML(true);
        //     $mail->Username = "admin@domain.net"; //from@domainname.com
        //     $mail->Password = "password";
        //     $mail->SetFrom("admin@domain.net", "Your Website Name");
        //     $mail->Subject = $subj;
        //     $mail->Body    = $new_body;

        //     $mail->AddAttachment($uploadfile);

        //     $mail->AltBody = 'Upload';
        //     $mail->AddAddress("recipient@domain.com");
        //      if(!$mail->Send())
        //         {
        //         echo "Mailer Error: " . $mail->ErrorInfo;
        //         }
        //         else
        //         {

        //         echo '<p>       Success              </p> ';

        //         }

        // }



?>