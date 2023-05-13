<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - XV',
	'og:type'=>'music.album',
	'og:upc'=>'634479658679',
	'og:url'=>'http://www.tmitg.com/xv.php',
	'og:description'=>'the Machine in the Garden &ldquo;XV&rdquo; is the band&rsquo;s seventh studio album and 15th anniversary release.',
	'og:image'=>'http://www.tmitg.com/albums/xv.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'250',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once "functions.php"; ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, xv, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once "headers-additional.php"; ?>
	<link rel="prev" href="/shadowpuppets.php">
	<link rel="next" href="/storm.php">
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
	<meta itemprop="albumProductionType" content="CompilationAlbum">
	<meta itemprop="numTracks" content="15">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/xv.jpg" width="250" height="250" alt="XV album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">XV</h1>
	<div itemscope itemtype="https://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-015-cd</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2007</span><br />full-length CD released <time datetime="2007-12-13" itemprop="datePublished">13 December 2007</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "XV"</caption>
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
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"Mental Wasteland","mentalwasteland",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(2,"Wonderland (Mad Hatter Mix)","wonderland",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(3,"Oblician (&Eacute;ire Mix)","oblician",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(4,"Six Days","sixdays","sixdays-bc","xv.jpg",NULL); ?>
<?php do_songtitle(5,"Mantra (Shades of Grey Remix)","mantra","mantraremix-bc","xv.jpg",NULL); ?>
<?php do_songtitle(6,"Words in Heaven Lost (Get Out of This Remix)","wordsinheavenlost",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(7,"Ex Oblivione (Original Demo)","exoblivione",NULL,"sp.jpg",NULL); ?>
<?php do_songtitle(8,"Dawn (On the Rocks Mix)","dawn","dawnremix-bc","xv.jpg",NULL); ?>
<?php do_songtitle(9,"Every Thing She Is (Original Demo)","everythingsheis",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(10,"Voice","voice","voice-bc","xv.jpg",NULL); ?>
<?php do_songtitle(11,"On the Wire",NULL,NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(12,"Nowhere","nowhere",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(13,"Walls","walls",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(14,"Corpus Christi (In Prayer Mix)","corpuschristi",NULL,"xv.jpg",NULL); ?>
<?php do_songtitle(15,"Otherworld","otherworld","otherworld-bc","xv.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="https://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="7.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="7.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/xv" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>

	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/xv/271198571?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=1051488000&h=c00eb4ff5fad4f198fdb725cf0b2f187" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="https://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="http://www.amazon.com/gp/product/B001A37ZXG/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217153&amp;creative=399701&amp;creativeASIN=B001A37ZXG" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B001A37ZXG&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->


	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>XV</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="5">
	</div>
	<div class="revcontent">

<blockquote class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>It's tough being a band in the "dark" (goth, darkwave, ethereal, industrial, deathrock, etc) underground in the USA. Bands can have a career spanning decades without a hint of mainstream success, playing the same clubs and venues as the newcomers, and upstaged by bands who appropriate the look (and often the label) with hardly a nod to the legacy of musical sounds they (sometimes unwittingly) reference. Is it any wonder some American "dark underground" musicians have decided to relocate to places like Germany (or sign exclusively with European labels)? The point being that there are a lot of very talented bands and musicians out there being ignored by both the mainstream and the indie hipster taste-makers because of stupid stereotypes and preconceived ideas. Which brings me to The Machine in The Garden.</p>

<p>This darkwave band's 2005 album "Shadow Puppets" made my list of "best" albums for that year (#2 in fact), and I played it incessantly on my radio show and at the clubs I DJ-ed at (I even hosted them for a live gig in my town). It was the kind of album, that, if there were any justice, would have seen them quitting their day-jobs in order to tour and focus exclusively on their musical careers. Sadly, that didn't happen, but it hasn't stopped Summer Bowman and Roger Frace from continuing to make excellent music that inhabits, yet transcends, the "darkwave" genre. So I'm pleased to announce that the band has returned with a new release entitled "XV". A look back at their 15-year run that includes remixes, outtakes, demos, a cover, and two new songs.</p>

<p>"XV" is no mere collection of filler that some bands resort to as a contract-fulfiller or stop-gap method while trying to create new material (in fact the band self-released the album), it instead reminds one of an anniversary party celebrated with a collection of close friends (perhaps not surprising since Summer and Roger are themselves a happy couple). The unreleased songs are chosen with care, including the beautifully moving "Six Days", and the spacey, eerie "Nowhere", while the remixes are respectful and highlight different aspects of the band while sharing the spotlight with some of their musical peers (Matrix, Ego Likeness, Pete Murray).</p>

<p>While my club-DJ compatriots will most likely give a lot of focus to the dance-mixes on this collection, I especially wanted to hear the two new tracks for hints of where the band may be going (musically speaking). While "Mental Wasteland" is a fine but somewhat uneven musical exercise in wing-stretching, the closing number "Otherworld" is a revelation. The songs does away with many of the normal guitar effects the band uses, and instead channels a sonic aesthetic that very much reminds me of "Faith"-era Cure (especially with that echoing drum machine) married to Summer's soaring vocal work. Definitely a success, with the more classic approach highlighting the duo's strong songwriting skills. Something I hope to hear more of on the band's next full-length of new material (whenever that may be).</p>

<p>"XV" is very much worth your time, a snapshot of a veteran band confident in their skills taking a look back. Happy anniversary, I'm looking forward to what comes next.</p>

</div>
<p>-<span itemprop="author">Jason Pitzl-Waters</span>, <a href="http://curveofsound.wildhunt.org/" target="_blank"><span itemprop="publication">a sweeping curve of sound</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The duo Summer Bowman (also known from Mirabilis) and Roger Frac&eacute;, hailing from Austin Texas, make ethereal darkwave music under the moniker The Machine in the Garden since the early 90's. Tow years ago their latest studioalbum, Shadow Puppets, was released and this is an exceptionally beautiful album which includes my personal favourite TMITG song 'Suspend'. In celebration of their 15 year existence the band decided to release a compilation cd with special songs, demo recordings, remixes and two new songs ('Mental Wasteland' and 'Otherworld'). The songs cover a period from 1994 to 2007 and perfectly show how the band has developed their sound in these years. The older songs still have a unpolished raw postpunk influence, as is illustrated with 'Oblician' and the new songs stand out with their specific ethereal atmosphere with exotic influences. The nice thing of a compilation album is that old gems such as 'Six Days' and 'Nowhere' that somehow never got released, now get a new chance. Of the remixes especially the smoothly danceable 'Mad Hatter mix' of 'Wonderland' by Pete Murray and 'Mantra (Shades of Grey mix)' by Ego Likeness stand out. The last mentioned remix unites the best elements of the styles of both bands. 'On the Wire' of course is a Sisters of Mercy cover, originally released in 1997, yet reworked and rerecorded for this compilation. Finally 'Otherworld' is worth mentioning. A new song that in contrary to the loop focussed material on the latest Shadow Puppets album showcases a classical approach without guitar distortion. This makes curious to a new studio album from The Machine in the Garden. For now XV is a special collection of songs which are a pleasure to listen to.</p>
</div>
<p>-<span itemprop="author">TekNoir</span>, <a href="http://www.gothtronic.com/" target="_blank"><span itemprop="publication">gothtronic</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>A collection of rare tracks, remixes, and demos spanning the duo's 15-year existence, <i>XV</i> acts as proof that the world of darkwave music is a better place for having The Machine in the Garden.</p>

<p>For any band to last longer than a decade is something of an achievement, so it is with no small amount of pride that The Machine in the Garden should release the appropriately titled <i>XV</i> as a retrospective of their work. Not unlike their contemporaries, fellow darkwavers Faith and the Muse did with their <i>Vera Causa</i> release, the duo of Summer Bowman and Roger Frac&eacute; opted not simply to release a "greatest hits" or "best of," but rather a collection of alternate mixes, demos, and rarities, with two new songs serving as bookends; an intriguing move, but one that cements <i>XV</i> as an excellent sampler for those unfamiliar with The Machine in the Garden and longtime fans alike.</p>

<p>Beginning with the first of the two new songs, "Mental Wasteland" waltzes its way through your speakers with everything one could expect from the band: ethereal moods and electronics complemented by gritty, psychedelic guitars and beats that are danceable yet conservative, topped off by Bowman's majestic and melodious vocals. "Otherworld" closes the record out with a slow marching rhythm and ringing guitar and thrumming bass tones befitting any gothic dirge by The Cure, while Bowman's operatic swells enchant the listener as wonderfully as ever, holding the listener's attention throughout the six-minute length.</p>

<p>Of the other tracks on <i>XV</i>, several of the remixes have appeared on past releases, though the Shades of Grey remix of "Mantra" by Ego Likeness is worthy of mention with the wax and wane of oscillating synths and a steadily building dance beat, bridging the two bands' already similar styles into an enjoyable club track. The real treat here is the unreleased tracks, such as "Six Days" from the <i>One Winter's Night...</i> sessions, which begins with a m&eacute;lange of tribal percussion effects giving way to those quintessentially morose melodies and glasslike shards of guitars for good measure, while "Voice" displays Frac&eacute;'s own emotive vocals amidst a waltzing cadence of ambient, discordant guitars.</p>

<p>We even have an unreleased cover of The Sisters of Mercy's "On the Wire," and the out-of-tune acoustic guitar demo of "Every Thing She Is" adds a certain intimate charm to the proceedings, making <i>XV</i> an excellent collection of music overall. Just about the only thing missing here is a live track or two to provide newcomers with a taste of the duo's prowess in concert. Still, the world of darkwave music is a better place for having The Machine in the Garden in it; the proof is in <i>XV</i>.</p>
</div>
<p>-<span itemprop="author">Ilker Y&uuml;cel</span>, <a href="http://www.regenmag.com/" target="_blank"><span itemprop="publication">Re-Gen Magazine</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://mickmercer.livejournal.com/795350.html" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Now here's a pretty thing, to celebrate their fifteen years together, with a selection of material which isn't simply a chronological selection of already released material, as Roger Frac&eacute; and Summer Bowman select an interesting mixture, spice up with a remix here or there, demos and new material.</p>

<p>Kicking of with the brand new and upright 'Mental Wasteland', the guitar cuts through sharply as the vocals perambulate then nimbly scamper up the melodic cliff face, the lyrical worries finding an opposite in uplifting energies. 'Wonderland' gets the first of Pete Murray's remixes, turning into lean dance shudders, while 'Oblician' adheres to some stern Goth principles woven by circular guitar and a chuntering rhythm, commanding male vocals and a brusque warmth overall. 'Six Days' was apparently left off 'One Winter's Night' and must still be wondering what it did wrong, as it's a bracing, dark slab with a hypnotic pull.</p>

<p>'Mantra' is remixed by the great Ego Likeness, frosted, mellow and then clipping along neatly on buzzy-dance insinuations, swarming hotly, and it's interesting to see how easily their sound can translate into a speedy flow. 'Words In Heaven Lost' comes on like religious Ethereal but descends into some impressive, perilous angst. The original demo of 'Ex Oblivione' was apparently for an HP Lovecraft compilation that never came out but sounds like hedgerow sci-fi initially, organic and bleepy, then fills out into relentless, defiant gloomy pop. 'Dawn' gets the Pete Murray treatment, bringing it in, then out, with a sense of keen optimism and curiosity, the rhythm spry and eddying, like wah-wah from the moon.</p>

<p>The acoustic 'Every Thing She Is' is bliss in surging, strident demo form, and the long forsaken 'Voice' is brilliant, short and snappy, with imperious guitar. 'On The Wire' is a beautiful, still take on an Eldritch song which will surprise many, and it certainly suits a female voice better. 'Nowhere' is a short twinkling idea that slips by in a winsome way, then their very early 'Walls' is a bit weird, the vocals unsettling, the mood quite open and viscous. 'Corpus Christi' gets a slowly turning dance mix from Matrix that almost sounds like a harsh Pet Shops gone ethereal, which is very strange. 'Otherworld' is a reassuring, uplifting new song that brings this all to a rapturous close.</p>

<p>Fifteen years old, but precociously mature.</p>
</div>
<p>-<span itemprop="author"><a href="http://mickmercer.livejournal.com/795350.html" target="_blank">Mick Mercer</a></span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.side-line.com/reviews_comments.php?id=30484_0_17_0_C" class="review" itemprop="reviews" itemscope itemtype="https://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The duo Roger Frac&eacute; and Summer Bowman celebrates the 15th anniversary of their band. 15 years of commitment and several releases to date have been the main inspiration for this album "XV" featuring 15 songs from all over the years. "XV" is a real cool release on which you can find back (or discover) the wave style of this band, which now and than reminds me of Cocteau Twins. The melancholia of the guitar in conjunction with the female vocals probably brings me to Cocteau Twins, but referring to this legendary 80s band is for sure positive! I enjoyed most of the songs, but especially the "Words In Heaven Lost - Get Out Of This Remix" which is a pure mix of old Dead Can Dance and Cocteau Twins-influences. Some other piece that caught my attention are "Wonderland – Mad Hatter Mix" (remixed by Pete Murray) for the electronic touch, "Six Days" for the typical wave mood from the old days, "On The Wire" (cover version of The Sisters Of Mercy) for the kind of wafting sadness and "Corpus Christi - In Prayer Mix" (remixed by Matrix) for the great vocal performance, which reminds me of Fading Colours. "XV" is a real great item for all wave collectors!</p>

</div>
<p>-<span itemprop="author">DP</span>, <a href="http://www.side-line.com/reviews_comments.php?id=30484_0_17_0_C" target="_blank"><span itemprop="publication">Side-Line</span></a></p>
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
	<script type="text/javascript">
	jQuery(".revcontent").hide();
	jQuery("#reviews").click(function() {
		jQuery(".revcontent").toggle("fast");
	});
	</script>
<?php endif; ?>

</body>
</html>
