<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<? require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Wrapped In The Guise Of My Friend</title>
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
	<img src="albums/attrition.jpg" alt="Wrapped In The Guise Of My Friend" width="250" height="250">
	<h1>Wrapped In The Guise Of My Friend</h1>
	<p class="notopmargin">(17GodsCD) Two Gods &copy;2009
	<br><i>Attrition covers album</i></p>
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
	Dreamsleep
	</td>
	</tr>
		
	<tr>
	<td>
	<small>Attrition cover.<br>Exclusive to this compilation.</small>
	</td>
	</tr>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->

<div id="discog_buynow" tabindex="0">
		<h2 class="wai">Buy links</h2>
		<p><a href="https://itunes.apple.com/us/album/wrapped-in-guise-my-friend/id430661832" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'attrition');"><img alt="iTunes Store" height="31" width="105" border="0" src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif"></a></p>
		<div><a href="http://www.amazon.com/gp/product/B004VTTOI0/ref=as_li_ss_tl?ie=UTF8&tag=themachininth-20&linkCode=as2&camp=217153&creative=399701&creativeASIN=B004VTTOI0" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'attrition');"><img src="images/amazonmp3.jpg" class="amazon" alt="Buy Now" /></a><img src="http://www.assoc-amazon.com/e/ir?t=&l=as2&o=1&a=B004VTTOI0&camp=217153&creative=399701" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></div>
</div> <!-- end buy button div -->


</div>

</body>
</html>
