<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php $fbog = array(
	'og:title'=>'the Machine in the Garden - Before and After the Storm',
	'og:type'=>'music.album',
	'og:upc'=>'885767743120',
	'og:url'=>'http://www.tmitg.com/storm.php',
	'og:description'=>'the Machine in the Garden &ldquo;Before and After the Storm&rdquo; is the band&rsquo;s eighth studio album.',
	'og:image'=>'http://www.tmitg.com/albums/baats.jpg',
	'og:image:type'=>'image/jpeg',
	'og:image:width'=>'249',
	'og:image:height'=>'250',
); ?>
<!DOCTYPE html>
<html	lang="en" 
		prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
<?php require_once("functions.php"); ?>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="<?=$fbog['og:description'];?>" />
	<meta name="keywords" content="machine in the garden, tmitg, Before and After the Storm, music, CDs, roger frace, summer bowman" />
	<meta name="language" content="en-US" />
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?=BuildFBOG($fbog);?>
	<title><?=$fbog['og:title'];?></title>
	<?php include_once("headers-additional.php"); ?>
	<link rel="prev" href="/xv.php">
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
	<div><img src="albums/baats.jpg" alt="Before and After the Storm" class="albumimg ariapreso" itemprop="image" /></div>
	<h1 itemprop="name">Before and After the Storm</h1>

	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p class="notopmargin">(<span itemprop="catalogNumber" aria-label="catalog number">dxm-005-dig</span>) <span itemprop="recordLabel">Deus ex Musica</span> &copy;<span itemprop="copyrightYear">2011</span><br />Digital Album released <time datetime="2011-06-24" itemprop="datePublished">24 June 2011</time></p>
		<meta itemprop="musicReleaseFormat" content="DigitalFormat" />
	</div>
	<div itemscope itemtype="http://schema.org/MusicRelease" itemprop="albumRelease">
		<p>(<span itemprop="catalogNumber" aria-label="catalog number">dxm-005-cdse</span>) <span itemprop="about">Special Edition CD</span> released <time datetime="2011-07-13" itemprop="datePublished">13 July 2011</time></p>
		<meta itemprop="musicReleaseFormat" content="CDFormat" />
	</div>

</section> <!-- end album info div -->


<!-- start tracklisting table -->
<div id="discog_tracklist">
<table>
	<caption class="wai">Track listing for "Before and After the Storm"</caption>
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

<?php do_songtitle(1,"Cimmerian","cimmerian","cimmerian-bc","baats.jpg","cimmerian","Cimmerian"); ?>
<?php do_songtitle(2,"Scathefire","scathefire",NULL,"baats.jpg",NULL); ?>
<?php do_songtitle(3,"Metallic","metallic","metallic-bc","baats.jpg",NULL); ?>
<?php do_songtitle(4,"In the Vanir","inthevanir",NULL,"baats.jpg",NULL); ?>
<?php do_songtitle(5,"The Piano","thepiano",NULL,"baats.jpg",NULL); ?>
<?php do_songtitle(6,"Power and Prophesy","powerandprophesy","powerandprophesy-bc","baats.jpg",NULL); ?>
<?php do_songtitle(7,"Mending the Sky","mendingthesky",NULL,"sp.jpg",NULL); ?>
<?php do_songtitle(8,"Cimmerian (reprise)",NULL,NULL,"baats.jpg",NULL); ?>
<?php do_songtitle(9,"Scathefire (fire mix)",NULL,"firemix-bc","baats.jpg",NULL); ?>
<?php do_songtitle(10,"Power and Prophesy (metal below mix)",NULL,NULL,"baats.jpg",NULL); ?>
<?php do_songtitle(11,"Mending the Sky (slf mix)",NULL,NULL,"baats.jpg",NULL); ?>
	</tbody>
</table>
</div> <!-- end tracklist div -->


<section id="discog_buynow" tabindex="-1" itemprop="offers" itemscope itemtype="http://schema.org/AggregateOffer">
	<meta itemprop="gtin12" content="<?=$fbog['og:upc'];?>">
	<meta itemprop="lowprice" content="8.00">
	<h2 class="wai">Buy Now links</h2>
	
	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Bandcamp"><meta itemprop="priceCurrency" content="USD"><meta itemprop="price" content="8.00"><a itemprop="url" href="http://tmitg.bandcamp.com/album/before-and-after-the-storm" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Bandcamp', 'baats');"><img src="images/bandcamp.jpg" class="bandcamp" alt="Buy Now from Bandcamp" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="iTunes"><a itemprop="url" href="http://itunes.apple.com/us/album/before-and-after-the-storm/id446509058" id="itmslink" rel="external" onclick="ga('send', 'event', 'BuyNow', 'iTunes', 'baats');"><img src="http://ax.phobos.apple.com.edgesuite.net/images/badgeitunes105x31dark.gif" class="itunes" alt="Buy Now from iTunes" /></a></div>

	<div class="buynow" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><meta itemprop="seller" content="Amazon.com"><a itemprop="url" href="http://www.amazon.com/gp/product/B0058ZE3H8/ref=as_li_ss_tl?ie=UTF8&amp;tag=themachininth-20&amp;linkCode=as2&amp;camp=217145&amp;creative=399373&amp;creativeASIN=B0058ZE3H8" rel="external" onclick="ga('send', 'event', 'BuyNow', 'Amazon', 'baats');"><img src="images/amazonmp3.jpg" class="amazon" alt="Buy Now from Amazon" /><small class="block">(paid link)</small></a><img src="http://www.assoc-amazon.com/e/ir?t=&amp;l=as2&amp;o=1&amp;a=B0058ZE3H8&amp;camp=217145&amp;creative=399373" width="1" height="1" alt="" style="border:none !important; margin:0px !important;" /></div>

</section> <!-- end buy button div -->


	<hr />

<section>
	<h2 id="recognition">Recognition for <em>Before and After the Storm</em>:</h2>
	
	<p>#3 on "<a href="http://theskysgoneout.org/post/14063746480/tsgo-2011-a-darker-shade-of-pagans-top-ten-of-2011" rel="external">A Darker Shade of Pagan's Top Ten of 2011</a>"</p>
	<p>#3 on "<a href="http://theskysgoneout.org/post/14402004999/tsgo-2011-top-twenty-goth-darkwave-albums-of-2011" rel="external">Top Twenty Goth/Darkwave Albums of 2011</a>"</p>
	<p><a href="http://pingthings.blogspot.com/2011/12/cool-music-from-2011.html" rel="external">Ping Things: Cool Music from 2011</a></p>
</section>

	<hr />

<section aria-labelledby="reviews">	
	<h2 id="reviews" tabindex="-1">Reviews of <em>Before and After the Storm</em>:</h2>
	<div class="revcontent">

<blockquote cite="http://graveconcernsezine.com/reviews/cd-reviews/ethereal/3070-the-machine-in-the-garden-before-and-after-the-storm.html#.Tg9lS5wKw8c.twitter" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Darkwave favorites Summer Bowman and Roger Frace return with their eighth studio album.  This has a limited CD pressing, and is mainly offered as a digital download with the above image.</p>

<p>My first impression is that parenthood and Triathlons have energized tMitG.  Both the music and promo photos show a little more "edge" than in the past.  It's a good contrast to Bowman's "heavenly voices" work with Dru Allen (This Ascension) in Mirabilis.  While "Before and After the Storm" has hints of Android Lust and Collide, Bowman and Frace maintain their signature style.</p>

<p>It kicks off with "Cimmerian", a tribal dance song with E-minor drama.  "Scathefire", besides the cool title, has a good menacing rhythm.  "Metallic" has simliar appeal.  "The Piano" is a disarming interlude, relying mainly on that instrument and Bowman's voice.  "Power and Prophesy" is the dancefloor shoo-in, solid 90's darkwave with a deathrock guitar hook.  "Mending the Sky" has a minimal keyboard intro worthy of Sigur Ros, then adds a layer every few bars to become a soothing ethereal piece with dual vocal tracks.  Four tracks have alternate mixes with "Scathefire (Fire Mix)" being my favorite.</p>

<p>"Before and After the Storm" takes tMitG into new waters.  Ethereal and darkwave can blend as well as peanut butter and chocolate.  Please, you <em>know</em> that's an awesome combination.</p>
</div>
<p>-<span itemprop="author">Scott Sweet</span>, <a href="http://graveconcernsezine.com/reviews/cd-reviews/ethereal/3070-the-machine-in-the-garden-before-and-after-the-storm.html#.Tg9lS5wKw8c.twitter" target="_blank"><span itemprop="publication">Grave Concerns</span></a></p>
<meta itemprop="datePublished" content="2011-06-02">
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://truecultheavymetal.com/index.php/dominion/2011/07/07/review-the-machine-in-the-garden-before-and-after-the-storm" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>'Before and After The Storm', the eighth studio album from Texas duo The Machine in The Garden, continues the now familiar exploration of technological advancement and the progressive relationship between the mechanical, natural and spiritual worlds. Creating a distinctive blend of ethereal darkwave each song unfolds layers of sweeping electronic soundscapes, soaring guitars and Summer Bowman&rsquo;s ethereal melodies, all laced together with tribal-esque rhythms.</p>

<p>&lsquo;Cimmerian&rsquo; opens with a strong war-dance like beating of the drum, in an almost sublime nod to the Cimarron perhaps, developing an anthemic blend of rousing guitar riffs and melancholy through Bowman&rsquo;s dazzling vocals. In contrast, &lsquo;Metallic&rsquo; has a very gritty, Industrial feel with electronic representations of foundry-like sounds from the heart of the industrial age. &lsquo;Power and Prophecy&rsquo; provides a more edgy, post-punk aspect that leads you into the beautiful, meandering waves of &lsquo;Mending The Sky&rsquo;. With remixes of &lsquo;Scathefire&rsquo; and &lsquo;Mending The Sky&rsquo; as well as &lsquo;Cimmerian&rsquo; (reprise) also included, the album is packed with atmospheric, sensuous rhythms throughout. It is a dynamic journey of well-constructed arrangements, seamless theatrics that both inspire and are at times, introspective in delivery.</p>

<p>The passion and diversity in the band&rsquo;s writing is clear, and as concise as the influences that have shaped and moulded the music throughout the previous releases and yet, it further pushes the boundaries of ethereal darkwave, evolving and exploring all aspects of electronic music.</p>
</div>
<p>-<span itemprop="author">DJArmand</span>, <a href="http://truecultheavymetal.com/index.php/dominion/2011/07/07/review-the-machine-in-the-garden-before-and-after-the-storm" target="_blank"><span itemprop="publication">Dominion Magazine</span></a></p>
<meta itemprop="datePublished" content="2011-07-07">
</blockquote>

<hr style="width:50%;" />

<div class="goog-trans-section">
<blockquote cite="http://www.soundsbehindthecorner.org/recensione.asp?id=254" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review" lang="it">
<meta itemprop="inLanguage" content="it-IT">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>I Machine In The Garden con il nuovo &ldquo;Before And After The Storm&rdquo; sono approdati all&rsquo;&lsquo;ottavo album.</p>

<p>Band composta da Roger Frac&eacute; e Summer Bowman, emerge gi&agrave; dal nome del gruppo il concetto di una sorta di collisione creativa tra natura e cultura, tra mistica naturale e impatto dell&rsquo;&lsquo;industrializzazione e modernit&agrave; (non a caso &ldquo;The Machine In The Garden&rdquo; era anche il titolo di un illuminante saggio di Leo Marx del 1964, che trattava del conflitto tra visione pastorale-naturale e macchina-tecnologia). La band fin da met&agrave; anni &lsquo;&lsquo;90 ha congiunto sonorit&agrave; quasi gothic rock, darkwave per virare presto verso atmosfere pi&ugrave; suggerite, che spaziavano da esplorazioni elettroniche fino all&rsquo;&lsquo;ethereal, come negli anni creativi per la Middle Pillar.</p>

<p>Questo nuovo disco segna un altro traguardo nella sperimentazione di vari registri musicali della band, sempre di notevole classe, e si nota una crescente capacit&agrave; interpretativa della vocalist, Summer Bowman, nei ricami melodici come nei micropassaggi, per un lavoro introspettivo, intessuto di incanto e riflessione. I temi del lavoro sono antichi e moderni, i testi attingono da mitologia e interiorit&agrave;, vita contemporanea e poesia.</p>

<p>Inaugura il lavoro &ldquo;Cimmerian&rdquo;, introdotta da una batteria lenta e spettrale che spazia nel vuoto, per vedersi poi aggiungere la voce qui sacrale, in una sorta di madrigale rock con l&rsquo;&lsquo;arrivo di una chitarra dal suono pieno ed aggressivo. Il pezzo si arricchisce nella seconda parte del brano di impressioni atmosferiche-acustiche fino all&rsquo;&lsquo;esplosione finale.</p>

<p>&ldquo;Scathefire&rdquo; invece &egrave; puro dark electro, vivificato da una voce angelica e appassionata, mentre &ldquo;Metallic&rdquo; &egrave; un pezzo atmosferico, con una progressione lenta, tra strumentazione futuribile. Gi&agrave; uscito in anteprima come singolo, &ldquo;In The Vanir&rdquo;, percorre sonorit&agrave; electro e blandamente industrial con scelte vocali tra ethereal e angelico. Punto di riflessione nel disco &egrave; &ldquo;The Piano&rdquo;, caratterizzato da un pianoforte con una forte intonazione sentimentale e lirico-memoriale, sottolineato dalla dolcezza della voce.</p>

<p>L&rsquo;&lsquo;incanto viene interrotto con l&rsquo;&lsquo;energia di &ldquo;Power And Prophesy&rdquo;, particolarmente marcato da chitarre acuminate tipicamente gothic rock su una base electro-atmosferica. Segue &ldquo;Mending The Sky&rdquo; astratta, aliena, quasi ambientale, in cui si fa strada timidamente la voce lieve tra i riverberi. L&rsquo;&lsquo;album si chiude con alcune versioni rivisitate dei brani, ed ecco la ripresa ambientale di &ldquo;Cimmerian&rdquo;, vero epilogo del disco, poi &ldquo;Scathefire&rdquo;(Fire Mix) qui molto pi&ugrave; ballabile, in una veste pi&ugrave; dura remixata da Frances Byrne (Wench), &ldquo;Power And Prophesy&rdquo; (Metal Below Mix) che qui presenta campiture atmosferiche e meno chitarre filtrate, remixata dai Falling You, fino a &ldquo;Mending The Sky&rdquo; (Self Mix), remixata da Miles Fender (Earth Calling Angela, Charlottesville), che chiude il disco in una nebbia d&rsquo;&lsquo;incanti contemporaneamente antichi e originari quanto attualissimi e visionari.</p>
</div>
<p>-<span itemprop="author">Phaeton</span>, <a href="http://www.soundsbehindthecorner.org/recensione.asp?id=254" target="_blank"><span itemprop="publication">Sounds Behind The Corner</span></a></p>
<meta itemprop="datePublished" content="2011-07-29">
</blockquote>
	<div class="goog-trans-control"></div>
</div>

<hr style="width:50%;" />

<blockquote cite="http://www.gothicparadise.com/tmitg.htm#rev3" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Though it's been a while since <i>Shadow Puppets</i>, the band has kept busy over the years with an album in 2007 (containing both remixes and some new original tracks) and a single in 2010.  This album is mainly only available as a digital-only release available on the various music download sites, but for the true fans, collectors and stereofiles there is a limited special edition physical version available for purchase from the band. On the album we have a nice collection of seven original new tracks as well as four alternate remixes.</p>

<p>This album starts great and ends great, it's powerful, haunting and mesmerizing... everything you could possibly hope for from this group and more as they expand on their normal haunting mix of darkwave, goth and ethereal styles. It all starts off with a heavy tribal rhythm with layers of percussion and Summer's haunting vocals on "Cimmerian". This haunting minimalistic approach gives way to a building climax and we get a taste of the harder edge introduced on this album as the grinding guitars join in with the mix of heavy percussion as Summer's heavenly vocals infuse the soft touch of humanity through it all. As the album moves along we are presented with varying degrees of intensity, leading the user into something of an emotional and sonic roller coaster. "Scathefire" presents another fairly edgy mid-tempo piece fusing electronics, grinding guitar and heavy percussion as the underlying backdrop for the siren-like vocals. "Metallic" and "In The Vanir" lend something of a status quo style, bringing out the more tried and true styles from this band. "The Piano" stands out as a favorite of mine as a fan of classical piano. This piece includes a beautiful mix of piano and subtle strings allowing Summer's vocals to really stand out and shine. This is a sharp contrast with the following piece "Power and Prophesy" with it's harsh, driving gothic-rock style guitar. While I really enjoy the intro to this piece with that classic goth sound, along with the driving beat and rock style, as the track moves along it's a piece you have to be in the mood for as the guitar does drag on a become a bit oppressive. Once again we have a huge contrast in style as we move to the finale of the album with "Mending the Sky". This heavenly voices piece is another classic for this band's ethereal side, melding ambient soundscapes with subtle beats and various layers of electronics, gradually building and flowing smoothly along and finally fading to a close.</p>

<p>At the close of these seven pieces we definitely have a great short album or EP, so the remixes are a nice bonus for fans. Many remixes are hit and miss, but I think we have some great alternate versions here. "Cimmerian (reprise)" kicks it all off with a softer, more ethereal version of the piece, with the driving percussion noticeably missing while the heavy synths move it all along. The "Fire Mix" of "Scathefire" presents a fast-driving dance-friendly remix that might make a splash in the club scene for the more electro-friendly venues, while the original is perfect for the black-clad goths. The "Metal Below Mix" remix of "Power and Prophesy" takes an entirely different direction from the original, while guitar is still present and at the forefront, it seems only guitar and percussion provide the music backing this version for the first half, then it gradually gives way to a mix of sci-fi style electronics and guitar mixed. And finally, in great style the "Slf Mix" of "Mending the Sky" wraps it all up, in very similar fashion to the original with the vocals taking the forefront while subtle electronic layers back it all.</p>

<p>I have one complaint about this album, only seven new tracks! I want more, their music is great and so diverse, it would be nice to have a few more original tracks and I'm sure other fans will agree, though we're happy to get the little bit that we can, I certainly understand how busy life can be when music isn't your full-time life and job. So regardless, it's still a great album and is highly recommended, so go pick it up (or download it at one of the many online shops).</p>

<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">4.5</span>/<span itemprop="bestRating">5</span></div>
</div>
<p>-<a href="http://www.gothicparadise.com/tmitg.htm#rev3" target="_blank"><span itemprop="publication">Gothic Paradise</span></a></p>
<meta itemprop="datePublished" content="2011-07-30">
</blockquote>

<hr style="width:50%;" />

<blockquote cite="http://pingthings.blogspot.com/2011/08/before-and-after-storm-by-machine-in.html" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>It's been a while since the Machine in the Garden has put out any new material, so I was particularly excited when I found out last December that they would be releasing a new album this year. And after waiting patiently for it's release these last six months, I'm quite pleased to let you know that "Before and After the Storm" is well worth the wait. Summer Bowman and Roger Frac&eacute; have put together a tight collection of tracks that fully embraces the band's past, while simultaneously laying a foundation for their musical future.</p>

<p>As with all of their previous releases, "Before and After the Storm" showcases both Summer's vocals and Roger's instrumental work admirably, both of them having more than a few opportunities to stretch out and put their very impressive talents on display. Vocals soar, guitars rock, and the production is just as crisp and tight as I've come to expect from the two of them. Tracks like "Cimmerian", "The Piano" and "Power and Prophecy" stand among some of the best work in the duo's catalog, and the decision to include a trio of remixes fills out the album very nicely by offering some different interpretations of the tracks which succeed in emphasizing the quality of the songwriting. Where most other bands might not be as comfortable after such a long gap between albums, on "Before and After the Storm" Summer and Roger have returned with the confidence, sophistication and surety that they've always displayed, along with a maturity and elegance that makes me very excited about tMitG's future. In a 2008 review of the compilation album XV I commented on the fact that album closer "Otherworld" seemed like a fitting end to the first fifteen years of the band's career. On the other side of time in 2011, "Before and After the Storm" has proven itself as an excellent start to the band's future.</p>
</div>
<p>-<span itemprop="author">rik</span>, <a href="http://pingthings.blogspot.com/2011/08/before-and-after-storm-by-machine-in.html" target="_blank"><span itemprop="publication">ping things</span></a></p>
<meta itemprop="datePublished" content="2011-08-21">
</blockquote>

<hr style="width:50%;" />

<div class="goog-trans-section">
<blockquote cite="http://www.darkroom-magazine.it/ita/103/Recensione.php?r=2188" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review" lang="it">
<meta itemprop="inLanguage" content="it-IT">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>Anticipato sul finire dello scorso anno dal bel singolo in formato digitale "In The Vanir", esce finalmente il nuovo album del duo americano, dodicesima release complessiva di una carriera ormai quasi ventennale. Escludendo singoli o raccolte, l'ultima prova in studio sulla lunga distanza risale al 2005, segnatamente con l'ottimo album "Shadow Puppets", il quarto - ed ultimo - pubblicato attraverso la valida label Middle Pillar Presents: di qui la legittima e grande attesa per questo ritorno, inizialmente edito nel solo formato digitale, ed ora disponibile anche in CDr professionale con pregevole confezione eco-pack, per una limitatissima edizione di soli 50 esemplari numerati a mano ed autografati, rilasciati tramite l'etichetta della band stessa (Deus Ex Musica). Nelle otto nuove canzoni Summer Bowman (voce, anche attiva nello splendido duo al femminile Mirabilis) e Roger Frac&eacute; (musica) rielaborano tutto lo spettro delle sonorit&agrave; sviluppate nel lungo sodalizio artistico che li unisce dal 1997, senza rinunciare a spingere al livello successivo i limiti della propria ricerca sospesa fra radici goth/wave ed elettronica ad ampio raggio. "Cimmerian" apre marziale e sciamanica per elevarsi su toni solenni, e subito abbiamo un saggio della classe dei Nostri, abilissimi nel catturare le giuste atmosfere e nell'arrangiare sapientemente ogni frangente; pi&ugrave; spigolosa "Scathefire", intensa e pulsante col suo bel refrain ad ampio respiro, ma &egrave; "Metallic" a permettere a Summer di sedurre con le sue corde vocali, su di una struttura misteriosa e suadente. Bene anche il succitato singolo pre-album, ancora con un arioso refrain ed una sontuosa prova vocale, ma il primo vero gioiello del dischetto arriva con "The Piano", dove i soli tasti d'avorio (e qualche lieve arrangiamento d'archi) accompagnano la favolosa ugola della Bowman, per un momento davvero toccante. Il passato goth riemerge con forza grazie all'impetuosa, scura e trascinante "Power And Prophesy", marchiata da una chitarra graffiante e dall'ennesima grande performance vocale; l'altro picco dell'opera &egrave; senza dubbio "Mending The Sky", notturna e sognante nella sua quiete cosmica, eppure pulsante, con Summer semplicemente sublime nella sua dolcezza femminea. Il reprise di "Cimmerian" chiude il lotto degli inediti da studio fra toni tenui ed un piglio drammatico di grande effetto, con la singer americana fragile e meravigliosa, vera protagonista che sa conquistarsi i suoi spazi senza sottrarre importanza all'apporto strumentale. In chiusura troviamo tre remix, nello specifico ad opera di Frances Byrne (Wench), Falling You e Miles Fender, non fondamentali ma comunque potabili, in special modo la versione danceable di "Scathefire" ad opera della prima. Un ritorno degno della fama dei suoi inossidabili autori, che dopo quasi un ventennio e nella semi-indifferenza della 'facebook generation' puntano su s&eacute; stessi producendosi in proprio, continuando ad elargire musica di grande qualit&agrave; e spessore artistico a quei fortunati che ne sanno cogliere la bellezza. Se ambite alla copia fisica, non indugiate oltre.</p>


<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content="1">
	Rating: <span itemprop="ratingValue">7.5</span><meta itemprop="bestRating" content="10"></div>
</div>
<p>-<span itemprop="author">Roberto Alessandro Filippozzi</span>, <a href="http://www.darkroom-magazine.it/ita/103/Recensione.php?r=2188" target="_blank"><span itemprop="publication">Darkroom Magazine</span></a></p>
<meta itemprop="datePublished" content="2011-09-28">
</blockquote>
	<div class="goog-trans-control"></div>
</div>

<hr style="width:50%;" />

<blockquote cite="http://www.headfullofnoise.com/2012/05/review-the-machine-in-the-garden-before-and-after-the-storm/" class="review" itemprop="reviews" itemscope itemtype="http://schema.org/Review">
<meta itemprop="itemReviewed" content="<?=$fbog['og:title'];?>">
<div itemprop="reviewBody">
<p>The Machine in the Garden is a gothic/darkwave duo featuring Roger Frac&eacute; and Summer Bowman. Initially a solo endeavor by Roger Frac&eacute;, the band&rsquo;s debut, 1994&rsquo;s <em>Veils and Shadows</em> EP, blended the dark elements of goth with new wave and industrial tinges. Summer Bowman joined Frac&eacute; in 1997 for their first full-length album, <em>Underworld</em>.</p>

<p>In June 2011 The Machine In The Garden released <em>Before and After the Storm</em>, their first full album of new material since 2005. <em>Before and After the Storm</em> is an interesting mix of beautiful vocals, synth goodness and musical subtleties. Tracks like &ldquo;<em>Mending the Sky</em>&rdquo; and &ldquo;<em>In The Vanir</em>&rdquo; are slower, synth heavy darkwave tracks. Summer&rsquo;s vocals dominate while the synth tones swirl and envelope, weaving with the vocals well. &ldquo;<em>Cimmerian</em>&rdquo; is a wonderfully sluggish goth track filled with slow, tribal beats with haunting and beautiful vocals. Whereas &ldquo;<em>Power and Prophesy</em>&rdquo; speeds things up a bit with almost an 80&rsquo;s vibe. It has squealing guitars and synths working together on top a basic but catchy beat.</p>

<p>I will say, <em>Before and After the Storm</em> is worth picking up for Summer&rsquo;s vocals alone. It&rsquo;s also, though, one of those albums where an excellent job is done mixing things up. Musically it keeps it interesting with tracks that stand on their own, but at the same time everything works together. If you&rsquo;re a fan of goth/darkwave, definitely check out The Machine In The Garden.</p>

<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
	<meta itemprop="worstRating" content = "1">
	Rating: <span itemprop="ratingValue">4</span>/<span itemprop="bestRating">5</span></div>
</div>
<p>-<span itemprop="author">ZombieGoats</span>, <a href="http://www.headfullofnoise.com/2012/05/review-the-machine-in-the-garden-before-and-after-the-storm/" target="_blank"><span itemprop="publication">Head Full Of Noise</span></a></p>
<meta itemprop="datePublished" content="2012-05-01">
</blockquote>

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
<script src="js/retina.js" type="text/javascript"></script>
</body>
</html>
