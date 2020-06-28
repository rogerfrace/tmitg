<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Places in Between',
	'og:type'=>'music.album',
	'og:upc'=>'xxxxxxx',
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

<div><br /><br /></div>

<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<main id="main" class="mainbody" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="11">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/places.jpg" alt="Places in Between" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">Places in Between</h1>

	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber" aria-label="catalog number">dxm-008-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2020</span><br />Digital Album to be released <time datetime="2020-07-17" itemprop="datePublished">July 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p>(<span itemprop="catalogNumber" aria-label="catalog number">dxm-008-cd</span>) <span itemprop="about">full-length CD</span> to be released <time datetime="2020-07-31" itemprop="datePublished">July 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Places in Between"</caption>
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
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Cold Storm","coldstorm",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(2,"A Thousand Years of War","athousandyearsofwar",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(3,"Beyond","beyond",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(4,"Underneath","underneath",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(5,"Prophetic Bird","propheticbird",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(6,"Broken Days","brokendays",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(7,"Ad Astra Per Aspera","adastraperaspera",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(8,"Courage, Power, and Wisdom","couragepowerandwisdom",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(9,"Spirit and Image","spiritandimage",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(10,"Orbital","orbital",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(11,"O Euchari","oeuchari",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(12,"Find a Way","findaway",NULL,"places.jpg",NULL); ?>
<?php do_songtitle(13,"Resist","resist",NULL,"places.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="12.00">
	<h2 class="wai">Buy Now links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="12.00"><a itemprop="url" href="http://tmitg.bandcamp.com/album/places-in-between" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'baats');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

<!--	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="iTunes"><a itemprop="url" href="http://itunes.apple.com/us/album/places-in-between/id446509058" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'baats');"><img src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif" class="itunes" alt="Buy Now from iTunes" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a itemprop="url" href="http://www.amazon.com/gp/product/B0058ZE3H8/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217145&amp;creative=399373&amp;creativeASIN=B0058ZE3H8" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'baats');"><img src="images/amazonmp3.jpg" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img src="http://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B0058ZE3H8&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div> -->

</section> <!-- end buy button div -->


	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <em>Places in Between</em>:</h2>
	<div class="revcontent">
		<p>Coming soon</p>
	</div> <!-- /revcontent -->
</section>

</main> <!-- /mainbody -->
<?php include_once("includes/amazonfooter.inc.php"); ?>

<!-- google translate stuff -->
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
