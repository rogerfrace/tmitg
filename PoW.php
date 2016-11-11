<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Defend the Palace: Worms A.D.MCLXXXIV</title>
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

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody clearleft" role="main">

<!-- this is the display table for the CD and info -->
<div id="discog_albuminfo" tabindex="0">
	<img src="albums/PoW.jpg" alt="Palace of Worms" width="250" height="250">
	<h1>Defend the Palace: Worms A.D.MCLXXXIV</h1>
	<p class="notopmargin">(po14w-2) Palace of Worms &copy;2002</p>
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
	Far From Home
	</td>
	<td>
	<? do_lyrics("farfromhome"); ?>
	</td>
	<td>
	<? do_mp3bc2("farfromhome","Far From Home",1); ?>
	</td>
	<td>
	&nbsp;
	</td>
	</tr>
	
	<tr>
	<td colspan="5">
	<small>CD exclusive track. Available digitally on <a href="miscellany.php">Miscellany</a>.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


<? /*<div id="discog_buynow" tabindex="0">
		<h2 class="wai">Buy links</h2>
		<p><a href="http://phobos.apple.com/WebObjects/MZStore.woa/wa/viewAlbum?playlistId=211275101&s=143441&i=211275225" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'PoW');"><img alt="iTunes Store" height="31" width="105" border="0" src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif"></a></p>
		<div><OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/get/flashplayer/current/swflash.cab" id="Player_564bd001-70ff-41e6-8214-ec6e5a2c7317"  WIDTH="120" HEIGHT="90"> <PARAM NAME="movie" VALUE="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8014%2F564bd001-70ff-41e6-8214-ec6e5a2c7317&amp;Operation=GetDisplayTemplate"><PARAM NAME="quality" VALUE="high"><PARAM NAME="bgcolor" VALUE="#FFFFFF"><PARAM NAME="allowscriptaccess" VALUE="always"><embed src="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8014%2F564bd001-70ff-41e6-8214-ec6e5a2c7317&amp;Operation=GetDisplayTemplate" id="Player_564bd001-70ff-41e6-8214-ec6e5a2c7317" quality="high" bgcolor="#ffffff" name="Player_564bd001-70ff-41e6-8214-ec6e5a2c7317" allowscriptaccess="always"  type="application/x-shockwave-flash" align="middle" height="90" width="120"></embed></OBJECT> <NOSCRIPT><A HREF="http://ws.amazon.com/widgets/q?ServiceVersion=20070822&amp;MarketPlace=US&amp;ID=V20070822%2FUS%2Fthemachininth-20%2F8014%2F564bd001-70ff-41e6-8214-ec6e5a2c7317&amp;Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></div>
</div> <!-- end buy button div --> */ ?>


</div>

</body>
</html>
