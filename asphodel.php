<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Asphodel',
	'og:type'=>'music.album',
	'og:upc'=>'685879998629',
	'og:url'=>'https://www.tmitg.com/asphodel.php',
	'og:description'=>'the Machine in the Garden &ldquo;Asphodel&rdquo; is the band&rsquo;s fifth studio album.',
	'og:image'=>'https://www.tmitg.com/albums/asphodel.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'251',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once "functions.php"; ?>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, asphodel, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once "headers-additional.php"; ?>
	<link rel="prev" href="/mists.php">
	<link rel="next" href="/shadowpuppets.php">
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
	<meta itemprop="albumReleaseType" content="album">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="14">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
    <div><img src="albums/asphodel.jpg" width="254" height="250" alt="Asphodel album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Asphodel</h1>
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP986</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">2002</span><br />full-length CD released <time datetime="2002-06" itemprop="datePublished">June 2002</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>	
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-009-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span><br />Remastered Digital Album released <time datetime="2020-10-02" itemprop="datePublished">2 October 2020</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Asphodel"</caption>
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

<?php do_songtitle(1,"Masks","masks",NULL,"asphodel.jpg","masks","Masks"); ?>
<?php do_songtitle(2,"Outside","outside","outside-bc","asphodel.jpg","outside-amv","Outside"); ?>
<?php do_songtitle(3,"Time","time",NULL,"asphodel.jpg","time","Time"); ?>
<?php do_songtitle(4,"Wonderland","wonderland","wonderland-bc","asphodel.jpg",NULL); ?>
<?php do_songtitle(5,"Icarus","icarus",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(6,"Ghost","ghost",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(7,"Open","open",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(8,"Clarity","clarity","clarity-bc","asphodel.jpg",NULL); ?>
<?php do_songtitle(9,"Dawn","dawn","dawn-bc","asphodel.jpg",NULL); ?>
<?php do_songtitle(10,"Echo","echo",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(11,"Cry","cry",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(12,"Seek","seek","seek-bc","asphodel.jpg",NULL); ?>
<?php do_songtitle(13,"One","one",NULL,"asphodel.jpg",NULL); ?>
<?php do_songtitle(14,"Photographic",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(15,"*Open (Reimagined)",NULL,NULL,NULL,"open2020"); ?>
<?php do_songtitle(16,"*Ghost (Reimagined)",NULL,NULL,NULL,NULL); ?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="4"><small id="excl">*exclusive to the remastered edition</small><td>
		</tr>
	</tfoot>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<fieldset><legend>Remastered Edition</legend>
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/asphodel" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>
	</fieldset>
	<br>
	<fieldset><legend>Original Version</legend>
	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/asphodel/949296468?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=1022889600&h=f5fafea5474207bb0f2d25503be1a385" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>
		
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="https://amzn.to/2ZRnBIO" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B000QZU6H6&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
	</fieldset>
</section> <!-- end buy button div -->

		
	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Asphodel</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="2">
	</div>
	<div class="revcontent">

<blockquote cite="http://www.gothicparadise.com/tmitg.htm#rev1" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>This is another album that I've been looking forward to for some time from this great Gothic/Darkwave band.  And believe me, this is probably their best and most mature work to date.  They continue with their classic Gothic/Darkwave style, combining guitar, dark synths and female vocals, but add a very mature and full sound to it all.</p>

<p>I think what diferentiates this darkwave band from so many others is the resonant guitar that's not too harsh mixed with a prominant mixture of electronics and Summer's solemn vocals.  This album portrays each of these elements very well from the very beginning with the eerie "Masks" to the final track "Photographic" with it's more downtempo rhythm and smooth acoustic sound.  Just the fact that there are 14 beautifully haunting tracks on this album make it a treat to have.</p>

<p>These two tracks are just a shell of what is found on the rest of the album.  Fluctuating from dark and brooding to more romantic and flowing, the songs mix well and provide something of an insight to this beautiful duo.  Some elements really bring out the moody feeling like "Outside" with the prominant guitars and the next track "Time" with more percussion and dark ambient elements.</p>

<p>It's hard to nail down a favorite track on this album, as they all vary slightly but are all comparably well performed and written.  "Wonderland" is probably the track that stands out the most in my mind with more of a beat and bass that really stand out and bring out that angst filled feeling.  But there are many others that are easily comparable and just as nice.  So while it lacks anything that jumps out and grabs you, the album as a whole is very nicely done.</p>
</div>
<div itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">4</span>/<span itemprop="bestRating">5</span></div>
<p>-<span itemprop="author"><a href="http://www.gothicparadise.com/tmitg.htm#rev1" target="_blank"><span itemprop="publication">Gothic Paradise</span></a></span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.starvox.net/crypt/3august2.htm" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
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
<p>-<span itemprop="author">Matthew Heilman</span>, <a href="http://www.starvox.net/crypt/3august2.htm" target="_blank"><span itemprop="publication">Starvox</span></a></p>
</blockquote>

	</div> <!-- /revcontent -->
</section>

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
