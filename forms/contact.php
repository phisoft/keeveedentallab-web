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

?>



