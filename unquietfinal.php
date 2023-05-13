<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - The Unquiet Grave: The Final Chapter</title>
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
	<img src="albums/unquietfinal.jpg" alt="The Unquiet Grave: The Final Chapter" width="250" height="250">
	<h1>The Unquiet Grave: The Final Chapter</h1>
	<p class="notopmargin">Cleopatra Records &copy;2022</p>
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
	<td>
	<?php do_mp3bc2("coldstorm"); ?>
	</td>
	<td>
	<?php do_video("coldstorm"); ?>
	</td>
	</tr>
	
	<tr>
	<td>
	<small>Released <time>29 April 2022</time>.<br>Also available on <a href="places.php"><i>Places in Between</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<section id="discog_buynow">
	<div class="buynow"><a href="https://theunquietgrave2020.bandcamp.com/album/procession-magazine-presents-the-unquiet-grave-the-final-chapter" rel="noopener external"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>

</section>

</div>

</body>
</html>
