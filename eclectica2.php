<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Eclectica Volume Two</title>
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
	<img src="albums/eclectica2.jpg" alt="Eclectica 2" width="281" height="250">
	<h1>Eclectica Volume Two</h1>
	<p class="notopmargin">(MPP005) Middle Pillar Presents &copy;2003</p>
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
	Suspend
	</td>
	<td>
	<?php do_lyrics("suspend"); ?>
	</td>
	<td></td>
	<td>
	<?php do_video("suspend",320,204); ?>
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Alternate version available on <a href="shadowpuppets.php"><i>Shadow Puppets</i></a>.<br>
	Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	<tr>
	<td>
	Mirabilis track:
	</td>
	<td>
	In the Dark (remix by Roger Frac&eacute;)
	</td>
	<td></td>
	<td></td>
	<td></td>
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
