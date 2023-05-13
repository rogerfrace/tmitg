<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Butoh</title>
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
	<img src="albums/butoh.jpg" alt="Butoh" width="277" height="250">
	<h1>Butoh</h1>
	<p class="notopmargin">(MPP002) <a href="http://www.middlepillar.com/mpp/" target="_blank">Middle Pillar Presents</a> &copy;2000</p>
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
	The Unaware <i>Smooth Motion Mix</i>
	</td>
	<td>
	<?php do_lyrics("theunaware"); ?>
	</td>
	<td>
	<?php do_mp3bc2("smoothmotionmix","The Unaware (smooth motion mix)",1); ?>
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Original version available on <a href="mists.php"><i>Out of the Mists</i></a><br>
	Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	Midnight <i>Dancing There</i>
	</td>
	<td>
	<?php do_lyrics("midnight"); ?>
	</td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td>
	<small>Exclusive mix. 
	<br>Original version available on <a href="winters.php"><i>One Winter's Night...</i></a><br>
	Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->
	
<div id="discog_buynow" tabindex="-1">
	<h2 class="wai">Buy links</h2>
	<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822/US/themachininth-20/8001/bca3c8ee-8084-4350-96cc-ed7829258313"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2Fbca3c8ee-8084-4350-96cc-ed7829258313&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div>

</div>

</body>
</html>
