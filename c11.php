<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Convergence 11 CD Sampler</title>
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

<div><br /><br /></div>

<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">
<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="0">
	<img src="albums/c11.jpg" alt="Convergence 11 CD Sampler" width="250" height="250">
	<h1>Convergence 11 CD Sampler</h1>
	<p class="notopmargin">Promotional CD for Convergence 11</p>
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
	<td>tMitG tracks:</td>
	<td>
	Wonderland (Mad Hatter Mix)
	</td>
	<td>
	<?php do_lyrics("wonderland"); ?>
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
	<small>Also available on <a href="xv.php"><i>XV</i></a><br>Original version available on <a href="asphodel.php"><i>Asphodel</i></a></small>
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp;
	</td>
	<td>
	The Inside World
	</td>
	<td>
	<?php do_lyrics("theinsideworld"); ?>
	</td>
	<td>
	<?php do_mp3bc2("theinsideworld","The Inside World",1); ?>
	</td>
	</tr>
	
	<tr>
	<td>
	&nbsp;
	</td>
	<td>
	<small>Also available on <a href="shadowpuppets.php"><i>Shadow Puppets</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="0">
	<h2 class="wai">Buy links</h2>
</div> <!-- end buy button div -->

</div>

</body>
</html>
