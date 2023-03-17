<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) %% isset($_POST['email'])){
    $name = $_POST['name'];
    $clinic = $_POST['clinic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    required_once "PHPMailer/PHPMailer.php";
    required_once "PHPMailer/SMTP.php";
    required_once "PHPMailer/Exception.php";
    
    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->Host = "smtp@gmail.com";
    $mail->SMTPAuth = true ;
    $mail->UserName = "";
    $mail->Password = '';
    $mail->Port = 465;
    $mail->SMTPSecure = "ss;";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("");
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



