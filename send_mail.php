<?php
session_start();
$name=$_POST['txtName'];
$lastname=$_POST['txtLastname'];
$email=$_POST['txtEmail'];
$message=$_POST['txtMessage'];

$name=trim($name);
$lastname=trim($lastname);
$email=trim($email);
$message=trim($message);

$error=false;
if($name=="") $error=true;
if($lastname=="") $error=true;
if($email=="") $error=true;
if($message=="") $error=true;

if(!$error) { $_SESSION['mail_send']=true; mail('mastnr@gmail.com','Μήνυμα απο χρήστη του GaiaPellas.gr',$message,"From:".$email); }
else { $_SESSION['mail_send']=false; $_SESSION['sender_name']=$name; $_SESSION['sender_lastname']=$lastname; $_SESSION['sender_email']=$email; $_SESSION['sender_message']=$message; }

header("Location:contact.php#Form");
?>