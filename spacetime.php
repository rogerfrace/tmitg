<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Space-Time (2026)',
	'og:type'=>'music.album',
	'og:upc'=>'885000348563',
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
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
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
				<img src="albums/spacetime.jpg" fetchpriority="high" loading="eager" decoding="async" alt="Space-Time (2026) single cover — the Machine in the Garden" class="albumimg" itemprop="image" />
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
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="0.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="0.00"><a rel="noopener noreferrer" itemprop="url" href="https://tmitg.bandcamp.com/track/space-time" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>
	
	<div itemprop="potentialAction" itemscope itemtype="https://schema.org/ListenAction"><a itemprop="target" rel="noopener noreferrer" href="https://open.spotify.com/track/3EBTarIggE3KecGzghAx8g?si=26aec76554014a3b" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Spotify'});"><img src="images/listen-on-spotify.png" width="200" height="73" class="spotify" alt="Listen on Spotify" /></a></div>

	<div><a rel="noopener noreferrer" href="https://geo.music.apple.com/us/album/space-time-single/6807489729?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=1594339200&h=c17228e92635bb8bc4766252b3c14867" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener noreferrer" itemprop="url" href="https://www.amazon.com/music/player/albums/B0HHG4PKFP?&linkCode=ll2&tag=themachininth-20&linkId=2b38dd310e90ee1379789ce27132a9ae&language=en_US&ref_=as_li_ss_tl" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B08DDHDLBQ&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>

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
