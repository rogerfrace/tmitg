<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Space-Time (2026)',
	'og:type'=>'music.album',
	'og:url'=>'https://www.tmitg.com/spacetime.php',
	'og:description'=>'the Machine in the Garden \'Space-Time\' is the band\'s third digital single.',
	'og:image'=>'https://www.tmitg.com/albums/spacetimeOG.jpg',
	'og:image:alt'=>'Album cover artwork for the Machine in the Garden Space-Time',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'1200',
	'og:image:height'=>'1200',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once "functions.php"; ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, space-time, music, digital, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="Copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
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

<main id="main" class="mainbody" itemscope itemtype="https://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="http://schema.org/SingleRelease">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="1">
	<span itemprop="byArtist" itemscope itemtype="https://schema.org/MusicGroup">
		<meta itemprop="name" content="the Machine in the Garden" />
		<meta itemprop="url" content="https://www.tmitg.com/" />
		<meta itemprop="sameAs" content="https://tmitg.bandcamp.com" />
	</span>
	<meta itemprop="sameAs" content="https://tmitg.bandcamp.com/track/space-time" />
	<meta itemprop="sameAs" content="https://www.discogs.com/release/37305681-The-Machine-In-The-Garden-Space-Time" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div>
		<picture>
			<source srcset="albums/spacetimelg.jpg 2x">
				<img src="albums/spacetime.jpg" alt="Space-Time (2026) single cover — the Machine in the Garden" class="albumimg" itemprop="image" />
		</picture>
	</div>
	<h1 itemprop="name">Space-Time</h1>
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-010-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2026</span><br />Digital Single released <time datetime="2026-05-22" itemprop="datePublished">22 May 2026</time> (World Goth Day)</p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Space-Time"</caption>
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
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Space-Time","spacetime","spacetime-bc","spacetime.jpg","spacetime"); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
	<meta itemprop="lowprice" content="0.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="0.00"><a rel="noopener noreferrer" itemprop="url" href="https://tmitg.bandcamp.com/track/space-time" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>
</section> <!-- end buy button div -->
		
<?php /*
	<hr />
	
<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Space-Time</i>:</h2>
	<div class="revcontent">

<blockquote cite="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Lorem ipsum</p>
</div>
<p>-<span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Rik</span></span>, <a href="http://pingthings.blogspot.com/2011/01/top-ten-for-2010.html" target="_blank"><span itemprop="publisher">Ping Things</span></a></p>
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
	<script>
	jQuery(".revcontent").hide();
	jQuery("#reviews").click(function() {
		jQuery(".revcontent").toggle("fast");
	});
	</script>
<?php endif; ?>

</body>
</html>
