<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Rebellion: Vol 1</title>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="discog">
	<nav aria-label="Skip Links" class="wai" id="skip-links">
		<a href="#discog_topnav">Skip to Discography Sub Navigation</a>
		<a href="#discog_albuminfo">Skip to Album Info</a>
		<a href="#discog_tracklist">Skip to Track Listing</a>
	</nav>

<?php get_header(); ?>


<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="-1">
	<img src="albums/rebellion.png" alt="Rebellion: Vol 1" width="250" height="250">
	<h1>Rebellion: Vol 1</h1>
	<p class="notopmargin">Dark Mother Media &copy;2015</p>
</div> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="-1">
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
	Power and Prophesy (guitarless mix)
	</td>
	<td>
	<?php do_lyrics("powerandprophesy"); ?>
	</td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>
	<small>Releasing 24 October 2015.<br>Exclusive remix to this compilation.<br>Original version available on <a href="storm.php"><i>Before and After the Storm</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<section id="discog_buynow">
	<div class="buynow"><a href="https://darkmothermedia.bandcamp.com/album/rebellion-vol-1" rel="noopener external"><img src="images/bandcamp.gif" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

</section>

</div>

</body>
</html>
