<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
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
<? require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, One Winter's Night, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<link rel="stylesheet" type="text/css" href="tmitg.css" />
	<? include_once("fontawesome.inc.php"); ?>
	<!-- old version <script src="js/jquery.tools.min.js" type="text/javascript"></script>-->
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="tmitg.js" type="text/javascript"></script>
	<?php include_once("headers-additional.php"); ?>
	<? include_once("googletracking.html"); ?>
</head>

<body id="discog">
	<ul class="wai" id="skip-links"><!-- Included for Accessibility - Do not remove -->
		<li><a href="#discog_topnav">Skip to Discography Sub Navigation</a></li>
		<li><a href="#discog_albuminfo">Skip to Album Info</a></li>
		<li><a href="#discog_tracklist">Skip to Track Listing</a></li>
		<li><a href="#discog_buynow">Skip to Buy Now Links</a></li>
	</ul>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div class="mainbody" role="main" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="13">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo">
    <div><img src="albums/winters.jpg" alt="One Winter's Night" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">One Winter's Night&hellip;</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP999</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">1999</span><br />full-length CD released <span itemprop="datePublished">May 1999</span></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<section id="discog_tracklist">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "One Winter's Night&hellip;"</caption>
	<thead role="rowgroup">
		<tr role="row">
			<th scope="col" role="columnheader">Track Number</th>
			<th scope="col" role="columnheader">Track Title</th>
			<th scope="col" role="columnheader">Lyrics</th>
			<th scope="col" role="columnheader">Audio</th>
			<th scope="col" role="columnheader">Video</th>
		</tr>
	</thead>
	<tbody role="rowgroup" itemtype="http://schema.org/MusicPlaylist">

<? /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<? do_songtitle(1,"Falling, Too","fallingtoo","fallingtoo-bc","winters.jpg",NULL); ?>
<? do_songtitle(2,"These Illusions","theseillusions","theseillusions-bc","winters.jpg",NULL); ?>
<? do_songtitle(3,"Control","control","control-bc","winters.jpg","control-vid","Control"); ?>
<? do_songtitle(4,"Lost in Side","lostinside",NULL,NULL,NULL); ?>
<? do_songtitle(5,"Miserere Mei","misereremei",NULL,NULL,"miserere-fan","Miserere Mei"); ?>
<? do_songtitle(6,"Fear No More","fearnomore","fearnomore-bc","winters.jpg",NULL); ?>
<? do_songtitle(7,"Ex Oblivione","exoblivione",NULL,NULL,NULL); ?>
<? do_songtitle(8,"The Sleep of Angels","thesleepofangels","thesleepofangels-bc","winters.jpg","sleepofangels","The Sleep of Angels"); ?>
<? do_songtitle(9,"Windows of Their Eyes","windowsoftheireyes",NULL,NULL,NULL); ?>
<? do_songtitle(10,"Everything Alone","everythingalone",NULL,NULL,NULL); ?>
<? do_songtitle(11,"Lullaby","lullaby",NULL,NULL,NULL); ?>
<? do_songtitle(12,"Midnight","midnight","midnight-bc","winters.jpg",NULL); ?>
<? do_songtitle(13,"Io's Departure",NULL,NULL,NULL,NULL); ?>
	
	</tbody>
</table>
</section> <!-- end tracklist div -->


<section id="discog_buynow" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow ccnow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="CCNow"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a itemprop="url" class="atcss" href="http://www.ccnow.com/cgi-local/cart.cgi?deusex_MPP999US_http://www.tmitg.com/merch.php" onclick="ga('send', 'event', 'BuyNow', 'CCNow', 'winters');">Buy Now</a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a itemprop="url" href="https://tmitg.bandcamp.com/album/one-winters-night" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'winters');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="CDBaby"><a itemprop="url" href="http://cdbaby.com/cd/themachineinthegarden2" rel="external" onclick="ga('send', 'event', 'BuyNow', 'CDBaby', 'winters');"><img src="images/cdbaby.gif" class="cdbaby" alt="Buy Now from CD Baby" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Projekt"><a itemprop="url" href="http://www.projekt.com/store/product/mpp00999/" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Projekt', 'winters');"><img src="images/projekt.jpg" class="projekt" alt="Buy Now" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="iTunes"><a itemprop="url" href="https://itunes.apple.com/us/album/one-winters-night.../id949294972" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'winters');"><img src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif" class="itunes" alt="Buy Now from iTunes" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a itemprop="url" href="http://www.amazon.com/gp/product/B00AYL58Y8/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217153&amp;creative=399701&amp;creativeASIN=B002XKU3SY" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'winters');"><img src="images/amazonmp3.jpg" class="amazon" alt="Buy Now from Amazon" /></a><img src="http://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B002XKU3SY&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->


	<hr />
	
<section>
	<h2 id="reviews">Reviews of <em>One Winter's Night&hellip;</em>:</h2>
	<div class="revcontent">

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>This is a step forward from their last release, "Underworld". While that showed what Roger and Summer could do across the various tracks, ranging from ethereal to hardcore industrial, this tries to pull all the styles together. And it succeeds really well. In general, they have focussed on ethereal and used that as a base to work from. The opener, 'Falling, Too' is a complex, uplifting track, with beautiful vocals on top of a classically-influenced soundscape. 'These Illusions' is darker, more edgy in a style that moves towards darkwave. Then, 'Control' bursts out of the speaker with an intense barrage of industrial, in stark contrast with the softer, melodic vocals on top.</p>
<p>'Lost In Side' is more Gothic &mdash; slow, intense and moody, before they mix the classical Latin choral singing of 'Misere Mei' with a big bass drumbeat. The classical influence carries into the piano-based 'Fear No More' with lyrics based on some of Shakespeare's work. 'Ex Oblivione' flirts with tackiness &mdash; theelectro sound could easily be the soundtrack to a tacky slasher flick and the words are inspired by H.P. Lovecraft story, but the richness of the vocals prevents it from actually sounding tacky. 'The Sleep of Angels' is the first song to feature Roger's vocals as lead, and the harmonic effect of his drone with Summer's up-lifting singing works perfectly with the powerful militaristic percussion. The next three tracks are fairly straightforward classically-influenced atmospheric music with mellow ethereal vocals, before the Gothic 'Midnight' throws a discordant curve into the proceedings.</p>
<p>Finally, the Machine in the Garden go deliciously pretentious, creating a neo-classical composition of Aeschylus' 'Io's Departure' that climaxes in a thunderous explosion of rhythm. tMitG are, without doubt, one of the most important bands in the atmospheric scene, because they refuse to stay there. Instead they load their music with innumerable stylistic reference points and influences. This more focussed release will only serve to cement their position as one of Goth's most experimental and challenging bands.</p>
</div>
<p>-<cite itemprop="author"><a href="http://www.sortedmagazine.com/archive/magazine/sordid/aug99.htm#winters" target="_blank"><span itemprop="publication">Sorted Magazine</span></a></cite></p>
</blockquote>

	</div> <!-- /revcontent -->
</section>

</div> <!-- /mainbody -->

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
<script src="js/retina.js" type="text/javascript"></script>
</body>
</html>
