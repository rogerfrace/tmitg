<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Veils and Shadows EP',
	'og:type'=>'music.album',
	'og:upc'=>'780444900226',
	'og:url'=>'http://www.tmitg.com/vs.php',
	'og:description'=>'the Machine in the Garden &ldquo;Veils and Shadows EP&rdquo; is the band&rsquo;s first studio album.',
	'og:image'=>'http://www.tmitg.com/albums/vs.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'250',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, veils and shadows, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="next" href="/underworld.php">
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
	<meta itemprop="albumReleaseType" content="EP">
	<meta itemprop="albumProductionType" content="StudioAlbum">
	<meta itemprop="numTracks" content="4">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
    <div><img src="albums/vs.jpg" width="250" height="250" alt="Veils and Shadows album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Veils and Shadows EP</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">ISOL8-002-2</span>) <span itemprop="recordLabel">Industrial Isolation Music</span> &copy;<span itemprop="copyrightYear">1993</span><br />CDEP released <time datetime="1993-09-12" itemprop="datePublished">12 September 1994</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Veils and Shadows EP"</caption>
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
	<tbody itemscope itemtype="http://schema.org/MusicPlaylist">
<?php /*
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"CryGods","crygods",NULL,NULL,NULL); ?>
<?php do_songtitle(2,"A Touch of Heaven","atouchofheaven","atouchofheaven-bc","vs.jpg",NULL); ?>
<?php do_songtitle(3,"Dark Splintered Heart","darksplintered","darksplinteredheart-bc","vs.jpg",NULL); ?>
<?php do_songtitle(4,"Heavenly Air","heavenlyair",NULL,NULL,NULL); ?>

	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="3.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="3.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/veils-and-shadows-ep" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" width="200" height="73" class="bandcamp" alt="Available at Bandcamp" /></a></div>
	
	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/veils-and-shadows-ep/79330354?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=200x66&amp;releaseDate=807235200&h=78559b25fab1b8a0fa3f58a15ecf00a8" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="http://www.amazon.com/gp/product/B0014HUIV4/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217153&amp;creative=399701&amp;creativeASIN=B0014HUIV4" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" width="200" height="67" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=themachininth-20&amp;l=as2&amp;o=1&amp;a=B0014HUIV4&amp;camp=217153&amp;creative=399701" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></div>

</section> <!-- end buy button div -->
		
	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Veils and Shadows EP</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="9">
	</div>

	<div class="revcontent">
<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Very beyond post-modern avante garde music which is able to cross the hellish barriers between gothic sounds similar to vintage early BAUHAUS and the modern day American industrial movement via icons such as Trent Reznor&rsquo;s NINE INCH NAILS, Cevin Key&rsquo;s horroristic gods of the machine SKINNY PUPPY, and Al Jourgensen&rsquo;s metallic industrialized monsters MINISTRY.  As you play this compact disc its movement starts from the mildly simple relaxing and refreshing keys to a climax of raw evil power which has an impact of a dropping of a nuclear bomb to resurface as a relaxing setting to ease your mixed emotions of the bomb&rsquo;s aftermath.  Hard to believe that this is a one man masterpiece of ROGER FRACE who seems to make a superior effort to make a new cross blend or advance hybrid of two musical styles which seem to be reaching a new height of popularity &mdash; industrial and gothic.  This release will set new ways of standards for a recording to be classified.  All future releases will be compared to this release.  Simple to the point &mdash; BUY THIS NOW BEFORE IT BECOMES TRENDY AND BE A TREND SETTER.</p>
</div>
<p>-<span itemprop="author">Al Slavinzki</span>, <i itemprop="publication">Diabolical Decibel</i>, <span itemprop="datePublished" content="1995-01-01">January 1995</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Roger Frac&eacute; offers up dark, introspective musings framed by a rather traditional goth background.  The guitar work is similar to that of Seventeen Seconds era The Cure, when Robert Smith would concentrate on variations on the same notes forever.  I really dig that.  The guitars are combined with keyboards and drums to complete the darkly wonderful mixture.  This is a notch above what many internationally-known bands are doing right now.  Wonderful.</p>
</div>
<p>-<span itemprop="author">Carrie Tucker</span>, <i itemprop="publication">Ink Nineteen</i>, <span itemprop="datePublished" content="1994-12-01">December 1994</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Roger Frac&eacute; has been producing music of the highest calibre under the banner of the Machine in the Garden for a few years now, and at last his unique <em>dark wave</em> strain is getting the attention it so deserves.  This debut EP features four of the finest tracks from the vast tMitG catalogue, and provides a perfect insight into the diversity and depth of the performer.</p>
<p>&lsquo;Cry Gods&rsquo; sets out the stall; slicing guitar, prominent moody vocals, and faultless sequencing all swirling perfectly together.  &lsquo;A Touch of Heaven&rsquo; picks up the pace, and is somewhat reminiscent of early-Xymox with its poppy synth bass line and drum track.  &lsquo;Dark Splintered Heart&rsquo; is the harshest, and, in my opinion, the best track of the four &mdash; diving deep into industrial-climes for a truly raging chorus which will have the most reserved of listener leaping around on the furniture.  The hypnotic atmosphere is regained once more with the final track, the angelic &lsquo;Heavenly Air&rsquo;.</p>
</div>
<p>-<span itemprop="author">Porl Broome</span>, <i itemprop="publication">The Dark Hours</i> #2</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>i&rsquo;ll admit, i was impressed... the prospect of meeting a one-man band without trent reznor&rsquo;s financial ability left me expecting a sound below the level of what tMitG is.  the music begins simple, and becomes complicated by the use of digital instruments and distortion.  combine that with lyrics painting an image from roger&rsquo;s mind and the end product is four tracks of incredible music with stark painful lyrics.  expect to find the single thorn in the garden of eden pressing into your emotions when you listen to tMitG.</p>
</div>
<p>-<span itemprop="author">j.ryan o&rsquo;shea</span>, <i itemprop="publication">Industrial Poetry</i> vol.1, #1</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>&ldquo;The metal in the flowers, the automation of power, The Machine in the Garden of Eden&rdquo;&hellip; This really sums up what feelings are evoked when you listen to the debut release of Roger Frace. This 4 track CD creates unique moods for each song, but is consistently excellent. TMITG are a refreshing change from most Goth/Industrial bands around at the moment. Frace knows how to blend good dance industrial (&ldquo;A Touch of Heaven&rdquo;), Barkeresque horror soundtrack (&ldquo;Dark Splintered Heart&rdquo;) to simple beauty (&ldquo;Heavenly Air&rdquo;). If this is anything to go by, the next TMITG release will indeed be a treat.</p>
</div>
<p>-<span itemprop="author">John McDonagh</span>, <i itemprop="publication">Dark Angel</i> #18</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The Machine in the Garden release their first *official* release this summer, and to be honest you&rsquo;d better get prepared.  tMitG are no ordinary band; it is the project of one Roger Fracé, who originally hails from Tennessee.  This release spans both sides of that so called Gothic-Industrial crossover.  CRYGODS (the first track) makes you remember how good gothic music can be, but before you can categorize the music, A TOUCH OF HEAVEN makes you want to hit a dance floor.  This is dance industrial at its best... DARK SPLINTERED HEART makes you unsure what to do next... but you find yourself scared to death as the haunting raw vocals whirl you into the nearest wall.  HEAVENLY AIR is a beautiful keyboard driven song which lets you wind down again. The most unusual thing about this EP is that it is so complete.  It gels together in a way you would not expect the most professional of albums to.  Don&rsquo;t hesitate... Buy this NOW!</p>
</div>
<p>-<span itemprop="author">John McDonagh</span>, <i itemprop="publication">Permission</i> #5</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>This little ep licks our nipples with its teasing four tracks or electro-goth dance music, touching upon almost every aspect of good music; poetic lyrics, pounding dance beats, dreamy compositions, and subtle vocals. One word of caution when listening: this cd may transport you back to your old gothic/new wave days but please shirk this nostalgic impulse immediately. Track two, &ldquo;A Touch of Heaven,&rdquo; courses through your essence like no Cure song ever could do.</p>
</div>
<p>-<span itemprop="author">Louisa Petsitis</span>, <i itemprop="publication">Buzzz</i>, <span itemprop="datePublished" content="1997-11-01">December 1994</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Appropriately, the title &lsquo;Veils and Shadows&rsquo; translates the passion and emotion in a fairly unknown artist. Roger Frace wrote the lyrics and music for this EP, with the exception of &ldquo;Heavenly Air&rdquo;, which was written by Aeschylus and adapted by Frace. These songs are melodic and arranged beautifully. Also, I would like to add that this material is very well produced. Prior to this review, I was unaware of The Machine in the Garden, but I will definitely be looking forward to a full length album.</p>
</div>
<p>-<span itemprop="author">sapphire</span>, <i itemprop="publication">Permission</i> #6</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Veils &amp; Shadows EP is filled with just the kind of long heart ripping over-electric whining guitar chords and angst-ridden deep throaty male vocals that make up great Gothic music today.  Roger Fracé guides us through the animated tracks CryGods, A Touch of Heaven, Dark Splintered Heart, and Heavenly Air.  This EP isn&rsquo;t poppy dance goth, nor is it sleepy Ambient, it&rsquo;s rockin&rsquo; tales of tormented emotions and longing.  It may seem like a strange juxtaposition, but I like Gothic music that is alive, &lsquo;cause I&rsquo;m not dead yet.  The world can weigh heavily on one&rsquo;s shoulders, but that doesn&rsquo;t mean we should be quiet about it.</p>
</div>
<p>-<span itemprop="author">Forrest Black</span>, <i itemprop="publication">Blue Blood</i> #5</p>
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
