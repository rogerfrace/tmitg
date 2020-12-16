<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - La Danse Macabre 9</title>
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
	<img src="albums/ladansemacabre9.jpg" alt="La Danse Macabre 9" width="250" height="250">
	<h1>La Danse Macabre 9</h1>
	<p class="notopmargin">At Sea Compilations &copy;2020</p>
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
	Cold Storm
	</td>
	<td>
	<?php do_lyrics("coldstorm"); ?>
	</td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>
	<small>Released 15 December 2020.<br>Also available on <a href="places.php"><i>Places in Between</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<section id="discog_buynow">
	<div class="buynow"><a href="https://atseacompilations.bandcamp.com/album/la-danse-macabre-9" rel="noopener external"><img src="images/bandcamp.gif" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

</section>

</div>

</body>
</html>
