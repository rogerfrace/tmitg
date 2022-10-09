<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Out of the Mists',
	'og:type'=>'music.album',
	'og:upc'=>'685879999428',
	'og:url'=>'http://www.tmitg.com/mists.php',
	'og:description'=>'the Machine in the Garden &ldquo;Out of the Mists&rdquo; is the band&rsquo;s fourth studio album.',
	'og:image'=>'http://www.tmitg.com/albums/mists.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'280',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, out of the mists, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/winters.php">
	<link rel="next" href="/asphodel.php">
</head>

<body id="discog">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>


<!-- this is the album header nav -->
<?php include_once("includes/discogsubnav.inc.php"); ?>
<!-- end album header nav -->

<main id="main" class="mainbody" itemscope itemtype="https://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="13">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/mists.jpg" width="280" height="250" alt="Out of the Mists album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Out of the Mists</h1>
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP994</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">2000</span><br />full-length enhanced CD released <time datetime="2000-12" itemprop="datePublished">December 2000</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>	
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Out of the Mists"</caption>
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
	<tbody itemscope itemtype="https://schema.org/MusicPlaylist">
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Fates and Furies",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(2,"Intrigue",NULL,"intrigue-bc","mists.jpg",NULL); ?>
<?php do_songtitle(3,"The Unaware","theunaware","unaware-bc","mists.jpg","unaware","The Unaware"); ?>
<?php do_songtitle(4,"Valentine","valentine","valentine-bc","mists.jpg",NULL); ?>
<?php do_songtitle(5,"Oh Dear","ohdear",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"Failure","failure",NULL,NULL,"failure","Failure (Live 2000)"); ?>
<?php do_songtitle(7,"Rusty Haloes","rustyhaloes",NULL,NULL,NULL); ?>
<?php do_songtitle(8,"Every Thing She Is","everythingsheis",NULL,NULL,"everythingsheis","Every Thing She Is (Live 2004)"); ?>
<?php do_songtitle(9,"Wasted Time","wastedtime",NULL,NULL,NULL); ?>
<?php do_songtitle(10,"Radiant","radiant",NULL,NULL,NULL); ?>
<?php do_songtitle(11,"Her Face","herface","herface-bc","mists.jpg",NULL); ?>
<?php do_songtitle(12,"Never Again","neveragain",NULL,NULL,NULL); ?>
<?php do_songtitle(13,"Fade","fade","fade-bc","mists.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/out-of-the-mists" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>
	
	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/out-of-the-mists/949293646?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=975628800&h=8d0acb41226c124a6ca2a5008895bca9" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>
		
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="https://amzn.to/3kx6kNg" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B000QZU6PS&amp;camp=217153&amp;creative=399701" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->


	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Out of the Mists</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="1">
	</div>
	<div class="revcontent">

<blockquote cite="http://music.gothic.ru/review/07-03-01_e.htm" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>What a wonderful thing is an enhanced CD! I&rsquo;m happy to know that there are more and more of them every day, and yet more happy to hold one of them in my hands. When I do get my hands upon one, I start the acquaintance with the video. This is the nicest thing about such CDs: often music accompanied by video produces a deeper impression and atmosphere. Having  watched the new video by THE MACHINE IN THE GARDEN, "The Unaware", I was surprised: first of all, the music has become much spookier, and the same is right about the video. Created in the style of The Blair Witch, it&rsquo;s strange and nervous, and it does produce an impression. After it I was really ready to listen to the album. The characteristic thing is, that on this album we have the opportunity of getting into the darker side of the band&rsquo;s creative work. Their previous album, &ldquo;One Winter&rsquo;s Night&rdquo;, was romantic, melancholic and sensual, but the new one is sooner sick, gloomy and dark. I do not know what caused such metamorphosis in the sound, but I confess that I liked this CD more than the previous one, even despite the fact that is less easy to listen to in contrast to it. Here the famous darkwave sound is polished to the slightest detail, the thick sound creating an impression of tension, is exquisitely decorated by the colorful vocals of Summer Bowman. I&rsquo;d like to specially mention the vocals: fortunately, Summer was lucky to escape the fate of most darkwave singers, who sing beautifully but without soul &mdash; her vocals enchant you with their emotionality. I only fear one thing: the numerous lovers of the band might blame the CD for its sadness and perplexity. If this happens, I&rsquo;m going to be very upset.</p>
</div>
<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">5</span><meta itemprop="bestRating" content="5" /></div>
<p>-<span itemprop="author">coroner</span>, <a href="http://music.gothic.ru/review/07-03-01_e.htm" target="_blank"><span itemprop="publication">Russian Gothic Page</a></p>
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
