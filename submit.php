<?php
if ($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: https://bioshiitake.tirol/contact.php?error=1&msg=noPost");
	die();
}

if(empty($_POST["name"]) OR empty($_POST["email"]) OR empty($_POST["betreff"]) OR empty($_POST["nachricht"]) OR !empty($_POST["testfield"])){
	header("Location: https://bioshiitake.tirol/contact.php?error=1&msg=notAllSet");
	die();
}

$name = trim(htmlspecialchars($_POST["name"]));
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$betreff = htmlspecialchars($_POST["betreff"]);
$message = htmlspecialchars($_POST["nachricht"]);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	header("Location: https://bioshiitake.tirol/contact.php?error=1&msg=invalidEmail");
	die();
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'mail/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'bioshiitake.tirol';                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'website@bioshiitake.tirol';            //SMTP username
    $mail->Password   = 'CVtDdGU0*k75mU';                       //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('website@bioshiitake.tirol', 'Kontaktformular Website');
    $mail->addAddress('mail@bioshiitake.tirol');     //Add a recipient
    $mail->addReplyTo($email, $name);

    //Content
    $mail->isHTML(false);                                  //Set email format to HTML
    $mail->Subject = $betreff;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    
	
	header("Location: https://bioshiitake.tirol/contact.php?error=0");
	die();
} catch (Exception $e) {
	error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}", 1, "admin@cafeshivani.at");
	header("Location: https://bioshiitake.tirol/contact.php?error=1");
	die();
}
?>