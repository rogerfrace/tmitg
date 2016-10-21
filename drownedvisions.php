<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Drowned Visions</title>
	<link rel="stylesheet" type="text/css" href="tmitg.css">
	<? include_once("fontawesome.inc.php"); ?>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<?php include_once("headers-additional.php"); ?>
	<?php include_once("googletracking.html"); ?>
</head>

<body id="discog">
	<nav aria-label="Skip Links" class="wai" id="skip-links">
		<a href="#discog_topnav">Skip to Discography Sub Navigation</a>
		<a href="#discog_albuminfo">Skip to Album Info</a>
		<a href="#discog_tracklist">Skip to Track Listing</a>
	</nav>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="0">
	<img src="albums/drownedvisions.jpg" alt="Drowned Visions" width="250" height="250">
	<h1>Drowned Visions</h1>
	<p class="notopmargin">Dark Horizons &copy;2011</p>
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
	Scathefire
	</td>
	<td>
	<? do_lyrics("scathefire"); ?>
	</td>
	<td>
	&nbsp;
	</td>
	<td>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td>
	<small>Also available on <a href="storm.php"><i>Before and After the Storm</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->



</div>

</body>
</html>
