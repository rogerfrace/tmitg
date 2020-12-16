<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Resistor</title>
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="discog">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>


<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main" id="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="-1">
	<img src="albums/resistor.jpg" alt="Resistor" width="250" height="250">
	<h1>Resistor</h1>
	<p class="notopmargin">Nilaihah Records &copy;2000</p>
</div> <!-- end album info div -->


 <!-- start tracklisting table -->


<div id="discog_tracklist" tabindex="-1">
	<table>
	<thead>
		<tr>
			<th scope="col" class="wai">Track Number</th>
			<th scope="col" class="wai">Track Title</th>
			<th scope="col" class="wai">Lyrics</th>
			<th scope="col" class="wai">Audio</th>
			<th scope="col" class="wai">Video</th>
		</tr>
	</thead>
	<tbody>
	<tr>
	<td>tMitG track:</td>
	<td>
	Control
	</td>
	<td>
	<?php do_lyrics("control"); ?>
	</td>
	<td>
	<?php do_mp3bc2("control","Control",1); ?>
	</td>
	<td>
	<?php do_video("control",320,240); ?>
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

<div id="discog_buynow" tabindex="-1">
		<h2 class="wai">Buy links</h2>
		<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/resistor/276687821?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=250x83&amp;releaseDate=954201600&h=7ff2f466b9c65dc3a8efb0e5442f332b" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>
</div> <!-- end buy button div -->


</div>

</body>
</html>
