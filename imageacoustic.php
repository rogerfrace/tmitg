<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Image (acoustic)',
	'og:type'=>'music.album',
	'og:url'=>'http://www.tmitg.com/imageacoustic.php',
	'og:description'=>'the Machine in the Garden &ldquo;Image (acoustic)&rdquo; is the band&rsquo;s second digital single.',
	'og:image'=>'http://www.tmitg.com/albums/imageacoustic.jpg',
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
	<meta name="keywords" content="machine in the garden, tmitg, image, acoustic, music, CDs, roger frace, summer bowman" />
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

<div><br /><br /></div>

<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<main id="main" class="mainbody" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="single">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="1">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/imageacoustic.jpg" alt="Image (acoustic)" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">Image (acoustic)</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber" aria-label="catalog number">dxm-007-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2017</span><br />Digital Single released <time datetime="2017-12-16" itemprop="datePublished">16 December 2017</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Image (acoustic)"</caption>
	<thead>
		<tr>
			<th scope="col">Track Number</th>
			<th scope="col">Track Title</th>
			<th scope="col">Lyrics</th>
			<th scope="col">Audio</th>
			<th scope="col">Video</th>
		</tr>
	</thead>
	<tbody itemscope itemtype="http://schema.org/MusicPlaylist">
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Image (acoustic)","image","imageacoustic-bc","imageacoustic.jpg",NULL); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="lowprice" content="1.78">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="1.78"><a itemprop="url" href="https://tmitg.bandcamp.com/track/image-acoustic" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'image');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>
</section> <!-- end buy button div -->
		
<?php /*
	<hr />
	
<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <em>Image (acoustic)</em>:</h2>
	<div class="revcontent">

<blockquote cite="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Lorem ipsum</p>
</div>
<p>-<span itemprop="author">Rik</span>, <a href="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" target="_blank"><span itemprop="publication">Ping Things</span></a></p>
</blockquote>

	</div> <!-- /revcontent -->
</section>
*/ ?>

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
