<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - One Winter&rsquo;s Night&hellip;',
	'og:type'=>'music.album',
	'og:upc'=>'685879999923',
	'og:url'=>'http://www.tmitg.com/winters.php',
	'og:description'=>'the Machine in the Garden &ldquo;One Winter&rsquo;s Night&hellip;&rdquo; is the band&rsquo;s third studio album.',
	'og:image'=>'http://www.tmitg.com/albums/winters.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'281',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, One Winter's Night, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/underworld.php">
	<link rel="next" href="/mists.php">
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
	<meta itemprop="numTracks" content="13">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
    <div><img src="albums/winters.jpg" width="281" height="250" alt="One Winter's Night album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">One Winter's Night&hellip;</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP999</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">1999</span><br />full-length CD released <time datetime="1999-05" itemprop="datePublished">May 1999</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "One Winter's Night&hellip;"</caption>
	<thead>
		<tr>
			<th scope="col" class="wai">Track Number</th>
			<th scope="col" class="wai">Track Title</th>
			<th scope="col" class="wai">Lyrics</th>
			<th scope="col" class="wai">Notes</th>
			<th scope="col" class="wai">Audio</th>
			<th scope="col" class="wai">Video</th>
		</tr>
	</thead>
	<tbody itemscope itemtype="http://schema.org/MusicPlaylist">
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Falling, Too","fallingtoo","fallingtoo-bc","winters.jpg",NULL); ?>
<?php do_songtitle(2,"These Illusions","theseillusions","theseillusions-bc","winters.jpg",NULL); ?>
<?php do_songtitle(3,"Control","control","control-bc","winters.jpg","control-vid","Control"); ?>
<?php do_songtitle(4,"Lost in Side","lostinside",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"Miserere Mei","misereremei",NULL,NULL,"miserere-fan","Miserere Mei"); ?>
<?php do_songtitle(6,"Fear No More","fearnomore","fearnomore-bc","winters.jpg",NULL); ?>
<?php do_songtitle(7,"Ex Oblivione","exoblivione",NULL,NULL,NULL); ?>
<?php do_songtitle(8,"The Sleep of Angels","thesleepofangels","thesleepofangels-bc","winters.jpg","sleepofangels","The Sleep of Angels"); ?>
<?php do_songtitle(9,"Windows of Their Eyes","windowsoftheireyes",NULL,NULL,NULL); ?>
<?php do_songtitle(10,"Everything Alone","everythingalone",NULL,NULL,NULL); ?>
<?php do_songtitle(11,"Lullaby","lullaby",NULL,NULL,NULL); ?>
<?php do_songtitle(12,"Midnight","midnight","midnight-bc","winters.jpg",NULL); ?>
<?php do_songtitle(13,"Io's Departure",NULL,NULL,NULL,NULL); ?>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/one-winters-night" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>

	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/one-winters-night/949294972?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=925516800&h=b56884ae17e14b5666a0b7490c13443d" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="https://amzn.to/2ZSyQRl" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B002XKU3SY&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->


	<hr />
	
<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>One Winter's Night&hellip;</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="1">
	</div>
	<div class="revcontent">

<blockquote cite="http://www.sortedmagazine.com/archive/magazine/sordid/aug99.htm#winters" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>This is a step forward from their last release, "Underworld". While that showed what Roger and Summer could do across the various tracks, ranging from ethereal to hardcore industrial, this tries to pull all the styles together. And it succeeds really well. In general, they have focussed on ethereal and used that as a base to work from. The opener, 'Falling, Too' is a complex, uplifting track, with beautiful vocals on top of a classically-influenced soundscape. 'These Illusions' is darker, more edgy in a style that moves towards darkwave. Then, 'Control' bursts out of the speaker with an intense barrage of industrial, in stark contrast with the softer, melodic vocals on top.</p>
<p>'Lost In Side' is more Gothic &mdash; slow, intense and moody, before they mix the classical Latin choral singing of 'Misere Mei' with a big bass drumbeat. The classical influence carries into the piano-based 'Fear No More' with lyrics based on some of Shakespeare's work. 'Ex Oblivione' flirts with tackiness &mdash; theelectro sound could easily be the soundtrack to a tacky slasher flick and the words are inspired by H.P. Lovecraft story, but the richness of the vocals prevents it from actually sounding tacky. 'The Sleep of Angels' is the first song to feature Roger's vocals as lead, and the harmonic effect of his drone with Summer's up-lifting singing works perfectly with the powerful militaristic percussion. The next three tracks are fairly straightforward classically-influenced atmospheric music with mellow ethereal vocals, before the Gothic 'Midnight' throws a discordant curve into the proceedings.</p>
<p>Finally, the Machine in the Garden go deliciously pretentious, creating a neo-classical composition of Aeschylus' 'Io's Departure' that climaxes in a thunderous explosion of rhythm. tMitG are, without doubt, one of the most important bands in the atmospheric scene, because they refuse to stay there. Instead they load their music with innumerable stylistic reference points and influences. This more focussed release will only serve to cement their position as one of Goth's most experimental and challenging bands.</p>
</div>
<p>-<span itemprop="author"><a href="http://www.sortedmagazine.com/archive/magazine/sordid/aug99.htm#winters" target="_blank"><span itemprop="publication">Sorted Magazine</span></a></span></p>
</blockquote>

	</div> <!-- /revcontent -->
</section>

</main> <!-- /mainbody -->
<?php include_once("includes/amazonfooter.inc.php"); ?>

<?php if (check_mobile()==true): ?>
	<style type="text/css">
		#reviews::before {content: "+ ";}
		#reviews {background-color:#cccccc; padding:0.25em;}
	</style>
	<script type="text/javascript">
	jQuery(".revcontent").hide();
	jQuery("#reviews").click(function() {
		jQuery(".revcontent").toggle("fast");
	});
	</script>
<?php endif; ?>

</body>
</html>
