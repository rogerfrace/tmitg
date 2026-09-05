<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Impermanence (2026)',
	'og:type'=>'music.album',
	'og:upc'=>'195269018252',
	'og:url'=>'https://www.tmitg.com/places.php',
	'og:description'=>'the Machine in the Garden \'Impermanence\' is the band\'s tenth studio album.',
	'og:image'=>'https://www.tmitg.com/albums/placesOG.jpg',
	'og:image:alt'=>'Album cover artwork for the Machine in the Garden Impermanence',
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
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once "headers-additional.php"; ?>
	<link rel="prev" href="/storm.php">
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
	<meta itemprop="albumReleaseType" content="http://schema.org/EPRelease">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="6">
	<span itemprop="byArtist" itemscope itemtype="https://schema.org/MusicGroup">
		<meta itemprop="name" content="the Machine in the Garden" />
		<meta itemprop="url" content="https://www.tmitg.com/" />
		<meta itemprop="sameAs" content="https://tmitg.bandcamp.com" />
		<meta itemprop="sameAs" content="https://musicbrainz.org/artist/e026b441-4cd8-4d18-8a85-f7e5153950f0" />
	</span>
	<meta itemprop="sameAs" content="https://tmitg.bandcamp.com/album/impermanence" />
	<meta itemprop="sameAs" content="https://www.discogs.com/master/1776278-The-Machine-In-The-Garden-Places-In-Between" />
	<meta itemprop="sameAs" content="https://music.apple.com/us/album/impermanence/1524569511" />
	<meta itemprop="sameAs" content="https://www.amazon.com/Places-Between-Machine-Garden/dp/B08DDHDLBQ/" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div>
		<picture>
			<source srcset="albums/places500.jpg 2x">
				<img src="albums/impermanence.jpg" fetchpriority="high" loading="eager" decoding="async" width="250" height="250" alt="Impermanence (2026) album cover — the Machine in the Garden" class="albumimg" itemprop="image" />
		</picture>
	</div>
	<h1 itemprop="name">Impermanence</h1>
	<p itemprop="abstract"><em>Thirteen new songs exploring the variety of styles&mdash;from goth rock to electronic ethereal&mdash;the band is known for. Coming in at over an hour in length, &quot;Impermanence&quot; is chock full of epic electronics, sweeping guitars and shining vocals. The album has everything fans have come to appreciate about the Machine in the Garden in their nearly 30 year history, while still sounding elevated and modern.</em></p>

	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-010-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2020</span><br />Digital Album released <time datetime="2020-07-10" itemprop="datePublished">10 July 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p>(<span itemprop="catalogNumber">dxm-010-cd</span>) <span itemprop="about">Limited Edition CD</span> released <time datetime="2020-07-21" itemprop="datePublished">15 November 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Impermanence"</caption>
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
	<tbody>
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname,$notesname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"The Unwritten Way","theunwrittenway",NULL,"impermanence.jpg",NULL); ?>
<?php do_songtitle(2,"Space-Time","spacetime","spacetime-bc","impermanence.jpg","spacetime",NULL); ?>
<?php do_songtitle(3,"Divergence","divergence",NULL,"impermanence.jpg",NULL); ?>
<?php do_songtitle(4,"Oderint dum metuant","oderintdummetuant",NULL,"impermanence.jpg",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"Make the Reason","makethereason",NULL,"impermanence.jpg",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"The Beginning of All Things","thebeginningofallthings",NULL,"impermanence.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="10.00">
	<h2 class="wai">Buy Now links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="10.00"><a rel="noopener noreferrer" itemprop="url" href="https://tmitg.bandcamp.com/album/impermanence" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>

	<div itemprop="potentialAction" itemscope itemtype="https://schema.org/ListenAction"><a itemprop="target" rel="noopener noreferrer" href="https://open.spotify.com/album/6kSoqoOQYZEfvus2Qv0drn?si=CPYnT7g0SBqdWIqheug-Cw" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Spotify'});"><img src="images/listen-on-spotify.png" width="200" height="73" class="spotify" alt="Listen on Spotify" /></a></div>

	<div><a rel="noopener noreferrer" href="https://geo.music.apple.com/us/album/impermanence/1524569511?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=1594339200&h=c17228e92635bb8bc4766252b3c14867" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener noreferrer" itemprop="url" href="https://www.amazon.com/Places-Between-Machine-Garden/dp/B08DDHDLBQ/ref=as_li_ss_tl?dchild=1&keywords=places+in+between+mp3&qid=1595529263&sr=8-2&linkCode=ll1&tag=themachininth-20&linkId=b77e3324dd1bcf1d2990e1164a7e9565&language=en_US" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B08DDHDLBQ&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>

</section> <!-- end buy button div -->

	<hr />

<!--<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Impermanence</i>:</h2>
	<div class="revcontent">

	</div> <!-- /revcontent -->
<!--</section> -->

</main> <!-- /mainbody -->
<?php include_once "includes/amazonfooter.inc.php"; ?>

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
