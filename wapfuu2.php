<!DOCTYPE HTML>
<html lang="en">
<? require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - When Angels Peer Favorably Upon Us, Volume Two</title>
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="discog">
	<nav aria-label="Skip Links" class="wai" id="skip-links">
		<a href="#discog_topnav">Skip to Discography Sub Navigation</a>
		<a href="#discog_albuminfo">Skip to Album Info</a>
		<a href="#discog_tracklist">Skip to Track Listing</a>
	</nav>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody" role="main">

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="0">
	<div><img src="albums/wapfuu2.jpg" alt="When Angels Peer Favorably Upon Us, Volume Two" class="albumimg ariapreso" itemprop="image" /></div>
	<h1>When Angels Peer Favorably Upon Us, Volume Two</h1>
	<p class="notopmargin">&copy;2001<br>
	mp3.com CD released 2001</p>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="0">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "When Angels Peer Favorably Upon Us, Volume Two"</caption>
	<thead>
		<tr role="row">
			<th scope="col">Track Number</th>
			<th scope="col">Track Title</th>
			<th scope="col">Lyrics</th>
			<th scope="col">Audio</th>
			<th scope="col">Video</th>
		</tr>
	</thead>
	<tbody>
<? /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>
<? do_songtitle(1,"Corpus Christi <i>in prayer mix</i>*","corpuschristi",NULL,NULL,NULL); ?>
<? do_songtitle(2,"These Illusions <i>version 1</i>","theseillusions",NULL,NULL,NULL); ?>
<? do_songtitle(3,"Arpeggio Doodle",NULL,NULL,NULL,NULL); ?>
<? do_songtitle(4,"Dark Splintered Heart <i>fractured mix</i>","darksplintered",NULL,NULL,NULL); ?>
<? do_songtitle(5,"Christianne is Dead","christianneisdead",NULL,NULL,NULL); ?>
<? do_songtitle(6,"Oblician <i>heavy</i>","oblician",NULL,NULL,NULL); ?>
<? do_songtitle(7,"A Touch of Heaven 1999","atouchofheaven",NULL,NULL,NULL); ?>
<? do_songtitle(8,"Heavenly Air <i>crunchmix</i>","heavenlyair",NULL,NULL,NULL); ?>
<? do_songtitle(9,"Miserere Mei <i>vocal</i>&deg;","misereremei",NULL,NULL,NULL); ?>
<? do_songtitle(10,"Words in Heaven Lost <i>get out of this</i>*","wordsinheavenlost",NULL,NULL,NULL); ?>
<? do_songtitle(11,"Voices",NULL,NULL,NULL,NULL); ?>
<? do_songtitle(12,"Hidden&deg;","hidden",NULL,NULL,NULL); ?>

	<tr>
	<td colspan="5" style="border-top: 1px solid black; margin-top: 10px;">
	<span style="font-size:90%;">* Available (remastered) on <a href="xv.php"><i>XV</i></a></span><br>
	<span style="font-size:90%;">&deg; Available on <a href="miscellany.php"><i>Miscellany</i></a></span>
	</td>
	</tr>

	</tbody>
</table>
</div> <!-- end tracklist div -->

<div class="clearboth"></div>
</div> <!-- /mainbody -->

</body>
</html>
