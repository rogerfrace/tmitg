<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Places in Between',
	'og:type'=>'music.album',
	'og:upc'=>'195269018252',
	'og:url'=>'http://www.tmitg.com/places.php',
	'og:description'=>'the Machine in the Garden &ldquo;Places in Between&rdquo; is the band&rsquo;s ninth studio album.',
	'og:image'=>'http://www.tmitg.com/albums/places.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'278',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, Places in Between, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/storm.php">
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
	<div><img src="albums/places.jpg" alt="Places in Between album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Places in Between</h1>

	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-008-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2020</span><br />Digital Album released <time datetime="2020-07-10" itemprop="datePublished">10 July 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p>(<span itemprop="catalogNumber">dxm-008-cd</span>) <span itemprop="about">Limited Edition CD</span> released <time datetime="2020-07-21" itemprop="datePublished">21 July 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Places in Between"</caption>
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
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Cold Storm","coldstorm","coldstorm-bc","places.jpg","coldstorm"); ?>
<?php do_songtitle(2,"A Thousand Years of War","athousandyearsofwar",NULL,"places.jpg","athousandyears"); ?>
<?php do_songtitle(3,"Beyond","beyond","beyond-bc","places.jpg",NULL); ?>
<?php do_songtitle(4,"Underneath","underneath",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(5,"Prophetic Bird","propheticbird","propheticbird-bc","places.jpg",NULL); ?>
<?php do_songtitle(6,"Broken Days","brokendays",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(7,"Ad Astra Per Aspera","adastraperaspera",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(8,"Courage, Power, and Wisdom","couragepowerandwisdom",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(9,"Spirit and Image","spiritandimage","spiritandimage-bc","places.jpg",NULL); ?>
<?php do_songtitle(10,"Orbital","orbital",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(11,"O Euchari","oeuchari",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(12,"Find a Way","findaway",NULL,"places.jpg","findaway"); ?>
<?php do_songtitle(13,"Resist","resist",NULL,"places.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="12.00">
	<h2 class="wai">Buy Now links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="12.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/places-in-between" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'placesinbetween');"><img src="images/bandcamp.png" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/places-in-between/1524569511?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=250x83&amp;releaseDate=1594339200&h=c17228e92635bb8bc4766252b3c14867" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="https://www.amazon.com/Places-Between-Machine-Garden/dp/B08DDHDLBQ/ref=as_li_ss_tl?dchild=1&keywords=places+in+between+mp3&qid=1595529263&sr=8-2&linkCode=ll1&tag=themachininth-20&linkId=b77e3324dd1bcf1d2990e1164a7e9565&language=en_US" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'placesinbetween');"><img src="images/amazonmp3.png" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B08DDHDLBQ&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>

</section> <!-- end buy button div -->

	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Places in Between</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="1">
	</div>
	<div class="revcontent">

<blockquote cite="https://youtu.be/uh-K1Yiz7cg" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>it's particularly exciting for me when a band from the past picks up the pieces from where they left off and continues to create something new. it's great.</p>

<p>so this new album is called the places in between and like i said this is their first release in many many years. i will be going through each track on this album and how i feel about it and how awesome it is.</p>

<p>overall this album is really fascinating, interesting, different, mystical, sophisticated, and inspiring. there are a lot of times in this album where summer sounds so much like lisa gerrard from dead can dance which i think is part of what adds to what makes this so mystical sounding. i really love how her voice has matured over the years and it really comes together here. from what i can gather in comparison to other earlier works, they have backed off the rock and post-punk distorted elements just a bit, but it doesn't make it any less engaging. if anything, this is an excellent demonstration of their versatility.</p>

<p>this is really good reading music or road trip music, and some of it is really dancy. i dig. so if you guys are a huge fan of machine in the garden, faith in the muse, dead can dance, and this ascension, this will definitely suit your needs.</p>
</div>
<p>-<span itemprop="author">Adrienne LaVey</span>, excerpted from <a rel="noopener" href="https://youtu.be/uh-K1Yiz7cg" target="_blank"><span itemprop="publication">LigeiaResurrected YouTube</span></a></p>
<meta itemprop="datePublished" content="2020-07-30">
</blockquote>

	</div> <!-- /revcontent -->
</section>

</main> <!-- /mainbody -->
<?php include_once("includes/amazonfooter.inc.php"); ?>


<!-- google translate widget -->
<?php if (!stristr($_SERVER['HTTP_USER_AGENT'],"Googlebot")): ?>
<script type="text/javascript">
function googleSectionalElementInit() {
  new google.translate.SectionalElement({
    sectionalNodeClassName: 'goog-trans-section',
    controlNodeClassName: 'goog-trans-control',
    background: '#ffffff'
  }, 'google_sectional_element');
}
</script>
<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleSectionalElementInit&amp;ug=section&amp;hl=en"></script>
<?php endif; ?>
<!-- /google translate -->

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
