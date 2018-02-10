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
<? require_once("functions.php"); ?>
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
	<nav aria-label="Skip Links" id="skip-links">
		<a class="wai" href="#discog_albuminfo">Skip to Album Info</a>
		<a class="wai" href="#discog_tracklist">Skip to Track Listing</a>
		<a class="wai" href="#discog_buynow">Skip to Buy Now Links</a>
	</nav>

<? get_header(); ?>

<div><br /><br /></div>

<!-- this is the album header nav -->
<? include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<div id="main" class="mainbody" role="main" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="single">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="2">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="0">
	<div><img src="albums/vanir.jpg" alt="In the Vanir" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">In the Vanir</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-004-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2010</span><br />Digital Single released <time datetime="2010-12-10" itemprop="datePublished">10 December 2010</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="0">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "In the Vanir"</caption>
	<thead>
		<tr role="row">
			<th scope="col">Track Number</th>
			<th scope="col">Track Title</th>
			<th scope="col">Lyrics</th>
			<th scope="col">Audio</th>
			<th scope="col">Video</th>
		</tr>
	</thead>
	<tbody itemscope itemtype="http://schema.org/MusicPlaylist">
<? /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>

<? do_songtitle(1,"In the Vanir (single mix)","inthevanir","vanirsingle-bc","vanir.jpg",NULL); ?>
<? do_songtitle(2,"In the Vanir (happy ever after remix)",NULL,NULL,NULL,NULL); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="0" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="lowprice" content="1.78">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="1.78"><a itemprop="url" href="http://tmitg.bandcamp.com/album/in-the-vanir" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'vanir');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>
</section> <!-- end buy button div -->
		
	<hr />
	
<section>
	<h2 id="reviews" tabindex="0">Reviews of <em>In the Vanir</em>:</h2>
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
