<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Resistor</title>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="discog">
	<nav aria-label="Skip Links" id="skip-links">
		<a class="wai" href="#discog_topnav">Skip to Discography Sub Navigation</a>
		<a class="wai" href="#discog_albuminfo">Skip to Album Info</a>
		<a class="wai" href="#discog_tracklist">Skip to Track Listing</a>
		<a class="wai" href="#discog_buynow">Skip to Buy Now Links</a>
	</nav>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="0">
	<img src="albums/resistor.jpg" alt="Resistor" width="250" height="250">
	<h1>Resistor</h1>
	<p class="notopmargin">Nilaihah Records &copy;2000</p>
</div> <!-- end album info div -->


 <!-- start tracklisting table -->


<div id="discog_tracklist" tabindex="0">
	<table>
	<thead>
		<tr>
			<th>Track Number</th>
			<th>Track Title</th>
			<th>Lyrics</th>
			<th>Audio</th>
			<th>Video</th>
		</tr>
	</thead>
	<tbody>
	<tr>
	<td>tMitG track:</td>
	<td>
	Control
	</td>
	<td>
	<? do_lyrics("control"); ?>
	</td>
	<td>
	<? do_mp3bc2("control","Control",1); ?>
	</td>
	<td>
	<? do_video("control",320,240); ?>
	</td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>Available on <a href="winters.php"><i>One Winter&rsquo;s Night&hellip;</i></a></small>
	</td>
	</tr>
	</tbody>
	</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="0">
		<h2 class="wai">Buy links</h2>
		<p><a href="https://itunes.apple.com/us/album/resistor/id276687821" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'resistor');"><img alt="iTunes Store" height="31" width="105" border="0" src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif"></a></p>
		<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/themachininth-20/8001/2bc584f3-26f9-413a-9ea7-d02e5db110ac"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2F2bc584f3-26f9-413a-9ea7-d02e5db110ac&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></iframe>
</div>
</div> <!-- end buy button div -->


</div>

</body>
</html>
