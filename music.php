<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - music</title>
	<meta name="description" content="the Machine in the Garden music audio and video samples.">
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="music">
	<span id="skip-links">
		<a class="wai" href="#main">Skip to Main</a>
	</span>

<?php get_header(); ?>

<main id="main" class="mainbody">

<h1 class="wai">the Machine in the Garden music samples</h1>

<!-- tabs -->
<!-- based on https://www.w3.org/TR/wai-aria-practices-1.1/examples/tabs/tabs-2/tabs.html -->
<div id="accordion" role="tablist" aria-label="album list">
	<div class="item places" id="placestab" role="tab" tabindex="-1" aria-controls="places" aria-selected="false">
		<img src="albums/placesico.jpg" class="placesimg" alt="Places in Between">
		<div class="detail">
			<p class="tabtitle">Places in Between</p>
			<time>2020</time>
		</div>
	</div>

	<div class="item image" id="imagetab" role="tab" tabindex="-1" aria-controls="image" aria-selected="false">
		<img src="albums/imageacousticico.jpg" class="imageimg" alt="Image (acoustic)">
		<div class="detail">
			<p class="tabtitle">Image (acoustic)</p>
			<time>2017</time>
		</div>
	</div>

	<div class="item baats" id="baatstab" role="tab" tabindex="-1" aria-controls="baats" aria-selected="false">
		<img src="albums/baatsico.jpg" class="baatsimg" alt="Before and After the Storm">
		<div class="detail">
			<p class="tabtitle">Before and After the Storm</p>
			<time>2011</time>
		</div>
	</div>
	
	<div class="item vanir" id="vanirtab" role="tab" tabindex="-1" aria-controls="vanir" aria-selected="false">
		<img src="albums/vanirico.jpg" class="vanirimg" alt="In the Vanir">
		<div class="detail">
			<p class="tabtitle">In the Vanir</p>
			<time>2010</time>
		</div>
	</div>
	
	<div class="item xv" id="xvtab" role="tab" tabindex="-1" aria-controls="xv" aria-selected="false">
		<img src="albums/xvico.jpg" class="xvimg" alt="">
		<div class="detail">
			<p class="tabtitle">XV</p>
			<time>2007</time>
		</div>
	</div>
		
	<div class="item sp" id="sptab" role="tab" tabindex="-1" aria-controls="sp" aria-selected="false">
		<img src="albums/spico.jpg" class="spimg" alt="Shadow Puppets">
		<div class="detail">
			<p class="tabtitle">Shadow Puppets</p>
			<time>2005</time>
		</div>
	</div>
	
	<div class="item asp" id="asptab" role="tab" tabindex="-1" aria-controls="asp" aria-selected="false">
		<img src="albums/asphodelico.jpg" class="aspimg" alt="Asphodel">
		<div class="detail">
			<p class="tabtitle">Asphodel</p>
			<time>2002</time>
		</div>	
	</div>
	
	<div class="item ootm" id="ootmtab" role="tab" tabindex="-1" aria-controls="ootm" aria-selected="false">
		<img src="albums/mistsico.jpg" class="ootmimg" alt="Out of the Mists">
		<div class="detail">
			<p class="tabtitle">Out of the Mists</p>
			<time>2000</time>
		</div>	
	</div>
	
	<div class="item own" id="owntab" role="tab" tabindex="-1" aria-controls="own" aria-selected="false">
		<img src="albums/wintersico.jpg" class="ownimg" alt="One Winter's Night...">
		<div class="detail">
			<p class="tabtitle">One Winter&rsquo;s Night&hellip;</p>
			<time>1999</time>
		</div>	
	</div>
	
	<div class="item uw" id="uwtab" role="tab" tabindex="-1" aria-controls="uw" aria-selected="false">
		<img src="albums/underworldico.jpg" class="uwimg" alt="Underworld">
		<div class="detail">
			<p class="tabtitle">Underworld</p>
			<time>1997</time>
		</div>	
	</div>
	
	<div class="item vs" id="vstab" role="tab" tabindex="-1" aria-controls="vs" aria-selected="false">
		<img src="albums/vsico.jpg" class="vsimg" alt="Veils and Shadows EP">
		<div class="detail">
			<p class="tabtitle">Veils and Shadows EP</p>
			<time>1993</time>
		</div>	
	</div>
</div>
<!-- /tabs -->

<!-- tabpanels -->
<section id="songlist" aria-label="Album Samples">

	<div class="songs places" id="places" role="tabpanel" tabindex="0" aria-labelledby="placestab">
		<div class="albumcol">
			<p><a href="places.php"><img src="albums/places.jpg" width="200" height="200" class="cover" alt="more information about Places in Between"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("coldstorm","Cold Storm"); ?></p>
				<p><?php do_mp3bc2("beyond","Beyond"); ?></p>
				<p><?php do_mp3bc2("propheticbird","Prophetic Bird"); ?></p>
				<p><?php do_mp3bc2("spiritandimage","Spirit and Image"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("teaser","Places in Between teaser"); ?></p>
				<p><?php do_video("coldstorm","Cold Storm"); ?></p>
				<p><?php do_video("athousandyears","A Thousand Years of War"); ?></p>
				<p><?php do_video("findaway","Find a Way"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs image" id="image" role="tabpanel" tabindex="0" aria-labelledby="imagetab">
		<div class="albumcol">
			<p><a href="imageacoustic.php"><img src="albums/imageacoustic.jpg" width="200" height="200" class="cover" alt="more information about Image acoustic"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("imageacoustic","Image (acoustic)"); ?></p>
			</div>
			<div class="videocol">
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs baats" id="baats" role="tabpanel" tabindex="0" aria-labelledby="baatstab">
		<div class="albumcol">
			<p><a href="storm.php"><img src="albums/baats.jpg" width="200" height="200" class="cover" alt="more information about Before and After the Storm"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("cimmerian","Cimmerian"); ?></p>
				<p><?php do_mp3bc2("metallic","Metallic"); ?></p>
				<p><?php do_mp3bc2("powerandprophesy","Power and Prophesy"); ?></p>
				<p><?php do_mp3bc2("firemix","Scathefire (fire mix)"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("cimmerian","Cimmerian teaser"); ?></p>
				<p><?php do_video("vanir","In the Vanir (live)"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs vanir" id="vanir" role="tabpanel" tabindex="0" aria-labelledby="vanirtab">
		<div class="albumcol">
			<p><a href="vanir.php"><img src="albums/vanir.jpg" width="200" height="200" class="cover" alt="more information about In the Vanir"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("vanirsingle","In the Vanir (single mix)"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("vanir","In the Vanir (live)"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs xv" id="xv" role="tabpanel" tabindex="0" aria-labelledby="xvtab">
		<div class="albumcol">
			<p><a href="xv.php"><img src="albums/xv.jpg" width="200" height="200" class="cover" alt="more information about XV"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("sixdays","Six Days"); ?></p>
				<p><?php do_mp3bc2("mantraremix","Mantra (Shades of Grey Remix)"); ?></p>
				<p><?php do_mp3bc2("dawnremix","Dawn (On the Rocks Mix)"); ?></p>
				<p><?php do_mp3bc2("voice","Voice"); ?></p>
				<p><?php do_mp3bc2("otherworld","Otherworld"); ?></p>
			</div>
			<div class="videocol">
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs sp" id="sp" role="tabpanel" tabindex="0" aria-labelledby="sptab">
		<div class="albumcol">
			<p><a href="shadowpuppets.php"><img src="albums/sp.jpg" width="200" height="200" class="cover" alt="more information about Shadow Puppets"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("theinsideworld","The Inside World"); ?></p>
				<p><?php do_mp3bc2("winterfell","Winter Fell"); ?></p>
				<p><?php do_mp3bc2("mantra","Mantra"); ?></p>
				<p><?php do_mp3bc2("moreuntofire","More Unto Fire Dreamt"); ?></p>
				<p><?php do_mp3bc2("spidersbride","Spider&rsquo;s Bride"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("thissilence","This Silence (live)"); ?></p>
				<p><?php do_video("theinsideworld","The Inside World (live)"); ?></p>
				<p><?php do_video("suspend","Suspend (live)"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs asp" id="asp" role="tabpanel" tabindex="0" aria-labelledby="asptab">
		<div class="albumcol">
			<p><a href="asphodel.php"><img src="albums/asphodel.jpg" width="200" height="200" class="cover" alt="more information about Asphodel"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("clarity","Clarity"); ?></p>
				<p><?php do_mp3bc2("dawn","Dawn"); ?></p>
				<p><?php do_mp3bc2("outside","Outside"); ?></p>
				<p><?php do_mp3bc2("seek","Seek"); ?></p>
				<p><?php do_mp3bc2("wonderland","Wonderland"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("masks","Masks (live)"); ?></p>
				<p><?php do_video("outside","Outside (live)"); ?></p>
				<p><?php do_video("outside-amv","Outside"); ?></p>
				<p><?php do_video("time","Time (live)"); ?></p>
				<p><?php do_video("open2020","Open (Reimagined)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs ootm" id="ootm" role="tabpanel" tabindex="0" aria-labelledby="ootmtab">
		<div class="albumcol">
			<p><a href="mists.php"><img src="albums/mists.jpg" width="224" height="200" class="cover" alt="more information about Out of the Mists"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("fade","Fade"); ?></p>
				<p><?php do_mp3bc2("herface","Her Face"); ?></p>
				<p><?php do_mp3bc2("intrigue","Intrigue"); ?></p>
				<p><?php do_mp3bc2("unaware","The Unaware"); ?></p>
				<p><?php do_mp3bc2("valentine","Valentine"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("everythingsheis","Every Thing She Is (live)"); ?></p>
				<p><?php do_video("failure","Failure (live)"); ?></p>
				<p><?php do_video("unaware","The Unaware"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs own" id="own" role="tabpanel" tabindex="0" aria-labelledby="owntab">
		<div class="albumcol">
			<p><a href="winters.php"><img src="albums/winters.jpg" width="224" height="200" class="cover" alt="more information about One Winter's Night..."></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("control","Control"); ?></p>
				<p><?php do_mp3bc2("fallingtoo","Falling, Too"); ?></p>
				<p><?php do_mp3bc2("fearnomore","Fear No More"); ?></p>
				<p><?php do_mp3bc2("midnight","Midnight"); ?></p>
				<p><?php do_mp3bc2("thesleepofangels","The Sleep of Angels"); ?></p>
				<p><?php do_mp3bc2("theseillusions","These Illusions"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("control","Control (live)"); ?></p>
				<p><?php do_video("control-vid","Control"); ?></p>
				<p><?php do_video("miserere-fan","Miserere Mei (Fan Video)"); ?></p>
				<p><?php do_video("miserere-fan2","Miserere Mei (Fan Video)"); ?></p>
				<p><?php do_video("sleepofangels","The Sleep of Angels (live)"); ?></p>
				<p><?php do_video("sleepofangels-fan","The Sleep of Angels (Fan Video)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs uw" id="uw" role="tabpanel" tabindex="0" aria-labelledby="uwtab">
		<div class="albumcol">
			<p><a href="underworld.php"><img src="albums/underworld.jpg" width="200" height="200" class="cover" alt="more information about Underworld"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("finalform","Final Form"); ?></p>
				<p><?php do_mp3bc2("dreamsoftheabsent","Dreams of the Absent"); ?></p>
				<p><?php do_mp3bc2("shadowydepths","Shadowy Depths"); ?></p>
				<p><?php do_mp3bc2("mutationengine","Dark Splintered Heart (Mutation Engine)"); ?></p>
				<p><?php do_mp3bc2("cold","Cold"); ?></p>
			</div>
			<div class="videocol">
				<h2>video clips</h2>
				<p><?php do_video("finalform","Final Form (live '97)"); ?></p>
				<p><?php do_video("finalform2","Final Form (live '00)"); ?></p>
				<p><?php do_video("finalform-fan","Final Form (Fan Video)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs vs" id="vs" role="tabpanel" tabindex="0" aria-labelledby="vstab">
		<div class="albumcol">
			<p><a href="vs.php"><img src="albums/vs.jpg" width="200" height="200" class="cover" alt="more information about Veils and Shadows EP"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h2>audio samples</h2>
				<p><?php do_mp3bc2("atouchofheaven","A Touch of Heaven"); ?></p>
				<p><?php do_mp3bc2("darksplinteredheart","Dark Splintered Heart"); ?></p>
			</div>
			<div class="videocol">
			</div>	
		</div>
	</div>
</section>
<!-- /tabpanels -->


</main>

<!-- accordion/tabs javascript -->
<script type="text/javascript">
$(document).ready(function() {
	/* allow arrow usage in accordion */
	$("#accordion").keydown(function(f) {
		if (f.keyCode == 39) { /* right */
			$(".item:focus").next().focus();
		}
		if (f.keyCode == 37) { /* left */
			$(".item:focus").prev().focus();
		}
	});
	
	/* set initial song display */
	$("#songlist div.songs:visible").hide();
	$("#songlist div.songs.places").show();
	$("#accordion .item").addClass('fade');
	$("#accordion .item img").attr("aria-hidden","true");
	$("#accordion .places").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");

	/* all of the click activations */
	$("#accordion .item.places").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .places").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.places").show();
		}
	});
	$("#accordion .item.image").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .image").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.image").show();
		}
	});
	$("#accordion .item.baats").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .baats").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.baats").show();
		}
	});
	$("#accordion .item.vanir").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .vanir").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.vanir").show();
		}
	});
	$("#accordion .item.xv").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .xv").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.xv").show();
		}
	});
	$("#accordion .item.sp").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .sp").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.sp").show();
		}
	});
	$("#accordion .item.asp").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .asp").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.asp").show();
		}
	});
	$("#accordion .item.ootm").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .ootm").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.ootm").show();
		}
	});
	$("#accordion .item.own").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .own").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.own").show();
		}
	});
	$("#accordion .item.uw").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .uw").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.uw").show();
		}
	});
	$("#accordion .item.vs").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false").attr("tabindex","-1");
			$("#accordion .vs").removeClass('fade').attr("aria-selected","true").attr("tabindex","0");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.vs").show();
		}
	});

});
</script>

</body>
</html>
