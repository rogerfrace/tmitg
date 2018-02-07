<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Miscellany',
	'og:type'=>'music.album',
	'og:url'=>'http://www.tmitg.com/miscellany.php',
	'og:description'=>'the Machine in the Garden &ldquo;Miscellany&rdquo; is a collection of rarities, ranging from compilation tracks to alternate versions to covers.',
	'og:image'=>'http://www.tmitg.com/albums/miscellany.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'250',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<? require_once("functions.php"); ?>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, miscellany, music, CDs, roger frace, summer bowman" />
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

<div class="mainbody" role="main" itemscope itemtype="http://schema.org/MusicAlbum">
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="CompilationAlbum">
	<meta itemprop="numTracks" content="14">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="0">
	<div><img src="albums/miscellany.jpg" alt="Miscellany" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">Miscellany</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-006-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2014</span><br />rarities collection released <time datetime="2014-10-31" itemprop="datePublished">31 October 2014</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="0">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "Miscellany"</caption>
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

<? do_songtitle(1,"Falling Softly","fallingsoftly","fallingsoftly-bc",NULL,NULL); ?>
<? do_songtitle(2,"Far From Home","farfromhome","farfromhome-bc",NULL,NULL); ?>
<? do_songtitle(3,"The Unaware (smooth motion mix)","theunaware","smoothmotionmix-bc",NULL,NULL); ?>
<? do_songtitle(4,"Midnight (dancing there)","midnight",NULL,NULL,NULL); ?>
<? do_songtitle(5,"Coventry Carol","coventrycarol","coventrycarol-bc",NULL,NULL); ?>
<? do_songtitle(6,"Suspend (eclectica mix)","suspend",NULL,NULL,NULL); ?>
<? do_songtitle(7,"Machinery (mind/body mix)",NULL,"machinery-bc",NULL,NULL); ?>
<? do_songtitle(8,"Dreams of the Absent (orchestral)","dreamsoftheabsent",NULL,NULL,NULL); ?>
<? do_songtitle(9,"Miserere Mei (vocal)","misereremei","misererevocal-bc",NULL,NULL); ?>
<? do_songtitle(10,"Hidden","hidden",NULL,NULL,NULL); ?>
<? do_songtitle(11,"Cold (ambient)","cold",NULL,NULL,NULL); ?>
<? do_songtitle(12,"Obsession",NULL,NULL,NULL,NULL); ?>
<? do_songtitle(13,"Awake at the Wall",NULL,NULL,NULL,NULL); ?>
<? do_songtitle(14,"Winter Fell (live)","winterfell",NULL,NULL,NULL); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="0" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="lowprice" content="6.00">
	<h2 class="wai">Buy links</h2>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer" style="margin-top:1em;"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="6.00"><a itemprop="url" href="https://tmitg.bandcamp.com/album/miscellany" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'miscellany');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>
</section> <!-- end buy button div -->
		

</div> <!-- /mainbody -->

<script src="js/retina.js" type="text/javascript"></script>
</body>
</html>
