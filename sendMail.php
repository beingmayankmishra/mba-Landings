<?php
extract($_POST) ;
if($inputName != ''){
//echo $inputName;
error_reporting(E_ALL);
ini_set('display_errors', '1');
$mesasge='<html> <head></head> <body> <p>Hello</p> <p>An Email from DSB Contact form</p> <p>Details are given below</p><p>Email:'.$inputEmail.'</p><p>Name:'.$inputName.'</p><p>Phone:'.$inputPhone.'</p><p>City:'.$inputCity.'</p></p><p>State:'.$inputState.'</p><p>Text:'.$inputText.'</p><p>Thanks,</p> </body> </html>';


$to = 'aurbind@yahoo.com';
$subject = "DSB Admission Contact Form ";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <admin@dsb.edu.in>' . "\r\n";
#$headers .= 'Cc: shankey@tedconsult.com' . "\r\n";

$email = mail($to,$subject,$mesasge,$headers);
if($email){
//   echo("Sent");
   header("Location: http://apply.dsb.edu.in/");
}else{
    echo "Mail sending failed."; 
}
}
?>
