<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Dark Treasures: A Gothic Tribute to the Cocteau Twins</title>
	<meta name="description" content="Dark Treasures: A Gothic Tribute to the Cocteau Twins is a 2000 compilation from Cleopatra Records, featuring the Machine in the Garden's track 'Need-Fire.'">
	<meta name="copyright" content="<?=date('Y',time());?>">
	<?php include_once "headers-additional.php"; ?>
</head>

<body id="discog">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>


<!-- this is the album header nav -->
<?php include_once "includes/discogsubnav.inc.php"; ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main" id="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="-1">
	<img src="albums/cocteautribute.jpg" alt="Dark Treasures" width="250" height="250">
	<h1>Dark Treasures: A Gothic Tribute to the Cocteau Twins</h1>
	<p class="notopmargin">Cleopatra Records &copy;2000</p>
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
	Need-Fire
	</td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>Exclusive track.</small>
	</td>
	</tr>
		
	</tbody>
</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="-1">
	<h2 class="wai">Buy links</h2>
	<div><a rel="noopener noreferrer" href="https://open.spotify.com/album/4eh4MCtN0gCqIN2ejwhy93?si=eUgt3O4bS5urQaCXVwDCNg" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Spotify'});"><img src="images/listen-on-spotify.png" width="200" height="73" class="spotify" alt="Listen on Spotify" /></a></div>

</div>
	
</div>

</body>
</html>
