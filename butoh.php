<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Butoh</title>
	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<? include_once("fontawesome.inc.php"); ?>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<?php include_once("headers-additional.php"); ?>
	<?php include_once("googletracking.html"); ?>
</head>

<body id="discog">
	<ul class="wai" id="skip-links"><!-- Included for Accessibility - Do not remove -->
		<li><a href="#discog_topnav">Skip to Discography Sub Navigation</a></li>
		<li><a href="#discog_albuminfo">Skip to Album Info</a></li>
		<li><a href="#discog_tracklist">Skip to Track Listing</a></li>
		<li><a href="#discog_buynow">Skip to Buy Now Links</a></li>
	</ul>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo">
	<img src="albums/butoh.jpg" alt="Butoh" width="277" height="250">
	<h1>Butoh</h1>
	<p class="notopmargin">(MPP002) <a href="http://www.middlepillar.com/mpp/" target="_blank">Middle Pillar Presents</a> &copy;2000</p>
</div> <!-- end album info div -->
		
		
<!-- start tracklisting table -->
<div id="discog_tracklist">
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
	<td>tMitG tracks:</td>
	<td>
	The Unaware <i>Smooth Motion Mix</i>
	</td>
	<td>
	<? do_lyrics("theunaware"); ?>
	</td>
	<td>
	<? do_mp3bc2("smoothmotionmix","The Unaware (smooth motion mix)",1); ?>
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp;
	</td>
	<td>
	<small>Original version available on <a href="mists.php"><i>Out of the Mists</i></a><br>
	Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp;
	</td>
	<td>
	Midnight <i>Dancing There</i>
	</td>
	<td>
	<? do_lyrics("midnight"); ?>
	</td>
	<td>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp;
	</td>
	<td>
	<small>Exclusive mix. 
	<br>Original version available on <a href="winters.php"><i>One Winter's Night...</i></a><br>
	Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->
	
<div id="discog_buynow">
	<h2 class="wai">Buy links</h2>
	<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/themachininth-20/8001/bca3c8ee-8084-4350-96cc-ed7829258313"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2Fbca3c8ee-8084-4350-96cc-ed7829258313&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div>

</div>

</body>
</html>
