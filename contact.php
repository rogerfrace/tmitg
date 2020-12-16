<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - contact</title>
	<meta name="description" content="Contact form and information for the Machine in the Garden.">
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
	<link rel="stylesheet" type="text/css" href="tmitg.css" />


	<?php include_once("googletracking.html"); ?>
</head>

<body id="contact">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>

<main id="main" class="mainbody">

<div class="flexwrapper">

	<section id="leftcolumn" aria-label="Physical Location">
	<h2 class="wai">Physical Location</h2>
	<!-- address card -->
	<address>
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

	<section id="rightcolumn" aria-label="Email Contact Form">

	<h1>tMitG Email Contact Form</h1>

	<form id="contactForm" action="do_econtact.php" method="post">
	<small>all fields are required</small>

	<div>
	<label for="name">Your Name:</label>
	<input type="text" name="name" id="name" class="required" size="40" maxlength="50" required />
	</div>

	<div>
	<label for="email">Your Email Address:</label>
	<input type="email" name="email" id="email" class="required email" size="40" maxlength="50" required />
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
	<textarea name="message" id="message" class="required" rows="10" cols="38" required></textarea>
	</div>

	<div class="honey">
	<label for="agreement">Enter something here if you are a spammer</label>
	<input type="text" id="agreement" name="agreement">
	</div>

	<div>
	<input type="hidden" name="timestamp" id="timestamp" value="<?php echo time(); ?>" />
	<input type="hidden" name="referrer" id="referrer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />

	<input type="reset" id="reset" value="Reset Form" />
	<input type="submit" id="submit" value="Submit Contact Form" />
	</div>

	</form>

	</section> <!-- /rightcolumn -->

</div> <!-- /flexwrapper -->

<div style="clear:both;"></div>
</main> <!-- /mainbody -->

</body>
</html>
