<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - A Misfit Xmas</title>
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

<?php get_header(); ?>


<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="-1">
	<img src="albums/misfit.jpg" alt="A Misfit Xmas" width="250" height="250">
	<h1>A Misfit Xmas, Volume One</h1>
	<p class="notopmargin">(MPP003) Middle Pillar Presents &copy;2001</p>
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
	See Amid the Winter's Snow
	</td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>CD exclusive track.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


<div id="discog_buynow" tabindex="-1">
		<h2 class="wai">Buy links</h2>
		<p><a href="https://music.apple.com/us/album/see-amid-the-winters-snow/204568133?i=204568191" id="itmslink" rel="noopener external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'misfit');"><img src="images/applemusic.gif" class="itunes" alt="Buy Now from Apple Music" /></a></p>
</div> <!-- end buy button div -->


</div>

</body>
</html>
