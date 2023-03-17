<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $clinic = $_POST["clinic"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $inquiries = $_POST["inquiries"];

    $to = "ezwana19@gmail.com";
    $subject = "New Message from $name via the website";
    $body = "Name: $name\nClinic: $clinic\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        http_response_code(200);
        echo "Thank you! Your message has been sent.";
    } else {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}

// $to = 'norizaezwanak@gmail.com'; // Put in your email address here
// $subject  = "Contact Us Form"; // The default subject. Will appear by default in all messages. Change this if you want.

// // User info (DO NOT EDIT!)
// $name = stripslashes($_REQUEST['name']); // sender's name
// $clinic = stripslashes($_REQUEST['clinic']); // sender's name
// $email = stripslashes($_REQUEST['email']); // sender's email
// $phone = stripslashes($_REQUEST['phone']); 
// $inquiries = stripslashes($_REQUEST['inquiries']);



// // The message you will receive in your mailbox
// // Each parts are commented to help you understand what it does exaclty.
// // YOU DON'T NEED TO EDIT IT BELOW BUT IF YOU DO, DO IT WITH CAUTION!
// $msg .= "Name: ".$name."\r\n\n";  // add sender's name to the message
// $msg .= "Clinic: ".$clinic."\r\n\n";  // add sender's name to the message
// $msg .= "E-mail: ".$email."\r\n\n";  // add sender's email to the message
// $msg .= "Phone: ".$phone."\r\n\n";  // add sender's phone to the message
// $msg .= "inquiries: ".$inquiries."\r\n\n";  // add sender's checkboxes to the message
// $msg .= "\r\n\n"; 

// $mail = @mail($to, $subject, $msg, "From:".$email);  // This command sends the e-mail to the e-mail address contained in the $to variable

// if($mail) {
// 	header("Location:index.html");	
// } else {
// 	echo 'Message could not be sent!';   //This is the message that will be shown when an error occured: the message was not send
// }


?>



