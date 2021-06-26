<?php
if(isset($_POST["sendMailBtn"])){
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST["email"];
    $to = "admin@sabari.co";
    $subject = $_POST["name"];
    $message = $_POST["message"];
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers)) {
		echo '<script>alert("Email Sent Successfully")</script>';
    } else {
    	echo '<script>alert("The email message was not sent.")</script>';
    }
    
header ("location: contact.html");
}
?>