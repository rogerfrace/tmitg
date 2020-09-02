<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Underworld',
	'og:type'=>'music.album',
	'og:upc'=>'792733800421',
	'og:url'=>'http://www.tmitg.com/underworld.php',
	'og:description'=>'the Machine in the Garden &ldquo;Underworld&rdquo; is the band&rsquo;s second studio album.',
	'og:image'=>'http://www.tmitg.com/albums/underworld.jpg',
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
	<meta name="keywords" content="machine in the garden, tmitg, underworld, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/vs.php">
	<link rel="next" href="/winters.php">
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
	<meta itemprop="numTracks" content="16">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
	<div><img src="albums/underworld.jpg" alt="Underworld album cover" class="albumimg" itemprop="image" /></div>
	<h1 itemprop="name">Underworld</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">dxm-001-cd</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">1997</span><br />
		full-length CD released <time datetime="1997-12-16" itemprop="datePublished">16 December 1997</time><br />
		Out of print.<br />
		*A limited quantity was re-released in<br />
		CD-R format with original artwork in 2005<br />
		which is also no longer available.</p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Underworld"</caption>
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

<?php do_songtitle(1,"Final Form","finalform","finalform-bc","underworld.jpg","finalform","Final Form"); ?>
<?php do_songtitle(2,"Falling into the Sea","fallingintothesea",NULL,NULL,NULL); ?>
<?php do_songtitle(3,"Dreams of the Absent","dreamsoftheabsent","dreamsoftheabsent-bc","underworld.jpg",NULL); ?>
<?php do_songtitle(4,"Words in Heaven Lost","wordsinheavenlost",NULL,NULL,NULL); ?>
<?php do_songtitle(5,"Twenty Shadows","twentyshadows",NULL,NULL,NULL); ?>
<?php do_songtitle(6,"This Arising, That Arises","thisarisingthatarises",NULL,NULL,NULL); ?>
<?php do_songtitle(7,"Corpus Christi (love will die)","corpuschristi",NULL,NULL,NULL); ?>
<?php do_songtitle(8,"Shadowy Depths","shadowydepths","shadowydepths-bc","underworld.jpg",NULL); ?>
<?php do_songtitle(9,"Spiritus ex Obitus Sanctus",NULL,NULL,NULL,NULL); ?>
<?php do_songtitle(10,"Primevil","primevil",NULL,NULL,NULL); ?>
<?php do_songtitle(11,"Cut Me","cutme",NULL,NULL,NULL); ?>
<?php do_songtitle(12,"Dark Splintered Heart <i>mutation engine</i>","darksplintered","mutationengine-bc","underworld.jpg",NULL); ?>
<?php do_songtitle(13,"CryGods <i>mind overdrive</i>","crygods",NULL,NULL,NULL); ?>
<?php do_songtitle(14,"Cut Me <i>eerie glow</i>","cutme",NULL,NULL,NULL); ?>
<?php do_songtitle(15,"Altered Form","finalform",NULL,NULL,NULL); ?>
<?php do_songtitle(16,"Cold","cold","cold-bc","underworld.jpg",NULL); ?>
	
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a rel="noopener" rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/underworld" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'underworld');"><img src="images/bandcamp.gif" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="iTunes"><a rel="noopener external" itemprop="url" href="http://itunes.apple.com/us/album/underworld/id79330423" id="itmslink" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'underworld');"><img src="images/applemusic.gif" class="itunes" alt="Buy Now from Apple Music" /></a></div>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="http://www.amazon.com/gp/product/B0014EU0V0/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217153&amp;creative=399701&amp;creativeASIN=B0014EU0V0" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'underworld');"><img src="images/amazonmp3.gif" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B0014EU0V0&amp;camp=217153&amp;creative=399701" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></div>
	
</section> <!-- end buy button div -->


	<hr />
	
<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Underworld</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="9">
	</div>
	<div class="revcontent">

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The Machine in the Garden (or 'Lawnmower' as a friend called them) are probably the most highly educated Goth band around. Between the two members there is a lot of expert knowledge on music and culture, which they put to great use on "underworld". Over 16 tracks, they run the gamut of music styles that make up the dark-side of music and do so with incredible skill. The first six tracks follow the same basic formula, ethereal music with synth music that washes over you and magnificent vocals that fill your head. "corpus christi (love will die)" has Roger Frace joining Summer Bowman for a light and shade harmony piece reminiscent of Dead Can Dance, while the DCD influence continues on the dark rhythm driven "shadowy depths". With "primevil" the ethereal elements disappear to be replaced with a driving electro-Goth sound, leading into the Sisters influenced "cut me" which features an incredibly imaginative mix of industrial beats and acoustic guitar. "dark splintered heart (mutation engine)" is pure industrial dance with a complete change in the vocals, as they're heavily distorted, leading into the even dancier "crygods (mind overdrive)" a dub piece that mixes some of the earlier ethereal sounds. The 'eerie glow' mix of "cut me" which replaces the original music with an atmospheric techno soundscape. "Altered Form" speeds up the ethereal sound of the original "Final Form" to create a brighter, dancier piece. And "cold" wraps it all up with a 100% Goth sound &mdash; droning vocals, medieval influenced music with a crystal clear arrangement. This CD really has it all, tying up the most of the disparate elements that make up today's dark-side music, referencing numerous bands along the way, but producing something fresh, often innovative and incredibly diverse. This CD will appeal to a wide variety of people and is a perfect overview of the current trends.</p>
</div>
<p>-<span itemprop="author"><a href="http://www.sortedmagazine.com/archive/magazine/sordid/nov98.htm#machine" target="_blank" itemprop="publication">Sorted Magazine</a></span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>I've been hearing great things about the Colorado goth/industrial scene, and the Boulder based Machine in the Garden are meeting all my expectations.  The duo of Summer Bowman and Roger Frac&eacute; create a perfect electro/goth/ethereal blend of music with their first full length CD, <i>Underworld</i>.  There are sixteen tracks on this impressive and varied release, and I love them all!  <i>Underworld </i>opens with tracks that lean decidedly toward the gothic ethereal spectrum with the incredible vocals of Summer.  Towards the middle Roger adds in his deep voice and the songs take on a more electro industrial feel, until the final two tracks bring back the ethereal beauty of the opening pieces.  <i>Underworld</i> is gothic at its best and should not be missed!</p>
</div>
<p>-<span itemprop="author">Octavia</span>, <i itemprop="publication">Outburn</i> #6, <span itemprop="datePublished" content="1998-05-01">May 1998</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The Machine in the Garden is a result of the collaboration of the efforts of Summer Bowman and Roger Frac&eacute;. This minimalistic band resembles black tape for a blue girl, with less of the ambient moments. Song after song will continue to amaze you, and each song explores a slightly different style.  Underworld can seem like EBM one minute, and later turn into ethereal beauty. Although the entire album is amazing, several tracks stick out. "falling into the sea" features the vocal talents of Summer over soft piano. Roger and Summer sing on "corpus christi (love will die)", which is in my opinion, the most incredible track on the CD. Roger's minimal, yet unique electronics bring this song together to perfection. "spiritus ex obitus sanctus" is an instrumental experimentation with noise, featuring metallic electronics over other synths in the background. This CD should appeal to any fan of any of the many sub-genres in the whole industrial/goth scene, for tMitG experiment with each, and tie the qualities of each genre together. I have a feeling this will be one of my favorite releases of all of 1998.</p>
</div>
<p>-<span itemprop="author">Scott Mallonee</span>, <i itemprop="publication">GRINDINGintoEMPTINESS</i>, <span itemprop="datePublished" content="1998-03-01">March 1998</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The latest offering, <i>Underworld</i>, from the Machine in the Garden proves to be a well thought out and musically intriguing recording. This CD seems to take the listener on a journey that starts out lulling each one of us into a dreamworld that is dark and melodic. Female vocalist, Summer Bowman, displays strong, fine-tuned vocals, which are immediately apparent on the opening track Final Form. The first five songs encumber you into this ethereal world of musical elements.  The CD then introduces you into the next part of the journey with a powerful ballad, &ldquo;Corpus Christi (Love Will Die)&rdquo;, featuring Summer Bowman joined by Roger Frac&eacute; (the other half of the band) on vocals. This second transition proves to be slightly louder and a bit more aggressive and energetic. The final part of the journey shows a more hostile approach, with the music taking on a more electronic-industrial feel and harsher vocals by Roger Fracé. The song &ldquo;Cut Me&rdquo; is one of the more impressive tracks on underworld.  It has a hard-edged sound, multiple uses of electronics, and unusual vocal styles. The only complaint is the intro is strikingly familiar to Rosetta Stone's "Nothing." The CD winds down with several other electronic tracks leading to the conclusion which brings us full circle, with a remix of &ldquo;Final Form&rdquo; in &ldquo;Altered Form.&rdquo; I found underworld to be a pleasant sounding CD with much attention given to composition and arrangement. This is a talented band and I look forward to seeing more from them.</p>
</div>
<p>-<span itemprop="author">Mardi Salazar</span>, <i itemprop="publication">Die Forum</i>, vol. 2 issue 1</p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The ability to create truly hypnotic music relies on the courage to take the simplest idea, even one chord or note, and let everything radiate from it, swim around it, like the ripples on the surface of dark water when a stone breaks its calm.  The Machine in the Garden aren't just brave enough, they embrace this approach, producing a mantra-like quality irrespective of the moods of the different tracks.  The occasional anemic offering (e.g. &ldquo;This Arising, That Arises,&rdquo; or &ldquo;Dreams of the Absent,&rdquo; which starts of disturbingly like Marilyn Manson's cover of &ldquo;Sweet Dreams&rdquo;) is easily compensated for by the epic, dream-like grandeur of &ldquo;Corpus Christi (Love Will Die)&rdquo; or &ldquo;Final Form&rdquo;'s Eastern melody tinges with swathes of expansive guitar, which sounds like it's billowing in blue clouds of stage smoke. Throughout, Summer Bowman's voice is a powerful addition, an often surprisingly intimate counter-balance to its shadowy, distant accompaniment. Even the remixes at the end of the CD are, for once, a welcome bonus &mdash; adding dance beats or heavy guitars to the already virtuoso range of this exceptional band.  It's goth without the merest grunt of Nephilim-fuelled plagiarism, industrial without ever resorting to compulsive use of swearwords in place of talent, and ambient without once causing me to use the word 'ethereal'.  A genuinely intelligent release without the pretention of experimentation for the sake of it.</p>
</div>
<p>-<span itemprop="author"><i itemprop="publication">The Penny Dreadful</i>, #10</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Machine in the Garden are exactly that.  I can't think of another ensemble more aptly named.  Quaffing from the majestic epics on the preview cassette of their forthcoming Underworld CD, the usual critic's trick of describing bands via comparisons to other bands fails me.  Is this Black Tape for the Blue Girl on crystal meth, Dead Can Dance sniffing glue, or Atari Teenage Riot on opium? At different times, some, none, or all of the above.  tMitG morph effortlessly between moods and styles like few industrial-gothic bands can.  Electronic composer Roger Frace's voice sounds similar to Sam Rosenthal's (of Black Tape for a Blue Girl) in the higher register and like something out of Front 242 in the lower. However, most of the vocal duties are handled by Summer Bowman whose spring-water clear, well-trained tone is often multi-tracked, producing layers of compelling harmonies; when placed within the context of Frace's unrelenting, unrepentant electronic soundscapes, Bowman's voice ultimately seems more diabolical than heavenly (and that's a good thing). The piano intro to the second song runs a little too long, but that's the only blemish on this otherwise astonishing album.  Fans of Miranda Sex Garden and Chicago's long-departed and much-missed Alchemy should check this out.</p>
</div>
<p>-<span itemprop="author">Aaron Lanterman</span>, <i itemprop="publication">Night Times</i>, <span itemprop="datePublished" content="1997-11-01">November 1997</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>underworld, the first full-length release from self-described gothic-industrial band the Machine in the Garden, is soon to be out after over three years since their first EP release, Veils and Shadows. as of this writing (November 24, 1997), underworld has not yet been released (it is due out in December, 1997), so this review may be of some use to anyone anticipating underworld's release in the forthcoming weeks.  first off, I must say I enjoyed this release very much. when Veils and Shadows was released in 1994, the Machine in the Garden was the solo effort of founder Roger Fracé. with the addition of vocalist Summer Bowman, new elements are added to the already broad range of Frac&eacute;'s solo musical abilities. with the added options of a female vocalist and Summer's additional creative abilities, underworld has proven to be the strongest debut album this reviewer has heard since John Frizzell's "VR.5" soundtrack. Like the score of "VR.5," underworld has an EXTREMELY wide variety of musical styles and types ranging from dark electro a la Die Form, to more classical pieces; from acoustic pieces, to techno dance. the most visible part of this album is the variety. no two songs are alike; one gets the feeling of listening to a compilation, as opposed to a single artist. the scope is quite large, resulting in many different sounds coming together to form a single cohesive unit. the first track, "Final Form," is usual industrigoth club fare; an electronic piece designed for accessability to the intended audience and dancibility in a goth club setting. by comparison, "Falling into the Sea," the second track is a minimalist piano piece that compliments Summer's voice quite well. track three, "Dreams of the Absent," has early moog-sounding synths resulting in a piece obviously inspired by sound of the Eurythmics' "Sweet Dreams." and so on... every track on this CD has it's own uniqueness and style completely it's own.  while still relatively obscure in most of the country, the Machine in the Garden is not yet a household name in their scene, but underworld is an extremely strong debut album, and will no doubt instigate attention from those who seek variety in the bands they listen to. the range and variety shown in underworld shows that the Machine in the Garden has great potential to be the next big thing in their genre, not because they have a style which is trendy or popular, but because they have variety and ablilty (great bands never stay the same and are always incorporating new elements) in their music, as well as the potential to grow (another thing great bands never stop doing). pay attention to the Machine in the Garden, as you will be hearing about them in the future.</p>
</div>
<p>-<span itemprop="author">rotwang</span>, <i itemprop="publication">inamoena tempora</i>, <span itemprop="datePublished" content="1997-11-01">November 1997</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>for those of you ignorant people out there, the Machine in the Garden is a gothic-industrial band featuring Roger Fracé and Summer Bowman.  their first offering, released back in october of 1994 was but a taste of what was to come in the future, and now, 3 years later, they will release underworld, and the preview tape i have contains 3 all new songs:  <i>final form</i>, <i>cut me</i>, and <i>words in heaven lost</i>; and contains 2 previously unreleased tracks:  <i>cold</i> and <i>dark splintered heart</i>.  sure the names of the songs sound like something taken from a skinny puppy album, but don&rsquo;t let that fool you, they take this genre to a new level.  you&rsquo;ll be thinking to yourself, it&rsquo;s gothic, no, wait, it&rsquo;s industrial.  no it can&rsquo;t be, it&rsquo;s ambient.  well, it&rsquo;s not any of those, it&rsquo;s all three and more.  summer bowman&rsquo;s vocals will grip you and not let go throughout the entire album, with the ethereal beauty flooding your soul.  roger frac&eacute;&rsquo;s vocals and harsh guitars and electronicka cast an even darker mood over the album.  i must say that i am thoroughly impressed with this album and can&rsquo;t wait for the final version to be cut and released.</p>
</div>
<p>-<span itemprop="author">darkpoet</span>, <i itemprop="publication">cemetery dreams</i>, vol.1 issue 2, <span itemprop="datePublished" content="1997-07-01">July 1997</span></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The debut full length release from the Machine in the Garden demonstrates perfectly their blending of technology with the natural world. The songs on this album develop as a movement as they range from sonorous ambient pieces to hard edge guitar driven songs. The music of tMitG has been categorised in many genres. If you like any Indie, Darkwave, Goth or Industrial you are guaranteed to love this release.</p>
<p>The album begins with "Final Form" which is an accessible traditional guitar goth song, however this soon changes with the second song as the music becomes more minimal and piano based. "Dreams of the Absent" follows which features moog style synth with Summer Bowman's gorgeous voice tempting you to unknown pleasures. "Words in Heaven Lost" is divine. Summer's voice in parts reminds me of early Sinead O'Connor. With "Twenty Shadows" the pace of the CD starts to pick up... "CorpusChristi" introduces Roger Frace on vocals before the move to a more darkwave feel to the music on the next track. By "Primevil" you realise that this album is more diverse than you could have anticipated... the upbeat industrial sound develops from the earlier ambience and is solidified by the haunting dual vocal. "Cut Me" wraps up the album proper, but we then get 4 remix tracks (two of tracks from their earlier "Veils &amp; Shadows EP"), and it all finishes with the song "Cold" from the as yet unreleased "Eire EP". This song I have heard described as the perfect song to be buried to! :-)</p>
<p>As a whole, tMitG are a band who have a fresh outlook on the music they produce, blending an embracing of the old with a fresh innovativeness. Check this out you- will not be disappointed.</p>
</p>
</div>
<p>-<span itemprop="author">John McDonagh </span>, <i itemprop="publication">The Tower</i>, issue 1</p>
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
