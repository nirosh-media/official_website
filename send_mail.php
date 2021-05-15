<?php
//get data from form  
$name = $_POST['username'];
$email= $_POST['email'];
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "niroshmedia@gmail.com";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@niroshmedia.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:404.php");
?>