<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - What is Eternal</title>
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
	<img src="albums/eternal.jpg" alt="What Is Eternal" width="280" height="240">
	<h1>What is Eternal</h1>
	<p class="notopmargin">(MPP000, MPP000X) <a href="http://www.middlepillar.com/mpp/" target="_blank">Middle Pillar Presents</a> &copy;1998<br>
	out-of-print</p>
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
	Falling Softly
	</td>
	<td>
	<?php do_lyrics("fallingsoftly"); ?>
	</td>
	<td>
	<?php do_mp3bc2("fallingsoftly","Falling Softly",1); ?>
	</td>
	<td></td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>CD exclusive track. Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="-1">
	<h2 class="wai">Buy links</h2>
	<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822/US/themachininth-20/8001/50545b15-3e26-44e5-844b-02983147fa44"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2F50545b15-3e26-44e5-844b-02983147fa44&amp;Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div>

</div>

</body>
</html>
