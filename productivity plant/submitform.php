<?php
if(isset($_POST['submit'])){
    $to = "danielsphpinbox@protonmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: " . $from;
    $headers2 = "Subject: " . $subject;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you for your message " . $name;
}
?>