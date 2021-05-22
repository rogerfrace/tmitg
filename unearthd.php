<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Unearth'd</title>
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
	<img src="albums/unearthd.jpg" alt="Unearth'd" width="257" height="250">
	<h1>Unearth'd</h1>
	<p class="notopmargin">Broken Sound Tapes &copy;2021</p>
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
	Beyond
	</td>
	<td>
	<?php do_lyrics("beyond"); ?>
	</td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>
	<small>Released <time>22 May 2021</time>.<br>Also available on <a href="places.php"><i>Places in Between</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<section id="discog_buynow">
	<div class="buynow"><a href="https://brokensoundtapes.bandcamp.com/album/unearthd" rel="noopener external"><img src="images/bandcamp.gif" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

</section>

</div>

</body>
</html>
