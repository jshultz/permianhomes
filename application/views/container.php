<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"> <!--<![endif]-->


<head>

	<?php
	$this->load->view('meta');
	?>

</head>


<body class="<?php echo $filename ?>" accesskey="">
<?php
$this->load->view('header');
$this->load->view($page);
$this->load->view('footer');
?>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<!--<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>-->
<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>

<script language="javascript" type="text/javascrinopept" src="<?php echo base_url();?>assets/js/pngfix.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tweet.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/jqueryScripts.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/placeholder.min.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/libs/bootstrap.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>




</body>


</html>