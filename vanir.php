<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - In the Vanir',
	'og:type'=>'music.album',
	'og:url'=>'http://www.tmitg.com/vanir.php',
	'og:description'=>'the Machine in the Garden &ldquo;In the Vanir&rdquo; is the band&rsquo;s first digital single and preview for &ldquo;Before and After the Storm&rdquo;.',
	'og:image'=>'http://www.tmitg.com/albums/vanir.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'250',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, in the vanir, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="Copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
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
	<meta itemprop="albumReleaseType" content="single">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="2">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/vanir.jpg" alt="In the Vanir album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">In the Vanir</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-004-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2010</span><br />Digital Single released <time datetime="2010-12-10" itemprop="datePublished">10 December 2010</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "In the Vanir"</caption>
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

<?php do_songtitle(1,"In the Vanir (single mix)","inthevanir","vanirsingle-bc","vanir.jpg",NULL); ?>
<?php do_songtitle(2,"In the Vanir (happy ever after remix)",NULL,NULL,NULL,NULL); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="lowprice" content="1.78">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="1.78"><a itemprop="url" href="http://tmitg.bandcamp.com/album/in-the-vanir" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'vanir');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>
</section> <!-- end buy button div -->
		
	<hr />
	
<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <em>In the Vanir</em>:</h2>
	<div class="revcontent">

<blockquote cite="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Admittedly it's just a two track digital sampler, but it's been a number of years since their last album so this teaser for the upcoming 2011 release from The Machine in the Garden has me quite excited. Tight electronic tones and slick production are readily evident on this track, and as always Summer Bowman's voice is in stunning form. If this track is any indication of what's to come then their new release can't get here soon enough for me.</p>
</div>
<p>-<span itemprop="author">Rik</span>, <a href="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" target="_blank"><span itemprop="publication">Ping Things</span></a></p>
</blockquote>

	</div> <!-- /revcontent -->
</section>

</main> <!-- /mainbody -->

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
