<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<meta property="og:site_name" content="the Machine in the Garden" />
	<meta property="og:title" content="the Machine in the Garden - Contact Us" />
	<meta property="og:type" content="band" />
	<meta property="og:url" content="http://www.tmitg.com/contact.php" />
	<meta property="og:image" content="http://www.tmitg.com/photos/xv1.jpg" />
    <meta property="og:locale" content="en_US" />
    <meta property="fb:app_id" content="145634995501895">
    <meta property="fb:admins" content="1120445561,713632115">
	<title>the Machine in the Garden - contact</title>
	<?php include_once("headers-additional.php"); ?>
	<script src="js/jquery.tools.min.js" type="text/javascript"></script>
	<script src="js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<!--[if lte IE 9 ]><script src="js/jquery.placeholder.js" type="text/javascript"></script>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="tmitg.css" />

	<script type="text/javascript">
		$(document).ready(function(){
			$("#contactForm").validate();
		});
	</script>

	<? include_once("googletracking.html"); ?>
</head>

<body id="contact">
	<div class="wai" id="skip-links"><!-- Included for Accessibility - Do not remove -->
		<a href="#contactForm">Skip to Email Contact Form</a>
	</div>

<? get_header(); ?>

<main class="mainbody">

<section id="leftcolumn">
<h2 class="wai">Physical Location</h2>
<!-- address card -->
<address id="hcard-the-Machine-in-the-Garden" class="vcard">
	<img style="display:none;" src="http://www.tmitg.com/photos/xv1-ico.jpg" alt="photo of " class="photo ariahidden" />
	<a class="url n ariahidden" id="url" href="http://www.tmitg.com/">  <span class="given-name"></span>
	<span class="additional-name"></span>
	<span class="family-name"></span>
	</a>
	<div class="org" rel="me">the Machine in the Garden</div>
	<div class="fn note">Roger Frac&eacute; &amp; <a href="http://www.tmitg.com/summer/" target="_blank">Summer Bowman</a></div>
	<div class="adr">
		<span class="locality">Austin</span>, 
		<span class="region">Texas</span> 
		<div class="country-name">USA</div>
	</div>
</address>

<!-- /address card -->

</section> <!-- /leftcolumn -->

<!-- ########################################## -->

<section id="rightcolumn">

<h1>tMitG Email Contact Form</h1>

<form id="contactForm" action="do_econtact.php" method="post">

<div>
<label for="name">Your Name:</label>
<input type="text" name="name" id="name" class="required" size="40" maxlength="50" required />
</div>

<div>
<label for="email">Your Email Address:</label>
<input type="email" name="email" id="email" class="required email" size="40" maxlength="50" required autocapitalize="off" />
</div>

<div>
<label for="to">To:</label>
<select name="to" id="to" size="1" class="required" required>
	<option value="" selected="selected">--Pull down to select contact--</option>
	<option value="1">the Band</option>
	<option value="2">Summer</option>
	<option value="3">Roger</option>
	<option value="5">Promotional Inquiries</option>
	<option value="8">Booking</option>
	<option value="6">Merchandise Order Inquiries</option>
	<option value="7">Web Site Problems</option>
</select>
</div>

<div>
<label for="subject">Subject:</label>
<input type="text" name="subject" id="subject" class="required" size="40" maxlength="75" required />
</div>

<div>
<label for="message">Your Message:</label>
<textarea name="message" id="message" class="required" rows="10" cols="40" required></textarea>
</div>

<div class="honey">
<label for="honeypot">Enter something here if you're a spammer</label>
<input type="text" id="honeypot" name="honeypot">
</div>

<div>
<input type="hidden" name="timestamp" id="timestamp" value="<?php echo time(); ?>" />
<input type="hidden" name="referrer" id="referrer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />

<input type="submit" id="submit" value="Submit" /> <input type="reset" id="reset" value="Reset Form" />
</div>

</form>

</section> <!-- /rightcolumn -->

<!-- ########################################## -->

<div style="clear:both;"></div>
</main> <!-- /mainbody -->

</body>
</html>
