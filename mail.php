<?php

$sourcemail = $_POST['emailadress'];
$targetmail = "info@admindomain.be";
$title = $_POST['emailsubject'];
$message = "LABO-mail-MESSAGE: " . $_POST['emailbody'];

if($sourcemail){
if(mail("$targetmail", "$title", "$message", "From: $sourcemail")){
print ("&errormessage=YOUR MESSAGE HAS BEEN SENDED!!"); 
}else{
print ("&errormessage=SYSTEMERROR!!");
}}else{
print ("&errormessage=GIVE YOUR EMAILADRESS!!");
}




