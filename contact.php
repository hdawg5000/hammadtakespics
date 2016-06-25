<?php
    define('TITLE','Contact | Hammad Takes Pics');
    include('templates/header.php');
    require ('phpmailer/PHPMailerAutoload.php');

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

//    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mail = new PHPMailer();                            
        $mail->isSMTP(); 
        $mail->SMTPAuth = true;
        // $mail->SMTPDebug = 3;   // debug set to 3 to show all details

        $mail->Host = 'smtp.gmail.com';    // example smtp.gmail.com  mail.privateemail.com                             
        $mail->Username = 'maadbear@gmail.com';            
        $mail->Password = 'Goingham23!';                           
        //$mail->SMTPSecure = 'ssl';                       
        $mail->Port = 465;                                 

        $mail->addAddress('saycheese@hammadtakespics.com');     // Add a recipient
        $mail->FromName = $_POST['email'];       // the email or name you want to appear
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['message'];

        if (!$mail->send()) {
            print '<div id="contact_form"><img src="images/error.png"><h1>D\'oh!</h1><p id="error">We were unable to send your message. Please try again later.</p></div>';
            echo "Mailer Error: " . $mail->ErrorInfo;
            exit;
        } else {
            print '<div id="contact_form"><img src="images/success.png"><h1>Success!</h1><p id="success">Email sent successfully</p></div>';
        }

        //$mail->addReplyTo($_POST['from'], 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com'); 

        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//   } else if (empty($_SESSION['username'])) {
    } else {
        print '<div id="contact_form"><h1 class="page_title">Contact us</h1>
        <form action="contact.php" method="post">
        <p>Name <input type="text" name="name" size="30" required></p>
        <p>Email <input type="email" name="email" size = "30" required></p>
        <p>Subject <input type="text" name="subject" size = "30" required></p>
        <p>Message</br> <textarea name="message" rows="15" cols="55"></textarea></p>
        <input type="submit" id="submit" value="Send" name="submit"></form></div>';
        
    } 
//    else {
//        print '<div id="contact_form"><img src="images/error.png"><h1>Sorry!</h1><p id="error">You must be logged in to contact us!</p></div>';
//    }

    include('templates/footer.php');
?>