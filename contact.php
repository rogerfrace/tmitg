<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>the Machine in the Garden - contact</title>
	<meta name="description" content="Contact form and information for the Machine in the Garden.">
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once "headers-additional.php"; ?>
	<link rel="stylesheet" type="text/css" href="tmitg.css" />
	<?php include_once "googletracking.html"; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
		<div class="fn note">Roger Frac&eacute; &amp; Summer Bowman</div>
		<div class="adr">
			<span class="locality">Austin</span>, 
			<span class="region">Texas</span> 
			<div class="country-name">USA</div>
		</div>
	</address>

	<!-- /address card -->

	</section> <!-- /leftcolumn -->

	<section id="rightcolumn" aria-label="Email Contact Form">

	<h1>Contact tMitG</h1>

	<p>Due to excessive amounts of spam, we have removed our contact form. Please find us instead on social media.</p>
	
	<p><a href="https://www.facebook.com/tmitg" title="tMitG on Facebook"><img src="images/facebook.png" alt=""></a>
	<a href="https://twitter.com/tmitg" title="tMitG on Twitter"><img src="images/twitter.png" alt=""></a>
	<a href="https://bsky.app/profile/tmitg.bsky.social" title="tMitG on Bluesky"><img src="images/bluesky-round.png" alt=""></a>
	<a href="https://www.youtube.com/tmitg" title="tMitG on YouTube"><img src="images/youtube.png" alt=""></a>
	<a href="https://tmitg.bandcamp.com/" title="tMitG on Bandcamp"><img src="images/bandcamp-round.png" alt=""></a></p>

	</section> <!-- /rightcolumn -->

</div> <!-- /flexwrapper -->

<div style="clear:both;"></div>
</main> <!-- /mainbody -->

</body>
</html>
