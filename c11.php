<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Convergence 11 CD Sampler</title>
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
	<img src="albums/c11.jpg" alt="Convergence 11 CD Sampler" width="250" height="250">
	<h1>Convergence 11 CD Sampler</h1>
	<p class="notopmargin">Promotional CD for Convergence 11</p>
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
	<td>tMitG tracks:</td>
	<td>
	Wonderland (Mad Hatter Mix)
	</td>
	<td>
	<?php do_lyrics("wonderland"); ?>
	</td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Also available on <a href="xv.php"><i>XV</i></a><br>Original version available on <a href="asphodel.php"><i>Asphodel</i></a></small>
	</td>
	</tr>
	
	<tr>
	<td></td>
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
	<td></td>
	<td>
	<small>Also available on <a href="shadowpuppets.php"><i>Shadow Puppets</i></a></small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="-1">
	<h2 class="wai">Buy links</h2>
</div> <!-- end buy button div -->

</div>

</body>
</html>
