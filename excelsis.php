<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Excelsis Vol. 2: A Winter's Song</title>
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
	<img src="albums/excelsis.jpg" alt="Excelsis" width="250" height="250">
	<h1>Excelsis Vol. 2: A Winter's Song</h1>
	<p class="notopmargin">(Projekt92) <a href="http://www.projekt.com/" target="_blank">Projekt</a> &copy;1999</p>
	<h1>Excelsis (Box Set)</h1>
	<p class="notopmargin">(ProExBox) <a href="http://www.projekt.com/" target="_blank">Projekt</a> &copy;2001</p>
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
	Coventry Carol
	</td>
	<td>
	<?php do_lyrics("coventrycarol"); ?>
	</td>
	<td>
	<?php do_mp3bc2("coventrycarol","Coventry Carol",1); ?>
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
	<div><SCRIPT charset="utf-8" type="text/javascript" src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822/US/themachininth-20/8001/3ee3ac6b-9900-4594-99b5-7f6e4102c0a8"> </SCRIPT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8001%2F3ee3ac6b-9900-4594-99b5-7f6e4102c0a8&amp;Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div>

</div>

</body>
</html>
