<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<?php require_once("functions.php"); ?>
<?php
if (!empty($_GET['bcsample'])){
	switch ($_GET['bcsample']) {
#vs ep
		case "atouchofheaven":
			$stitle="A Touch of Heaven";
			$salbum="Veils and Shadows EP";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1822954752/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3967140933/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/veils-and-shadows-ep">Veils and Shadows EP by the Machine in the Garden</a></iframe>';
			break;
		case "darksplinteredheart":
			$stitle="Dark Splintered Heart";
			$salbum="Veils and Shadows EP";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1822954752/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=421910818/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/veils-and-shadows-ep">Veils and Shadows EP by the Machine in the Garden</a></iframe>';
			break;
#underworld
		case "finalform":
			$stitle="Final Form";
			$salbum="Underworld";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2989545916/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1461004532/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/underworld">Underworld by the Machine in the Garden</a></iframe>';
			break;
		case "dreamsoftheabsent":
			$stitle="Dreams of the Absent";
			$salbum="Underworld";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2989545916/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2559602341/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/underworld">Underworld by the Machine in the Garden</a></iframe>';
			break;
		case "shadowydepths":
			$stitle="Shadowy Depths";
			$salbum="Underworld";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2989545916/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1539224487/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/underworld">Underworld by the Machine in the Garden</a></iframe>';
			break;
		case "mutationengine":
			$stitle="Dark Splintered Heart (mutation engine)";
			$salbum="Underworld";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2989545916/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2098293507/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/underworld">Underworld by the Machine in the Garden</a></iframe>';
			break;
		case "cold":
			$stitle="Cold";
			$salbum="Underworld";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2989545916/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=4222673444/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/underworld">Underworld by the Machine in the Garden</a></iframe>';
			break;
#winters
		case "fallingtoo":
			$stitle="Falling, Too";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=915483868/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
		case "theseillusions":
			$stitle="These Illusions";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1327313517/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
		case "fearnomore":
			$stitle="Fear No More";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3796589062/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
		case "thesleepofangels":
			$stitle="The Sleep of Angels";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=887095575/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
		case "midnight":
			$stitle="Midnight";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=322587201/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
		case "control":
			$stitle="Control";
			$salbum="One Winter&rsquo;s Night&hellip;";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1268082389/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=504994442/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/one-winters-night">One Winter&#39;s Night&hellip; by the Machine in the Garden</a></iframe>';
			break;
#mists
		case "intrigue":
			$stitle="Intrigue";
			$salbum="Out of the Mists";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2447273622/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=193010113/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/out-of-the-mists">Out of the Mists by the Machine in the Garden</a></iframe>';
			break;
		case "unaware":
			$stitle="The Unaware";
			$salbum="Out of the Mists";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2447273622/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=4168014180/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/out-of-the-mists">Out of the Mists by the Machine in the Garden</a></iframe>';
			break;
		case "valentine":
			$stitle="Valentine";
			$salbum="Out of the Mists";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2447273622/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=334561357/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/out-of-the-mists">Out of the Mists by the Machine in the Garden</a></iframe>';
			break;
		case "herface":
			$stitle="Her Face";
			$salbum="Out of the Mists";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2447273622/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1046098047/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/out-of-the-mists">Out of the Mists by the Machine in the Garden</a></iframe>';
			break;
		case "fade":
			$stitle="Fade";
			$salbum="Out of the Mists";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2447273622/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=4014939603/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/out-of-the-mists">Out of the Mists by the Machine in the Garden</a></iframe>';
			break;
#asphodel
		case "outside":
			$stitle="Outside";
			$salbum="Asphodel";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2954040722/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1472098157/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/asphodel">Asphodel by the Machine in the Garden</a></iframe>';
			break;
		case "wonderland":
			$stitle="Wonderland";
			$salbum="Asphodel";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2954040722/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1977760143/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/asphodel">Asphodel by the Machine in the Garden</a></iframe>';
			break;
		case "clarity":
			$stitle="Clarity";
			$salbum="Asphodel";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2954040722/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1768298237/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/asphodel">Asphodel by the Machine in the Garden</a></iframe>';
			break;
		case "dawn":
			$stitle="Dawn";
			$salbum="Asphodel";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2954040722/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3312382613/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/asphodel">Asphodel by the Machine in the Garden</a></iframe>';
			break;
		case "seek":
			$stitle="Seek";
			$salbum="Asphodel";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2954040722/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3476993213/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/asphodel">Asphodel by the Machine in the Garden</a></iframe>';
			break;
#shadow puppets
		case "theinsideworld":
			$stitle="The Inside World";
			$salbum="Shadow Puppets";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=3777132984/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=924414862/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/shadow-puppets">Shadow Puppets by the Machine in the Garden</a></iframe>';
			break;
		case "winterfell":
			$stitle="Winter Fell";
			$salbum="Shadow Puppets";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=3777132984/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1212785228/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/shadow-puppets">Shadow Puppets by the Machine in the Garden</a></iframe>';
			break;
		case "mantra":
			$stitle="Mantra";
			$salbum="Shadow Puppets";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=3777132984/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1904024196/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/shadow-puppets">Shadow Puppets by the Machine in the Garden</a></iframe>';
			break;
		case "moreuntofire":
			$stitle="More Unto Fire Dreamt";
			$salbum="Shadow Puppets";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=3777132984/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=206845599/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/shadow-puppets">Shadow Puppets by the Machine in the Garden</a></iframe>';
			break;
		case "spidersbride":
			$stitle="Spider\'s Bride";
			$salbum="Shadow Puppets";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=3777132984/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=301753316/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/shadow-puppets">Shadow Puppets by the Machine in the Garden</a></iframe>';
			break;
#xv
		case "otherworld":
			$stitle="Otherworld";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1994677012/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
		case "sixdays":
			$stitle="Six Days";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2450923848/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
		case "mentalwasteland":
			$stitle="Mental Wasteland";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1677937126/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
		case "mantraremix":
			$stitle="Mantra (Shades of Grey Remix)";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2049939536/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
		case "dawnremix":
			$stitle="Dawn (On the Rocks Mix)";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1658477009/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
		case "voice":
			$stitle="Voice";
			$salbum="XV";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=318998855/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3558100039/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/xv">XV by the Machine in the Garden</a></iframe>';
			break;
#vanir
		case "vanirsingle":
			$stitle="In the Vanir (single mix)";
			$salbum="In the Vanir";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=295662979/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1820659375/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/in-the-vanir">In the Vanir by the Machine in the Garden</a></iframe>';
			break;
#before and after the storm
		case "cimmerian":
			$stitle="Cimmerian";
			$salbum="Before and After the Storm";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1943440944/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3229930633/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/before-and-after-the-storm">Before and After the Storm by the Machine in the Garden</a></iframe>';
			break;
		case "firemix":
			$stitle="Scathefire (fire mix)";
			$salbum="Before and After the Storm";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1943440944/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3595130720/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/before-and-after-the-storm">Before and After the Storm by the Machine in the Garden</a></iframe>';
			break;
		case "metallic":
			$stitle="Metallic";
			$salbum="Before and After the Storm";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1943440944/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3127672138/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/before-and-after-the-storm">Before and After the Storm by the Machine in the Garden</a></iframe>';
			break;
		case "powerandprophesy":
			$stitle="Power and Prophesy";
			$salbum="Before and After the Storm";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=1943440944/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1937194937/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/before-and-after-the-storm">Before and After the Storm by the Machine in the Garden</a></iframe>';
			break;
#miscellany
		case "fallingsoftly":
			$stitle="Falling Softly";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=1623766324/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
		case "farfromhome":
			$stitle="Far From Home";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=500638280/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
		case "machinery":
			$stitle="Machinery (mind/body mix)";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=3875519114/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
		case "misererevocal":
			$stitle="Miserere Mei (vocal)";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2841015231/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
		case "coventrycarol":
			$stitle="Coventry Carol";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2704248066/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
		case "smoothmotionmix":
			$stitle="The Unaware (smooth motion mix)";
			$salbum="Miscellany";
			$siframe='<iframe style="border: 0; width: 280px; height: 422px;" src="https://bandcamp.com/EmbeddedPlayer/album=2035639599/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/track=2859512200/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/album/miscellany">Miscellany by the Machine in the Garden</a></iframe>';
			break;
#vanir
		case "imageacoustic":
			$stitle="Image (acoustic)";
			$salbum="Image (acoustic)";
			$siframe='<iframe style="border: 0; width: 280px; height: 394px;" src="https://bandcamp.com/EmbeddedPlayer/track=1967461896/size=large/bgcol=ffffff/linkcol=de270f/tracklist=false/transparent=true/" seamless><a href="http://tmitg.bandcamp.com/track/image-acoustic">Image (acoustic) by the Machine in the Garden</a></iframe>';
			break;
		
	}
} else {
	die("no input");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>"<?=$stitle;?>"</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="Audio sample for &quot;<?=$stitle;?>&quot; from &quot;<?=$salbum;?>&quot;." />
	<meta content="minimum-scale=1.0, initial-scale=1" name="viewport" />
	<link rel="stylesheet" type="text/css" href="../tmitg.css" />
	<?php include_once("googletracking.html"); ?>
</head>

<body id="video">

<div class="movie" role="main">

<?php if (check_mobile()==true) { echo '<div style="margin:0 auto; width:280px;">'; } ?>

<?=$siframe;?>

<?php if (check_mobile()==true) { echo '</div>'; } ?>

</div>

</body>
</html>
