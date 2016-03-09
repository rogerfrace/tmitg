<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="no-js ie6 ie678" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7 ie678" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8 ie678" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Excelsis Vol. 2: A Winter's Song</title>
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
	<img src="albums/excelsis.jpg" alt="Excelsis" width="250" height="250">
	<h1>Excelsis Vol. 2: A Winter's Song</h1>
	<p class="notopmargin">(Projekt92) <a href="http://www.projekt.com/" target="_blank">Projekt</a> &copy;1999</p>
	<h1>Excelsis (Box Set)</h1>
	<p class="notopmargin">(ProExBox) <a href="http://www.projekt.com/" target="_blank">Projekt</a> &copy;2001</p>
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
	<td>tMitG track:</td>
	<td>
	Coventry Carol
	</td>
	<td>
	<? do_lyrics("coventrycarol"); ?>
	</td>
	<td>
	<? do_mp3bc2("coventrycarol","Coventry Carol",1); ?>
	</td>
	<td>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>CD exclusive track. Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	</tbody>
	</table>
</div> <!-- end tracklist div -->
		
<div id="discog_buynow">
	<h2 class="wai">Buy links</h2>
	<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822/US/themachininth-20/8001/3ee3ac6b-9900-4594-99b5-7f6e4102c0a8"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2F3ee3ac6b-9900-4594-99b5-7f6e4102c0a8&amp;Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div>

</div>

</body>
</html>
