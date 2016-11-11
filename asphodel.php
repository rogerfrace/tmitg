<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Asphodel',
	'og:type'=>'music.album',
	'og:upc'=>'685879998629',
	'og:url'=>'http://www.tmitg.com/asphodel.php',
	'og:description'=>'the Machine in the Garden &ldquo;Asphodel&rdquo; is the band&rsquo;s fifth studio album.',
	'og:image'=>'http://www.tmitg.com/albums/asphodel.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'251',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<? require_once("functions.php"); ?>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, asphodel, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="discog">
	<nav aria-label="Skip Links" id="skip-links">
		<a class="wai" href="#discog_topnav">Skip to Discography Sub Navigation</a>
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
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="14">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="0">
    <div><img src="albums/asphodel.jpg" alt="Asphodel" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">Asphodel</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP986</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">2002</span><br />full-length CD released <span itemprop="datePublished">June 2002</span></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>	
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist" tabindex="0">
<table role="grid" aria-label="track list">
	<caption class="wai">Track listing for "Asphodel"</caption>
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
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<? do_songtitle(1,"Masks","masks",NULL,"asphodel.jpg","masks","Masks"); ?>
<? do_songtitle(2,"Outside","outside","outside-bc","asphodel.jpg","outside-amv","Outside"); ?>
<? do_songtitle(3,"Time","time",NULL,"asphodel.jpg","time","Time"); ?>
<? do_songtitle(4,"Wonderland","wonderland","wonderland-bc","asphodel.jpg",NULL); ?>
<? do_songtitle(5,"Icarus","icarus",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(6,"Ghost","ghost",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(7,"Open","open",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(8,"Clarity","clarity","clarity-bc","asphodel.jpg",NULL); ?>
<? do_songtitle(9,"Dawn","dawn","dawn-bc","asphodel.jpg",NULL); ?>
<? do_songtitle(10,"Echo","echo",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(11,"Cry","cry",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(12,"Seek","seek","seek-bc","asphodel.jpg",NULL); ?>
<? do_songtitle(13,"One","one",NULL,"asphodel.jpg",NULL); ?>
<? do_songtitle(14,"Photographic",NULL,NULL,NULL,NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="0" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a itemprop="url" href="https://tmitg.bandcamp.com/album/asphodel" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'asphodel');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="CDBaby"><a itemprop="url" href="http://cdbaby.com/cd/themachineinthegarden4" rel="external" onclick="ga('send', 'event', 'BuyNow', 'CDBaby', 'asphodel');"><img src="images/cdbaby.gif" class="cdbaby" alt="Buy Now from CD Baby" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="iTunes"><a itemprop="url" href="https://itunes.apple.com/us/album/asphodel/id949296468" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'asphodel');"><img src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif" class="itunes" alt="Buy Now from iTunes" /></a></div>
		
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a itemprop="url" href="http://www.amazon.com/gp/product/B00AY76CWO/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217153&amp;creative=399701&amp;creativeASIN=B000QZU6H6" rel="external"  onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'asphodel');"><img src="images/amazonmp3.jpg" class="amazon" alt="Buy Now from Amazon" /></a><img src="http://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B000QZU6H6&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->

		
	<hr />

<section>
	<h2 id="reviews" tabindex="0">Reviews of <em>Asphodel</em>:</h2>
	<div class="revcontent">

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>This is another album that I've been looking forward to for some time from this great Gothic/Darkwave band.  And believe me, this is probably their best and most mature work to date.  They continue with their classic Gothic/Darkwave style, combining guitar, dark synths and female vocals, but add a very mature and full sound to it all.</p>

<p>I think what diferentiates this darkwave band from so many others is the resonant guitar that's not too harsh mixed with a prominant mixture of electronics and Summer's solemn vocals.  This album portrays each of these elements very well from the very beginning with the eerie "Masks" to the final track "Photographic" with it's more downtempo rhythm and smooth acoustic sound.  Just the fact that there are 14 beautifully haunting tracks on this album make it a treat to have.</p>

<p>These two tracks are just a shell of what is found on the rest of the album.  Fluctuating from dark and brooding to more romantic and flowing, the songs mix well and provide something of an insight to this beautiful duo.  Some elements really bring out the moody feeling like "Outside" with the prominant guitars and the next track "Time" with more percussion and dark ambient elements.</p>

<p>It's hard to nail down a favorite track on this album, as they all vary slightly but are all comparably well performed and written.  "Wonderland" is probably the track that stands out the most in my mind with more of a beat and bass that really stand out and bring out that angst filled feeling.  But there are many others that are easily comparable and just as nice.  So while it lacks anything that jumps out and grabs you, the album as a whole is very nicely done.</p>
</div>
<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">4</span>/<span itemprop="bestRating">5</span></div>
<p>-<cite itemprop="author"><a href="http://www.gothicparadise.com/tmitg.htm#rev1" target="_blank"><span itemprop="publication">Gothic Paradise</span></a></cite></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The name "The Machine in the Garden" refers to the progress of technology and its relationship with nature. Each release explores this relationship between the mechanical, natural, and spiritual worlds and further elucidates the philosophy behind the band.</p>

<p>Fair enough. Yet another remarkable triumph from Middle Pillar Presents this month &mdash; the anxiously anticipated and fourth full-length release from these Texas Darkwave mavens. The Machine In The Garden formed in 1994 and is a duo comprised of Summer Bowman and Roger Frac&eacute;. A great deal of curiosity and buzz has surrounded the band for many years now, as a result of numerous compilation appearances and of course, the unanimously good press that has surrounded the band ever since their debut release <i>Underworld</i>.</p>

<p>My fianc&eacute;e has been an enthusiastic fan of the band, long attempting to assemble their discography and it was through her that I had heard some outstanding remixes of their original material. When I finally heard an entire proper release, I was pleased with what I heard.</p>

<p>The first three tracks on this album are absolutely fantastic and the strongest tracks on the entire album. &ldquo;Masks&rdquo; is a sprawling and genuinely creepy Darkwave track, complete with eerie processed and ebowed guitars, murky electronics, and slinky drum programs. Summer&rsquo;s voice is thick and commanding, the perfect compliment to the stark electronic yet thoroughly atmospheric backdrop. &ldquo;Outside&rdquo; continues along impressively, with extremely well done drum programs, hushed trance inducing synths, and chilling interplay between the consumptive guitar swells and powerful female vocals. The Machine In The Garden has here perfected a noteworthy kind of Darkwave that is adequately balanced between the synthetic and the organic. While the guitar is the only &lsquo;real&rsquo; instrument played, and even it is drenched in additional effects, the feel of much of this album is one of warm, inviting substance.</p>

<p>&ldquo;Time&rdquo; is my personal favourite song &mdash; a dark track with foreboding tribal drums at its bleak and sinister nucleus. Distant ghostly vocals converge and entwine with soft melancholic verses, subtle chimes ring out above a dreary electronic bass line, and misty minimalist synths sigh throughout, like the frosty breath of a restless ghost gliding across a barren November wasteland. How&rsquo;s that for Goth? This song, though short, is just begging to be heard.</p>

<p>&ldquo;Wonderland&rdquo; follows next, a catchy and potentially popular track, yet it is where I start to get temporarily restless. The song is still somewhat moody, but Summer&rsquo;s voice suddenly acquires a slightly nasal quality. Something about the song seems incomplete to me &mdash; despite its unmistakable catchiness. To me, the song recalls Switchblade Symphony, a band that in their nursery rhyme and adolescent simplicity I have abhorred since their inception &mdash; this, however is much better, and being that I am in a relative minority with my opinion of Tina Root and co, my guess is this song will be popular. I just did not find it to be as powerful as the previous three tracks.</p>

<p>&ldquo;Icarus&rdquo; as well seems to be lacking &mdash; something? This song lacks the intensity of earlier tracks. &ldquo;Ghost,&rdquo; though not at all an upbeat or dense track, it is a definitive improvement. A plodding, slow song with spine-chilling vocal harmonies, created by layers of whispers, vocal improv, and dreary disharmonic moans &mdash; very cool.</p>

<p>The slight lull is definitely broken by the time &ldquo;Open&rdquo; appears. Primarily because the haunting guitars make a welcomed and much needed return. The guitars, I believe, are that aforementioned &lsquo;something.&rsquo; Roger is an awesome guitarist, with a fantastic variety of voices in his pedal board and I vote he use it more. Sure, the novelty might wear off if they are used in every song, but I believe &ldquo;Asphodel&rdquo; could have been intensified by a more frequent appearance.</p>

<p>Some cool live bass guitar sneaks its way into the mix for &ldquo;Clarity,&rdquo; and working in unison with the guitars and dynamic drum programming, a grand sound is achieved. Pianos lead &ldquo;Dawn&rdquo; into a beautifully depressive interlude. Wow. When I first really paid attention to this song, my heart sunk. I missed that feeling, as it happens less and less these days. This serves as a surprisingly nice interlude, with a very cool shift in mood at the song&rsquo;s climax.</p>

<p>Back into the scarcely lit foggy dance floor we go for &ldquo;Echo&rdquo; &mdash; slow, swirling, and dark in the way that Love Is Colder Than Death and The Azoic once were. Forlorn and striking vocals, distant guitars, and more ghostly synths shape the song. Decidely more prominent electronic beeps and blips pan to and fro along with varying degrees of punch in the drums. Well done, but probably too introspective for most dance floors as of late. The kids that come early will dig it though.</p>

<p>&ldquo;Cry&rdquo; is a more ethereal track, descent but never really goes anywhere, and doesn&rsquo;t have as captivating a mood to it. &ldquo;Seek&rdquo; however, was an interesting shift &mdash; a harder hitting drumbeat emerges, part trip hop, part Lycia &mdash; cool slap bass lines, and neat guitar climaxes at the chorus. &ldquo;One&rdquo; makes a return to introspective ethereal, however, cool artificial harmonic pings and bluesy, fragmented guitar leads give it a unique and suffocating feel. A song that also stands on its own for sure. &ldquo;Photographic&rdquo; brings the album to a satisfying and fulfilling finale &mdash; a stronger and more organic drum sound, acoustic strums, and another flawless performance by Summer at the mic.</p>

<p>Despite&rsquo;s its occasional lulls <i>Asphodel</i> is a standout album. There are a lot of songs here, the variation between them being dangerously delicate and subtle. You really have to listen to the album as a whole to truly appreciate it. Though there are fourteen tracks, things move along quickly, as most songs rarely pass the comfortable &lsquo;radio friendly&rsquo; (ha!) three-minute mark. The Machine In The Garden utilize synthetics and electronics in a way that is more thought-provoking and emotionally striking &mdash; they are true Darkwave at it&rsquo;s finest, and if you are a devotee of the danceable gloom spun from the black hearts of acts like Malign, Wench, Attrition, and SubVersion, this will definitely tickle your neglected fancy, as well as put a fresh spin on a familiar and time-tested formula.</p>
</div>
<p>-<cite><span itemprop="author">Matthew Heilman</span>, <a href="http://www.starvox.net/crypt/3august2.htm" target="_blank"><span itemprop="publication">Starvox</span></a></cite></p>
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
