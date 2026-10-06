<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Excelsis Vol. 2: A Winter's Song</title>
	<meta name="description" content="Excelsis Vol. 2: A Winter's Song is a 1999 compilation from Projekt, featuring the Machine in the Garden's track 'Coventry Carol.'">
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
	<div>
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener noreferrer" itemprop="url" href="https://amzn.to/3VOzvmG" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazoncom.png" width="200" height="63" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B08DDHDLBQ&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
	</div>
</div>

</div>

</body>
</html>
