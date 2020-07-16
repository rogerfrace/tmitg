<!DOCTYPE HTML>
<html lang="en">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - When Angels Peer Favorably Upon Us, Volume One</title>
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
	<meta itemprop="numTracks" content="10">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/wapfuu1.jpg" alt="When Angels Peer Favorably Upon Us, Volume One album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">When Angels Peer Favorably Upon Us, Volume One</h1>
	<p class="notopmargin">&copy;<span itemprop="copyrightYear">2000</span><br>
	mp3.com CD released 2000</p>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="-1">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "When Angels Peer Favorably Upon Us, Volume One"</caption>
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
<?php do_songtitle(1,"Machinery <i>mind/body mix</i>&deg;",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(2,"Cut Me <i>version 1</i>","cutme",NULL,NULL,NULL); ?>
<?php do_songtitle(3,"Six Days*","sixdays",NULL,NULL,NULL); ?>
<?php do_songtitle(4,"CryGods <i>falling rain</i>&dagger;","crygods",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"Ex Oblivione <i>version 1</i>*","exoblivione",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"Oblician <i>&eacute;ire mix</i>*","oblician",NULL,NULL,NULL); ?>
<?php do_songtitle(7,"Words in Heaven Lost <i>version 1</i>","wordsinheavenlost",NULL,NULL,NULL); ?>
<?php do_songtitle(8,"Dreams of the Absent <i>orchestral</i>&deg;","dreamsoftheabsent",NULL,NULL,NULL); ?>
<?php do_songtitle(9,"Walls*","walls",NULL,NULL,NULL); ?>
<?php do_songtitle(10,"Heavenly Dub&dagger;",NULL,NULL,NULL,NULL); ?>

	<tr>
	<td colspan="5" style="border-top: 1px solid black; margin-top: 10px;">
		<small>* Available (remastered) on <a href="xv.php"><i>XV</i></a></small><br>
		<small>&deg; Available on <a href="miscellany.php"><i>Miscellany</i></a></small><br>
		<small>&dagger; Available on <a href="vsremix.php"><i>Veils and Shadows Remixes</i></a></small>
	</td>
	</tr>

	</tbody>
</table>
</div> <!-- end tracklist div -->

<div class="clearboth"></div>
</main> <!-- /mainbody -->

</body>
</html>
