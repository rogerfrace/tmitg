<!DOCTYPE HTML>
<html lang="en">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - Veils and Shadows Remixes</title>
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

<main id="main" class="mainbody" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="7">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/vsremix.jpg" alt="Veils and Shadows Remixes album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Veils and Shadows Remixes</h1>
	<p class="notopmargin">&copy;<span itemprop="copyrightYear">1995</span><br>
	<i>Veils and Shadows Remixes</i> was never released. tMitG's contract for the <i>Veils and Shadows EP</i> was for both a CD and a 12" vinyl version. The vinyl version was delayed, and Roger thought it was a good idea not to release a 12" of the same material (minus one song nonetheless), but to make it more enticing by releasing a longer, remix record. With very slow sales of the CD, the contract with the record label expired before the 12" ever came to be.</p>
	<p>Fortunately, Bandcamp makes it easy to make this previously unavailable material available to our fans.</p>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="-1">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "Veils and Shadows Remixes"</caption>
	<thead>
		<tr>
			<th scope="col" class="wai">Track Number</th>
			<th scope="col" class="wai">Track Title</th>
			<th scope="col" class="wai">Lyrics</th>
			<th scope="col" class="wai">Audio</th>
			<th scope="col" class="wai">Video</th>
		</tr>
	</thead>
	<tbody itemscope itemtype="http://schema.org/MusicPlaylist">
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>
<?php do_songtitle(1,"Dark Splintered Heart (fractured mix)","darksplintered",NULL,NULL,NULL); ?>
<?php do_songtitle(2,"A Touch of Heaven (a touch of retro)","atouchofheaven",NULL,NULL,NULL); ?>
<?php do_songtitle(3,"CryGods (falling rain remix)","crygods",NULL,NULL,NULL); ?>
<?php do_songtitle(4,"Heavenly Dub","heavenlyair",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"CryGods (mind overdrive remix)","crygods",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"Dark Splintered Heart (mutation engine remix)","darksplintered",NULL,NULL,NULL); ?>
<?php do_songtitle(7,"Heavenly Air (crunchmix)","heavenlyair",NULL,NULL,NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->

<section id="discog_buynow" tabindex="-1">
	<h2 class="wai">Buy Now links</h2>
	
	<div class="buynow"><a rel="noopener external" href="https://tmitg.bandcamp.com/album/veils-and-shadows-remixes" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>

</section> <!-- end buy button div -->

<div class="clearboth"></div>
</main> <!-- /mainbody -->

</body>
</html>
