<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Sex, Death &amp; Eyeliner</title>
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
	<img src="albums/sde.jpg" alt="Sex, Death and Eyeliner" width="253" height="250">
	<h1>Sex, Death &amp; Eyeliner</h1>
	<p class="notopmargin">(DFM-0001) Dark Future Music &copy;2001</p>
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
	Miserere Mei
	</td>
	<td>
	<?php do_lyrics("misereremei"); ?>
	</td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>Available on <a href="winters.php"><i>One Winter's Night...</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


<div id="discog_buynow" tabindex="-1">
		<h2 class="wai">Buy links</h2>
		<div><a href="https://geo.music.apple.com/us/album/sex-death-eyeliner-original-soundtrack/316673505?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=250x83&amp;releaseDate=989712000&h=9f8b845b19a52f5814e4957567c576a3" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>
</div> <!-- end buy button div -->


</div>

</body>
</html>
