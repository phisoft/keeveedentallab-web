<?php
use \PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $clinic = $_POST['clinic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    
    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true ;
    $mail->Username = "demoform11@gmail.com";
    $mail->Password = 'Milktea@1470';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl;";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("demoform11@gmail.com");
    $mail->Clinic = ("$email ($clinic)");
    $mail->Message = $message;

    if ($mail->send()){
        $status = "success";
        $response = "Email is sent!";
    }
    else 
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));

}


// error_reporting(E_ALL);
// ini_set('display_errors', 1);


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $clinic = $_POST["clinic"];
//     $email = $_POST["email"];
//     $phone = $_POST["phone"];
//     $message= $_POST["message"];

//     $to = "ezwana19@gmail.com";
//     $subject = "New Message from $name via the website";
//     $body = "Name: $name\nClinic: $clinic\nEmail: $email\n\nMessage:\n$message";
//     $headers = "From: $email";

//     if (mail($to, $subject, $body, $headers)) {
//         http_response_code(200);
//         echo "Thank you! Your message has been sent.";
//     } else {
//         http_response_code(500);
//         echo "Oops! Something went wrong and we couldn't send your message.";
//     }
// } else {
//     http_response_code(403);
//     echo "There was a problem with your submission, please try again.";
// }

?>



