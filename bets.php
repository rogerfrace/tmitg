<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Cover Your Bets</title>
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
	<img src="albums/bets.jpg" alt="Cover Your Bets!" width="250" height="250">
	<h1>Cover Your Bets</h1>
	<p class="notopmargin">(MPP006) Middle Pillar Presents &copy;2003
	<br>Promotional CD for Convergence 9</p>
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
	Obsession
	</td>
	</tr>
		
	<tr>
	<td>
	<small>Animotion cover.<br>CD exclusive track. Available digitally on <a href="miscellany.php">Miscellany</a>.</small>

	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


</div>

</body>
</html>
