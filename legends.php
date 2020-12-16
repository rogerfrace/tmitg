<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Immortal Legends</title>
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
	<img src="albums/legends.jpg" alt="Immortal Legends" width="250" height="250">
	<h1>Immortal Legends</h1>
	<p class="notopmargin">Black Magazine/Arborlon Music &copy;2000</p>
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
	Her Face
	</td>
	<td>
	<?php do_lyrics("herface"); ?>
	</td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>Exclusive mix. 
	<br>Alternate version available on <a href="mists.php"><i>Out of the Mists</i></a></small>
	</td>
	</tr>
	</tbody>
	</table>
</div> <!-- end tracklist div -->


</div>

</body>
</html>
