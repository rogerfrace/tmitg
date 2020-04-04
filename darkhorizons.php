<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Dark Horizons: Dance of the Dead</title>
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
	<img src="albums/darkhorizons.jpg" alt="Dark Horizons: Dance of the Dead" width="253" height="250">
	<h1>Dark Horizons: Dance of the Dead</h1>
	<p class="notopmargin">Dark Horizons radio show fundraiser &copy;2008</p>
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
	Mental Wasteland
	</td>
	<td>
	<?php do_lyrics("mentalwasteland"); ?>
	</td>
	<td>
	&nbsp;
	</td>
	<td>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>Also available on <a href="xv.php"><i>XV</i></a></small>
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
