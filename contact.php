<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["Name"];
    $clinic = $_POST["Clinic"];
    $email = $_POST["Email"];
    $phone = $_POST["Phone"];
    $inquiries = $_POST["Inquiries"];

    $to = "ezwana19@gmail.com";
    $subject = "Inquiry from Kee Vee Dental Website";
    $message = "Name: $name\nClinic: $clinic\nEmail: $email\nPhone: $phone\nInquiries: $inquiries";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>

