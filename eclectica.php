<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Eclectica</title>
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
	<img src="albums/eclectica.jpg" alt="Eclectica" width="250" height="250">
	<h1>Eclectica</h1>
	<p class="notopmargin">(MPP004) Middle Pillar Presents &copy;2002<br>
	Promotional CD for GothCon 2002</p>
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
	<td>tMitG tracks:</td>
	<td>
	Wonderland
	</td>
	<td>
	<?php do_lyrics("wonderland"); ?>
	</td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Alternate version available on <a href="asphodel.php"><i>Asphodel</i></a>.</small>
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	Radiant
	</td>
	<td>
	<?php do_lyrics("radiant"); ?>
	</td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Also available on <a href="mists.php"><i>Out of the Mists</i></a>.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->



</div>

</body>
</html>
