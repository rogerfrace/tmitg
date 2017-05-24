<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>

<!DOCTYPE html>
<html lang="en">
<? require_once("functions.php"); ?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>the Machine in the Garden - music</title>
	<meta name="copyright" content="<?=date('Y',time());?>" />
	<?php include_once("headers-additional.php"); ?>
</head>

<body id="music">

<? get_header(); ?>

<main class="mainbody">

<div id="accordion" role="tablist">
	<div class="item baats" id="baatstab" role="tab" tabindex="0" aria-controls="baats" aria-selected="false">
		<img src="albums/baatsico.jpg" class="baatsimg" alt="Before and After the Storm" role="presentation">
		<div class="detail">
			<h3>Before and After the Storm</h3>
			<p>2011</p>
		</div>
	</div>
	
	<div class="item vanir" id="vanirtab" role="tab" tabindex="0" aria-controls="vanir" aria-selected="false">
		<img src="albums/vanirico.jpg" class="vanirimg" alt="In the Vanir" role="presentation">
		<div class="detail">
			<h3>In the Vanir</h3>
			<p>2010</p>
		</div>
	</div>
	
	<div class="item xv" id="xvtab" role="tab" tabindex="0" aria-controls="xv" aria-selected="false">
		<img src="albums/xvico.jpg" class="xvimg" alt="" role="presentation">
		<div class="detail">
			<h3>XV</h3>
			<p>2007</p>
		</div>
	</div>
		
	<div class="item sp" id="sptab" role="tab" tabindex="0" aria-controls="sp" aria-selected="false">
		<img src="albums/spico.jpg" class="spimg" alt="Shadow Puppets" role="presentation">
		<div class="detail">
			<h3>Shadow Puppets</h3>
			<p>2005</p>
		</div>
	</div>
	
	<div class="item asp" id="asptab" role="tab" tabindex="0" aria-controls="asp" aria-selected="false">
		<img src="albums/asphodelico.jpg" class="aspimg" alt="Asphodel" role="presentation">
		<div class="detail">
			<h3>Asphodel</h3>
			<p>2002</p>
		</div>	
	</div>
	
	<div class="item ootm" id="ootmtab" role="tab" tabindex="0" aria-controls="ootm" aria-selected="false">
		<img src="albums/mistsico.jpg" class="ootmimg" alt="Out of the Mists" role="presentation">
		<div class="detail">
			<h3>Out of the Mists</h3>
			<p>2000</p>
		</div>	
	</div>
	
	<div class="item own" id="owntab" role="tab" tabindex="0" aria-controls="own" aria-selected="false">
		<img src="albums/wintersico.jpg" class="ownimg" alt="One Winter's Night..." role="presentation">
		<div class="detail">
			<h3>One Winter&rsquo;s Night&hellip;</h3>
			<p>1999</p>
		</div>	
	</div>
	
	<div class="item uw" id="uwtab" role="tab" tabindex="0" aria-controls="uw" aria-selected="false">
		<img src="albums/underworldico.jpg" class="uwimg" alt="Underworld" role="presentation">
		<div class="detail">
			<h3>Underworld</h3>
			<p>1997</p>
		</div>	
	</div>
	
	<div class="item vs" id="vstab" role="tab" tabindex="0" aria-controls="vs" aria-selected="false">
		<img src="albums/vsico.jpg" class="vsimg" alt="Veils and Shadows EP" role="presentation">
		<div class="detail">
			<h3>Veils and Shadows EP</h3>
			<p>1993</p>
		</div>	
	</div>
</div> <!-- /accordion -->


<section id="songlist">
	<div class="songs baats" id="baats" role="tabpanel" aria-labelledby="baatstab">
		<div class="albumcol">
			<p><a href="storm.php"><img src="albums/baats.jpg" width="200" height="200" class="cover" alt="Before and After the Storm"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("cimmerian","Cimmerian"); ?></p>
				<p><? do_mp3bc2("metallic","Metallic"); ?></p>
				<p><? do_mp3bc2("powerandprophesy","Power and Prophesy"); ?></p>
				<p><? do_mp3bc2("firemix","Scathefire (fire mix)"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("cimmerian","Cimmerian teaser"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs vanir" id="vanir" role="tabpanel" aria-labelledby="vanirtab">
		<div class="albumcol">
			<p><a href="vanir.php"><img src="albums/vanir.jpg" width="200" height="200" class="cover" alt="In the Vanir"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("vanirsingle","In the Vanir (single mix)"); ?></p>
			</div>
			<div class="videocol">
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs xv" id="xv" role="tabpanel" aria-labelledby="xvtab">
		<div class="albumcol">
			<p><a href="xv.php"><img src="albums/xv.jpg" width="200" height="200" class="cover" alt="XV"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("sixdays","Six Days"); ?></p>
				<p><? do_mp3bc2("mantraremix","Mantra (Shades of Grey Remix)"); ?></p>
				<p><? do_mp3bc2("dawnremix","Dawn (On the Rocks Mix)"); ?></p>
				<p><? do_mp3bc2("voice","Voice"); ?></p>
				<p><? do_mp3bc2("otherworld","Otherworld"); ?></p>
			</div>
			<div class="videocol">
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs sp" id="sp" role="tabpanel" aria-labelledby="sptab">
		<div class="albumcol">
			<p><a href="shadowpuppets.php"><img src="albums/sp.jpg" width="200" height="200" class="cover" alt="Shadow Puppets"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("theinsideworld","The Inside World"); ?></p>
				<p><? do_mp3bc2("winterfell","Winter Fell"); ?></p>
				<p><? do_mp3bc2("mantra","Mantra"); ?></p>
				<p><? do_mp3bc2("moreuntofire","More Unto Fire Dreamt"); ?></p>
				<p><? do_mp3bc2("spidersbride","Spider&rsquo;s Bride"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("thissilence","This Silence (live)"); ?></p>
				<p><? do_video("theinsideworld","The Inside World (live)"); ?></p>
				<p><? do_video("suspend","Suspend (live)"); ?></p>
			</div>
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs asp" id="asp" role="tabpanel" aria-labelledby="asptab">
		<div class="albumcol">
			<p><a href="asphodel.php"><img src="albums/asphodel.jpg" width="200" height="200" class="cover" alt="Asphodel"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("clarity","Clarity"); ?></p>
				<p><? do_mp3bc2("dawn","Dawn"); ?></p>
				<p><? do_mp3bc2("outside","Outside"); ?></p>
				<p><? do_mp3bc2("seek","Seek"); ?></p>
				<p><? do_mp3bc2("wonderland","Wonderland"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("masks","Masks (live)"); ?></p>
				<p><? do_video("outside","Outside (live)"); ?></p>
				<p><? do_video("outside-amv","Outside"); ?></p>
				<p><? do_video("time","Time (live)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs ootm" id="ootm" role="tabpanel" aria-labelledby="ootmtab">
		<div class="albumcol">
			<p><a href="mists.php"><img src="albums/mists.jpg" width="224" height="200" class="cover" alt="Out of the Mists"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("fade","Fade"); ?></p>
				<p><? do_mp3bc2("herface","Her Face"); ?></p>
				<p><? do_mp3bc2("intrigue","Intrigue"); ?></p>
				<p><? do_mp3bc2("unaware","The Unaware"); ?></p>
				<p><? do_mp3bc2("valentine","Valentine"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("everythingsheis","Every Thing She Is (live)"); ?></p>
				<p><? do_video("failure","Failure (live)"); ?></p>
				<p><? do_video("unaware","The Unaware"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs own" id="own" role="tabpanel" aria-labelledby="owntab">
		<div class="albumcol">
			<p><a href="winters.php"><img src="albums/winters.jpg" width="224" height="200" class="cover" alt="One Winter's Night..."></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("control","Control"); ?></p>
				<p><? do_mp3bc2("fallingtoo","Falling, Too"); ?></p>
				<p><? do_mp3bc2("fearnomore","Fear No More"); ?></p>
				<p><? do_mp3bc2("midnight","Midnight"); ?></p>
				<p><? do_mp3bc2("thesleepofangels","The Sleep of Angels"); ?></p>
				<p><? do_mp3bc2("theseillusions","These Illusions"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("control","Control (live)"); ?></p>
				<p><? do_video("control-vid","Control"); ?></p>
				<p><? do_video("miserere-fan","Miserere Mei (Fan Video)"); ?></p>
				<p><? do_video("miserere-fan2","Miserere Mei (Fan Video)"); ?></p>
				<p><? do_video("sleepofangels","The Sleep of Angels (live)"); ?></p>
				<p><? do_video("sleepofangels-fan","The Sleep of Angels (Fan Video)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs uw" id="uw" role="tabpanel" aria-labelledby="uwtab">
		<div class="albumcol">
			<p><a href="underworld.php"><img src="albums/underworld.jpg" width="200" height="200" class="cover" alt="Underworld"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("finalform","Final Form"); ?></p>
				<p><? do_mp3bc2("dreamsoftheabsent","Dreams of the Absent"); ?></p>
				<p><? do_mp3bc2("shadowydepths","Shadowy Depths"); ?></p>
				<p><? do_mp3bc2("mutationengine","Dark Splintered Heart (Mutation Engine)"); ?></p>
				<p><? do_mp3bc2("cold","Cold"); ?></p>
			</div>
			<div class="videocol">
				<h4>video clips</h4>
				<p><? do_video("finalform","Final Form (live '97)"); ?></p>
				<p><? do_video("finalform2","Final Form (live '00)"); ?></p>
				<p><? do_video("finalform-fan","Final Form (Fan Video)"); ?></p>
			</div>	
		</div>
	</div>
	<div class="clearleft"></div>

	<div class="songs vs" id="vs" role="tabpanel" aria-labelledby="vstab">
		<div class="albumcol">
			<p><a href="vs.php"><img src="albums/vs.jpg" width="200" height="200" class="cover" alt="Veils and Shadows EP"></a></p>
		</div>
		<div class="listwrap">
			<div class="audiocol">
				<h4>mp3 samples</h4>
				<p><? do_mp3bc2("atouchofheaven","A Touch of Heaven"); ?></p>
				<p><? do_mp3bc2("darksplinteredheart","Dark Splintered Heart"); ?></p>
			</div>
			<div class="videocol">
			</div>	
		</div>
	</div>
</section> <!-- /songlist -->


</main> <!-- /mainbody -->

<!-- accordion/tabs javascript -->
<script type="text/javascript">
$(document).ready(function() {
	/* allow arrow usage in accordion */
	$("#accordion").keydown(function(f) { /* right */
		if (f.keyCode == 39) {
			$(".item:focus").next().focus();
		}
		if (f.keyCode == 37) { /* left */
			$(".item:focus").prev().focus();
		}
	});
	
	/* set initial song display */
	$("#songlist div.songs:visible").hide();
	$("#songlist div.songs.baats").show();
	$("#accordion .item").addClass('fade');
	$("#accordion .item img").attr("aria-hidden","true");
	$("#accordion .baats").removeClass('fade').attr("aria-selected","true");

	/* all of the click activations */
	$("#accordion .item.baats").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .baats").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.baats").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'baats');
		}
	});
	$("#accordion .item.vanir").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .vanir").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.vanir").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'vanir');
		}
	});
	$("#accordion .item.xv").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .xv").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.xv").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'xv');
		}
	});
	$("#accordion .item.sp").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .sp").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.sp").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'shadowpuppets');
		}
	});
	$("#accordion .item.asp").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .asp").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.asp").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'asphodel');
		}
	});
	$("#accordion .item.ootm").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .ootm").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.ootm").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'mists');
		}
	});
	$("#accordion .item.own").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .own").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.own").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'winters');
		}
	});
	$("#accordion .item.uw").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .uw").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.uw").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'underworld');
		}
	});
	$("#accordion .item.vs").on("click keydown",function(e) {
		if((e.keyCode !== 9)&&(e.keyCode !== 39)&&(e.keyCode !== 37)){
			$("#accordion .item").addClass('fade').attr("aria-selected","false");
			$("#accordion .vs").removeClass('fade').attr("aria-selected","true");
			$("#songlist div.songs:visible").hide();
			$("#songlist div.songs.vs").show();
			ga('send', 'event', 'MusicPage', 'ArtClick', 'vsep');
		}
	});
	$(".audiocol a").click(function() {
		ga('send', 'event', 'MusicPage', 'AudioClick', this.href);
	});
	$(".videocol a").click(function() {
		ga('send', 'event', 'MusicPage', 'VideoClick', this.href);
	});

});
</script>

</body>
</html>
