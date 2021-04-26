<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Shadow Puppets',
	'og:type'=>'music.album',
	'og:upc'=>'685879997523',
	'og:url'=>'http://www.tmitg.com/shadowpuppets.php',
	'og:description'=>'the Machine in the Garden &ldquo;Shadow Puppets&rdquo; is the band&rsquo;s sixth studio album.',
	'og:image'=>'http://www.tmitg.com/albums/sp.jpg',
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
	<meta name="keywords" content="machine in the garden, tmitg, shadow puppets, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/asphodel.php">
	<link rel="next" href="/xv.php">
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
	<meta itemprop="numTracks" content="11">
	<meta itemprop="byArtist" content="the Machine in the Garden" />
	<meta itemprop="genre" content="gothic" />
	<meta itemprop="inLanguage" content="en" />

<!-- this is the display table for the CD and info -->
<section id="discog_albuminfo" tabindex="-1">
    <div><img src="albums/sp.jpg" alt="Shadow Puppets album cover" class="albumimg" itemprop="image" /></div>
 	<h1 itemprop="name">Shadow Puppets</h1>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber">MPP975</span>) <span itemprop="recordLabel">Middle Pillar Presents</span> &copy;<span itemprop="copyrightYear">2005</span><br />full-length CD released <time datetime="2005-04" itemprop="datePublished">April 2005</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>
</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Shadow Puppets"</caption>
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
do_songtitle($tracknum,$songname,$lyricsfile,$mp3name,$mp3cover,$videoname,$songname)
$lyricsfile and videoname do not include .html
*/ ?>

<?php do_songtitle(1,"This Silence","thissilence",NULL,"sp.jpg","thissilence","This Silence"); ?>
<?php do_songtitle(2,"The Inside World","theinsideworld","theinsideworld-bc","sp.jpg","theinsideworld","The Inside World"); ?>
<?php do_songtitle(3,"Winter Fell","winterfell","winterfell-bc","sp.jpg",NULL); ?>
<?php do_songtitle(4,"Mantra","mantra","mantra-bc","sp.jpg",NULL); ?>
<?php do_songtitle(5,"Suspend","suspend",NULL,"sp.jpg","suspend","Suspend"); ?>
<?php do_songtitle(6,"More Unto Fire Dreamt","moreuntofiredreamt","moreuntofire-bc","sp.jpg",NULL); ?>
<?php do_songtitle(7,"Mother","mother",NULL,"sp.jpg",NULL); ?>
<?php do_songtitle(8,"Spider\'s Bride","spidersbride","spidersbride-bc","sp.jpg",NULL); ?>
<?php do_songtitle(9,"Illusions In Rain","illusionsinrain",NULL,"sp.jpg",NULL); ?>
<?php do_songtitle(10,"If Ever","ifever",NULL,"sp.jpg",NULL); ?>
<?php do_songtitle(11,"Goodbye","goodbye",NULL,"sp.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a rel="noopener external" itemprop="url" href="https://tmitg.bandcamp.com/album/shadow-puppets" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Bandcamp'});"><img src="images/bandcamp.png" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div><a rel="noopener external" href="https://geo.music.apple.com/us/album/shadow-puppets/953109356?itsct=music_box&amp;itscg=30200&amp;at=1000l35Bw&amp;app=music&amp;ls=1" style="display: inline-block; overflow: hidden; border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"><img src="https://tools.applemediaservices.com/api/badges/listen-on-apple-music/badge/en-US?size=250x83&amp;releaseDate=1112313600&h=36a28865aee60bd11770e756b44d1162" alt="Listen on Apple Music" style="border-top-left-radius: 13px; border-top-right-radius: 13px; border-bottom-right-radius: 13px; border-bottom-left-radius: 13px; width: 200px; height: 66px;"></a></div>
		
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a rel="noopener external" itemprop="url" href="https://amzn.to/3mCVIxV" onclick="gtag('event','add_to_cart',{'event_category':'ecommerce','event_label':'Amazon'});"><img src="images/amazonmp3.png" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img class="wai" src="https://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B000QZU67G&amp;camp=217153&amp;creative=399701" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>
</section> <!-- end buy button div -->

	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <i>Shadow Puppets</i>:</h2>
	<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
		<meta itemprop="reviewCount" content="10">
	</div>
	<div class="revcontent">

<blockquote cite="http://www.starvox.net/cdr/machine.htm" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>I've been aware of The Machine In The Garden in passing for a few years. Probably not since their first release in 1993 but I've downloaded a few MP3s and heard various compilation appearances in my time. I always meant to investigate further. But with one thing and another I never got around to it. So now, a mere 12 years after their creation, I get to enjoy the Machine in the Garden album experience in full.</p>

<p>The ethereal voice of Summer and the gentle flow of the music reminds me of  
San Francisco-based The Shroud. There's a languid and romantic air, with a drum machine that drives opening song "This Silence." Subtle guitars fuel this song to crisis point, before disappearing. The electronic edge has a strong influence on "The Inside World."</p>

<p>Things take a turn too far into the electronic for me on "Mantra." The harshness of the drums sounds at odds with the rise and fall of synthesisers. This sounds like a remix done by a band with an underscore and a number in their name. Summer's voice is as beautiful as ever but I'd enjoy this more with a less frantic rhythm track running through it. I appreciate "Suspend" all the more for the contrast it offers. The circling echo-laden guitar makes a good counterpoint to the throbbing bass sound. The song explodes after the two and a half minutes, which works well. At the eye of the hurricane Summer has the same manner as Dru from This Ascension, which is a good thing. The song then calms for a while, before erupting again.</p>

<p>The name the Machine in the Garden refers to the progress of technology and its relationship with nature. I like the natural imagery that runs through the songs. We have mention of streams, storms, winter, forests, wind and fire. If you are the sort of person that likes to listen to music when reading, may I suggest The Machine In The Garden the next time you are reading myths or fantasy. Songs on previous albums have taken inspiration from writers as diverse as Marion Zimmer Bradley, George R. R. Martin and H.P. Lovecraft.</p>

<p>"Mother" is a cover of a song by a band called Zia. I've not heard the original, but Summer and Roger assure us it is different. The song is steeped in metaphor but there can be few that won't immediately appreciate its ecological message. Thematically it reminds me of something that might appear on Kate Bush's <i>Never For Ever</i> album. The washes of synthesiser mix with strange buzzes and clicks, with Summer sounding at her most strident. It's not the easiest of listens, but succeeds at getting its point across.</p>

<p>Both Roger and Summer sing on "Spider's Bride" which has a throbbing bass sound at its core. The drums thump and crash while the song rolls relentlessly on. Here they seem to represent the technological as opposed to nature. I'm briefly reminded of Collide or Curve. "Illusions In Rain" is piano-led and reminds me of The Shroud circa the <i>Long Ago and Far Away</i> album. "If Ever" has an acoustic guitar and initially reminds me of Faith and The Muse. This song cycles between quiet and loud, which always keeps things interesting.</p>

<p>For the finale the Machine in the Garden go back to their roots with an early 80s Depeche Mode-style synth song. The harshness of the previous song is replaced by Summer's sensuous vocals. Thankfully Summer and Roger haven't borrowed Martin L Gore's rhyming dictionary. "Goodbye" is an affecting tribute to death - either literal or symbolic - which at once embraces both the ideas of nature - in the lyrics, and technology - to produce the music. They combine to produce both intellectual and emotional pleasure in this listener.</p>

<p>Summer and Roger are accomplished musicians. They have a strong identity, but also the ability to vary their style, while remaining distinctively The Machine In The Garden. I approve of their subject matter and agree with their views. Sometimes I find their sound a little cold, perhaps due to the use of electronics. Occasionally I wish they had chosen a less frantic drum pattern. I like and appreciate this album, but I think it is going to take a little longer for me to truly love it. I'm prepared to make the effort though...now where did I leave my book?</p>

</div>
<p>-<span itemprop="author">Stuart Moses</span>, <a href="http://www.starvox.net/cdr/machine.htm" target="_blank"><span itemprop="publication">Starvox</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.virus-mag.com/index.php?a=1329" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p><i>Shadow Puppets</i> is Austin, Texas band The Machine In The Garden's new CD. 
Best described as ethereal darkwave, tMitG taps right into the legacy of the Cocteau Twins, but with an entirely contemporary and original twist.</p>

<p>The Machine In The Garden is comprised of Summer Bowman (vocals, lyrics) and Roger Frac&eacute; (instruments, programming, music). The duo's blend of sultry vocals, electronica, and other instruments creates music that is both haunting and exhilarating, with songs that possess wonderful instrumentation, great psychological depth, and artistic vision.</p>

<p>The band has already received positive reviews since they debuted the album live at Convergence 11 in San Diego. Standout tracks include "Suspend", "Mantra", and "If Ever." Actually, I could pick out four more songs, but then that I would almost be listing the entire track list over again, so you get the point. If you are into the whole ethereal darkwave thing, then you will love this CD.</p>

<p>I also wanted to make note of the CD cover art, which is a beautiful photograph of an Asian 19th century mechanical wooden puppet. The artwork adds intrigue to the overall CD presentation.</p>

</div>
<p>-<span itemprop="author">Michael Casano</span>, <a href="http://www.virus-mag.com/index.php?a=1329" target="_blank"><span itemprop="publication">VIRUS! Magazine</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The Machine in the Garden, consisting of the duo Roger Frac&eacute; and Summer Bowman are creating some of the most invigorating and fresh music to sport the "darkwave" label in a long time. After a brief hiatus, during which Bowman joined Dru Allen from This Ascension to form the neo-classical side-project Mirabilis, the band has returned stronger and more confident than I have ever heard them.</p>

<p>The main problem I had in reviewing this disc is singling out which tracks are the most deserving for commentary. When the whole CD is of such high quality and production this becomes almost like picking which organ is the most essential to my continued life on this planet. The band seamlessly blends organic and electronic elements without lessening the effect of either. Hypnotic beats, swirling guitars, ambient textures, and the powerful voice of Summer Bowman all merge to create a sum greater than their parts. It would be easy to say that <i>Shadow Puppets</i> is a quantum leap forward from their last CD <i>Asphodel</i>.</p>

<p>Despite my reluctance to single out tracks, I will say that "The Inside World", with its insistent dance-floor-ready beat makes me imagine the Darkwave Army winning club territory back from the forces of EBM. Meanwhile "Suspend" which starts off quietly enough, slowly grows stronger and more emotive until you find yourself moved in ways modern songs can rarely achieve. "Spider's Bride" one-ups the Cure's "Lullaby" by singing from the perspective of the spiders. Fittingly the CD ends with "Goodbye" a touching, poetic song about saying farewell.</p>

<p>I would highly recommend this CD to anyone who has an interest in the future of dark music. The Machine In The Garden, like the latest incarnation of Black Tape For A Blue Girl seems to have reached a new level of quality, both in terms of song writing and production. If this trend continues we could see a real musical renaissance within the dark subcultures. There are great tracks here for both the dance-floor and for radio airplay. Not to mention just sitting at home with <i>Shadow Puppets</i> emanating from your stereo. These 'shadow puppets' put on a most intoxicating show, be sure you don't miss out.</p>

</div>
<p>-<span itemprop="author">Jason Pitzl-Waters</span>, <a href="http://www.starvox.net/" target="_blank"><span itemprop="publication">Starvox</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://pingthings.com/TMITGshadow.htm" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>New material from the brilliant darkwave duo!</p>

<p>I've been a fan of the Machine in the Garden for some time now, having been introduced to them in the early days through a chance discovery on mp3.com. They've always impressed me with their sophistication, the elegance of their lyrics, their excellent musicianship. I hold them in very high regard and I look forward to each new release with a tremendous sense of anticipation. But nothing could have prepared me for the brilliance of their latest disc, <i>Shadow Puppets</i>. Summer Bowman and Roger Frace of the Machine in the Garden have surpassed all previous expectations presented by earlier discs and created an epic, beautiful collection of songs that stand among the best I've heard so far this year.</p>

<p>Opening with "This Silence", the tone is set with languid guitar arpegios and beguiling percussion leading into a swelled chorus that totally rocks. Summer's vocals sound sensual like honey on this one, drawing the listener deeper and deeper into a new plane of existance. Go ahead, step inside, you can thank her on the other side...</p>

<p>Track two, "The Inside World", employs a steady kick drum beat and tension ridden guitar masterfully played underneath fully controlled vocals. Secrets, solopsisms and magic all rolled up into one. Brilliant.</p>

<p>"Winter Fell" is next, a chilled piece of music that stands as one of my favorites on the disc. It's a slowly building track that draws from a slight intro into more intense emotional territory. Chilling, beautiful and all together wonderful.</p>

<p>"Mantra" opens with a burbling, glitchy electronic intro, all feedback laden and processed noise, mad experiments in sound bubbling up from test tubes and beakers. Vocals take on a particularly automated quality here, a processed element that brings to mind images of black rainfall and Daryl Hannah using spray paint as makeup. This is a good thing by the way. Sheerly robotic in a most appealing fashion.</p>

<p>"Suspend" uses fluid vocals over sparse keyboard work leading into guitar melodies and dramatic rhythm patterns. There's a theatricality to this piece, a really lovely cinematic quality that would lend itself well to a video. Ummmmmmm, Summer? Roger? Are you taking note here? kthxbye!!!!!</p>

<p>The next song, "More Unto Fire Dreamt", is a slower paced, arpegio based track that reminds me of earlier work by the band. It's a lovely piece that allows Summer's vocals to stretch out and flow, a great showcase for her impressive talents.</p>

<p>"Mother" is a cover of a song by Elaine Walker of ZIA, an incredibly powerful piece that captures the helplessness of illness. It's a powerful example of the way music can be used to vocalize emotions and sentiment, a very impressive work that stays with the listener long after it's completion.</p>

<p>"Spider's Bride" follows, a vaguely unsettling track filled with layered vocals and driving percussive patterns. Roger makes a brief appearance on back up vocals on this one, adding a dramatic quality that really complements the song. Vocals wrap around eachother, intertwining, building in intensity. A lovely piece of string taut tension.</p>

<p>"Illusions in Rain" features vocals and piano overtop a steady droning melody. Sparse, minimal, beautiful. Saying anything more would only take away from its wonders.</p>

<p>"If Ever" opens with a lovely blend of acoustic guitar and ethereal vocals, a yearning need, reaching beyond oneself. As time progresses electric elements are added to accent the strength and desire in the piece and by the time the song is over, you want and need everything in just the same way.</p>

<p>"Goodbye" closes the album with a steady synth line and swooning vocals. A lovely way to close a disc filled with beauty, wonder, secrets and mysteries.</p>

<p>So what more is there to be said that hasn't already been mentioned? <i>Shadow Puppets</i> is a slick production, lyrically strong and mature, filled with great programming and a lovely blend of both organic and electronic elements. Whether you're a long time fan of the band or if you're looking for something new to check out, you owe it to yourself to investigate this disc. You'll be glad you did.</p>

</div>
<p>-<span itemprop="author">rik</span>, <a href="http://pingthings.com/TMITGshadow.htm" target="_blank"><span itemprop="publication">ping things</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.morbidoutlook.com/music/inrotation/2005_06_inrotation.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>I'm keepin' this one! Eminently goth, very fine blend of old school and newer modes... but with their own definitive stylings, nobody's clone. Okay... so I am repeating "Suspend" for about the gazillionth time. This song rules so much! This is the sort of stuff that reminds me why I love music.</p>

</div>
<p>-<span itemprop="author">Andrew Fenner</span>, <a href="http://www.morbidoutlook.com/music/inrotation/2005_06_inrotation.html" target="_blank"><span itemprop="publication">Morbid Outlook - In Rotation, June 2005</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.collectedsounds.com/cdreviews/shadowpuppets.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Summer Bowman and Roger Frac&eacute; make up the Machine in the Garden, a gothic duo of great talent. Since their last album <i>Asphodel</i> they have clearly developed. Bowman's singing has grown stronger and the songs enthrall.</p>

<p>"The Inside World" is driven by strong rhythms and ethereal singing.</p>

<p>"Winter Fell" is a heavenly ballad with some stunning singing.</p>

<p>"Suspend" sounds filmic and epic with its sweeping majestic mood. Bowman sings strongly as the song advances, guitars thunder in and add to the majesty.</p>

<p>"Spider's Bride" is another strong rhythmic and track this time Bowman and Frac&eacute; duet.</p>

<p><i>Shadow Puppets</i> is a powerful new record by a talented band.</p>

</div>
<p>-<span itemprop="author">Anna Maria Stj&auml;rnell</span>, <a href="http://www.collectedsounds.com/cdreviews/shadowpuppets.html" target="_blank"><span itemprop="publication">Collected Sounds Women in Music</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.regenmag.com/Review-425.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>It's apparent from the first glance at The Machine in the Garden's new CD that this is more than your average ethereal album. The ghoulishly grinning marionette on the front cover is a presage of something darker than the airy-fairy atmospheres you might expect if you're not familiar with the band. That's not to say this album isn't pretty, of course. It's incredibly pretty, in fact; lead singer Summer Bowman has a lovely soprano, and she shows it off to good effect on the piano-laced "Illusions In Rain," the gently floating "Winter Fell," and the majestic "Suspend," which just might be this year's darkwave anthem. Still, there's a darkness here that gives <i>Shadow Puppets</i> a certain weight that's lacking in most offerings from this genre. Programmer Roger Frac&eacute; adds a muted tension to the pulsing beats of "The Inside World," and the way Bowman's voice rapidly jumps and down the scales is somehow discomfiting. On "Mother," she whispers, wails, and whimpers over synthetic chimes and a bass effect that throbs back and forth across the stereo channels, while on "Spider's Bride" she sings a duet with Frac&eacute; that descends into paranoid depths before emerging as a percussion-based tribal chant. "If Ever" begins softly enough with strummed acoustic guitars, but dissonant noise and distortion creeps in, threatening to take over the gentle melodies before ebbing away with the end of the chorus. Seemingly aware of just how far they can push their audience, Bowman and Frac&eacute; end the album with the deliberately serene "Goodbye," a lushly bittersweet arrangement of achingly beautiful vocal layers and warm analog synthesizers. Delicate yet edgy, The Machine in the Garden manages to create heavenly atmospheres without slipping into sleepy self-indulgence or cloying sweetness. Perfect moody music for goths and shoegazers alike, <i>Shadow Puppets</i> should particularly appeal to fans of This Mortal Coil, Faith &amp; Disease, and Black Tape For a Blue Girl.</p>
</div>
<p>-<span itemprop="author">infinitywaltz</span>, <a href="http://www.regenmag.com/Review-425.html" target="_blank"><span itemprop="publication">ReGen Magazine</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.gothtronic.com/?page=23&amp;reviews=1550" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The American duo Summer Bowman and Roger Frac&eacute; have recently released their fourth studio album. With <i>Shadow Puppets</i>, The Machine in the Garden have without a doubt produced a very strong piece of music. The electronical darkwave of these two is on this cd very much in balance. Even so much in balance that I find it hard to think of something not right about it.</p>

<p>Well ok then, the first song on the album doesn't really draw my attention and might better have been placed somewhere else on the cd if you ask me. For that reason I keep listening the album from the second song "The inside world" that does attract me. The thick slow beat beneath it and the dragging guitars seem to hypnotize in combination with the clear voice of Summer. Sometimes she sings lightly as a feather, other times passionate, heavy and pressing, but always beautiful to listen to. Songs like "Winter fell" and "Mother" strike by their dreamy undertone that make it all sound very ambient. "Suspend" has a special construction that starts out really easy going and slowly gets more sturdy towards the end. Almost al songs sound both electronically as well as very spiritual. There is a sort of atmosphere around of ethereal sounds that enables you to let yourself go and fantasize.</p>

<p>Simply a beautiful cd, one that is very recommendable.</p>

</div>
<p>-<span itemprop="author">Arthylacia</span>, <a href="http://www.gothtronic.com/?page=23&amp;reviews=1550" target="_blank"><span itemprop="publication">Gothtronic</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.darklifezine.de/dlzineX2frame_cdreviewsoct06.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>A darkwave dream trip conducted by a talented duo is a possible way to describe this last (their fifth) creation by The Machine in The Garden. Hailing from the US, Summer Bowman and Roger Frace have been joining creative forces since well over half a decade, creating startling works of electro ethereal fusion with grace and eye open on the classic side. Shadow Puppet is seductive from the outset, and that's not only due to the sensually ethereal quality of Summer's vocals. Her airy notes go down in peaceful symbiosis with trip-hop-ish electronics that are not afraid to host more conventional guitar, bass or synth lines where due. Seamlessly shifting from pure introspection and ethereal melancholy to bodied pieces lead by catchy lines, this an album that moves the concept of gothic and darkwave a few steps forward, despite the wide general recession of the genre. Featuring an outstanding production amongst other qualities, Shadow Puppet projects The Machine in The Garden straight into the international darkwave arena. Holding together the best traits of the goth-darkwave inheritance, and injecting a considerable dose of personal interpretation seems a winning move in this album, and good news for dreamy souls.</p>

</div>
<p>-<span itemprop="author">Gianfri</span>, <a href="http://www.darklifezine.de/dlzineX2frame_cdreviewsoct06.html" target="_blank"><span itemprop="publication">Darklife Webzine</span></a></p>
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://www.gothicparadise.com/tmitg.htm#rev2" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Once again we've been looking forward to the latest release from this band and once again fans will not be disappointed.  With each release it's great to just dive in and start listening to hear where the band is going to take us. With this album, like the many pieces before, they continue to lead the listener down a mysterious and eerie path through the thoughts and music from this duo.</p>

<p>Roger and Summer follow a tried and true pattern that they have established with their past releases with a great combination of gothic, darkwave and ethereal elements.  From the very first eerie guitar notes and somber beat of "Silence" as the opening track to the final closing tones of "Goodbye" the music is captivating and really holds the listener's attention throughout the duration of the album.  The variety of this album is a real plus and something that also helps to capture the listener so well.  Each track contains it's own signature sound while fitting into a perfect mold or just like all the necessary unique ingredients for a great recipe.  With each new release from this band I've felt it was the best work they have done to date.  And so it goes also with this release, their sound is mature and this album really is possibly the best we've heard from this band so far.</p>

<p>After the powerful introductory track "Silence" the album moves along steadily with that excellent variety mentioned above.  "The Inside World" picks right up with a similar moving beat and Summer's haunting vocals.  The beauty in these haunting pieces are just the beginning as the ethereal tracks really bring it out in full force. "Winter Fell" is a perfect example as the beat is subdued and the music becomes more and more somber through this track and other beautiful pieces including the finale "Goodbye".  However beautiful or captivating these pieces may be, the track that really stands out as a possible club piece and hit for this band is "Spider's Bride".  The tone of this track perfectly matches the style from this band, the pace is quicker and the music a bit more aggressive as the dark and moody vocals match the even darker and moodier music.  "Suspend" is easily another great piece that really stands out on this album, while starting out smooth and with an ethereal style it gradually builds up to a powerful crescendo.</p>

<p>That just about wraps it up, with eleven solid tracks this band has pulled off another great album.  While they've always been excellent, this one really proves what this band can do.  If you're a fan of past works or just finding out about this band and enjoy other gothic-oriented or ethereal music you'll really want to pick this album up.</p>

<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">5</span>/<span itemprop="bestRating">5</span></div>
</div>
<p>-<span itemprop="author"><a href="http://www.gothicparadise.com/tmitg.htm#rev2" target="_blank"><span itemprop="publication">Gothic Paradise</span></a></span></p>
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
