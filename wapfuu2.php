<!DOCTYPE HTML>
<html lang="en">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - When Angels Peer Favorably Upon Us, Volume Two</title>
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

<div class="mainbody" role="main">

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/wapfuu2.jpg" alt="When Angels Peer Favorably Upon Us, Volume Two album cover" class="albumimg" itemprop="image" /></div>
	<h1>When Angels Peer Favorably Upon Us, Volume Two</h1>
	<p class="notopmargin">&copy;2001<br>
	mp3.com CD released 2001</p>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="-1">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "When Angels Peer Favorably Upon Us, Volume Two"</caption>
	<thead>
		<tr role="row">
			<th scope="col" class="wai">Track Number</th>
			<th scope="col" class="wai">Track Title</th>
			<th scope="col" class="wai">Lyrics</th>
			<th scope="col" class="wai">Audio</th>
			<th scope="col" class="wai">Video</th>
		</tr>
	</thead>
	<tbody>
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>
<?php do_songtitle(1,"Corpus Christi <i>in prayer mix</i>*","corpuschristi",NULL,NULL,NULL); ?>
<?php do_songtitle(2,"These Illusions <i>version 1</i>","theseillusions",NULL,NULL,NULL); ?>
<?php do_songtitle(3,"Arpeggio Doodle",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(4,"Dark Splintered Heart <i>fractured mix</i>&dagger;","darksplintered",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"Christianne is Dead","christianneisdead",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"Oblician <i>heavy</i>","oblician",NULL,NULL,NULL); ?>
<?php do_songtitle(7,"A Touch of Heaven 1999","atouchofheaven",NULL,NULL,NULL); ?>
<?php do_songtitle(8,"Heavenly Air <i>crunchmix</i>&dagger;","heavenlyair",NULL,NULL,NULL); ?>
<?php do_songtitle(9,"Miserere Mei <i>vocal</i>&deg;","misereremei",NULL,NULL,NULL); ?>
<?php do_songtitle(10,"Words in Heaven Lost <i>get out of this</i>*","wordsinheavenlost",NULL,NULL,NULL); ?>
<?php do_songtitle(11,"Voices",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(12,"Hidden&deg;","hidden",NULL,NULL,NULL); ?>

	<tr>
	<td colspan="5" style="border-top: 1px solid black; margin-top: 10px;">
		<small>* Available (remastered) on <a href="xv.php"><i>XV</i></a></small><br>
		<small>&deg; Available on <a href="miscellany.php"><i>Miscellany</i></a></small>
		<small>&dagger; Available on <a href="https://tmitg.bandcamp.com/album/veils-and-shadows-remixes"><i>Veils and Shadows Remixes</i></a></small>
	</td>
	</tr>

	</tbody>
</table>
</div> <!-- end tracklist div -->

<div class="clearboth"></div>
</div> <!-- /mainbody -->

</body>
</html>
